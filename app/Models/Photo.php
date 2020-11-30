<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = ['file'];

    protected $uploade = '/images/';

    public function getFileAttribute($photo){
        return $this->uploade.$photo;
    }
}
