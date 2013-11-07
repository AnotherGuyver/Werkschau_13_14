<?php
/*
Plugin Name: Next-Previous Post URL
Version: 0.2
Plugin URI: http://wordpress.org/support/topic/51091
Description: Display next or previous post's URL.
Author: Kaf Oseo
Author URI: http://szub.net

    Copyright (c) 2005, Kaf Oseo (http://szub.net)
    Next-Previous Post URL is released under the GNU General
    Public License (GPL) http://www.gnu.org/licenses/gpl.txt

    This is a WordPress plugin (http://wordpress.org).

Usage:
<?php next_post_url(in_same_cat, 'excluded_cats', display); ?>
<?php previous_post_url(in_same_cat, 'excluded_cats', display); ?>

Parameters:
in_same_cat (boolean) [WP 1.5.1.3+]
    If next/previous post must be in the same category as the
    current post (TRUE), or not (FALSE).  Defaults to FALSE.

excluded_cats (string) [WP 1.5.2+]
    Numeric category ID(s) from which the next/previous post
    should not be listed.  Separate multiple categories with
    an 'and': '1 and 5 and 15'. There is no default.

display (boolean)
    Display next/previous post URL (TRUE), or return URL for
    use in PHP (FALSE).  Defaults to TRUE.
*/

function next_post_url($in_same_cat=false, $excluded_categories = '', $display=false) {

    $post = get_next_post($in_same_cat, $excluded_categories);

    if ($post) {
        $url = get_permalink($post->ID);
        if($display) {
            echo $url;
        }
        return $url;
    }
}

function previous_post_url($in_same_cat=false, $excluded_categories = '', $display=false) {

    $post = get_previous_post($in_same_cat, $excluded_categories);

    if ($post) {
        $url = get_permalink($post->ID);
        if($display) {
            echo $url;
        }
        return $url;
    }
}
?>