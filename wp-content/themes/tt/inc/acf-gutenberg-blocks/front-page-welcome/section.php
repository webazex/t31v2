<?php
	$welcomeDataSection = get_field('welcome');
	if(!empty($welcomeDataSection)):
?>
<section class="welcome-frontpage-section">
	<div class="site-size">
		<div class="site-size__frontpage-welcome-container">
			<?php if(!empty($welcomeDataSection['title'])):?>
				<h1 class="frontpage-welcome-container__title-h1">
					<span class="title-h1__text">
						<?php echo $welcomeDataSection['title'];?>
					</span>
				</h1>
				<?php
			endif;
		if(!empty($welcomeDataSection['subtitle'])):
			?>
			<p class="frontpage-welcome-container__subtitle">
				<?php echo $welcomeDataSection['subtitle']; ?>
			</p>
		<?php endif;?>
		</div>
	</div>
</section>
<?php endif;?>