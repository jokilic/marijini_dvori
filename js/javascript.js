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

function random_dubravka() {
  $('#dubravka').animate({
    left: '60px'
  });
}

function random_dubravka_back() {
  $('#dubravka').animate({
    left: '10px'
  });
}

var delay = Math.floor(Math.random() * 2500) + 5000;

setInterval(random_dubravka, delay);
setInterval(random_dubravka_back, delay);

function slijedeca_slika() {
  $('.slider').slider('next');
}
