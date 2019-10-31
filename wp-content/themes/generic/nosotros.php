<?php
/*
* Template Name: Nosotros
*/
 get_header();
 $template_uri = get_bloginfo('template_url');
 $banner = get_field('banner');
 $titulo_parte_1_banner = get_field('titulo_parte_1_banner');
 $titulo_parte_2_banner = get_field('titulo_parte_2_banner');
 $subtitulo_banner = get_field('subtitulo_banner');
 $imagen_banner = get_field('imagen_banner');
 $titulo_parte_1_mision = get_field('titulo_parte_1_mision');
 $titulo_parte_2_mision = get_field('titulo_parte_2_mision');
 $texto_mision = get_field('texto_mision');
 $imagen_mision = get_field('imagen_mision');
 $titulo_parte_1_necesidades = get_field('titulo_parte_1_necesidades');
 $titulo_parte_2_necesidades = get_field('titulo_parte_2_necesidades');
 $texto_necesidades = get_field('texto_necesidades');
 $imagen_necesidades = get_field('imagen_necesidades');
 $certificaciones = get_field('certificaciones');
 $banner_compra = get_field('banner_compra');
 $titulo_compra = get_field('titulo_compra');
 $catalogo = get_field('catalogo' , 'options');
 $email_header = get_field('email_header' , 'options'); ?>


 <div class="container-max overhidden" style="max-width:100%;">
     <section class="banner-principal banner-nosotros" data-parallax="scroll" data-image-src="<?php echo $banner['url']; ?>">
         <div class="bloque-inner row">
             <div class="col-md-6">
              <?php if ($imagen_banner): ?>
                 <div class="box-2">
                     <img src="<?php echo $imagen_banner['url']; ?>">
                 </div>
              <?php endif; ?>
             </div>
             <div class="col-md-6">
                 <div class="box-1">
                   <?php if ($titulo_parte_1_banner || $titulo_parte_2_banner): ?>
                     <h4 class="text-white font-roboto"><?php echo $titulo_parte_1_banner; ?></h4>
                     <h1 class="subtitulo-nosotros"><?php echo $titulo_parte_2_banner; ?></h1>
                   <?php endif; ?>
                   <?php if ($subtitulo_banner): ?>
                     <h1 class="subtitulo-nosotros"><b><?php echo $subtitulo_banner; ?></b></h1>
                   <?php endif; ?>
                 </div>
             </div>
         </div>
     </section>
 </div>

 <div class="block-img block-img-right container-mision">
     <div class="row m-0">
         <div class="col-md-7 p-0">
             <div class="box-1">
                 <div>
                   <?php if ($titulo_parte_1_mision || $titulo_parte_2_mision): ?>
                     <h4><?php echo $titulo_parte_1_mision; ?></h4>
                     <h3 class="titulo-mision p-relative"><?php echo $titulo_parte_2_mision; ?></h3>
                   <?php endif; ?>
                     <div class="content-text ">
                       <?php if ($texto_mision): ?>
                         <p><?php echo $texto_mision; ?></p>
                       <?php endif; ?>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-md-5 p-0">
           <?php if ($imagen_mision): ?>
               <div class="box-2">
                   <img src="<?php echo $imagen_mision['url']; ?>">
               </div>
            <?php endif; ?>
         </div>
     </div>
 </div>

 <div class="block-img block-img-left container-necesidades">
     <div class="row m-0">
         <div class="col-md-5 p-0">
             <div class="box-1">
                 <img src="<?php echo $imagen_necesidades['url']; ?>">
             </div>
         </div>
         <div class="col-md-7 p-0">
             <div class="box-2">
                 <div>
                   <?php if ($titulo_parte_1_necesidades || $titulo_parte_2_necesidades): ?>
                     <h4><?php echo $titulo_parte_1_necesidades; ?></h4>
                     <h3 class="titulo-necesidades p-relative"><?php echo $titulo_parte_2_necesidades; ?></h3>
                   <?php endif; ?>
                     <div class="content-text">
                         <p><?php echo $texto_necesidades; ?></p>
                     </div>
                     <div class="certificaciones">
                        <h5><img src="<?php echo $template_uri; ?>/assets/img/escudo.png" alt="">Certificaciones</h5>
                       <div class="row m-0">
                         <?php if (have_rows('certificaciones') ):
                              while (have_rows('certificaciones') ): the_row() ?>
                          <div class="col-md-6 p-0 type">
                            <?php $imagen = get_sub_field('imagen_certificaciones'); ?>
                            <img src="<?php echo $imagen['url'] ?>" alt="">
                            <div class="date">
                              <h4><?php the_sub_field('titulo_parte_1_certificaciones')?></h4>
                              <p><?php the_sub_field('titulo_parte_2_certificaciones')?></p>
                            </div>
                          </div>
                          <?php
                            endwhile;
                            else :
                            endif;
                          ?>
                        </div>
                     </div>
                 </div>
             </div>
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
