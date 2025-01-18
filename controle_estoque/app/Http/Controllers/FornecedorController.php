<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'razao_social' => 'required|string|max:255',
            'cnpj' => 'required|string|size:14|unique:fornecedores',
            'endereco' => 'nullable|string|max:255',
            'cep' => 'nullable|integer',
            'telefone' => 'required|string|max:20',
            'estado' => 'required|string|max:2',
            'cidade' => 'required|string|max:255',
            'ativo' => 'sometimes|boolean',
        ]);
    
        // Criar o fornecedor com os dados validados
        $fornecedor = Fornecedor::create($validated);
    
        return response()->json(['message' => 'Fornecedor cadastrado com sucesso!', 'data' => $fornecedor], 201);
    }

    public function index()
    {
        return response()->json(Fornecedor::all(), 200);
    }
}
