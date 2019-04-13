$(function() {
  $(document).ready(function() {
    $("select").formSelect();
    $(".parallax").parallax();
    $(".slider").slider({
      full_width: true,
      interval: 5000
    });
    $(".datepicker").datepicker({
      selectMonths: true,
      selectYears: 15,
      autoClose: true,
      format: "dd. mmmm yyyy.",
      firstDay: 1,
      minDate: new Date()
    });
  });
});

function slijedeca_slika() {
  $(".slider").slider("next");
}
