<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "boletim";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Função para obter os registros
function getNotas($conn) {
    $sql = "SELECT n.*, a.nome_aluno FROM notas_1B n
            JOIN alunos1B a ON n.aluno_id = a.aluno_id";
    $result = $conn->query($sql);

    if (!$result) {
        die("Erro na consulta: " . $conn->error);
    }

    return $result;
}

// Processar a atualização de notas
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id_nota = $_POST['id_nota'];
    $av1 = $_POST['av1'];
    $av2 = $_POST['av2'];
    $conceito = $_POST['conceito'];
    $pos_noa = $_POST['pos_noa'];
    $mencao_final_anual = $_POST['mencao_final_anual'];
    $total_faltas = $_POST['total_faltas'];
    $mencao_final_pos_noa = $_POST['mencao_final_pos_noa'];
    $resultado_final_anual = $_POST['resultado_final_anual'];

    $sql = "UPDATE notas_1B SET av1=?, av2=?, conceito=?, pos_noa=?, mencao_final_anual=?, total_faltas=?, mencao_final_pos_noa=?, resultado_final_anual=? WHERE id_nota=?";

    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Erro na preparação da consulta: " . $conn->error);
    }

    $stmt->bind_param("sssssssss", $av1, $av2, $conceito, $pos_noa, $mencao_final_anual, $total_faltas, $mencao_final_pos_noa, $resultado_final_anual, $id_nota);

    if ($stmt->execute()) {
        echo "Registro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o registro: " . $stmt->error;
    }

    $stmt->close();
}

// Obter todos os registros
$notas = getNotas($conn);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Notas dos Alunos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Notas dos Alunos</h1>
    <table>
        <thead>
            <tr>
                <th>ID Nota</th>
                <th>Nome</th>
                <th>ID Disciplina</th>
                <th>ID Aluno</th>
                <th>Unidade</th>
                <th>AV1</th>
                <th>AV2</th>
                <th>Conceito</th>
                <th>Pos NOA</th>
                <th>Menção Final Anual</th>
                <th>Total Faltas</th>
                <th>Menção Final Pos NOA</th>
                <th>Resultado Final Anual</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($notas->num_rows > 0) {
                while($row = $notas->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id_nota']; ?></td>
                <td><?php echo $row['nome_aluno']; ?></td>
                <td><?php echo $row['id_disciplina']; ?></td>
                <td><?php echo $row['aluno_id']; ?></td>
                <td><?php echo $row['unidade']; ?></td>
                <td><?php echo $row['av1']; ?></td>
                <td><?php echo $row['av2']; ?></td>
                <td><?php echo $row['conceito']; ?></td>
                <td><?php echo $row['pos_noa']; ?></td>
                <td><?php echo $row['mencao_final_anual']; ?></td>
                <td><?php echo $row['total_faltas']; ?></td>
                <td><?php echo $row['mencao_final_pos_noa']; ?></td>
                <td><?php echo $row['resultado_final_anual']; ?></td>
                <td><a href="atualizar_notas.php?id_nota=<?php echo $row['id_nota']; ?>">Editar</a></td>
            </tr>
            <?php } } else {
                echo "<tr><td colspan='13'>Nenhum registro encontrado</td></tr>";
            } ?>
        </tbody>
    </table>

    <?php if (isset($_GET['id_nota'])) {
        $id_nota = $_GET['id_nota'];
        $result = $conn->query("SELECT * FROM notas_1B WHERE id_nota='$id_nota'");
        if (!$result) {
            die("Erro na consulta: " . $conn->error);
        }
        $nota = $result->fetch_assoc();
    ?>
    <h2>Editar Nota</h2>
    <form action="index.php" method="POST">
        <input type="hidden" name="id_nota" value="<?php echo $nota['id_nota']; ?>">
        <label for="av1">AV1:</label>
        <input type="text" id="av1" name="av1" value="<?php echo $nota['av1']; ?>" ><br><br>
        <label for="av2">AV2:</label>
        <input type="text" id="av2" name="av2" value="<?php echo $nota['av2']; ?>" ><br><br>
        <label for="conceito">Conceito:</label>
        <input type="text" id="conceito" name="conceito" value="<?php echo $nota['conceito']; ?>" ><br><br>
        <label for="pos_noa">Pos NOA:</label>
        <input type="text" id="pos_noa" name="pos_noa" value="<?php echo $nota['pos_noa']; ?>" ><br><br>
        <label for="mencao_final_anual">Menção Final Anual:</label>
        <input type="text" id="mencao_final_anual" name="mencao_final_anual" value="<?php echo $nota['mencao_final_anual']; ?>" ><br><br>
        <label for="total_faltas">Total Faltas:</label>
        <input type="number" id="total_faltas" name="total_faltas" value="<?php echo $nota['total_faltas']; ?>" ><br><br>
        <label for="mencao_final_pos_noa">Menção Final Pos NOA:</label>
        <input type="text" id="mencao_final_pos_noa" name="mencao_final_pos_noa" value="<?php echo $nota['mencao_final_pos_noa']; ?>" ><br><br>
        <label for="resultado_final_anual">Resultado Final Anual:</label>
        <input type="text" id="resultado_final_anual" name="resultado_final_anual" value="<?php echo $nota['resultado_final_anual']; ?>" ><br><br>
        <input type="submit" name="update" value="Atualizar Nota">
    </form>
    <?php } ?>

    <?php
    $conn->close();
    ?>
</body>
</html>
