//= require jquery-1.11.3.min
//= require vendors/bootstrap.min
//= require scripts.min
//= require jquery-readyselector

// For Header Menu with submenus
$(document).ready(function(){
    $('.dropdown-submenu .dropdown-menu').css('display','none');
    //$('#sticky-header').affix('refresh');
});

$(document).on('ready page:change', function() {

    $('.datepicker').datetimepicker({
        pickTime: false
    });

    $('.datetimepicker').datetimepicker({
        pickSeconds: false
    });

    $('.timepicker').datetimepicker({
        pickDate: false,
        pickSeconds: false
    });

});