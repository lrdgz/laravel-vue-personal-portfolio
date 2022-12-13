<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Project extends Model implements HasMedia
{
    use HasFactory;
    use SoftDeletes;

    use InteractsWithMedia;

    protected $fillable = ['skill_id', 'name', 'url'];

    public function skill() 
    {
        return $this->belongsTo(Skill::class);
    }
}