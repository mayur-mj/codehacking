<?php

// namespace Cviebrock\EloquentSluggable\Tests\Models;
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

use Cviebrock\EloquentSluggable\Sluggable;


class Post extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    use HasFactory;
    protected $fillable = [
        'title',
        'body',
        'photo_id',
        'category_id',
        'user_id',
        'slug',

    ];

    public function sluggable() : array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function photo(){
        return $this->belongsTo('App\Models\Photo');
    }
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
}
