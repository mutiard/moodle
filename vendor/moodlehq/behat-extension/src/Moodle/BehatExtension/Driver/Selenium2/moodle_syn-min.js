/**
 * Syn - 0.0.2
 * 
 * @copyright 2014 Bitovi
 * Wed, 26 Feb 2014 08:30:25 GMT
 * @license MIT
 */
!function(window){var __m2=function(){var a,b,c,d=window.Syn?window.Syn:{},e=function(a,b){var c;for(c in b)a[c]=b[c];return a},f={msie:!(!window.attachEvent||window.opera),opera:!!window.opera,webkit:navigator.userAgent.indexOf("AppleWebKit/")>-1,safari:navigator.userAgent.indexOf("AppleWebKit/")>-1&&-1===navigator.userAgent.indexOf("Chrome/"),gecko:navigator.userAgent.indexOf("Gecko")>-1,mobilesafari:!!navigator.userAgent.match(/Apple.*Mobile.*Safari/),rhino:navigator.userAgent.match(/Rhino/)&&!0},g=function(a,b,c){var d=c.ownerDocument.createEventObject();return e(d,b)},h={},i=1,j="_synthetic"+(new Date).getTime(),k=/keypress|keyup|keydown/,l=/load|unload|abort|error|select|change|submit|reset|focus|blur|resize|scroll/,m=function(a,b,c,d){return new m.init(a,b,c,d)};m.config=d,a=function(a,b,c){return a.addEventListener?a.addEventListener(b,c,!1):a.attachEvent("on"+b,c)},b=function(a,b,c){return a.addEventListener?a.removeEventListener(b,c,!1):a.detachEvent("on"+b,c)},e(m,{init:function(a,b,c,d){var e=m.args(b,c,d),f=this;this.queue=[],this.element=e.element,"function"==typeof this[a]?this[a](e.options,e.element,function(){e.callback&&e.callback.apply(f,arguments),f.done.apply(f,arguments)}):(this.result=m.trigger(a,e.options,e.element),e.callback&&e.callback.call(this,e.element,this.result))},jquery:function(a){return window.FuncUnit&&window.FuncUnit.jQuery?window.FuncUnit.jQuery:a?m.helpers.getWindow(a).jQuery||window.jQuery:window.jQuery},args:function(){for(var a={},b=0;b<arguments.length;b++)"function"==typeof arguments[b]?a.callback=arguments[b]:arguments[b]&&arguments[b].jquery?a.element=arguments[b][0]:arguments[b]&&arguments[b].nodeName?a.element=arguments[b]:a.options&&"string"==typeof arguments[b]?a.element=document.getElementById(arguments[b]):arguments[b]&&(a.options=arguments[b]);return a},click:function(a,b,c){m("click!",a,b,c)},defaults:{focus:function(){if(!m.support.focusChanges){var c=this,d=c.nodeName.toLowerCase();m.data(c,"syntheticvalue",c.value),("input"===d||"textarea"===d)&&a(c,"blur",function(){m.data(c,"syntheticvalue")!=c.value&&m.trigger("change",{},c),b(c,"blur",arguments.callee)})}},submit:function(){m.onParents(this,function(a){return"form"===a.nodeName.toLowerCase()?(a.submit(),!1):void 0})}},changeOnBlur:function(c,d,e){a(c,"blur",function(){e!==c[d]&&m.trigger("change",{},c),b(c,"blur",arguments.callee)})},closest:function(a,b){for(;a&&a.nodeName.toLowerCase()!==b.toLowerCase();)a=a.parentNode;return a},data:function(a,b,c){var d;return a[j]||(a[j]=i++),h[a[j]]||(h[a[j]]={}),d=h[a[j]],c?void(h[a[j]][b]=c):h[a[j]][b]},onParents:function(a,b){for(var c;a&&c!==!1;)c=b(a),a=a.parentNode;return a},focusable:/^(a|area|frame|iframe|label|input|select|textarea|button|html|object)$/i,isFocusable:function(a){var b;return a.getAttributeNode&&(b=a.getAttributeNode("tabIndex")),this.focusable.test(a.nodeName)||b&&b.specified&&m.isVisible(a)},isVisible:function(a){return a.offsetWidth&&a.offsetHeight||a.clientWidth&&a.clientHeight},tabIndex:function(a){var b=a.getAttributeNode("tabIndex");return b&&b.specified&&(parseInt(a.getAttribute("tabIndex"))||0)},bind:a,unbind:b,browser:f,helpers:{createEventObject:g,createBasicStandardEvent:function(a,b,c){var d;try{d=c.createEvent("Events")}catch(f){d=c.createEvent("UIEvents")}finally{d.initEvent(a,!0,!0),e(d,b)}return d},inArray:function(a,b){for(var c=0;c<b.length;c++)if(b[c]===a)return c;return-1},getWindow:function(a){return a.ownerDocument?a.ownerDocument.defaultView||a.ownerDocument.parentWindow:void 0},extend:e,scrollOffset:function(a,b){var c=a.document.documentElement,d=a.document.body;return b?void window.scrollTo(b.left,b.top):{left:(c&&c.scrollLeft||d&&d.scrollLeft||0)+(c.clientLeft||0),top:(c&&c.scrollTop||d&&d.scrollTop||0)+(c.clientTop||0)}},scrollDimensions:function(a){var b=a.document.documentElement,c=a.document.body,d=b.clientWidth,e=b.clientHeight,f="CSS1Compat"===a.document.compatMode;return{height:f&&e||c.clientHeight||e,width:f&&d||c.clientWidth||d}},addOffset:function(a,b){var c,d=m.jquery(b);"object"==typeof a&&void 0===a.clientX&&void 0===a.clientY&&void 0===a.pageX&&void 0===a.pageY&&d&&(b=d(b),c=b.offset(),a.pageX=c.left+b.width()/2,a.pageY=c.top+b.height()/2)}},key:{ctrlKey:null,altKey:null,shiftKey:null,metaKey:null},dispatch:function(c,d,e,f){if(d.dispatchEvent&&c){var g=c.preventDefault,h=f?-1:0;return f&&a(d,e,function(a){a.preventDefault(),b(this,e,arguments.callee)}),c.preventDefault=function(){h++,++h>0&&g.apply(this,[])},d.dispatchEvent(c),0>=h}try{window.event=c}catch(i){}return d.sourceIndex<=0||d.fireEvent&&d.fireEvent("on"+e,c)},create:{page:{event:function(a,b,c){var d,e=m.helpers.getWindow(c).document||document;if(e.createEvent)return d=e.createEvent("Events"),d.initEvent(a,!0,!0),d;try{d=g(a,b,c)}catch(f){}return d}},focus:{event:function(a,b,d){return m.onParents(d,function(a){if(m.isFocusable(a)){if("html"!==a.nodeName.toLowerCase())a.focus(),c=a;else if(c){var b=m.helpers.getWindow(d).document;if(b!==window.document)return!1;b.activeElement?(b.activeElement.blur(),c=null):(c.blur(),c=null)}return!1}}),!0}}},support:{clickChanges:!1,clickSubmits:!1,keypressSubmits:!1,mouseupSubmits:!1,radioClickChanges:!1,focusChanges:!1,linkHrefJS:!1,keyCharacters:!1,backspaceWorks:!1,mouseDownUpClicks:!1,tabKeyTabs:!1,keypressOnAnchorClicks:!1,optionClickBubbles:!1,ready:0},trigger:function(a,b,c){b||(b={});var d,e,f,g=m.create,h=g[a]&&g[a].setup,i=k.test(a)?"key":l.test(a)?"page":"mouse",j=g[a]||{},n=g[i],o=c;return 2===m.support.ready&&h&&h(a,b,c),f=b._autoPrevent,delete b._autoPrevent,j.event?e=j.event(a,b,c):(b=n.options?n.options(a,b,c):b,!m.support.changeBubbles&&/option/i.test(c.nodeName)&&(o=c.parentNode),d=n.event(a,b,o),e=m.dispatch(d,o,a,f)),e&&2===m.support.ready&&m.defaults[a]&&m.defaults[a].call(c,b,f),e},eventSupported:function(a){var b=document.createElement("div");a="on"+a;var c=a in b;return c||(b.setAttribute(a,"return;"),c="function"==typeof b[a]),b=null,c}}),e(m.init.prototype,{then:function(a,b,c,d){m.autoDelay&&this.delay();var e=m.args(b,c,d),f=this;return this.queue.unshift(function(b){return"function"!=typeof this[a]?(this.result=m.trigger(a,e.options,e.element),e.callback&&e.callback.call(this,e.element,this.result),this):(this.element=e.element||b,void this[a](e.options,this.element,function(){e.callback&&e.callback.apply(f,arguments),f.done.apply(f,arguments)}))}),this},delay:function(a,b){"function"==typeof a&&(b=a,a=null),a=a||600;var c=this;return this.queue.unshift(function(){setTimeout(function(){b&&b.apply(c,[]),c.done.apply(c,arguments)},a)}),this},done:function(a,b){b&&(this.element=b),this.queue.length&&this.queue.pop().call(this,this.element,a)},_click:function(a,b,c,d){m.helpers.addOffset(a,b),m.trigger("mousedown",a,b),setTimeout(function(){m.trigger("mouseup",a,b),!m.support.mouseDownUpClicks||d?(m.trigger("click",a,b),c(!0)):(m.create.click.setup("click",a,b),m.defaults.click.call(b),setTimeout(function(){c(!0)},1))},1)},_rightClick:function(a,b,c){m.helpers.addOffset(a,b);var d=e(e({},m.mouse.browser.right.mouseup),a);m.trigger("mousedown",d,b),setTimeout(function(){m.trigger("mouseup",d,b),m.mouse.browser.right.contextmenu&&m.trigger("contextmenu",e(e({},m.mouse.browser.right.contextmenu),a),b),c(!0)},1)},_dblclick:function(a,b,c){m.helpers.addOffset(a,b);var d=this;this._click(a,b,function(){setTimeout(function(){d._click(a,b,function(){m.trigger("dblclick",a,b),c(!0)},!0)},2)})}});for(var n=["click","dblclick","move","drag","key","type","rightClick"],o=function(a){m[a]=function(b,c,d){return m("_"+a,b,c,d)},m.init.prototype[a]=function(b,c,d){return this.then("_"+a,b,c,d)}},p=0;p<n.length;p++)o(n[p]);return m}(),__m3=function(Syn){var h=Syn.helpers,getWin=h.getWindow;return Syn.mouse={},h.extend(Syn.defaults,{mousedown:function(){Syn.trigger("focus",{},this)},click:function(){var element=this,href,type,radioChanged,nodeName,scope;try{href=element.href,type=element.type,createChange=Syn.data(element,"createChange"),radioChanged=Syn.data(element,"radioChanged"),scope=getWin(element),nodeName=element.nodeName.toLowerCase()}catch(e){return}if(!Syn.support.linkHrefJS&&/^\s*javascript:/.test(href)){var code=href.replace(/^\s*javascript:/,"");"//"!=code&&-1==code.indexOf("void(0)")&&eval(window.selenium?"with(selenium.browserbot.getCurrentWindow()){"+code+"}":"with(scope){"+code+"}")}if(!Syn.support.clickSubmits&&"input"==nodeName&&"submit"==type||"button"==nodeName){var form=Syn.closest(element,"form");form&&Syn.trigger("submit",{},form)}"a"==nodeName&&element.href&&!/^\s*javascript:/.test(href)&&(scope.location.href=href),"input"==nodeName&&"checkbox"==type&&(Syn.support.clickChanges||Syn.trigger("change",{},element)),"input"==nodeName&&"radio"==type&&radioChanged&&!Syn.support.radioClickChanges&&Syn.trigger("change",{},element),"option"==nodeName&&createChange&&(Syn.trigger("change",{},element.parentNode),Syn.data(element,"createChange",!1))}}),h.extend(Syn.create,{mouse:{options:function(a,b){var c=document.documentElement,d=document.body,e=[b.pageX||0,b.pageY||0],f=Syn.mouse.browser&&Syn.mouse.browser.left[a],g=Syn.mouse.browser&&Syn.mouse.browser.right[a];return h.extend({bubbles:!0,cancelable:!0,view:window,detail:1,screenX:1,screenY:1,clientX:b.clientX||e[0]-(c&&c.scrollLeft||d&&d.scrollLeft||0)-(c.clientLeft||0),clientY:b.clientY||e[1]-(c&&c.scrollTop||d&&d.scrollTop||0)-(c.clientTop||0),ctrlKey:!!Syn.key.ctrlKey,altKey:!!Syn.key.altKey,shiftKey:!!Syn.key.shiftKey,metaKey:!!Syn.key.metaKey,button:f&&null!=f.button?f.button:g&&g.button||("contextmenu"==a?2:0),relatedTarget:document.documentElement},b)},event:function(a,b,c){var d=getWin(c).document||document;if(d.createEvent){var e;try{e=d.createEvent("MouseEvents"),e.initMouseEvent(a,b.bubbles,b.cancelable,b.view,b.detail,b.screenX,b.screenY,b.clientX,b.clientY,b.ctrlKey,b.altKey,b.shiftKey,b.metaKey,b.button,b.relatedTarget)}catch(f){e=h.createBasicStandardEvent(a,b,d)}return e.synthetic=!0,e}var e;try{e=h.createEventObject(a,b,c)}catch(f){}return e}},click:{setup:function(a,b,c){var a,d=c.nodeName.toLowerCase();if(!Syn.support.clickChecks&&!Syn.support.changeChecks&&"input"===d&&(a=c.type.toLowerCase(),"checkbox"===a&&(c.checked=!c.checked),"radio"===a&&!c.checked)){try{Syn.data(c,"radioChanged",!0)}catch(e){}c.checked=!0}if("a"==d&&c.href&&!/^\s*javascript:/.test(c.href)&&Syn.data(c,"href",c.href),/option/i.test(c.nodeName)){for(var f=c.parentNode.firstChild,g=-1;f&&(1!=f.nodeType||(g++,f!=c));)f=f.nextSibling;g!==c.parentNode.selectedIndex&&(c.parentNode.selectedIndex=g,Syn.data(c,"createChange",!0))}}},mousedown:{setup:function(a,b,c){var d=c.nodeName.toLowerCase();!Syn.browser.safari||"select"!=d&&"option"!=d||(b._autoPrevent=!0)}}}),function(){if(!document.body)return void setTimeout(arguments.callee,1);window.linkHrefJS=Syn.support.linkHrefJS,window.synSupportLinkHrefJSTest=function(){linkHrefJS=!0};var a,b,c,d,e=document.createElement("div");e.innerHTML="<form id='outer'><input name='checkbox' type='checkbox'/><input name='radio' type='radio' /><input type='submit' name='submitter'/><input type='input' name='inputter'/><input name='one'><input name='two'/><a href='javascript:synSupportLinkHrefJSTest()' id='synlink'></a><select><option></option></select></form>",document.documentElement.appendChild(e),c=e.firstChild,a=c.childNodes[0],b=c.childNodes[2],d=c.getElementsByTagName("select")[0],Syn.trigger("click",{},c.childNodes[6]),a.checked=!1,a.onchange=function(){Syn.support.clickChanges=!0},Syn.trigger("click",{},a),Syn.support.clickChecks=a.checked,a.checked=!1,Syn.trigger("change",{},a),Syn.support.changeChecks=a.checked,c.onsubmit=function(a){return a.preventDefault&&a.preventDefault(),Syn.support.clickSubmits=!0,!1},Syn.trigger("click",{},b),c.childNodes[1].onchange=function(){Syn.support.radioClickChanges=!0},Syn.trigger("click",{},c.childNodes[1]),Syn.bind(e,"click",function(){Syn.support.optionClickBubbles=!0,Syn.unbind(e,"click",arguments.callee)}),Syn.trigger("click",{},d.firstChild),Syn.support.changeBubbles=Syn.eventSupported("change");e.onclick=function(){Syn.support.mouseDownUpClicks=!0},Syn.trigger("mousedown",{},e),Syn.trigger("mouseup",{},e),document.documentElement.removeChild(e),Syn.support.ready++}(),Syn}(__m2),__m4=function(a){return a.key.browsers={webkit:{prevent:{keyup:[],keydown:["char","keypress"],keypress:["char"]},character:{keydown:[0,"key"],keypress:["char","char"],keyup:[0,"key"]},specialChars:{keydown:[0,"char"],keyup:[0,"char"]},navigation:{keydown:[0,"key"],keyup:[0,"key"]},special:{keydown:[0,"key"],keyup:[0,"key"]},tab:{keydown:[0,"char"],keyup:[0,"char"]},"pause-break":{keydown:[0,"key"],keyup:[0,"key"]},caps:{keydown:[0,"key"],keyup:[0,"key"]},escape:{keydown:[0,"key"],keyup:[0,"key"]},"num-lock":{keydown:[0,"key"],keyup:[0,"key"]},"scroll-lock":{keydown:[0,"key"],keyup:[0,"key"]},print:{keyup:[0,"key"]},"function":{keydown:[0,"key"],keyup:[0,"key"]},"\r":{keydown:[0,"key"],keypress:["char","key"],keyup:[0,"key"]}},gecko:{prevent:{keyup:[],keydown:["char"],keypress:["char"]},character:{keydown:[0,"key"],keypress:["char",0],keyup:[0,"key"]},specialChars:{keydown:[0,"key"],keypress:[0,"key"],keyup:[0,"key"]},navigation:{keydown:[0,"key"],keypress:[0,"key"],keyup:[0,"key"]},special:{keydown:[0,"key"],keyup:[0,"key"]},"	":{keydown:[0,"key"],keypress:[0,"key"],keyup:[0,"key"]},"pause-break":{keydown:[0,"key"],keypress:[0,"key"],keyup:[0,"key"]},caps:{keydown:[0,"key"],keyup:[0,"key"]},escape:{keydown:[0,"key"],keypress:[0,"key"],keyup:[0,"key"]},"num-lock":{keydown:[0,"key"],keyup:[0,"key"]},"scroll-lock":{keydown:[0,"key"],keyup:[0,"key"]},print:{keyup:[0,"key"]},"function":{keydown:[0,"key"],keyup:[0,"key"]},"\r":{keydown:[0,"key"],keypress:[0,"key"],keyup:[0,"key"]}},msie:{prevent:{keyup:[],keydown:["char","keypress"],keypress:["char"]},character:{keydown:[null,"key"],keypress:[null,"char"],keyup:[null,"key"]},specialChars:{keydown:[null,"char"],keyup:[null,"char"]},navigation:{keydown:[null,"key"],keyup:[null,"key"]},special:{keydown:[null,"key"],keyup:[null,"key"]},tab:{keydown:[null,"char"],keyup:[null,"char"]},"pause-break":{keydown:[null,"key"],keyup:[null,"key"]},caps:{keydown:[null,"key"],keyup:[null,"key"]},escape:{keydown:[null,"key"],keypress:[null,"key"],keyup:[null,"key"]},"num-lock":{keydown:[null,"key"],keyup:[null,"key"]},"scroll-lock":{keydown:[null,"key"],keyup:[null,"key"]},print:{keyup:[null,"key"]},"function":{keydown:[null,"key"],keyup:[null,"key"]},"\r":{keydown:[null,"key"],keypress:[null,"key"],keyup:[null,"key"]}},opera:{prevent:{keyup:[],keydown:[],keypress:["char"]},character:{keydown:[null,"key"],keypress:[null,"char"],keyup:[null,"key"]},specialChars:{keydown:[null,"char"],keypress:[null,"char"],keyup:[null,"char"]},navigation:{keydown:[null,"key"],keypress:[null,"key"]},special:{keydown:[null,"key"],keypress:[null,"key"],keyup:[null,"key"]},tab:{keydown:[null,"char"],keypress:[null,"char"],keyup:[null,"char"]},"pause-break":{keydown:[null,"key"],keypress:[null,"key"],keyup:[null,"key"]},caps:{keydown:[null,"key"],keyup:[null,"key"]},escape:{keydown:[null,"key"],keypress:[null,"key"]},"num-lock":{keyup:[null,"key"],keydown:[null,"key"],keypress:[null,"key"]},"scroll-lock":{keydown:[null,"key"],keypress:[null,"key"],keyup:[null,"key"]},print:{},"function":{keydown:[null,"key"],keypress:[null,"key"],keyup:[null,"key"]},"\r":{keydown:[null,"key"],keypress:[null,"key"],keyup:[null,"key"]}}},a.mouse.browsers={webkit:{right:{mousedown:{button:2,which:3},mouseup:{button:2,which:3},contextmenu:{button:2,which:3}},left:{mousedown:{button:0,which:1},mouseup:{button:0,which:1},click:{button:0,which:1}}},opera:{right:{mousedown:{button:2,which:3},mouseup:{button:2,which:3}},left:{mousedown:{button:0,which:1},mouseup:{button:0,which:1},click:{button:0,which:1}}},msie:{right:{mousedown:{button:2},mouseup:{button:2},contextmenu:{button:0}},left:{mousedown:{button:1},mouseup:{button:1},click:{button:0}}},chrome:{right:{mousedown:{button:2,which:3},mouseup:{button:2,which:3},contextmenu:{button:2,which:3}},left:{mousedown:{button:0,which:1},mouseup:{button:0,which:1},click:{button:0,which:1}}},gecko:{left:{mousedown:{button:0,which:1},mouseup:{button:0,which:1},click:{button:0,which:1}},right:{mousedown:{button:2,which:3},mouseup:{button:2,which:3},contextmenu:{button:2,which:3}}}},a.key.browser=function(){if(a.key.browsers[window.navigator.userAgent])return a.key.browsers[window.navigator.userAgent];for(var b in a.browser)if(a.browser[b]&&a.key.browsers[b])return a.key.browsers[b];return a.key.browsers.gecko}(),a.mouse.browser=function(){if(a.mouse.browsers[window.navigator.userAgent])return a.mouse.browsers[window.navigator.userAgent];for(var b in a.browser)if(a.browser[b]&&a.mouse.browsers[b])return a.mouse.browsers[b];return a.mouse.browsers.gecko}(),a}(__m2,__m3),__m6=function(a){var b=[];a.typeable=function(a){-1==b.indexOf(a)&&b.push(a)},a.typeable.test=function(a){for(var c=0,d=b.length;d>c;c++)if(b[c](a))return!0;return!1};var c=a.typeable,d=/input|textarea/i;return c(function(a){return d.test(a.nodeName)}),c(function(a){return-1!=["","true"].indexOf(a.getAttribute("contenteditable"))}),a}(__m2),__m5=function(a){var b=a.helpers,c=function(a){if(void 0!==a.selectionStart)return document.activeElement&&document.activeElement!=a&&a.selectionStart==a.selectionEnd&&0==a.selectionStart?{start:a.value.length,end:a.value.length}:{start:a.selectionStart,end:a.selectionEnd};try{if("input"==a.nodeName.toLowerCase()){var c=b.getWindow(a).document.selection.createRange(),d=a.createTextRange();d.setEndPoint("EndToStart",c);var f=d.text.length;return{start:f,end:f+c.text.length}}var c=b.getWindow(a).document.selection.createRange(),d=c.duplicate(),g=c.duplicate(),h=c.duplicate();g.collapse(),h.collapse(!1),g.moveStart("character",-1),h.moveStart("character",-1),d.moveToElementText(a),d.setEndPoint("EndToEnd",c);var f=d.text.length-c.text.length,i=d.text.length;return 0!=f&&""==g.text&&(f+=2),0!=i&&""==h.text&&(i+=2),{start:f,end:i}}catch(j){var k=e.test(a.nodeName)?"value":"textContent";return{start:a[k].length,end:a[k].length}}},d=function(c){for(var d=b.getWindow(c).document,e=[],f=d.getElementsByTagName("*"),g=f.length,h=0;g>h;h++)a.isFocusable(f[h])&&f[h]!=d.documentElement&&e.push(f[h]);return e},e=/input|textarea/i,f=function(a){return e.test(a.nodeName)?a.value:a.textContent||a.innerText},g=function(a,b){e.test(a.nodeName)?a.value=b:a.textContent?a.textContent=b:a.innerText=b};b.extend(a,{keycodes:{"\b":8,"	":9,"\r":13,shift:16,ctrl:17,alt:18,"pause-break":19,caps:20,escape:27,"num-lock":144,"scroll-lock":145,print:44,"page-up":33,"page-down":34,end:35,home:36,left:37,up:38,right:39,down:40,insert:45,"delete":46," ":32,0:48,1:49,2:50,3:51,4:52,5:53,6:54,7:55,8:56,9:57,a:65,b:66,c:67,d:68,e:69,f:70,g:71,h:72,i:73,j:74,k:75,l:76,m:77,n:78,o:79,p:80,q:81,r:82,s:83,t:84,u:85,v:86,w:87,x:88,y:89,z:90,num0:96,num1:97,num2:98,num3:99,num4:100,num5:101,num6:102,num7:103,num8:104,num9:105,"*":106,"+":107,subtract:109,decimal:110,divide:111,";":186,"=":187,",":188,dash:189,"-":189,period:190,".":190,"forward-slash":191,"/":191,"`":192,"[":219,"\\":220,"]":221,"'":222,"left window key":91,"right window key":92,"select key":93,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},selectText:function(a,b,c){if(a.setSelectionRange)c?(a.selectionStart=b,a.selectionEnd=c):(a.focus(),a.setSelectionRange(b,b));else if(a.createTextRange){var d=a.createTextRange();d.moveStart("character",b),c=c||b,d.moveEnd("character",c-a.value.length),d.select()}},getText:function(b){if(a.typeable.test(b)){var d=c(b);return b.value.substring(d.start,d.end)}var e=a.helpers.getWindow(b);return e.getSelection?e.getSelection().toString():e.document.getSelection?e.document.getSelection().toString():e.document.selection.createRange().text},getSelection:c}),b.extend(a.key,{data:function(c){if(a.key.browser[c])return a.key.browser[c];for(var d in a.key.kinds)if(b.inArray(c,a.key.kinds[d])>-1)return a.key.browser[d];return a.key.browser.character},isSpecial:function(b){for(var c=a.key.kinds.special,d=0;d<c.length;d++)if(a.keycodes[c[d]]==b)return c[d]},options:function(b,c){var d=a.key.data(b);if(!d[c])return null;var e=d[c][0],f=d[c][1],g={};return g.keyCode="key"==f?a.keycodes[b]:"char"==f?b.charCodeAt(0):f,"char"==e?g.charCode=b.charCodeAt(0):null!==e&&(g.charCode=e),g.which=g.keyCode?g.keyCode:g.charCode,g},kinds:{special:["shift","ctrl","alt","caps"],specialChars:["\b"],navigation:["page-up","page-down","end","home","left","up","right","down","insert","delete"],"function":["f1","f2","f3","f4","f5","f6","f7","f8","f9","f10","f11","f12"]},getDefault:function(c){if(a.key.defaults[c])return a.key.defaults[c];for(var d in a.key.kinds)if(b.inArray(c,a.key.kinds[d])>-1&&a.key.defaults[d])return a.key.defaults[d];return a.key.defaults.character},defaults:{character:function(b,c,d,e,h){if(/num\d+/.test(d)&&(d=d.match(/\d+/)[0]),e||!a.support.keyCharacters&&a.typeable.test(this)){var i=f(this),j=i.substr(0,h.start),k=i.substr(h.end),l=d;g(this,j+l+k);var m="\n"==l&&a.support.textareaCarriage?2:l.length;a.selectText(this,j.length+m)}},c:function(){a.key.ctrlKey?a.key.clipboard=a.getText(this):a.key.defaults.character.apply(this,arguments)},v:function(b,c,d,e,f){a.key.ctrlKey?a.key.defaults.character.call(this,b,c,a.key.clipboard,!0,f):a.key.defaults.character.apply(this,arguments)},a:function(){a.key.ctrlKey?a.selectText(this,0,f(this).length):a.key.defaults.character.apply(this,arguments)},home:function(){a.onParents(this,function(a){return a.scrollHeight!=a.clientHeight?(a.scrollTop=0,!1):void 0})},end:function(){a.onParents(this,function(a){return a.scrollHeight!=a.clientHeight?(a.scrollTop=a.scrollHeight,!1):void 0})},"page-down":function(){a.onParents(this,function(a){if(a.scrollHeight!=a.clientHeight){var b=a.clientHeight;return a.scrollTop+=b,!1}})},"page-up":function(){a.onParents(this,function(a){if(a.scrollHeight!=a.clientHeight){var b=a.clientHeight;return a.scrollTop-=b,!1}})},"\b":function(b,c,d,e,h){if(!a.support.backspaceWorks&&a.typeable.test(this)){var i=f(this),j=i.substr(0,h.start),k=i.substr(h.end);h.start==h.end&&h.start>0?(g(this,j.substring(0,j.length-1)+k),a.selectText(this,h.start-1)):(g(this,j+k),a.selectText(this,h.start))}},"delete":function(b,c,d,e,h){if(!a.support.backspaceWorks&&a.typeable.test(this)){var i=f(this),j=i.substr(0,h.start),k=i.substr(h.end);h.start==h.end&&h.start<=f(this).length-1?g(this,j+k.substring(1)):g(this,j+k),a.selectText(this,h.start)}},"\r":function(b,c,d,e,f){var g=this.nodeName.toLowerCase();if("input"==g&&a.trigger("change",{},this),!a.support.keypressSubmits&&"input"==g){var h=a.closest(this,"form");h&&a.trigger("submit",{},h)}a.support.keyCharacters||"textarea"!=g||a.key.defaults.character.call(this,b,c,"\n",void 0,f),a.support.keypressOnAnchorClicks||"a"!=g||a.trigger("click",{},this)},"	":function(){var b,c,e=d(this),f=(a.tabIndex(this),null),g=0;for(orders=[];g<e.length;g++)orders.push([e[g],g]);var h=function(b,c){var d=b[0],e=c[0],f=a.tabIndex(d)||0,g=a.tabIndex(e)||0;return f==g?b[1]-c[1]:0==f?1:0==g?-1:f-g};for(orders.sort(h),g=0;g<orders.length;g++)b=orders[g][0],this==b&&(a.key.shiftKey?(f=orders[g-1][0],f||(f=orders[e.length-1][0])):(f=orders[g+1][0],f||(f=orders[0][0])));return f||(f=c),f&&f.focus(),f},left:function(b,c,d,e,f){a.typeable.test(this)&&(a.key.shiftKey?a.selectText(this,0==f.start?0:f.start-1,f.end):a.selectText(this,0==f.start?0:f.start-1))},right:function(b,c,d,e,g){a.typeable.test(this)&&(a.key.shiftKey?a.selectText(this,g.start,g.end+1>f(this).length?f(this).length:g.end+1):a.selectText(this,g.end+1>f(this).length?f(this).length:g.end+1))},up:function(){/select/i.test(this.nodeName)&&(this.selectedIndex=this.selectedIndex?this.selectedIndex-1:0)},down:function(){/select/i.test(this.nodeName)&&(a.changeOnBlur(this,"selectedIndex",this.selectedIndex),this.selectedIndex=this.selectedIndex+1)},shift:function(){return null},ctrl:function(){return null}}}),b.extend(a.create,{keydown:{setup:function(c,d,e){-1!=b.inArray(d,a.key.kinds.special)&&(a.key[d+"Key"]=e)}},keypress:{setup:function(b,c,d){a.support.keyCharacters&&!a.support.keysOnNotFocused&&d.focus()}},keyup:{setup:function(c,d){-1!=b.inArray(d,a.key.kinds.special)&&(a.key[d+"Key"]=null)}},key:{options:function(c,d){return d="object"!=typeof d?{character:d}:d,d=b.extend({},d),d.character&&(b.extend(d,a.key.options(d.character,c)),delete d.character),d=b.extend({ctrlKey:!!a.key.ctrlKey,altKey:!!a.key.altKey,shiftKey:!!a.key.shiftKey,metaKey:!!a.key.metaKey},d)},event:function(a,c,d){var e=b.getWindow(d).document||document;if(e.createEvent){var f;try{f=e.createEvent("KeyEvents"),f.initKeyEvent(a,!0,!0,window,c.ctrlKey,c.altKey,c.shiftKey,c.metaKey,c.keyCode,c.charCode)}catch(g){f=b.createBasicStandardEvent(a,c,e)}return f.synthetic=!0,f}var f;try{f=b.createEventObject.apply(this,arguments),b.extend(f,c)}catch(g){}return f}}});var h={enter:"\r",backspace:"\b",tab:"	",space:" "};return b.extend(a.init.prototype,{_key:function(d,e,f){if(/-up$/.test(d)&&-1!=b.inArray(d.replace("-up",""),a.key.kinds.special))return a.trigger("keyup",d.replace("-up",""),e),void f(!0,e);var g,i=b.getWindow(e).document.activeElement,j=a.typeable.test(e)&&c(e),k=h[d]||d,l=a.trigger("keydown",k,e),m=a.key.getDefault,n=a.key.browser.prevent,o=a.key.options(k,"keypress");return l?o?(i!==b.getWindow(e).document.activeElement&&(e=b.getWindow(e).document.activeElement),l=a.trigger("keypress",o,e),l&&(g=m(k).call(e,o,b.getWindow(e),k,void 0,j))):g=m(k).call(e,o,b.getWindow(e),k,void 0,j):o&&-1==b.inArray("keypress",n.keydown)&&(i!==b.getWindow(e).document.activeElement&&(e=b.getWindow(e).document.activeElement),a.trigger("keypress",o,e)),g&&g.nodeName&&(e=g),null!==g?setTimeout(function(){a.support.oninput&&a.trigger("input",a.key.options(k,"input"),e),a.trigger("keyup",a.key.options(k,"keyup"),e),f(l,e)},1):f(l,e),e},_type:function(a,b,c){var d=(a+"").match(/(\[[^\]]+\])|([^\[])/g),e=this,f=function(a,g){var h=d.shift();return h?(g=g||b,h.length>1&&(h=h.substr(1,h.length-2)),void e._key(h,g,f)):void c(a,g)};f()}}),a.config.support?a.helpers.extend(a.support,a.config.support):!function(){if(!document.body)return void setTimeout(arguments.callee,1);var b,c,d,e,f,g,h,i=[window.scrollX,window.scrollY],j=window.document.activeElement,k=document.createElement("div");k.innerHTML="<form id='outer'><input name='checkbox' type='checkbox'/><input name='radio' type='radio' /><input type='submit' name='submitter'/><input type='input' name='inputter'/><input name='one'><input name='two'/><a href='#abc'></a><textarea>1\n2</textarea></form>",document.documentElement.appendChild(k),d=k.firstChild,b=d.childNodes[0],c=d.childNodes[2],e=d.getElementsByTagName("a")[0],f=d.getElementsByTagName("textarea")[0],g=d.childNodes[3],h=d.childNodes[4],d.onsubmit=function(b){return b.preventDefault&&b.preventDefault(),a.support.keypressSubmits=!0,b.returnValue=!1,!1},g.focus(),a.trigger("keypress","\r",g),a.trigger("keypress","a",g),a.support.keyCharacters="a"==g.value,g.value="a",a.trigger("keypress","\b",g),a.support.backspaceWorks=""==g.value,g.onchange=function(){a.support.focusChanges=!0},g.focus(),a.trigger("keypress","a",g),d.childNodes[5].focus(),a.trigger("keypress","b",g),a.support.keysOnNotFocused="ab"==g.value,a.bind(e,"click",function(b){return b.preventDefault&&b.preventDefault(),a.support.keypressOnAnchorClicks=!0,b.returnValue=!1,!1}),a.trigger("keypress","\r",e),a.support.textareaCarriage=4==f.value.length,a.support.oninput="oninput"in h,document.documentElement.removeChild(k),j&&j.focus(),window.scrollTo(i[0],i[1]),a.support.ready++}(),a}(__m2,__m6,__m4),__m7=function(a){!function(){if(!document.body)return void setTimeout(arguments.callee,1);var b=document.createElement("div");if(document.body.appendChild(b),a.helpers.extend(b.style,{width:"100px",height:"10000px",backgroundColor:"blue",position:"absolute",top:"10px",left:"0px",zIndex:19999}),document.body.scrollTop=11,document.elementFromPoint){var c=document.elementFromPoint(3,1);c==b?a.support.elementFromClient=!0:a.support.elementFromPage=!0,document.body.removeChild(b),document.body.scrollTop=0}}();var b=function(b,c){var d,e=b.clientX,f=b.clientY,g=a.helpers.getWindow(c);if(a.support.elementFromPage){var h=a.helpers.scrollOffset(g);e+=h.left,f+=h.top}return d=g.document.elementFromPoint?g.document.elementFromPoint(e,f):c,d===g.document.documentElement&&(b.clientY<0||b.clientX<0)?c:d},c=function(c,d,e){var f=b(d,e);return a.trigger(c,d,f||e),f},d=function(c,d,e){var f=b(c,d);if(e!=f&&f&&e){var g=a.helpers.extend({},c);g.relatedTarget=f,a.trigger("mouseout",g,e),g.relatedTarget=e,a.trigger("mouseover",g,f)}return a.trigger("mousemove",c,f||d),f},e=function(c,e,f,g,h){var i=new Date,j=e.clientX-c.clientX,k=e.clientY-c.clientY,l=a.helpers.getWindow(g),m=b(c,g),n=l.document.createElement("div"),o=0;move=function(){var b=new Date,p=a.helpers.scrollOffset(l),q=(0==o?0:b-i)/f,r={clientX:j*q+c.clientX,clientY:k*q+c.clientY};o++,1>q?(a.helpers.extend(n.style,{left:r.clientX+p.left+2+"px",top:r.clientY+p.top+2+"px"}),m=d(r,g,m),setTimeout(arguments.callee,15)):(m=d(e,g,m),l.document.body.removeChild(n),h())},a.helpers.extend(n.style,{height:"5px",width:"5px",backgroundColor:"red",position:"absolute",zIndex:19999,fontSize:"1px"}),l.document.body.appendChild(n),move()},f=function(a,b,d,f,g){c("mousedown",a,f),e(a,b,d,f,function(){c("mouseup",b,f),g()})},g=function(b){var c=a.jquery()(b),d=c.offset();return{pageX:d.left+c.outerWidth()/2,pageY:d.top+c.outerHeight()/2}},h=function(b,c,d){var e=/(\d+)[x ](\d+)/,f=/(\d+)X(\d+)/,h=/([+-]\d+)[xX ]([+-]\d+)/;if("string"==typeof b&&h.test(b)&&d){var i=g(d),j=b.match(h);b={pageX:i.pageX+parseInt(j[1]),pageY:i.pageY+parseInt(j[2])}}if("string"==typeof b&&e.test(b)){var j=b.match(e);b={pageX:parseInt(j[1]),pageY:parseInt(j[2])}}if("string"==typeof b&&f.test(b)){var j=b.match(f);b={clientX:parseInt(j[1]),clientY:parseInt(j[2])}}if("string"==typeof b&&(b=a.jquery()(b,c.document)[0]),b.nodeName&&(b=g(b)),b.pageX){var k=a.helpers.scrollOffset(c);b={clientX:b.pageX-k.left,clientY:b.pageY-k.top}}return b},i=function(b,c,d){if(b.clientY<0){var e=a.helpers.scrollOffset(d),f=(a.helpers.scrollDimensions(d),e.top+b.clientY-100),g=f-e.top;f>0||(f=0,g=-e.top),b.clientY=b.clientY-g,c.clientY=c.clientY-g,a.helpers.scrollOffset(d,{top:f,left:e.left})}};return a.helpers.extend(a.init.prototype,{_move:function(b,c,d){var f=a.helpers.getWindow(c),g=h(b.from||c,f,c),j=h(b.to||b,f,c);b.adjust!==!1&&i(g,j,f),e(g,j,b.duration||500,c,d)},_drag:function(b,c,d){var e=a.helpers.getWindow(c),g=h(b.from||c,e,c),j=h(b.to||b,e,c);b.adjust!==!1&&i(g,j,e),f(g,j,b.duration||500,c,d)}}),a}(__m2),__m1=function(a){return window.Syn=a,a}(__m2,__m3,__m4,__m5,__m7)}(window);