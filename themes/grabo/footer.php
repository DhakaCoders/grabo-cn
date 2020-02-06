<?php 
  $logo_tag = $logo2_tag = '';
  $logoObj = get_field('ftlogo', 'options');
  $logoObj2 = get_field('flogo2', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }
  if( is_array($logoObj2) ){
    $logo2_tag = '<img src="'.$logoObj2['url'].'" alt="'.$logoObj2['alt'].'" title="'.$logoObj2['title'].'">';
  }


  $spacialArry = array(".", "/", "+", " ");$replaceArray = '';
  $adres = get_field('address', 'options');
  $gmapsurl = get_field('google_maps', 'options');
  $e_mailadres = get_field('femail', 'options');
  $show_telefoon = get_field('telephone', 'options');
  $telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
  $copyright_text = get_field('copyright_text', 'options');
  $gmaplink = !empty($gmapsurl)?$gmapsurl: 'javascript:void()';

?>
<footer class="footer-wrap">
  <div class="ftr-top-wrp">
    <div class="to-top-btn"></div>
    <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="ftr-info-lft clearfix">
          <div class="ftr-logo-lft-tp clearfix">
            <div class="ftr-logo">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
              </a>
            </div>
            <div class="ftr-topspin">
              <?php echo $logo2_tag; ?>
            </div>
          </div>
          <div class="ftr-info">
            <?php if( !empty( $adres ) ) printf('<span><a href="%s">%s</a></span>', $gmaplink, $adres);  ?>
            <?php if( !empty( $e_mailadres ) ) printf('<span><a href="mailto:%s">T: %s</a></span>', $e_mailadres, $e_mailadres);  ?>
            <?php if( !empty( $show_telefoon ) ) printf('<span><a href="tel:%s">E: %s</a></span>', $telefoon, $show_telefoon);  ?>
          </div>
        </div>
      </div>
    </div>
   </div> 
  </div>
  <div class="ftr-btm-wrp">
    <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="ftr-btm-dsc clearfix">
          <?php if( !empty( $copyright_text ) ) printf( '<span>%s</span>', $copyright_text); ?>
          <?php 
              $ftmenuOptions = array( 
                  'theme_location' => 'cbv_copyright_menu', 
                  'menu_class' => 'clearfix hide-xs',
                  'container' => 'copynav',
                  'container_class' => 'copynav'
                );
              wp_nav_menu( $ftmenuOptions ); 
            ?>  
        </div>
      </div>
    </div>
   </div> 
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>