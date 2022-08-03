<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'user_id';

    function get_user($user): ?object
    {
        $tb = DB::table($this->table);
        if (isset($user['user_id']))
            $tb->whereRaw("BINARY `user_id`= ?",[$user['user_id']]);
        if (isset($user['user_name']))
            $tb->whereRaw("BINARY `user_name`= ?",[$user['user_name']]);
        if (isset($user['email']))
            $tb->where('email',$user['email']);
        if (isset($user['role']))
            $tb->whereRaw("BINARY `role`= ?",[$user['role']]);
        if (isset($user['admin']))
            $tb->whereRaw("BINARY `admin`= ?",[$user['admin']]);
        if (isset($user['manager']))
            $tb->whereRaw("BINARY `manager`= ?",[$user['manager']]);
        if (isset($user['agent']))
            $tb->whereRaw("BINARY `agent`= ?",[$user['agent']]);
        return $tb->get()->first();
    }

    function get_users($user): ?object
    {
        $tb = DB::table($this->table);
        if (isset($user['user_id']))
            $tb->whereRaw("BINARY `user_id`= ?",[$user['user_id']]);
        if (isset($user['user_name']))
            $tb->whereRaw("BINARY `user_name`= ?",[$user['user_name']]);
        if (isset($user['email']))
            $tb->where('email',$user['email']);
        if (isset($user['role']))
            $tb->whereRaw("BINARY `role`= ?",[$user['role']]);
        if (isset($user['admin']))
            $tb->whereRaw("BINARY `admin`= ?",[$user['admin']]);
        if (isset($user['manager']))
            $tb->whereRaw("BINARY `manager`= ?",[$user['manager']]);
        if (isset($user['agent']))
            $tb->whereRaw("BINARY `agent`= ?",[$user['agent']]);
        return $tb->get();
    }

    function create_user($data): bool
    {
        $tb = DB::table($this->table);
        $query = $tb->insert($data);

        if ($query)
            return true;
        else
            return false;
    }

    function delete_user($user): bool
    {
        $tb = DB::table($this->table);
        if (isset($user['user_id']))
            $tb->whereRaw("BINARY `user_id`= ?",[$user['user_id']]);
        if (isset($user['user_name']))
            $tb->whereRaw("BINARY `user_name`= ?",[$user['user_name']]);
        if (isset($user['email']))
            $tb->whereRaw("BINARY `email`= ?",[$user['email']]);
        if (isset($user['role']))
            $tb->whereRaw("BINARY `role`= ?",[$user['role']]);
        if (isset($user['admin']))
            $tb->whereRaw("BINARY `admin`= ?",[$user['admin']]);
        if (isset($user['manager']))
            $tb->whereRaw("BINARY `manager`= ?",[$user['manager']]);
        if (isset($user['agent']))
            $tb->whereRaw("BINARY `agent`= ?",[$user['agent']]);
        if ($tb->delete())
            return true;
        else
            return false;
    }

    function change_user($user): bool
    {
        $tb = DB::table($this->table);
        if (isset($user['user_id']))
            $tb->whereRaw("BINARY `user_id`= ?",[$user['user_id']]);
        if ($tb->update($user))
            return true;
        else
            return false;
    }
}
