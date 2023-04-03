<form method="GET" action="<?php site_url(); ?>">
    <div class="input-group">
        <input type="text" name="s" value="<?php the_search_query(); ?>" class="form-control"
               placeholder="Pesquisar...">
        <button class="btn btn-outline-secondary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </div>
</form>
