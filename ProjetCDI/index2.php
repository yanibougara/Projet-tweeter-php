


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="/css/composants/modal.css">
    <link rel="stylesheet" href="./css/composants/formulaire.css">
    <link rel="stylesheet" href="./css/composants/sidebar.css">
    

    <script defer src="./js/localstorage.js"></script>
    <script defer src="./js/app.js"></script>
    <script defer src="./js/localstorage.js"></script>
    <script defer src="./js/formulaire.js"></script>
    <script defer src="./js/app.js"></script>
    <script defer src="./js/index2.js"></script>
    <script defer src="./js/sidebar.js"></script>
</head>
    <body>
            <a id="cross" href="#"> <span id="hamburger"></span> </a>
            <main class="content">
                <?php require_once './sidebar.template.php'; ?>
                <section class="center">
                    <h1>o'range</h1>
                    <p>abonne toi au meilleur réseau social</p>
                    <?php require_once './posts.template.php'; ?>
                </section>
                <section class="right">
                    <?php require_once './tags.php'; ?>
                    <?php require_once './formulaire.template.php'; ?>
                </section>
            </main>
    </body>
</html>