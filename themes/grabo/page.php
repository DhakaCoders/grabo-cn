<?php 
  get_header(); 
  get_template_part('templates/page', 'banner' );
  $thisID = get_the_ID();
?>
<section class="een-pakkende-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="een-pakkende-innr">
          <div class="een-pakkende-top-block hide-xs">
            <h1>Een pakkende eerste titel h1</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nulla metus, interdum quis porttitor eu, tincidunt faucibus <br> enim. Cras eleifend eget turpis eget volutpat. Phasellus tempus ut ligula semper eleifend. Etiam id ligula a odio dapibus <br> viverra et ac enim. Sed vestibulum lorem sem, vel auctor lectus dapibus eget. Ut turpis quam, elementum et nibh sit amet, <br> euismod finibus felis. Praesent eget elit quam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin vulpu - <br> tate tincidunt accumsan. Pellentesque blandit augue tortor, id ornare turpis tincidunt et. Integer vel neque aliquam urna <br> dapibus semper sit amet nec sapien. Aliquam ornare tellus tellus, nec luctus nulla mattis laoreet. Duis non nulla suscipit felis <br> placerat faucibus. Donec placerat nisl placerat, vestibulum mi quis, aliquam ligula. Integer vitae massa nec nulla viverra <br> luctus.</p>                     
          </div>  
          <div class="een-pakkende-btm-block show-xs">
            <h1>Een pakkende eerste titel</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nulla metus, interdum quis porttitor eu, tincidunt faucibus enim. Cras eleifend eget turpis eget volutpat. Phasellus tempus ut ligula semper eleifend. Etiam id ligula a odio dapibus viverra et ac enim. Sed vestibulum lorem sem, vel auctor lectus dapibus eget. Ut turpis quam, elementum et nibh sit amet, </p>
            <p>Lascing elit. Nam nulla metus, interdum quis et. Ut turpis quam, elementum et nibh sit amet, euismod finibus felis. Praesent eget elit quam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Een <a href="#">link.</a></p>
          </div>
          <div class="een-pakkende-btm-block hide-xs">
            <h2>Een pakkende eerste titel h2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adi tempus ut ligula semper eleifend. Etiam id ligula a odio dapibus viverra et ac enim. Sed vestibulum lorem sem, vel auctor lectus dapibus eget. Ut turpis quam, elementum et nibh sit amet, euismod finibus felis. Praesent eget elit quam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin vulputate tincid- <br> unt accumsan. Pellentesque blandit augue tortor, id ornare turpis tincidunt et. Integer vel neque aliquam urna dapibus <br> semper sit amet nec sapien. Aliquam ornare tellus tellus, nec luctus nulla mattis laoreet. Duis non nulla suscipit felis placerat <br> faucibus. Donec placerat nisl placerat, vestibulum mi quis, aliquam ligula. Integer vitae massa nec nulla viverra luctus. <a href="#">link.</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>
<?php get_footer(); ?>