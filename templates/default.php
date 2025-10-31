<?php

/**
 * @var Kirby\Cms\Page $page
 */

?>

<?php snippet('document', slots: true) ?>
<?php slot() ?>

<?php snippet('layouts', ['layout_src' => $page->layouts()]) ?>

<?php endslot() ?>
<?php endsnippet() ?>