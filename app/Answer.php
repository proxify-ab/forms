<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Form;
use App\User;

class Answer extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function form()
    {
        return $this->belongsTo(Form::class);
    }

}
