<?php
/*
Plugin Name: Devtool Bismol
Plugin URI: https://github.com/MakiloTeam/Devtool-Bismol
Description: A cure for your bloated local dev environment.
Version: 1.0.0
Author: Makilo
Author URI: https://makiloteam.co.uk
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Code and stuff...
 */

/**
 * Shortcode
 * [mk_shortcode]
 */
function mk_shortcode_fn()
{
    ob_start();
        ?>
            <div>
                <h2>Yum Devtool Bismol!</h2>
            </div>
        <?php
    return ob_get_clean();
}
add_shortcode( 'mk_shortcode', 'mk_shortcode_fn' );
