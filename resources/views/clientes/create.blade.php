<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.18/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.18/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="sweetalert2.min.css">

    <title>Início</title>
</head>
<body>
<form class="form" id="cadastro-cliente-form" action="{{ route('clientes.store') }}" method="post">
    @csrf
    <p class="title">Registre-se</p>
    <p class="message">Insira os dados para cadastrar-se</p>
    <label>
        <input required="" placeholder="" type="text" name="nome" class="input" autocomplete="off">
        <span>Nome</span>
    </label>
    <label>
        <input required="" placeholder="" type="email" name="email" class="input">
        <span>Email</span>
    </label>
    <label>
        <input required="" placeholder="" type="number" name="telefone" class="input">
        <span>Telefone</span>
    </label>
    <label>
        <input required="" placeholder="" type="text" name="cidade" class="input">
        <span>Cidade</span>
    </label>
    <label>
        <input required="" placeholder="" type="text" name="cargo" class="input">
        <span>Cargo</span>
    </label>
    <button class="submit" type="submit">Enviar</button>
    <a class="submit" href="{{ route('clientes.index') }}" style="text-decoration: none; text-align: center;">
    Listar
    </a>
</form>

</body>
</html>
