<html>

<head>
    @include('admin.template.head')
</head>

<body>
@include('admin.template.header', ['tab' => 'account'])
<div class="content">
    <div class="row">
        @include('admin.account.template.header', ['menu' => 'teams'])
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 margin-top-30">
            <h6>TEAMS <i class="fa fa-angle-right"></i> LIST</h6>
            <button class="btn btn-primary margin-top-10">Add Team</button>
            <div class="table-responsive">
                <table class="table table-striped margin-top-30">
                    <thead class="thead-light text-center">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">User</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Last Modified</th>
                        <th scope="col">Controls</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
