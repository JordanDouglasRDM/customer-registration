<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ClienteController extends Controller
{
    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'email' => 'required|unique:cliente',
                'nome' => 'required',
                'telefone' => 'required',
                'cidade' => 'required',
                'cargo' => 'required',
            ]);
            $cliente = Cliente::create([
                'email' => $validatedData['email'],
                'nome' => $validatedData['nome'],
                'telefone' => $validatedData['telefone'],
                'cidade' => $validatedData['cidade'],
                'cargo' => $validatedData['cargo'],
            ]);
            return response()->json(['message' => 'Cliente cadastrado com sucesso!']);

        } catch (ValidationException $exception) {
            $errors = $exception->validator->errors();

            if ($errors->has('email') && $errors->get('email')[0] === 'The email has already been taken.') {
                return response()->json(['message' => 'E-mail já cadastrado!']);
            }

            return response()->json(['message' => 'Erro ao cadastrar o cliente']);
        }

    }

    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }
}
