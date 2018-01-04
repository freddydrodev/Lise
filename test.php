<?php
$log = true;
$page = 'Connexion';
include 'PHP/Inc/head.php';
?>

<div class="okok">
<h1>Test Ajax</h1>
<form class="ajaxForm" action="#" method="post">
  <input type="text" name="test" value="" class="inp">
</form>
<ul class="response">

</ul>
</div>

<script type="text/javascript">
  var url = './test_scr.php';

  $('.ajaxForm').submit(function(e){
    $.post('./test_scr.php', {test: e.target.test.value}, function(data){
      $('.response').text(data);
    });
    return false;
  });

  $('.inp').keyup(function(e){

    var val = $(this).val();
    $.post('./test_scr.php', {test: val}, function(data){
      // $('.response').text(data.length);
      $('.response').empty();
      for (var i = 0; i < data.length; i++) {
        $('.response').append(
          '<li>' + data[i].createdAt + '</li>'
        );
      }
    }, 'json');
  });

</script>

<?php include 'PHP/Inc/foot.php'; ?>
