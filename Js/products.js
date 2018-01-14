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
