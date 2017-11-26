<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
        <input type="search" class="search-field search" 
            placeholder="<?php echo esc_attr_x( 'Looking for something?', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" style="outline: none; padding: 10px; border: 1px solid #DDDDDD;" />
    </label>
    <input type="submit" class="search-submit"
      value="Search" style="background: transparent;
  color: grey ;
  border-color: #DDDDDD;
  border-style: solid;
  border-radius: 10%;
" />

</form></center>