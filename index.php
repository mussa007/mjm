<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica MJM - Nampula</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="css/img/logo2.PNG">
    <style>
        *{
       font-family: 'Times New Roman', Times, serif;
    }
    
       .container {
        
    max-width: 1200px;
    margin: 0 auto;
    text-align: center;
}

.mussa {
    display: flex;
    justify-content: space-around;
    margin-top: 50px;
    flex-wrap: wrap;
}

.box {
    width: 300px;
    padding: 20px;
    margin-bottom: 5px; /* Aumentando o espaçamento entre as boxes */
    background-color: lightgreen; /* Alterando a cor de fundo para verde claro */
    text-align: center;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.box i {
    font-size: 40px;
    margin-bottom: 20px;
}

.box h3 {
    font-size: 24px;
    margin-bottom: 15px;
}

.box p {
    font-size: 16px;
    color: #555;
}

.section-title {
    font-size: 28px;
    color: #333; /* Cor do texto */
    margin-bottom: 10px; /* Espaçamento inferior */
}

.section-title i {
    margin-right: 10px; /* Espaçamento à direita do ícone */
}

.section-subtitle {
    font-size: 24px;
    color: #666; /* Cor do texto */
    margin-bottom: 20px; /* Espaçamento inferior */
}

.section-subtitle i {
    margin-right: 5px; /* Espaçamento à direita do ícone */
}

.section-description {
    font-size: 18px;
    color: #777; /* Cor do texto */
    max-width: 600px; /* Largura máxima */
    margin: 0 auto; /* Centralizar horizontalmente */
}
/* Styles for the container */
/* Styles for the container */
/* Styles for the container */
.container1 {
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
    overflow: hidden; /* Para conter as colunas flutuantes */
    display: flex; /* Usar flexbox para organizar os itens */
    align-items: center; /* Alinhar os itens verticalmente */
}

/* Styles for the columns */
.col-md-6 {
    width: 50%;
    box-sizing: border-box; /* Inclui a largura da borda e do preenchimento na largura */
}

/* Estilos para o texto */
.texto {
    padding: 10px;
}

/* Estilos para a imagem */
.imagem {
    padding: 10px;
    text-align: center; /* Centralizar a imagem horizontalmente */
}

/* Estilos para a imagem dentro da coluna */
.imagem img {
    max-width: 100%; /* Garantir que a imagem não ultrapasse a largura da coluna */
    height: auto; /* Permitir que a imagem mantenha a proporção */
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
    
</div>

    <!-- Conteúdo de Especialidades -->
    <div id="specialties-content">
    <h2>Especialidades</h2>
    <p>
        Neurocirurgia, Neurologia, Ginecologia e Obstetrícia, Cirurgia Geral, Cirurgia Plástica, 
        Cirurgia Urológica, Imagiologia, Medicina interna, Psiquiatria, Cirurgia Oro-Maxilo Facial, 
        Ortopedia e Traumatologia, Oftalmologia, Dermatologia, Optometria, Estomatologia, 
        Otorrinolaringologia, Atendimento 24h/7, serviço de ambulância e assistência domiciliar.
    </p>
   
</div>

    <!-- Imagens de fundo -->
    <img id="welcome-image" src="css/img/004.png" alt="Imagem de fundo" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0;">
    <img id="specialties-image" src="css/img/alter1.png" alt="Imagem de fundo" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0; display: none;">

    <script>
        // Função para alternar entre Boas-vindas e Especialidades
        function rotateWelcomeSpecialties() {
            const welcomeContent = document.getElementById('welcome-content');
            const specialtiesContent = document.getElementById('specialties-content');
            const welcomeImage = document.getElementById('welcome-image');
            const specialtiesImage = document.getElementById('specialties-image');

            if (welcomeContent.style.display !== 'none') {
                // Exibir Especialidades, ocultar Boas-vindas
                welcomeContent.style.display = 'none';
                specialtiesContent.style.display = 'block';
                welcomeImage.style.display = 'none';
                specialtiesImage.style.display = 'block';
            } else {
                // Exibir Boas-vindas, ocultar Especialidades
                welcomeContent.style.display = 'block';
                specialtiesContent.style.display = 'none';
                welcomeImage.style.display = 'block';
                specialtiesImage.style.display = 'none';
            }
        }

        // Chamar a função de rotação a cada 5 minutos (300000 ms)
        setInterval(rotateWelcomeSpecialties, 3800); // 300000 ms = 5 minutos
    </script>
</div>

<div class="mussa">
   
<div class="container">
<div class="container text-center">
    <div class="section-title">
        <i class="fas fa-star fa-2x"></i>
        <h2>Suas Vantagens</h2>
    </div>
    <div class="section-subtitle">
        <i class="fas fa-question-circle fa-lg"></i>
        <p>Por Que Nos Escolher</p>
    </div>
    <div class="section-description">
        <p>Prestamos todos os tipos de serviços com médicos profissionais especializados em diferentes áreas.</p>
    </div>
</div>

    </div>
   
    <div class="box">
        <i class="fas fa-stethoscope"></i>
        <h3>Atendimento Médico</h3>
        <p>Temos profissionais especializados e renomados para cuidar da sua saúde.</p>
    </div>

    <div class="box">
        <i class="fas fa-heartbeat"></i>
        <h3>Serviços Médicos</h3>
        <p>Oferecemos uma variedade de serviços, incluindo cirurgia, pediatria e neurocirurgia.</p>
    </div>

    <div class="box">
        <i class="fas fa-clock"></i>
        <h3>Flexibilidade 24/7</h3>
        <p>Estamos disponíveis 24 horas por dia, 7 dias por semana, para atender às suas necessidades de saúde.</p>
    </div>
</div>

<div class="container1">
    <div class="col-md-6 texto">
        <h2>A Parceria Inestimável da Clínica MJM com o Governo Moçambicano pela Saúde Pública</h2>
        <p>
A Clínica MJM é uma aliada crucial do Governo Moçambicano na missão de garantir cuidados de saúde acessíveis e de qualidade para todos os cidadãos. Com uma colaboração sólida e contínua, a Clínica MJM tem sido um parceiro confiável em diversas iniciativas governamentais voltadas para a promoção da saúde e bem-estar da população.
<br>
<br>
Desde a prestação de serviços médicos de excelência até a participação ativa em programas de prevenção e educação em saúde, a Clínica MJM demonstra um compromisso inabalável com a visão do governo de construir um sistema de saúde resiliente e abrangente.</p>
    </div>
    <div class="col-md-6 imagem">
        <img src="css/img/images.jpg" alt="Imagem de exemplo">
    </div>
</div>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Depoimentos</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .testimonial {
      background-color: #f8f9fa; /* Cor de fundo */
      border-radius: 10px; /* Bordas arredondadas */
      padding: 20px; /* Espaçamento interno */
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra */
    }
    .testimonial p {
      font-size: 18px; /* Tamanho do texto */
      color: #495057; /* Cor do texto */
    }
    .testimonial i {
      font-size: 24px; /* Tamanho do ícone */
      color: #6c757d; /* Cor do ícone */
    }
    .testimonial .client-name {
      font-weight: bold; /* Texto em negrito */
      margin-top: 10px; /* Espaçamento superior */
    }
    .comment-input {
      border: 1px solid #ced4da; /* Borda */
      border-radius: 5px; /* Bordas arredondadas */
      padding: 10px; /* Espaçamento interno */
      width: 100%; /* Largura total */
    }
  </style>
</head>
<body>
  <div class="container py-5">
    <h2 class="text-center mb-5">Depoimentos de Clientes</h2>
    <div id="carouselTestimonials" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="testimonial">
            <p><i class="bi bi-chat-right-quote"></i> "Excelente atendimento! Os profissionais são muito atenciosos e prestativos."</p>
            <p class="client-name"><i class="bi bi-person"></i> Ana L.</p>
            
          </div>
        </div>
        <div class="carousel-item">
          <div class="testimonial">
            <p><i class="bi bi-chat-right-quote"></i> "Estou muito satisfeito com os serviços prestados. Recomendo a todos!"</p>
            <p class="client-name"><i class="bi bi-person"></i> João P.</p>
    
          </div>
        </div>
        <div class="carousel-item">
          <div class="testimonial">
            <p><i class="bi bi-chat-right-quote"></i> "Atendimento rápido e eficiente. Com certeza voltarei!"</p>
            <p class="client-name"><i class="bi bi-person"></i> Maria S.</p>
           
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>
  </div>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>





<div class="agendar">
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agendar Consulta</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h2 class="mt-5 mb-4">Agendar Consulta</h2>
    <form action="pro.php" method="post">
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
