



<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<div>
					<label class="screen-reader-text" for="s">Søg efter:</label>
					<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Søg på siden ...">
					<input type="submit" id="searchsubmit" value="Søg">
				</div>
			</form>