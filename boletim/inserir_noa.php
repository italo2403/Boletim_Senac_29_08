<?php
// Verifica se o ID do aluno está presente na URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID do aluno não especificado.");
}

$aluno_id = $_GET['id'];

// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "boletim";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem sucedida
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Consulta SQL para recuperar as informações do aluno
$sql_aluno = "SELECT * FROM alunos2A WHERE aluno_id_2a = ?";
$stmt = $conn->prepare($sql_aluno);
$stmt->bind_param("i", $aluno_id);
$stmt->execute();
$result_aluno = $stmt->get_result();

if ($result_aluno->num_rows == 0) {
    die("Aluno não encontrado.");
}

$row_aluno = $result_aluno->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Notas</title>
    <style>
        /* Adicione seu CSS aqui */
    </style>
</head>
<body>
    <h1>Editar Notas do Aluno</h1>
    <form action="atualizar_notas.php" method="POST">
        <input type="hidden" name="aluno_id" value="<?php echo htmlspecialchars($row_aluno['aluno_id_2a']); ?>">

        <!-- Campos de edição -->
        <div class="form-group">
            <label for="disciplina">Disciplina:</label>
            <input type="text" id="disciplina" name="disciplina" value="<?php echo htmlspecialchars($row_aluno['disciplina']); ?>" required>
        </div>

        <div class="form-group">
            <label for="unidade">Unidade:</label>
            <input type="text" id="unidade" name="unidade" value="<?php echo htmlspecialchars($row_aluno['unidade']); ?>" required>
        </div>

        <!-- Adicione os campos restantes como os de notas e outros aqui -->

        <button type="submit" class="btn">Atualizar Notas</button>
    </form>
</body>
</html>

<?php
$conn->close();
?>
