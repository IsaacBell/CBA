/*
jQuery To Top version 0.1
(cc) Jorgen Kesseler - jkesseler@gmail.com / verpletterend.nl
Licensed under the CC-GNU GPL (http://creativecommons.org/licenses/GPL/2.0/)
*/
(function(e){jQuery.toTop=function(t){t=e.extend({},jQuery.toTop.defaults,t);t.css=e.extend({},jQuery.toTop.defaults.css,t.css);$anchor=e("<a />",{id:t.anchorName,name:t.anchorName}).prependTo("body");var n=e("<div/>",{css:t.css,id:t.id}).appendTo(t.appentTo);$toTopLink=e("<a />",{href:"#"+t.anchorName}).html(t.topLinkText).click(function(n){n.preventDefault();e("html, body").animate({scrollTop:0},t.scrollSpeed)}).appendTo(n);if(t.image!=""){$toTopLink.html("");$image=e("<img />",{alt:t.topLinkText,css:{border:"none"},src:t.image}).appendTo($toTopLink)}e(window).scroll(function(){if(e(document).scrollTop()==0){n.slideUp()}else{n.slideDown()}})};jQuery.toTop.defaults={anchorName:"top",appentTo:"body",css:{bottom:"-3px",right:"-3px",display:"none",position:"fixed",zIndex:999},id:"toTop",image:"",scrollSpeed:200,topLinkText:'<i class="icon-chevron-up icon-white"></i>'}})(jQuery)