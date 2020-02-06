<?php 
get_header(); 
$hmbanner = get_field('hmbanner', HOMEID);
$hmvideo = get_field('hmvideo', HOMEID);
$hmvideo = $hmvideo['upload_video'];
$bannerposter = '';
if(!empty($hmbanner['image'])){
  $bannerposter = cbv_get_image_src($hmbanner['image']);
}
$hlogotag = '';
if(!empty($hmbanner['logo'])){
  $hlogotag = cbv_get_image_tag($hmbanner['logo']);
}

if(empty($hmvideo)):
?>
<section class="hdr-banner-wrp">
  <div class="hdr-banner-wrap">
    <div class="hdr-banner-img animate-banner" style="background: url(<?php echo $bannerposter ; ?>)"></div>
  </div>  
  <div class="hdr-banner-bc hide-xs">
    <div class="container"> 
      <div class="row">
        <div class="col-sm-12">
          <?php cbv_breadcrumbs(); ?>
        </div>
      </div>
    </div> 
  </div>        
</section>
<?php else: ?>
<section class="main-baner-video">
  <div class="video-wrp"> 
    <video class="home-bnr-video" id="home-bnr-video" autoplay loop muted>
      <source src="<?php echo $hmvideo; ?>" type="video/mp4">
    </video>
  </div>
  <div class="hdr-banner-bc">
    <div class="container"> 
      <div class="row">
        <div class="col-sm-12">
          <?php cbv_breadcrumbs(); ?>
        </div>
      </div>
    </div> 
  </div>
</section>
<?php endif; ?>

<section class="hm-een-skw-sec-wrp">
  <div class="hm-een-skw-sec-inr">
    <div class="banner-dsc-wrp">
    <div class="container"> 
      <div class="row">
        <div class="col-sm-12">
          <div class="hdr-banner-innr">
            <div class="hdr-banner-des">
              <?php 
              if( !empty( $hmbanner['title'] ) ) printf( '<span class="hide-xs">%s</span>', $hmbanner['title']); 
              if( !empty( $hmbanner['title'] ) ) printf( '<span class="show-xs">%s</span>', $hmbanner['title']); 
              ?>
            </div>
            <div class="hdr-banner-rgt-img">
              <?php echo $hlogotag; ?>
            </div> 
            <div class="hdr-banner-lft-btn">
              <span><img src="<?php echo THEME_URI; ?>/assets/images/hdr-banner-lft-btn-icon.png"></span>
            </div>        
          </div> 
        </div>
      </div>
    </div>
  </div>
  <?php while( have_posts() ): the_post(); ?>
    <div class="home-pagebuilder een-pakkende-sec mrg-tp">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="hpagebuilder-inner">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>    
    </div>
  <?php endwhile; ?>
  </div>
</section>
<?php get_footer(); ?>