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
        /* Importar fonte personalizada (Times New Roman) */
        * {
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
            text-align: center;
        }

        #welcome-content h1 {
            font-size: 3em;
            font-weight: bold;
            margin-bottom: 20px;
        }

        #welcome-content h4 {
            font-size: 1.5em;
            font-weight: normal;
            margin-bottom: 30px;
        }

        .btn-success {
            font-size: 1.5em;
            padding: 15px 30px;
            font-weight: bold;
        }

        /* Estilos personalizados */
        body {
            background-color: #f8f9fa;
            color: #333;
        }

        .footer-logo {
            width: 100px;
            margin-top: 10px;
        }

        .nav-green {
            background-color: #fff;
            color: #1e7e34;
        }

        .nav-green .navbar-nav .nav-link {
            color: #1e7e34;
        }

        .nav-green .navbar-nav .nav-link:hover {
            color: #ffc107;
        }

        .nav-white {
            background-color: #1e7e34;
            color: #fff;
        }

        .nav-white .navbar-nav .nav-link {
            color: #fff;
        }

        .nav-white .navbar-nav .nav-link:hover {
            color: #ff8080;
        }

        .navbar-nav .nav-link {
            padding: 5px 10px;
        }

        .navbar-nav .nav-link:hover {
            border: 2px solid #ff8080;
            border-radius: 5px;
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
            width: 80%;
            padding: 20px;
            background-color: #f0f0f0;
            border-radius: 8px;
            text-align: justify;
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
            margin-bottom: 50px;
        }
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
                <a class="nav-link" href="index.php">Página inicial</a>
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
        <h1>Atendemos Varios Problemas de Saude.</h1>
        <h4>Lhe convidamos a dar um visita a baixo e descobrir o que podemos fazer para ti e para sua familia.</h4>
    </div>
    <img id="welcome-image" src="css/img/003.jpg" alt="Imagem de fundo" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0;">
</div>

<<div class="mussa">
<div class="container">
<main class="container">
        <section>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card border-primary">
                        <div class="card-body">
                            <h2 class="card-title">Ginecologia e Obstetrícia <i class="fas fa-baby"></i></h2>
                            <p class="card-text">Ginecologia e obstetrícia é uma especialidade médica que opera no campo da obstetrícia e da ginecologia e à qual se acede após treinamento de pós-graduação universitária para o acompanhamento da saúde reprodutiva da mulher e para o tratamento de complicações obstétricas, incluída a prática cirúrgica.</p>
                            <a href="Contacto.php" class="btn btn-success"><i class="fas fa-calendar-check"></i> AGENDAR</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-secondary">
                        <div class="card-body">
                            <h2 class="card-title">Neurocirurgia <i class="fas fa-brain"></i></h2>
                            <p class="card-text">Neurocirurgia é a especialidade médica que se ocupa do tratamento de adultos, crianças, neonatos e, nos últimos anos, de fetos, portadores de doenças do sistema nervoso central e periférico.</p>
                            <a href="Contacto.php" class="btn btn-success"><i class="fas fa-calendar-check"></i> AGENDAR</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-success">
                        <div class="card-body">
                            <h2 class="card-title">Neurologia <i class="fas fa-brain"></i></h2>
                            <p class="card-text">Neurologia é a especialidade médica que trata dos distúrbios estruturais do sistema nervoso. Especificamente, ela lida com o diagnóstico e tratamento de todas as categorias de doenças que envolvem os sistemas nervoso central, periférico e autônomo, parassimpático e simpático incluindo os seus revestimentos, vasos sanguíneos, e todos os tecidos efetores, como os músculos. O correspondente cirúrgico da especialidade é a neurocirurgia.</p>
                            <a href="Contacto.php" class="btn btn-success"><i class="fas fa-calendar-check"></i> AGENDAR</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-danger">
                        <div class="card-body">
                            <h2 class="card-title">Pediatria <i class="fas fa-baby"></i></h2>
                            <p class="card-text">A pediatria é a especialidade médica dedicada à assistência à criança e ao adolescente, nos seus diversos aspectos, sejam eles preventivos ou curativos. Pessoas como crianças e adolescentes, se estiverem com doenças, devem dirigir-se ao seu pediatra.</p>
                            <a href="Contacto.php" class="btn btn-success"><i class="fas fa-calendar-check"></i> AGENDAR</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-warning">
                        <div class="card-body">
                            <h2 class="card-title">Cirurgia Geral <i class="fas fa-user-md"></i></h2>
                            <p class="card-text">Cirurgia geral é a especialidade médica cuja área de atuação compreende: Cirurgia Abdominal, Cirurgia videolaparoscópica e Cirurgia do trauma. Esta especialidade médica ocupa-se do estudo dos mecanismo fisiopatológicos, diagnóstico e tratamento de enfermidades passíveis de abordagem por procedimentos cirúrgicos.</p>
                            <a href="Contacto.php" class="btn btn-success"><i class="fas fa-calendar-check"></i> AGENDAR</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-info">
                        <div class="card-body">
                            <h2 class="card-title">Cirurgia Plástica <i class="fas fa-syringe"></i></h2>
                            <p class="card-text">A Cirurgia Plástica é uma especialidade da medicina com ampla área de atuação. Sua função é promover tratamento de patologias, de traumas e melhorar aspectos estéticos dos pacientes por meio de diversas técnicas e procedimentos que podem ser usados em variadas áreas do corpo.</p>
                            <a href="Contacto.php" class="btn btn-success"><i class="fas fa-calendar-check"></i> AGENDAR</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-light">
                        <div class="card-body">
                            <h2 class="card-title">Cirurgia Urológica <i class="fas fa-user-md"></i></h2>
                            <p class="card-text">A cirurgia urológica é a especialidade da medicina voltada a tratar problemas de saúde relacionados ao trato urinário em homens e mulheres. Além disso, também é a parte da medicina que cuida do sistema reprodutor masculino, como os testículos, próstata e pênis.</p>
                            <a href="Contacto.php" class="btn btn-success"><i class="fas fa-calendar-check"></i> AGENDAR</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-light">
                        <div class="card-body">
                            <h2 class="card-title">Medicina Interna</h2>
                            <p class="card-text">A Medicina Interna é a especialidade médica que avalia o doente adulto no seu todo, tendo em conta a complexidade do organismo humano e a interação dos vários distúrbios que podem afetar o indivíduo. É da Medicina Interna que deriva a maioria das outras especialidades médicas (como a Cardiologia, Endocrinologia, Pneumologia, etc.) e o médico especialista é chamado Internista.</p>
                            <a href="Contacto.php" class="btn btn-success"><i class="fas fa-calendar-check"></i> AGENDAR</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
 </div>
    </div>

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
            <li><a href="sobrenos.php">Sobre nós</a></li>
            <li><a href="Expecialidades.php">Especialidades</a></li>
            <li><a href="Contacto.php">Contactos</a></li>
            <li><a href="Noticias.php">Notícias</a></li>
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