<?php

/**
 * @var Kirby\Cms\Page $page
 */

// $image = $page->images()->toFiles()->shuffle()->first();
$image = $page->images()->shuffle()->first();

?>

<?php snippet('document', slots: true) ?>
<?php slot() ?>

<?php if ($image): ?>
    <figure class="image">
        <a class="image__link" href="<?= $page->url() ?>" title="Klicken um zu sehen, was passiert">
            <img alt="Ein zufälliges GIF" src="<?= $image->url() ?>">
        </a>
    </figure>
<?php endif ?>

<?php endslot() ?>
<?php endsnippet() ?>