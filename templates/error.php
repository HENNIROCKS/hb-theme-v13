<?php

use Kirby\Toolkit\Str;

/**
 * @var Kirby\Cms\Page $page
 */

// $image = $page->images()->toFiles()->shuffle()->first();
$image = $page->images()->shuffle()->first();

?>

<?php snippet('document', slots: true) ?>
<?php slot() ?>

<main class="main main--<?= $page->template() ?> __container">
    <section class="section">
        <h1 class="heading heading--h1" id="<?= Str::slug($page->title()) ?>">
            <?= $page->title() ?>
        </h1>
        <hr class="line" />
        <?php if ($image): ?>
            <figure class="image">
                <a class="image__link" href="<?= $page->url() ?>" title="Klicken um zu sehen, was passiert">
                    <img alt="Ein zufälliges GIF" src="<?= $image->url() ?>">
                </a>
            </figure>
        <?php endif ?>
    </section>
</main>

<?php endslot() ?>
<?php endsnippet() ?>