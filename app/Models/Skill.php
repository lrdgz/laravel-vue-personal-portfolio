<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Skill extends Model implements HasMedia
{
    use HasFactory;
    use SoftDeletes;

    use InteractsWithMedia;

    protected $fillable = ['name'];

    public function projects ()
    {
        return $this->hasMany(Project::class);
    }
}
