<!DOCTYPE html>
<html>
<head>
    @include('admin.template.head')
</head>
<body>
@include('admin.template.header', ['tab' => 'users'])
<div class="container">
    <h2>Users</h2>
    <div class="table-responsive">
        <table style="white-space: nowrap" class="table table-hover table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Operations</th>
            </tr>
            </thead>
            <tbody>
            @php ($index = 1)
            @if (isset($users))
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $index++ }}</td>
                        <td>{{ $user->user_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td class="show_users">
                            <button type="button" class="btn btn-danger" onclick="remove_user('{{ url('/admin/delete_user/' . $user->user_id) }}')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
