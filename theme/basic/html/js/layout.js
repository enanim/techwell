$(function() { 
	/*
		GNB(서브에 적용할경우 이부분 발췌하여 사용하세요.)
	*/
	var gnb = null;
	$('#nav>ul>li').mouseenter(function(){
		$('#nav>ul>li>ul').slideDown();
		$('#nav_bg').slideDown();
		$('#close_gnb').fadeIn();
	});
	$('#nav').mouseleave(function(){
	gnb = setTimeout(function ( )  {
		$('#nav li>ul').stop().slideUp();
		$('#nav_bg').stop().slideUp();
	},300);
	});
	$('#nav ul,#nav_bg').mouseenter(function(){
	//	clearTimeout(gnb);
	});
	$('#nav>ul>li').mouseenter(function(){
		$(this).addClass('active').siblings().removeClass('active');
	});
	$('#nav>ul>li').mouseleave(function(){
		$('#nav>ul>li').removeClass('active');
	});
	$('#close_gnb').click(function(){
		$(this).fadeOut();
		$('#nav li>ul').stop().slideUp();
		$('#nav_bg').stop().slideUp();
	});
	/*
	슬라이드 배너
	*/
	var hover = 0;
	var len = $('#slider>a').size();
	var currentPosition = 0;
	for(var i =0;i<len;i++){
			if(i==0){
				active = 'class="active"';
			}
			else{
				active='';
			}
			$('#slider_bullet').append('<a href="#" '+active+'></a>');
		}
	$(window).bind('load resize',function(){
		var ww = $('#main_banner').width(1200); //width 숫자 넣어주기
		$('#main_banner').css({marginLeft:-0.5*ww});
		
		$('#slider img').width(ww);
		var ih = $('#slider img').height();
		$('#main_banner,#slider_controller').height(ih);
		$('#slider_controller a').css({marginTop:(ih*0.5)-38});
	});
	$('#slider_bullet a').click(function(){
		var index = $(this).index();
		currentPosition = index;
		$(this).addClass('active').siblings().removeClass('active');
		$('#slider').animate({left:currentPosition*-100+'%'})
		return false;
	});
	$('#prev_btn').click(function(){
		currentPosition--;
		if(currentPosition==-1){
			currentPosition = len-1;
		}
		$('#slider_bullet a').eq(currentPosition).addClass('active').siblings().removeClass('active');
		$('#slider').animate({left:currentPosition*-100+'%'})
		return false;
	});
	$('#next_btn').click(function(){
		currentPosition++;
		if(currentPosition==len){
			currentPosition = 0;
		}
		$('#slider_bullet a').eq(currentPosition).addClass('active').siblings().removeClass('active');
		$('#slider').animate({left:currentPosition*-100+'%'})
		return false;
	});

	/*$('#lnb>ul>li>a').click(function(){
		var $sub = $(this).parent().find('ul');
		var $other = $(this).parent().siblings();	
		if($sub.size()>0){
			$sub.slideDown();
			$other.find('ul').slideUp();
			$(this).parent().addClass('on');
			$other.removeClass('on');
			return false;
		}
	});*/
	$('#main_banner_height').hover(function(){
		hover=1;
	},function(){
		hover=0;
	});
	setInterval(function(){
		if(hover==1){

			return false;
		}
		$('#next_btn').click();
	},5000);
	$('#lnb').mouseleave(function(){
		//$('#lnb>ul>li:not(.origin)>ul').slideUp();
		//$('#lnb>ul>li:not(.origin)').removeClass('on');
		//$('#lnb>ul>li.origin').addClass('on');
		//$('#lnb>ul>li.origin>ul').slideDown();
	});
});
