<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Admin extends Model
{
    protected $table = 'admin';

    protected $fillable = ([
        'nama_lengkap',
        'user_id',
        'email'
    ]);


    public function user() {
        return $this->belongsTo(User::class);
    }
}
