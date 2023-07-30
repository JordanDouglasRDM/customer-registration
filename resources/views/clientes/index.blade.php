<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Listagem de Clientes</title>
    <style>
        body {
            background-color: #a0aec0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Open Sans', Arial, sans-serif;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: royalblue;
            font-size: 32px;
            font-weight: 600;
            text-align: center;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background-color: #f7fafc;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 16px;
            margin: 6px 0;
        }

        li span {
            font-weight: 600;
            margin-right: 8px;
        }
    </style>
</head>
<body>
<div class="container">
    <p class="title">Listagem</p>

    @if(count($clientes) > 0)
        <ul>
            @foreach($clientes as $cliente)
                <li><span>Nome:</span> {{ $cliente->nome }} - <span>Email:</span> {{ $cliente->email }} - <span>Telefone:</span> {{ $cliente->telefone }}
                </li>
            @endforeach
        </ul>
    @else
        <p>Nenhum cliente cadastrado.</p>
    @endif
    <br>
        <a class="submit" style="text-decoration: none; text-align: center; display:block;" href="{{ route('clientes.create') }}">
            Cadastrar
        </a>
</div>
</body>
</html>
