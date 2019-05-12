$(function() {
  $(document).ready(function() {
    $('select').formSelect();
    $('.parallax').parallax();
    $('.homeslider').slider({
      height: 320,
      interval: 2500,
      indicators: false
    });
    $('.large-slider').slider({
      interval: 2500,
      indicators: false
    });
    $('#slider').slider({
      full_width: true,
      interval: 4000
    });
    $('.datepicker').datepicker({
      selectMonths: true,
      selectYears: 15,
      autoClose: true,
      format: 'dd. mmmm yyyy.',
      firstDay: 1,
      minDate: new Date()
    });
  });
});

function slijedeca_slika() {
  $('.slider').slider('next');
}
