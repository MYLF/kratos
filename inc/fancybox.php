<?php
add_filter('the_content', 'pirobox_gall_replace');
function pirobox_gall_replace ($content){
global $post;
$pattern = "/<a(.*?)href=('|\")([^>]*).(bmp|gif|jpeg|jpg|png)('|\")(.*?)alt=('|\")([^>]*)('|\")(.*?)<\/a>/i";
$replacement = '<a$1href=$2$3.$4$5  class="fancybox" data-fancybox="gallery" data-caption=$2$8$5 $6 $10</a>';
$content = preg_replace($pattern, $replacement, $content);
return $content;
}