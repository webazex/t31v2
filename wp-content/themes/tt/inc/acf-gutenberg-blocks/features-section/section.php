<?php
$dataSettings = get_field('features-slider');
$pType = (!empty($dataSettings['type']))? $dataSettings['type'] : 'post';
$count = (!empty($dataSettings['count']))? intval($dataSettings['count']) : '-1';
$data = getAnyPosts($pType, [
	'count' => $count,
]);
if ( ! empty( $data ) ):
?>
<!-- Features -->
<section id="features">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="container-slider-features">
					<?php if(!empty($dataSettings['title'])): ?>
					<h2 class="container-slider-features__title">
						<?php echo $dataSettings['title'];?>
					</h2>
					<?php endif;?>
					<?php if(!empty($dataSettings['subtitle'])):?>
					<p class="container-slider-features__subtitle">
						<?php echo $dataSettings['subtitle'];?>
					</p>
					<?php endif;?>
					<div class="container-slider-features__slider-features">
						<?php
							foreach ($data as $item):
								$src = ($item['src'] !== false)? $item['src'] : getPlaceholderSrc();
								?>
								<a href="<?php echo $item['link']; ?>" class="bordered-feature-image slider-features__item-slider-features" data-id="<?php echo $item['id']; ?>">
									<span class="item-slider-features__title">
										<?php echo $item['title']; ?>
									</span>
									<div class="item-slider-features__image-block">
										<img src="<?php echo $src; ?>" alt="<?php echo $item['title']; ?>" class="image-block__img">
									</div>
									<p class="item-slider-features__text">
										<?php echo $item['excerpt'];?>
									</p>
								</a>
						<?php endforeach;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php else:
	renderNoContentSection();
endif; ?>
