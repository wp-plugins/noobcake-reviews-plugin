<?php
/*
Plugin Name: NoobcakeReviewsPlugin
Plugin URI: http://www.jimburnettva.com
Description: A super basic reviews plugin which shows a 1 to 5 star rating. Simply add a custom_field value called "score" between 1 to 5 to a blog post and stars will appears where you place the code. 
Version: 1.4
Author: yourtechieguyblog 
Author URI: http://www.jimburnettva.com
License: GPL2
*/


function ncShowReviewStars()
{
$score = get_post_meta(get_the_ID(), 'score', true);
if ($score > 0 )
{
$img = plugins_url( 'img/stars' . $score . '.png', __FILE__ );
echo '<img src="' . $img . '" class="scorestars" />';
}
}


?>
