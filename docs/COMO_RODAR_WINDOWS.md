# Como rodar no Windwos

1. Primeiro verifique se o PHP 8.1 esta instalado em sua máquina, se você não tem pode seguir o passo a passo nesse vídeo: <a href="https://www.youtube.com/watch?v=iZfIsPtU1fQ" target="_blank">acessar link</a>.

2. Como não usei o Docker nesse projeto, vamos usar o driver do próprio MySQL na nossa máquina ok? Baixe o MySQL em seu computador, aqui esta o link dele: <a href="https://dev.mysql.com/downloads/installer/" target="_blank">acessar link</a>.

3. Agora instale algum banco de dados MySQL, recomendo fortemente o DBeaver que pode ser baixado <a href="https://dbeaver.io/download/" target="_blank">aqui</a>, é super fácil de usar. Caso não consiga rodar entre em contato comigo via email: <a href="mailto:direct.josue@gmail.com?subject=Amigo%20Secreto%20-%20Ajuda" target="_blank">acessar email</a>.

4. Agora você pode baixar o projeto e colocar na sua máquina ou usar o GIT para fazer isso.

## Dentro do projeto

1. Agora dentro do projeto rode o `composer install` no terminal para instalar as dependências do composer

2. Também rode o `yarn install` para instalar as dependências do `package.json`

3. Agora para rodar o projeto rode o `php artisan serve` e no próprio terminal vai mostrar um link, segure o `alt` e clique no link para abrir no navegador
