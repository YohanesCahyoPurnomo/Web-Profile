$(document).ready(function(){
	$("#btnmenuadmin").click(function(){
		$("#menuadmin").toggle(1000);
	});

	$(window).load(function(){
		$("#loading").fadeOut(1000);
	})
});

$(document).ready(function(){
	$("#btnall").click(function(){
		$("#menuall").toggle(1000);
			$('.contentwrap').toggle(function() {
		        $('.contentwrap').animate({width:"75%"}, 400);
		    }, function() {
		        $('.contentwrap').animate({width:"99,9%"}, 400);
		    });	
	});
});