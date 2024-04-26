<?php
$data = get_field('posts');
if(!empty($data)):
?>
<section id="features">
	<div class="container">
		<div class="row">
			<?php
			foreach ($data as $dataItem):
				$item = parseAnyPost($dataItem['post']);
				$price = (!empty($item['price']))? $item['price'] : false;
				$estimate = (!empty($item['estimate']))? $item['estimate'] : false;
				$src = (!empty($item['src']))? $item['src'] : getPlaceholderSrc();
				?>
					<div class="col-3 col-6-medium col-12-small">
						<section>
							<a href="<?php echo $item['link'];?>" class="bordered-feature-image">
								<img src="<?php echo $src; ?>" alt="<?php echo $item['title']; ?>" />
							</a>
							<h2>
								<?php echo $item['title']; ?>
							</h2>
							<div>
								<?php echo $item['excerpt']; ?>
							</div>
						</section>
					</div>
			<?php endforeach;?>
		</div>
	</div>
</section>
<?php
else:
	renderNoContentSection();
endif;
	?>