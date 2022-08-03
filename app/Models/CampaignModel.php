<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CampaignModel extends Model
{
    use HasFactory;

    protected $table = 'campaign';
    protected $primaryKey = 'campaign_id';

    function get_campaign($campaign): ?object
    {
        $tb = DB::table($this->table);
        if (isset($campaign['campaign_id']))
            $tb->whereRaw("BINARY `campaign_id`= ?",[$campaign['campaign_id']]);
        if (isset($campaign['user_name']))
            $tb->whereRaw("BINARY `user_name`= ?",[$campaign['user_name']]);
        return $tb->get()->first();
    }

    function get_campaigns($campaign): ?object
    {
        $tb = DB::table($this->table);
        if (isset($campaign['user_id']))
            $tb->whereRaw("BINARY `campaign_id`= ?",[$campaign['campaign_id']]);
        if (isset($campaign['user_name']))
            $tb->whereRaw("BINARY `user_name`= ?",[$campaign['user_name']]);
        return $tb->get();
    }

    function create_campaign($data): bool
    {
        $tb = DB::table($this->table);
        foreach ($data as $row){
            $query = $tb->insert($row);
            if (!$query)
                return false;
        }
        return true;
    }

}
