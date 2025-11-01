<?php

use Kirby\Toolkit\Str;

/**
 * @var Kirby\Cms\Page $page
 */

?>

<?php snippet('document', slots: true) ?>
<?php slot() ?>

<?php /* snippet('articles', ['collection' => 'blog-articles', 'class' => 'blog-article']) */ ?>

<?php /* 
<div class="articles articles__container">
    <div class="articles__list js-articles" data-page="<?= $pagination->nextPage() ?>">
        <?php foreach ($articles as $article): ?>
            <?php snippet('articles', ['article' => $article, 'class' => 'blog-article']) ?>
        <?php endforeach ?>
    </div>
    <button accesskey="m" class="button button--more js-more">
        Mehr laden
    </button>
</div>
*/ ?>

<main class="main main--<?= $page->template() ?> __container">
    <section class="section">
        <h1 class="heading heading--h1" id="<?= Str::slug($page->title()) ?>">
            <?= $page->title() ?>
        </h1>
        <hr class="line" />
        <?php snippet('articles/articles', ['articles' => $articles, 'class' => 'blog']) ?>
    </section>
</main>

<?php endslot() ?>
<?php endsnippet() ?>