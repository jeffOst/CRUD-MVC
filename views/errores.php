<?php
require_once('layouts/header.php');
?>
  
<div class="text-center mt-5">
  <h1><span style="color: crimson">Error: <?= $this->mensaje ?></span></h1>
  <img src="<?php echo constant('URL') ?>public/img/error.png" width="100%" height="430px" alt="">
</div>

<?php
require_once('layouts/footer.php');
?>