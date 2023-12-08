<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


</head>

<body>
    <h1>Login</h1>

    <form action="/logar" method="POST">

        <div class="mb-3">
            <label for="">Email</label>
            <input type="email" class="form-control" required name="email" id="" aria-describedby="helpId" placeholder="Email">

            <label for="" class="form-label">Senha</label>
            <input type="password" name="password" required id="" aria-describedby="helpId" placeholder="Senha">


            <button>Entrar</button>
    </form>

</body>

</html>