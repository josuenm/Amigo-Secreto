<x-header />

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

        <button type="submit" class="normal-btn mt-3">Salvar</button>
    </form>
</main>
