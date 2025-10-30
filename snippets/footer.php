<?php

// use Kirby\Toolkit\I18n;
// use Kirby\Toolkit\Str;

/**
 * @var \Kirby\Cms\Site $site
 */

$text = $site->footertext()->or('Made with Kirby and <i class="icon icon__heart"></i> &copy; (date: year)');

?>

<footer class="footer">

    <div class="footer__top">
        <?php if ($text->isNotEmpty()) : ?>
            <div class="footer__text">
                <?= $text->kt() ?>
            </div>
        <?php endif ?>

        <?php snippet('list-icons', ['class' => 'footer']) ?>
    </div>

    <div class="footer__bottom">
        <ol class="footer__list footer__list--pages">
            <?php foreach (collection('pages-published') as $page): ?>
                <li class="footer__list-item">
                    <a class="footer__link<?php e($page->isOpen(), ' footer__link--active') ?>" href="<?= $page->url() ?>" title="<?php /* echo I18n::template('link.title.topage', null, ['page' => $page->title()]) */ ?>">
                        <?= $page->title() ?>
                        <?php if ($page->hasChildren()) : ?>
                            <span class="footer__badge">
                                <?= $page->children()->count() ?>
                            </span>
                        <?php endif ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ol>
    </div>

</footer>