<?php
if (is_active_sidebar('aside-left')):
    echo '<aside class="left-aside">';
    dynamic_sidebar('aside-left');
    echo '</aside>';
endif;
