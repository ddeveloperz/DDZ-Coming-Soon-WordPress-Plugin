jQuery('#ddz_enable').on('click', function () {
        jQuery(this).val(this.checked ? 1 : 0); 
           
    });

// Date picker for coming soon plugin for timout
jQuery(document).ready(function($) {
        jQuery("#datepicker").datepicker({dateFormat: 'dd-mm-yy'});
});
// Time picker for coming soon plugin for timout
jQuery(document).ready(function(){
    jQuery('input.timepicker').timepicker({});
});
	 