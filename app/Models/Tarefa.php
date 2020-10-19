<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    protected $table = 'tarefas';
    public $timestamps = true;

    protected $fillable = [
        'titulo',
        'descricao',
        'status',
        'usuario_id'
    ];
}
