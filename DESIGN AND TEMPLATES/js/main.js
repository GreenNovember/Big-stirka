var currentslide = 2;
var maxSlides = 3;

function onResize(){
/*var size = [document.documentElement.clientWidth,document.documentElement.clientHeight];
window.onresize = function(){
	if (document.documentElement.clientWidth>1300)
		document.body.style.zoom=document.documentElement.clientWidth/size[0];
	else
		document.body.style.zoom = document.documentElement.clientWidth/1000;
}
*/
}
function go(current) {

	$(".slider-item").each(function(a, b) {
		$(b).css({"transition": "1s", "transform": "translate(0px,-3000px)"});
	});

	switch (current) {
		case 1:
			$(".slider-item:nth-of-type(" + current + ")").css({"transition": "1s", "transform": "translateY(0px)"});
			break;
		case 2:
			$(".slider-item:nth-of-type(" + current + ")").css({"transition": "1s", "transform": "translateY(-300px)"});
			break;
		case 3:
			$(".slider-item:nth-of-type(" + current + ")").css({"transition": "1s", "transform": "translateY(-600px)"});
			break;
	}
}

go(1);

$(document).ready(function() {
	onResize();
	
	$("#send").click(function(){
		var name = $("#input-name").val();
		var email = $("#input-email").val();
		var message = $("#input-message").html();
		
		$.post("./doSomth.php?do=mail",{
			"name_field":name,
			"email":email,
			"message":message
			},function(data){
				alert(data);
			});
	});
	
	$(".addToBasket").click(function(){
		var item = $(this).attr("itemId");

		$.post("./doSomth.php?do=add",{
			'itemId':item
			},function(data,status){
				$("#sum").html(data);
			});
	});
	
	$(".removeFromBasket").click(function(){
		var item = $(this).attr("itemId");

		$.post("./doSomth.php?do=remove",{
			"itemId":item
			},function(data,status){
				alert("success"+data);
			});
	});
	
	$(".getBasket").click(function(){
		var item = $(this).attr("itemId");

		$.post("./doSomth.php?do=getList",{
			"itemId":item
			},function(data,status){
				alert("success"+data);
			});
	});
	
	$(".byeProduct").click(function(){
		$.post("./doSomth.php?do=bye",{
			"itemId":item
			},function(data,status){
				alert("success"+data);
			});
	});


	var targets = $('[rel~=tooltip]'),
			target = false,
			tooltip = false,
			title = false;

	targets.bind('mouseenter', function()
	{
		target = $(this);
		tip = target.attr('title');
		tooltip = $('<div id="tooltip"></div>');

		if (!tip || tip == '')
			return false;

		target.removeAttr('title');
		tooltip.css('opacity', 0)
				.html(tip)
				.appendTo('body');

		var init_tooltip = function()
		{
			if ($(window).width() < tooltip.outerWidth() * 1.5)
				tooltip.css('max-width', $(window).width() / 2);
			else
				tooltip.css('max-width', 340);

			var pos_left = target.offset().left + (target.outerWidth() / 2) - (tooltip.outerWidth() / 2),
					pos_top = target.offset().top - tooltip.outerHeight() - 20;

			if (pos_left < 0)
			{
				pos_left = target.offset().left + target.outerWidth() / 2 - 20;
				tooltip.addClass('left');
			}
			else
				tooltip.removeClass('left');

			if (pos_left + tooltip.outerWidth() > $(window).width())
			{
				pos_left = target.offset().left - tooltip.outerWidth() + target.outerWidth() / 2 + 20;
				tooltip.addClass('right');
			}
			else
				tooltip.removeClass('right');

			if (pos_top < 0)
			{
				var pos_top = target.offset().top + target.outerHeight();
				tooltip.addClass('top');
			}
			else
				tooltip.removeClass('top');

			tooltip.css({left: pos_left, top: pos_top})
					.animate({top: '+=10', opacity: 1}, 50);
		};

		init_tooltip();
		$(window).resize(init_tooltip);

		var remove_tooltip = function()
		{
			tooltip.animate({top: '-=10', opacity: 0}, 50, function()
			{
				$(this).remove();
			});

			target.attr('title', tip);
		};

		target.bind('mouseleave', remove_tooltip);
		tooltip.bind('click', remove_tooltip);
	});

	/*----------------toooltip end-------------------*/

	$('body').on('contextmenu', 'img', function(e) {
		return false;
	});


	$(".left-arrow").click(function()
	{

		go(currentslide);
		if (currentslide < maxSlides)
			currentslide++;
		else
			currentslide = 1;

	});

	$(".right-arrow").click(function()
	{
		go(currentslide);
		if (currentslide > 1)
			currentslide--;
		else
			currentslide = maxSlides;
	});


	$(".pp").click(function() {
		$(".pp").css({"height": "55px"});
		$(".pp h2").css({"margin-top": "10px", "font-size": "15pt", "transition": "1s", "font-family": "Impact"});
		$(".pp-info").css({"display": "block"});
	});

});