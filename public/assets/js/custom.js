
async function NotImplemented() {
    swal('Implementing');
}

function remove_user(index_url) {
    swal({
        title: "Are you sure?",
        text: "You want to Remove User",
        icon: "warning",
        buttons: ["No", "Yes"],
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url: index_url,
                context: document.body
            }).done(function(data) {
                if (data === 'DeletedSuccessfully')
                    swal("Remove! Successful", "User Removed", "success", {
                        buttons: false,
                        timer: 1000,
                    }).then(function() { window.location.reload(false); });
                else if (data === 'NotDeleted')
                    swal("Remove! Failed", "Unable to Remove User", "warning", {
                        buttons: false,
                        timer: 1000,
                    });
                else
                    swal("Remove! Failed", data, "error");
            });
        }
    });
};

$(document).ready(function() {
    $('#admin_image_file').change(function(e){
        data = new FormData();
        data.append('image', $(this)[0].files[0]);
        data.append('user_id', $('#user_id').val());

        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: root_url + "/super/change_admin_image",
            type: "POST",
            data: data,
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            success: function(data)
            {
                console.log(data);
                if (data === 'UpdateSuccessfully')
                    swal("Update! Successful", "Profile Image Changed", "success", {
                        buttons: false,
                        timer: 1000,
                    }).then(function() {
                        window.location.reload();
                    });
                else if (data === 'NotUpdated')
                    swal("Update! Failed", "Same Input Data", "warning");
                else
                    swal("Update! Failed", data, "error");
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log(XMLHttpRequest, textStatus, errorThrown);
                swal("Error",textStatus + XMLHttpRequest + errorThrown, "error");
            }
        });
    });

    $('#account_image_file').change(function(e){
        data = new FormData();
        data.append('image', $(this)[0].files[0]);
        data.append('user_id', $('#user_id').val());

        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: root_url + "/admin/account/change_account_image",
            type: "POST",
            data: data,
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            success: function(data)
            {
                console.log(data);
                if (data === 'UpdateSuccessfully')
                    swal("Update! Successful", "Profile Image Changed", "success", {
                        buttons: false,
                        timer: 1000,
                    }).then(function() {
                        window.location.reload();
                    });
                else if (data === 'NotUpdated')
                    swal("Update! Failed", "Same Input Data", "warning");
                else
                    swal("Update! Failed", data, "error");
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log(XMLHttpRequest, textStatus, errorThrown);
                swal("Error",textStatus + XMLHttpRequest + errorThrown, "error");
            }
        });
    });

    $("#login_form").submit(function(e) {
        e.preventDefault();
        if ($('#g-recaptcha-response').val() === ""){
            $("#recaptcha").after('<label for="recaptcha" class="error" style="color: red">Please solve reCaptcha.</label>');
        }
        else {
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function(data)
                {
                    if (data === 'LoginSuccessful')
                        swal("Login! Successful", "Welcome", "success", {
                            buttons: false,
                            timer: 1000,
                        }).then(function() {
                            // window.location.replace(root_url);
                            window.location.href = root_url;
                        });
                    else if (data === 'EmailNotFound')
                        swal("Login! Failed", "Email Not Found", "warning");
                    else if (data === 'WrongPassword')
                        swal("Login! Failed", "Wrong Password", "warning");
                    else
                        swal("Login! Failed", data, "error");
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    swal("Error",textStatus + XMLHttpRequest + errorThrown, "error");
                }
            });
        }
    });

    // Registration Section Start
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;

    if($('#plan_radio_group').find('.plan_selected').length !== 0)
        $('.total_plan').html("Total : " + $('#plan_radio_group').find('.plan_selected').val());
    function optional_selection(element){
        validate_inputs(element);
        var total_a = parseFloat($('.total_plan').html().substring(9)) + parseInt($('.total_optional').html().substring(9));
        $('.all_total').html("Total : $" + total_a);
    }

    function validate_inputs(element){
        current_fs = $(element).parent();
        next_fs = $(element).parent().next();

        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();

        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {

                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({'opacity': opacity});
            },
            duration: 600
        });
    }

    $('.plan_bt').click(function(){
        if($('#plan_radio_group').find('.plan_selected').length === 0 || !$(this).hasClass("plan_selected")) {
            $('.plan_selected').removeClass("plan_selected");
            $('.total_plan').html("Total : " + $(this).val());
            $(this).addClass("plan_selected");
        }
        else {
            $('.total_plan').html("Total : $0");
            $(this).removeClass("plan_selected");
        }
    });

    $('.optional_bt').click(function(){
        if ($(this).hasClass("optional_selected")) {
            var ammount = Number($('.total_optional').html().substring(9)) - Number($(this).val().substring(1));
            $('.total_optional').html("Total : $" + ammount);
            $(this).removeClass("optional_selected");
        }
        else {
            var ammount = Number($('.total_optional').html().substring(9)) + Number($(this).val().substring(1));
            $('.total_optional').html("Total : $" + ammount);
            $(this).addClass("optional_selected");
        }
    });

    $(".next").click(function(){
        const $this = this;
        if($(this).attr('id') === "first"){
            if ($("#email").valid() === true && $("#password").valid() === true && $("#re_password").valid() === true ) {
                let data = new FormData();
                data.append('email', $('#email').val());
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: root_url + "/verify_user",
                    type: "POST",
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function(data)
                    {
                        if (data !== "Exist"){
                            if ($("#password").val() === $("#re_password").val())
                                validate_inputs($this);
                            else
                                $("#re_password").after('<label for="re_password" class="error" style="">Password mismatch.</label>');
                        }
                        else
                            $("#email").after('<label for="email" class="error" style="">Email already exist.</label>');
                    }
                });
            }
        }
        if($(this).attr('id') === "second"){
            if ($("#user_name").valid() === true && $("#first_name").valid() === true && $("#last_name").valid() === true && $("#phone_number").valid() === true ) {
                let data = new FormData();
                data.append('user_name', $('#user_name').val());
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: root_url + "/verify_user",
                    type: "POST",
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function(data)
                    {
                        if (data !== "Exist"){
                            validate_inputs($this);
                        }
                        else
                            $("#user_name").after('<label for="user_name" class="error" style="">Username already exist.</label>');
                    }
                });
            }
        }
        if($(this).attr('id') === "third"){
            if(parseFloat($('.total_plan').html().substring(9)) > 0){
                validate_inputs(this);
            }
            else {
                swal("Failed!", "Please select one Plan", "warning");
            }
        }
        if($(this).attr('id') === "forth"){
            if (parseInt($('.total_optional').html().substring(9)) <= 0){
                swal({
                    title: "Are you sure?",
                    text: "You want to Skip Optional",
                    icon: "warning",
                    buttons: ["No", "Yes"],
                    dangerMode: true,
                }).then((skip_optional) => {
                    if (skip_optional) {
                        optional_selection(this);
                    }
                });
            }
            else {
                optional_selection(this);
            }
        }
    });

    $(".previous").click(function(){

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
            },
            duration: 600
        });
    });

    $('.radio-group .radio').click(function(){
        $(this).parent().find('.radio').removeClass('selected');
        $(this).addClass('selected');
    });

    $(".submit").click(function(){
        return false;
    })

    $('.alert-danger').hide();
    let user_id = null;
    $("#register_form").submit(function(e) {
        e.preventDefault();
        if ($('#agree_term').prop("checked")){
            let form_data = new FormData(this);
            if (user_id !== null)
                form_data.append( 'user_id', user_id );
            form_data.append( 'plan', $('.total_plan').html().substring(9) );
            form_data.append( 'optional', $('.total_optional').html().substring(9) );
            form_data.append( 'total', $('.all_total').html().substring(8) );

            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: form_data,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data)
                {
                    if (data['response'] === 'RegisterSuccessful'){
                        if ("user_id" in data)
                            user_id = data['user_id'];
                        swal("Registration! Successful", "Please Select Payment Method", "success", {
                            buttons: false,
                            timer: 1500,
                        }).then(function() {
                            $('#payment').modal('show');
                            // window.location.replace(root_url);
                            // window.location.href = root_url;
                        });
                    }
                    else if (data['response'] === 'UserNameAlreadyExist')
                        swal("Registration! Failed", "UserName Already Exist", "warning");
                    else if (data['response'] === 'EmailAlreadyExist')
                        swal("Registration! Failed", "Email Already Exist", "warning");
                    else if (data['response'] === 'PasswordMismatch')
                        swal("Registration! Failed", "Password Mismatch", "warning");
                    else if (data['response'] === 'InvalidInput')
                        swal("Registration! Failed", "Invalid Inputs", "warning");
                    else if (data['response'] === 'InvalidRequest')
                        swal("Registration! Failed", "Invalid Request", "warning");
                    else if (data['response'] === 'MailServerConnectionFailed')
                        swal("Registration! Failed", "Mail Server Connection Failed", "warning");
                    else if (data['response'] === 'RegistrationFailed')
                        swal("Registration! Failed", "Database Error", "warning");
                    else
                        swal("Registration! Failed", data.toString(), "error");
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    if (XMLHttpRequest['statusText'] === "Unprocessable Entity"){
                        $('.alert-danger').show();
                        for (let i=0; i<Object.entries(XMLHttpRequest['responseJSON']['errors']).length; i++){
                            for (let j=0; j<Object.entries(XMLHttpRequest['responseJSON']['errors'])[i][1].length; j++){
                                $('#validation_errors').append('<li>' + Object.entries(XMLHttpRequest['responseJSON']['errors'])[i][1][j] + '</li>')
                            }
                        }
                    }
                    else
                        swal("Error",textStatus + XMLHttpRequest + errorThrown, "error");
                }
            });
        }
        else {
            swal("Registration! Paused", "Please Accept Terms and Services", "warning");
        }
    });
    // Registration Section End

    $('#change_image').change(function(e){
        data = new FormData();
        data.append('image', $(this)[0].files[0]);
        data.append('user_id', $('#user_id').val());

        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: root_url + "/change_image",
            type: "POST",
            data: data,
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            success: function(data)
            {
                console.log(data);
                if (data === 'UpdateSuccessfully')
                    swal("Update! Successful", "Profile Image Changed", "success", {
                        buttons: false,
                        timer: 1000,
                    }).then(function() {
                        window.location.reload();
                    });
                else if (data === 'NotUpdated')
                    swal("Update! Failed", "Same Input Data", "warning");
                else
                    swal("Update! Failed", data, "error");
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log(XMLHttpRequest, textStatus, errorThrown);
                swal("Error",textStatus + XMLHttpRequest + errorThrown, "error");
            }
        });
    });

    $("#change_email_form").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            success: function(data)
            {
                if (data === 'UpdateSuccessfully')
                    swal("Update! Successful", "Email Changed", "success", {
                        buttons: false,
                        timer: 1000,
                    });
                else if (data === 'NotUpdated')
                    swal("Update! Failed", "Same Input Data", "warning");
                else
                    swal("Update! Failed", data, "error");
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                swal("Error",textStatus + XMLHttpRequest + errorThrown, "error");
            }
        });
    });

    $("#change_account_form").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            success: function(data)
            {
                if (data === 'UpdateSuccessfully')
                    swal("Update! Successful", "Account Information Changed", "success", {
                        buttons: false,
                        timer: 1000,
                    }).then(function() {
                        window.location.reload();
                    });
                else if (data === 'NotUpdated')
                    swal("Update! Failed", "Same Input Data", "warning");
                else
                    swal("Update! Failed", data, "error");
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                swal("Error",textStatus + XMLHttpRequest + errorThrown, "error");
            }
        });
    });

    $("#change_password_form").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            success: function(data)
            {
                if (data === 'UpdateSuccessfully')
                    swal("Update! Successful", "Password Changed", "success", {
                        buttons: false,
                        timer: 2000,
                    });
                else if (data === 'SamePassword')
                    swal("Update! Failed", "Old and New Passwords are Same", "warning");
                else if (data === 'PasswordMismatch')
                    swal("Update! Failed", "Password Mismatch", "warning");
                else if (data === 'IncorrectOldPassword')
                    swal("Update! Failed", "Incorrect Old Password", "warning");
                else if (data === 'NotUpdated')
                    swal("Update! Failed", "Same Input Data", "warning");
                else
                    swal("Update! Failed", data, "error");
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                swal("Error",textStatus + XMLHttpRequest + errorThrown, "error");
            }
        });
    });

    $("#add_account_form").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            success: function(data)
            {
                if (data === 'RegisterSuccessful')
                    swal("Registration! Successful", "Account Added", "success", {
                        buttons: false,
                        timer: 1000,
                    }).then(function() {
                        window.location.reload(false);
                    });
                else if (data === 'UserNameAlreadyExist')
                    swal("Registration! Failed", "UserName Already Exist", "warning");
                else if (data === 'EmailAlreadyExist')
                    swal("Registration! Failed", "Email Already Exist", "warning");
                else if (data === 'PasswordMismatch')
                    swal("Registration! Failed", "Password Mismatch", "warning");
                else if (data === 'InvalidInput')
                    swal("Registration! Failed", "Invalid Inputs", "warning");
                else if (data === 'InvalidRequest')
                    swal("Registration! Failed", "Invalid Request", "warning");
                else if (data === 'RegistrationFailed')
                    swal("Registration! Failed", "Database Error", "warning");
                else
                    swal("Registration! Failed", data, "error");
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                swal("Error",textStatus + XMLHttpRequest + errorThrown, "error");
            }
        });
    });
});
