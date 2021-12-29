<?php 
/**
 * Template Name: Home
 */
get_header();
?>
<!--hero-->
<section id="hero">
  <div class="row g-0">
    <div class="col-12">
      <div id="hero__content" class="hero__bg__img flex__container flex__align__items__center"
        style="background-image: url('https://erdreams.darlyagostinho.com/wp-content/uploads/2021/12/capa-5.jpg')">
      </div>
    </div>
    <div class="col-12 col-lg-6 col-xl-4 hero__box bg__primary__lighter">
      <div class="container">
        <h2 class="hero__box__title">Nova coleção 2022</h2>
        <p class="hero__box__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dolor ex,
          vulputate facilisis nisl sit amet,
          fermentum lacinia ex.</p>

        <div class="row flex__justify__content__end">
          <div class="col-12 col-md-6 col-lg-8">
            <a href="#"
              class="btn__category btn__category--solid">Conheça nossa Coleção</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--#hero-->

<!--home categories-->
<section id="home__categories">
  <div class="container">
    <div class="row mt__2-5rem">
      <h2 class="home__subtitle categories mb__1-5rem">Categorias</h2>
      <div class="col-xl-6 mb__2rem">
        <div class="row g-0">
          <div class="col-md-7 col-lg-5 col-xl-7 home__categories__img__wrapper">
            <img
              src="https://erdreams.darlyagostinho.com/wp-content/uploads/2021/12/category-1.jpg"
              alt="My Category Img1" class="img__responsive">
          </div>
          <div class="col-md-5 col-lg-7 col-xl-5 bg__primary__light home__categories__desc__wrapper">
            <div class="category__box">
              <a href="<?php echo get_term_link( 'pijamas', 'product_cat'); ?>">
                <h3 class="category__title">Pijamas</h3>
              </a>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, officia.</p>
              <a href="<?php echo get_term_link( 'pijamas', 'product_cat'); ?>"
                class="btn__category btn__category--medium">Ver Categoria</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 mb__2rem">
        <div class="row g-0">
          <div class="col-md-7 col-lg-5 col-xl-7 home__categories__img__wrapper">
            <img
              src="https://erdreams.darlyagostinho.com/wp-content/uploads/2021/12/category-2.jpg"
              alt="My Category Img2" class="img__responsive">
          </div>
          <div class="col-md-5 col-lg-7 col-xl-5 bg__medium__gradient home__categories__desc__wrapper">
            <div class="category__box">
              <a href="<?php echo get_term_link( 'pijamas', 'product_cat'); ?>">
                <h3 class="category__title">Short Doll</h3>
              </a>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, officia.</p>
              <a href="<?php echo get_term_link( 'pijamas', 'product_cat'); ?>"
                class="btn__category btn__category--medium">Ver Categoria</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--#home categories-->

<!--home features-->
<section id="home__features">
  <div class="container">
    <!--home features header-->
    <header class="row home__features__header mt__1rem">
      <div class="col-md-6">
        <div class="row flex__align__items__center">
          <div class="col-md-6">
            <h2 class="home__subtitle features mb__1rem">Novidades</h2>
          </div>
          <div class="col-md-6">
            <p class="home__features__desc">Confira as últimas peças que
              adicionamos em nossa vitrine! </p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-6 col-xl mb__1rem home__features__btn__wrapper">
            <a href="#" class="btn__category active">Pijamas</a>
          </div>
          <div class="col-6 col-xl mb__1rem home__features__btn__wrapper">
            <a href="#" class="btn__category">Camisolas</a>
          </div>
          <div class="col-6 col-xl mb__1rem home__features__btn__wrapper">
            <a href="#" class="btn__category">Robes</a>
          </div>
          <div class="col-6 col-xl mb__1rem home__features__btn__wrapper">
            <a href="#" class="btn__category">Short Doll</a>
          </div>
        </div>
      </div>
    </header>
    <!--#home features header-->

    <!--home features products-->
    <div class="row mt__1rem">
      <?php
        $args = array(
          'post_type' => 'product_variation',
          'order' => 'ASC',
          'orderby' => 'name',
          'posts_per_page' => -1
        );
        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) :
          while ( $loop->have_posts() ) : 
            $loop->the_post();
            get_template_part( 'template-parts/content', 'product' );
        endwhile;
          wp_reset_postdata();
        endif;
      ?>
    </div>
  </div>
  <!--#home features products-->
  </div>
</section>
<!--#home features-->

<!--see more-->
<div class="see__more">
  <div class="container">
    <div class="flex__container flex__align__items__center">
      <div class="line mr__quarter__rem"></div>
      <svg width="5" height="10" viewBox="0 0 5 10" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0L5 5L0 10V0Z" fill="#4A5C72" />
      </svg>
      <a href="<?php echo get_term_link( 'pijamas', 'product_cat'); ?>" class="see__more__link">Ver Mais</a>
    </div>
  </div>
</div>
<!--#see more-->

<!--lead email-->
<?php get_template_part('template-parts/leads/leads-email'); ?>
<!--#lead email-->

<?php get_footer();