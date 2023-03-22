<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use Translatable;

    public array $translatedAttributes = ['title', 'content'];
    public $useTranslationFallback = true;
    protected $fillable = ['author'];
}
