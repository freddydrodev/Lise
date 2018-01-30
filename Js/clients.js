var options = { valueNames: ['name', 'phone', 'facebook', 'email', 'sex', 'location'] };

var userList = new List('customer-list', options);

$('button[name="deluser"]').click(function(){
  // confirm dialog
  var $this = $(this);
  var val = $this.val();

  alertify.confirm("Voulez-vous vraiment Supprimer cet Client?",
  function () {
    $.ajax({
      type: 'POST',
      url: '../PHP/Script/deleteUser.php',
      data: { deluser: val },
      success: function (data) {
        bootstrapNotify(data.text, data.type);

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


//update modal
$('#updateClients').on('show.bs.modal', function (event) {
  var $button = $(event.relatedTarget); // Button that triggered the modal
  // var id = button.data('id'); // Extract info from data-* attributes
  // var fn = button.data('fullname');
  // var ph = button.data('phone');
  // var fb = button.data('facebook');
  // var em = button.data('email');
  // var sx = button.data('sex');
  // var ln = button.data('location');
  var _data = {
    id: $button.data('id'),
    fn: $button.data('fullname'),
    ph: $button.data('phone'),
    fb: $button.data('facebook'),
    em: $button.data('email'),
    sx: $button.data('sex'),
    ln: $button.data('location'),
  };

  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var $modal = $(this);

  for (key in _data) {
    $modal.find('input[name="' + key + '"]').val(_data[key]);
    if(key == 'sx'){
      $modal.find('select[name="' + key + '"] option[value="' + _data[key] + '"]').prop('selected', true);
    }
  }
  // _data.forEach(function(el, key) {
  //   console.log(el, key);
  // // })
  // modal.find('.modal-title').text('New message to ' + recipient);
  // modal.find('.modal-body input').val(recipient);
})
