<?= $site->hiddenmessage() ?>

<?php

use Kirby\Toolkit\Str;

/**
 * @var \Kirby\Cms\App $kirby
 * @var \Kirby\Cms\Page $page
 * @var \Kirby\Template\Slot $slot
 */

$theme = option('activeTheme');

?>

<!DOCTYPE html>
<html class="scroll-smooth" lang="de">

<head>
    <?php snippet('head', ['theme' => $theme]) ?>
</head>

<body class="body body--<?= str_replace('/', '-', $theme) ?>">

    <?php /* if ($page->protected()->toBool() === true) : ?>
        <?php if (!$kirby->user()) go('/') ?>
    <?php endif */ ?>

    <?php if ($page->isHomePage()): ?>

        <?= $slot ?>

    <?php else: ?>

        <?php snippet('banner') ?>
        <?php snippet('navigation-main') ?>
        <main class="main main--<?= $page->template() ?> __container">
            <section class="section" __class="section section--text">
                <h1 class="heading heading--h1" id="<?= Str::slug($page->title()) ?>">
                    <?= $page->title() ?>
                </h1>
                <hr class="line" />
                <?= $slot ?>
            </section>
        </main>
        <?php snippet('scrolltop') ?>
        <?php snippet('footer') ?>

    <?php endif ?>

    <?= js([
        // 'assets/js/scripts.js',
        // '@auto'
        'media/plugins/' . $theme . '/js/scripts.js',
        'media/plugins/' . $theme . '/js/templates/' . $page->template()  . '.js',
    ]) ?>

</body>

</html>