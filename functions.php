<?php

function deregister_gfonts_ffs() {
  wp_deregister_style('twentythirteen-fonts');
}

add_action('wp_enqueue_scripts','deregister_gfonts_ffs',100);

?>
