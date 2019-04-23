<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Answer;

class Form extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'fields'
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class, 'form_id');
    }

}
