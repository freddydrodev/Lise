//perfectscroll
var scrollEl = document.querySelectorAll('#categories-list .card-text');

scrollEl.forEach(function(el){
  new PerfectScrollbar(el);
});

// slick carousel
$(document).ready(function(){
  $('#categories-list').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    adaptiveHeight: true,
    centerMode: true,
    centerPadding: '60px'
  });
});

$('button[name="delProd"]').click(function(){
  // confirm dialog
  var $this = $(this);
  var val = $this.val();

  alertify.confirm("Voulez-vous vraiment Supprimer cet utilisateur",
  function () {
    $.ajax({
      type: 'POST',
      url: '../PHP/Script/deleteProd.php',
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
