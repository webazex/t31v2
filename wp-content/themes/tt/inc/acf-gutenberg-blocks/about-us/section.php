<?php
$data = getAboutUs();
?>
<section id="content">
	<div class="container">
		<div class="row aln-center">
			<?php
				foreach ( $data as $k => $v ) {
					switch ($k){
						case "text-column":
							get_template_part(DS.'views'.DS.'partials'.DS.'about-us-section-columns'.DS.'text', '', $v);
							break;
						case "advantages":
							get_template_part(DS.'views'.DS.'partials'.DS.'about-us-section-columns'.DS.'advantages', '', $v);
							break;
						case "reviews":
							get_template_part(DS.'views'.DS.'partials'.DS.'about-us-section-columns'.DS.'reviews', '', $v);
							break;
					}
				}
			?>
		</div>
	</div>
</section>
