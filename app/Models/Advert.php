<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    use HasFactory;

    protected $dates = ['date']; // Define a coluna 'date' como uma data a ser tratada como objeto Carbon

    protected $guarded = []; // Define os campos que não podem ser preenchidos em massa (none guarded)

    public function user() {
        return $this->belongsTo('App\Models\User'); // Define o relacionamento entre Advert e User (pertence a um usuário)
    }
}
