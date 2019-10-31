
<?php
/*
* Template Name: Productos
*/
get_header();
$template_uri = get_bloginfo('template_url');
$banner = get_field('banner');
$titulo_parte_1_banner = get_field('titulo_parte_1_banner');
$subtitulo_banner = get_field('subtitulo_banner');
$imagen_banner = get_field('imagen_banner');
$banner_compra = get_field('banner_compra');
$titulo_compra = get_field('titulo_compra');
$catalogo = get_field('catalogo' , 'options');
$email_header = get_field('email_header' , 'options');
?>

 <div class="container-max overhidden" style="max-width:100%;">
     <section class="banner-principal banner-productos" data-parallax="scroll" data-image-src="<?php echo $banner['url']; ?>">
         <div class="bloque-inner row">
             <div class="col-md-12">
                 <div class="box-1">
                   <?php if ($titulo_parte_1_banner || $titulo_parte_2_banner): ?>
                     <h4 class="text-white font-roboto"><?php echo $titulo_parte_1_banner; ?></h4>
                     <h1 class="subtitulo-nosotros"><?php echo $titulo_parte_2_banner; ?></h1>
                   <?php endif; ?>
                   <?php if ($subtitulo_banner): ?>
                     <h1 class="subtitulo-nosotros"><?php echo $subtitulo_banner; ?></h1>
                   <?php endif; ?>
                 </div>
             </div>
         </div>
     </section>
 </div>

<div class="container container-productos1">
<div class="container-categorias">
  <div id="grupoTablas">
    <ul class="nav nav-tabs">
      <?php echo do_shortcode('[productos_page]');?>
  </div>
</div>
</div>
 <div class="container container-comprar comprar_nosotros">
     <div class="row m-0">
         <div class="col-12 p-0">
             <div class="block-comprar" style="background-image:url('<?php echo $banner_compra['url']; ?>');">
                 <div class="text-center">
                     <?php if ($titulo_compra): ?>
                       <h3 class="text-white font-roboto"><?php echo $titulo_compra; ?></h3>
                     <?php endif; ?>
                     <?php if ($email_header): ?>
                       <a href="mailto:<?php echo $email_header; ?>" class="btn btn-vector btn-tipo-2">
                           <div class="contacto_compra"><span>Te contactamos</span> <img src="<?php echo $template_uri; ?>/assets/img/correo_compra.png"></div>
                       </a>
                     <?php endif; ?>
                     <?php if ($catalogo): ?>
                       <a href="<?php echo $catalogo['url']; ?>" class="btn btn-vector btn-tipo-3">
                           <div class="descarga_compra"><span>Nuestro catálogo</span> <img src="<?php echo $template_uri; ?>/assets/img/descarga_compra.png"></div>
                       </a>
                     <?php endif; ?>
                 </div>
             </div>
         </div>
     </div>
 </div>

<?php get_footer(); ?>
<script>
  $( function() {
    $( "#grupoTablas" ).tabs();
  } );
</script>
