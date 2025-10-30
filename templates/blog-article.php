<?php

/**
 * @var Kirby\Cms\Page $page
 */

?>

<?php snippet('document', slots: true) ?>
<?php slot() ?>

<div class="page__infos container">
    <?= $page->date()->toDate('d. MMMM YYYY') ?>
</div>

<?php snippet('layouts', ['layout_src' => $page->layouts()]) ?>

<?php endslot() ?>
<?php endsnippet() ?>