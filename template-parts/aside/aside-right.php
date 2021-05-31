<?php
if (is_active_sidebar('aside-right')):
    echo '<aside class="right-aside">';
    dynamic_sidebar('aside-right');
    echo '</aside>';
endif;
