<?php

/**
 * @var Kirby\Cms\Page $page
 */

?>

<?php snippet('document', slots: true) ?>
<?php slot() ?>

<?php /* snippet('articles', ['collection' => 'portfolio-pages', 'class' => 'portfolio-page']) */ ?>

<?php /*
<div class="articles articles__container">
    <div class="articles__list js-articles" data-page="<?= $pagination->nextPage() ?>">
        <?php foreach ($articles as $article): ?>
            <?php snippet('articles', ['article' => $article, 'class' => 'portfolio-page']) ?>
        <?php endforeach ?>
    </div>
    <button accesskey="m" class="button button--more js-more">
        Mehr laden
    </button>
</div>
*/ ?>

<?php snippet('articles/articles', ['articles' => $articles, 'class' => 'portfolio']) ?>

<?php endslot() ?>
<?php endsnippet() ?>