/* Copyright (C) YOOtheme GmbH, YOOtheme Proprietary Use License (http://www.yootheme.com/license) */

(function(f){function o(a){a=a||{};a.transition&&(a[t+"transition"]=a.transition);a.transform&&(a[t+"transform"]=a.transform);return a}var r=document.createElement("div"),r=r.style,m,u,w="-webkit- -moz- -o- -ms- -khtml-".split(" "),v="Webkit Moz O ms Khtml".split(" "),t="";m=false;for(var n=0;n<v.length;n++)if(r[v[n]+"Transition"]===""){m=v[n]+"Transition";t=w[n];break}m&&"WebKitCSSMatrix"in window&&"m11"in new WebKitCSSMatrix&&navigator.userAgent.match(/Chrome/i);u=function(){var a=document.createElement("canvas");
return!(!a.getContext||!a.getContext("2d"))}();var r=null,h=function(){};h.prototype=f.extend(h.prototype,{name:"slideshow",options:{index:0,width:"auto",height:"auto",autoplay:true,interval:5E3,navbar_items:4,caption_animation_duration:500,kenburns_animation_duration:null,slices:20,duration:500,animated:"random",easing:"swing"},nav:null,navbar:null,captions:null,caption:null,kbi:0,initialize:function(a,b){var c=this,d=0,e=0;this.options=f.extend({},this.options,b);this.element=this.wrapper=a;this.ul=
this.wrapper.find("ul.slides:first").css({width:"100%",overflow:"hidden"});if(this.options.width=="auto")this.options.width=this.wrapper.width();this.wrapper.css({position:"relative",width:this.options.width});e=this.ul.width();this.ul.children().each(function(){d=Math.max(d,f(this).height())});if(this.options.height=="auto")this.options.height=d;this.slides=this.ul.css({position:"relative",height:this.options.height}).children().css({top:"0px",left:"0px",position:"absolute",width:e,height:this.options.height}).hide();
this.index=this.slides[this.options.index]?this.options.index:0;f(".next",this.wrapper).bind("click",function(){c.stop();c.nextSlide()});f(".prev",this.wrapper).bind("click",function(){c.stop();c.prevSlide()});f(this.slides.get(this.index)).show();if(this.wrapper.find(".nav:first").length){this.nav=this.wrapper.find(".nav:first");var l=this.nav.children();l.each(function(a){f(this).bind("click",function(){c.stop();c.slides[a]&&c.show(a)})});a.bind("slideshow-show",function(a,c,b){f(l.removeClass("active").get(b)).addClass("active")})}if(this.wrapper.find(".captions:first").length&&
this.wrapper.find(".caption:first").length)this.captions=this.wrapper.find(".captions:first").hide().children(),this.caption=this.wrapper.find(".caption:first").hide();this.nav&&f(this.nav.children().get(this.index)).addClass("active");this.navbar&&f(this.navbar.children().get(this.index)).addClass("active");this.showCaption(this.index);this.timer=null;this.hover=false;this.wrapper.hover(function(){c.hover=true},function(){c.hover=false});this.options.autoplay&&this.start();this.options.animated==
"kenburns"&&u&&this.show(this.index,true);"ontouchend"in document&&(a.bind("touchstart",function(c){function b(a){if(e){var c=a.originalEvent.touches?a.originalEvent.touches[0]:a;k={time:(new Date).getTime(),coords:[c.pageX,c.pageY]};Math.abs(e.coords[0]-k.coords[0])>10&&a.preventDefault()}}var d=c.originalEvent.touches?c.originalEvent.touches[0]:c,e={time:(new Date).getTime(),coords:[d.pageX,d.pageY],origin:f(c.target)},k;a.bind("touchmove",b).one("touchend",function(){a.unbind("touchmove",b);e&&
k&&k.time-e.time<1E3&&Math.abs(e.coords[0]-k.coords[0])>30&&Math.abs(e.coords[1]-k.coords[1])<75&&e.origin.trigger("swipe").trigger(e.coords[0]>k.coords[0]?"swipeleft":"swiperight");e=k=void 0})}),this.wrapper.bind("swipeleft",function(){c.stop();c.nextSlide()}).bind("swiperight",function(){c.stop();c.prevSlide()}))},nextSlide:function(){this.show(this.slides[this.index+1]?this.index+1:0)},prevSlide:function(){this.show(this.index-1>-1?this.index-1:this.slides.length-1)},show:function(a,b){if(!(this.index==
a&&!b||this.fx&&this.options.animated!="kenburns"))this.current=f(this.slides.get(this.index)),this.next=f(this.slides.get(a)),this.animated=this.options.animated,this.duration=this.options.duration,this.easing=this.options.easing,this.dir=a>this.index?"right":"left",this.init=b,this.showCaption(a),this.element.trigger("slideshow-show",[this.index,a]),this.index=a,this[this.animated]?(this.fx=true,this[this.animated]()):(this.current.hide(),this.next.show())},showCaption:function(a){if(this.caption&&
this.captions[a]){var b=f(this.captions.get(a)).html();this.caption.is(":animated")&&this.caption.stop();if(f.trim(b)=="")this.caption.is(":visible")&&this.caption.fadeOut(this.options.caption_animation_duration);else if(this.caption.is(":visible")){var c=this;this.caption.fadeOut(this.options.caption_animation_duration,function(){f(this).html(b).delay(200).css("opacity","").fadeIn(c.options.caption_animation_duration)})}else this.caption.html(b).fadeIn(this.options.caption_animation_duration)}},
start:function(){if(!this.timer){var a=this;this.timer=setInterval(function(){(a.options.animated=="kenburns"||!a.hover&&!a.fx)&&a.nextSlide()},this.options.interval)}},stop:function(){if(this.timer){clearInterval(this.timer);this.tmptimer&&clearTimeout(this.tmptimer);var a=this;this.tmptimer=setTimeout(function(){a.start();this.tmptimer=false},3E4);this.timer=false}},bindTransitionEnd:function(a){var b=this;f(a).bind("webkitTransitionEnd transitionend oTransitionEnd msTransitionEnd",function(){b.fx=
null;b.next.css({"z-index":"2",left:0,top:0}).show();b.current.hide();b.slicer.remove()})},randomSimple:function(){var a="top,bottom,left,right,fade,scrollLeft,scrollRight,scroll".split(",");this.animated=a[Math.floor(Math.random()*a.length)];this[this.animated]()},randomFx:function(){var a="sliceUp,sliceDown,sliceUpDown,fold,puzzle,boxes,boxesRtl".split(",");this.animated=a[Math.floor(Math.random()*a.length)];this[this.animated]()},top:function(){var a=this;this.current.css({"z-index":1});this.next.css({"z-index":2,
display:"block",left:0,top:this.wrapper.height()*(this.animated=="bottom"?2:-1)}).animate({top:0},{duration:a.duration,easing:a.easing,complete:function(){a.fx=null;a.current.hide()}})},bottom:function(){this.top.apply(this)},left:function(){var a=this;this.current.css({"z-index":1});this.next.css({"z-index":2,display:"block",left:this.current.width()*(this.animated=="right"?2:-1)}).animate({left:0},{duration:a.duration,easing:this.easing,complete:function(){a.fx=null;a.current.hide()}})},right:function(){this.left()},
fade:function(){var a=this;this.next.css({top:0,left:0,"z-index":1}).fadeIn(a.duration);this.current.css({"z-index":2}).fadeOut(this.duration,function(){a.fx=null;a.current.hide().css({opacity:1})})},scrollLeft:function(){var a=this;this.current.css({"z-index":1});this.next.css({"z-index":2,display:"block",left:this.current.width()*(this.animated=="scrollRight"?1:-1)}).animate({left:0},{duration:a.duration,easing:this.easing,complete:function(){a.fx=null;a.current.hide()},step:function(b,c){a.current.css("left",
(Math.abs(c.start)-Math.abs(b))*(a.animated=="scrollRight"?-1:1))}})},scrollRight:function(){this.scrollLeft(this)},scroll:function(){var a=this;this.current.css({"z-index":1});this.next.css({"z-index":2,display:"block",left:this.current.width()*(this.dir=="right"?1:-1)}).animate({left:0},{duration:a.duration,easing:this.easing,complete:function(){a.fx=null;a.current.hide()},step:function(b,c){a.current.css("left",(Math.abs(c.start)-Math.abs(b))*(a.dir=="right"?-1:1))}})},swipe:function(){var a=this;
this.current.css({"z-index":2});this.next.css({"z-index":1,top:0,left:this.next.width()/3*(a.dir=="right"?1:-1)}).show();var b=f("<div></div>").css({position:"absolute",top:0,left:0,width:this.current.outerWidth(),height:this.current.outerHeight(),opacity:0,"background-color":"#000"}).appendTo(this.current),c=f("<div></div>").css({position:"absolute",top:0,left:0,width:this.current.outerWidth(),height:this.current.outerHeight(),opacity:0.6,"background-color":"#000"}).appendTo(this.next);b.animate({opacity:0.6},
{duration:a.duration});c.animate({opacity:0},{duration:a.duration});this.current.animate({left:(a.dir=="right"?-1:1)*this.current.width()},{duration:a.duration,easing:"easeOutCubic",complete:function(){a.fx=null;a.current.hide();b.remove();c.remove()}});this.next.animate({left:0},{duration:a.duration,easing:"easeOutCubic"})},slice:function(){var a=this,b=this.next.find("img:first"),c=this.animated=="sliceUp"?"bottom":"top";if(b.length){var d=this.current.find("img:first").position();s(this,d.top,
d.left);for(var d=Math.round(this.slicer.width()/this.options.slices),e=0;e<this.options.slices;e++){var l=e==this.options.slices-1?this.slicer.width()-d*e:d;this.animated=="sliceUpDown"&&(c=(e%2+2)%2==0?"top":"bottom");this.slicer.append(f("<div />").css(c,0).css(o({position:"absolute",left:d*e+"px",width:l+"px",height:0,background:"url("+b.attr("src")+") no-repeat -"+(d+e*d-d)+"px "+c,opacity:0,transition:"all "+a.duration+"ms ease-in "+e*60+"ms"})))}this.slices=this.slicer.children();this.bindTransitionEnd.apply(this,
[this.slices.get(this.slices.length-1)]);this.current.css({"z-index":1});this.slicer.show();var j=this.wrapper.height();if(m)this.slices.css(o({height:j,opacity:1}));else{var g=0;this.slices.each(function(c){var b=f(this);setTimeout(function(){b.animate({height:j,opacity:1},a.duration,function(){c==a.slices.length-1&&f(this).trigger("transitionend")})},g);g+=60})}}else this.next.css({"z-index":"2",left:0,top:0}).show(),this.current.hide(),this.fx=null},sliceUp:function(){this.slice.apply(this)},sliceDown:function(){this.slice.apply(this)},
sliceUpDown:function(){this.slice.apply(this)},fold:function(){var a=this,b=this.next.find("img:first");if(b.length){var c=this.current.find("img:first").position();s(this,c.top,c.left);for(var d=Math.round(this.slicer.width()/this.options.slices)+2,c=0;c<this.options.slices+1;c++){var e=c==a.options.slices?a.slicer.width()-d*c:d;this.slicer.append(f("<div />").css(o({position:"absolute",left:d*c+"px",width:e,top:"0px",height:a.options.height,background:"url("+b.attr("src")+") no-repeat -"+(d+c*d-
d)+"px 0%",opacity:0,transform:"scalex(0.0001)",transition:"all "+a.duration+"ms ease-in "+(100+c*60)+"ms"})))}this.slices=this.slicer.children();this.bindTransitionEnd.apply(this,[this.slices.get(this.slices.length-1)]);this.current.css({"z-index":1});this.slicer.show();if(m)this.slices.css(o({opacity:1,transform:"scalex(1)"}));else{var l=0;this.slices.width(0).each(function(c){var b=c==a.options.slices-1?a.slicer.width()-d*c:d,e=f(this);setTimeout(function(){e.animate({opacity:1,width:b},a.duration,
function(){c==a.slices.length-1&&f(this).trigger("transitionend")})},l+100);l+=50})}}else this.next.css({"z-index":"2",left:0,top:0}).show(),this.current.hide(),this.fx=null},puzzle:function(){var a=this,b=Math.round(this.options.slices/2),c=Math.round(this.wrapper.width()/b),d=Math.round(this.wrapper.height()/c),e=Math.round(this.wrapper.height()/d)+1,l=this.next.find("img:first");if(l.length){var j=this.current.find("img:first").position();s(this,j.top,j.left);for(var j=this.wrapper.width(),g=0;g<
d;g++)for(var i=0;i<b;i++){var h=f("<div />").css(o({position:"absolute",left:c*i+"px",width:i==b-1?j-c*i+"px":c+"px",top:e*g+"px",height:e+"px",background:"url("+l.attr("src")+") no-repeat -"+(c+i*c-c)+"px -"+(e+g*e-e)+"px",opacity:0,transition:"all "+a.duration+"ms ease-in 0ms"}));n+=1;this.slicer.append(h)}this.slices=x(this.slicer.children());this.bindTransitionEnd.apply(this,[this.slices.get(this.slices.length-1)]);this.current.css({"z-index":1});this.slicer.show();this.slices.each(function(c){var b=
f(this);setTimeout(function(){m?b.css(o({opacity:1})):b.animate({opacity:1},a.duration,function(){c==a.slices.length-1&&f(this).trigger("transitionend")})},100+c*50)})}else this.next.css({"z-index":"2",left:0,top:0}).show(),this.current.hide(),this.fx=null},boxes:function(){var a=this,b=Math.round(this.options.slices/2),c=Math.round(this.wrapper.width()/b),d=Math.round(this.wrapper.height()/c),e=Math.round(this.wrapper.height()/d)+1,l=0,j=this.next.find("img:first");if(j.length){var g=this.current.find("img:first").position();
s(this,g.top,g.left);for(g=0;g<d;g++)for(var i=0;i<b;i++)this.slicer.append(f("<div />").css(o({position:"absolute",left:c*i+"px",width:0,top:e*g+"px",height:0,background:"url("+j.attr("src")+") no-repeat -"+(c+i*c-c)+"px -"+(e+g*e-e)+"px",opacity:0,transition:"all "+(100+a.duration)+"ms ease-in 0ms"})).data("base",{width:i==b-1?this.wrapper.width()-c*i:c,height:e}));this.slices=this.slicer.children();this.current.css({"z-index":1});this.slicer.show();var h=0,k=0,p=[];p[h]=[];c=this.animated=="boxesRtl"?
this.slices._reverse():this.slices;this.bindTransitionEnd.apply(this,[c.get(c.length-1)]);c.each(function(){p[h][k]=f(this);k++;k==b&&(h++,k=0,p[h]=[])});for(i=e=0;i<b*d;i++){j=i;for(g=0;g<d;g++)j>=0&&j<b&&(function(c,b,d,e){var q=p[c][b];setTimeout(function(){m?q.css({opacity:"1",width:q.data("base").width,height:q.data("base").height}):q.animate({opacity:"1",width:q.data("base").width,height:q.data("base").height},a.duration,function(){e==a.slices.length-1&&f(this).trigger("transitionend")})},100+
d)}(g,j,l,e,c.length),e++),j--;l+=100}}else this.next.css({"z-index":"2",left:0,top:0}).show(),this.current.hide(),this.fx=null},boxesRtl:function(){this.boxes.apply(this)},kenburns:function(){var a=this,b=this.next.find("img:first"),c=a.options.kenburns_animation_duration||a.options.interval*2;if(b.length)if(u){b.stop(false,true).data("width")&&b.css({width:b.data("width"),height:b.data("height")});this.slides.not(this.current).not(this.next).hide();this.current.css({"z-index":1});this.next.css({"z-index":2,
visibility:"hidden",opacity:1}).show();this.next.find("canvas").remove();b.position();var d=b.width(),e=b.height(),h=[{start:["t-r",1],stop:["b-l",1.2]},{start:["c-r",1.2],stop:["c-l",1]},{start:["b-l",1],stop:["t-r",1.2]},{start:["c-c",1.2],stop:["c-c",1]},{start:["t-c",1],stop:["b-c",1.2]},{start:["b-r",1],stop:["t-l",1.2]},{start:["c-l",1],stop:["c-r",1.2]},{start:["t-l",1.2],stop:["b-r",1]},{start:["c-c",1],stop:["c-c",1.2]},{start:["b-c",1.2],stop:["t-c",1]}],j=h[this.kbi?this.kbi:0],g=f("<canvas></canvas>").attr({width:d,
height:e}).css({width:d,height:e,opacity:0}),i=function(a,c){var c=c||1,b={top:0,left:0,width:d*c,height:e*c};switch(a){case "t-l":b.top=b.left=0;break;case "t-c":b.top=0;b.left=-1*((b.width-d)/2);break;case "t-r":b.top=0;b.left=-1*(b.width-d);break;case "c-l":b.top=-1*((b.height-e)/2);b.left=0;break;case "c-c":b.top=-1*((b.height-e)/2);b.left=-1*((b.width-d)/2);break;case "c-r":b.top=-1*((b.height-e)/2);b.left=-1*(b.width-d);break;case "b-l":b.top=-1*(b.height-e);b.left=0;break;case "b-c":b.top=
-1*(b.height-e);b.left=-1*((b.width-d)/2);break;case "b-r":b.top=-1*(b.height-e),b.left=-1*(b.width-d)}return b};b.css({position:"absolute","image-rendering":"optimizeQuality","-ms-interpolation-mode":"bicubic"}).after(g).hide();var o=g.get(0).getContext("2d");this.next.css({visibility:"visible"});g.animate({opacity:1},a.duration);var k=false,p=false,m=false,n=false;b.css(i.apply(this,j.start)).animate(i.apply(this,j.stop),{step:function(a,c){k!==false&&p!==false&&m!==false&&n!==false&&(o.drawImage(b.get(0),
k,p,m,n),n=m=p=k=false);c.prop=="width"&&(m=a);c.prop=="height"&&(n=a);c.prop=="left"&&(k=a);c.prop=="top"&&(p=a)},complete:function(){g.remove();f(this).data({width:d,height:e}).show();a.fx=null},easing:"swing",duration:c});a.kbi=h[a.kbi+1]?a.kbi+1:0}else this.fade(this);else this.next.css({"z-index":"2",left:0,top:0}).show(),this.current.hide(),this.fx=null}});f.fn._reverse=[].reverse;var x=function(a){for(var b,c,d=a.length;d;b=parseInt(Math.random()*d),c=a[--d],a[d]=a[b],a[b]=c);return a},s=function(a,
b,c){b=b||0;c=c||0;a.slicer=f("<li />").addClass("slices").css({top:b,left:c,position:"absolute",width:a.wrapper.width(),height:a.ul.height(),"z-index":3}).hide().appendTo(a.ul)};f.fn[h.prototype.name]=function(){var a=arguments,b=a[0]?a[0]:null;return this.each(function(){var c=f(this);if(h.prototype[b]&&c.data(h.prototype.name)&&b!="initialize")c.data(h.prototype.name)[b].apply(c.data(h.prototype.name),Array.prototype.slice.call(a,1));else if(!b||f.isPlainObject(b)){var d=new h;h.prototype.initialize&&
d.initialize.apply(d,f.merge([c],a));c.data(h.prototype.name,d)}else f.error("Method "+b+" does not exist on jQuery."+h.name)})}})(jQuery);
