<?php
if( class_exists('ACF') ) {
    echo '<aside class="left-aside">';
        dynamic_sidebar('aside-left');
        the_field('aside_left');
    echo '</aside>';
} else {
    echo '<aside class="left-aside">';
        dynamic_sidebar('aside-left');
    echo '</aside>';
}
