<?php

use Kirby\Toolkit\Html;

/** 
 * @var \Kirby\Cms\Block $block
 */

$caption = $block->caption();
$crop    = $block->crop()->isTrue();
$ratio   = $block->ratio()->or('auto');

$variant = $block->variant();

?>

<?php if ($variant == '2col-masonry'): ?>
	<div class="gallery gallery--masonry">
		<?php
		$columns = [[], []];
		$counter = 0;
		foreach ($block->images()->toFiles() as $image) {
			$columns[$counter % 2][] = $image;
			$counter++;
		}
		?>
		<?php foreach ($columns as $column): ?>
			<div class="gallery__column">
				<?php foreach ($column as $image): ?>
					<a data-fslightbox href="<?= $image->url() ?>">
						<?= $image ?>
					</a>
				<?php endforeach ?>
			</div>
		<?php endforeach ?>
	</div>

<?php elseif ($variant == '3col-masonry'): ?>
	<div class="gallery gallery--masonry">
		<?php
		$columns = [[], [], []];
		$counter = 0;
		foreach ($block->images()->toFiles() as $image) {
			$columns[$counter % 3][] = $image;
			$counter++;
		}
		?>
		<?php foreach ($columns as $column): ?>
			<div class="gallery__column">
				<?php foreach ($column as $image): ?>
					<a data-fslightbox href="<?= $image->url() ?>">
						<?= $image ?>
					</a>
				<?php endforeach ?>
			</div>
		<?php endforeach ?>
	</div>

<?php elseif ($variant == 'scroll-horizontal'): ?>
	<div class="gallery gallery--scroll" <?= Html::attr(['data-crop' => $crop, 'data-ratio' => $ratio], null, ' ') ?>>
		<span class="gallery__icon">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
				<path d="M16 16V12L21 17L16 22V18H4V16H16ZM8 2V5.999L20 6V8H8V12L3 7L8 2Z"></path>
			</svg>
		</span>
		<div class="gallery__container">
			<?php foreach ($block->images()->toFiles() as $image): ?>
				<a data-fslightbox href="<?= $image->url() ?>">
					<?= $image ?>
				</a>
			<?php endforeach ?>
		</div>
		<?php if ($caption->isNotEmpty()): ?>
			<div class="gallery__caption">
				<?= $caption ?>
			</div>
		<?php endif ?>
	</div>

<?php else: ?>
	<div class="gallery gallery--none">
		<?php foreach ($block->images()->toFiles() as $image): ?>
			<?= $image ?>
		<?php endforeach ?>
		<?php if ($caption->isNotEmpty()): ?>
			<div class="gallery__caption">
				<?= $caption ?>
			</div>
		<?php endif ?>
	</div>
<?php endif ?>