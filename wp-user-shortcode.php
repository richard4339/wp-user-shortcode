<?php
/*
  Plugin Name: User Shortcode
  Plugin URI: https://github.com/richard4339/wp-user-shortcode
  Description: Plugin adds a user shortcode that links to the author page
  Version: 1.0
  Author: Richard
  Author URI: http://www.digitalxero.com
 */

/*  Copyright 2012  RICHARD LYNSKEY (email : richard@mozor.net)

    This work is licensed under the Creative Commons Attribution-ShareAlike 3.0 Unported License. To view a copy of this
    license, visit http://creativecommons.org/licenses/by-sa/3.0/ or send a letter to

    Creative Commons
    444 Castro Street
    Suite 900
    Mountain View, California, 94041
    USA

 */

function wpus_func($atts, $content = null)
{

    extract(shortcode_atts(array(
        'user' => ''
    ), $atts));

    if((empty($user)) || (is_null($user)))
    {
        $user = $atts[0];
    }

    if((empty($user)) || (is_null($user)))
    {
        $user = $content;
    }

    $u = get_user_by('login', $user);
    $output = '<a href="' . site_url('/author/') . $u->user_nicename . '">' . $u->display_name . '</a>';

    return $output;
}

add_shortcode('user', 'wpus_func');

?>