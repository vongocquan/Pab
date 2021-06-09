<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airdrop extends Model
{
    use HasFactory;
    protected $table = 'airdrops';
    public $fillable = [
        'id_project',
        'link_airdrop',
        'end_day',
        'max_rewards',
        'steps',
        'estimated_value'
    ];
    public function project(){
        return $this->belongsTo(Project::class);
    }
}
