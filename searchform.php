<form role="search" method="get" action="<?php echo home_url('/'); ?>">
    <div class="input-group">
    <input type="search" class="form-control" placeholder="Suche" value="<?php echo get_search_query() ?>" name="s" title="Suche" />
    <span class="input-group-btn">
        <button class="btn btn-default" type="submit">
            <span class=" glyphicon glyphicon-search"></span>
        </button>
    </span>
    </div>
</form>

