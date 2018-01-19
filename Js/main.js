function bootstrapNotify (_text, _type) {
  $.notify(
  {
    // options
    icon: 'flaticon-question',
    message: _text,
  },
  {
    // settings
    type: _type,
    showProgressbar: true,
    placement: {
      from: 'bottom',
      align: 'left',
    },
    z_index: 1110,
    mouse_over: 'pause',
    animate: {
      enter: 'animated bounceIn',
      exit: 'animated bounceOut',
    },
  });
}

$('button[name="deluser"]').click(function(){
  // confirm dialog
  var $this = $(this);
  var val = $this.val();

  alertify.confirm("Voulez-vous vraiment Supprimer cet utilisateur",
  function () {
    $.ajax({
      type: 'POST',
      url: '../PHP/Script/deleteUser.php',
      data: { deluser: val },
      success: function (data) {

        if(data.type === 'success'){
          $this.parents('tr').fadeOut();
        }
      },
      error: function (jqxhr, erstring, errorThrown) {

      },
      dataType: "json"
    });

  },
  function() {
    console.log('canceled');
  });
  return false;
});

$('.toogle-search').click(function(){
  $('#searchBox').toggleClass('d-none');
  $('.bigsearch').focus();
  return false;
})
