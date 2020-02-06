<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head> 
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->  

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
  $logoObj = get_field('logo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  $email = get_field('femail', 'options');
  $adres = get_field('address', 'options');
  $gmapsurl = get_field('google_maps', 'options');
  $gmaplink = !empty($gmapsurl)?$gmapsurl: 'javascript:void()';
?>
<header  class="header">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="hdr-inner clearfix">
          <div class="hdr-left">
            <div class="hdr-logo">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <i><?php echo $logo_tag; ?></i>
              </a>
            </div>
          </div>
          <div class="hdr-right clearfix hide-xs">
            <div class="header-rgt-menu">
              <nav class="hdr-nav">               
                <?php 
                  $menuOptions = array( 
                      'theme_location' => 'cbv_main_menu', 
                      'menu_class' => 'clearfix ulc',
                      'container' => 'hnav',
                      'container_class' => 'hnav'
                    );
                  wp_nav_menu( $menuOptions ); 
                ?>
              </nav>
            </div>
          </div>

          <div class="home-bnr-xs-nav-bar-controller show-xs">
            <div class="xs-menu-humberger-btn">
              <span>
                <img src="<?php echo THEME_URI; ?>/assets/images/humberger-icon.png" alt="" />
              </span>
            </div>
          </div>
          <div class="show-xs">
            <div class="xs-popup-main-menu-wrap">
              <span class="xs-menu-close-btn-controller"><img src="<?php echo THEME_URI; ?>/assets/images/close-btn-icon.png"></span>
              <nav class="xs-popup-main-nav text-right clearfix">
                <?php 
                  $menuOptions = array( 
                      'theme_location' => 'cbv_main_menu', 
                      'menu_class' => 'clearfix ulc',
                      'container' => 'hnav',
                      'container_class' => 'hnav'
                    );
                  wp_nav_menu( $menuOptions ); 
                ?>
              </nav>
            </div>
          </div>
          <?php if( !empty( $adres ) ): ?>
          <div class="xs-map-con show-xs">
            <div class="xs-map-innr">
              <span>
                <img src="<?php echo THEME_URI; ?>/assets/images/sm-map-icon.png" alt="" />
              </span>
              <a href="<?php echo $gmaplink; ?>" class="overlay-link"></a>            
            </div>  
          </div>
          <?php endif; ?>
          <?php if( !empty( $email ) ): ?>
          <div class="xs-mail-con show-xs">
            <div class="xs-mail-innr">
              <span>
                <img src="<?php echo THEME_URI; ?>/assets/images/sm-mail-icon.png" alt="" />
              </span>
              <a href="mailto:<?php echo $email; ?>" class="overlay-link"></a>
            </div>  
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</header>