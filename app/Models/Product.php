<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'produto'; // Nome correto da tabela, se for "produtos"
    
    // Defina os campos que podem ser preenchidos via atribuição em massa
    protected $fillable = ['descricao', 'detail'];
}
