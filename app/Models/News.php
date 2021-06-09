<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $fillable = [
        'id_project',
        'theme',
        'image',
        'connect',
    ];
    public function project(){
        return $this->belongsTo(Project::class);
    }
}
