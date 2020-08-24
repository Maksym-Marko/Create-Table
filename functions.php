<?php


require get_template_directory() . '/inc/create-table.php';

// we should to use global $wpdb;
global $wpdb;

// table name
$table = $wpdb->prefix . 'mx_products';

$product_table = new MxCreateTable( $table );

// add some column
	// varchar
	$product_table->varchar( 'mx_name', 200, true, 'text' );

	// longtext
	$product_table->longtext( 'mx_text' );

	// created
	$product_table->datetime( 'mx_created' );


// create columns
$product_table->create_columns( 'product_id' );

// create table
$product_table->create_table();

// product_id
$product_table->int( 'product_id' );