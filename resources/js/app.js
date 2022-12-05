import './bootstrap';
import '../scss/app.scss';
import.meta.glob([
    '../images/**',
]);

import jQuery from 'jquery';
window.$ = jQuery;
$(document).ready(function() {
    $('.filter_select').on('change', function (e) {
        e.preventDefault();
        let selectVal = $(this).val();
        $.get( "/filter_locations/" + selectVal, function( data ) {
            $( "#locations_grid_container" ).html( data );
        });
    });
});
