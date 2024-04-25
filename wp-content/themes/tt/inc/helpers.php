<?php
function initGutenBlock($blockName){
    try {
        $gutenBlockFullPatch = get_template_directory().DS.'inc'.DS.'acf-gutenberg-blocks'.DS.$blockName.DS.'block.php';
        $gutenViewFullPatch = getGbSection($blockName);
        if(!file_exists($gutenBlockFullPatch)){
            Throw new Exception("Not found Gutenberg $blockName block");
        }
        if(!file_exists($gutenViewFullPatch)){
            Throw new Exception("Not found Gutenberg $blockName section");
        }
        require_once $gutenBlockFullPatch;
    }catch (\Exception $e){
        echo '<pre class="wbzx-debug">';
        echo $e->getFile();
        echo $e->getMessage();
        echo $e->getCode();
        echo $e->getLine();
        echo '</pre>';
    }
}

function getGbSection($name):string
{
    return get_template_directory().DS.'inc'.DS.'acf-gutenberg-blocks'.DS.$name.DS.'section.php';
}

function renderNoContentSection( $data = [] ) {
	$args['link-to'] = (!empty($data['link']))? esc_url($data['link']) : get_home_url();
	$args['text-to-link'] = (!empty($data['text-link']))? $data['text-link'] : __('Повернутись на головну', 'tt');
	$args['text'] = (!empty($data['text']))? $data['text'] : __('Контент поки відсутній але ми працюємо над цим', 'tt');
	get_template_part('views'.DS.'partials'.DS.'empty', '', $args);
}

function getAnyPosts(string $type, array $args = []){
	require_once get_template_directory().DS.'classes'.DS.'Core'.DS.'Core.php';
	return Core::getAnyPosts($type, $args);
}