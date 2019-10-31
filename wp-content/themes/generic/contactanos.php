<?php
/*
* Template Name: Contactanos
*/
 get_header();
 $template_uri = get_bloginfo('template_url');?>

 <div class="container-max" style="max-width:100%;">
     <section class="banner-principal banner-contacto p-relative" style="background-color:#51826D;">
              <!-- <img src="<?php echo $template_uri; ?>/assets/img/verduras-fondo.png" alt="" class="verduras-1">
              <img src="<?php echo $template_uri; ?>/assets/img/verduras-fondo.png" alt="" class="verduras-2"> -->
          <div class="container-contacto_info">
             <div class="container-contacto">
               <div class="title">
                 <p><?php single_post_title(); ?></p>
               </div>
               <div class="container-contacto-info">
                 <div class="box-1">
                   <div class="file1">
                     <div class="address-contact col-md-4">
                       <h3>Dirección</h3>
                       <p><img src="<?php echo $template_uri; ?>/assets/img/map-contact.png"> Calle Los Gorriones N° 220 La Campiña, Chorrillos - Lima</p>
                     </div>
                     <div class="phone-contact col-md-4">
                       <h3>Teléfonos</h3>
                       <p><img src="<?php echo $template_uri; ?>/assets/img/phone-contact.png">(01) 252-1915 / (01) 252-1899</p>
                       <p><img src="<?php echo $template_uri; ?>/assets/img/wsp-contact.png">(+51) 994 276 618</p>
                     </div>
                     <div class="email-contact col-md-4">
                       <h3>E-mail</h3>
                       <p> <img src="<?php echo $template_uri; ?>/assets/img/msj-contact.png">calidad@rai.com.pe <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; info@rai.com.pe</p>
                     </div>
                   </div>
                   <div class="file1">
                     <div class="horario-contact col-md-4">
                       <h3>Horario</h3>
                       <p><img src="<?php echo $template_uri; ?>/assets/img/flecha-contact.png">Lunes a viernes: 8:00 am - 5:30 pm</p>
                       <p><img src="<?php echo $template_uri; ?>/assets/img/flecha-contact.png">Sábados: 8:00 am - 12:30 pm</p>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
          </div>
     </section>
 </div>

<div class="container-mapa">
  <div class="row m-0">
    <div class="box-mapa col-md-12 p-0">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3899.9682344801877!2d-77.00855758518321!3d-12.182564647758493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b9d71e96d8dd%3A0x2a14ad2bb87d90e8!2sLos%20Gorriones%20220%2C%20Chorrillos%2015054!5e0!3m2!1ses!2spe!4v1571246645372!5m2!1ses!2spe" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
  </div>
</div>
<?php get_footer(); ?>
