<?php


$roots_includes = array(
  '/functions/route-function.php',
  '/functions/theme-function.php',
  '/functions/tab-function.php'
);

foreach($roots_includes as $file){
  if(!$filepath = locate_template($file)) {
    trigger_error("Error locating `$file` for inclusion!", E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);



function new_orders_columns( $columns = array() ) {

   

    // Add new columns
    $columns['order-number'] = __( 'NUMBER', 'Text Domain' );
    $columns['order-date'] = __( 'DATE', 'Text Domain' );
    $columns['order-status'] = __( 'STATUS', 'Text Domain' );
    $columns['order-total'] = __( 'TOTAL', 'Text Domain' );
    $columns['order-actions'] = __( 'ACTION', 'Text Domain' );
   

    return $columns;
}
add_filter( 'woocommerce_account_orders_columns', 'new_orders_columns' );