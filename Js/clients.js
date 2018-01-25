var options = { valueNames: ['name', 'phone', 'facebook', 'email', 'sex', 'location'] };

var userList = new List('customer-list', options);

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
