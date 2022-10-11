<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = 'product';
    protected $fillable = [
        'name',
        'category',
        'status',
    ];

    public function user(){
        return $this->belongsTo(user2::class);
    }
}
