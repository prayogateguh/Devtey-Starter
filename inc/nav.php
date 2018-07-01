<?php
error_reporting(E_PARSE);
function dp_nav() { 
    if( is_singular() )
        return;
    
    global $wp_query;
    
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
    
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
    
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
    
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
    
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
    
    echo '<div class="pager"><ul class="pager__list">' . "\n";
    
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li class="pager__item"><span class="pager__link">%s</span></li>' . "\n", get_previous_posts_link("←") );
    
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="pager__item pager__item_selected"' : ' class="pager__item"';
        printf( '<li%s><a class="pager__link" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
    
        if ( ! in_array( 2, $links ) )
            echo '<li class="pager__item">…</li>';
    }
    
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="pager__item pager__item_selected"' : ' class="pager__item"';
        printf( '<li%s><a class="pager__link" href="%s">%s</a></li>' . "\n", $class ,esc_url( get_pagenum_link( $link ) ), $link );
    }
    
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li class="pager__item">…</li>' . "\n";
        
        $class = $paged == $max ? ' class="pager__item pager__item_selected"' : ' class="pager__item"';
        printf( '<li class="pager__item"><a class="pager__link" href="%s">%s</a></li>' . "\n", esc_url( get_pagenum_link( $max ) ), $max );
    }
    
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li class="pager__item"><span class="pager__link">%s</span></li>' . "\n", get_next_posts_link("→") );
    
    echo '</ul></div>' . "\n";
    
}