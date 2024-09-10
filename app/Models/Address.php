<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $table = 'addresses';

    protected $fillable = [
        'address',
    ];

    // não exibindo o id do usuario
    protected $hidden  = [
        'user_id',
    ];

    use HasFactory;

    // criando o relacionamento
    public function user(){
        return $this->belongsTo(User::class);
    }
}
