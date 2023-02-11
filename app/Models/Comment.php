<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'visible'
    ];

    protected $casts = [
        'visible' => 'boolean'
    ];

    // RELACIONAMENTO DE UM PARA MUITOS
    public function comments()
    {
        return $this->belongsTo(User::class);
    }

    /* SE A TABELA TIVER UM NOME DIFERENTE DO MODEL */
    //protected $table = 'comentarios';
}
