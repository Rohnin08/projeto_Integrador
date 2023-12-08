<!doctype html>
<html lang="en">

<head>
  <title>Dados|Usuário</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


</head>

<body>


  <h1>Dados do Usuario</h1>

  <form action="" method="post">

    <label for="">Nome</label>
    <input type="text" class="form-control" readonly name="firstname" id="" value=" <?php $name = Auth::userName();
                                                                                    echo $name['0']; ?>" aria-describedby="helpId" placeholder="">

    <label for="">Sobrenome</label>
    <input type="text" class="form-control" readonly name="lastname" id="" aria-describedby="helpId" placeholder="" value="<?php $name = Auth::userName();
                                                                                                                            echo $name['1']; ?>">

    <label for="" class="form-label">Email</label>
    <input type="text" class="form-control" readonly name="email" id="" value=" <?php echo Auth::userEmail(); ?> " aria-describedby="helpId" placeholder="">

    <br>
    <br>
    <a href="/dash">Voltar</a>

  </form>

</body>

</html>