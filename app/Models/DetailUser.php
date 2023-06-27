<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'detail_user';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
       
    ];

    protected $fillable = [
        'users_id', 
        'photo',
        'role',
        'contact_number',
        'biograpy',
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    //one to one
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'users_id', 'id');
    }

    //many
    public function experince_user()
    {
        return $this->hasMany('App\Models\ExperienceUser', 'detail_user_id');
    }

}

