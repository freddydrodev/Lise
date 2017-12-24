<?php
$_ind = isset($ind) ? $ind ? '../' : './' : './';

//inc File
function _inc($file) {
  include $_ind . 'PHP/Inc/' . $file . '.php';
}

function bootstrapNotify($msg = 'Erreur Inconnue', $type = 'danger'){
  ?>
  <script type="text/javascript">
    $.notify({
    // options
    icon: 'flaticon-question',
    message: '<?php echo $msg ?>'
    },{
      // settings
      type: '<?php echo $type ?>',
      showProgressbar: true,
      placement: {
    		from: "bottom",
    		align: "left"
    	},
      mouse_over: 'pause',
      animate: {
    		enter: 'animated bounceIn',
    		exit: 'animated bounceOut'
    	}
    });
  </script>
  <?php
}
