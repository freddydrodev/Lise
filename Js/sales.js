JsBarcode('.barcode').init();

var userList = new List('salesList',
{ valueNames:
  ['ref', 'client', 'article', 'location', 'date', 'madeBy', 'delivrer'],
});

$('button[name="delSal"]').click(function(){
  // confirm dialog
  var $this = $(this);
  var val = $this.val();

  alertify.confirm("Voulez-vous vraiment Annuler cette vente?",
  function () {
    $.ajax({
      type: 'POST',
      url: '../PHP/Script/_deletesal.php',
      data: { delSal: val },
      success: function (data) {
        if(data.type === 'success'){
          $this.parents('tr').fadeOut();
        }
      },
      error: function (err) {
        console.log(err.responseText);
      },
      dataType: "json"
    });

  },
  function() {
    console.log('canceled');
  });
  return false;
});
