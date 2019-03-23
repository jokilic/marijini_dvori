$(function () {
    $(document).ready(function () {
        $('select').formSelect();
        $('.parallax').parallax();
        $('.slider').slider({
            full_width: true,
            interval: 5000
        });
        $('.datepicker').datepicker({
            selectMonths: true,
            selectYears: 15
        });
    });
});

function slijedeca_slika() {
    $('.slider').slider('next');
}