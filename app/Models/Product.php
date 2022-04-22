<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'detail', 'price','genre_id', 'image'
    ];
    public function showDate(){
        return $this->created_at->diffForHumans();
    }
    public function genre(){
        return $this->belongsTo(Genres::class);
    }
}
