$(document).ready(function () {
	/*Functions this Home Box*/
	$('.menu-close-icon').click(function (e) {
		e.preventDefault();
		$('#side-menu').animate(
			{
			left: '-250px',
			top: '-1000px'
			}
		);
	});

	$('.menu-open-icon').click(function (e) {
		e.preventDefault();
		$('#side-menu').animate(
			{
			left: '0px',
			top: '0px'
			}
		);
	});
});

/*Functions Index*/
function showPassword() {
    
    var key_attr = $('#key').attr('type');
    
    if(key_attr != 'text') {
        
        $('.checkbox').addClass('show');
        $('#key').attr('type', 'text');
        
    } else {
        
        $('.checkbox').removeClass('show');
        $('#key').attr('type', 'password');
        
    }
    
}