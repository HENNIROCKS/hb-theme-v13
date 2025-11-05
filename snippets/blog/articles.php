<div class="articles articles--blog">

    <div class="articles__list js-articles" data-page="<?= $pagination->nextPage() ?>">
        <?php foreach ($articles as $article): ?>
            <?php snippet('blog/article', ['article' => $article]) ?>
        <?php endforeach ?>
    </div>

    <button accesskey="m" class="articles__button js-more">
        Mehr laden
    </button>

</div>