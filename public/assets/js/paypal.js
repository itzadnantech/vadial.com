
paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
        sandbox: 'AUhEz8PX1JzuKnImJE194MnmPT_BGre3SvnFBR8B_QX8KxmtwTtrVpiun7TUoPriUXGkTtPFCDQhf_ir',
        production: 'demo_production_client_id'
    },

    // Customize button (optional)
    locale: 'en_US',
    style: {
        size: 'responsive',
        color: 'gold',
        shape: 'rect',
        label : 'pay',
        tagline: 'false',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
        let selected_items = [];
        $('.plan_selected, .optional_selected').each(function() {
            let item_type;
            if ($(this).hasClass('plan_selected'))
                item_type = 'Plan';
            else
                item_type = 'Optional';
            var selected_item = {
                name: $(this).children('div:first').clone().children().remove().end().text().trim(),
                description: item_type,
                quantity: '1',
                price: $(this).val().substring(1),
                currency: 'USD'
            };
            selected_items.push(selected_item);
        });

        return actions.payment.create({
            transactions: [{
                amount: {
                    total: $('.all_total').html().substring(9),
                    currency: 'USD',
                    // details: {
                    //     subtotal: '30.00',
                    //     tax: '0.07',
                    //     shipping: '0.03',
                    //     handling_fee: '1.00',
                    //     shipping_discount: '-1.00',
                    //     insurance: '0.01'
                    // }
                },
                // description: 'The payment transaction description.',
                // custom: '90048630024435',
                //invoice_number: '12345', Insert a unique invoice number
                // payment_options: {
                //     allowed_payment_method: 'INSTANT_FUNDING_SOURCE'
                // },
                // soft_descriptor: 'ECHI5786786',
                item_list: {
                    items: selected_items,
                    // items: [
                    //     {
                    //         name: 'hat',
                    //         description: 'Brown hat.',
                    //         quantity: '5',
                    //         price: '3',
                    //         tax: '0.01',
                    //         sku: '1',
                    //         currency: 'USD'
                    //     },
                    //     {
                    //         name: 'handbag',
                    //         description: 'Black handbag.',
                    //         quantity: '1',
                    //         price: '15',
                    //         tax: '0.02',
                    //         sku: 'product34',
                    //         currency: 'USD'
                    //     }],
                    // shipping_address: {
                    //     recipient_name: 'Brian Robinson',
                    //     line1: '4th Floor',
                    //     line2: 'Unit #34',
                    //     city: 'San Jose',
                    //     country_code: 'US',
                    //     postal_code: '95131',
                    //     phone: '011862212345678',
                    //     state: 'CA'
                    // }
                }
            }],
            // note_to_payer: 'Contact us for any questions on your order.'
        });
    },

    // Execute the payment
    onAuthorize: function(data, actions) {
        return actions.payment.execute().then(function() {
            // Show a confirmation message to the buyer
            $('#payment').modal('hide');

            data = new FormData();
            data.append( 'user_name', $('#user_name').val());
            data.append( 'email', $('#email').val());
            data.append( 'payment_success', '1');

            $.ajax({
                type: "POST",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: root_url + '/confirm_payment',
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data)
                {
                    if (data === 'PaymentSuccessful')
                        swal("Payment! Successful", "Congratulations", "success", {
                            buttons: true,
                            timer: 1500,
                        }).then(function() {
                            window.location.replace(root_url);
                            // window.location.href = root_url;
                        });
                    else
                        swal("Payment! Failed", 'Please Contact Administration', "error");
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    swal("Error",textStatus + XMLHttpRequest + errorThrown, "error");
                }
            });

        });
    }
}, '#paypal-button');

