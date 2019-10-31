<?php get_header();
$template_uri = get_bloginfo('template_url');
$banner = get_field('banner');
$titulo_parte_1_banner = get_field('titulo_parte_1_banner');
$titulo_parte_2_banner = get_field('titulo_parte_2_banner');
$subtitulo_banner = get_field('subtitulo_banner');
$link_banner = get_field('link_banner');
$imagen_banner = get_field('imagen_banner');
$titulo_parte_1_productos = get_field('titulo_parte_1_productos');
$titulo_parte_2_productos = get_field('titulo_parte_2_productos');
$texto_productos = get_field('texto_productos');
$link_productos = get_field('link_productos');
$imagen_productos = get_field('imagen_productos');
$titulo_parte_1_servicios = get_field('titulo_parte_1_servicios');
$titulo_parte_2_servicios = get_field('titulo_parte_2_servicios');
$texto_servicios = get_field('texto_servicios');
$link_servicios = get_field('link_servicios');
$imagen_servicios = get_field('imagen_servicios');
$banner_compra = get_field('banner_compra');
$titulo_compra = get_field('titulo_compra');
$catalogo = get_field('catalogo' , 'options');
$email_header = get_field('email_header' , 'options'); ?>

<div class="container-max overhidden" style="max-width:100%;">
    <section class="banner-principal" data-parallax="scroll" data-image-src="<?php echo $banner['url']; ?>">
        <div class="capa">
          <div class="bloque-inner row">
              <div class="col-md-7">
                  <div class="box-1">
                      <?php if ($titulo_parte_1_banner || $titulo_parte_2_banner): ?>
                        <h2 class="text-white font-roboto"><b><?php echo $titulo_parte_1_banner; ?></b> <?php echo $titulo_parte_2_banner; ?></h2>
                      <?php endif; ?>
                      <?php if ($subtitulo_banner): ?>
                        <p class="subtitulo"><?php echo $subtitulo_banner; ?></p>
                      <?php endif; ?>
                      <?php if ($link_banner): ?>
                        <a href="<?php echo $link_banner['url']; ?>" class="btn btn-vector btn-tipo-1">
                            <div><span><?php echo $link_banner['title']; ?></span></div>
                        </a>
                      <?php endif; ?>
                  </div>
              </div>
              <div class="col-md-5">
                  <?php if ($imagen_banner): ?>
                    <div class="box-2">
                        <img src="<?php echo $imagen_banner['url']; ?>">
                    </div>
                  <?php endif; ?>
              </div>
          </div>
        </div>
    </section>
</div>

<div class="block-img block-img-right container container-1500">
    <div class="row m-0">
        <div class="col-md-7 p-0">
            <div class="box-1">
                <div>
                    <?php if ($titulo_parte_1_productos || $titulo_parte_2_productos): ?>
                      <h3 class="titulo-semilla titulo-tipo-1 text-white"><?php echo $titulo_parte_1_productos; ?> <span><?php echo $titulo_parte_2_productos; ?></span></h3>
                    <?php endif; ?>
                    <div class="content-text text-white">
                        <?php if ($texto_productos): ?>
                          <p><?php echo $texto_productos; ?></p>
                        <?php endif; ?>
                        <?php if ($link_productos): ?>
                          <a href="<?php echo $link_productos['url']; ?>" class="btn-click">
                              <span><?php echo $link_productos['title']; ?></span><div><img src="<?php echo $template_uri; ?>/assets/img/right-green.png"></div>
                          </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 p-0">
            <?php if ($imagen_productos): ?>
              <div class="box-2">
                  <img src="<?php echo $imagen_productos['url']; ?>">
              </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container container-productos">
    <div class="row">
        <div class="col-12 text-center">
            <h3 class="titulo-small">Nuestros productos</h3>
        </div>
        <div class="col-12 p-relative">
            <ul class="list-products p-0">
              <?php $categorias = get_terms(array(
                'taxonomy'      =>  'categoria',
                'hide_empty'    =>  false,
              ));
              foreach ($categorias as $categoria) { ?>
                <div>
                  <a href="<?php echo get_term_link($categoria); ?>">
                    <div class="item" style="background-image:url('<?php echo $template_uri; ?>/assets/img/img-slick.jpg');">
                      <h3 class="text-white"><?php echo $categoria->name; ?></h3>
                    </div>
                  </a>
                </div>
              <?php } ?>
            </ul>
        </div>
        <div class="control-arrow prev-s"><img src="<?php echo $template_uri; ?>/assets/img/left-white.png"></div>
        <div class="control-arrow next-s"><img src="<?php echo $template_uri; ?>/assets/img/right-white.png"></div>
    </div>
</div>


<div class="block-img block-img-left container container-1500">
    <div class="row m-0">
        <div class="col-md-5 p-0">
            <div class="box-1">
                <img src="<?php echo $template_uri; ?>/assets/img/img-3.jpg">
            </div>
        </div>
        <div class="col-md-7 p-0">
            <div class="box-2">
                <div>
                    <?php if ($titulo_parte_1_servicios || $titulo_parte_2_servicios): ?>
                      <h3 class="titulo-semilla titulo-tipo-1 text-white"><?php echo $titulo_parte_1_servicios; ?> <span><?php echo $titulo_parte_2_servicios; ?></span></h3>
                    <?php endif; ?>
                    <div class="content-text text-white">
                        <?php if ($texto_servicios): ?>
                          <p><?php echo $texto_servicios; ?></p>
                        <?php endif; ?>
                        <?php if ($link_servicios): ?>
                          <a href="<?php echo $link_servicios['url']; ?>" class="btn-click">
                              <span><?php echo $link_servicios['title']; ?></span><div><img src="<?php echo $template_uri; ?>/assets/img/right-green.png"></div>
                          </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container container-1350 container-clientes">
    <div class="row m-0">
        <div class="col-12 text-center">
            <h3 class="titulo-small">Nuestros clientes</h3>
        </div>
    </div>
    <div class="row">
      <?php if( have_rows('clientes') ): ?>
        <?php  while( have_rows('clientes') ): the_row();
        $cliente = get_sub_field('cliente'); ?>

        <div class="col-md-3">
          <a href="#">
            <div class="box">
              <img src="<?php echo $cliente['url']; ?>">
            </div>
          </a>
        </div>

        <?php endwhile; ?>
      <?php endif; ?>
    </div>
</div>

<div class="container container-comprar">
    <div class="row m-0">
        <div class="col-12 p-0">
            <div class="block-comprar" style="background-image:url('<?php echo $banner_compra['url']; ?>');">
                <div class="text-center">
                    <?php if ($titulo_compra): ?>
                      <h3 class="text-white font-roboto"><?php echo $titulo_compra; ?></h3>
                    <?php endif; ?>
                    <?php if ($email_header): ?>
                      <a href="mailto:<?php echo $email_header; ?>" class="btn btn-vector btn-tipo-2">
                          <div><span>Te contactamos</span> <img src="<?php echo $template_uri; ?>/assets/img/vector-4.png"></div>
                      </a>
                    <?php endif; ?>
                    <?php if ($catalogo): ?>
                      <a href="<?php echo $catalogo['url']; ?>" class="btn btn-vector btn-tipo-3">
                          <div><span>Nuestro catálogo</span> <img src="<?php echo $template_uri; ?>/assets/img/vector-5.png"></div>
                      </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
