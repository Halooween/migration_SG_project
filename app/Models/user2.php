<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user2 extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'user';
    protected $fillable = [
        'first_name',
        'last_name',
        'status',
        'phone_number',
        'details'
    ];

    public function product(){
        return $this->hasMany(Product::class, 'user_id');
    }
}
