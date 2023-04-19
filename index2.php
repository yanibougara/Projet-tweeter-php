<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link rel="stylesheet" href="./css/style.css">

    <script defer src="./js/localstorage.js"></script>
</head>
    <body>

        <a id="cross" href="#"> <span id="hamburger"></span> </a>

        <?php require_once './sidebar.template.php'; ?>
                    <!-- <main class="content">
                    <h1>o'range</h1>
                    <p>abonne toi au meilleur réseau social</p>
                    </main> -->

        <section class="right-section">
            <?php require_once './tags.php'; ?>
        </section>
    </body>
</html>