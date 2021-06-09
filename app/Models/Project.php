<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $fillable = [
        'project_name',
        'id_category',
        'introduction',
        'logo',
        'token',
        'project_web',
        'link_fb',
        'link_tw',
        'link_yt',
        'link_gh',
        'email',
        'ytele'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function airdrops()
    {
        return $this->hasMany(Airdrop::class);
    }
    public function news()
    {
        return $this->hasMany(News::class);
    }
}
