window.Modernizr=function(t,e,I){function D(b,c){for(var x in b){var k=b[x];if(!~(""+k).indexOf("-")&&L[k]!==I)return"pfx"==c?k:!0}return!1}function u(b,c,x){var k=b.charAt(0).toUpperCase()+b.slice(1),e=(b+" "+J.join(k+" ")+k).split(" ");if("string"===typeof c||"undefined"===typeof c)c=D(e,c);else a:{e=(b+" "+v.join(k+" ")+k).split(" "),b=e;for(var f in b)if(k=c[b[f]],k!==I){c=!1===x?b[f]:"function"===typeof k?k.bind(x||c):k;break a}c=!1}return c}var f={},r=e.documentElement,l=e.createElement("modernizr"),
L=l.style,M=" -webkit- -moz- -o- -ms- ".split(" "),J=["Webkit","Moz","O","ms"],v=["webkit","moz","o","ms"];l={};var y=[],w=y.slice,z,E=function(b,c,f,k){var x,n,l,m=e.createElement("div"),p=e.body,a=p||e.createElement("body");if(parseInt(f,10))for(;f--;){var q=e.createElement("div");q.id=k?k[f]:"modernizr"+(f+1);m.appendChild(q)}return x=['&#173;<style id="smodernizr">',b,"</style>"].join(""),m.id="modernizr",(p?m:a).innerHTML+=x,a.appendChild(m),p||(a.style.background="",a.style.overflow="hidden",
l=r.style.overflow,r.style.overflow="hidden",r.appendChild(a)),n=c(m,b),p?m.parentNode.removeChild(m):(a.parentNode.removeChild(a),r.style.overflow=l),!!n},A={}.hasOwnProperty,F;"undefined"===typeof A||"undefined"===typeof A.call?F=function(b,c){return c in b&&"undefined"===typeof b.constructor.prototype[c]}:F=function(b,c){return A.call(b,c)};Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if("function"!=typeof c)throw new TypeError;var f=w.call(arguments,1),e=function(){if(this instanceof
e){var k=function(){};k.prototype=c.prototype;k=new k;var l=c.apply(k,f.concat(w.call(arguments)));return Object(l)===l?l:k}return c.apply(b,f.concat(w.call(arguments)))};return e});l.touch=function(){var b;return"ontouchstart"in t||t.DocumentTouch&&e instanceof DocumentTouch?b=!0:E(["@media (",M.join("touch-enabled),("),"modernizr){#modernizr{top:9px;position:absolute}}"].join(""),function(c){b=9===c.offsetTop}),b};l.csstransforms=function(){return!!u("transform")};l.csstransitions=function(){return u("transition")};
for(var H in l)F(l,H)&&(z=H.toLowerCase(),f[z]=l[H](),y.push((f[z]?"":"no-")+z));f.addTest=function(b,c){if("object"==typeof b)for(var e in b)F(b,e)&&f.addTest(e,b[e]);else{b=b.toLowerCase();if(f[b]!==I)return f;c="function"==typeof c?c():c;r.className+=" "+(c?"":"no-")+b;f[b]=c}return f};L.cssText="";return l=null,function(b,c){function e(){var g=h.elements;return"string"==typeof g?g.split(" "):g}function f(g){var d=P[g[K]];return d||(d={},G++,g[K]=G,P[G]=d),d}function l(g,d,B){d||(d=c);if(C)return d.createElement(g);
B||(B=f(d));var b;return B.cache[g]?b=B.cache[g].cloneNode():a.test(g)?b=(B.cache[g]=B.createElem(g)).cloneNode():b=B.createElem(g),b.canHaveChildren&&!p.test(g)?B.frag.appendChild(b):b}function n(g,d){d.cache||(d.cache={},d.createElem=g.createElement,d.createFrag=g.createDocumentFragment,d.frag=d.createFrag());g.createElement=function(a){return h.shivMethods?l(a,g,d):d.createElem(a)};g.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+
e().join().replace(/\w+/g,function(g){return d.createElem(g),d.frag.createElement(g),'c("'+g+'")'})+");return n}")(h,d.frag)}function r(g){g||(g=c);var d=f(g);if(h.shivCSS&&!q&&!d.hasCSS){var a=g;var b=a.createElement("p");a=a.getElementsByTagName("head")[0]||a.documentElement;b=(b.innerHTML="x<style>article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}</style>",a.insertBefore(b.lastChild,a.firstChild));d.hasCSS=!!b}return C||n(g,d),g}var m=
b.html5||{},p=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,a=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,q,K="_html5shiv",G=0,P={},C;(function(){try{var a=c.createElement("a");a.innerHTML="<xyz></xyz>";q="hidden"in a;var d;if(!(d=1==a.childNodes.length)){c.createElement("a");var b=c.createDocumentFragment();d="undefined"==typeof b.cloneNode||"undefined"==typeof b.createDocumentFragment||"undefined"==typeof b.createElement}C=
d}catch(Q){C=q=!0}})();var h={elements:m.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:!1!==m.shivCSS,supportsUnknownElements:C,shivMethods:!1!==m.shivMethods,type:"default",shivDocument:r,createElement:l,createDocumentFragment:function(a,d){a||(a=c);if(C)return a.createDocumentFragment();d=d||f(a);a=d.frag.cloneNode();d=0;for(var b=e(),g=b.length;d<g;d++)a.createElement(b[d]);
return a}};b.html5=h;r(c)}(this,e),f._version="2.6.2",f._prefixes=M,f._domPrefixes=v,f._cssomPrefixes=J,f.testProp=function(b){return D([b])},f.testAllProps=u,f.testStyles=E,f.prefixed=function(b,c,f){return c?u(b,c,f):u(b,"pfx")},r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(" js "+y.join(" ")),f}(this,this.document);
(function(t,e,I){function D(a){return"[object Function]"==z.call(a)}function u(a){return"string"==typeof a}function f(){}function r(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function l(){var a=E.shift();A=1;a?a.t?y(function(){("c"==a.t?p.injectCss:p.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),l()):A=0}function L(a,c,f,k,m,C,h){function g(g){if(!q&&r(d.readyState)&&(K.r=q=1,!A&&l(),d.onload=d.onreadystatechange=null,g)){"img"!=a&&y(function(){b.removeChild(d)},50);for(var f in n[c])n[c].hasOwnProperty(f)&&
n[c][f].onload()}}h=h||p.errorTimeout;var d=e.createElement(a),q=0,G=0,K={t:f,s:c,e:m,a:C,x:h};1===n[c]&&(G=1,n[c]=[]);"object"==a?d.data=c:(d.src=c,d.type=a);d.width=d.height="0";d.onerror=d.onload=d.onreadystatechange=function(){g.call(this,G)};E.splice(k,0,K);"img"!=a&&(G||2===n[c]?(b.insertBefore(d,H?null:w),y(g,h)):n[c].push(d))}function M(a,b,f,e,k){return A=0,b=b||"j",u(a)?L("c"==b?x:c,a,b,this.i++,f,e,k):(E.splice(this.i++,0,a),1==E.length&&l()),this}function J(){var a=p;return a.loader={load:M,
i:0},a}var v=e.documentElement,y=t.setTimeout,w=e.getElementsByTagName("script")[0],z={}.toString,E=[],A=0,F="MozAppearance"in v.style,H=F&&!!e.createRange().compareNode,b=H?v:w.parentNode;v=t.opera&&"[object Opera]"==z.call(t.opera);v=!!e.attachEvent&&!v;var c=F?"object":v?"script":"img",x=v?"script":c,k=Array.isArray||function(a){return"[object Array]"==z.call(a)},N=[],n={},O={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},m;var p=function(a){function b(a){a=a.split("!");var b=N.length,
c=a.pop(),g=a.length;c={url:c,origUrl:c,prefixes:a};var f,e;for(e=0;e<g;e++){var h=a[e].split("=");(f=O[h.shift()])&&(c=f(c,h))}for(e=0;e<b;e++)c=N[e](c);return c}function c(a,c,e,f,h){var d=b(a),g=d.autoCallback;d.url.split(".").pop().split("?").shift();d.bypass||(c&&(c=D(c)?c:c[a]||c[f]||c[a.split("/").pop().split("?")[0]]),d.instead?d.instead(a,c,e,f,h):(n[d.url]?d.noexec=!0:n[d.url]=1,e.load(d.url,d.forceCSS||!d.forceJS&&"css"==d.url.split(".").pop().split("?").shift()?"c":I,d.noexec,d.attrs,
d.timeout),(D(c)||D(g))&&e.load(function(){J();c&&c(d.origUrl,h,f);g&&g(d.origUrl,h,f);n[d.url]=2})))}function e(a,d){function b(a,b){if(a)if(u(a))b||(h=function(){var a=[].slice.call(arguments);l.apply(this,a);k()}),c(a,h,d,0,e);else{if(Object(a)===a)for(q in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(q)&&(!b&&!--m&&(D(h)?h=function(){var a=[].slice.call(arguments);l.apply(this,a);k()}:h[q]=function(a){return function(){var b=[].slice.call(arguments);
a&&a.apply(this,b);k()}}(l[q])),c(a[q],h,d,q,e))}else!b&&k()}var e=!!a.test,g=a.load||a.both,h=a.callback||f,l=h,k=a.complete||f,m,q;b(e?a.yep:a.nope,!!g);g&&b(g)}var l,m=this.yepnope.loader;if(u(a))c(a,0,m,0);else if(k(a))for(l=0;l<a.length;l++){var h=a[l];u(h)?c(h,0,m,0):k(h)?p(h):Object(h)===h&&e(h,m)}else Object(a)===a&&e(a,m)};p.addPrefix=function(a,b){O[a]=b};p.addFilter=function(a){N.push(a)};p.errorTimeout=1E4;null==e.readyState&&e.addEventListener&&(e.readyState="loading",e.addEventListener("DOMContentLoaded",
m=function(){e.removeEventListener("DOMContentLoaded",m,0);e.readyState="complete"},0));t.yepnope=J();t.yepnope.executeStack=l;t.yepnope.injectJs=function(a,b,c,k,m,n){var h=e.createElement("script"),g,d;k=k||p.errorTimeout;h.src=a;for(d in c)h.setAttribute(d,c[d]);b=n?l:b||f;h.onreadystatechange=h.onload=function(){!g&&r(h.readyState)&&(g=1,b(),h.onload=h.onreadystatechange=null)};y(function(){g||(g=1,b(1))},k);m?h.onload():w.parentNode.insertBefore(h,w)};t.yepnope.injectCss=function(a,b,c,k,m,n){k=
e.createElement("link");var h;b=n?l:b||f;k.href=a;k.rel="stylesheet";k.type="text/css";for(h in c)k.setAttribute(h,c[h]);m||(w.parentNode.insertBefore(k,w),y(b,0))}})(this,document);Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};
