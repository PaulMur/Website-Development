$(document).ready(function(){

	/*  Hamburger Menu & Icon  */
	$('.hamburger').on('click', function(e){
		
		e.preventDefault();
		$(this).toggleClass('opned');
		$('header nav').toggleClass('active');
		
	});
	
	$('#btnCreate').on('click', function(e){
		e.preventDefault();
		$('#createyourown').toggleClass('current');
	});
	$('#fishie').on('click', function(e){
		e.preventDefault();
		$('#createyourown').toggleClass('current');
	});
	
	var t = setInterval(function(){
		$("#carousel ul").animate({marginLeft:-480},1000,function(){
			$(this).find("li:last").after($(this).find("li:first"));
			$(this).css({marginLeft:0});
		})
	},10000);
	
	
	
	
	
	
});
