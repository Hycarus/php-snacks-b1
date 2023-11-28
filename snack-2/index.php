<?php
if (isset($_GET['nome'])) {
    $name = $_GET['nome'];
}
if (isset($_GET['email'])) {
    $email = $_GET['email'];
}
if (isset($_GET['eta'])) {
    $age = $_GET['eta'];
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font-awesome CSS, VueJs and Axios-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- link to Font-Family and CSS Files -->
    <link rel="stylesheet" href="../css/style.css" />
    <!-- Document Title -->
    <title>Snack 2</title>
</head>

<body>

    <main>
        <div id="app" class="container mt-3 ">
            <form action="index.php" method="GET">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="nome">
                    <div id="nameHelp" class="form-text">We'll never share your name with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="text" class="form-control" id="age" name="eta">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <?php
            if (isset($age) && isset($name) && isset($email)) {
                if (is_numeric($age) && strlen($name) > 3 && strpos($email, '@') && strpos($email, '.')) { ?>
                    <div class="bg-success">
                        Accesso riuscito
                    </div>
                <?php } else { ?>
                    <div class="bg-danger">
                        Accesso negato
                    </div>
            <?php }
            } ?>

        </div>
    </main>


    <!-- My JS -->
    <script src="js/script.js" type="module"></script>
</body>

</html>