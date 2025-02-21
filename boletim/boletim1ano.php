<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senac Report</title>
    <link rel="stylesheet" href="assets/css/boletim.css">
    <style>
        button {
            margin-left: 150px;
        }
    </style>
</head>
<body>
    
<!-- Painel do Menu Lateral -->
<div class="menu-lateral">
    <a href="painel.html" class="item-menu ativo">Voltar</a>
</div>

<div class="container">
    <header>
        <div class="logo">
            <img src="assets/img/download.png" alt="Senac Logo">
        </div>
        <div class="header-text">
            <p>SERVIÇO NACIONAL DE APRENDIZAGEM COMERCIAL</p>
            <p>DEPARTAMENTO REGIONAL DE PERNAMBUCO</p>
            <p>UNIDADE EDUCAÇÃO PROFISSIONAL DO PAULISTA</p>
            <p>CURSO TÉCNICO DE INFORMÁTICA INTEGRADO AO ENSINO MÉDIO</p>
            <p>CURSO TÉCNICO EM ANÁLISE E DESENVOLVIMENTO DE SISTEMAS INTEGRADO AO ENSINO MÉDIO</p>
        </div>
        <div class="date">
            <p>DATA</p>
            <p><time datetime="<?php echo date('c'); ?>"><?php echo date('d/m/Y'); ?></time></p>
        </div>
    </header>
    <main>
        <div class="student-info">
            <form method="POST" action="">
                <label for="student-name">NOME:</label>
                <input type="text" id="student-name" name="student-name" required>
                <button type="submit">Buscar</button>
            </form>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "boletim";

                // Cria a conexão
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Verifica a conexão
                if ($conn->connect_error) {
                    die("Falha na conexão: " . $conn->connect_error);
                }

                // Obtém e escapa o nome do aluno
                $student_name = $conn->real_escape_string($_POST['student-name']);

                // Consulta SQL para buscar o aluno pelo nome
                $sql = "SELECT * FROM alunos1B WHERE nome_aluno LIKE '%$student_name%'";
                $result = $conn->query($sql);

                if ($result === false) {
                    echo "Erro na consulta SQL: " . $conn->error;
                } elseif ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // Exibe os dados do aluno para depuração
                        echo "<pre>";
                        // var_dump($row);
                        echo "</pre>";

                        echo "<p>NOME: <span>{$row['nome_aluno']}</span></p>";
                        echo "<p>TURMA: <span>B</span></p>";
                        echo "<p>ANO: <span>2024</span></p>";

                        // Consulta para buscar as notas do aluno
                        $aluno_id = $row['aluno_id'];

                        // Obter notas
                        $notas_sql = "
                            SELECT 
                        a.aluno_id,
                        a.nome_aluno,
                        n.id_nota,
                        d.nome AS disciplina,
                        n.av1,
                        n.av2,
                        n.unidade,
                        n.conceito,
                        n.pos_noa AS noa,
                        n.mencao_final_anual AS mencao_final,
                        n.total_faltas,
                        n.mencao_final_pos_noa AS mencao_final_pos_noa,
                        n.resultado_final_anual AS resultado_final
                    FROM 
                        alunos1B a
                    LEFT JOIN 
                        notas_1B n ON a.aluno_id = n.aluno_id
                    LEFT JOIN 
                        disciplinas d ON n.id_disciplina = d.id_disciplina
                    WHERE 
                        a.nome_aluno LIKE '%$student_name%'
                        ";
                        $notas_result = $conn->query($notas_sql);

                        // Verifica se a consulta de notas foi bem-sucedida
                        if ($notas_result === false) {
                            echo "Erro na consulta SQL para notas: " . $conn->error;
                        } else {
                            // Exibe os dados das notas para depuração
                            echo "<pre>";
                            $notas_data = [];
                            while ($nota_row = $notas_result->fetch_assoc()) {
                                $notas_data[$nota_row['disciplina']][$nota_row['unidade']] = $nota_row;
                                // var_dump($nota_row);
                            }
                            echo "</pre>";
                        }

                        // Obter menções
                        $mencao_sql = "
                            SELECT d.nome AS disciplina, m.mencao_final_anual, m.total_faltas, m.mencao_final_pos_noa, m.resultado_final_anual
                            FROM notas_1B m
                            JOIN disciplinas d ON m.id_disciplina = d.id_disciplina
                            WHERE m.aluno_id = $aluno_id
                        ";
                        $mencao_result = $conn->query($mencao_sql);

                        // Verifica se a consulta de menções foi bem-sucedida
                        if ($mencao_result === false) {
                            echo "Erro na consulta SQL para menções: " . $conn->error;
                        } else {
                            // Exibe os dados das menções para depuração
                            echo "<pre>";
                            $mencao_data = [];
                            while ($mencao_row = $mencao_result->fetch_assoc()) {
                                $mencao_data[$mencao_row['disciplina']] = $mencao_row;
                                // var_dump($mencao_row);
                            }
                            echo "</pre>";
                        }

                        if (!empty($notas_data)) {
                            echo '<table>
                                    <thead>
                                        <tr>
                                            <th rowspan="2">COMPONENTE CURRICULAR</th>
                                            <th colspan="4">1ª UNIDADE</th>
                                            <th colspan="4">2ª UNIDADE</th>
                                            <th colspan="4">3ª UNIDADE</th>
                                            <th rowspan="2">MENÇÃO FINAL ANUAL</th>
                                            <th rowspan="2">TOTAL DE FALTAS</th>
                                            <th rowspan="2">MENÇÃO FINAL ANUAL PÓS NOA</th>
                                            <th rowspan="2">RESULTADO</th>
                                        </tr>
                                        <tr>
                                            <th>AV1</th>
                                            <th>AV2</th>
                                            <th>MENÇÃO UNIDADE</th>
                                            <th>MENÇÃO PÓS NOA</th>
                                            <th>AV1</th>
                                            <th>AV2</th>
                                            <th>MENÇÃO UNIDADE</th>
                                            <th>MENÇÃO PÓS NOA</th>
                                            <th>AV1</th>
                                            <th>AV2</th>
                                            <th>MENÇÃO UNIDADE</th>
                                            <th>MENÇÃO PÓS NOA</th>
                                        </tr>
                                    </thead>
                                    <tbody>';

                            foreach ($notas_data as $disciplina => $unidades) {
                                echo "<tr><td>{$disciplina}</td>";
                                for ($i = 1; $i <= 3; $i++) {
                                    if (isset($unidades[$i])) {
                                        echo "<td>{$unidades[$i]['av1']}</td>
                                              <td>{$unidades[$i]['av2']}</td>
                                              <td>{$unidades[$i]['conceito']}</td>
                                              <td></td>";
                                    } else {
                                        echo "<td></td><td></td><td></td><td></td>";
                                    }
                                }

                                // Dados de menção para a disciplina
                                $mencao_final_anual = isset($mencao_data[$disciplina]['mencao_final_anual']) ? $mencao_data[$disciplina]['mencao_final_anual'] : '';
                                $total_faltas = isset($mencao_data[$disciplina]['total_faltas']) ? $mencao_data[$disciplina]['total_faltas'] : '';
                                $mencao_final_pos_noa = isset($mencao_data[$disciplina]['mencao_final_pos_noa']) ? $mencao_data[$disciplina]['mencao_final_pos_noa'] : '';
                                $resultado_final_anual = isset($mencao_data[$disciplina]['resultado_final_anual']) ? $mencao_data[$disciplina]['resultado_final_anual'] : '';

                                echo "<td>{$mencao_final_anual}</td><td>{$total_faltas}</td><td>{$mencao_final_pos_noa}</td><td>{$resultado_final_anual}</td></tr>";
                            }
                            echo '</tbody></table>';
                        } else {
                            echo "<p>Nenhuma nota encontrada para o aluno.</p>";
                        }
                    }
                } else {
                    echo "<p>Nenhum aluno encontrado com o nome '$student_name'.</p>";
                }
                $conn->close();
            }
            ?>
        </div>
        <footer>
            <p>COORDENAÇÃO PEDAGÓGICA</p>
        </footer>
    </main>
</div>
<button onclick="window.print()">Imprimir</button>
</body>
</html>
