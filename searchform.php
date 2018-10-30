<form class="form-inline" role="search" action="<?php echo home_url('/'); ?>">
	<div class="input-group">
		<input type="search" class="form-control" placeholder="Buscar" value="<?php echo get_search_query(); ?>" name="s" title="Search" />
		<span class="input-group-btn">
			<button class="btn btn-default" type="button">
				<span class="glyphicon glyphicon-search" aria-hidden="true"></span> 
			</button>
		</span>
	</div>
</form>