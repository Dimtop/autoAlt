<?php

/**
 * Plugin Name: autoAlt
  * License: GNU General Public License v2 or later
 *  License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */



add_action( 'admin_menu', 'autoAltMenu' );
function autoAltMenu() {
    add_menu_page(
        'autoAlt',
        'autoAlt',
        'manage_options',
        'autoAlt',
        'autoAltPage',
        '',
        5
    );
}


function autoAltPage(){
  ?>

    <div class="wrap">

      <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		<h1>Just press Run and let us do the work!</h1>
      <form action="../wp-content/plugins/autoAlt/autoAltEngine.php" method="post">
        <input type="submit" value="Run"/>
      </form>
    </div>
    <?php
}