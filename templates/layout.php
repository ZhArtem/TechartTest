<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageData['title'] ?></title>
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/root.css">
    <link rel="stylesheet" href="/css/news.css">
    <link rel="stylesheet" href="/css/detail.css">
</head>
<body>
    <header>
        <section class="header">
            <a href="/news/" class="header__link">
                <img class="header__logo" src="/images/logo.svg" alt="logo">
                <h1 class="header__title">Галактический<br>вестник</h1>
            </a>
        </section>
    </header>

    <?= $content ?>

    <footer>
        <p class="copyright">© 2023 — 2412 «Галактический вестник»</p>
    </footer>
</body>
</html>
