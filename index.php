<html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Felipe Alves <felipe@wikisolucoes.com.br>">

<head>
    <title>PHPMailer Tester</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1>PHPMailer Tester</h1>
                <form action="" method="GET">
                    <input type="text" name="smtp_host" placeholder="SMTP Host">
                    <input type="text" name="smtp_user" placeholder="SMTP User">
                    <input type="text" name="smtp_pass" placeholder="SMTP Pass">
                    <input type="text" name="smtp_port" placeholder="SMTP Port">
                    <input type="text" name="mail_from" placeholder="E-Mail From">
                    <input type="text" name="mail_to" placeholder="E-Mail To">
                    <button type="submit">Enviar</button>
                </form>
                <div class="alert alert-light" role="alert">
                    <?php require 'mailer.php'?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>