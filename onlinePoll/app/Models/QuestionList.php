<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionList extends Model {
    use HasFactory;
    protected $guarded = [];

    public function getOption(){
        return $this->hasMany(OptionList::class, 'questionId', 'id');
    }
}
