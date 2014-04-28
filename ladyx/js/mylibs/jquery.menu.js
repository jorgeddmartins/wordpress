$(function() {
	$('#search').click(function(e) {
		$("#search_box").lightbox_me({
			centered : true,
			onLoad : function() {
			}
		});

		e.preventDefault();

		$('#search_box input').focus();
	});

	$('#shoponline').click(function(e) {
		$("#shop_online").lightbox_me({
			centered : true,
			onLoad : function() {
			}
		});

		e.preventDefault();
	});

	$('#lang').click(function(e) {
		$("#lady_lang").lightbox_me({
			centered : true,
			onLoad : function() {
			}
		});

		e.preventDefault();
	});

	$('#mobmenu').click(function(e) {
		$("#mobile_nav").lightbox_me({
			centered : true,
			onLoad : function() {
			}
		});

		e.preventDefault();
	});
});

function focar(val, campo) {
	if (campo.value == val) {
		campo.value = '';
		campo.style.color = '#079ac4';
	}
}

function desfocar(val, campo) {
	if (campo.value == val || campo.value == '') {
		campo.value = val;
		campo.style.color = '#079ac4';
	}
}

