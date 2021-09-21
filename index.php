<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Senhas</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/3427/3427189.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
    <?php include_once "function.php"; ?>
    <div class="container">
        <h2 class="title">Gerador de senhas fortes</h2>
        <form action="" method="POST">
            <div class="inputBox">
                <input type="text" value="<?php echo $password; ?>" placeholder="Clique para gerar sua senha" id="password" readonly>
                <button class="copyIcon" type="button" onclick="copyFunction()"><i class="fa fa-clone"></i></button>
            </div>
            <div class="inputBox button">
                <button name="generate" type="submit">Gerar senha</button>
            </div>
    </div>

    <script>
        function copyFunction() {
            var password = document.getElementById("password");
            password.select();
            password.setSelectionRange(0, 999999);
            document.execCommand("copy");
            window.alert("Copiado com sucesso.");

        }
    </script>

</body>

</html>