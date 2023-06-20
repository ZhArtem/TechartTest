<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галактический вестник</title>
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/root.css">
    <link rel="stylesheet" href="./css/news.css">
</head>
<body>
    <?php include("header.php") ?>
    <main>
        <?php $last = $pageData['last'] ?>
        <section class="last-news" style="background-image: url('images/<?php echo $last['image'] ?>');">
            <div class="last-news__wrapper">
                <h1 class="last-news__title"><?php echo $last['title'] ?></h1>
                <div class="last-news__announce"><?php echo $last['announce'] ?></div>
            </div>
        </section>
        <section class="news">
            <h1 class="news__header">Новости</h1>
            <div class="news__content">
                <?php foreach($pageData['news'] as $item): ?>
                    <a class="news__wrapper" href="/news/?id=<?php echo $item['id'] ?>">
                        <div class="news__date">
                            <?php echo date('d.m.Y', strtotime($item['date'])); ?>
                        </div>
                        <h2 class="news__title"><?php echo $item['title'] ?></h2>
                        <div class="news__announce"><?php echo $item['announce'] ?></div>
                        <button class="news__button">Подробнее</button>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>
        <section class="pages">
            <?php $page = $pageData['page'] ?>
            <?php if($page > 1): ?>
                <a class="pages__prev" href="/news?page=<?php echo $page - 1 ?>">
                    <img src="images/arrow_next.svg" alt="prev page">
                </a>
            <?php endif; ?>
            <?php if($page > 2): ?>
                <a class="pages__num" href="/news?page=<?php echo $page - 2 ?>"><?php echo $page - 2 ?></a>
            <?php endif; ?>
            <?php if($page > 1): ?>
                <a class="pages__num" href="/news?page=<?php echo $page - 1 ?>"><?php echo $page - 1 ?></a>
            <?php endif; ?>
            <a class="pages__num pages__num_cur" href="/news?page=<?php echo $page ?>"><?php echo $page ?></a>
            <?php if($page < $pageData['total_pages']): ?>
                <a class="pages__num" href="/news?page=<?php echo $page + 1 ?>"><?php echo $page + 1 ?></a>
            <?php endif; ?>
            <?php if($page < $pageData['total_pages'] - 1): ?>
                <a class="pages__num" href="/news?page=<?php echo $page + 2 ?>"><?php echo $page + 2 ?></a>
            <?php endif; ?>
            <?php if($page < $pageData['total_pages']): ?>
                <a class="pages__next" href="/news?page=<?php echo $page + 1 ?>">
                    <img src="images/arrow_next.svg" alt="next page">
                </a>
            <?php endif; ?>
        </section>
    </main>
    <?php include("footer.php") ?>
</body>
</html>
