<?php

/**
 * @var Kirby\Cms\Page $page
 */

?>

<?php snippet('document', slots: true) ?>
<?php slot() ?>

<?php /* echo $page->date()->toDate('d. MMMM YYYY') */ ?>

<?php snippet('layouts', ['layout_src' => $page->layouts()]) ?>

<?php endslot() ?>
<?php endsnippet() ?>