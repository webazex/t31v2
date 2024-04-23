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