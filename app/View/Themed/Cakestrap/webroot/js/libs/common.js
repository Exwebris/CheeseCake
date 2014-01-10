$(document).ready(function() {
	fixHeight();
	attachDatePicker();
});

/**
 * Set the height of the DIVs to the same value
 * 
 * Taken verbatim from:
 * http://stackoverflow.com/questions/2619813/jquery-equal-height-divs
 * 
 */
function fixHeight() {
	var $sameHeightDivs = $('.fix-height');
	var maxHeight = 0;
	$sameHeightDivs.each(function() {
		maxHeight = Math.max(maxHeight, $(this).outerHeight());
	});
	$sameHeightDivs.css({ height: maxHeight + 'px' });
}

/**
 * Attach datepickers
 */
function attachDatePicker() {

	$(".datetimepicker").datetimepicker({
		dateFormat: 'yy-mm-dd',
		firstDay: 1,
		timeFormat: 'hh:mm:ss'
	});
	$(".datepicker").datepicker({
		dateFormat: 'yy-mm-dd',
		firstDay: 1,
	});

}
