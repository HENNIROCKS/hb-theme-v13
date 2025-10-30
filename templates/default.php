<?php

/**
 * @var Kirby\Cms\Page $page
 */

?>

<?php snippet('document', slots: true) ?>
<?php slot() ?>

<?php if ($page->date()): ?>
    <div __class="page__infos container">
        <?= $page->date()->toDate('d. MMMM YYYY') ?>
    </div>
<?php endif ?>

<?php snippet('layouts', ['layout_src' => $page->layouts()]) ?>

<?php endslot() ?>
<?php endsnippet() ?>