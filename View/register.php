<!doctype html>
<html lang="pt-BR">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
          body {
            background-color: #f8f9fa;
            color: #000;
            font-family: Arial, sans-serif;
            position: relative;
            padding-bottom: 100px; /* para dar espaço ao parágrafo de copyright */
        }

        .login-container {
            margin-top: 50px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
        }

        .login-form-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-form-footer {
            text-align: center;
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
        }

        .btn-login {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-login:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 200px;
        }

        .copyright {
            position: absolute;
            bottom: 10px;
            right: 10px;
            font-size: 12px;
            color: #999;
        }
    </style>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg" style="background-color: #004aad;">
  <a class="navbar-brand" href="#" style="color: white;">PreparaElite Concursos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <div class="navbar">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" style="color: white;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Perfil
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Gerenciar Perfil</a>
        <a class="dropdown-item" href="#">Carrinho</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Sair/logout</a>
      </div>
    </li>
  </ul>
</div>
</div>
</nav>

  
  <div class="container login-container">
        <div class="logo">
            <img src="logo_concurseiroelite_pro.png" alt="ConcurseiroElite Pro">
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-form-header">
                    <h2>Bem-vindo ao ConcurseiroElite Pro</h2>
                    <p>Faça seu registro e seja bem vindo(a)!</p>
                </div>
                <form method="post" action="../model/Usuários.php">
                    <div class="form-group">
                    <label>Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Seu Email"
                            required>
                    </div>
                    <div class="form-group">
                    <label>Senha</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Sua Senha" required>
                    </div>
                    <div class="form-group">
                    <label>CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf"
                            placeholder="CPF" required>
                    </div>
                    <div class="form-group">
                        <label>Data de Nascimento</label>
                        <input type="date" class="form-control" id="datanasc" name="datanasc"
                            placeholder="00/00/0000" required>
                    </div>
                    <div class="form-group">
                    <label>Sua descrição</label>
                        <input type="text" class="form-control" id="descricao" name="descricao"
                            placeholder="Descreva-se aqui" required>
                    </div>
                    <div class="form-group">
                    <label>Nacionalidade</label>
                        <input type="text" class="form-control" id="password" name="password"
                            placeholder="Ex: BR" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-login">Registrar</button>
                </form>
              
                <div class="login-form-footer">
                    <p>Já possui uma conta? <a href="login.php">Clique aqui</a></p>
                </div>
            </div>
        </div>
    </div>

    <p class="copyright">&copy; 2024 ConcurseiroElite Pro - Todos os direitos reservados</p>


      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
$(document).ready(function(){
    $('#cpf').mask('000.000.000-00', {reverse: true});
});
</script>
  </body>
</html>