<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica MJM - Nampula</title>
    <!-- Bootstrap CSS -->
    <link rel="icon" href="css/img/logo2.PNG">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS -->
    <style>
  *{
       font-family: 'Times New Roman', Times, serif;
    }

/* Estilos para o conteúdo de boas-vindas */
#welcome-content {
    color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
    font-family: 'Roboto', sans-serif; /* Aplicar fonte personalizada */
    text-align: center;
}

#welcome-content h1 {
    font-size: 3em;
    font-weight: 700; /* Deixar o texto mais grosso (bold) */
    margin-bottom: 20px; /* Adicionar espaço abaixo do título */
}

#welcome-content p {
    font-size: 2em;
    font-weight: 400; /* Normal (400) */
    margin-bottom: 30px; /* Adicionar espaço abaixo do parágrafo */
}

.btn-success {
    font-family: 'Roboto', sans-serif; /* Aplicar fonte personalizada */
    font-weight: 700; /* Deixar o texto mais grosso (bold) */
    font-size: 1.5em;
    padding: 15px 30px; /* Ajustar o preenchimento do botão */
}
        /* Estilos personalizados */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        .footer-logo {
            width: 100px; /* Ajuste conforme necessário */
            margin-top: 10px; /* Espaçamento acima do logo */
        }
        .nav-green {
            background-color: #fff; /* Cor verde mais escura para a barra de navegação superior */
            color: #1e7e34 ; /* Texto branco */
        }
        .nav-green .navbar-nav .nav-link {
            color:#1e7e34; /* Texto branco nos links */
        }
        .nav-green .navbar-nav .nav-link:hover {
            color: #ffc107; /* Cor de destaque ao passar o mouse nos links */
        }
        .nav-white {
            background-color:#1e7e34; /* Cor verde para a barra de navegação inferior */
            color: #fff ; /* Texto branco */
        }

        .nav-green .navbar-nav .nav-link {
    color: #1e7e34; /* Texto verde escuro */
    transition: color 0.3s; /* Transição suave para a cor do texto */
}

.nav-green .navbar-nav .nav-link {
    color: #1e7e34; /* Texto verde escuro */
    transition: color 0.3s; /* Transição suave para a cor do texto */
}

.nav-green .navbar-nav .nav-link:hover {
    color: #ff8080; /* Cor de destaque ao passar o mouse (vermelho claro) */
}

.nav-white .navbar-nav .nav-link {
    color: #fff; /* Texto branco */
    transition: color 0.3s; /* Transição suave para a cor do texto */
}

.nav-white .navbar-nav .nav-link:hover {
    color: #ff8080; /* Cor de destaque ao passar o mouse (vermelho claro) */
}

.navbar-nav .nav-link {
    padding: 5px 10px; /* Ajusta o preenchimento interno dos links */
}

.navbar-nav .nav-link:hover {
    border: 2px solid #ff8080; /* Adiciona uma borda vermelho claro ao redor ao passar o mouse */
    border-radius: 5px; /* Adiciona uma borda arredondada */
}


#specialties-content {
        color:#fff; /* Definir a cor do texto como preto */
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: none;
        z-index: 1;
        font-family: 'Roboto', sans-serif; /* Aplicar a mesma fonte personalizada */
        text-align: center;
    }

    #specialties-content h2 {
        font-size: 2em; /* Aumentar o tamanho do título */
        font-weight: 700; /* Deixar o título mais grosso (bold) */
        margin-bottom: 20px; /* Adicionar espaço abaixo do título */
    }

    #specialties-content p {
        font-size: 1.2em; /* Aumentar o tamanho do parágrafo */
        font-weight: 1000; /* Normal (400) */
        margin-bottom: 30px; /* Adicionar espaço abaixo do parágrafo */
    }

    .btn-success {
        font-family: 'Roboto', sans-serif; /* Aplicar a mesma fonte personalizada */
        font-weight: 700; /* Deixar o texto do botão mais grosso (bold) */
        font-size: 1.5em; /* Aumentar o tamanho do texto do botão */
        padding: 15px 30px; /* Ajustar o preenchimento do botão */
    }
    .mussa {
        display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 20px;
            display: flex
        }

        .box {
            width: 80%; /* Ajuste a largura conforme desejado */
            padding: 20px;
            background-color: #f0f0f0;
            border-radius: 8px;
            text-align: center;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            
        }

        .box i {
            font-size: 48px;
            color: #007bff;
            margin-bottom: 10px;
        }

        .box h3 {
            font-size: 24px;
            color: #333;
        }

        .box p {
            font-size: 16px;
            color: #666;
        }
        .mussa .container {
            text-align: center;
            margin-bottom: 50px;}
    </style>
</head>
<body>

<!-- Barra de Contato e Redes Sociais -->
<div class="container-fluid nav-white py-2">
    <div class="container text-right">
        <span class="mr-5"><i class="fas fa-phone"></i>  +258843003819 /  +258873003819</span>
        <span class="mr-5"><i class="far fa-envelope"></i>  clinicamjm@gmail.com</span>
        <span class="mr-5"><i class="far fa-clock"></i> Aberto 24h</span>
        <span class="mr-5"><i class="fab fa-facebook"></i></span>
        <span><i class="fab fa-instagram"></i></span>
    </div>
</div>


<!-- Barra de Navegação Superior (Barra Verde Escura) -->
<nav class="navbar navbar-expand-md nav-green navbar-dark">
<img src="css/img/logo2.PNG" alt=""> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a  class="nav-link"  href="index.php">Página inicial</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sobrenos.php">Sobre nós</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Expecialidades.php">Especialidades</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Contacto.php">Contactos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Noticias.php">Notícias</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Jumbotron (Banner principal) -->
<div class="jumbotron" style="background-size: cover; background-repeat: no-repeat; text-align: center; height: 80vh; position: relative; overflow: hidden;">
    <!-- Conteúdo de Boas-vindas -->
    <div id="welcome-content">
    <h1>Entre em Contato</h1>
    <p>Estamos aqui para responder suas perguntas e agendar consultas. Entre em contato conosco hoje mesmo.</p>
    
</div>
    <img id="welcome-image" src="css/img/4.jpg" alt="Imagem de fundo" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0;">

</div>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agendar Consulta</title>
  <!-- Bootstrap CSS -->
  <style>
   h2{
        text-align: center;
    }
  
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h2 class="mt-5 mb-4">Agendar Consulta</h2>
    <form action="processa_consulta.php" method="post">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label" for="NomeCompleto">Nome completo:</label>
                <input type="text" class="form-control" id="NomeCompleto" name="NomeCompleto" placeholder="Digite seu nome completo" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="Email">E-mail:</label>
                <input type="Email" class="form-control" id="Email" name="Email" placeholder="Digite seu e-mail" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="Telefone">Telefone:</label>
                <input type="tel" class="form-control" id="Telefone" name="Telefone" placeholder="Digite seu telefone" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="DataConsulta">Data:</label>
                <input type="date" class="form-control" id="dataDataConsulta" name="DataConsulta" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label" for="HoraConsulta">Hora:</label>
                <input type="time" class="form-control" id="HoraConsulta" name="HoraConsulta" required>
            </div>
            <div class="mb-3">
            <label class="form-label" for="TipoEspecialidade">Tipo de Especialidade:</label>
            <select class="form-select" id="TipoEspecialidade" name="TipoEspecialidade" required>
            <option selected disabled>-- Selecionar a Especialidade --</option>
            <?php 
            $conn = mysqli_connect ('localhost','root','','projecto_clinica') or die(mysqli_erro());
           mysqli_set_charset($conn,'UTF8') or die(mysqli_erro($conn));
           $sql = mysqli_query($conn,"select nome from especialidade where id >= 1");
           while($row = mysqli_fetch_assoc($sql)){
            echo "<option>".$row['nome']."</option>";
           }
           ?></select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="Mensagem">Mensagem:</label>
                <textarea class="form-control" id="Mensagem" name="Mensagem" rows="5" placeholder="Digite sua mensagem"></textarea>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Agendar</button>
    </div>
</form>

  </div>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rodapé</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    /* Rodapé */
    footer {
      background-color: #28a745; /* Cor de fundo verde */
      color: #fff; /* Cor do texto branco */
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Fonte do texto */
    }

    footer a {
      color: #fff; /* Cor do texto branco */
      text-decoration: none; /* Sem sublinhado */
    }

    footer a:hover {
      text-decoration: underline; /* Sublinhado no hover */
    }

    footer .list-unstyled li {
      text-align: justify; /* Justifica o texto */
    }

    footer .list-inline-item a:hover {
      color: #f8f9fa; /* Cor do texto mais clara no hover */
    }
  </style>
</head>
<body>
  <footer class="container-fluid py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5>Sobre Nós</h5>
          <p>A Clínica MJM, fundada por Mussa Juma em 2020, nasceu da visão de proporcionar cuidados de saúde excepcionais e acessíveis à comunidade de Nampula e arredores. Desde o seu início, a clínica tem se destacado como um centro de excelência médica, comprometido em oferecer serviços de alta qualidade e tratamento compassivo aos pacientes..</p>
        </div>
        <div class="col-md-2">
          <h5>Páginas</h5>
          <ul class="list-unstyled">
            <li><a href="index.php">Página inicial</a></li>
            <li><a href="sobenos.php">Sobre nós</a></li>
            <li><a href="Expecialidades.php">Especialidades</a></li>
            <li><a href="Contacto.php">Contactos</a></li>
            <li><a href="Noticias">Notícias</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Encontre-nos</h5>
          <ul class="list-unstyled">
            <li><i class="bi bi-geo-alt-fill"></i> rua da Apolitecnica, nº 101, Natikie - Nampula</li>
            <li><i class="bi bi-envelope-fill"></i> clinicamjm@gmail.com</li>
            <li><i class="bi bi-telephone-fill"></i> +258 87 300 3819 / +258 84 300 3819 </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Redes Sociais</h5>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#"><i class="bi bi-facebook"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="bi bi-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <p class="text-center mt-3">Clínica MJM - Nampula &copy; 2024</p>
    <img src="css/img/logo1.PNG" alt="Logo Clínica MJM" class="footer-logo d-block mx-auto" style="max-width: 150px;">
  </footer>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



<!-- jQuery e Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Seleciona todos os elementos com a classe .nav-link
const navLinks = document.querySelectorAll('.nav-link');

// Itera sobre cada elemento .nav-link
navLinks.forEach(link => {
    // Adiciona um evento de clique a cada link
    link.addEventListener('click', () => {
        // Remove a classe 'clicked' de todos os links
        navLinks.forEach(link => link.classList.remove('clicked'));
        // Adiciona a classe 'clicked' ao link clicado
        link.classList.add('clicked');
    });
});

</script>
<script src="css/js/all.js" crossorigin="anonymous"></script>
</body>
</html>
