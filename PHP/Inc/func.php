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

function generateRandomString($length = 5) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
