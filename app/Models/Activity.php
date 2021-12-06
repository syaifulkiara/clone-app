<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $table ='activities';
    protected $fillable = [
        'user_id','day_date','start','finish','ot','project_no','activity','location','cek' 
    ];
}
