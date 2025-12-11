<?php
include 'db.php';
$result = $conn->query("SELECT * FROM jogadores");
$res = $result->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Gestão de Jogadores</title>
    <style>
        /* ====== ESTILO GERAL ====== */
        body {
            font-family: "Segoe UI", Roboto, Arial, sans-serif;
            margin: 0;
            background: #f5f7fa;
            color: #333;
        }

        h2 {
            text-align: center;
            margin-top: 30px;
            font-size: 28px;
            color: #222;
        }

        /* ====== CONTAINER ====== */
        .container {
            max-width: 1000px;
            margin: 40px auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* ====== BOTÃO ADICIONAR ====== */
        .add-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0078D7;
            color: #fff;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            transition: 0.3s;
            margin-bottom: 20px;
        }

        .add-btn:hover {
            background-color: #005fa3;
        }

        /* ====== TABELA ====== */
        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 8px;
        }

        th,
        td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #0078D7;
            color: white;
            font-weight: 600;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #eef6ff;
            transition: 0.2s;
        }

        td {
            border-bottom: 1px solid #ddd;
        }

        /* ====== LINKS DE AÇÃO ====== */
        .actions a {
            text-decoration: none;
            color: #0078D7;
            font-weight: 500;
            margin-right: 10px;
        }

        .actions a:hover {
            text-decoration: underline;
        }

        /* ====== RESPONSIVO ====== */
        @media (max-width: 768px) {

            table,
            th,
            td {
                font-size: 14px;
            }

            .container {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Lista de Jogadores</h2>
        <a href="add.php" class="add-btn">+ Adicionar Novo Jogador</a>

        <table>
            <tr>
                <th>ID</th>
                <th>Nome Completo</th>
                <th>Apelido</th>
                <th>Nº Calçado</th>
                <th>Telefone</th>
                <th>Data Nascimento</th>
                <th>Nº Camisola</th>
                <th>Posição</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($res as $row) { ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['nome_completo']; ?></td>
                    <td><?= $row['apelido']; ?></td>
                    <td><?= $row['numero_calcado']; ?></td>
                    <td><?= $row['telefone']; ?></td>
                    <td><?= $row['data_nascimento']; ?></td>
                    <td><?= $row['numero_camisola']; ?></td>
                    <td><?= $row['posicao']; ?></td>
                    <td class="actions">
                        <a href="edit.php?id=<?= $row['id']; ?>">Editar</a> |
                        <a href="delete.php?id=<?= $row['id']; ?>">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>