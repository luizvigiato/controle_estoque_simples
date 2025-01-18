<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Fornecedor extends Model
{
    /** @use HasFactory<\Database\Factories\FornecedorFactory> */
    use HasFactory;

    protected $table = 'fornecedores';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'nome',
        'razao_social',
        'cnpj',
        'endereco',
        'cep',
        'telefone',
        'estado',
        'cidade',
        'ativo',
    ];

    /**
     * Evento para definir automaticamente o UUID ao criar um novo registro.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (!$model->getKey()) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }
}
