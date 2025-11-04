<article class="articles__preview">
    <a class="articles__link" href="<?= $article->url() ?>" title='Link zu "<?= $article->title() ?>"'>

        <?php if ($image = $article->previewimage()->toFile() ?? $article->images()->first()): ?>
            <img alt="" class="articles__image" src="<?= $image->crop(640, 250, 80)->url() ?>" />
        <?php endif ?>

        <span class="articles__title">
            <?= $article->title() ?>
        </span>

    </a>
</article>