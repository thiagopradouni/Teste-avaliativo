<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'usuario',
        'titulo',
        'descricao',
    ];

    public function comment(){
        return $this->hasMany(Comment::class, 'fk_postagem_id');
    }
}
