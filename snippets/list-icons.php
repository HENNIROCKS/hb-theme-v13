<?php

use Kirby\Toolkit\Str;

/**
 * @var \Kirby\Cms\Site $site
 */

?>

<ol class="<?= $class ?>__list <?= $class ?>__list--icons">
    <?php foreach (collection('links') as $link): ?>
        <?php if ($link->display()->toBool() === true) : ?>
            <li class="<?= $class ?>__list-item">
                <a class="<?= $class ?>__link" href="<?= $link->url() ?>" rel="<?= $link->rel() ?>" target="_blank" title="Weiter zu <?= $link->name() ?>">
                    <i class="icon icon__<?= Str::lower($link->name()) ?>"></i>
                    <span class="sr-only"><?= $link->name() ?></span>
                </a>
            </li>
        <?php endif ?>
    <?php endforeach ?>
</ol>