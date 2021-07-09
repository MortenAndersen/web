<?php
if( class_exists('ACF') ) {
    echo '<aside class="right-aside">';
        dynamic_sidebar('aside-right');
        the_field('aside_right');
    echo '</aside>';
} else {
    echo '<aside class="right-aside">';
        dynamic_sidebar('aside-right');
    echo '</aside>';
}
