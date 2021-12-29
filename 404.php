<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package er_dreams
 */

get_header('404');
?>
<main>
  <div id="not__found">
    <div class="not__found__bg"></div>
    <div class="not__found">
      <div class="not__found__404">
        <h1>404</h1>
      </div>
      <h2>Desculpe, mas a página que você tentou acessar não foi encontrada ou foi removida do nosso site.</h2>
      <a href="<?php echo get_home_url(); ?>" class="btn__home__404">Início</a>
      <a href="<?php echo get_home_url() . '/contato'; ?>" class="btn__contact__404">Fale Conosco</a>
    </div>
  </div>

</main><!-- #main -->

<?php
get_footer('404');