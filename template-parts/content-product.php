<?php 
  global $product;
?>
<div class="col-md-6 col-lg-4 col-xl-3 mb__1rem">
  <div class="home__features__box position__relative">
    <div class="home__features__img__wrapper">
      <a href="<?php the_permalink(); ?>">
        <img src="<?php echo wp_get_attachment_image_url( $product->get_image_id(), 'woocommerce_thumbnail' );?>" alt=""
          class="img__responsive">
      </a>
    </div>
    <div class="product__price__box">
      <div class="product__price">
        <?php echo wc_price( wc_get_price_to_display( $product, array( 'price' => $product->get_sale_price() ) ) );?>
      </div>

      <?php if( (float)$product->get_sale_price() > 0 ): ?>
      <div class="product__old__price">
        <del
          class="product__price__del"><?php echo wc_price( wc_get_price_to_display( $product, array( 'price' => $product->get_regular_price() ) ) );?></del>
      </div>
      <?php endif; ?>
    </div>
    <div class="product__view__icon__wrapper">
      <a href="<?php the_permalink(); ?>">
        <div class="circle bg__secondary mr__2rem">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M9.99998 4.16675C5.83331 4.16675 2.27498 6.75841 0.833313 10.4167C2.27498 14.0751 5.83331 16.6667 9.99998 16.6667C14.1666 16.6667 17.725 14.0751 19.1666 10.4167C17.725 6.75841 14.1666 4.16675 9.99998 4.16675ZM9.99998 14.5834C7.69998 14.5834 5.83331 12.7167 5.83331 10.4167C5.83331 8.11675 7.69998 6.25008 9.99998 6.25008C12.3 6.25008 14.1666 8.11675 14.1666 10.4167C14.1666 12.7167 12.3 14.5834 9.99998 14.5834ZM9.99998 7.91675C8.61665 7.91675 7.49998 9.03342 7.49998 10.4167C7.49998 11.8001 8.61665 12.9167 9.99998 12.9167C11.3833 12.9167 12.5 11.8001 12.5 10.4167C12.5 9.03342 11.3833 7.91675 9.99998 7.91675Z"
              fill="#F2F2F2" />
          </svg>
        </div>
      </a>
    </div>
    <header class="product__header mt__half__rem">
      <?php if(!is_product_category()) : ?>
      <h3 class="small__caption"><?php echo wc_get_product_category_list($product->get_parent_id()) ; ?></h3>
      <?php endif; ?>
      <a href="<?php the_permalink(); ?>">
        <p class="product__desc"><?php echo $product->get_title(); ?></p>
      </a>
    </header>
  </div>
</div>