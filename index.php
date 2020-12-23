<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Семейная аптека</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <?php require_once('templates/header.php'); ?>

    <main class="main container">
        <?#php require_once('templates/main.php'); ?>
        <?#php require_once('templates/sub-category.php'); ?>
        <?#php require_once('templates/cart.php'); ?>
        <?#php require_once('templates/stocks.php'); ?>
        <?#php require_once('templates/contacts.php'); ?>
        <?#php require_once('templates/basket.php'); ?>
        <?php require_once('templates/make-order-form.php'); ?>
    </main>

    <?php require_once('templates/footer.php'); ?>

    <div style="display: none;">
        <?php require_once('templates/choose-city-popup.php'); ?>
    </div>

    <div style="display: none;">
        <?php require_once('templates/catalog-popup.php'); ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>