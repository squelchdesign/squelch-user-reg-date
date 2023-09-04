<?php
/**
* Plugin Name: Squelch User Registration Date
* Description: Adds a sortable column to the users screen of the admin dashboard which shows the date on which the user registered
* Version: 1.0
* Author: Matt Lowe { Squelch Design }
* License: GPL2
* Text Domain: squelch-user-registration-date
* Domain Path: /languages
*/

add_action( 'plugins_loaded', function() {

    /**
     * Add a custom column heading for the user registration date
     */
    add_filter( 'manage_users_columns', function($columns) {
        $columns['user_registered'] = 'Registration Date';
        return $columns;
    } );



    /**
     * Show the customer registration date for the new custom column
     */
    add_action( 'manage_users_custom_column', function($value, $column_name, $user_id) {

        $user = get_userdata( $user_id );
        if ( 'user_registered' == $column_name ) return $user->user_registered;
        return $value;

    }, 10, 3 );



    /**
     * Enable sorting by user_registered column
     */
    add_filter( 'manage_users_sortable_columns', function($columns) {
        $columns['user_registered'] = 'user_registered';
        return $columns;
    } );

} );

