<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галактический вестник</title>
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/root.css">
    <link rel="stylesheet" href="../css/detail.css">
</head>
<body>
    <?php include("header.php") ?>
    <main>
        <section class="cur-news">
            <?php $cur_news = $pageData['oneNews'] ?>
            <div class="cur-news__header">
                <a href="/">Главная</a> / <?php echo $cur_news['title'] ?>
            </div>
            <h1 class="cur-news__title"><?php echo $cur_news['title'] ?></h1>
            <div class="cur-news__content">
                <div class="cur-news__left">
                    <div class="cur-news__date"><?php echo date('d.m.Y', strtotime($cur_news['date'])); ?></div>
                    <h2 class="cur-news__announce"><?php echo $cur_news['announce'] ?></h2>
                    <div class="cur-news__text"><?php echo $cur_news['content'] ?></div>
                    <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>">
                        <button class="cur-news__button">назад к новостям</button>
                    </a>
                </div>
                <div class="cur-news__right">
                    <img class="cur-news__image" src="../images/<?php echo $cur_news['image'] ?>" alt="image">
                </div>
            </div>

        </section>
    </main>
    <?php include("footer.php") ?>
</body>
</html>
