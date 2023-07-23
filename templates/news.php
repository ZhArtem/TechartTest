    <main>
        <?php $last = $pageData['last'] ?>
        <section class="last-news" style="background-image: url('/images/<?= $last['image'] ?>');">
            <div class="last-news__wrapper">
                <h1 class="last-news__title"><?= $last['title'] ?></h1>
                <div class="last-news__announce"><?= $last['announce'] ?></div>
            </div>
        </section>
        <section class="news">
            <h1 class="news__header">Новости</h1>
            <div class="news__content">
                <?php foreach($pageData['news'] as $item): ?>
                    <a class="news__wrapper" href="/news/<?= $item['id'] ?>/">
                        <div class="news__date">
                            <?= date('d.m.Y', strtotime($item['date'])); ?>
                        </div>
                        <h2 class="news__title"><?= $item['title'] ?></h2>
                        <div class="news__announce"><?= $item['announce'] ?></div>
                        <button class="news__button">Подробнее</button>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>
        <section class="pages">
            <?php $page = $pageData['page'] ?>
            <?php if($page > 1): ?>
                <a class="pages__prev" href="/news/page-<?= $page - 1 ?>/">
                    <img src="/images/arrow_next.svg" alt="prev page">
                </a>
            <?php endif; ?>
            <?php if($page > 2): ?>
                <a class="pages__num" href="/news/page-<?= $page - 2 ?>/"><?= $page - 2 ?></a>
            <?php endif; ?>
            <?php if($page > 1): ?>
                <a class="pages__num" href="/news/page-<?= $page - 1 ?>/"><?= $page - 1 ?></a>
            <?php endif; ?>
            <a class="pages__num pages__num_cur" href="/news/page-<?= $page ?>/"><?= $page ?></a>
            <?php if($page < $pageData['total_pages']): ?>
                <a class="pages__num" href="/news/page-<?= $page + 1 ?>/"><?= $page + 1 ?></a>
            <?php endif; ?>
            <?php if($page < $pageData['total_pages'] - 1): ?>
                <a class="pages__num" href="/news/page-<?= $page + 2 ?>/"><?= $page + 2 ?></a>
            <?php endif; ?>
            <?php if($page < $pageData['total_pages']): ?>
                <a class="pages__next" href="/news/page-<?= $page + 1 ?>/">
                    <img src="/images/arrow_next.svg" alt="next page">
                </a>
            <?php endif; ?>
        </section>
    </main>
