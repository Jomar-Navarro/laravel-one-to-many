<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function Technology(){
        return $this-> belongsTo(Technology::class);
    }

    protected $fillable = [
        'title',
        'slug',
        // 'description',
        // 'project_url',
        // 'completion_date'
    ];
}
