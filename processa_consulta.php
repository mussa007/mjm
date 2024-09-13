<?php
// Configuração do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projecto_clinica";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Processamento do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura dos dados do formulário
    $NomeCompleto = $_POST['NomeCompleto'];
    $Email = $_POST['Email'];
    $Telefone = $_POST['Telefone'];
    $DataConsulta = $_POST['DataConsulta'];
    $HoraConsulta = $_POST['HoraConsulta'];
    $TipoEspecialidade = $_POST['TipoEspecialidade'];
    $Mensagem = $_POST['Mensagem'];

 $stmt = $conn->prepare("INSERT INTO Consulta (NomeCompleto, Email, Telefone, DataConsulta, HoraConsulta, TipoEspecialidade, Mensagem) VALUES (?,?,?,?,?,?,?)");
 $stmt->bind_param("ssissss", $NomeCompleto, $Email, $Telefone, $DataConsulta, $HoraConsulta, $TipoEspecialidade, $Mensagem);

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<script>alert('Consulta agendada com sucesso!');</script>";
        header("Location: Contacto.php");
        
    } else {
        echo "Erro ao cadastrar docente.";
    }
  
    // Fechar a conexão
    $stmt->close();
    $conn->close();
}
?>
