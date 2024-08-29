<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $aluno_id = $_POST['aluno_id'];
    $disciplina = $_POST['disciplina'];
    $unidade = $_POST['unidade'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $conceito = $_POST['conceito'];
    $pos_noa = $_POST['pos_noa'];
    $mencao_final_anual = $_POST['mencao_final_anual'];
    $total_faltas = $_POST['total_faltas'];
    $mencao_final_pos_noa = $_POST['mencao_final_pos_noa'];
    $resultado_final_anual = $_POST['resultado_final_anual'];

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

    // Consulta SQL para atualizar as informações do aluno
    $sql = "UPDATE alunos1B SET 
            disciplina = ?, 
            unidade = ?, 
            av1 = ?, 
            av2 = ?, 
            conceito = ?, 
            pos_noa = ?, 
            mencao_final_anual = ?, 
            total_faltas = ?, 
            mencao_final_pos_noa = ?, 
            resultado_final_anual = ? 
            WHERE aluno_id = ?";

    // Prepare e execute a consulta
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Erro na preparação da consulta: " . $conn->error);
    }

    $stmt->bind_param("ssssssssss", 
        $disciplina, 
        $unidade, 
        $nota1, 
        $nota2, 
        $conceito, 
        $pos_noa, 
        $mencao_final_anual, 
        $total_faltas, 
        $mencao_final_pos_noa, 
        $resultado_final_anual, 
        $aluno_id
    );

    if ($stmt->execute()) {
        echo "Notas atualizadas com sucesso!";
    } else {
        echo "Erro ao atualizar notas: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Método de solicitação inválido.";
}
?>

