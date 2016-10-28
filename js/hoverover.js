/*
 * jQuery Plugin Development v1.0
 * 
 * Copyright 2012, DotDesign
 * Author: Nishant Joshi
 * Website: www.dotdesign.in
 * Email: info@dotdesign.in, dotdesign.in@gmail.com
 * 
 *
 * v1.0.0
 * First release
 * 29-Dec-2012
 * 
 * v1.0.1
 * Added animation in & out delay
 */
(function(b){var a=function(d,c){this.$el=b(d);this.options=b.extend({},b.fn.hoverOver.defaults,c);return this};a.prototype={init:function(c){this.render()},render:function(){this.appendTemplate()},appendTemplate:function(){var n=this;if(typeof n.$el.data("content")!="undefined"){if(typeof b(n.$el.data("content").toString()).html()!="undefined"){hoverContent=b(n.$el.data("content").toString()).html()}else{hoverContent=n.options.contentData}}else{hoverContent=n.options.contentData}if(n.options.contentPushPullType.toLowerCase()=="push"||n.options.contentPushPullType.toLowerCase()=="pull"){if(typeof n.$el.data("pushContent")!="undefined"){if(typeof b(n.$el.data("pushContent").toString()).html()!="undefined"){pushContentData=b(n.$el.data("pushContent").toString()).html()}else{pushContentData=n.options.pushContentData}}else{pushContentData=n.options.pushContentData}var q=n.$el.clone();q.removeAttr("id");n.$el.html('<div class="push-content-box" style="position: absolute; top:0; left:0"></div>');b(".push-content-box",n.$el).append(q);n.$el.append(pushContentData);var f=b('<div class="hover-content-box"><div class="hover-content-copy-txt">'+hoverContent+'</div><div class="hover-content-box-overlay"></div></div>');n.$el.append(f)}else{var f=b('<div class="hover-content-box"><div class="hover-content-copy-txt">'+hoverContent+'</div><div class="hover-content-box-overlay"></div></div>');n.$el.append(f)}var l=b(".hover-content-box",n.$el),h=b(".push-content-box",n.$el);var d=parseInt(l.css("marginLeft"),10)+parseInt(l.css("marginRight"),10)+parseInt(l.css("paddingLeft"),10)+parseInt(l.css("paddingRight"),10)+parseInt(l.css("borderLeftWidth"),10)+parseInt(l.css("borderRightWidth"),10),k=parseInt(l.css("marginTop"),10)+parseInt(l.css("marginBottom"),10)+parseInt(l.css("paddingTop"),10)+parseInt(l.css("paddingBottom"),10)+parseInt(l.css("borderTopWidth"),10)+parseInt(l.css("borderBottomWidth"),10);var r=n.$el.outerHeight(true)-k,o=n.$el.outerWidth(true)-d,c=b(".hover-content-box, .hover-content-copy-txt, .hover-content-box-overlay",n.$el),u=b(".hover-content-box",n.$el),i=b(".hover-content-copy-txt",n.$el),m=b(".hover-content-box-overlay",n.$el),s=b(".hover-content-copy-txt, .hover-content-box-overlay",n.$el),g=b(".hover-content-box-overlay",n.$el).css("opacity"),e=n.options.aniDurationIn,p=n.options.aniDurationOut;if(n.options.contentShowHeight>0){var t=n.options.contentShowHeight;var j=n.options.aniTypeIn.toLowerCase();u.css({display:"block",width:o,height:r});i.css({display:"block",top:0,width:o,height:r});m.css({display:"block",top:0,width:o,height:r});if(j=="flybottom"){u.css({top:r-t})}else{if(j=="flytop"){u.css({top:-r+t})}}}n.$el.hover(function(){setTimeout(function(){var v=n.options.aniTypeIn.toLowerCase();u.css({opacity:1});if(v=="fade"){c.css({display:"none",left:0,top:0,width:o,height:r});c.fadeIn(e)}else{if(v=="flytop"){if(n.options.contentShowHeight>0){c.animate({top:0},e)}else{if(n.options.contentPushPullType.toLowerCase()=="push"){h.css({left:0,top:0});h.animate({top:r},e)}else{if(n.options.contentPushPullType.toLowerCase()=="pull"){h.css({left:0,top:0});h.animate({top:-r},e)}}c.css({display:"block",left:0,top:0,width:o,height:r});u.css({top:-r});c.animate({top:0},e)}}else{if(v=="flybottom"){if(n.options.contentShowHeight>0){c.animate({top:0},e)}else{if(n.options.contentPushPullType.toLowerCase()=="push"){h.css({left:0,top:0});h.animate({top:-r},e)}else{if(n.options.contentPushPullType.toLowerCase()=="pull"){h.css({left:0,top:0});h.animate({top:r},e)}}c.css({display:"block",left:0,top:0,width:o,height:r});u.css({top:r});c.animate({top:0},e)}}else{if(v=="flyleft"){if(n.options.contentPushPullType.toLowerCase()=="push"){h.css({left:0,top:0});h.animate({left:o},e)}else{if(n.options.contentPushPullType.toLowerCase()=="pull"){h.css({left:0,top:0});h.animate({left:-o},e)}}c.css({display:"block",left:-o,top:0,width:o,height:r});s.css({left:0});c.animate({left:0},e)}else{if(v=="flyright"){if(n.options.contentPushPullType.toLowerCase()=="push"){h.css({left:0,top:0});h.animate({left:-o},e)}else{if(n.options.contentPushPullType.toLowerCase()=="pull"){h.css({left:0,top:0});h.animate({left:o},e)}}c.css({display:"block",left:o,top:0,width:o,height:r});s.css({left:0});c.animate({left:0},e)}else{if(v=="flylefttop"){c.css({display:"block",left:-o,top:-r,width:o,height:r});c.animate({left:0,top:0},e)}else{if(v=="flyrighttop"){c.css({display:"block",left:o,top:-r,width:o,height:r});c.animate({left:0,top:0},e)}else{if(v=="flyrightbottom"){c.css({display:"block",left:o,top:r,width:o,height:r});c.animate({left:0,top:0},e)}else{if(v=="flyleftbottom"){c.css({display:"block",left:-o,top:r,width:o,height:r});c.animate({left:0,top:0},e)}else{if(v=="curtaintop"){c.css({display:"block",left:0,top:0,width:o,height:0});c.animate({left:0,top:0,height:r},e)}else{if(v=="curtaincenterwidth"){u.css({display:"block",left:o/2,top:0,width:0,height:r});i.css({display:"block",opacity:0,left:0,top:0,width:o,height:r});m.css({display:"block",opacity:0,left:0,top:0,width:o,height:r});u.animate({left:0,width:o});i.animate({opacity:1});m.animate({opacity:g})}else{if(v=="curtaincenterheight"){u.css({display:"block",left:0,top:r/2,width:o,height:0});i.css({display:"block",opacity:0,left:0,top:0,width:o,height:r});m.css({display:"block",opacity:0,left:0,top:0,width:o,height:r});u.animate({top:0,height:r});i.animate({opacity:1});m.animate({opacity:g})}else{if(v=="fromcenter"){u.css({display:"block",left:o/2,top:r/2,width:0,height:0});i.css({display:"block",opacity:0,left:0,top:0,width:o,height:r});m.css({display:"block",opacity:0,left:0,top:0,width:o,height:r});u.animate({left:0,top:0,width:o,height:r});i.animate({opacity:1});m.animate({opacity:g})}else{u.css({opacity:1,left:0,top:0,width:o,height:r});i.css({left:0,top:0,width:o,height:r});m.css({opacity:g,left:0,top:0,width:o,height:r});l.show()}}}}}}}}}}}}}n.options.onMouseOver()},n.options.aniInDelay)},function(){setTimeout(function(){var v=n.options.aniTypeOut.toLowerCase();if(v=="fade"){l.fadeOut(p)}else{if(v=="flytop"){if(n.options.contentShowHeight>0){u.animate({top:-r+n.options.contentShowHeight},p);i.css({top:0});m.css({top:0})}else{if(n.options.contentPushPullType.toLowerCase()=="push"||n.options.contentPushPullType.toLowerCase()=="pull"){h.animate({top:0},e)}u.animate({top:-r},p)}}else{if(v=="flybottom"){if(n.options.contentShowHeight>0){u.animate({top:r-n.options.contentShowHeight},p);i.css({top:0});m.css({top:0})}else{if(n.options.contentPushPullType.toLowerCase()=="push"||n.options.contentPushPullType.toLowerCase()=="pull"){h.animate({top:0},e)}u.animate({top:r},p)}}else{if(v=="flyleft"){if(n.options.contentPushPullType.toLowerCase()=="push"||n.options.contentPushPullType.toLowerCase()=="pull"){h.animate({left:0},e)}u.animate({left:-o},p);s.css({left:0})}else{if(v=="flyright"){if(n.options.contentPushPullType.toLowerCase()=="push"||n.options.contentPushPullType.toLowerCase()=="pull"){h.animate({left:0},e)}u.animate({left:o},p);s.css({left:0})}else{if(v=="flylefttop"){c.animate({left:-o,top:-r},p)}else{if(v=="flyrighttop"){c.animate({left:o,top:-r},p)}else{if(v=="flyrightbottom"){c.animate({left:o,top:r},p)}else{if(v=="flyleftbottom"){c.animate({left:-o,top:r},p)}else{if(v=="curtaintop"){c.animate({top:0,height:0},p)}else{if(v=="curtaincenterwidth"){u.animate({opacity:0,left:o/2,width:0},e)}else{if(v=="curtaincenterheight"){u.animate({opacity:0,top:r/2,height:0},e)}else{if(v=="tocenter"){u.animate({opacity:0,left:o/2,top:r/2,width:0,height:0},e)}else{l.hide()}}}}}}}}}}}}}n.options.onMouseOut()},n.options.aniOutDelay)})}};b.fn.hoverOver=function(c){return this.each(function(d,g){var e=b(this);var f=new a(this,c);f.init(c);e.data("hoverOver",f)})};b.fn.hoverOver.defaults={contentData:"Hover Content",pushContentData:"Box content when hover over",aniTypeIn:"fade",aniTypeOut:"fade",aniDurationIn:500,aniDurationOut:500,aniInDelay:0,aniOutDelay:0,contentShowHeight:0,contentPushPullType:"",onMouseOver:function(){},onMouseOut:function(){}};b.fn._reverse=[].reverse})(jQuery);