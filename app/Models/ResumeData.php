<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeData extends Model
{
    use HasFactory;
    protected $fillable = [
      'description',
      'resume_file',
      'type',
      'extension',
      'user_id'
    ];

    public function resumeDataUser(){
      return $this->belongsToMany('App\Models\User');
    }

}
