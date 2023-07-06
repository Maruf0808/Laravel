<?php

namespace App\Models;

use app\Models\User;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'subject',
        'message',
        'file_url',
    ];

    public function user(){return $this->belongsTo(User::class);}
}
