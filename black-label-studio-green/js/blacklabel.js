
jQuery(function(){
	var easing = 'swing';
	jQuery('.follow_fb_link, .follow_twitter_link, .follow_rss_link').css({backgroundPosition: '0px 0px'})
		.mouseover(function(){
			jQuery(this).stop().animate({backgroundPosition:'0 -22px'},200, easing)
		})
		.mouseout(function(){
			jQuery(this).stop().animate({backgroundPosition:'0 0'},200, easing)
		});
});
  
    jQuery(function() {
		jQuery('#topmenu ul:eq(0)').addClass('lava');
        jQuery('#topmenu ul:eq(0)').lavaLamp();
		jQuery('ul.commentlist .comment, ul.commentlist .pingback, ul.commentlist .trackback, #respond').after('<div class="comment-body-bottom"></div>');
		
		jQuery('#sidebar ul li a, #topmenu ul li .sub-menu li a').hover(function(){
			jQuery(this).stop().animate({"color":"#fff"}); 
			}, function(){
			jQuery(this).stop().animate({"color":"#364729"});
			});
			jQuery('#posts .post_content a').hover(function(){
			jQuery(this).stop().animate({"color":"#A30404"}); 
			}, function(){
			jQuery(this).stop().animate({"color":"#364729"});
			});
		jQuery('.footage ul li ul li a').hover(function(){
			jQuery(this).stop().animate({"color":"#fff"}); 
			}, function(){
			jQuery(this).stop().animate({"color":"#364729"});
			});
			jQuery('#topmenu ul li a').hover(function(){
			jQuery(this).stop().animate({"color":"#7f9305"}); 
			}, function(){
			jQuery(this).stop().animate({"color":"#fff"});
			});
			
    });

	
jQuery(function(){
	jQuery('#topmenu ul > li ul.sub-menu, #topmenu ul > li ul.children').css({"display":"none" });
	
	jQuery('#topmenu ul > li').hover(function(){
	jQuery(this).find('.sub-menu, ul.children').slideDown({ duration: 200});
	}, function(){
	jQuery(this).find('.sub-menu, ul.children').slideUp({ duration: 200});	
	});		
});


jQuery(document).ready(function() {
jQuery("#logo .textlogo").each(function() {
var text = jQuery(this).html();
var first = jQuery('<span>'+text.charAt(0)+'</span>').addClass('caps');
jQuery(this).html(text.substring(1)).prepend(first);
});
});