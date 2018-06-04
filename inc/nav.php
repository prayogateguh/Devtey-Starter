<?php
error_reporting(E_PARSE);
function dp_nav() {
    global $wp_query;
    $big = 999999999; // need an unlikely integer
    $pages = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'prev_next' => false,
        'type'  => 'array',
        'prev_next'   => true,
        'prev_text'    => __( '←', 'text-domain' ),
        'next_text'    => __( '→', 'text-domain'),
    ) );
    $output = '';

    if ( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var( 'paged' );

        $output .=  '<div class="pager"><ul class="pager__list">';
        foreach ( $pages as $page ) {
            $output .= "<li class=\"pager__item\">$page</li>";
        }
        $output .= '</ul></div>';

        // Create an instance of DOMDocument 
        $dom = new \DOMDocument();

        // Populate $dom with $output, making sure to handle UTF-8, otherwise
        // problems will occur with UTF-8 characters.
        $dom->loadHTML( mb_convert_encoding( $output, 'HTML-ENTITIES', 'UTF-8' ) );

        // Create an instance of DOMXpath and all elements with the class 'page-numbers' 
        $xpath = new \DOMXpath( $dom );

        // http://stackoverflow.com/a/26126336/3059883
        $page_numbers = $xpath->query( "//*[contains(concat(' ', normalize-space(@class), ' '), ' page-numbers ')]" );

        // Iterate over the $page_numbers node...
        foreach ( $page_numbers as $page_numbers_item ) {

            // Add class="mynewclass" to the <li> when its child contains the current item.
            $page_numbers_item_classes = explode( ' ', $page_numbers_item->attributes->item(0)->value );
            if ( in_array( 'current', $page_numbers_item_classes ) ) {          
                $list_item_attr_class = $dom->createAttribute( 'class' );
                $list_item_attr_class->value = 'mynewclass';
                $page_numbers_item->parentNode->appendChild( $list_item_attr_class );
            }

            // Replace the class 'current' with 'active'
            $page_numbers_item->attributes->item(1)->value = str_replace( 
                            'current',
                            'pager__link',
                            $page_numbers_item->attributes->item(1)->value );

            // Replace the class 'page-numbers' with 'page-link'
            $page_numbers_item->attributes->item(0)->value = str_replace( 
                            'page-numbers',
                            'pager__link',
                            $page_numbers_item->attributes->item(0)->value );
        }

        // Save the updated HTML and output it.
        $output = $dom->saveHTML();
    }

    $output = str_replace('<li class="pager__item"><span aria-current=', '<li class="pager__item pager__item_selected"><span aria-current=', $output);
    echo $output;
}