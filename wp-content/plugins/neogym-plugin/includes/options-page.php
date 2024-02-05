<?php 
    $products_homepage_post_per_page = get_option( 'products_homepage_post_per_page' );

    if ( empty( $products_homepage_post_per_page) ) {
        $products_homepage_post_per_page = 3;
    }

    if ( ! empty( $_POST[ 'products_save' ] ) && $_POST[ 'products_save' ] == 1 ) {

        if ( ! empty( $_POST[ 'products_homepage_post_number' ] ) ) {

            $products_post_per_page = esc_attr( $_POST[ 'products_homepage_post_number' ] );

            update_option( 'products_homepage_post_per_page', $products_post_per_page, true );
        }
    }
?>

<div class="wrap">
    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
    <form action="" method="post">
        <div>
            <label for="custom_option"><?php _e( 'Products Number of posts on the homepage', 'softuni' ); ?></label>
            <input type="number" id="products_homepage_post_number" name="products_homepage_post_number" value="<?php echo esc_attr( $products_homepage_post_per_page );  ?>">
        </div>
        <div>
            <input id="btn" type="submit" value="Update me">
        </div>
        <input class="primary" type="hidden" name="products_save" value="1">
    </form>
</div>

