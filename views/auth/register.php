<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>
    <div>
        <h1>Cadastre-se</h1>

        <form action="/registrar" method="POST">

            <label for="">Email</label>
            <input type="email" required name="email" id="" aria-describedby="helpId" placeholder="Email">

            <label for="">Nome</label>
            <input type="text" required name="firstname" id="" aria-describedby="helpId" placeholder="Nome">

            <label for="" class="form-label">Sobrenome</label>
            <input type="text" required name="lastname" id="" aria-describedby="helpId" placeholder="Sobrenome">

            <label for="" class="form-label">Senha</label>
            <input type="password" name="password" required id="" aria-describedby="helpId" placeholder="Senha">

            <button>Cadastrar</button>

        </form>
</body>

</html>