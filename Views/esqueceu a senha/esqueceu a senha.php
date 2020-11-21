<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Sign up - Criar conta</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="estilos2.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container">
        <div class="box">
            <header>
                <div class="logo">
                    <figure>
                      <img src="https://www.univem.edu.br/img/site/logo.png" width="283.2" height="63.6" alt="logoUnivem">
                    </figure>
                </div>
                <div class="login" style="padding-top: 0px;padding-bottom: 0px;">
                  <h1>Recuperação de senha </h1>
                </div>
            </header>
            <form class="px-4 py-3">
                <div class="form-group">
                  <label for="exampleDropdownFormEmail1"> <h4>Digite seu e-mail <br>cadastrado na plataforma</h4></label>
                  <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com" style="width: 383px;">
                </div>
                <div class="form-group" style="margin-bottom:10px;">
                    <label for="exampleDropdownFormEmail1">RA</label>
                    <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="ex: 51237-5" style="width: 383px;">
                  </div>
                <div class="containermessage">
                  <div class="sendmessage">
                    <spam class="message">
                      Um email será enviado com a senha <br>para o endereço de e-mail cadastrado na plataforma
                    </spam>
                  </div>
                </div>
                <div class="botton" style="margin-top:30px;">
                  <a href="http://localhost/ProjetoScript/Views/ApresentacaoView/apresentacao.php" type="submit" name="cancelar" class="btn btn-light">Cancelar</a>
                  <button type="submit" class="btn btn-primary">enviar</button>
                </div>
            </form>
        </div>
    </div>


</body>
</html>