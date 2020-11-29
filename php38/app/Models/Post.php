<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Psy\Util\Str;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

//    Mutators
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($this->attributes['title']);
    }

//    Relations
    public function author()
    {
        return $this->belongsTo(user::class);
    }
}
