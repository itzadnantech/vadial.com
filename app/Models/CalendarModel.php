<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarModel extends Model
{
    use HasFactory;

    protected $table = 'calendar';
    protected $primaryKey = 'calendar_id';
}
