<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM jogadores WHERE id=$id");
$row = $result->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_completo = $_POST['nome_completo'];
    $apelido = $_POST['apelido'];
    $numero_calcado = $_POST['numero_calcado'];
    $telefone = $_POST['telefone'];
    $data_nascimento = $_POST['data_nascimento'];
    $numero_camisola = $_POST['numero_camisola'];
    $posicao = $_POST['posicao'];

    $sql = "UPDATE jogadores SET 
            nome_completo='$nome_completo',
            apelido='$apelido',
            numero_calcado='$numero_calcado',
            telefone='$telefone',
            data_nascimento='$data_nascimento',
            numero_camisola='$numero_camisola',
            posicao='$posicao'
            WHERE id=$id";
    $conn->query($sql);
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Editar Jogador</title>
    <style>
        /* ====== ESTILO GERAL ====== */
        body {
            font-family: "Segoe UI", Roboto, Arial, sans-serif;
            background-color: #f5f7fa;
            margin: 0;
            color: #333;
        }

        h2 {
            text-align: center;
            color: #222;
            margin-top: 40px;
            font-size: 28px;
        }

        /* ====== CONTAINER ====== */
        .form-container {
            max-width: 600px;
            background-color: #fff;
            margin: 40px auto;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        label {
            font-weight: 500;
            margin-bottom: 6px;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
            transition: 0.3s;
            width: 100%;
        }

        input:focus {
            border-color: #0078D7;
            outline: none;
            box-shadow: 0 0 4px rgba(0, 120, 215, 0.3);
        }

        /* ====== BOTÕES ====== */
        .btn {
            display: inline-block;
            padding: 12px 20px;
            border: none;
            background-color: #0078D7;
            color: white;
            font-size: 16px;
            font-weight: 500;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #005fa3;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #0078D7;
            font-weight: 500;
            transition: 0.2s;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        /* ====== RESPONSIVO ====== */
        @media (max-width: 600px) {
            .form-container {
                margin: 20px;
                padding: 25px;
            }
        }
    </style>
</head>

<body>
    <h2>Editar Jogador</h2>
    <div class="form-container">
        <form method="post">
            <div>
                <label>Nome Completo:</label>
                <input type="text" name="nome_completo" value="<?php echo $row['nome_completo']; ?>" required>
            </div>
            <div>
                <label>Apelido:</label>
                <input type="text" name="apelido" value="<?php echo $row['apelido']; ?>" required>
            </div>
            <div>
                <label>Nº Calçado:</label>
                <input type="number" name="numero_calcado" value="<?php echo $row['numero_calcado']; ?>" required>
            </div>
            <div>
                <label>Telefone:</label>
                <input type="text" name="telefone" value="<?php echo $row['telefone']; ?>" required>
            </div>
            <div>
                <label>Data de Nascimento:</label>
                <input type="date" name="data_nascimento" value="<?php echo $row['data_nascimento']; ?>" required>
            </div>
            <div>
                <label>Nº Camisola:</label>
                <input type="number" name="numero_camisola" value="<?php echo $row['numero_camisola']; ?>" required>
            </div>
            <div>
                <label>Posição:</label>
                <input type="text" name="posicao" value="<?php echo $row['posicao']; ?>" required>
            </div>
            <button type="submit" class="btn">Atualizar</button>
        </form>
        <a href="index.php" class="back-link">← Voltar à Lista de Jogadores</a>
    </div>
</body>

</html>