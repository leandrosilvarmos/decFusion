# dacFusion

> Uma plataforma de e-commerce para o nicho de decoração de ambientes integrada a um aplicativo web, a qual tem como principal objetivo unir os clientes que irao adquirir os produtos com os profissionais cadastrados na plataforma.



<!-- <p align="center">
   <img src=".github/app.svg" width="100%" height="auto"/>
</p> -->

### Sobre :question:

Projeto desenvolvido para a matéria do 5 semestre, Projeto Integrador, do curso de Tecnologia em Sistemas para Internet.

### Tecnologias utilizadas :computer:

- [Laravel](https://laravel.com/)
- [Kotlin](https://kotlinlang.org/)

### Rodando o projeto

Clone o repositório:

```

    git clone https://github.com/leandrosilvarmos/decFusion.git

```

#### Configurando o back-end:

Abra o projeto decFusion

```

    cd decFusion


```

Instale todas as dependências

```

    composer install

    npm install


```

Criei o seu banco de dados MySQL

```

    CREATE DATABASE decfusion;


```

Faça a configuração de seu arquivo .env

```

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=hardware
    DB_USERNAME=<USERNAME>
    DB_PASSWORD=<PASSWORD>

```

Rode todas as migrations

```

    php artisan migrate

```

Faça o link do storage

```

    php artisan storage:link

```

Gere a chave de sua aplicação (.env)

```

    php artisan generate:key

```

Inicie o servidor

```

    php artisan serve

```

Aplicação rodando em http://localhost:8000

#### Rodando o app:

Abra o projeto Mobile e inicie a aplicação em seu emulador de preferencia ou atraves da conexção usb do seu smartphone.

### Feedback e Bugs :bug:

Caso encontre algum problema, ou a necessidade de uma funcionalidade, entre em contato via e-mail: leandro.silva.rmos@gmail.com