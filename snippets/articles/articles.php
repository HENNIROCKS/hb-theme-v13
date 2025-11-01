<?php /* <div class="articles articles--<?= $class ?>">

    <div class="articles__list js-articles" data-page="<?= $pagination->nextPage() ?>">
        <?php foreach ($articles as $article): ?>
            <?php snippet('articles/article', ['article' => $article]) ?>
        <?php endforeach ?>
    </div>

    <button accesskey="m" class="articles__button js-more">
        Mehr laden
    </button>

</div> */ ?>

<div class="articles articles--<?= $class ?>">
    <div class="articles__list">
        <?php foreach ($articles as $article): ?>
            <?php snippet('articles/article', ['article' => $article]) ?>
        <?php endforeach ?>
    </div>
</div>