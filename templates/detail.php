    <main>
        <section class="cur-news">
            <?php $cur_news = $pageData['oneNews'] ?>
            <div class="cur-news__header">
                <a href="/">Главная</a> / <?= $cur_news['title'] ?>
            </div>
            <h1 class="cur-news__title"><?= $cur_news['title'] ?></h1>
            <div class="cur-news__content">
                <div class="cur-news__left">
                    <div class="cur-news__date"><?= date('d.m.Y', strtotime($cur_news['date'])); ?></div>
                    <h2 class="cur-news__announce"><?= $cur_news['announce'] ?></h2>
                    <div class="cur-news__text"><?= $cur_news['content'] ?></div>
                    <a href="<?= $_SERVER['HTTP_REFERER'] ?>">
                        <button class="cur-news__button">назад к новостям</button>
                    </a>
                </div>
                <div class="cur-news__right">
                    <img class="cur-news__image" src="/images/<?= $cur_news['image'] ?>" alt="image">
                </div>
            </div>
        </section>
    </main>
