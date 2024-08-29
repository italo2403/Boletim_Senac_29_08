<?php
// Verifica se os dados do formulário foram enviados via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se todos os campos necessários foram preenchidos
    if (isset($_POST["id_aluno"]) && isset($_POST["disciplina"]) && isset($_POST["mencao_final_anual"]) && isset($_POST["total_faltas"]) && isset($_POST["mencao_final_pos_noa"]) && isset($_POST["resultado_final_anual"])) {
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

        // Prepara a declaração SQL para inserir as menções no banco de dados
        $sql_insert_noas = "INSERT INTO mencao (aluno_id, id_disciplina, mencao_final_anual, total_faltas, mencao_final_pos_noa, resultado_final_anual) VALUES (?, ?, ?, ?, ?, ?)";

        // Prepara a declaração SQL para menções
        $stmt_noas = $conn->prepare($sql_insert_noas);
        if (!$stmt_noas) {
            die("Erro na preparação da declaração para menções: " . $conn->error);
        }

        // Itera sobre os dados recebidos do formulário para inserir menções
        for ($i = 0; $i < count($_POST["id_aluno"]); $i++) {
            $id_aluno = $_POST["id_aluno"][$i];
            $id_disciplina = $_POST["disciplina"][$i];
            $mencao_final_anual = $_POST["mencao_final_anual"][$i];
            $total_faltas = $_POST["total_faltas"][$i];
            $mencao_final_pos_noa = $_POST["mencao_final_pos_noa"][$i];
            $resultado_final_anual = $_POST["resultado_final_anual"][$i];

            // Vincula parâmetros à declaração preparada para menções
            $stmt_noas->bind_param("iissss", $id_aluno, $id_disciplina, $mencao_final_anual, $total_faltas, $mencao_final_pos_noa, $resultado_final_anual);
            // Executa a declaração preparada
            if (!$stmt_noas->execute()) {
                echo "Erro ao inserir menções para o aluno ID $id_aluno: " . $stmt_noas->error;
            }
        }

        // Fecha a declaração preparada
        $stmt_noas->close();

        // Fecha a conexão com o banco de dados
        $conn->close();

        // Redireciona para a página de confirmação
        header("Location: confirmacao.html");
        exit();
    } else {
        // Se algum campo estiver faltando, exibe uma mensagem de erro
        echo "Todos os campos obrigatórios para menções devem ser preenchidos!";
    }
} else {
    // Se o método de requisição não for POST, exibe uma mensagem de erro
    echo "Acesso não autorizado!";
}
?>
