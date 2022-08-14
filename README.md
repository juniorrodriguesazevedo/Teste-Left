## Desafio Left

Projeto feito para vaga de emprego na empresa Left.

### Bibliotecas usadas:
* [Validator Docs - Brasil](https://github.com/geekcom/validator-docs)
* [Laravel pt-BR Localization](https://github.com/lucascudo/laravel-pt-BR-localization)

### Instalação: 
* Você precisará do PHP instalado em seu computador, [BAIXE AQUI](https://www.php.net/downloads). 
* Na raiz do projeto use o comando `composer install`. 
* No arquivo `.ENV` edite o campo `DB_CONNECTION` e coloque os dados do seu banco de dados.
* Dentro do `.ENV` mude o campo `FILESYSTEM_DISK=local` para `FILESYSTEM_DISK=public`.
* Use o comando `php artisan migrate:fresh --seed` para fazer as migrações e propagar o banco.
* Use o comando `php artisan storage:link` para criar um link simbólico para as imagens.
* Use o comando `php artisan serve` para rodar em seu servidor.
* Navegue para `http://127.0.0.1:8000/`. O aplicativo será carregado automaticamente.

#### Observações:
* Não foquei no front-end pois não foi o meu foco (por isso tá mais feio que eu esse visual ai kkkk).
* Do mais como dizia Léo Magalhaẽs: Porque homem não chora, estou indo embora agora.