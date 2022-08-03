<html>

<head>
    @include('admin.template.head')
</head>

<body>
@include('admin.template.header', ['tab' => 'campaigns'])
<div class="content">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            <ul class="navbar-nav side-bar">
                <li class="nav-item">
                    <a class="nav-link" href="campaigns.html">
                        <h6  class="cool-link color-purple" >Compaigns<i class="fa fa-phone mange fa-font-size"></i> </h6></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="redail%20Templete.html">
                        <h6 class="cool-link color-black">Redial Templates <i class="fa  fa-lightbulb-o mange fa-font-size"></i></h6></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="recycle%20campaign.html">
                        <h6 class="cool-link color-black">Recycle Compaigns <i class="fa fa-recycle mange fa-font-size"></i></h6></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="recycle%20phone.html">
                        <h6 class="cool-link color-black">Recycle Phone List <i class="fa fa-recycle mange fa-font-size"></i></h6></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="upload%20setting.html">
                        <h6 class="cool-link color-black">Upload Setting <i class="fa fa-gear mange fa-font-size"></i></h6></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <h6 class="cool-link color-black">DNC <i class="fa fa-angle-right margin-left-135"></i><i class="fa fa-ban mange fa-font-size"></i></h6></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="agent%20state.html">
                        <h6 class="cool-link color-black">Agent Statuses <i class="fa fa-user-circle mange fa-font-size"></i></h6></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="agent%20script.html">
                        <h6 class="cool-link color-black">Agent Script <i class="fa fa-copy mange fa-font-size"></i></h6></a>
                </li>
            </ul>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  margin-top-30">
            <h6 class="color-blue">Step 03</h6>
            <h6 class="color-blue"> Map Your Fields</h6>
            <p>Map your fields by selecting your file headers for the appropriate Mojo field on the right.</p>
            <h6>Stacking Fields:</h6>
            <p>You can stack more than one field in Mojo. For example, you can stack multiple phones in either the Phone or Mobile phone field or add street number and street name to the Address field.</p>
            <h6>Mojo Misc Fields</h6>
            <p>Misc fields in Mojo are custom fields used for information that is not standard contact information. For example: Days on Market.</p>
            <h6>Preview:</h6>
            <p>Use the preview of your file below for reference while mapping fields.</p>
            <h6>Check Duplicates:</h6>
            <p>Optional: Check your incoming data against your existing Mojo data for duplicates by choosing to search phones, emails or both.</p>
            <h6>Save Import Template:</h6>
            <p>If you will be importing files with the same format often, save your mapping as a template and significantly reduce your future import time.</p>
            <h5>Preview</h5>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12  margin-top-30">
            <div class="row">
                <div class="col-sm-12">

                    <div class="card border-card1">
                        <h5>VADial Fields <span class="mange">Your File Fields</span></h5>

                        <div class=" scroll1">
                            <form method="post" action="{{ url('/admin/campaigns/campaigns/create_campaign_4') }}" id="create_campaign_3_form">
                                @csrf
                                <label for="first_name" class=" margin-top-10"><b>First or Full Name</b></label>

                                <select name="first_name" id="first_name" class="mange margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'fname' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'firstname' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'fullname' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'name') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>

                                <label for="last_name" class=" margin-top-10"><b>Last Name</b></label>

                                <select name="last_name" id="last_name" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'lname' ||
                                                                        strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'lastname') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <label for="property_address" class=" margin-top-10"><b>Property Address</b></label>

                                <select name="property_address" id="property_address" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'propertyaddress' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'address') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <label for="property_city" class=" margin-top-10"><b>Property City</b></label>

                                <select name="property_city" id="property_city" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'propertycity' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'city') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <label for="property_state" class=" margin-top-10"><b>Property State</b></label>

                                <select name="property_state" id="property_state" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'propertystate' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'state') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <label for="property_zip_code" class=" margin-top-10"><b>Property Zip Code</b></label>

                                <select name="property_zip_code" id="property_zip_code" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'propertyzipcode' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'zipcode' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'zip') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <label for="mailing_address" class=" margin-top-10"><b>Mailing Address</b></label>

                                <select name="mailing_address" id="mailing_address" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'mailingaddress' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'address') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <label for="mailing_city" class=" margin-top-10"><b>Mailing City</b></label>

                                <select name="mailing_city" id="mailing_city" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'mailingcity' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'city') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <label for="mailing_state" class=" margin-top-10"><b>Mailing State</b></label>

                                <select name="mailing_state" id="mailing_state" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'mailingstate' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'state') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <label for="mailing_zip_code" class=" margin-top-10"><b>Mailing Zip Code</b></label>

                                <select name="mailing_zip_code" id="mailing_zip_code" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'mailingzipcode' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'zipcode' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'zip') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>

                                <label for="phone_number" class=" margin-top-10"><b>Phone</b></label>

                                <select name="phone_number" id="phone_number" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'phone' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'phonenumber' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'phoneno') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <label for="mobile_number" class=" margin-top-10"><b>Mobile Phone</b></label>

                                <select name="mobile_number" id="mobile_number" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'mobilephone' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'mobilephonenumber' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'mobilephoneno' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'mobilenumber' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'mobileno') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <label for="email" class=" margin-top-10"><b>Email</b></label>

                                <select name="email" id="email" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'email' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'emailaddress') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <label for="notes" class=" margin-top-10"><b>Notes</b></label>

                                <select name="notes" id="notes" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'notes') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <label for="date_of_birth" class=" margin-top-10"><b>Birthday</b></label>

                                <select name="date_of_birth" id="date_of_birth" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'birthday' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'dateofbirth' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'dob') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <label for="co_owner_date_of_birth" class=" margin-top-10"><b>Co-Owner Birthday</b></label>

                                <select name="co_owner_date_of_birth" id="co_owner_date_of_birth" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'coownerbirthday' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'coownerdateofbirth' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'coownerdob') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <label for="co_owner" class=" margin-top-10"><b>Co-Owner</b></label>

                                <select name="co_owner" id="co_owner" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'coowner') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <h5 class="text-center  margin-top-30" ><b>Miscellaneous Fields</b></h5>

                                <label for="status_change_date" class=" margin-top-10"><b>Status Change Date</b></label>

                                <select name="status_change_date" id="status_change_date" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'statuschangedate') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <label for="tax_name" class=" margin-top-10"><b>Tax Name</b></label>

                                <select name="tax_name" id="tax_name" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'taxname' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'tax') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <label for="list_price" class=" margin-top-10"><b>List Price</b></label>

                                <select name="list_price" id="list_price" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'listprice' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'price') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <label for="days_on_market" class=" margin-top-10"><b>Days On Market</b></label>

                                <select name="days_on_market" id="days_on_market" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'daysonmarket') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <label for="mls_id" class=" margin-top-10"><b>Mls Id</b></label>

                                <select name="" id="" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'mlsid') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <label for="property_type" class=" margin-top-10"><b>Property Type</b></label>

                                <select name="property_type" id="property_type" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'propertytype') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>


                                <label for="bedrooms" class=" margin-top-10"><b>Bedrooms</b></label>

                                <select name="bedrooms" id="bedrooms" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'bedrooms' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'rooms') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <label for="bathrooms" class=" margin-top-10"><b>Bathrooms</b></label>

                                <select name="bathrooms" id="bathrooms" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'bathrooms' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'baths' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'bath') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <label for="square_footage" class=" margin-top-10"><b>Square Footage</b></label>

                                <select name="square_footage" id="square_footage" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'squarefootage' ||
                                                                            strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'squarefoot') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <label for="year_built" class=" margin-top-10"><b>Year Built</b></label>

                                <select name="year_built" id="year_built" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'yearbuilt') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <label for="deceased" class=" margin-top-10"><b>Deceased</b></label>

                                <select name="deceased" id="deceased" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'deceased') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <label for="deceased_last_name" class=" margin-top-10"><b>Deceased Last Name</b></label>

                                <select name="deceased_last_name" id="deceased_last_name" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'deceasedlastname') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <label for="county" class=" margin-top-10"><b>County</b></label>

                                <select name="county" id="county" class="mange  margin-top-10">
                                    <option value="">---   SELECT   ---</option>
                                    @if (isset($doc))
                                        @foreach ($doc as $col)
                                            <option value="{{ $col }}" @if (strtolower(preg_replace('/[^A-Za-z0-9]/', '', $col)) == 'county') selected @endif>{{ $col }}</option>
                                        @endforeach
                                    @endif
                                </select><br>
                                <input type="hidden" name="manager" id="manager" value="@if (isset($manager)){{ $manager }}@endif">
                            </form>



                            <button type="button" class="btn btn-outline-primary margin-top-10" data-toggle="modal" data-target="#myModal1">Add New Misc Field</button>

                            <!-- The Modal -->
                            <div class="modal fade" id="myModal1">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">LEAD SHEET</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form class="form-inline" action="/action_page.php">
                                                <label for="email" class="mr-sm-2">Name : </label>
                                                <input type="email" class="form-control mb-2 mr-sm-2" id="email">
                                            </form>
                                            <label for="" class=" margin-top-10">Type : </label>
                                            <select name="" id="" class="padding-6  margin-top-10">
                                                <option value="">Text</option>
                                            </select>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn  btn-dark btn-padding" data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn  btn-success btn-padding" data-dismiss="modal">Create</button>
                                        </div>

                                    </div>
                                </div>
                            </div>




                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12  margin-top-30">
            <select name="" id="" class="mange  margin-top-10">
                <option value="">-- Select Import Template --</option>
                <option value="">Coles Data</option>
                <option value="">Landvoice Expired</option>
            </select>

            <button class="btn  btn-success margin-top-10 bg-dark-blue sm-100" data-toggle="modal" data-target="#myModal">Save Import Template</button>
            <br>

            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">

                            <h4 class="modal-title">ALERT</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>You have not mapped any fields</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">ok</button>
                        </div>
                    </div>

                </div>
            </div>
            <button  class="btn  btn-success margin-top-10 bg-dark-blue sm-100">Delete Template</button>
            <button  class="btn  btn-success margin-top-10 bg-dark-blue sm-100">Clear Mapping</button>
            <h5 class="margin-top-10 ">Check duplicates</h5>
            <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
            <label for="vehicle3"> Phones</label>
            <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat" class="margin-left-10">
            <label for="vehicle3"> Emails</label><br>
            <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
            <label for="vehicle3"> Property addresses</label><br>
            <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
            <label for="vehicle3"> Mailing addresses</label><br>
            <p>Address duplicate check is available only for account having less than 200k leads</p>
            <button type="button" class="btn btn-success margin-top-10 bg-dark-blue sm-100" onclick="submit_form()" >Next</button>
        </div>
    </div>
</div>

<script>
    function submit_form() {
        document.getElementById('create_campaign_3_form').submit();
    }
</script>
</body>
</html>
