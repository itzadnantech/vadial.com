<html>

<head>
    @include('admin.template.head')
</head>

<body>
@if (session()->get('role') == 'super') @include('super_admin.template.header', ['menu' => 'manage']) @endif
@if (session()->get('role') == 'admin') @include('admin.template.header', ['menu' => 'manage']) @endif
@if (session()->get('role') == 'manager') @include('manager.template.header', ['menu' => 'manage']) @endif
@if (session()->get('role') == 'agent') @include('agent.template.header', ['menu' => 'manage']) @endif
<div style="margin-left: 150px" class="content">
    <h3 class="heading2">Contact information</h3>
    <div class="row margin-bottom-30">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <div class="circle">
                <label for="change_image">
                    <img src="@if (isset($user->image)) {{ url('/assets/uploads/'.$user->image) }} @endif" id="account_image" class="circle-img"><i class="fa fa-camera fa-2x camera color-white" ></i>
                </label>
                <input type="hidden" value="" name="user_id" id="user_id" class="user_id">
                <input type="file" id="change_image" name="image" accept="image/x-png,image/gif,image/jpeg" style="display: none" />
            </div>

        </div>
        <form method="post" action="{{ url('/change_email') }}" id="change_email_form">
            @csrf
            <input type="hidden" value="" name="user_id" id="user_id" class="user_id">
            <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
                <h3 id="full_name">@if (isset($user->first_name)) {{ $user->first_name }} @endif @if (isset($user->last_name)) {{ $user->last_name }} @endif</h3>
                <span class="display-flex margin-top-30">
                    <i class="fa fa-envelope-o envelop">

                    </i>
                    <span class="margin-left-10">
                        <input type="email" class="margin-top-10 input-feild1 " placeholder="Email Address" name="email" id="account_email" value="@if (isset($user->email)) {{ $user->email }} @endif" disabled>
                    </span>
                </span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-7 col-xs-7 btn-group margin-top-55">
                <button type="button" id="edit_email" class="btn btn-primary">Edit</button>
                <button type="submit" id="save_email" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
    <h3 class="heading2">Account information</h3>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">
            <form class="form-inline" action="/action_page.php">
                <label for="email" class="font-size-14 color-dark-grey" value="Email sender name:"><b>Email sender name:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="email" class=" input-feild1" placeholder="Enter email"><br><br>
                <label for="email" class="font-size-14 color-dark-grey margin-top-10"><b>Time Zone:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="cars" class="input-feild2 margin-top-10">
                    <option value="volvo">Eastern Standard Time</option>
                    <option value="saab">Central Standard Time</option>
                    <option value="opel">Arozona Time Zone</option>
                    <option value="audi">Mountain Standard Time</option>
                    <option value="saab">Pacific Standard Time</option>
                    <option value="opel">Alaska Time Zone</option>
                    <option value="audi">Hawaii Standard Time</option>
                </select>
                <a aria-current="page" class="btn save-btn" href="#">Save</a>
            </form>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <p class="font-size-14 color-dark-grey"><b>PIN:</b></p>
            <p class="font-size-14 color-dark-grey"><b>Posting PIN:</b></p>
            <p class="font-size-14 color-dark-grey"><b>Access Level:</b></p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-5">
            <p>936202</p>
            <p>3077077705</p>
            <p>Super User</p>
        </div>
    </div>
    <h3 class="heading2">Password</h3>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form method="post" action="{{ url('/change_password') }}" id="change_password_form">
                @csrf
                <input type="hidden" value="" name="user_id" id="user_id" class="user_id">
                <label for="old_password" class="font-size-14 color-dark-grey"><b>Old password:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="password" id="old_password" name="old_password" class=" input-feild3" placeholder="" required><br><br>
                <label for="new_password" class="font-size-14 color-dark-grey"><b>New password:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="password" id="new_password" name="new_password" class=" input-feild3" placeholder="" required><br><br>
                <label for="re_password" class="font-size-14 color-dark-grey"><b>Confirm password:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="password" id="re_password" name="re_password" class=" input-feild1" placeholder="" required><br>
                <button type="submit" aria-current="page" class="btn save-btn">Save</button>
            </form>
        </div>

    </div>
</div>
<script>
    $(document).ready(function() {
        $("#account_image").on("error", function(){
            $(this).attr('src', root_url + '/assets/images/logo.png');
        });

        $("#save_email").prop('disabled', true);
        $("#account_email").prop('disabled', true);
        $("#edit_email").click(function(){
            $("#save_email").prop('disabled', false);
            $("#account_email").prop('disabled', false);
        });
    });
</script>
</body>

</html>
