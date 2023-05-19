<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-head-basico />
    @vite('resources/css/paginas/cadastrar-pessoa.css')
    @vite('resources/css/componentes/input.css')

    <title>Amigo Secreto</title>
</head>

<body>
    <header>
        <div class="safe-area d-flex align-items-center">
            <button>Voltar</button>
        </div>
    </header>
    <main class="safe-area py-4">
        <form action="" class="formulario-pessoa d-flex flex-column gap-1">
            <div>
                <h2>Crie um usuário</h2>
                <p class="cadastro-pessoa_descricao">
                    Crie um usuário para fazer o amigo secreto, coloque obrigatóriamente o nome e email
                </p>
            </div>

            <div class="d-flex flex-column">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" class="normal-input" placeholder="Digite seu nome...">
            </div>
            <div class="d-flex flex-column">
                <label for="email">Email:</label>
                <input type="text" id="email" class="normal-input" placeholder="Digite seu email...">
            </div>

            <button type="submit" class="normal-btn mt-3">Criar usuário</button>
        </form>
    </main>
</body>

</html>
