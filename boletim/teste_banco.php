<?php
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

// Consulta SQL para recuperar dados dos alunos
$sql_alunos = "SELECT * FROM alunos1B";
$result_alunos = $conn->query($sql_alunos);

// Consulta SQL para recuperar menções e outras informações relacionadas
$sql_mencoes = "SELECT * FROM mencao";
$result_mencoes = $conn->query($sql_mencoes);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Banco de Dados</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Dados dos Alunos</h1>

    <!-- Tabela de Alunos -->
    <table>
        <thead>
            <tr>
                <th>ID Aluno</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone Responsável</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result_alunos->num_rows > 0) {
                while ($row = $result_alunos->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['aluno_id']}</td>
                            <td>{$row['nome_aluno']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['telefone_responsavel']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Nenhum aluno encontrado.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <h1>Dados de Menções</h1>

    <!-- Tabela de Menções -->
    <table>
        <thead>
            <tr>
                <th>ID Aluno</th>
                <th>ID Disciplina</th>
                <th>Menção Final Anual</th>
                <th>Total Faltas</th>
                <th>Menção Final Pós NOA</th>
                <th>Resultado Final Anual</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result_mencoes->num_rows > 0) {
                while ($row = $result_mencoes->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['aluno_id']}</td>
                            <td>{$row['id_disciplina']}</td>
                            <td>{$row['mencao_final_anual']}</td>
                            <td>{$row['total_faltas']}</td>
                            <td>{$row['mencao_final_pos_noa']}</td>
                            <td>{$row['resultado_final_anual']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Nenhuma menção encontrada.</td></tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>
<?php
$conn->close();
?>
