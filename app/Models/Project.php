<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Type;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'slug', 'type_id', 'cover_image'];

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function technologies()
    {
        return $this->belongsToMany(Technology::class);
    }
}
