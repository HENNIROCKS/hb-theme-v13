<?php

/**
 * @var Kirby\Cms\Page $page
 * @var \Kirby\Cms\Site $site
 */

$textLeft   = $page->homeTextLeft();
$textRight  = $page->homeTextRight();
$textButton = $page->homeTextButton();

?>

<?php snippet('document', slots: true) ?>
<?php slot() ?>

<main class="home">
    <div class="home__left">
        <?php if ($textLeft->isNotEmpty()): ?>
            <div><?= $textLeft->kt() ?></div>
        <?php else: ?>
            <?= $site->title() ?>
        <?php endif ?>
    </div>
    <div class="home__right">
        <?php if ($textRight->isNotEmpty()): ?>
            <div class="home__text" style="font-size: var(--text-base); width: 50%">
                <?= $textRight->kt() ?>
            </div>
        <?php else: ?>
            <?php snippet('list-icons', ['class' => 'home']) ?>
        <?php endif ?>
    </div>
    <a class="home__button" href="<?= $site->children()->listed()->first() ?>" title="Homepage betreten">
        <span><?= $textButton->or("Eingang") ?></span>
    </a>
</main>

<?php endslot() ?>
<?php endsnippet() ?>