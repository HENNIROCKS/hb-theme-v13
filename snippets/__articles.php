<?php

/**
 * @var Kirby\Cms\Page $page
 */

?>

<?php /*
<div class="articles articles__container">
    <?php foreach (collection($collection) as $page): ?>
        <article class="articles__item articles__item--<?= $class ?>">
            <a class="articles__link" href="<?= $page->url() ?>">

                <?php if ($image = $page->previewimage()->toFile() ?? $page->images()->first()): ?>
                    <img alt="" class="articles__image" src="<?= $image->crop(600, 250, 80)->url() ?>" />
                <?php else: ?>
                    <?= asset('media/plugins/hennirocks/hb-theme-v13/images/blank.gif')->crop(600, 250, 80) ?>
                <?php endif ?>

                <span class="articles__title">
                    <?= $page->title() ?>
                    <?php if ($page->date()->isNotEmpty()): ?>
                        <br>
                        <?= $page->date()->toDate('d. MMMM YYYY') ?>
                    <?php endif ?>
                </span>

            </a>
        </article>
    <?php endforeach ?>
</div>
*/ ?>

<article class="articles__item articles__item--<?= $class ?>">
    <a class="articles__link" href="<?= $article->url() ?>">

        <?php if ($image = $article->previewimage()->toFile() ?? $article->images()->first()): ?>
            <img alt="" class="articles__image" src="<?= $image->crop(600, 250, 80)->url() ?>" />
        <?php else: ?>
            <?= asset('media/plugins/hennirocks/hb-theme-v13/images/blank.gif')->crop(600, 250, 80) ?>
        <?php endif ?>

        <span class="articles__title">
            <?= $article->title() ?>
            <?php if ($article->date()->isNotEmpty()): ?>
                <br>
                <?= $article->date()->toDate('d. MMMM YYYY') ?>
            <?php endif ?>
        </span>

    </a>
</article>