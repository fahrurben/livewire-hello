import 'alpinejs'

window.$ = window.jQuery = require('jquery');
window.Swal = require('sweetalert2');

// CoreUI
require('@coreui/coreui');

// Boilerplate
require('../plugins');

$( document ).ready(function() {
    Livewire.on('toggleUserEditModal', function () {
        $('#userBiodataEditModal').modal('toggle');
    });
});

