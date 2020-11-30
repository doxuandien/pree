

<!DOCTYPE html>
<html lang="vi">

<head>
    

    <meta charset="utf-8">
<meta http-equiv="x-dns-prefetch-control" content="on">
<link rel="dns-prefetch" href="//vcdn.dantri.com.vn"/>
<link rel="dns-prefetch" href="//icdn.dantri.com.vn"/>
<link rel="dns-prefetch" href="//cdnweb.dantri.com.vn"/>
<link rel="dns-prefetch" href="//cdndulich.dantri.com.vn"/>
<link rel="dns-prefetch" href="//cdnduhoc.dantri.com.vn"/>
<link rel="dns-prefetch" href="//cdnmobile.dantri.com.vn"/>
<link rel="dns-prefetch" href="//webapi.dantri.com.vn"/>
<link rel="dns-prefetch" href="//captcha.dantri.com.vn"/>
<link rel="dns-prefetch" href="//comment.dantri.com.vn"/>

<link rel="dns-prefetch" href="//fonts.googleapis.com"/>
<link rel="dns-prefetch" href="//cdn.jwplayer.com"/>
<link rel="dns-prefetch" href="//www.googletagmanager.com"/>
<link rel="dns-prefetch" href="//media1.admicro.vn"/>
<link rel="dns-prefetch" href="//logsbin.dantri.com.vn"/>
<link rel="dns-prefetch" href="//www.google-analytics.com"/>
<link rel="dns-prefetch" href="//www.googletagmanager.com"/>

    <script>
    window.wDataLayer = {"platform":"web","page_type":"home","item_id":null,"cate_id":null,"tags":[],"cate_name":"","cate_list":null,"sub_cates":null,"isBlockedAds":0,"label":"Web","author_id":null,"published_date":null};
</script>
    <script>
    window.DONGLOGS_WAITDOCREADY=0,function(e,t){var o,n;"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):(e=e||self,o=e.Cookies,(n=e.Cookies=t()).noConflict=function(){return e.Cookies=o,n})}(this,function(){"use strict";function a(e){for(var t=1;t<arguments.length;t++){var o=arguments[t];for(var n in o)e[n]=o[n]}return e}var w={read:function(e){return e.replace(/%3B/g,";")},write:function(e){return e.replace(/;/g,"%3B")}};return function t(s,i){function o(e,t,o){if("undefined"!=typeof document){"number"==typeof(o=a({},i,o)).expires&&(o.expires=new Date(Date.now()+864e5*o.expires)),o.expires&&(o.expires=o.expires.toUTCString()),e=w.write(e).replace(/=/g,"%3D"),t=s.write(String(t),e);var n="";for(var r in o)o[r]&&(n+="; "+r,!0!==o[r]&&(n+="="+o[r].split(";")[0]));return document.cookie=e+"="+t+n}}return Object.create({set:o,get:function(e){if("undefined"!=typeof document&&(!arguments.length||e)){for(var t=document.cookie?document.cookie.split("; "):[],o={},n=0;n<t.length;n++){var r=t[n].split("="),i=r.slice(1).join("="),a=w.read(r[0]).replace(/%3D/g,"=");if(o[a]=s.read(i,a),e===a)break}return e?o[e]:o}},remove:function(e,t){o(e,"",a({},t,{expires:-1}))},withAttributes:function(e){return t(this.converter,a({},this.attributes,e))},withConverter:function(e){return t(a({},this.converter,e),this.attributes)}},{attributes:{value:Object.freeze(i)},converter:{value:Object.freeze(s)}})}(w,{path:"/"})}),window.webLog=window.webLog||{},function(r){var i=r.aff=r.aff||{};i._params="_waff_params",i._items="_waff_items",i.init=function(){try{var e=document.location.search;if(!e||-1===e.indexOf("aff_id"))return;for(var t={},o=new URLSearchParams(document.location.search).entries(),n={done:!1};!n.done;)(n=o.next()).value&&(t[n.value[0]]=n.value[1]);i._affParams=t,r.store.setItem(i._params,t)}catch(e){}},i.convert=function(){var e=i._affParams||r.store.getItem(i._params);if(!e)return"affParams not found";var t=i._affParams||JSON.parse(e);if(!t.aff_id)return"aff_id not found";var o=i._cartItems||r.store.getItem(i._items);return o?(t.cart_items=i._cartItems||JSON.parse(o),t.cart_items.constructor!==Array?"cartItems is invalid []":(t.event="Conversion",t.moment=(new Date).toISOString(),t.host=document.location.host,t.uuid=r.services.default.getId(),t.session_id=r.services.default.getSessionId(),t.user_agent=r.client.userAgent,r.http.postJson(i.POSTBACK,t,function(){i._affParams=null,i._cartItems=null,r.store.setItem(i._params,""),r.store.setItem(i._items,""),console.log("Conversion posted.")}),console.log("Postback",t),!0)):"cartItems not found"}}(window.webLog),window.webLog=window.webLog||{},window.webLog.client={},function(e){e.userAgent=(navigator.userAgent||navigator.vendor||window.opera||"").substr(0,250),e.browser=function(){var e=!!window.chrome&&!!window.chrome.webstore;if(e)return"Chrome";if("undefined"!=typeof InstallTrigger)return"Firefox";if(/constructor/i.test(window.HTMLElement)||"[object SafariRemoteNotification]"===(!window.safari||void 0!==window.safari&&window.safari.pushNotification).toString())return"Safari";var t=!!document.documentMode;if(t)return"IE";var o=!!window.opr&&!!window.opr.addons||!!window.opera||0<=navigator.userAgent.indexOf(" OPR/");return o?"Opera":!t&&window.StyleMedia||!(!e&&!o||!window.CSS)}(),e.os=function(){var e=navigator.userAgent||navigator.vendor||window.opera;if(/windows phone/i.test(e))return"Windows Phone";if(/android/i.test(e))return"Android";return!/iPad|iPhone|iPod/.test(e)||window.MSStream?"unknown":"iOS"}(),e.newId=function(e){var t,o,n="";for(e=e||32,t=0;t<e;t++)o=16*Math.random()|0,8!==t&&12!==t&&16!==t&&20!==t||(n+="-"),n+=(12===t?4:16===t?3&o|8:o).toString(16);return n},e.validId=function(e){return e&&36===e.length&&e.match(/^[a-z0-9]{8}-[a-z0-9]{4}-[a-z0-9]{4}-[a-z0-9]{4}-[a-z0-9]{12}$/)}}(window.webLog.client),window.webLog=window.webLog||{},function(e){"use strict";e=e||window;var o=[],n=!1,r=!1;function i(){if(!n){n=!0;for(var e=0;e<o.length;e++)o[e].fn.call(window,o[e].ctx);o=[]}}function a(){"complete"===document.readyState&&i()}e.ondocReady=function(e,t){if("function"!=typeof e)throw new TypeError("callback for docReady(fn) must be a function");n?setTimeout(function(){e(t)},1):(o.push({fn:e,ctx:t}),"complete"===document.readyState||!document.attachEvent&&"interactive"===document.readyState?setTimeout(i,1):r||(document.addEventListener?(document.addEventListener("DOMContentLoaded",i,!1),window.addEventListener("load",i,!1)):(document.attachEvent("onreadystatechange",a),window.attachEvent("onload",i)),r=!0))}}(window.webLog),window.webLog=window.webLog||{},window.webLog.dom={},function(e){e.harvest=function(e,o,n){var t=document.querySelectorAll(e);if(!t.length)return null;var r={};return o.forEach(function(e){r[e]=[]}),t.forEach(function(t){o.forEach(function(e){t.hasAttribute(e)?r[e].push(t.getAttribute(e)):n&&r[e].push(null)})}),r},e.scrolledTo=function(e){var t=window.$;if(t){var o=t(window).scrollTop(),n=o+t(window).height();try{var r=t(e).offset().top,i=r+t(e).height()}catch(e){return}return i<=n&&o<=r&&r}}}(window.webLog.dom),window.webLog=window.webLog||{},window.webLog.http={},function(e){e.postJson=function(e,t,o){var n=new XMLHttpRequest;n.open("POST",e,!0),n.setRequestHeader("Content-Type","application/json; charset=utf-8"),n.timeout=3e3,n.onreadystatechange=function(){4===n.readyState&&"function"==typeof o&&o(n.status,n.responseText)},n.send(JSON.stringify(t))}}(window.webLog.http),window.webLog=window.webLog||{},function(r){r.inspectlet=function(o,e){var t=Math.round(e/30),n=r.store.getItem("__insp");(n||(n=Math.floor(Math.random()*t+1).toString(),r.store.setItem("__insp",n)))&&"456"===n&&(window.__insp=window.__insp||[],window.__insp.push(["wid",o]),window.__insp.push(["identify",r.services.default.getId()]),setTimeout(function(){var e,t;void 0===window.__inspld&&(window.__inspld=1,(e=document.createElement("script")).type="text/javascript",e.async=!0,e.id="inspsync",e.src=("https:"===document.location.protocol?"https":"http")+"://cdn.inspectlet.com/inspectlet.js?wid="+o+"&r="+Math.floor((new Date).getTime()/36e5),(t=document.getElementsByTagName("script")[0]).parentNode.insertBefore(e,t))},0))}}(window.webLog),window.webLog=window.webLog||{},window.webLog.store={},function(e){e.method="cookie",e.getItem=function(e){var t=window.Cookies,o="."+window.COOKIE_DOMAIN;try{var n=window.localStorage.getItem(e)||t.get(e)||void 0}catch(e){}return n&&t.set(e,n,{domain:o}),n},e.setItem=function(e,t){var o=window.Cookies,n="."+window.COOKIE_DOMAIN;try{return o.set(e,t,{domain:n})}catch(e){return}},e.session={getItem:function(e){try{return window.sessionStorage.getItem(e)}catch(e){return}},setItem:function(e,t){try{return window.sessionStorage.setItem(e,t),e}catch(e){return}}}}(window.webLog.store),window.webLog=window.webLog||{},function(i){var a="//rec.donglogs.com/heatmap",t=[];function o(e){var t,o,n;null==(e=e||window.event).pageX&&null!=e.clientX&&(o=(t=e.target&&e.target.ownerDocument||document).documentElement,n=t.body,e.pageX=e.clientX+(o&&o.scrollLeft||n&&n.scrollLeft||0)-(o&&o.clientLeft||n&&n.clientLeft||0),e.pageY=e.clientY+(o&&o.scrollTop||n&&n.scrollTop||0)-(o&&o.clientTop||n&&n.clientTop||0))}function n(e,t,o,n){var r={event:e,moment:(new Date).toISOString(),url:document.location.href,uuid:i.services.default.getId(),width:window.innerWidth,height:window.innerHeight,page_y:Math.floor(window.pageYOffset),click_x:t,click_y:o,move_coords:n,abtest:i._abtest||null};i.http.postJson(a,r)}window.TRACK_HEAT&&(document.onmousemove=function(e){o(e),t.push([e.pageX,e.pageY]),9<t.length&&(n("Move",null,null,JSON.stringify(t)),t=[])},document.onclick=function(e){o(e),n("Click",e.pageX,e.pageY,null)})}(window.webLog),window.webLog=window.webLog||{},window.webLog.services=window.webLog.services||{},function(e){var t,o,n="default",r="__wuid",i="__wssid",a=e.store,s=e.http,w=e.client;function c(e,t){var o,n=typeof e;if(null==e||"string"==n)o=e;else if("object"==n)o=t?e:e instanceof Array?JSON.stringify(e.map(function(e){return c(e,1)})):JSON.stringify(e);else try{o=e.toString()}catch(e){o=void 0}return o}function d(){return o||((o=a.session.getItem(i))||(o=w.newId(6),a.session.setItem(i,o)),o)}function u(e){if(!e)return{};var t=document.createElement("a");return t.href=e,t}function f(){return t||((t=a.getItem(r))||(e=(window.location.hash||"").toLowerCase(),(t=w.validId(e)?e:null)&&void 0!==a.method&&a.setItem(r,t),t&&void 0===a.method&&window.WEBLOG_ALLOW_URL_HASH_WUID),t||(t=w.newId(),void 0!==a.method?a.setItem(r,t):window.WEBLOG_ALLOW_URL_HASH_WUID,t));var e}e.services[n]={enabled:!0,loaded:function(){return"string"==typeof window.WEBLOG_API_DEFAULT&&"object"==typeof e.store&&window.WEBLOG_API_DEFAULT.length},getId:f,getSessionId:d,identify:function(e,t,o){return"to-do"},track:function(e,t,o,n){var r=function(e,t){var o={};o.event=e,o.moment=(new Date).toISOString(),o.platform=window.WEBLOG_PLATFORM,o.log_ver=window.WEBLOG_VERSION,o.uuid=f(),o.session_id=d(),o.user_agent=w.userAgent,o.browser=w.browser,o.storage=a.method,o.protocol=window.location.protocol,o.host=window.location.host,o.pathname=window.location.pathname,o.search=window.location.search,o.hash=window.location.hash,o.referrer=document.referrer.substr(0,250),o.ref_host=u(o.referrer).host,function(e){var t=a.session.getItem("_sessionRef"),o=a.session.getItem("_sessionRefHost");t||(t=document.referrer.substr(0,250),o=u(t).host,t||(o=t="Direct"),a.session.setItem("_sessionRef",t),a.session.setItem("_sessionRefHost",o));e.session_referrer=t,e.session_ref_host=o}(o);var n,r=a.getItem("fcm_token");r&&(o.fcm_token=r);if("object"==typeof window.wDataLayer)for(n in window.wDataLayer)o[n]=c(window.wDataLayer[n]);if(t&&"object"==typeof t)for(n in t)o[n]=c(t[n]);else o.label=c(t);return o}(e,t);return o="function"==typeof o?(n=o,window.WEBLOG_API_DEFAULT):o||window.WEBLOG_API_DEFAULT,s.postJson(o,r,n),r},trackJSErr:function(e,t,o,n,r){var i={event:"JSErr"};i.moment=(new Date).toISOString(),i.uuid=f(),i.session_id=d(),i.user_agent=w.userAgent,i.browser=w.browser,i.storage=a.method,i.protocol=window.location.protocol,i.host=window.location.host,i.pathname=window.location.pathname,i.search=window.location.search,i.hash=window.location.hash,i.referrer=document.referrer.substr(0,250),i.message=e||null,i.source=t||null,i.lineno=o||null,i.colno=n||null,i.error=(r||"").toString(),s.postJson("//logsbin.dantri.com.vn/rec/dantri_com_vn_error",i)}},e._track=e.services[n].track}(window.webLog),window.webLog=window.webLog||{},window.webLog.services=window.webLog.services||{},window.webLog,window.webLog=window.webLog||{},function(s){var o=[];s.track=function(t,r,i){var a="function"==typeof i;try{window.webLog.preTracking&&window.webLog.preTracking[window.WEBLOG_PLATFORM][t]()}catch(e){}(function(){if(o.length)return o;for(var e in s.services)o.push(e);return o})().forEach(function(o){var n,e=s.services[o];e&&e.enabled&&e.loaded()?n=e.track(t,r,function(e,t){a&&i(o,n,e,t)}):a&&i(o,null,null,null)})}}(window.webLog),window.WEBLOG_API_DEFAULT="//logsbin.dantri.com.vn/rec/dantri_com_vn",window.WEBLOG_ALLOW_URL_HASH_WUID=!1,window.WEBLOG_PLATFORM=window.WEBLOG_PLATFORM||"web",window.COOKIE_DOMAIN=window.COOKIE_DOMAIN||"dantri.com.vn",window.WEBLOG_VERSION="0.0.98",window.WEBLOG_TIMESTAMP=Date.now(),function(t){function e(){var e=(document.title||"").substr(0,250);t.track("Pageview",{title:e},t.tracked)}0===window.DONGLOGS_WAITDOCREADY?e():t.ondocReady(e)}(window.webLog);/**2020-07-24T05:02:50.662Z**/
    </script>

    


<meta name="robots" content="index,follow,all"> 
<title>Tin tức Việt Nam và quốc tế nóng, nhanh, cập nhật 24h | Báo Dân trí</title>
<meta name="description" content="Đọc báo dantri - Tin tức mới nhất, Thông tin nhanh chính xác được cập nhật hàng giờ. báo nói đọc tin tức online Việt Nam Thế giới nóng nhất trong ngày, Kinh doanh Việc làm, Pháp luật Đời sống, Giáo dục Sức khỏe, Thể thao Giải trí, Công nghệ, Văn hóa Xã hội, Ôtô Xe máy, Tình yêu, Nhân ái, Bạn đọc" />
<meta name="keywords" content="dantri,báo điện tử dantri,thời tiết,tin tức,tin nhanh,thể thao,dự báo thời tiết,tin the thao,thể thao 24h,giá vàng hôm nay,tin the gioi,đọc báo,tin moi,giá vàng,thời tiết hôm nay,tin tức online,bóng đá việt nam,pháp luật,dự báo thời tiết hôm nay,tin tức 24 giờ,tin nong,thời tiết hà nội,lịch thi đấu bóng đá hôm nay,thời sự,an ninh,tin tức trong ngày" />
<meta name="title" content="Tin tức Việt Nam và quốc tế nóng, nhanh, cập nhật 24h | Báo Dân trí" />


<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />

<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-title" content="dantri.com.vn" />

<meta name="copyright" content="dantri.com.vn" />
<meta name="author" content="dantri.com.vn" />


<!-- Schema.org markup for Google+ -->
<meta name="google-site-verification" content="W60o5FIiNTC4qM0e14lVCrmQOH7MDm2jy50E3fvvTHs">
<meta itemprop="name" content="Tin tức Việt Nam và quốc tế nóng, nhanh, cập nhật 24h | Báo Dân trí">
<meta itemprop="image" content="https://icdn.dantri.com.vn/zoom/1200_630/2020/11/29/boc-mat-duong-le-van-luong-29-11-20209-1606618946653.jpg">
<!-- Twitter Card data -->
<meta name="twitter:card" content="article">
<meta name="twitter:site" content="Báo điện tử Dân Trí">
<meta name="twitter:title" content="Tin tức Việt Nam và quốc tế nóng, nhanh, cập nhật 24h | Báo Dân trí">
<meta name="twitter:description" content="Đọc báo dantri - Tin tức mới nhất, Thông tin nhanh chính xác được cập nhật hàng giờ. báo nói đọc tin tức online Việt Nam Thế giới nóng nhất trong ngày, Kinh doanh Việc làm, Pháp luật Đời sống, Giáo dục Sức khỏe, Thể thao Giải trí, Công nghệ, Văn hóa Xã hội, Ôtô Xe máy, Tình yêu, Nhân ái, Bạn đọc">
<meta name="twitter:creator" content="dantri.com.vn">
<meta name="twitter:image" content="https://icdn.dantri.com.vn/zoom/1200_630/2020/11/29/boc-mat-duong-le-van-luong-29-11-20209-1606618946653.jpg">
<!-- Open Graph data -->
<meta property="og:type" content="article" />
<meta property="og:site_name" content="Báo điện tử Dân Trí" />
<meta property="og:title" content="Tin tức Việt Nam và quốc tế nóng, nhanh, cập nhật 24h | Báo Dân trí" />
<meta property="og:url" content="https://dantri.com.vn/" />
<meta property="og:image" content="http://icdn.dantri.com.vn/zoom/1200_630/2020/11/29/boc-mat-duong-le-van-luong-29-11-20209-1606618946653.jpg" />
<meta property="og:description" content="Đọc báo dantri - Tin tức mới nhất, Thông tin nhanh chính xác được cập nhật hàng giờ. báo nói đọc tin tức online Việt Nam Thế giới nóng nhất trong ngày, Kinh doanh Việc làm, Pháp luật Đời sống, Giáo dục Sức khỏe, Thể thao Giải trí, Công nghệ, Văn hóa Xã hội, Ôtô Xe máy, Tình yêu, Nhân ái, Bạn đọc" />
<meta property="og:locale" content="vi_VN" />
<meta name="format-detection" content="telephone=no">
<meta name="thumbnail" content="https://icdn.dantri.com.vn/2020/11/29/boc-mat-duong-le-van-luong-29-11-20209-1606618946653.jpg" />    


<meta property="og:image:secure_url" content="https://icdn.dantri.com.vn/zoom/1200_630/2020/11/29/boc-mat-duong-le-van-luong-29-11-20209-1606618946653.jpg" />


<meta property="fb:app_id" content="164035690775918">

<meta name="resource-type" content="Document">
<meta name="distribution" content="Global">
<meta property="fb:pages" content="345033318906366">
<meta property="article:author" content="https://www.facebook.com/baodantridientu">
<meta property="article:publisher" content="https://www.facebook.com/baodantridientu">
<link href="/favicon.ico" type="image/x-icon" rel="shortcut icon" />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="audience" content="General">
    <meta http-equiv="content-language" content="vi" />
    <meta name="revisit-after" content="1 days">
        <link rel="canonical" href="https://dantri.com.vn/" />

    
  <link type="text/css" rel="stylesheet" href="https://cdnweb.dantri.com.vn/bundle/static/dantri.min.css?_=f1ce08bf" data-href="/bundle/static/dantri.min.css?_=f1ce08bf">
      
    
    
    

    
    <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PM6G9ZN');</script>
    <!-- End Google Tag Manager -->
      <link href="https://amp.dantri.com.vn/" rel="amphtml"/>
          <meta http-equiv="refresh" content="600">
    

</head>
<body class="homev2  dtv2 " data-isrc="homev2" xds-provider="">






<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PM6G9ZN"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->




<header class="dt-header">
  

    <div class="dt-header___content">
      <div class="container">
        <h1 class="dt-header__logo">
          <a title="Báo điện tử Dân trí - Tin tức cập nhật liên tục 24/7" href="/">
            <img src="https://cdnweb.dantri.com.vn/bundle/static/assets/logo_dantri.png?v=1128183128" alt="Báo điện tử Dân trí - Tin tức cập nhật liên tục 24/7">
          </a>
        </h1>
                    <div id="xds-2" ></div>

        <form method="GET" action="/tim-kiem.htm" class="search-box">
          <input id="js-search-input" type="text" class="form-control search-box__input" name="s" placeholder="Tìm kiếm tin tức" autocomplete="off">
          <button class="btn search-box__btn" type="submit">
            <i class="dt-icon icon-search"></i>
          </button>
        </form>
        
        
      </div>
    </div>
    <nav class="site-menu">
    <div class="container">
        <ol class="site-menu__list list-unstyled">
            <li class="home">
                <a title="Trang chủ" href="/">
                    <i class="dt-icon icon-home"></i>
                </a>
            </li>
                            <li class="dropdown dropdown--hover">
                                        
                    <a data-utm="Home|MenuMain|1" data-cat-id="0" class="" href="/video-page.htm">Video</a>
                                    </li>
                <li class="dropdown dropdown--hover">
                                        
                    <a data-utm="Home|MenuMain|2" data-cat-id="728" class="" title="Tin tức sự kiện nóng mới nhất, cập nhật liên tục" href="/su-kien.htm">Sự kiện</a>
                                    </li>
                <li class="dropdown dropdown--hover">
                                        
                    <a data-utm="Home|MenuMain|3" data-cat-id="20" class="" title="Xã hội  - Tin tức đa dạng về xã hội, gia đình, du lịch, mẹo vặt cuộc sống" href="/xa-hoi.htm">Xã hội</a>
                                            <div class="dropdown__content">
                            <ol class="site-menu__dropdown site-menu__dropdown--single">
                                    <li>
                                        <a data-utm="Home|MenuCate|1" title="Đại hội Đảng" href="/xa-hoi/dai-hoi-dang.htm">Đại hội Đảng</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|2" title="Chính trị" href="/xa-hoi/chinh-tri.htm">Chính trị</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|3" title="Phóng sự-Ký sự" href="/xa-hoi/phong-su-ky-su.htm">Phóng sự-Ký sự</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|4" title="Giao thông" href="/xa-hoi/giao-thong.htm">Giao thông</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|5" title="Môi trường" href="/xa-hoi/moi-truong.htm">Môi trường</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|6" title="Hồ sơ" href="/xa-hoi/ho-so.htm">Hồ sơ</a>
                                    </li>
                            </ol>
                        </div>
                </li>
                <li class="dropdown dropdown--hover">
                                        
                    <a data-utm="Home|MenuMain|4" data-cat-id="36" class="" title="Tin tức thế giới 24h - Kinh tế, An ninh quân sự thế giới" href="/the-gioi.htm">Thế giới</a>
                                            <div class="dropdown__content">
                            <ol class="site-menu__dropdown site-menu__dropdown--single">
                                    <li>
                                        <a data-utm="Home|MenuCate|1" title="Bầu cử tổng thống Mỹ 2020" href="/the-gioi/bau-cu-tong-thong-my-2020.htm">Bầu cử tổng thống Mỹ 2020</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|2" title="Châu Á" href="/the-gioi/chau-a.htm">Châu Á</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|3" title="EU &amp; Nga" href="/the-gioi/eu-nga.htm">EU &amp; Nga</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|4" title="Châu Mỹ" href="/the-gioi/chau-my.htm">Châu Mỹ</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|5" title="Điểm nóng" href="/the-gioi/diem-nong.htm">Điểm nóng</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|6" title="Tư liệu" href="/the-gioi/tu-lieu.htm">Tư liệu</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|7" title="Kiều bào" href="/the-gioi/kieu-bao.htm">Kiều bào</a>
                                    </li>
                            </ol>
                        </div>
                </li>
                <li class="dropdown dropdown--hover">
                                        
                    <a data-utm="Home|MenuMain|5" data-cat-id="26" class="" title="Tin tức thể thao 24h, lịch thi đấu, kết quả, video clip" href="/the-thao.htm">Thể thao</a>
                                            <div class="dropdown__content">
                            <ol class="site-menu__dropdown site-menu__dropdown--single">
                                    <li>
                                        <a data-utm="Home|MenuCate|1" title="Bóng đá trong nước" href="/the-thao/bong-da-trong-nuoc.htm">Bóng đá trong nước</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|2" title="Bóng đá Châu Âu" href="/the-thao/bong-da-chau-au.htm">Bóng đá Châu Âu</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|3" title="Võ thuật" href="/the-thao/vo-thuat.htm">Võ thuật</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|4" title="Tennis" href="/the-thao/tennis.htm">Tennis</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|5" title="Các môn Thể thao khác" href="/the-thao/cac-mon-the-thao-khac.htm">Các môn Thể thao khác</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|6" title="Hậu trường" href="/the-thao/hau-truong.htm">Hậu trường</a>
                                    </li>
                            </ol>
                        </div>
                </li>
                <li class="dropdown dropdown--hover">
                                        
                    <a data-utm="Home|MenuMain|6" data-cat-id="133" class="" title="Tin tức An sinh xã hội, thông tin đào tạo việc làm" href="/lao-dong-viec-lam.htm">Việc làm</a>
                                            <div class="dropdown__content">
                            <ol class="site-menu__dropdown site-menu__dropdown--single">
                                    <li>
                                        <a data-utm="Home|MenuCate|1" title="Chính sách" href="/lao-dong-viec-lam/chinh-sach.htm">Chính sách</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|2" title="Việc làm" href="/lao-dong-viec-lam/viec-lam.htm">Việc làm</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|3" title="Đào tạo" href="/lao-dong-viec-lam/dao-tao.htm">Đào tạo</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|4" title="Gói an sinh 62.000 tỷ đồng" href="/lao-dong-viec-lam/goi-an-sinh-62000-ty-dong.htm">Gói an sinh 62.000 tỷ đồng</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|5" title="Xuất khẩu lao động" href="/lao-dong-viec-lam/xuat-khau-lao-dong.htm">Xuất khẩu lao động</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|6" title="Chúng tôi nói" href="/lao-dong-viec-lam/chung-toi-noi.htm">Chúng tôi nói</a>
                                    </li>
                            </ol>
                        </div>
                </li>
                <li class="dropdown dropdown--hover">
                                        
                    <a data-utm="Home|MenuMain|7" data-cat-id="7" class="" title="Sức khỏe: Cẩm nang chăm sóc sức khỏe gia đình, cách Phòng Bệnh" href="/suc-khoe.htm">Sức khỏe</a>
                                            <div class="dropdown__content">
                            <ol class="site-menu__dropdown site-menu__dropdown--single">
                                    <li>
                                        <a data-utm="Home|MenuCate|1" title="Ung thư" href="/suc-khoe/ung-thu.htm">Ung thư</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|2" title="Kiến thức giới tính" href="/suc-khoe/kien-thuc-gioi-tinh.htm">Kiến thức giới tính</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|3" title="Tư vấn" href="/suc-khoe/tu-van.htm">Tư vấn</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|4" title="Làm đẹp" href="/suc-khoe/lam-dep.htm">Làm đẹp</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|5" title="Ngày Thầy thuốc Việt Nam" href="/suc-khoe/ngay-thay-thuoc-viet-nam.htm">Ngày Thầy thuốc Việt Nam</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|6" title="Đại dịch Covid-19" href="/suc-khoe/dai-dich-covid-19.htm">Đại dịch Covid-19</a>
                                    </li>
                            </ol>
                        </div>
                </li>
                <li class="dropdown dropdown--hover">
                                        
                    <a data-utm="Home|MenuMain|8" data-cat-id="167" class="" title="Những số phận không may mắn và Tấm lòng nhân ái" href="/tam-long-nhan-ai.htm">Nhân ái</a>
                                            <div class="dropdown__content">
                            <ol class="site-menu__dropdown site-menu__dropdown--single">
                                    <li>
                                        <a data-utm="Home|MenuCate|1" title="Danh sách ủng hộ" href="/tam-long-nhan-ai/danh-sach-ung-ho.htm">Danh sách ủng hộ</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|2" title="Danh sách kết chuyển" href="/tam-long-nhan-ai/danh-sach-ket-chuyen.htm">Danh sách kết chuyển</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|3" title="Hoàn cảnh" href="/tam-long-nhan-ai/hoan-canh.htm">Hoàn cảnh</a>
                                    </li>
                            </ol>
                        </div>
                </li>
                <li class="dropdown dropdown--hover">
                                        
                    <a data-utm="Home|MenuMain|9" data-cat-id="76" class="" title="Tin kinh doanh: Thị trường, tài chính, kinh tế, doanh nghiệp" href="/kinh-doanh.htm">Kinh doanh</a>
                                            <div class="dropdown__content">
                            <ol class="site-menu__dropdown site-menu__dropdown--single">
                                    <li>
                                        <a data-utm="Home|MenuCate|1" title="Tài chính - Đầu tư" href="/kinh-doanh/tai-chinh-dau-tu.htm">Tài chính - Đầu tư</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|2" title="Thị trường" href="/kinh-doanh/thi-truong.htm">Thị trường</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|3" title="Doanh nghiệp" href="/kinh-doanh/doanh-nghiep.htm">Doanh nghiệp</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|4" title="Khởi nghiệp" href="/kinh-doanh/khoi-nghiep.htm">Khởi nghiệp</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|5" title="Bảo vệ NTD" href="/kinh-doanh/bao-ve-ntd.htm">Bảo vệ NTD</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|6" title="Bảo hiểm" href="/kinh-doanh/bao-hiem.htm">Bảo hiểm</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|7" title="Quốc tế" href="/kinh-doanh/quoc-te.htm">Quốc tế</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|8" title="Nhà đất" href="/kinh-doanh/nha-dat.htm">Nhà đất</a>
                                    </li>
                            </ol>
                        </div>
                </li>
                <li class="dropdown dropdown--hover">
                                        
                    <a data-utm="Home|MenuMain|10" data-cat-id="927" class="" title="Tin tức thị trường bất động sản, nhà đất, dự án mới" href="/bat-dong-san.htm">Bất động sản</a>
                                            <div class="dropdown__content">
                            <ol class="site-menu__dropdown site-menu__dropdown--single">
                                    <li>
                                        <a data-utm="Home|MenuCate|1" title="Dự án" href="/bat-dong-san/du-an.htm">Dự án</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|2" title="Thị trường" href="/bat-dong-san/thi-truong.htm">Thị trường</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|3" title="Nhịp sống đô thị" href="/bat-dong-san/nhip-song-do-thi.htm">Nhịp sống đô thị</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|4" title="Sống xanh" href="/bat-dong-san/song-xanh.htm">Sống xanh</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|5" title="Sắc màu Nhật Bản" href="/bat-dong-san/sac-mau-nhat-ban.htm">Sắc màu Nhật Bản</a>
                                    </li>
                            </ol>
                        </div>
                </li>
                <li class="dropdown dropdown--hover">
                                        
                    <a data-utm="Home|MenuMain|11" data-cat-id="111" class="" title="Ô tô xe máy | Thông tin thị trường oto xe máy, giá mua bán xe" href="/o-to-xe-may.htm">Xe &#x2B;&#x2B;</a>
                                            <div class="dropdown__content">
                            <ol class="site-menu__dropdown site-menu__dropdown--single">
                                    <li>
                                        <a data-utm="Home|MenuCate|1" title="Thị trường xe" href="/o-to-xe-may/thi-truong-xe.htm">Thị trường xe</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|2" title="Bảng giá ô tô" href="/o-to-xe-may/bang-gia-o-to.htm">Bảng giá ô tô</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|3" title="Văn hoá xe" href="/o-to-xe-may/van-hoa-xe.htm">Văn hoá xe</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|4" title="Tư vấn xe" href="/o-to-xe-may/tu-van-xe.htm">Tư vấn xe</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|5" title="Đua xe" href="/o-to-xe-may/dua-xe.htm">Đua xe</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|6" title="Giá xe" href="/o-to-xe-may/gia-xe.htm">Giá xe</a>
                                    </li>
                            </ol>
                        </div>
                </li>
                <li class="dropdown dropdown--hover">
                                        
                    <a data-utm="Home|MenuMain|12" data-cat-id="119" class="" title="Sức mạnh số - Tin khoa học công nghệ kỹ thuật mới nhất, nghiên cứu ứng dụng" href="/suc-manh-so.htm">Sức mạnh số</a>
                                            <div class="dropdown__content">
                            <ol class="site-menu__dropdown site-menu__dropdown--single">
                                    <li>
                                        <a data-utm="Home|MenuCate|1" title="Máy tính - Mạng" href="/suc-manh-so/vi-tinh.htm">Máy tính - Mạng</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|2" title="Di động - Viễn thông" href="/suc-manh-so/dien-thoai.htm">Di động - Viễn thông</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|3" title="Điện tử tiêu dùng" href="/suc-manh-so/dien-may.htm">Điện tử tiêu dùng</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|4" title="Nghe nhìn" href="/suc-manh-so/nghe-nhin.htm">Nghe nhìn</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|5" title="Phần mềm - Bảo mật" href="/suc-manh-so/phan-mem-bao-mat.htm">Phần mềm - Bảo mật</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|6" title="Thủ thuật - Mẹo vặt" href="/suc-manh-so/thu-thuat.htm">Thủ thuật - Mẹo vặt</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|7" title="Thị trường công nghệ" href="/suc-manh-so/thi-truong-cong-nghe.htm">Thị trường công nghệ</a>
                                    </li>
                            </ol>
                        </div>
                </li>
                <li class="dropdown dropdown--hover">
                                        
                    <a data-utm="Home|MenuMain|13" data-cat-id="25" class="" title="Giáo dục - Thông tin tuyển sinh, du học mới nhất" href="/giao-duc-huong-nghiep.htm">Giáo dục</a>
                                            <div class="dropdown__content">
                            <ol class="site-menu__dropdown site-menu__dropdown--single">
                                    <li>
                                        <a data-utm="Home|MenuCate|1" title="Tin tuyển sinh" href="/giao-duc-huong-nghiep/tin-tuyen-sinh.htm">Tin tuyển sinh</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|2" title="Khuyến học" href="/giao-duc-huong-nghiep/khuyen-hoc.htm">Khuyến học</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|3" title="Gương sáng" href="/giao-duc-huong-nghiep/guong-sang.htm">Gương sáng</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|4" title="Giáo dục - Nghề nghiệp" href="/giao-duc-huong-nghiep/giao-duc-nghe-nghiep.htm">Giáo dục - Nghề nghiệp</a>
                                    </li>
                            </ol>
                        </div>
                </li>
                <li class="dropdown dropdown--hover">
                                        
                    <a data-utm="Home|MenuMain|14" data-cat-id="730" class="" href="/van-hoa.htm">Văn hóa</a>
                                            <div class="dropdown__content">
                            <ol class="site-menu__dropdown site-menu__dropdown--single">
                                    <li>
                                        <a data-utm="Home|MenuCate|1" title="Đời sống văn hóa" href="/van-hoa/doi-song-van-hoa.htm">Đời sống văn hóa</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|2" title="Điện ảnh" href="/van-hoa/dien-anh.htm">Điện ảnh</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|3" title="Âm nhạc" href="/van-hoa/am-nhac.htm">Âm nhạc</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|4" title="Văn học" href="/van-hoa/van-hoc.htm">Văn học</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|5" title="Sân khấu - Dân gian" href="/van-hoa/san-khau-dan-gian.htm">Sân khấu - Dân gian</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|6" title="Hạt giống tâm hồn" href="/van-hoa/hat-giong-tam-hon.htm">Hạt giống tâm hồn</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|7" title="Hương vị Việt" href="/van-hoa/huong-vi-viet.htm">Hương vị Việt</a>
                                    </li>
                            </ol>
                        </div>
                </li>
                <li class="dropdown dropdown--hover">
                                        
                    <a data-utm="Home|MenuMain|15" data-cat-id="23" class="" title="Tin tức giải trí mới nhất 24h | showbiz  sao việt và thế giới" href="/giai-tri.htm">Giải trí</a>
                                            <div class="dropdown__content">
                            <ol class="site-menu__dropdown site-menu__dropdown--single">
                                    <li>
                                        <a data-utm="Home|MenuCate|1" title="Sao Việt" href="/giai-tri/sao-viet.htm">Sao Việt</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|2" title="Hollywood" href="/giai-tri/hollywood.htm">Hollywood</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|3" title="Châu Á" href="/giai-tri/chau-a.htm">Châu Á</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|4" title="Thời trang" href="/giai-tri/thoi-trang.htm">Thời trang</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|5" title="Xem - Ăn - Chơi" href="/giai-tri/xem-an-choi.htm">Xem - Ăn - Chơi</a>
                                    </li>
                            </ol>
                        </div>
                </li>
                <li class="dropdown dropdown--hover">
                                        
                    <a data-utm="Home|MenuMain|16" data-cat-id="835" class="" href="/du-lich.htm">Du Lịch</a>
                                            <div class="dropdown__content">
                            <ol class="site-menu__dropdown site-menu__dropdown--single">
                                    <li>
                                        <a data-utm="Home|MenuCate|1" title="Tin tức" href="/du-lich/tin-tuc.htm">Tin tức</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|2" title="Khám phá" href="/du-lich/kham-pha.htm">Khám phá</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|3" title="Món ngon - Điểm đẹp" href="/du-lich/mon-ngon-diem-dep.htm">Món ngon - Điểm đẹp</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|4" title="Tour hay - Khuyến mại" href="/du-lich/tour-hay-khuyen-mai.htm">Tour hay - Khuyến mại</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|5" title="Video - Ảnh" href="/du-lich/video-anh.htm">Video - Ảnh</a>
                                    </li>
                            </ol>
                        </div>
                </li>
                <li class="dropdown dropdown--hover">
                                        
                    <a data-utm="Home|MenuMain|17" data-cat-id="170" class="" title="Tin tức pháp luật 24h, vụ án, hình sự" href="/phap-luat.htm">Pháp luật</a>
                                    </li>
                <li class="dropdown dropdown--hover dropdown--right">
                                        
                    <a data-utm="Home|MenuMain|18" data-cat-id="135" class="" title="Nhịp sống trẻ, khởi nghiệp, giáo dục cộng đồng" href="/nhip-song-tre.htm">Nhịp sống trẻ</a>
                                            <div class="dropdown__content">
                            <ol class="site-menu__dropdown site-menu__dropdown--single">
                                    <li>
                                        <a data-utm="Home|MenuCate|1" title="Người Việt trẻ" href="/nhip-song-tre/nguoi-viet-tre.htm">Người Việt trẻ</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|2" title="Teen đẹp" href="/nhip-song-tre/teen-dep.htm">Teen đẹp</a>
                                    </li>
                                    <li>
                                        <a data-utm="Home|MenuCate|3" title="Phóng sự trẻ" href="/nhip-song-tre/phong-su-tre.htm">Phóng sự trẻ</a>
                                    </li>
                            </ol>
                        </div>
                </li>
                             <li class="others dropdown dropdown--hover dropdown--right" id="site-dropdown">
                    <a id="site-dropdown-button" href="javascript:;">
                      <span class="bars"></span>
                    </a>
                    <div class="dropdown__content" id="site-dropdown__content">
                        <ol class="site-menu__dropdown">
                                <li>
                                    <a data-utm="Home|Main_Menu|19" title="Khoa học" href="/khoa-hoc-cong-nghe.htm">
                                        Khoa học</a>
                                </li>
                                <li>
                                    <a data-utm="Home|Main_Menu|20" title="Blog" href="/blog.htm">
                                        Blog</a>
                                </li>
                                <li>
                                    <a data-utm="Home|Main_Menu|21" title="Du học" href="/du-hoc.htm">
                                        Du học</a>
                                </li>
                                <li>
                                    <a data-utm="Home|Main_Menu|22" title="Tuyển sinh" href="/tuyen-sinh.htm">
                                        Tuyển sinh</a>
                                </li>
                                <li>
                                    <a data-utm="Home|Main_Menu|23" title="Fica" href="http://fica.vn/">
                                        Fica</a>
                                </li>
                                <li>
                                    <a data-utm="Home|Main_Menu|24" title="Bạn đọc" href="/ban-doc.htm">
                                        Bạn đọc</a>
                                </li>
                                <li>
                                    <a data-utm="Home|Main_Menu|25" title="Đời sống" href="/doi-song.htm">
                                        Đời sống</a>
                                </li>
                                <li>
                                    <a data-utm="Home|Main_Menu|26" title="Chuyện lạ" href="/chuyen-la.htm">
                                        Chuyện lạ</a>
                                </li>
                                <li>
                                    <a data-utm="Home|Main_Menu|27" title="Diễn đàn" href="/dien-dan.htm">
                                        Diễn đàn</a>
                                </li>
                                <li>
                                    <a data-utm="Home|Main_Menu|28" title="English" href="http://www.dtinews.vn">
                                        English</a>
                                </li>
                                <li>
                                    <a data-utm="Home|Main_Menu|29" title="Tình yêu" href="/tinh-yeu-gioi-tinh.htm">
                                        Tình yêu</a>
                                </li>
                                <li>
                                    <a data-utm="Home|Main_Menu|30" title="An sinh" href="/an-sinh.htm">
                                        An sinh</a>
                                </li>
                        </ol>
                    </div>
                  </li>
        </ol>
    </div>
</nav>
                <div class="dt-top-banner">
                <div class="top-banner">
                    <div class="container">
                        <div class="top-banner__content">
                            <div id="xds-1"></div>
                        </div>
                    </div>
                </div>
            </div>

    

</header>
<main class="dt-main">


            <div id="xds-40"></div>


<div class="container clearfix">
  

    <!-- highlight -->
    
<div class="home-highlight clearfix">
    <div class="col col--highlight-news clearfix">
        <div class="col col--highlight-focus">
            
    <div class="news-item news-item--highlight">
        


<a  data-utm="Home|Cover|1"
 class="news-item__avatar"   href="/xa-hoi/xen-dai-phan-cach-duong-le-van-luong-chuan-bi-dao-ham-chui-700-ty-dong-20201129101522219.htm"
  title="Xén dải phân cách đường Lê Văn Lương chuẩn bị đào hầm chui 700 tỷ đồng">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Xén dải phân cách đường Lê Văn Lương chuẩn bị đào hầm chui 700 tỷ đồng" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/996_664/2020/11/29/boc-mat-duong-le-van-luong-29-11-20209-1606618946653.jpg" src="https://icdn.dantri.com.vn/zoom/996_664/filters:quality(0)/2020/11/29/boc-mat-duong-le-van-luong-29-11-20209-1606618946653.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h2 class='news-item__title'>
                    


<a  data-utm="Home|Cover|1"
  href="/xa-hoi/xen-dai-phan-cach-duong-le-van-luong-chuan-bi-dao-ham-chui-700-ty-dong-20201129101522219.htm"
  title="Xén dải phân cách đường Lê Văn Lương chuẩn bị đào hầm chui 700 tỷ đồng">
  
  Xén dải phân cách đường Lê Văn Lương chuẩn bị đào hầm chui 700 tỷ đồng    
</a>


  
           
            </h2>
            
                                     <a data-utm="Home|Cover|1" class="news-item__sapo" title="Xén dải phân cách đường Lê Văn Lương chuẩn bị đào hầm chui 700 tỷ đồng" href="/xa-hoi/xen-dai-phan-cach-duong-le-van-luong-chuan-bi-dao-ham-chui-700-ty-dong-20201129101522219.htm">(Dân trí)&nbsp;- Hơn 800m dải phân cách đường Lê Văn Lương được đơn vị thi công dùng máy cưa bóc tách toàn bộ, đổ bê tông mới để phục vụ mặt bằng đào hầm chui 700 tỷ đồng.</a>
                                                     <ul class="news-item__related">
                        <li>
                            <h2 class="news-item__related-item">
                                


<a  data-utm="Home|Cover|1"
  href="/xa-hoi/giao-thong-hon-loan-tai-nga-tu-dat-ham-chui-gan-700-ty-dong-o-ha-noi-20201102220649341.htm"
  title="Giao thông hỗn loạn tại ngã tư đặt hầm chui gần 700 tỷ đồng ở Hà Nội">
  
  Giao thông hỗn loạn tại ngã tư đặt hầm chui gần 700 tỷ đồng ở Hà Nội    
</a>


  
                            </h2>
                        </li>
                        <li>
                            <h2 class="news-item__related-item">
                                


<a  data-utm="Home|Cover|1"
  href="/xa-hoi/ha-noi-khoi-cong-ham-chui-gan-700-ty-qua-nut-giao-le-van-luong-vanh-dai-3-20201002091609911.htm"
  title="Hà Nội khởi công hầm chui gần 700 tỷ qua nút giao Lê Văn Lương - Vành đai 3">
  
  Hà Nội khởi công hầm chui gần 700 tỷ qua nút giao Lê Văn Lương - Vành đai 3    
</a>


  
                            </h2>
                        </li>
                </ul>
        </div>
    </div>

        </div>
        <div class="col col--highlight-event">
            <div class="highlight-event">
                <h2 class="highlight-event__title">
                    Tin tức sự kiện
                </h2>
                <ul class="dt-list dt-list--link">
                        <li>
                            <div class="news-item news-item--link">
                                <h2 class="news-item__title">
                                    <a data-utm="Home|TTSK|1" data-newstype="3" href="/the-gioi/ong-biden-chan-thuong-do-truot-nga-khi-choi-voi-thu-cung-20201130061522056.htm">
                                        Ông Biden chấn thương do trượt ngã khi chơi với thú cưng
                                    </a>
                                </h2>
                            </div>
                        </li>
                        <li>
                            <div class="news-item news-item--link">
                                <h2 class="news-item__title">
                                    <a data-utm="Home|TTSK|2" data-newstype="3" href="/xa-hoi/nguoi-dan-ong-bi-o-to-tong-chet-khi-di-bo-tren-cao-toc-noi-bai-lao-cai-20201130073244980.htm">
                                        Người đàn ông bị ô tô tông chết khi đi bộ trên cao tốc Nội Bài - Lào Cai
                                    </a>
                                </h2>
                            </div>
                        </li>
                        <li>
                            <div class="news-item news-item--link">
                                <h2 class="news-item__title">
                                    <a data-utm="Home|TTSK|3" data-newstype="3" href="/xa-hoi/qua-bom-tren-pho-cua-bac-duoc-huy-no-an-toan-tai-bac-giang-20201130073805985.htm">
                                        Quả bom trên phố Cửa Bắc được hủy nổ an toàn tại Bắc Giang
                                    </a>
                                </h2>
                            </div>
                        </li>
                        <li>
                            <div class="news-item news-item--link">
                                <h2 class="news-item__title">
                                    <a data-utm="Home|TTSK|4" data-newstype="3" href="/xa-hoi/da-lat-via-he-ha-noi-do-ben-70-nam-bong-troc-sau-3-nam-su-dung-20201124161026732.htm">
                                        Đá lát vỉa hè Hà Nội &quot;độ bền 70 năm&quot; bong tróc sau 3 năm sử dụng
                                    </a>
                                </h2>
                            </div>
                        </li>
                        <li>
                            <div class="news-item news-item--link">
                                <h2 class="news-item__title">
                                    <a data-utm="Home|TTSK|5" data-newstype="3" href="/the-thao/nghi-van-ve-cai-chet-cua-maradona-ba-con-gai-bi-trieu-tap-20201129193547951.htm">
                                        Nghi vấn về cái chết của Maradona, ba con gái bị triệu tập
                                    </a>
                                </h2>
                            </div>
                        </li>
                        <li>
                            <div class="news-item news-item--link">
                                <h2 class="news-item__title">
                                    <a data-utm="Home|TTSK|6" data-newstype="3" href="/kinh-doanh/qua-bom-duoc-di-doi-trong-dem-evn-huy-lenh-lam-viec-online-20201130062206148.htm">
                                        Quả bom được di dời trong đêm, EVN hủy lệnh &quot;làm việc online&quot;
                                    </a>
                                </h2>
                            </div>
                        </li>
                        <li>
                            <div class="news-item news-item--link">
                                <h2 class="news-item__title">
                                    <a data-utm="Home|TTSK|7" data-newstype="3" href="/lao-dong-viec-lam/infographic-4-truong-hop-nghi-huu-truoc-tuoi-ap-dung-tu-112021-20201130084746804.htm">
                                        Infographic: 4 trường hợp nghỉ hưu trước tuổi áp dụng từ 1/1/2021
                                    </a>
                                </h2>
                            </div>
                        </li>
                        <li>
                            <div class="news-item news-item--link">
                                <h2 class="news-item__title">
                                    <a data-utm="Home|TTSK|8" data-newstype="3" href="/tam-long-nhan-ai/bac-si-benh-vien-bach-mai-keu-goi-giup-do-ghep-te-bao-goc-cho-ong-bo-tre-20201130005326162.htm">
                                        Bác sĩ bệnh viện Bạch Mai kêu gọi giúp đỡ ghép tế bào gốc cho ông bố trẻ
                                    </a>
                                </h2>
                            </div>
                        </li>
                        <li>
                            <div class="news-item news-item--link">
                                <h2 class="news-item__title">
                                    <a data-utm="Home|TTSK|9" data-newstype="3" href="/the-thao/vi-sao-hlv-park-hang-seo-goi-den-9-hau-ve-canh-len-doi-tuyen-20201129231012257.htm">
                                        Vì sao HLV Park Hang Seo gọi đến 9 hậu vệ cánh lên đội tuyển?
                                    </a>
                                </h2>
                            </div>
                        </li>
                        <li>
                            <div class="news-item news-item--link">
                                <h2 class="news-item__title">
                                    <a data-utm="Home|TTSK|10" data-newstype="3" href="/o-to-xe-may/tranh-xe-container-nguoi-ngoi-xe-may-nga-nhao-va-tranh-luan-ai-dung-ai-sai-20201130060438230.htm">
                                        Tránh xe container, người ngồi xe máy ngã nhào và tranh luận ai đúng ai sai
                                    </a>
                                </h2>
                            </div>
                        </li>
                </ul>
            </div>
        </div>
        <div class="col col--highlight-top3">
            <ul class="dt-list dt-list--top3">
                                    <li>
                        
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Top3|1"
 class="news-item__avatar"   href="/xa-hoi/di-doi-thanh-cong-qua-bom-nang-340-kg-con-nguyen-2-ngoi-no-o-pho-cua-bac-20201130002826711.htm"
  title="Di dời thành công quả bom nặng 340kg còn nguyên 2 ngòi nổ ở phố Cửa Bắc">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Di dời thành công quả bom nặng 340kg còn nguyên 2 ngòi nổ ở phố Cửa Bắc" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/480_320/2020/11/30/go-bom-12-1606670538118.jpg" src="https://icdn.dantri.com.vn/zoom/480_320/filters:quality(0)/2020/11/30/go-bom-12-1606670538118.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h2 class='news-item__title'>
                    


<a  data-utm="Home|Top3|1"
  href="/xa-hoi/di-doi-thanh-cong-qua-bom-nang-340-kg-con-nguyen-2-ngoi-no-o-pho-cua-bac-20201130002826711.htm"
  title="Di dời thành công quả bom nặng 340kg còn nguyên 2 ngòi nổ ở phố Cửa Bắc">
  
  Di dời thành công quả bom nặng 340kg còn nguyên 2 ngòi nổ ở phố Cửa Bắc    
</a>


  
           
            </h2>
            
                                                                  </div>
    </div>

                    </li>
                    <li>
                        
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Top3|2"
 class="news-item__avatar"   href="/the-gioi/ong-trump-toi-se-khong-thay-doi-suy-nghi-trong-6-thang-toi-20201130072615867.htm"
  title="Ông Trump: Tôi sẽ không thay đổi suy nghĩ trong 6 tháng tới">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Ông Trump: Tôi sẽ không thay đổi suy nghĩ trong 6 tháng tới" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/480_320/2020/11/28/trump-1606518399547.jpg" src="https://icdn.dantri.com.vn/zoom/480_320/filters:quality(0)/2020/11/28/trump-1606518399547.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h2 class='news-item__title'>
                    


<a  data-utm="Home|Top3|2"
  href="/the-gioi/ong-trump-toi-se-khong-thay-doi-suy-nghi-trong-6-thang-toi-20201130072615867.htm"
  title="Ông Trump: Tôi sẽ không thay đổi suy nghĩ trong 6 tháng tới">
  
  Ông Trump: Tôi sẽ không thay đổi suy nghĩ trong 6 tháng tới    
</a>


  
           
            </h2>
            
                                                                  </div>
    </div>

                    </li>
                    <li>
                        
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Top3|3"
 class="news-item__avatar"   href="/blog/nguoi-tot-chung-ta-tuong-it-nhung-khong-phai-boi-da-so-ho-tot-tham-lang-20201130013509395.htm"
  title="Người tốt, chúng ta tưởng ít nhưng không phải, bởi đa số họ &quot;tốt thầm lặng&quot;">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Người tốt, chúng ta tưởng ít nhưng không phải, bởi đa số họ &quot;tốt thầm lặng&quot;" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/480_320/2020/11/30/lamtuthien-1-1606674696007.jpg" src="https://icdn.dantri.com.vn/zoom/480_320/filters:quality(0)/2020/11/30/lamtuthien-1-1606674696007.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h2 class='news-item__title'>
                    


<a  data-utm="Home|Top3|3"
  href="/blog/nguoi-tot-chung-ta-tuong-it-nhung-khong-phai-boi-da-so-ho-tot-tham-lang-20201130013509395.htm"
  title="Người tốt, chúng ta tưởng ít nhưng không phải, bởi đa số họ &quot;tốt thầm lặng&quot;">
  
  Người tốt, chúng ta tưởng ít nhưng không phải, bởi đa số họ &quot;tốt thầm lặng&quot;    
</a>


  
           
            </h2>
            
                                                                  </div>
    </div>

                    </li>


            </ul>
        </div>
    </div>

              <div id="xds-50" class="col col--highlight-ads" cat-id="">
    
            </div>

</div>



    <div class="dt-divider"></div>
                <div id="xds-52"></div>

    <div class="clearfix " data-sticky-container data-top-height-container>
        <div class="col col--primary" top-height="left">
                        <div id="xds-57"></div>

            


<ul class="dt-list dt-list--lg">
        <li>
            
    <div class="news-item news-item news-item--stream news-item--left2right">

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|MainList|1"
  href="/xa-hoi/da-lat-via-he-ha-noi-do-ben-70-nam-bong-troc-sau-3-nam-su-dung-20201124161026732.htm"
  title="Đá lát vỉa hè Hà Nội &quot;độ bền 70 năm&quot; bong tróc sau 3 năm sử dụng">
  
  Đá lát vỉa hè Hà Nội &quot;độ bền 70 năm&quot; bong tróc sau 3 năm sử dụng        <i class="news-title-icon ico-news-type-img"> </i>  
  
</a>


  
           
            </h3>
            
                 


<a  data-utm="Home|MainList|1"
 class="news-item__avatar"   href="/xa-hoi/da-lat-via-he-ha-noi-do-ben-70-nam-bong-troc-sau-3-nam-su-dung-20201124161026732.htm"
  title="Đá lát vỉa hè Hà Nội &quot;độ bền 70 năm&quot; bong tróc sau 3 năm sử dụng">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Đá lát vỉa hè Hà Nội &quot;độ bền 70 năm&quot; bong tróc sau 3 năm sử dụng" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/360_240/2020/11/30/127038754995330704278894940114228826163556-n-1606698315202.jpg" src="https://icdn.dantri.com.vn/zoom/360_240/filters:quality(0)/2020/11/30/127038754995330704278894940114228826163556-n-1606698315202.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           
                            <a data-utm="Home|MainList|1" class="news-item__sapo" title="Đá lát vỉa hè Hà Nội &quot;độ bền 70 năm&quot; bong tróc sau 3 năm sử dụng" href="/xa-hoi/da-lat-via-he-ha-noi-do-ben-70-nam-bong-troc-sau-3-nam-su-dung-20201124161026732.htm">(Dân trí)&nbsp;- Ở một số tuyến đường như Nguyễn Trãi, Trần Duy Hưng (Hà Nội), gạch đá lát vỉa hè vốn được "quảng cáo" là có tuổi thọ lên tới 70 năm nhưng nhiều đoạn đã hư hỏng, bong tróc chỉ sau 3 năm sử dụng.</a>
                                         <div class="news-item__meta">

                        
            <a data-utm="Home|MainList|1" data-cat-id="20" class="news-item__category" title="Xã hội" href="/xa-hoi.htm">Xã hội</a>
                                                     <span class="news-item__time">2 giờ trước</span>
                </div>
                    </div>
    </div>

        </li>
        <li>
            
    <div class="news-item news-item news-item--stream news-item--left2right">

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|MainList|2"
  href="/the-gioi/canada-dieu-tra-vu-cong-ty-trung-quoc-mua-mo-vang-o-bac-cuc-20201130082000450.htm"
  title="Canada điều tra vụ công ty Trung Quốc mua mỏ vàng ở Bắc Cực">
  
  Canada điều tra vụ công ty Trung Quốc mua mỏ vàng ở Bắc Cực    
</a>


  
           
            </h3>
            
                 


<a  data-utm="Home|MainList|2"
 class="news-item__avatar"   href="/the-gioi/canada-dieu-tra-vu-cong-ty-trung-quoc-mua-mo-vang-o-bac-cuc-20201130082000450.htm"
  title="Canada điều tra vụ công ty Trung Quốc mua mỏ vàng ở Bắc Cực">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Canada điều tra vụ công ty Trung Quốc mua mỏ vàng ở Bắc Cực" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/360_240/2020/11/30/tmac-resources-e-28099-hope-baygoldminein-nunavut-1606699013990.jpg" src="https://icdn.dantri.com.vn/zoom/360_240/filters:quality(0)/2020/11/30/tmac-resources-e-28099-hope-baygoldminein-nunavut-1606699013990.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           
                            <a data-utm="Home|MainList|2" class="news-item__sapo" title="Canada điều tra vụ công ty Trung Quốc mua mỏ vàng ở Bắc Cực" href="/the-gioi/canada-dieu-tra-vu-cong-ty-trung-quoc-mua-mo-vang-o-bac-cuc-20201130082000450.htm">(Dân trí)&nbsp;- Chính phủ Canada xem xét lại về khía cạnh an ninh quốc gia của thương vụ công ty Trung Quốc bỏ 165 triệu USD để mua mỏ vàng của Canada ở một khu vực chiến lược tại Bắc Cực.</a>
                                         <div class="news-item__meta">

                        
            <a data-utm="Home|MainList|2" data-cat-id="36" class="news-item__category" title="Thế giới" href="/the-gioi.htm">Thế giới</a>
                                                     <span class="news-item__time">1 giờ trước</span>
                </div>
                    </div>
    </div>

        </li>
        <li>
            
    <div class="news-item news-item news-item--stream news-item--left2right">

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|MainList|3"
  href="/the-thao/vi-sao-hlv-park-hang-seo-goi-den-9-hau-ve-canh-len-doi-tuyen-20201129231012257.htm"
  title="Vì sao HLV Park Hang Seo gọi đến 9 hậu vệ cánh lên đội tuyển?">
  
  Vì sao HLV Park Hang Seo gọi đến 9 hậu vệ cánh lên đội tuyển?    
</a>


  
           
            </h3>
            
                 


<a  data-utm="Home|MainList|3"
 class="news-item__avatar"   href="/the-thao/vi-sao-hlv-park-hang-seo-goi-den-9-hau-ve-canh-len-doi-tuyen-20201129231012257.htm"
  title="Vì sao HLV Park Hang Seo gọi đến 9 hậu vệ cánh lên đội tuyển?">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Vì sao HLV Park Hang Seo gọi đến 9 hậu vệ cánh lên đội tuyển?" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/360_240/2020/11/29/trong-hoang-1291120-1606665977324.jpg" src="https://icdn.dantri.com.vn/zoom/360_240/filters:quality(0)/2020/11/29/trong-hoang-1291120-1606665977324.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           
                            <a data-utm="Home|MainList|3" class="news-item__sapo" title="Vì sao HLV Park Hang Seo gọi đến 9 hậu vệ cánh lên đội tuyển?" href="/the-thao/vi-sao-hlv-park-hang-seo-goi-den-9-hau-ve-canh-len-doi-tuyen-20201129231012257.htm">(Dân trí)&nbsp;- Trong danh sách tập trung đội tuyển Việt Nam trong những ngày tới đây, HLV Park Hang Seo gọi đến 9 cầu thủ sở trường đá hậu vệ biên, biến vị trí này trở thành nơi cạnh tranh cao nhất đội tuyển.</a>
                                         <div class="news-item__meta">

                        
            <a data-utm="Home|MainList|3" data-cat-id="26" class="news-item__category" title="Thể thao" href="/the-thao.htm">Thể thao</a>
                                                     <span class="news-item__time">2 giờ trước</span>
                </div>
                    </div>
    </div>

        </li>
        <li>
            
    <div class="news-item news-item news-item--stream news-item--left2right">

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|MainList|4"
  href="/lao-dong-viec-lam/infographic-4-truong-hop-nghi-huu-truoc-tuoi-ap-dung-tu-112021-20201130084746804.htm"
  title="Infographic: 4 trường hợp nghỉ hưu trước tuổi áp dụng từ 1/1/2021">
  
  Infographic: 4 trường hợp nghỉ hưu trước tuổi áp dụng từ 1/1/2021    
</a>


  
           
            </h3>
            
                 


<a  data-utm="Home|MainList|4"
 class="news-item__avatar"   href="/lao-dong-viec-lam/infographic-4-truong-hop-nghi-huu-truoc-tuoi-ap-dung-tu-112021-20201130084746804.htm"
  title="Infographic: 4 trường hợp nghỉ hưu trước tuổi áp dụng từ 1/1/2021">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Infographic: 4 trường hợp nghỉ hưu trước tuổi áp dụng từ 1/1/2021" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/360_240/2020/11/30/avatarnghihuu-1606700753470.jpeg" src="https://icdn.dantri.com.vn/zoom/360_240/filters:quality(0)/2020/11/30/avatarnghihuu-1606700753470.jpeg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           
                            <a data-utm="Home|MainList|4" class="news-item__sapo" title="Infographic: 4 trường hợp nghỉ hưu trước tuổi áp dụng từ 1/1/2021" href="/lao-dong-viec-lam/infographic-4-truong-hop-nghi-huu-truoc-tuoi-ap-dung-tu-112021-20201130084746804.htm">(Dân trí)&nbsp;- Luật Lao động năm 2019 và Nghị định 135/2020/NĐ-CP quy định 4 trường hợp người lao động nghỉ hưu trước tuổi nghỉ hưu ở điều kiện lao động bình thường, thời gian nghỉ hưu trước tuổi tối đa là 5 năm.</a>
                                         <div class="news-item__meta">

                        
            <a data-utm="Home|MainList|4" data-cat-id="133" class="news-item__category" title="Lao động - Việc làm" href="/lao-dong-viec-lam.htm">Lao động - Việc làm</a>
                                                     <span class="news-item__time">1 giờ trước</span>
                </div>
                    </div>
    </div>

        </li>
        <li>
            
    <div class="news-item news-item news-item--stream news-item--left2right">

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|MainList|5"
  href="/suc-khoe/sau-khi-that-tinh-nam-thanh-nien-noi-mang-do-bong-vay-trang-khap-nguoi-20201129140319658.htm"
  title="Sau khi thất tình, nam thanh niên nổi mảng đỏ, bong vảy trắng khắp người">
  
  Sau khi thất tình, nam thanh niên nổi mảng đỏ, bong vảy trắng khắp người    
</a>


  
           
            </h3>
            
                 


<a  data-utm="Home|MainList|5"
 class="news-item__avatar"   href="/suc-khoe/sau-khi-that-tinh-nam-thanh-nien-noi-mang-do-bong-vay-trang-khap-nguoi-20201129140319658.htm"
  title="Sau khi thất tình, nam thanh niên nổi mảng đỏ, bong vảy trắng khắp người">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Sau khi thất tình, nam thanh niên nổi mảng đỏ, bong vảy trắng khắp người" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/360_240/2020/11/29/benhvaynen-1606632773282.jpg" src="https://icdn.dantri.com.vn/zoom/360_240/filters:quality(0)/2020/11/29/benhvaynen-1606632773282.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           
                            <a data-utm="Home|MainList|5" class="news-item__sapo" title="Sau khi thất tình, nam thanh niên nổi mảng đỏ, bong vảy trắng khắp người" href="/suc-khoe/sau-khi-that-tinh-nam-thanh-nien-noi-mang-do-bong-vay-trang-khap-nguoi-20201129140319658.htm">(Dân trí)&nbsp;- Theo chuyên gia, các vấn đề về tâm lý có thể là yếu tố khởi động để làm bùng phát bệnh vảy nến.</a>
                                         <div class="news-item__meta">

                        
            <a data-utm="Home|MainList|5" data-cat-id="7" class="news-item__category" title="Sức khỏe" href="/suc-khoe.htm">Sức khỏe</a>
                                                     <span class="news-item__time">3 giờ trước</span>
                </div>
                    </div>
    </div>

        </li>




</ul>
<hr>

<section class="dt-video-list dt-section dt-section--fit dt-section--video my-5">
    <header class="dt-section__header">
        <h3 class="dt-section__title">
            <a title="Tin tức video" aria-label="Dân trí TV" class="clearfix" href="/video-page.htm">
                <img src="https://cdnweb.dantri.com.vn/bundle/static/assets/lg_dantri_dktop_1.svg?v=1128183128" alt="Tin tức video"/>
            </a>
        </h3>
    </header>
    <div class="dt-section__body" video-group>
        <ul class="dt-list dt-list--home-video">
            <li>

                            <div class="video-item video-item--highlight video-item--overlay">
                <h2 class="video-item__title mt10" data-v-title>Xén dải phân cách đường Lê Văn Lương chuẩn bị đào hầm chui 700 tỷ đồng</h2>
                <div class="dt-thumbnail dt-thumbnail--16x9" data-video-id="130029"></div>

            </div>


            </li>
                <li>
                                <div class="video-item video-item--normal">
                <a   video-playable="130041"   href="/video/nguoi-dan-san-sang-di-doi-khoi-hien-truong-phat-hien-qua-bom-340-kg-130041.htm"  
                    aria-label="video-Người dân sẵn sàng di dời khỏi hiện trường phát hiện quả bom 340 kg"   
                    title="Người dân sẵn sàng di dời khỏi hiện trường phát hiện quả bom 340 kg"
                    summary=""
                    catname=""
                    article="0"
                    class="video-item__avatar">
                    <div class="dt-thumbnail dt-thumbnail--16x9">
                        <div class="video-item-play-button"></div>
                        <img alt="Người dân sẵn sàng di dời khỏi hiện trường phát hiện quả bom 340 kg" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/308_172/thumb-video/2020/11/29/qua-bom-pho-cua-bac-1606663972816/0_00_00.jpg" src="https://icdn.dantri.com.vn/zoom/308_172/filters:quality(0)/thumb-video/2020/11/29/qua-bom-pho-cua-bac-1606663972816/0_00_00.jpg">
                    </div>
                    <div class="video-item__duration">
02:04                        
                    </div>
                </a>
                <div class="video-item__content">
                    <h3 class="video-item__title">
                        <a   video-playable="130041"   href="/video/nguoi-dan-san-sang-di-doi-khoi-hien-truong-phat-hien-qua-bom-340-kg-130041.htm"   
                            title="Người dân sẵn sàng di dời khỏi hiện trường phát hiện quả bom 340 kg" 
                            summary=""
                            catname=""
                            catlink=""
                            article="0"
                        >
                            Người dân sẵn sàng di dời khỏi hiện trường phát hiện quả bom 340 kg
                        </a>
                    </h3>
                    <div class="video-cat-row">
                        
         
                        
             
                    </div>
                    
                </div>
            </div>


                </li>
                <li>
                                <div class="video-item video-item--normal">
                <a   video-playable="130042"   href="/video/tranh-xe-container-nguoi-ngoi-xe-may-nga-nhao-va-tranh-luan-ai-dung-ai-sai-130042.htm"  
                    aria-label="video-Tránh xe container, người ngồi xe máy ngã nhào và tranh luận ai đúng ai sai"   
                    title="Tránh xe container, người ngồi xe máy ngã nhào và tranh luận ai đúng ai sai"
                    summary=""
                    catname=""
                    article="0"
                    class="video-item__avatar">
                    <div class="dt-thumbnail dt-thumbnail--16x9">
                        <div class="video-item-play-button"></div>
                        <img alt="Tránh xe container, người ngồi xe máy ngã nhào và tranh luận ai đúng ai sai" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/308_172/thumb-video/2020/11/30/120524261733858870817314945129757059596931-n-1606690801279/0_00_09.jpg" src="https://icdn.dantri.com.vn/zoom/308_172/filters:quality(0)/thumb-video/2020/11/30/120524261733858870817314945129757059596931-n-1606690801279/0_00_09.jpg">
                    </div>
                    <div class="video-item__duration">
00:12                        
                    </div>
                </a>
                <div class="video-item__content">
                    <h3 class="video-item__title">
                        <a   video-playable="130042"   href="/video/tranh-xe-container-nguoi-ngoi-xe-may-nga-nhao-va-tranh-luan-ai-dung-ai-sai-130042.htm"   
                            title="Tránh xe container, người ngồi xe máy ngã nhào và tranh luận ai đúng ai sai" 
                            summary=""
                            catname=""
                            catlink=""
                            article="0"
                        >
                            Tránh xe container, người ngồi xe máy ngã nhào và tranh luận ai đúng ai sai
                        </a>
                    </h3>
                    <div class="video-cat-row">
                        
         
                        
             
                    </div>
                    
                </div>
            </div>


                </li>
                <li>
                                <div class="video-item video-item--normal">
                <a   video-playable="130027"   href="/video/nguoi-bieu-tinh-phap-thieu-xe-hoi-dot-ngan-hang-phan-doi-du-luat-an-ninh-130027.htm"  
                    aria-label="video-Người biểu tình Pháp thiêu xe hơi, đốt ngân hàng phản đối dự luật an ninh"   
                    title="Người biểu tình Pháp thiêu xe hơi, đốt ngân hàng phản đối dự luật an ninh"
                    summary=""
                    catname=""
                    article="0"
                    class="video-item__avatar">
                    <div class="dt-thumbnail dt-thumbnail--16x9">
                        <div class="video-item-play-button"></div>
                        <img alt="Người biểu tình Pháp thiêu xe hơi, đốt ngân hàng phản đối dự luật an ninh" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/308_172/thumb-video/2020/11/29/640-x-360-mp-46028314262467986768-1606614729609/0_00_33.jpg" src="https://icdn.dantri.com.vn/zoom/308_172/filters:quality(0)/thumb-video/2020/11/29/640-x-360-mp-46028314262467986768-1606614729609/0_00_33.jpg">
                    </div>
                    <div class="video-item__duration">
01:06                        
                    </div>
                </a>
                <div class="video-item__content">
                    <h3 class="video-item__title">
                        <a   video-playable="130027"   href="/video/nguoi-bieu-tinh-phap-thieu-xe-hoi-dot-ngan-hang-phan-doi-du-luat-an-ninh-130027.htm"   
                            title="Người biểu tình Pháp thiêu xe hơi, đốt ngân hàng phản đối dự luật an ninh" 
                            summary=""
                            catname=""
                            catlink=""
                            article="0"
                        >
                            Người biểu tình Pháp thiêu xe hơi, đốt ngân hàng phản đối dự luật an ninh
                        </a>
                    </h3>
                    <div class="video-cat-row">
                        
         
                        
             
                    </div>
                    
                </div>
            </div>


                </li>

        </ul>
    </div>
</section>


<hr>
<ul class="dt-list dt-list--lg">

        <li>
            
    <div class="news-item news-item news-item--stream news-item--left2right">

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|MainList|6"
  href="/tam-long-nhan-ai/bac-si-benh-vien-bach-mai-keu-goi-giup-do-ghep-te-bao-goc-cho-ong-bo-tre-20201130005326162.htm"
  title="Bác sĩ bệnh viện Bạch Mai kêu gọi giúp đỡ ghép tế bào gốc cho ông bố trẻ">
  
  Bác sĩ bệnh viện Bạch Mai kêu gọi giúp đỡ ghép tế bào gốc cho ông bố trẻ    
</a>


  
           
            </h3>
            
                 


<a  data-utm="Home|MainList|6"
 class="news-item__avatar"   href="/tam-long-nhan-ai/bac-si-benh-vien-bach-mai-keu-goi-giup-do-ghep-te-bao-goc-cho-ong-bo-tre-20201130005326162.htm"
  title="Bác sĩ bệnh viện Bạch Mai kêu gọi giúp đỡ ghép tế bào gốc cho ông bố trẻ">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Bác sĩ bệnh viện Bạch Mai kêu gọi giúp đỡ ghép tế bào gốc cho ông bố trẻ" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/204_153/2020/11/30/bm-1-1606671863638.jpg" src="https://icdn.dantri.com.vn/zoom/204_153/filters:quality(0)/2020/11/30/bm-1-1606671863638.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           
                            <a data-utm="Home|MainList|6" class="news-item__sapo" title="Bác sĩ bệnh viện Bạch Mai kêu gọi giúp đỡ ghép tế bào gốc cho ông bố trẻ" href="/tam-long-nhan-ai/bac-si-benh-vien-bach-mai-keu-goi-giup-do-ghep-te-bao-goc-cho-ong-bo-tre-20201130005326162.htm">(Dân trí)&nbsp;- Để cứu tính mạng Đức cần ghép tế gốc, nhưng số tiền phẫu thuật lên đến 300 triệu đồng, vượt quá khả năng của gia đình. Bác sĩ bệnh viện Bạch Mai khẩn thiết kêu gọi mọi người cứu ông bố 21 tuổi.</a>
                                         <div class="news-item__meta">

                        
            <a data-utm="Home|MainList|6" data-cat-id="167" class="news-item__category" title="Tấm lòng nhân ái" href="/tam-long-nhan-ai.htm">Tấm lòng nhân ái</a>
                                                     <span class="news-item__time">6 giờ trước</span>
                </div>
                    </div>
    </div>

        </li>
        <li>
            
    <div class="news-item news-item news-item--stream news-item--left2right">

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|MainList|7"
  href="/kinh-doanh/tphcm-mot-dn-no-thue-khung-hon-373-ty-dong-asanzo-no-thue-40-ty-dong-20201129231048323.htm"
  title="TPHCM: Một DN nợ thuế &quot;khủng&quot; hơn 373 tỷ đồng; Asanzo nợ thuế 40 tỷ đồng">
  
  TPHCM: Một DN nợ thuế &quot;khủng&quot; hơn 373 tỷ đồng; Asanzo nợ thuế 40 tỷ đồng    
</a>


  
           
            </h3>
            
                 


<a  data-utm="Home|MainList|7"
 class="news-item__avatar"   href="/kinh-doanh/tphcm-mot-dn-no-thue-khung-hon-373-ty-dong-asanzo-no-thue-40-ty-dong-20201129231048323.htm"
  title="TPHCM: Một DN nợ thuế &quot;khủng&quot; hơn 373 tỷ đồng; Asanzo nợ thuế 40 tỷ đồng">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="TPHCM: Một DN nợ thuế &quot;khủng&quot; hơn 373 tỷ đồng; Asanzo nợ thuế 40 tỷ đồng" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/204_153/2020/11/29/no-thue-1-1606666052737.jpg" src="https://icdn.dantri.com.vn/zoom/204_153/filters:quality(0)/2020/11/29/no-thue-1-1606666052737.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           
                            <a data-utm="Home|MainList|7" class="news-item__sapo" title="TPHCM: Một DN nợ thuế &quot;khủng&quot; hơn 373 tỷ đồng; Asanzo nợ thuế 40 tỷ đồng" href="/kinh-doanh/tphcm-mot-dn-no-thue-khung-hon-373-ty-dong-asanzo-no-thue-40-ty-dong-20201129231048323.htm">(Dân trí)&nbsp;- Nhiều doanh nghiệp tại TPHCM đã bị "bêu tên" vì nợ tiền thuế kéo dài. Trong đó có hàng chục doanh nghiệp nợ thuế hàng trăm tỷ đồng.</a>
                                         <div class="news-item__meta">

                        
            <a data-utm="Home|MainList|7" data-cat-id="76" class="news-item__category" title="Kinh doanh" href="/kinh-doanh.htm">Kinh doanh</a>
                                                     <span class="news-item__time">7 phút trước</span>
                </div>
                    </div>
    </div>

        </li>
        <li>
            
    <div class="news-item news-item news-item--stream news-item--left2right">

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|MainList|8"
  href="/bat-dong-san/bat-dong-san-quan-8-tphcm-thoi-diem-va-co-hoi-hiem-co-20201129221440062.htm"
  title="Bất động sản Quận 8 TPHCM: Thời điểm và cơ hội hiếm có">
  
  Bất động sản Quận 8 TPHCM: Thời điểm và cơ hội hiếm có    
</a>


  
           
            </h3>
            
                 


<a  data-utm="Home|MainList|8"
 class="news-item__avatar"   href="/bat-dong-san/bat-dong-san-quan-8-tphcm-thoi-diem-va-co-hoi-hiem-co-20201129221440062.htm"
  title="Bất động sản Quận 8 TPHCM: Thời điểm và cơ hội hiếm có">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Bất động sản Quận 8 TPHCM: Thời điểm và cơ hội hiếm có" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/204_153/2020/11/29/dan-tri-top-1-home-3011-bai-rut-gondocx-1606662440570.jpeg" src="https://icdn.dantri.com.vn/zoom/204_153/filters:quality(0)/2020/11/29/dan-tri-top-1-home-3011-bai-rut-gondocx-1606662440570.jpeg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           
                            <a data-utm="Home|MainList|8" class="news-item__sapo" title="Bất động sản Quận 8 TPHCM: Thời điểm và cơ hội hiếm có" href="/bat-dong-san/bat-dong-san-quan-8-tphcm-thoi-diem-va-co-hoi-hiem-co-20201129221440062.htm">(Dân trí)&nbsp;- Quận 8 đang là điểm đến hấp dẫn cho các nhà đầu tư chạy đua tìm kiếm quỹ đất nội thành, đặc biệt khi các dự án hạ tầng từ lớn đến trọng điểm liên tục đổ bộ nơi đây.</a>
                                         <div class="news-item__meta">

                        
            <a data-utm="Home|MainList|8" data-cat-id="927" class="news-item__category" title="Bất động sản" href="/bat-dong-san.htm">Bất động sản</a>
                                                     <span class="news-item__time">1 giờ trước</span>
                </div>
                    </div>
    </div>

        </li>
        <li>
            
    <div class="news-item news-item news-item--stream news-item--left2right">

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|MainList|9"
  href="/o-to-xe-may/tranh-xe-container-nguoi-ngoi-xe-may-nga-nhao-va-tranh-luan-ai-dung-ai-sai-20201130060438230.htm"
  title="Tránh xe container, người ngồi xe máy ngã nhào và tranh luận ai đúng ai sai">
  
  Tránh xe container, người ngồi xe máy ngã nhào và tranh luận ai đúng ai sai        <i class="news-title-icon ico-news-type-video"> </i>  
  
</a>


  
           
            </h3>
            
                 


<a  data-utm="Home|MainList|9"
 class="news-item__avatar"   href="/o-to-xe-may/tranh-xe-container-nguoi-ngoi-xe-may-nga-nhao-va-tranh-luan-ai-dung-ai-sai-20201130060438230.htm"
  title="Tránh xe container, người ngồi xe máy ngã nhào và tranh luận ai đúng ai sai">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Tránh xe container, người ngồi xe máy ngã nhào và tranh luận ai đúng ai sai" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/204_153/2020/11/30/ezgifcomgifmaker-13-1606691041061.gif" src="https://icdn.dantri.com.vn/zoom/204_153/filters:quality(0)/2020/11/30/ezgifcomgifmaker-13-1606691041061.gif">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           
                            <a data-utm="Home|MainList|9" class="news-item__sapo" title="Tránh xe container, người ngồi xe máy ngã nhào và tranh luận ai đúng ai sai" href="/o-to-xe-may/tranh-xe-container-nguoi-ngoi-xe-may-nga-nhao-va-tranh-luan-ai-dung-ai-sai-20201130060438230.htm">(Dân trí)&nbsp;- Chiếc xe container bấm còi lớn khi thấy trước mặt là hai người đi xe máy đang sang đường, khiến người ngồi phía sau rời khỏi yên xe và ngã nháo nhào.</a>
                                         <div class="news-item__meta">

                        
            <a data-utm="Home|MainList|9" data-cat-id="111" class="news-item__category" title="Ô tô - Xe máy" href="/o-to-xe-may.htm">Ô tô - Xe máy</a>
                                                     <span class="news-item__time">3 giờ trước</span>
                </div>
                    </div>
    </div>

        </li>
            <li>
                            <div id="xds-53"></div>

            </li>
</ul><div class="dt-spacer"></div>
<div>
    <section class="dt-section dt-section--primary dt-section--fit mt-5">
        <header class="dt-section__header">
            <h2 class="dt-section__title text-uppercase">Tin tiêu điểm</h2>
        </header>
        <div class="dt-section__body">
          <ul class="dt-list dt-list--eq-grid dt-list--grid-2">
               <li>
                 
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|TinTieuDiem|1"
 class="news-item__avatar"   href="/an-sinh/long-bao-dung-la-hanh-trang-thien-luong-cua-moi-con-nguoi-20201128221020959.htm"
  title="&quot;Lòng bao dung là hành trang thiện lương của mỗi con người...&quot;">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="&quot;Lòng bao dung là hành trang thiện lương của mỗi con người...&quot;" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/360_240/2020/11/29/tructiep-400-tamguong-61606552027927-1606629990156.jpg" src="https://icdn.dantri.com.vn/zoom/360_240/filters:quality(0)/2020/11/29/tructiep-400-tamguong-61606552027927-1606629990156.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|TinTieuDiem|1"
  href="/an-sinh/long-bao-dung-la-hanh-trang-thien-luong-cua-moi-con-nguoi-20201128221020959.htm"
  title="&quot;Lòng bao dung là hành trang thiện lương của mỗi con người...&quot;">
  
  &quot;Lòng bao dung là hành trang thiện lương của mỗi con người...&quot;    
</a>


  
           
            </h3>
            
                                                              <div class="news-item__meta">

                        
            <a data-utm="Home|TinTieuDiem|1" data-cat-id="1001" class="news-item__category" title="An sinh" href="/an-sinh.htm">An sinh</a>
                                             </div>
                    </div>
    </div>

               </li>
               <li>
                 
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|TinTieuDiem|2"
 class="news-item__avatar"   href="/xa-hoi/di-doi-thanh-cong-qua-bom-nang-340-kg-con-nguyen-2-ngoi-no-o-pho-cua-bac-20201130002826711.htm"
  title="Di dời thành công quả bom nặng 340kg còn nguyên 2 ngòi nổ ở phố Cửa Bắc">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Di dời thành công quả bom nặng 340kg còn nguyên 2 ngòi nổ ở phố Cửa Bắc" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/360_240/2020/11/30/go-bom-12-1606670538118.jpg" src="https://icdn.dantri.com.vn/zoom/360_240/filters:quality(0)/2020/11/30/go-bom-12-1606670538118.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|TinTieuDiem|2"
  href="/xa-hoi/di-doi-thanh-cong-qua-bom-nang-340-kg-con-nguyen-2-ngoi-no-o-pho-cua-bac-20201130002826711.htm"
  title="Di dời thành công quả bom nặng 340kg còn nguyên 2 ngòi nổ ở phố Cửa Bắc">
  
  Di dời thành công quả bom nặng 340kg còn nguyên 2 ngòi nổ ở phố Cửa Bắc    
</a>


  
           
            </h3>
            
                                                              <div class="news-item__meta">

                        
            <a data-utm="Home|TinTieuDiem|2" data-cat-id="20" class="news-item__category" title="Xã hội" href="/xa-hoi.htm">Xã hội</a>
                                             </div>
                    </div>
    </div>

               </li>
               <li>
                 
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|TinTieuDiem|3"
 class="news-item__avatar"   href="/the-gioi/ong-biden-chan-thuong-do-truot-nga-khi-choi-voi-thu-cung-20201130061522056.htm"
  title="Ông Biden chấn thương do trượt ngã khi chơi với thú cưng">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Ông Biden chấn thương do trượt ngã khi chơi với thú cưng" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/360_240/2020/11/30/biden-1606691609590.jpg" src="https://icdn.dantri.com.vn/zoom/360_240/filters:quality(0)/2020/11/30/biden-1606691609590.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|TinTieuDiem|3"
  href="/the-gioi/ong-biden-chan-thuong-do-truot-nga-khi-choi-voi-thu-cung-20201130061522056.htm"
  title="Ông Biden chấn thương do trượt ngã khi chơi với thú cưng">
  
  Ông Biden chấn thương do trượt ngã khi chơi với thú cưng    
</a>


  
           
            </h3>
            
                                                              <div class="news-item__meta">

                        
            <a data-utm="Home|TinTieuDiem|3" data-cat-id="36" class="news-item__category" title="Thế giới" href="/the-gioi.htm">Thế giới</a>
                                             </div>
                    </div>
    </div>

               </li>
               <li>
                 
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|TinTieuDiem|4"
 class="news-item__avatar"   href="/the-thao/vi-sao-hlv-park-hang-seo-goi-den-9-hau-ve-canh-len-doi-tuyen-20201129231012257.htm"
  title="Vì sao HLV Park Hang Seo gọi đến 9 hậu vệ cánh lên đội tuyển?">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Vì sao HLV Park Hang Seo gọi đến 9 hậu vệ cánh lên đội tuyển?" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/360_240/2020/11/29/trong-hoang-1291120-1606665977324.jpg" src="https://icdn.dantri.com.vn/zoom/360_240/filters:quality(0)/2020/11/29/trong-hoang-1291120-1606665977324.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|TinTieuDiem|4"
  href="/the-thao/vi-sao-hlv-park-hang-seo-goi-den-9-hau-ve-canh-len-doi-tuyen-20201129231012257.htm"
  title="Vì sao HLV Park Hang Seo gọi đến 9 hậu vệ cánh lên đội tuyển?">
  
  Vì sao HLV Park Hang Seo gọi đến 9 hậu vệ cánh lên đội tuyển?    
</a>


  
           
            </h3>
            
                                                              <div class="news-item__meta">

                        
            <a data-utm="Home|TinTieuDiem|4" data-cat-id="26" class="news-item__category" title="Thể thao" href="/the-thao.htm">Thể thao</a>
                                             </div>
                    </div>
    </div>

               </li>
          </ul>
        </div>
    </section>
    <hr>
</div>

<ul class="dt-list dt-list--lg">        <li>
            
    <div class="news-item news-item news-item--stream news-item--left2right">

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|MainList|10"
  href="/suc-manh-so/i-phone-12-pro-max-chay-hang-o-viet-nam-bi-dan-buon-thoi-gia-cao-20201129234451589.htm"
  title="iPhone 12 Pro Max &quot;cháy hàng&quot; ở Việt Nam, bị dân buôn thổi giá cao">
  
  iPhone 12 Pro Max &quot;cháy hàng&quot; ở Việt Nam, bị dân buôn thổi giá cao    
</a>


  
           
            </h3>
            
                 


<a  data-utm="Home|MainList|10"
 class="news-item__avatar"   href="/suc-manh-so/i-phone-12-pro-max-chay-hang-o-viet-nam-bi-dan-buon-thoi-gia-cao-20201129234451589.htm"
  title="iPhone 12 Pro Max &quot;cháy hàng&quot; ở Việt Nam, bị dân buôn thổi giá cao">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="iPhone 12 Pro Max &quot;cháy hàng&quot; ở Việt Nam, bị dân buôn thổi giá cao" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/204_153/2020/11/29/1606667959096-1606668085091.jpg" src="https://icdn.dantri.com.vn/zoom/204_153/filters:quality(0)/2020/11/29/1606667959096-1606668085091.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           
                            <a data-utm="Home|MainList|10" class="news-item__sapo" title="iPhone 12 Pro Max &quot;cháy hàng&quot; ở Việt Nam, bị dân buôn thổi giá cao" href="/suc-manh-so/i-phone-12-pro-max-chay-hang-o-viet-nam-bi-dan-buon-thoi-gia-cao-20201129234451589.htm">(Dân trí)&nbsp;- Nguyên nhân chính đến từ lượng người dùng đặt mua máy trong năm nay tăng đột biến so với mọi năm. Thêm vào đó, trong thời gian đầu mở bán, Apple cũng chưa trả đủ hàng cho các đại lý.</a>
                                         <div class="news-item__meta">

                        
            <a data-utm="Home|MainList|10" data-cat-id="119" class="news-item__category" title="Sức mạnh số" href="/suc-manh-so.htm">Sức mạnh số</a>
                                                     <span class="news-item__time">3 giờ trước</span>
                </div>
                    </div>
    </div>

        </li>
        <li>
            
    <div class="news-item news-item news-item--stream news-item--left2right">

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|MainList|11"
  href="/giao-duc-huong-nghiep/bo-gddt-tran-tinh-ve-trach-nhiem-lien-quan-toi-sai-pham-truong-dh-dong-do-20201130063631189.htm"
  title="Bộ GD-ĐT trần tình về trách nhiệm liên quan tới sai phạm trường ĐH Đông Đô">
  
  Bộ GD-ĐT trần tình về trách nhiệm liên quan tới sai phạm trường ĐH Đông Đô    
</a>


  
           
            </h3>
            
                 


<a  data-utm="Home|MainList|11"
 class="news-item__avatar"   href="/giao-duc-huong-nghiep/bo-gddt-tran-tinh-ve-trach-nhiem-lien-quan-toi-sai-pham-truong-dh-dong-do-20201130063631189.htm"
  title="Bộ GD-ĐT trần tình về trách nhiệm liên quan tới sai phạm trường ĐH Đông Đô">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Bộ GD-ĐT trần tình về trách nhiệm liên quan tới sai phạm trường ĐH Đông Đô" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/204_153/2020/05/15/dh-dong-do-1589542215410.jpg" src="https://icdn.dantri.com.vn/zoom/204_153/filters:quality(0)/2020/05/15/dh-dong-do-1589542215410.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           
                            <a data-utm="Home|MainList|11" class="news-item__sapo" title="Bộ GD-ĐT trần tình về trách nhiệm liên quan tới sai phạm trường ĐH Đông Đô" href="/giao-duc-huong-nghiep/bo-gddt-tran-tinh-ve-trach-nhiem-lien-quan-toi-sai-pham-truong-dh-dong-do-20201130063631189.htm">(Dân trí)&nbsp;- Bộ Giáo dục và Đào tạo chính thức thông tin một loạt vấn đề liên quan tới sai phạm đào tạo văn bằng 2 của Trường Đại học Đông Đô.</a>
                                         <div class="news-item__meta">

                        
            <a data-utm="Home|MainList|11" data-cat-id="25" class="news-item__category" title="Giáo dục - Hướng nghiệp" href="/giao-duc-huong-nghiep.htm">Giáo dục - Hướng nghiệp</a>
                                                     <span class="news-item__time">2 giờ trước</span>
                </div>
                    </div>
    </div>

        </li>
        <li>
            
    <div class="news-item news-item news-item--stream news-item--left2right">

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|MainList|12"
  href="/an-sinh/long-bao-dung-la-hanh-trang-thien-luong-cua-moi-con-nguoi-20201128221020959.htm"
  title="&quot;Lòng bao dung là hành trang thiện lương của mỗi con người...&quot;">
  
  &quot;Lòng bao dung là hành trang thiện lương của mỗi con người...&quot;    
</a>


  
           
            </h3>
            
                 


<a  data-utm="Home|MainList|12"
 class="news-item__avatar"   href="/an-sinh/long-bao-dung-la-hanh-trang-thien-luong-cua-moi-con-nguoi-20201128221020959.htm"
  title="&quot;Lòng bao dung là hành trang thiện lương của mỗi con người...&quot;">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="&quot;Lòng bao dung là hành trang thiện lương của mỗi con người...&quot;" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/204_153/2020/11/29/tructiep-400-tamguong-61606552027927-1606629990156.jpg" src="https://icdn.dantri.com.vn/zoom/204_153/filters:quality(0)/2020/11/29/tructiep-400-tamguong-61606552027927-1606629990156.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           
                            <a data-utm="Home|MainList|12" class="news-item__sapo" title="&quot;Lòng bao dung là hành trang thiện lương của mỗi con người...&quot;" href="/an-sinh/long-bao-dung-la-hanh-trang-thien-luong-cua-moi-con-nguoi-20201128221020959.htm">(Dân trí)&nbsp;- "Các đại biểu gặp mặt là biểu tượng cho đức hy sinh, lòng bao dung, nhân ái. Đó còn là mạch nguồn nuôi dưỡng, ngọn lửa sưởi ấm và giúp hiện thực hóa ước mơ hạnh phúc của những mảnh đời bất hạnh...".</a>
                                         <div class="news-item__meta">

                        
            <a data-utm="Home|MainList|12" data-cat-id="1001" class="news-item__category" title="An sinh" href="/an-sinh.htm">An sinh</a>
                                                     <span class="news-item__time">Thứ Bảy 28/11/2020 - 22:10</span>
                </div>
                    </div>
    </div>

        </li>
        <li>
            
    <div class="news-item news-item news-item--stream news-item--left2right">

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|MainList|13"
  href="/van-hoa/btc-hoa-khoi-du-lich-chung-toi-se-co-giai-trinh-voi-cuc-ntbd-20201129221504041.htm"
  title="BTC Hoa khôi Du lịch: &quot;Chúng tôi sẽ có giải trình với Cục NTBD&quot;">
  
  BTC Hoa khôi Du lịch: &quot;Chúng tôi sẽ có giải trình với Cục NTBD&quot;    
</a>


  
           
            </h3>
            
                 


<a  data-utm="Home|MainList|13"
 class="news-item__avatar"   href="/van-hoa/btc-hoa-khoi-du-lich-chung-toi-se-co-giai-trinh-voi-cuc-ntbd-20201129221504041.htm"
  title="BTC Hoa khôi Du lịch: &quot;Chúng tôi sẽ có giải trình với Cục NTBD&quot;">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="BTC Hoa khôi Du lịch: &quot;Chúng tôi sẽ có giải trình với Cục NTBD&quot;" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/204_153/2020/11/29/hoakhoi-2-1606662894392.jpeg" src="https://icdn.dantri.com.vn/zoom/204_153/filters:quality(0)/2020/11/29/hoakhoi-2-1606662894392.jpeg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           
                            <a data-utm="Home|MainList|13" class="news-item__sapo" title="BTC Hoa khôi Du lịch: &quot;Chúng tôi sẽ có giải trình với Cục NTBD&quot;" href="/van-hoa/btc-hoa-khoi-du-lich-chung-toi-se-co-giai-trinh-voi-cuc-ntbd-20201129221504041.htm">(Dân trí)&nbsp;- "Cuộc thi nếu không trao được giải nhất thì không nên gượng ép, việc bỏ ngỏ danh hiệu cao quý nhất không có nghĩa cuộc thi có vấn đề về mặt tổ chức...", Trưởng BTC Hoa khôi Du lịch Việt Nam cho biết.</a>
                                         <div class="news-item__meta">

                        
            <a data-utm="Home|MainList|13" data-cat-id="730" class="news-item__category" title="Văn hóa" href="/van-hoa.htm">Văn hóa</a>
                                                     <span class="news-item__time">2 giờ trước</span>
                </div>
                    </div>
    </div>

        </li>
            <li>
                            <div id="xds-54"></div>

            </li>
</ul>            <div title="Đáng chú ý" remarkable-news="home1"></div>
<ul class="dt-list dt-list--lg">        <li>
            
    <div class="news-item news-item news-item--stream news-item--left2right">

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|MainList|14"
  href="/giai-tri/bang-kieu-noi-gi-truoc-thong-tin-moi-nam-tro-cap-cho-cac-con-2-ty-dong-20201130091259019.htm"
  title="Bằng Kiều nói gì trước thông tin &quot;mỗi năm trợ cấp cho các con 2 tỷ đồng&quot;?">
  
  Bằng Kiều nói gì trước thông tin &quot;mỗi năm trợ cấp cho các con 2 tỷ đồng&quot;?    
</a>


  
           
            </h3>
            
                 


<a  data-utm="Home|MainList|14"
 class="news-item__avatar"   href="/giai-tri/bang-kieu-noi-gi-truoc-thong-tin-moi-nam-tro-cap-cho-cac-con-2-ty-dong-20201130091259019.htm"
  title="Bằng Kiều nói gì trước thông tin &quot;mỗi năm trợ cấp cho các con 2 tỷ đồng&quot;?">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Bằng Kiều nói gì trước thông tin &quot;mỗi năm trợ cấp cho các con 2 tỷ đồng&quot;?" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/204_153/2020/11/30/34-1606702323882.jpg" src="https://icdn.dantri.com.vn/zoom/204_153/filters:quality(0)/2020/11/30/34-1606702323882.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           
                            <a data-utm="Home|MainList|14" class="news-item__sapo" title="Bằng Kiều nói gì trước thông tin &quot;mỗi năm trợ cấp cho các con 2 tỷ đồng&quot;?" href="/giai-tri/bang-kieu-noi-gi-truoc-thong-tin-moi-nam-tro-cap-cho-cac-con-2-ty-dong-20201130091259019.htm">(Dân trí)&nbsp;- Nam ca sĩ cho biết, anh chưa từng chia sẻ với truyền thông về số tiền trợ cấp mỗi năm cho vợ cũ Trizzie Phương Trinh và ba con trai,  nhưng bạn bè, người thân biết được đã vô tình lộ ra…</a>
                                         <div class="news-item__meta">

                        
            <a data-utm="Home|MainList|14" data-cat-id="23" class="news-item__category" title="Giải trí" href="/giai-tri.htm">Giải trí</a>
                                                     <span class="news-item__time">14 phút trước</span>
                </div>
                    </div>
    </div>

        </li>
        <li>
            
    <div class="news-item news-item news-item--stream news-item--left2right">

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|MainList|15"
  href="/du-lich/gia-dinh-3-the-he-lam-banh-day-nua-dem-ram-rap-gia-ngay-het-300-kg-gao-nep-20201130073711001.htm"
  title="Gia đình 3 thế hệ làm bánh dày: Nửa đêm rầm rập giã, ngày hết 300kg gạo nếp">
  
  Gia đình 3 thế hệ làm bánh dày: Nửa đêm rầm rập giã, ngày hết 300kg gạo nếp    
</a>


  
           
            </h3>
            
                 


<a  data-utm="Home|MainList|15"
 class="news-item__avatar"   href="/du-lich/gia-dinh-3-the-he-lam-banh-day-nua-dem-ram-rap-gia-ngay-het-300-kg-gao-nep-20201130073711001.htm"
  title="Gia đình 3 thế hệ làm bánh dày: Nửa đêm rầm rập giã, ngày hết 300kg gạo nếp">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Gia đình 3 thế hệ làm bánh dày: Nửa đêm rầm rập giã, ngày hết 300kg gạo nếp" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/204_153/2020/11/30/gif-banh-day-1606696089552.gif" src="https://icdn.dantri.com.vn/zoom/204_153/filters:quality(0)/2020/11/30/gif-banh-day-1606696089552.gif">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           
                            <a data-utm="Home|MainList|15" class="news-item__sapo" title="Gia đình 3 thế hệ làm bánh dày: Nửa đêm rầm rập giã, ngày hết 300kg gạo nếp" href="/du-lich/gia-dinh-3-the-he-lam-banh-day-nua-dem-ram-rap-gia-ngay-het-300-kg-gao-nep-20201130073711001.htm">(Dân trí)&nbsp;- Mỗi ngày, vợ chồng anh Sơn (Văn Lâm, Hưng Yên) cùng 5 người thợ tất bật giã bánh dày từ 1 giờ chiều đến 12 giờ đêm, làm ra hàng nghìn cặp bánh dày chay và hàng trăm chiếc bánh dày đỗ dải khắp Hà Nội.</a>
                                         <div class="news-item__meta">

                        
            <a data-utm="Home|MainList|15" data-cat-id="835" class="news-item__category" title="Du Lịch" href="/du-lich.htm">Du Lịch</a>
                                                     <span class="news-item__time">2 giờ trước</span>
                </div>
                    </div>
    </div>

        </li>
        <li>
            
    <div class="news-item news-item news-item--stream news-item--left2right">

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|MainList|16"
  href="/phap-luat/muon-nghe-doi-tien-lua-dao-hang-chuc-ti-dong-cua-nguoi-dan-20201130073653303.htm"
  title="&quot;Mượn&quot; nghề đổi tiền lừa đảo hàng chục tỉ đồng của người dân">
  
  &quot;Mượn&quot; nghề đổi tiền lừa đảo hàng chục tỉ đồng của người dân    
</a>


  
           
            </h3>
            
                 


<a  data-utm="Home|MainList|16"
 class="news-item__avatar"   href="/phap-luat/muon-nghe-doi-tien-lua-dao-hang-chuc-ti-dong-cua-nguoi-dan-20201130073653303.htm"
  title="&quot;Mượn&quot; nghề đổi tiền lừa đảo hàng chục tỉ đồng của người dân">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="&quot;Mượn&quot; nghề đổi tiền lừa đảo hàng chục tỉ đồng của người dân" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/204_153/2020/11/30/doitienedited-1606697800222.jpg" src="https://icdn.dantri.com.vn/zoom/204_153/filters:quality(0)/2020/11/30/doitienedited-1606697800222.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           
                            <a data-utm="Home|MainList|16" class="news-item__sapo" title="&quot;Mượn&quot; nghề đổi tiền lừa đảo hàng chục tỉ đồng của người dân" href="/phap-luat/muon-nghe-doi-tien-lua-dao-hang-chuc-ti-dong-cua-nguoi-dan-20201130073653303.htm">(Dân trí)&nbsp;- Nhiều người dân sinh sống ở vùng biên đã "sập bẫy" một đối tượng hành nghề đổi tiền (nhưng thực chất là lừa đảo) với số tiền lên tới hàng chục tỉ đồng.</a>
                                         <div class="news-item__meta">

                        
            <a data-utm="Home|MainList|16" data-cat-id="170" class="news-item__category" title="Pháp luật" href="/phap-luat.htm">Pháp luật</a>
                                                     <span class="news-item__time">1 giờ trước</span>
                </div>
                    </div>
    </div>

        </li>
        <li>
            
    <div class="news-item news-item news-item--stream news-item--left2right">

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|MainList|17"
  href="/nhip-song-tre/3-thieu-nu-so-huu-than-hinh-goi-cam-hot-nhat-thang-11-vua-qua-20201129151113857.htm"
  title="3 thiếu nữ sở hữu thân hình gợi cảm &quot;hot&quot; nhất tháng 11 vừa qua">
  
  3 thiếu nữ sở hữu thân hình gợi cảm &quot;hot&quot; nhất tháng 11 vừa qua    
</a>


  
           
            </h3>
            
                 


<a  data-utm="Home|MainList|17"
 class="news-item__avatar"   href="/nhip-song-tre/3-thieu-nu-so-huu-than-hinh-goi-cam-hot-nhat-thang-11-vua-qua-20201129151113857.htm"
  title="3 thiếu nữ sở hữu thân hình gợi cảm &quot;hot&quot; nhất tháng 11 vừa qua">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="3 thiếu nữ sở hữu thân hình gợi cảm &quot;hot&quot; nhất tháng 11 vừa qua" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/204_153/2020/11/29/thumb-1606637443407.jpg" src="https://icdn.dantri.com.vn/zoom/204_153/filters:quality(0)/2020/11/29/thumb-1606637443407.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           
                            <a data-utm="Home|MainList|17" class="news-item__sapo" title="3 thiếu nữ sở hữu thân hình gợi cảm &quot;hot&quot; nhất tháng 11 vừa qua" href="/nhip-song-tre/3-thieu-nu-so-huu-than-hinh-goi-cam-hot-nhat-thang-11-vua-qua-20201129151113857.htm">(Dân trí)&nbsp;- Kim Chi, Phương Anh, Thu Hằng nhận được sự chú ý từ phía cư dân mạng bởi nhan sắc khả ái cùng vóc dáng quyến rũ "hút hồn".</a>
                                         <div class="news-item__meta">

                        
            <a data-utm="Home|MainList|17" data-cat-id="135" class="news-item__category" title="Nhịp sống trẻ" href="/nhip-song-tre.htm">Nhịp sống trẻ</a>
                                                     <span class="news-item__time">2 giờ trước</span>
                </div>
                    </div>
    </div>

        </li>
            <li>
                            <div id="xds-59"></div>

            </li>
</ul>    <section class="dt-section dt-section--secondary dt-section--event dt-section--fit mt-5">
        <header class="dt-section__header media">
            <div class="media-body">
                <div class="dt-section__subtitle">Sự kiện</div>
                <h2 class="dt-section__title">
                    <a title="V-League 2020" href="/event/v-league-2020-3857.htm">V-League 2020</a>
                </h2>
            </div>
            <a data-utm="Home|Box_SuKien|1" class="btn btn-blue btn-pill btn-md ml-2" href="/event.htm">Sự kiện khác</a>
        </header>
        <div class="dt-section__body">
          <ul class="dt-list dt-list--eq-grid dt-list--grid-2">
                          <li>
                <div class="news-item news-item--bordered">
                  <a data-utm="Home|Box_SuKien|1" class="news-item__avatar" href="/the-thao/van-quyet-doat-giai-cau-thu-xuat-sac-nhat-v-league-2020-20201120230321719.htm">
                    <div class="dt-thumbnail dt-thumbnail--3x2">
                      <img src="https://icdn.dantri.com.vn/zoom/480_320/2020/11/20/van-quyet-1605887966708.jpg" alt="Văn Quyết đoạt giải Cầu thủ xuất sắc nhất V-League 2020">
                    </div>
                  </a>
                  <div class="news-item__content">
                    <h3 class="news-item__title">
                      <a data-utm="Home|Box_SuKien|1" title="Văn Quyết đoạt giải Cầu thủ xuất sắc nhất V-League 2020" href="/the-thao/van-quyet-doat-giai-cau-thu-xuat-sac-nhat-v-league-2020-20201120230321719.htm">Văn Quyết đoạt giải Cầu thủ xuất sắc nhất V-League 2020</a>
                    </h3>
                    <div class="text-secondary mt-2">Thể thao</div>
                  </div>
                </div>
              </li>
              <li>
                <div class="news-item news-item--bordered">
                  <a data-utm="Home|Box_SuKien|2" class="news-item__avatar" href="/the-thao/v-league-ket-thuc-tron-ven-nhieu-giai-dong-nam-a-chua-hoan-tat-20201117082616111.htm">
                    <div class="dt-thumbnail dt-thumbnail--3x2">
                      <img src="https://icdn.dantri.com.vn/zoom/480_320/2020/11/17/thai-league-1605576254332.jpg" alt="V-League kết thúc trọn vẹn, nhiều giải Đông Nam Á chưa hoàn tất">
                    </div>
                  </a>
                  <div class="news-item__content">
                    <h3 class="news-item__title">
                      <a data-utm="Home|Box_SuKien|2" title="V-League kết thúc trọn vẹn, nhiều giải Đông Nam Á chưa hoàn tất" href="/the-thao/v-league-ket-thuc-tron-ven-nhieu-giai-dong-nam-a-chua-hoan-tat-20201117082616111.htm">V-League kết thúc trọn vẹn, nhiều giải Đông Nam Á chưa hoàn tất</a>
                    </h3>
                    <div class="text-secondary mt-2">Thể thao</div>
                  </div>
                </div>
              </li>
          </ul>
        </div>
    </section>
    <hr>
<ul class="dt-list dt-list--lg">        <li>
            
    <div class="news-item news-item news-item--stream news-item--left2right">

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|MainList|18"
  href="/ban-doc/hoa-giai-van-ban-la-khien-nguoi-dan-phan-no-tai-tp-nha-trang-20201129090653522.htm"
  title="Hóa giải văn bản &quot;lạ&quot; khiến người dân phẫn nộ tại TP Nha Trang!">
  
  Hóa giải văn bản &quot;lạ&quot; khiến người dân phẫn nộ tại TP Nha Trang!    
</a>


  
           
            </h3>
            
                 


<a  data-utm="Home|MainList|18"
 class="news-item__avatar"   href="/ban-doc/hoa-giai-van-ban-la-khien-nguoi-dan-phan-no-tai-tp-nha-trang-20201129090653522.htm"
  title="Hóa giải văn bản &quot;lạ&quot; khiến người dân phẫn nộ tại TP Nha Trang!">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Hóa giải văn bản &quot;lạ&quot; khiến người dân phẫn nộ tại TP Nha Trang!" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/204_153/2020/11/29/anh-3-1606614999383.jpg" src="https://icdn.dantri.com.vn/zoom/204_153/filters:quality(0)/2020/11/29/anh-3-1606614999383.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           
                            <a data-utm="Home|MainList|18" class="news-item__sapo" title="Hóa giải văn bản &quot;lạ&quot; khiến người dân phẫn nộ tại TP Nha Trang!" href="/ban-doc/hoa-giai-van-ban-la-khien-nguoi-dan-phan-no-tai-tp-nha-trang-20201129090653522.htm">(Dân trí)&nbsp;- Chiều 28/11, ông Nguyễn Quốc Bảo, quyền Chủ tịch UBND xã Vĩnh Thạnh (TP Nha Trang) cho biết sau loạt bài từ báo Dân trí, bờ kè chống sạt lở sông Cái (xã Vĩnh Thạnh) vừa được thi công trở lại.</a>
                                         <div class="news-item__meta">

                        
            <a data-utm="Home|MainList|18" data-cat-id="202" class="news-item__category" title="Bạn đọc" href="/ban-doc.htm">Bạn đọc</a>
                                                     <span class="news-item__time">2 giờ trước</span>
                </div>
                    </div>
    </div>

        </li>
        <li>
            
    <div class="news-item news-item news-item--stream news-item--left2right">

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|MainList|19"
  href="/tinh-yeu-gioi-tinh/co-du-9-dieu-sau-de-khien-tinh-nhan-yeu-say-dam-20201129211624904.htm"
  title="Có đủ 9 điều sau dễ khiến tình nhân yêu say đắm">
  
  Có đủ 9 điều sau dễ khiến tình nhân yêu say đắm    
</a>


  
           
            </h3>
            
                 


<a  data-utm="Home|MainList|19"
 class="news-item__avatar"   href="/tinh-yeu-gioi-tinh/co-du-9-dieu-sau-de-khien-tinh-nhan-yeu-say-dam-20201129211624904.htm"
  title="Có đủ 9 điều sau dễ khiến tình nhân yêu say đắm">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Có đủ 9 điều sau dễ khiến tình nhân yêu say đắm" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/204_153/2020/11/29/screen-shot-20201129-at-91509-pm-1606659322595.png" src="https://icdn.dantri.com.vn/zoom/204_153/filters:quality(0)/2020/11/29/screen-shot-20201129-at-91509-pm-1606659322595.png">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           
                            <a data-utm="Home|MainList|19" class="news-item__sapo" title="Có đủ 9 điều sau dễ khiến tình nhân yêu say đắm" href="/tinh-yeu-gioi-tinh/co-du-9-dieu-sau-de-khien-tinh-nhan-yeu-say-dam-20201129211624904.htm">(Dân trí)&nbsp;- Tình yêu thường đến vào những lúc không ngờ nhất, và ngay cả khi đã tìm thấy nó, chúng ta vẫn tự hỏi điều gì khiến mình trở nên đắm say một người đến thế.</a>
                                         <div class="news-item__meta">

                        
            <a data-utm="Home|MainList|19" data-cat-id="130" class="news-item__category" title="Tình yêu - Giới tính" href="/tinh-yeu-gioi-tinh.htm">Tình yêu - Giới tính</a>
                                                     <span class="news-item__time">2 giờ trước</span>
                </div>
                    </div>
    </div>

        </li>
        <li>
            
    <div class="news-item news-item news-item--stream news-item--left2right">

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|MainList|20"
  href="/khoa-hoc-cong-nghe/qua-cau-phat-sang-khong-lo-bay-qua-troi-nhat-ban-20201130070713596.htm"
  title="Quả cầu phát sáng khổng lồ bay qua trời Nhật Bản">
  
  Quả cầu phát sáng khổng lồ bay qua trời Nhật Bản    
</a>


  
           
            </h3>
            
                 


<a  data-utm="Home|MainList|20"
 class="news-item__avatar"   href="/khoa-hoc-cong-nghe/qua-cau-phat-sang-khong-lo-bay-qua-troi-nhat-ban-20201130070713596.htm"
  title="Quả cầu phát sáng khổng lồ bay qua trời Nhật Bản">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Quả cầu phát sáng khổng lồ bay qua trời Nhật Bản" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/204_153/2020/11/30/sao-bang-1606694783296.gif" src="https://icdn.dantri.com.vn/zoom/204_153/filters:quality(0)/2020/11/30/sao-bang-1606694783296.gif">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           
                            <a data-utm="Home|MainList|20" class="news-item__sapo" title="Quả cầu phát sáng khổng lồ bay qua trời Nhật Bản" href="/khoa-hoc-cong-nghe/qua-cau-phat-sang-khong-lo-bay-qua-troi-nhat-ban-20201130070713596.htm">(Dân trí)&nbsp;- Một quầng sáng đặc biệt và cũng có thể là một ngôi sao băng lớn rực rỡ đã xuất hiện vào rạng sáng ngày Chủ nhật ở miền tây Nhật Bản.</a>
                                         <div class="news-item__meta">

                        
            <a data-utm="Home|MainList|20" data-cat-id="894" class="news-item__category" title="Khoa học - Công nghệ" href="/khoa-hoc-cong-nghe.htm">Khoa học - Công nghệ</a>
                                                     <span class="news-item__time">2 giờ trước</span>
                </div>
                    </div>
    </div>

        </li>
        <li>
            
    <div class="news-item news-item news-item--stream news-item--left2right">

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|MainList|21"
  href="/giao-duc-huong-nghiep/giai-phap-xoa-bo-co-quan-chu-quan-de-dai-hoc-duoc-tu-chu-dung-nghia-20201129091057310.htm"
  title="Giải pháp xóa bỏ cơ quan chủ quản để đại học được tự chủ đúng nghĩa">
  
  Giải pháp xóa bỏ cơ quan chủ quản để đại học được tự chủ đúng nghĩa    
</a>


  
           
            </h3>
            
                 


<a  data-utm="Home|MainList|21"
 class="news-item__avatar"   href="/giao-duc-huong-nghiep/giai-phap-xoa-bo-co-quan-chu-quan-de-dai-hoc-duoc-tu-chu-dung-nghia-20201129091057310.htm"
  title="Giải pháp xóa bỏ cơ quan chủ quản để đại học được tự chủ đúng nghĩa">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Giải pháp xóa bỏ cơ quan chủ quản để đại học được tự chủ đúng nghĩa" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/204_153/2020/05/30/de-thi-1590808581277.jpg" src="https://icdn.dantri.com.vn/zoom/204_153/filters:quality(0)/2020/05/30/de-thi-1590808581277.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           
                            <a data-utm="Home|MainList|21" class="news-item__sapo" title="Giải pháp xóa bỏ cơ quan chủ quản để đại học được tự chủ đúng nghĩa" href="/giao-duc-huong-nghiep/giai-phap-xoa-bo-co-quan-chu-quan-de-dai-hoc-duoc-tu-chu-dung-nghia-20201129091057310.htm">(Dân trí)&nbsp;- Nếu như các trường ĐH được giao các quyền tự chủ đầy đủ, toàn diện thì chắc chắn vai trò của CQCQ sẽ không còn nữa, cái "vai trò" ấy sẽ tự biến mất, không cần một quyết định hành chính nào.</a>
                                         <div class="news-item__meta">

                        
            <a data-utm="Home|MainList|21" data-cat-id="25" class="news-item__category" title="Giáo dục - Hướng nghiệp" href="/giao-duc-huong-nghiep.htm">Giáo dục - Hướng nghiệp</a>
                                                     <span class="news-item__time">Chủ nhật 29/11/2020 - 09:11</span>
                </div>
                    </div>
    </div>

        </li>
            <li>
                            <div id="xds-60"></div>

            </li>
</ul>
            </ul>
            <ul class="dt-list dt-list--lg">
            <li>

                           <div remarkable-news="home2" title="Đừng bỏ lỡ"></div><hr>            </li>
            </ul>
            <ul class="dt-list dt-list--lg">
         <ul class="dt-list dt-list--lg">        <li>
            
    <div class="news-item news-item news-item--stream news-item--left2right">

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|MainList|22"
  href="/du-hoc/trung-quoc-2500-hoc-sinh-tap-the-duc-nhu-choi-tro-ran-san-moi-20201129223357335.htm"
  title="Trung Quốc: 2500 học sinh tập thể dục như chơi trò rắn săn mồi">
  
  Trung Quốc: 2500 học sinh tập thể dục như chơi trò rắn săn mồi        <i class="news-title-icon ico-news-type-video"> </i>  
  
</a>


  
           
            </h3>
            
                 


<a  data-utm="Home|MainList|22"
 class="news-item__avatar"   href="/du-hoc/trung-quoc-2500-hoc-sinh-tap-the-duc-nhu-choi-tro-ran-san-moi-20201129223357335.htm"
  title="Trung Quốc: 2500 học sinh tập thể dục như chơi trò rắn săn mồi">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Trung Quốc: 2500 học sinh tập thể dục như chơi trò rắn săn mồi" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/204_153/2020/11/29/hoc-sinh-trung-quoc-tap-the-duc-nhu-choi-tro-ran-san-moidocx-1606663930846.jpeg" src="https://icdn.dantri.com.vn/zoom/204_153/filters:quality(0)/2020/11/29/hoc-sinh-trung-quoc-tap-the-duc-nhu-choi-tro-ran-san-moidocx-1606663930846.jpeg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           
                            <a data-utm="Home|MainList|22" class="news-item__sapo" title="Trung Quốc: 2500 học sinh tập thể dục như chơi trò rắn săn mồi" href="/du-hoc/trung-quoc-2500-hoc-sinh-tap-the-duc-nhu-choi-tro-ran-san-moi-20201129223357335.htm">(Dân trí)&nbsp;- Hình ảnh gần 2.500 học sinh một trường học tại Trung Quốc tập thể dục, chạy thay đổi đội hình giống như game Snake gây bão mạng xã hội Trung Quốc.</a>
                                         <div class="news-item__meta">

                        
            <a data-utm="Home|MainList|22" data-cat-id="734" class="news-item__category" title="Du học" href="/du-hoc.htm">Du học</a>
                                                     <span class="news-item__time">2 giờ trước</span>
                </div>
                    </div>
    </div>

        </li>
        <li>
            
    <div class="news-item news-item news-item--stream news-item--left2right">

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|MainList|23"
  href="/doi-song/cuoc-song-cua-nguoi-dan-ong-viet-dau-tien-sinh-con-sau-ly-hon-20201130071943887.htm"
  title="Cuộc sống của &quot;người đàn ông Việt đầu tiên sinh con&quot; sau ly hôn">
  
  Cuộc sống của &quot;người đàn ông Việt đầu tiên sinh con&quot; sau ly hôn    
</a>


  
           
            </h3>
            
                 


<a  data-utm="Home|MainList|23"
 class="news-item__avatar"   href="/doi-song/cuoc-song-cua-nguoi-dan-ong-viet-dau-tien-sinh-con-sau-ly-hon-20201130071943887.htm"
  title="Cuộc sống của &quot;người đàn ông Việt đầu tiên sinh con&quot; sau ly hôn">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Cuộc sống của &quot;người đàn ông Việt đầu tiên sinh con&quot; sau ly hôn" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/204_153/2020/11/30/cuoc-song-cua-nguoi-dan-ong-viet-dau-tien-sinh-con-sau-ly-hon-2-1606695442214.jpg" src="https://icdn.dantri.com.vn/zoom/204_153/filters:quality(0)/2020/11/30/cuoc-song-cua-nguoi-dan-ong-viet-dau-tien-sinh-con-sau-ly-hon-2-1606695442214.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           
                            <a data-utm="Home|MainList|23" class="news-item__sapo" title="Cuộc sống của &quot;người đàn ông Việt đầu tiên sinh con&quot; sau ly hôn" href="/doi-song/cuoc-song-cua-nguoi-dan-ong-viet-dau-tien-sinh-con-sau-ly-hon-20201130071943887.htm">Lúc Khang sinh con gái đầu lòng, cuộc hôn nhân nổi tiếng của anh cũng gần rạn nứt. Chia tay nhau giữa lúc con chưa đầy tuổi, một mình anh tất bật trong vai trò vừa làm cha lẫn mẹ.</a>
                                         <div class="news-item__meta">

                        
            <a data-utm="Home|MainList|23" data-cat-id="844" class="news-item__category" title="Đời sống" href="/doi-song.htm">Đời sống</a>
                                                     <span class="news-item__time">2 giờ trước</span>
                </div>
                    </div>
    </div>

        </li>
        <li>
            
    <div class="news-item news-item news-item--stream news-item--left2right">

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|MainList|24"
  href="/chuyen-la/ben-trong-ngoi-nha-cua-nguoi-phu-nu-chung-song-voi-480-con-meo-12-chu-cho-20201129190359320.htm"
  title="Bên trong ngôi nhà của người phụ nữ chung sống với 480 con mèo, 12 chú chó">
  
  Bên trong ngôi nhà của người phụ nữ chung sống với 480 con mèo, 12 chú chó    
</a>


  
           
            </h3>
            
                 


<a  data-utm="Home|MainList|24"
 class="news-item__avatar"   href="/chuyen-la/ben-trong-ngoi-nha-cua-nguoi-phu-nu-chung-song-voi-480-con-meo-12-chu-cho-20201129190359320.htm"
  title="Bên trong ngôi nhà của người phụ nữ chung sống với 480 con mèo, 12 chú chó">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Bên trong ngôi nhà của người phụ nữ chung sống với 480 con mèo, 12 chú chó" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/204_153/2020/11/29/12763988521358434232172244854513967348789470-o-1606651232469.jpg" src="https://icdn.dantri.com.vn/zoom/204_153/filters:quality(0)/2020/11/29/12763988521358434232172244854513967348789470-o-1606651232469.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           
                            <a data-utm="Home|MainList|24" class="news-item__sapo" title="Bên trong ngôi nhà của người phụ nữ chung sống với 480 con mèo, 12 chú chó" href="/chuyen-la/ben-trong-ngoi-nha-cua-nguoi-phu-nu-chung-song-voi-480-con-meo-12-chu-cho-20201129190359320.htm">(Dân trí)&nbsp;- Maryam al-Balushi, một người yêu động vật đến từ Muscat (Oman), chia sẻ ngôi nhà của mình với 480 con mèo, hầu hết là mèo đi lạc và 12 con chó, chi gần 8.000 USD/ tháng cho thức ăn và chăm sóc thú y.</a>
                                         <div class="news-item__meta">

                        
            <a data-utm="Home|MainList|24" data-cat-id="132" class="news-item__category" title="Chuyện lạ" href="/chuyen-la.htm">Chuyện lạ</a>
                                                     <span class="news-item__time">4 giờ trước</span>
                </div>
                    </div>
    </div>

        </li>
        <li>
            
    <div class="news-item news-item news-item--stream news-item--left2right">

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|MainList|25"
  href="/blog/nguoi-tot-chung-ta-tuong-it-nhung-khong-phai-boi-da-so-ho-tot-tham-lang-20201130013509395.htm"
  title="Người tốt, chúng ta tưởng ít nhưng không phải, bởi đa số họ &quot;tốt thầm lặng&quot;">
  
  Người tốt, chúng ta tưởng ít nhưng không phải, bởi đa số họ &quot;tốt thầm lặng&quot;    
</a>


  
           
            </h3>
            
                 


<a  data-utm="Home|MainList|25"
 class="news-item__avatar"   href="/blog/nguoi-tot-chung-ta-tuong-it-nhung-khong-phai-boi-da-so-ho-tot-tham-lang-20201130013509395.htm"
  title="Người tốt, chúng ta tưởng ít nhưng không phải, bởi đa số họ &quot;tốt thầm lặng&quot;">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Người tốt, chúng ta tưởng ít nhưng không phải, bởi đa số họ &quot;tốt thầm lặng&quot;" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/204_153/2020/11/30/lamtuthien-1-1606674696007.jpg" src="https://icdn.dantri.com.vn/zoom/204_153/filters:quality(0)/2020/11/30/lamtuthien-1-1606674696007.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           
                            <a data-utm="Home|MainList|25" class="news-item__sapo" title="Người tốt, chúng ta tưởng ít nhưng không phải, bởi đa số họ &quot;tốt thầm lặng&quot;" href="/blog/nguoi-tot-chung-ta-tuong-it-nhung-khong-phai-boi-da-so-ho-tot-tham-lang-20201130013509395.htm">(Dân trí)&nbsp;- Với nhiều người có chút bi quan trong cuộc sống, đôi khi người ta hay nói: Sao ngày nay còn ít người tốt quá vậy?, tìm đâu ra những người tốt bây giờ?... Nhưng thực tế không phải vậy.</a>
                                         <div class="news-item__meta">

                        
            <a data-utm="Home|MainList|25" data-cat-id="702" class="news-item__category" title="Blog" href="/blog.htm">Blog</a>
                                                     <span class="news-item__time">8 giờ trước</span>
                </div>
                    </div>
    </div>

        </li>
        <li>
            
    <div class="news-item news-item news-item--stream news-item--left2right">

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|MainList|26"
  href="/dien-dan/dau-tranh-tranh-dau-20201128071041388.htm"
  title="Đấu tranh, tránh đâu?">
  
  Đấu tranh, tránh đâu?    
</a>


  
           
            </h3>
            
                 


<a  data-utm="Home|MainList|26"
 class="news-item__avatar"   href="/dien-dan/dau-tranh-tranh-dau-20201128071041388.htm"
  title="Đấu tranh, tránh đâu?">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Đấu tranh, tránh đâu?" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/204_153/2020/11/28/duanduongsatdothinhongahanoisaipham-1606522026310.jpg" src="https://icdn.dantri.com.vn/zoom/204_153/filters:quality(0)/2020/11/28/duanduongsatdothinhongahanoisaipham-1606522026310.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           
                            <a data-utm="Home|MainList|26" class="news-item__sapo" title="Đấu tranh, tránh đâu?" href="/dien-dan/dau-tranh-tranh-dau-20201128071041388.htm">Điều đáng buồn là hệ quả "đấu tranh, tránh đâu" đã xảy ra với vị cán bộ dám dũng cảm đứng lên đấu tranh chống tiêu cực.</a>
                                         <div class="news-item__meta">

                        
            <a data-utm="Home|MainList|26" data-cat-id="673" class="news-item__category" title="Diễn đàn" href="/dien-dan.htm">Diễn đàn</a>
                                                     <span class="news-item__time">Thứ Bảy 28/11/2020 - 07:11</span>
                </div>
                    </div>
    </div>

        </li>

            </ul>
            <ul class="dt-list dt-list--lg">
            <li>

                           <div title="Được quan tâm" duoc-quan-tam=""></div><hr>            </li>
            </ul>
            <ul class="dt-list dt-list--lg">
         </ul>
            <div class="clearfix"></div>
                        <div id="xds-58"></div>

        </div>
        <div class="col col--secondary">
            
    <section data-cate-id="20" class="dt-section dt-section--box dt-section--primary">
        <header class="dt-section__header">
            <h2 class="dt-section__title">
                <a data-utm="Home|Box_XaHoi|1" title="Xã hội" href="/xa-hoi.htm">
                                        Xã hội
                </a>
            </h2>
                <ul class="dt-section__nav">
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_XaHoi|2" data-cat-id="1002" title="Đại hội Đảng" href="/xa-hoi/dai-hoi-dang.htm">Đại hội Đảng</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_XaHoi|3" data-cat-id="696" title="Chính trị" href="/xa-hoi/chinh-tri.htm">Chính trị</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_XaHoi|4" data-cat-id="134" title="Phóng sự-Ký sự" href="/xa-hoi/phong-su-ky-su.htm">Phóng sự-Ký sự</a>
                            </h4>
                        </li>
                </ul>

        </header>

        <div class="dt-section__body">
            <ul class="dt-list dt-list--sm">
                <li>
                    
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_XaHoi|1"
 class="news-item__avatar"   href="/xa-hoi/sat-lo-nui-khien-3-can-nha-do-sap-nhieu-nha-bi-vui-lap-mot-phan-20201130091132875.htm"
  title="Sạt lở núi khiến 3 căn nhà đổ sập, nhiều nhà bị vùi lấp một phần">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Sạt lở núi khiến 3 căn nhà đổ sập, nhiều nhà bị vùi lấp một phần" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/528_352/2020/11/30/1278451693771764135441755882856068153706886-n-1606701763966-1606702547219.jpeg" src="https://icdn.dantri.com.vn/zoom/528_352/filters:quality(0)/2020/11/30/1278451693771764135441755882856068153706886-n-1606701763966-1606702547219.jpeg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_XaHoi|1"
  href="/xa-hoi/sat-lo-nui-khien-3-can-nha-do-sap-nhieu-nha-bi-vui-lap-mot-phan-20201130091132875.htm"
  title="Sạt lở núi khiến 3 căn nhà đổ sập, nhiều nhà bị vùi lấp một phần">
  
  Sạt lở núi khiến 3 căn nhà đổ sập, nhiều nhà bị vùi lấp một phần    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_XaHoi|1" class="news-item__sapo" title="Sạt lở núi khiến 3 căn nhà đổ sập, nhiều nhà bị vùi lấp một phần" href="/xa-hoi/sat-lo-nui-khien-3-can-nha-do-sap-nhieu-nha-bi-vui-lap-mot-phan-20201130091132875.htm">(Dân trí)&nbsp;- Mưa lớn kéo dài liên tục những ngày vừa qua gây sạt lở làm 3 căn nhà dân bị đổ sập hoàn toàn. Chính quyền đang tiến hành di dời khẩn cấp người dân ra khỏi khu vực nguy hiểm.</a>
                                             </div>
    </div>

                </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_XaHoi|1" title="Đường Nha Trang - Đà Lạt thông một làn trong đêm, giải phóng phương tiện" href="/xa-hoi/duong-nha-trang-da-lat-thong-mot-lan-trong-dem-giai-phong-phuong-tien-20201130082035757.htm">
                                    Đường Nha Trang - Đà Lạt thông một làn trong đêm, giải phóng phương tiện
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_XaHoi|2" title="Bị CSGT dừng xe ô tô, giám đốc nông trường cao su vẫn bỏ chạy" href="/xa-hoi/bi-csgt-dung-xe-o-to-giam-doc-nong-truong-cao-su-van-bo-chay-20201129172443333.htm">
                                    Bị CSGT dừng xe ô tô, giám đốc nông trường cao su vẫn bỏ chạy
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_XaHoi|3" title="Hơn 100 người tìm kiếm 2 nữ du khách bị lũ cuốn khi đi tour trải nghiệm" href="/xa-hoi/hon-100-nguoi-tim-kiem-2-nu-du-khach-bi-lu-cuon-khi-di-tour-trai-nghiem-20201130074427424.htm">
                                    Hơn 100 người tìm kiếm 2 nữ du khách bị lũ cuốn khi đi tour trải nghiệm
                                </a>
                            </h3>
                        </li>
            </ul>
        </div>
    </section>
    <section data-cate-id="36" class="dt-section dt-section--box dt-section--primary">
        <header class="dt-section__header">
            <h2 class="dt-section__title">
                <a data-utm="Home|Box_TheGioi|1" title="Thế giới" href="/the-gioi.htm">
                                        Thế giới
                </a>
            </h2>
                <ul class="dt-section__nav">
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_TheGioi|2" data-cat-id="992" title="Bầu cử tổng thống Mỹ 2020" href="/the-gioi/bau-cu-tong-thong-my-2020.htm">Bầu cử tổng thống Mỹ 2020</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_TheGioi|3" data-cat-id="140" title="Châu Á" href="/the-gioi/chau-a.htm">Châu Á</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_TheGioi|4" data-cat-id="138" title="EU &amp; Nga" href="/the-gioi/eu-nga.htm">EU &amp; Nga</a>
                            </h4>
                        </li>
                </ul>

        </header>

        <div class="dt-section__body">
            <ul class="dt-list dt-list--sm">
                <li>
                    
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_TheGioi|1"
 class="news-item__avatar"   href="/the-gioi/ong-biden-bi-nut-xuong-ban-chan-co-the-phai-dung-giay-tap-di-20201130091141417.htm"
  title="Ông Biden bị nứt xương bàn chân, có thể phải dùng giày tập đi">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Ông Biden bị nứt xương bàn chân, có thể phải dùng giày tập đi" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/528_352/2020/11/30/biden-1606702185239.jpg" src="https://icdn.dantri.com.vn/zoom/528_352/filters:quality(0)/2020/11/30/biden-1606702185239.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_TheGioi|1"
  href="/the-gioi/ong-biden-bi-nut-xuong-ban-chan-co-the-phai-dung-giay-tap-di-20201130091141417.htm"
  title="Ông Biden bị nứt xương bàn chân, có thể phải dùng giày tập đi">
  
  Ông Biden bị nứt xương bàn chân, có thể phải dùng giày tập đi    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_TheGioi|1" class="news-item__sapo" title="Ông Biden bị nứt xương bàn chân, có thể phải dùng giày tập đi" href="/the-gioi/ong-biden-bi-nut-xuong-ban-chan-co-the-phai-dung-giay-tap-di-20201130091141417.htm">(Dân trí)&nbsp;- Chấn thương ở bàn chân do trượt ngã khi chơi với chó cưng buộc ứng viên được dự đoán đắc cử tổng thống Mỹ Joe Biden phải sử dụng giày tập đi trong vài tuần, bác sĩ của ông cho biết.</a>
                                             </div>
    </div>

                </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_TheGioi|1" title="Ông Trump: Tôi sẽ không thay đổi suy nghĩ trong 6 tháng tới" href="/the-gioi/ong-trump-toi-se-khong-thay-doi-suy-nghi-trong-6-thang-toi-20201130072615867.htm">
                                    Ông Trump: Tôi sẽ không thay đổi suy nghĩ trong 6 tháng tới
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_TheGioi|2" title="Australia tính kiện Trung Quốc lên WTO" href="/the-gioi/australia-tinh-kien-trung-quoc-len-wto-20201130072235339.htm">
                                    Australia tính kiện Trung Quốc lên WTO
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_TheGioi|3" title="Ông Biden chấn thương do trượt ngã khi chơi với thú cưng" href="/the-gioi/ong-biden-chan-thuong-do-truot-nga-khi-choi-voi-thu-cung-20201130061522056.htm">
                                    Ông Biden chấn thương do trượt ngã khi chơi với thú cưng
                                </a>
                            </h3>
                        </li>
            </ul>
        </div>
    </section>
    <section data-cate-id="26" class="dt-section dt-section--box dt-section--primary">
        <header class="dt-section__header">
            <h2 class="dt-section__title">
                <a data-utm="Home|Box_TheThao|1" title="Thể thao" href="/the-thao.htm">
                                        Thể thao
                </a>
            </h2>
                <ul class="dt-section__nav">
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_TheThao|2" data-cat-id="400" title="Bóng đá trong nước" href="/the-thao/bong-da-trong-nuoc.htm">Bóng đá trong nước</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_TheThao|3" data-cat-id="405" title="Bóng đá Châu Âu" href="/the-thao/bong-da-chau-au.htm">Bóng đá Châu Âu</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_TheThao|4" data-cat-id="404" title="Võ thuật" href="/the-thao/vo-thuat.htm">Võ thuật</a>
                            </h4>
                        </li>
                </ul>

        </header>

        <div class="dt-section__body">
            <ul class="dt-list dt-list--sm">
                <li>
                    
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_TheThao|1"
 class="news-item__avatar"   href="/the-thao/nghi-van-ve-cai-chet-cua-maradona-ba-con-gai-bi-trieu-tap-20201129193547951.htm"
  title="Nghi vấn về cái chết của Maradona, ba con gái bị triệu tập">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Nghi vấn về cái chết của Maradona, ba con gái bị triệu tập" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/528_352/2020/11/29/maradonaquadoi-31-1606653284903.jpg" src="https://icdn.dantri.com.vn/zoom/528_352/filters:quality(0)/2020/11/29/maradonaquadoi-31-1606653284903.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_TheThao|1"
  href="/the-thao/nghi-van-ve-cai-chet-cua-maradona-ba-con-gai-bi-trieu-tap-20201129193547951.htm"
  title="Nghi vấn về cái chết của Maradona, ba con gái bị triệu tập">
  
  Nghi vấn về cái chết của Maradona, ba con gái bị triệu tập    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_TheThao|1" class="news-item__sapo" title="Nghi vấn về cái chết của Maradona, ba con gái bị triệu tập" href="/the-thao/nghi-van-ve-cai-chet-cua-maradona-ba-con-gai-bi-trieu-tap-20201129193547951.htm">(Dân trí)&nbsp;- Theo cảnh sát Argentina, họ vẫn có nghi vấn liên quan cái chết của huyền thoại Maradona. Trong đó, ba con gái của huyền thoại này đã được triệu tập.</a>
                                             </div>
    </div>

                </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_TheThao|1" title="Đội hình nào cho HA Gia Lai dưới thời HLV Kiatisuk?" href="/the-thao/doi-hinh-nao-cho-ha-gia-lai-duoi-thoi-hlv-kiatisuk-20201129144126637.htm">
                                    Đội hình nào cho HA Gia Lai dưới thời HLV Kiatisuk?
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_TheThao|2" title="Những góc khuất về gia đình của Diego Maradona" href="/the-thao/nhung-goc-khuat-ve-gia-dinh-cua-diego-maradona-20201130002057534.htm">
                                    Những góc khuất về gia đình của Diego Maradona
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_TheThao|3" title="Arsenal 1-2 Wolves: Trái đắng cho &quot;Pháo thủ&quot;" href="/the-thao/arsenal-12-wolves-trai-dang-cho-phao-thu-20201130051612613.htm">
                                    Arsenal 1-2 Wolves: Trái đắng cho &quot;Pháo thủ&quot;
                                </a>
                            </h3>
                        </li>
            </ul>
        </div>
    </section>
    <section data-cate-id="133" class="dt-section dt-section--box dt-section--primary">
        <header class="dt-section__header">
            <h2 class="dt-section__title">
                <a data-utm="Home|Box_LaoDongViecLam|1" title="Lao động - Việc làm" href="/lao-dong-viec-lam.htm">
                                        Lao động - Việc làm
                </a>
            </h2>
                <ul class="dt-section__nav">
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_LaoDongViecLam|2" data-cat-id="867" title="Chính sách" href="/lao-dong-viec-lam/chinh-sach.htm">Chính sách</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_LaoDongViecLam|3" data-cat-id="982" title="Gói an sinh 62.000 tỷ đồng" href="/lao-dong-viec-lam/goi-an-sinh-62000-ty-dong.htm">Gói an sinh 62.000 tỷ đồng</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_LaoDongViecLam|4" data-cat-id="870" title="Xuất khẩu lao động" href="/lao-dong-viec-lam/xuat-khau-lao-dong.htm">Xuất khẩu lao động</a>
                            </h4>
                        </li>
                </ul>

        </header>

        <div class="dt-section__body">
            <ul class="dt-list dt-list--sm">
                <li>
                    
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_LaoDongViecLam|1"
 class="news-item__avatar"   href="/lao-dong-viec-lam/cap-doi-kiem-6-trieu-do-la-moi-nam-tu-youtube-va-bat-dong-san-20201130091857774.htm"
  title="Cặp đôi kiếm 6 triệu đô la mỗi năm từ Youtube và bất động sản">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Cặp đôi kiếm 6 triệu đô la mỗi năm từ Youtube và bất động sản" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/528_352/2020/11/30/1269784754158088462425953661770548688359393-n-1606702431958.jpg" src="https://icdn.dantri.com.vn/zoom/528_352/filters:quality(0)/2020/11/30/1269784754158088462425953661770548688359393-n-1606702431958.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_LaoDongViecLam|1"
  href="/lao-dong-viec-lam/cap-doi-kiem-6-trieu-do-la-moi-nam-tu-youtube-va-bat-dong-san-20201130091857774.htm"
  title="Cặp đôi kiếm 6 triệu đô la mỗi năm từ Youtube và bất động sản">
  
  Cặp đôi kiếm 6 triệu đô la mỗi năm từ Youtube và bất động sản    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_LaoDongViecLam|1" class="news-item__sapo" title="Cặp đôi kiếm 6 triệu đô la mỗi năm từ Youtube và bất động sản" href="/lao-dong-viec-lam/cap-doi-kiem-6-trieu-do-la-moi-nam-tu-youtube-va-bat-dong-san-20201130091857774.htm">(Dân trí)&nbsp;- Năm 2017, ước mơ của Kevin Paffrath là kiếm được hơn 1 triệu đô la mỗi năm từ Tổ chức Paffrath, doanh nghiệp bất động sản mà anh sở hữu cùng với vợ mình, Lauren, ở Ventura, California.</a>
                                             </div>
    </div>

                </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_LaoDongViecLam|1" title="Muốn nghỉ việc ngay nhưng xót... 60 triệu đồng tiền thưởng Tết" href="/lao-dong-viec-lam/muon-nghi-viec-ngay-nhung-xot-60-trieu-dong-tien-thuong-tet-20201129084514818.htm">
                                    Muốn nghỉ việc ngay nhưng xót... 60 triệu đồng tiền thưởng Tết
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_LaoDongViecLam|2" title="Người trồng mai, quất Tết đang &quot;ngồi trên đống lửa&quot; vì hậu quả của Covid-19" href="/lao-dong-viec-lam/nguoi-trong-mai-quat-tet-dang-ngoi-tren-dong-lua-vi-hau-qua-cua-covid-19-20201129164421965.htm">
                                    Người trồng mai, quất Tết đang &quot;ngồi trên đống lửa&quot; vì hậu quả của Covid-19
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_LaoDongViecLam|3" title="Hậu Covid-19, cả ngàn lao động đến dự phiên giao dịch việc làm" href="/lao-dong-viec-lam/hau-covid-19-ca-ngan-lao-dong-den-du-phien-giao-dich-viec-lam-20201129165133085.htm">
                                    Hậu Covid-19, cả ngàn lao động đến dự phiên giao dịch việc làm
                                </a>
                            </h3>
                        </li>
            </ul>
        </div>
    </section>
    <section data-cate-id="7" class="dt-section dt-section--box dt-section--primary">
        <header class="dt-section__header">
            <h2 class="dt-section__title">
                <a data-utm="Home|Box_SucKhoe|1" title="Sức khỏe" href="/suc-khoe.htm">
                                        Sức khỏe
                </a>
            </h2>
                <ul class="dt-section__nav">
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_SucKhoe|2" data-cat-id="917" title="Ung thư" href="/suc-khoe/ung-thu.htm">Ung thư</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_SucKhoe|3" data-cat-id="160" title="Kiến thức giới tính" href="/suc-khoe/kien-thuc-gioi-tinh.htm">Kiến thức giới tính</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_SucKhoe|4" data-cat-id="162" title="Tư vấn" href="/suc-khoe/tu-van.htm">Tư vấn</a>
                            </h4>
                        </li>
                </ul>

        </header>

        <div class="dt-section__body">
            <ul class="dt-list dt-list--sm">
                <li>
                    
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_SucKhoe|1"
 class="news-item__avatar"   href="/suc-khoe/nhung-bieu-hien-tuong-binh-thuong-nhung-canh-bao-roi-loan-tam-than-o-tre-20201130085130217.htm"
  title="Những biểu hiện tưởng bình thường nhưng cảnh báo rối loạn tâm thần ở trẻ">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Những biểu hiện tưởng bình thường nhưng cảnh báo rối loạn tâm thần ở trẻ" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/528_352/2020/11/30/images-7-1606700945092.jpeg" src="https://icdn.dantri.com.vn/zoom/528_352/filters:quality(0)/2020/11/30/images-7-1606700945092.jpeg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_SucKhoe|1"
  href="/suc-khoe/nhung-bieu-hien-tuong-binh-thuong-nhung-canh-bao-roi-loan-tam-than-o-tre-20201130085130217.htm"
  title="Những biểu hiện tưởng bình thường nhưng cảnh báo rối loạn tâm thần ở trẻ">
  
  Những biểu hiện tưởng bình thường nhưng cảnh báo rối loạn tâm thần ở trẻ    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_SucKhoe|1" class="news-item__sapo" title="Những biểu hiện tưởng bình thường nhưng cảnh báo rối loạn tâm thần ở trẻ" href="/suc-khoe/nhung-bieu-hien-tuong-binh-thuong-nhung-canh-bao-roi-loan-tam-than-o-tre-20201130085130217.htm">(Dân trí)&nbsp;- Thấy con có học hành sa sút, trốn học, cảm giác buồn bã, thu mình, đau đầu thường xuyên…, nhiều bố mẹ nghĩ là bình thường. Tuy nhiên, đây có thể là dấu hiệu cảnh báo rối loạn tâm thần học đường.</a>
                                             </div>
    </div>

                </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_SucKhoe|1" title="Có những triệu chứng này, ung thư dạ dày đã bước sang giai đoạn muộn" href="/suc-khoe/co-nhung-trieu-chung-nay-ung-thu-da-day-da-buoc-sang-giai-doan-muon-20201129232844540.htm">
                                    Có những triệu chứng này, ung thư dạ dày đã bước sang giai đoạn muộn
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_SucKhoe|2" title="Dùng đầu đánh bóng, người đàn ông 37 tuổi bị trật đốt sống cổ" href="/suc-khoe/dung-dau-danh-bong-nguoi-dan-ong-37-tuoi-bi-trat-dot-song-co-20201129215556521.htm">
                                    Dùng đầu đánh bóng, người đàn ông 37 tuổi bị trật đốt sống cổ
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_SucKhoe|3" title="Giải mã hai &quot;thế lực&quot; quyết định bản lĩnh đàn ông" href="/suc-khoe/giai-ma-hai-the-luc-quyet-dinh-ban-linh-dan-ong-20201127170314081.htm">
                                    Giải mã hai &quot;thế lực&quot; quyết định bản lĩnh đàn ông
                                </a>
                            </h3>
                        </li>
            </ul>
        </div>
    </section>
    <section data-cate-id="167" class="dt-section dt-section--box dt-section--primary">
        <header class="dt-section__header">
            <h2 class="dt-section__title">
                <a data-utm="Home|Box_TamLongNhanAi|1" title="Tấm lòng nhân ái" href="/tam-long-nhan-ai.htm">
                                        Tấm lòng nhân ái
                </a>
            </h2>
                <ul class="dt-section__nav">
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_TamLongNhanAi|2" data-cat-id="674" title="Danh sách ủng hộ" href="/tam-long-nhan-ai/danh-sach-ung-ho.htm">Danh sách ủng hộ</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_TamLongNhanAi|3" data-cat-id="675" title="Danh sách kết chuyển" href="/tam-long-nhan-ai/danh-sach-ket-chuyen.htm">Danh sách kết chuyển</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_TamLongNhanAi|4" data-cat-id="718" title="Hoàn cảnh" href="/tam-long-nhan-ai/hoan-canh.htm">Hoàn cảnh</a>
                            </h4>
                        </li>
                </ul>

        </header>

        <div class="dt-section__body">
            <ul class="dt-list dt-list--sm">
                <li>
                    
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_TamLongNhanAi|1"
 class="news-item__avatar"   href="/tam-long-nhan-ai/thong-bao-ket-chuyen-nhan-ai-tuan-3-thang-112020-20201129111901004.htm"
  title="Thông báo kết chuyển Nhân ái tuần 3 tháng 11/2020">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Thông báo kết chuyển Nhân ái tuần 3 tháng 11/2020" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/528_352/2020/11/26/tamlongnhanai-1606378591306.jpg" src="https://icdn.dantri.com.vn/zoom/528_352/filters:quality(0)/2020/11/26/tamlongnhanai-1606378591306.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_TamLongNhanAi|1"
  href="/tam-long-nhan-ai/thong-bao-ket-chuyen-nhan-ai-tuan-3-thang-112020-20201129111901004.htm"
  title="Thông báo kết chuyển Nhân ái tuần 3 tháng 11/2020">
  
  Thông báo kết chuyển Nhân ái tuần 3 tháng 11/2020    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_TamLongNhanAi|1" class="news-item__sapo" title="Thông báo kết chuyển Nhân ái tuần 3 tháng 11/2020" href="/tam-long-nhan-ai/thong-bao-ket-chuyen-nhan-ai-tuan-3-thang-112020-20201129111901004.htm">(Dân trí)&nbsp;- Hôm nay, Báo Điện tử Dân trí đã làm thủ tục kết chuyển số tiền: 714,440,014 đồng đến các gia đình có hoàn cảnh khó khăn mà bạn đọc đã gửi về Báo trong tuần qua.</a>
                                             </div>
    </div>

                </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_TamLongNhanAi|1" title="Danh sách ủng hộ tuần 03 tháng 11 năm 2020" href="/tam-long-nhan-ai/danh-sach-ung-ho-tuan-03-thang-11-nam-2020-20201129111556693.htm">
                                    Danh sách ủng hộ tuần 03 tháng 11 năm 2020
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_TamLongNhanAi|2" title="Người dân vùng &quot;rốn lũ&quot; phấn khởi ngày khởi công &quot;xóm nhà phao&quot; cứu sinh" href="/tam-long-nhan-ai/nguoi-dan-vung-ron-lu-phan-khoi-ngay-khoi-cong-xom-nha-phao-cuu-sinh-20201121212759940.htm">
                                    Người dân vùng &quot;rốn lũ&quot; phấn khởi ngày khởi công &quot;xóm nhà phao&quot; cứu sinh
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_TamLongNhanAi|3" title="Quỹ Khuyến học Việt Nam trao học bổng học sinh, sinh viên vượt khó học giỏi" href="/tam-long-nhan-ai/quy-khuyen-hoc-viet-nam-trao-hoc-bong-hoc-sinh-sinh-vien-vuot-kho-hoc-gioi-20201129082405421.htm">
                                    Quỹ Khuyến học Việt Nam trao học bổng học sinh, sinh viên vượt khó học giỏi
                                </a>
                            </h3>
                        </li>
            </ul>
        </div>
    </section>
    <section data-cate-id="76" class="dt-section dt-section--box dt-section--primary">
        <header class="dt-section__header">
            <h2 class="dt-section__title">
                <a data-utm="Home|Box_KinhDoanh|1" title="Kinh doanh" href="/kinh-doanh.htm">
                                        Kinh doanh
                </a>
            </h2>
                <ul class="dt-section__nav">
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_KinhDoanh|2" data-cat-id="235" title="Tài chính - Đầu tư" href="/kinh-doanh/tai-chinh-dau-tu.htm">Tài chính - Đầu tư</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_KinhDoanh|3" data-cat-id="83" title="Thị trường" href="/kinh-doanh/thi-truong.htm">Thị trường</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_KinhDoanh|4" data-cat-id="82" title="Doanh nghiệp" href="/kinh-doanh/doanh-nghiep.htm">Doanh nghiệp</a>
                            </h4>
                        </li>
                </ul>

        </header>

        <div class="dt-section__body">
            <ul class="dt-list dt-list--sm">
                <li>
                    
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_KinhDoanh|1"
 class="news-item__avatar"   href="/kinh-doanh/gia-vang-bi-ban-thao-lao-doc-khong-phanh-20201130093524184.htm"
  title="Giá vàng bị bán tháo, lao dốc không phanh">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Giá vàng bị bán tháo, lao dốc không phanh" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/528_352/2020/07/07/gia-vang-7-1594086808103.jpg" src="https://icdn.dantri.com.vn/zoom/528_352/filters:quality(0)/2020/07/07/gia-vang-7-1594086808103.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_KinhDoanh|1"
  href="/kinh-doanh/gia-vang-bi-ban-thao-lao-doc-khong-phanh-20201130093524184.htm"
  title="Giá vàng bị bán tháo, lao dốc không phanh">
  
  Giá vàng bị bán tháo, lao dốc không phanh    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_KinhDoanh|1" class="news-item__sapo" title="Giá vàng bị bán tháo, lao dốc không phanh" href="/kinh-doanh/gia-vang-bi-ban-thao-lao-doc-khong-phanh-20201130093524184.htm">(Dân trí)&nbsp;- Giá vàng tiếp tục sụt giảm, đứng ở mức thấp do nhiều thông tin tích cực về vắc xin ngừa Covid-19, qua đó giới đầu tư đua nhau bán vàng để kiềm lỗ.</a>
                                             </div>
    </div>

                </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_KinhDoanh|1" title="Foxconn chuyển một số công đoạn sản xuất iPad, Macbook sang Việt Nam" href="/kinh-doanh/foxconn-chuyen-mot-so-cong-doan-san-xuat-i-pad-macbook-sang-viet-nam-20201130083848770.htm">
                                    Foxconn chuyển một số công đoạn sản xuất iPad, Macbook sang Việt Nam
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_KinhDoanh|2" title="Trung Quốc &quot;rúng động&quot; cú lừa 2,3 tỷ USD qua nền tảng thanh toán điện tử" href="/kinh-doanh/trung-quoc-rung-dong-cu-lua-23-ty-usd-qua-nen-tang-thanh-toan-dien-tu-20201130062445202.htm">
                                    Trung Quốc &quot;rúng động&quot; cú lừa 2,3 tỷ USD qua nền tảng thanh toán điện tử
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_KinhDoanh|3" title="Quả bom được di dời trong đêm, EVN hủy lệnh &quot;làm việc online&quot;" href="/kinh-doanh/qua-bom-duoc-di-doi-trong-dem-evn-huy-lenh-lam-viec-online-20201130062206148.htm">
                                    Quả bom được di dời trong đêm, EVN hủy lệnh &quot;làm việc online&quot;
                                </a>
                            </h3>
                        </li>
            </ul>
        </div>
    </section>
    <section data-cate-id="927" class="dt-section dt-section--box dt-section--primary">
        <header class="dt-section__header">
            <h2 class="dt-section__title">
                <a data-utm="Home|Box_BatDongSan|1" title="Bất động sản" href="/bat-dong-san.htm">
                                        Bất động sản
                </a>
            </h2>
                <ul class="dt-section__nav">
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_BatDongSan|2" data-cat-id="928" title="Dự án" href="/bat-dong-san/du-an.htm">Dự án</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_BatDongSan|3" data-cat-id="929" title="Thị trường" href="/bat-dong-san/thi-truong.htm">Thị trường</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_BatDongSan|4" data-cat-id="930" title="Nhịp sống đô thị" href="/bat-dong-san/nhip-song-do-thi.htm">Nhịp sống đô thị</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_BatDongSan|5" data-cat-id="971" title="Sống xanh" href="/bat-dong-san/song-xanh.htm">Sống xanh</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_BatDongSan|6" data-cat-id="1008" title="Sắc màu Nhật Bản" href="/bat-dong-san/sac-mau-nhat-ban.htm">Sắc màu Nhật Bản</a>
                            </h4>
                        </li>
                </ul>

        </header>

        <div class="dt-section__body">
            <ul class="dt-list dt-list--sm">
                <li>
                    
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_BatDongSan|1"
 class="news-item__avatar"   href="/bat-dong-san/bat-dong-san-do-thi-cong-nghiep-bac-ninh-dan-dau-xu-huong-bac-tien-20201127082842358.htm"
  title="Bất động sản đô thị công nghiệp Bắc Ninh dẫn đầu xu hướng &quot;Bắc tiến&quot;">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Bất động sản đô thị công nghiệp Bắc Ninh dẫn đầu xu hướng &quot;Bắc tiến&quot;" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/528_352/2020/11/27/bat-dong-san-do-thi-cong-nghiep-bac-ninh-dan-dau-xu-huong-bac-tien-2-docx-1606439741067.jpeg" src="https://icdn.dantri.com.vn/zoom/528_352/filters:quality(0)/2020/11/27/bat-dong-san-do-thi-cong-nghiep-bac-ninh-dan-dau-xu-huong-bac-tien-2-docx-1606439741067.jpeg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_BatDongSan|1"
  href="/bat-dong-san/bat-dong-san-do-thi-cong-nghiep-bac-ninh-dan-dau-xu-huong-bac-tien-20201127082842358.htm"
  title="Bất động sản đô thị công nghiệp Bắc Ninh dẫn đầu xu hướng &quot;Bắc tiến&quot;">
  
  Bất động sản đô thị công nghiệp Bắc Ninh dẫn đầu xu hướng &quot;Bắc tiến&quot;    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_BatDongSan|1" class="news-item__sapo" title="Bất động sản đô thị công nghiệp Bắc Ninh dẫn đầu xu hướng &quot;Bắc tiến&quot;" href="/bat-dong-san/bat-dong-san-do-thi-cong-nghiep-bac-ninh-dan-dau-xu-huong-bac-tien-20201127082842358.htm">(Dân trí)&nbsp;- Dưới áp lực nguồn cung hạn hẹp của khu vực phía Nam đã khiến cho trào lưu "Bắc tiến" của các ông chủ lớn mạnh mẽ hơn bao giờ hết.</a>
                                             </div>
    </div>

                </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_BatDongSan|1" title="Giá đất nhiều nơi tăng bất thường, loạt dự án lớn vào diện thanh tra" href="/bat-dong-san/gia-dat-nhieu-noi-tang-bat-thuong-loat-du-an-lon-vao-dien-thanh-tra-20201130055805452.htm">
                                    Giá đất nhiều nơi tăng bất thường, loạt dự án lớn vào diện thanh tra
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_BatDongSan|2" title="Bất ngờ căn nhà giản dị của huyền thoại Maradona thuở chưa nổi tiếng" href="/bat-dong-san/bat-ngo-can-nha-gian-di-cua-huyen-thoai-maradona-thuo-chua-noi-tieng-20201129205805933.htm">
                                    Bất ngờ căn nhà giản dị của huyền thoại Maradona thuở chưa nổi tiếng
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_BatDongSan|3" title="Kosy City Beat Thai Nguyen: Top trending bất động sản cuối 2020" href="/bat-dong-san/kosy-city-beat-thai-nguyen-top-trending-bat-dong-san-cuoi-2020-20201129223232678.htm">
                                    Kosy City Beat Thai Nguyen: Top trending bất động sản cuối 2020
                                </a>
                            </h3>
                        </li>
            </ul>
        </div>
    </section>
    <section data-cate-id="111" class="dt-section dt-section--box dt-section--primary">
        <header class="dt-section__header">
            <h2 class="dt-section__title">
                <a data-utm="Home|Box_OToXeMay|1" title="Ô tô - Xe máy" href="/o-to-xe-may.htm">
                                        Ô tô - Xe máy
                </a>
            </h2>
                <ul class="dt-section__nav">
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_OToXeMay|2" data-cat-id="207" title="Thị trường xe" href="/o-to-xe-may/thi-truong-xe.htm">Thị trường xe</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_OToXeMay|3" data-cat-id="536870911" title="Bảng giá ô tô" href="/o-to-xe-may/bang-gia-o-to.htm">Bảng giá ô tô</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_OToXeMay|4" data-cat-id="208" title="Văn hoá xe" href="/o-to-xe-may/van-hoa-xe.htm">Văn hoá xe</a>
                            </h4>
                        </li>
                </ul>

        </header>

        <div class="dt-section__body">
            <ul class="dt-list dt-list--sm">
                <li>
                    
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_OToXeMay|1"
 class="news-item__avatar"   href="/o-to-xe-may/neu-hummer-da-hoa-thanh-thuong-hieu-xe-xanh-tai-sao-jeep-lai-khong-the-20201129235249539.htm"
  title="Nếu Hummer đã hóa thành thương hiệu xe xanh, tại sao Jeep lại không thể?">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Nếu Hummer đã hóa thành thương hiệu xe xanh, tại sao Jeep lại không thể?" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/528_352/2020/11/29/jeep-electrification-1-c-1606668190041.jpg" src="https://icdn.dantri.com.vn/zoom/528_352/filters:quality(0)/2020/11/29/jeep-electrification-1-c-1606668190041.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_OToXeMay|1"
  href="/o-to-xe-may/neu-hummer-da-hoa-thanh-thuong-hieu-xe-xanh-tai-sao-jeep-lai-khong-the-20201129235249539.htm"
  title="Nếu Hummer đã hóa thành thương hiệu xe xanh, tại sao Jeep lại không thể?">
  
  Nếu Hummer đã hóa thành thương hiệu xe xanh, tại sao Jeep lại không thể?    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_OToXeMay|1" class="news-item__sapo" title="Nếu Hummer đã hóa thành thương hiệu xe xanh, tại sao Jeep lại không thể?" href="/o-to-xe-may/neu-hummer-da-hoa-thanh-thuong-hieu-xe-xanh-tai-sao-jeep-lai-khong-the-20201129235249539.htm">(Dân trí)&nbsp;- Hãng xe Jeep (Mỹ) không giấu tham vọng điện khí hóa toàn bộ danh mục sản phẩm trong vòng hai năm tới, hướng đến mục tiêu trở thành thương hiệu xe việt dã "xanh" nhất thế giới.</a>
                                             </div>
    </div>

                </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_OToXeMay|1" title="Nếu ô tô điện là tương lai, hãy tìm hiểu về cách sạc ngay từ bây giờ" href="/o-to-xe-may/neu-o-to-dien-la-tuong-lai-hay-tim-hieu-ve-cach-sac-ngay-tu-bay-gio-20201128221424230.htm">
                                    Nếu ô tô điện là tương lai, hãy tìm hiểu về cách sạc ngay từ bây giờ
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_OToXeMay|2" title="Hơn 400 triệu mua xe cho vợ, chọn VinFast Fadil hay Kia Morning mới?" href="/o-to-xe-may/hon-400-trieu-mua-xe-cho-vo-chon-vin-fast-fadil-hay-kia-morning-moi-20201128233034143.htm">
                                    Hơn 400 triệu mua xe cho vợ, chọn VinFast Fadil hay Kia Morning mới?
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_OToXeMay|3" title="Hy hữu tình huống chạy xe máy làm rơi người ngồi sau mà không hề hay biết" href="/o-to-xe-may/hy-huu-tinh-huong-chay-xe-may-lam-roi-nguoi-ngoi-sau-ma-khong-he-hay-biet-20201129010629480.htm">
                                    Hy hữu tình huống chạy xe máy làm rơi người ngồi sau mà không hề hay biết
                                </a>
                            </h3>
                        </li>
            </ul>
        </div>
    </section>
    <section data-cate-id="119" class="dt-section dt-section--box dt-section--primary">
        <header class="dt-section__header">
            <h2 class="dt-section__title">
                <a data-utm="Home|Box_SucManhSo|1" title="Sức mạnh số" href="/suc-manh-so.htm">
                                        Sức mạnh số
                </a>
            </h2>
                <ul class="dt-section__nav">
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_SucManhSo|2" data-cat-id="147" title="Máy tính - Mạng" href="/suc-manh-so/vi-tinh.htm">Máy tính - Mạng</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_SucManhSo|3" data-cat-id="148" title="Di động - Viễn thông" href="/suc-manh-so/dien-thoai.htm">Di động - Viễn thông</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_SucManhSo|4" data-cat-id="881" title="Điện tử tiêu dùng" href="/suc-manh-so/dien-may.htm">Điện tử tiêu dùng</a>
                            </h4>
                        </li>
                </ul>

        </header>

        <div class="dt-section__body">
            <ul class="dt-list dt-list--sm">
                <li>
                    
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_SucManhSo|1"
 class="news-item__avatar"   href="/suc-manh-so/do-toc-do-va-thoi-luong-pin-giua-galaxy-note-20-ultra-va-i-phone-12-pro-max-20201129042829118.htm"
  title="Đọ tốc độ và thời lượng pin giữa Galaxy Note20 Ultra và iPhone 12 Pro Max">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Đọ tốc độ và thời lượng pin giữa Galaxy Note20 Ultra và iPhone 12 Pro Max" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/528_352/2020/11/29/so-sanh-i-phone-12-pro-max-av-1606598289230.jpg" src="https://icdn.dantri.com.vn/zoom/528_352/filters:quality(0)/2020/11/29/so-sanh-i-phone-12-pro-max-av-1606598289230.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_SucManhSo|1"
  href="/suc-manh-so/do-toc-do-va-thoi-luong-pin-giua-galaxy-note-20-ultra-va-i-phone-12-pro-max-20201129042829118.htm"
  title="Đọ tốc độ và thời lượng pin giữa Galaxy Note20 Ultra và iPhone 12 Pro Max">
  
  Đọ tốc độ và thời lượng pin giữa Galaxy Note20 Ultra và iPhone 12 Pro Max    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_SucManhSo|1" class="news-item__sapo" title="Đọ tốc độ và thời lượng pin giữa Galaxy Note20 Ultra và iPhone 12 Pro Max" href="/suc-manh-so/do-toc-do-va-thoi-luong-pin-giua-galaxy-note-20-ultra-va-i-phone-12-pro-max-20201129042829118.htm">(Dân trí)&nbsp;- iPhone 12 Pro Max và Galaxy Note20 Ultra, 2 mẫu smartphone cao cấp nhất thị trường hiện nay, sản phẩm nào có tốc độ hoạt động nhanh hơn và thời lượng pin lâu hơn?</a>
                                             </div>
    </div>

                </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_SucManhSo|1" title="Đánh giá Galaxy M51: pin &quot;trâu&quot;, hiệu năng đủ dùng, thiết kế thô nặng" href="/suc-manh-so/danh-gia-galaxy-m-51-pin-trau-hieu-nang-du-dung-thiet-ke-tho-nang-20201126143247137.htm">
                                    Đánh giá Galaxy M51: pin &quot;trâu&quot;, hiệu năng đủ dùng, thiết kế thô nặng
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_SucManhSo|2" title="Thủ thuật để smartphone phát báo động khi bị móc túi nổi bật nhất tuần qua" href="/suc-manh-so/thu-thuat-de-smartphone-phat-bao-dong-khi-bi-moc-tui-noi-bat-nhat-tuan-qua-20201129020939542.htm">
                                    Thủ thuật để smartphone phát báo động khi bị móc túi nổi bật nhất tuần qua
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_SucManhSo|3" title="Clip &quot;cô gái nhảy như bị điện giật siêu hài hước&quot; nổi bật nhất tuần qua" href="/suc-manh-so/clip-co-gai-nhay-nhu-bi-dien-giat-sieu-hai-huoc-noi-bat-nhat-tuan-qua-20201128124150518.htm">
                                    Clip &quot;cô gái nhảy như bị điện giật siêu hài hước&quot; nổi bật nhất tuần qua
                                </a>
                            </h3>
                        </li>
            </ul>
        </div>
    </section>
    <section data-cate-id="25" class="dt-section dt-section--box dt-section--primary">
        <header class="dt-section__header">
            <h2 class="dt-section__title">
                <a data-utm="Home|Box_GiaoDucHuongNghiep|1" title="Giáo dục - Hướng nghiệp" href="/giao-duc-huong-nghiep.htm">
                                        Giáo dục - Hướng nghiệp
                </a>
            </h2>
                <ul class="dt-section__nav">
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_GiaoDucHuongNghiep|2" data-cat-id="201" title="Tin tuyển sinh" href="/giao-duc-huong-nghiep/tin-tuyen-sinh.htm">Tin tuyển sinh</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_GiaoDucHuongNghiep|3" data-cat-id="182" title="Khuyến học" href="/giao-duc-huong-nghiep/khuyen-hoc.htm">Khuyến học</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_GiaoDucHuongNghiep|4" data-cat-id="181" title="Gương sáng" href="/giao-duc-huong-nghiep/guong-sang.htm">Gương sáng</a>
                            </h4>
                        </li>
                </ul>

        </header>

        <div class="dt-section__body">
            <ul class="dt-list dt-list--sm">
                <li>
                    
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_GiaoDucHuongNghiep|1"
 class="news-item__avatar"   href="/giao-duc-huong-nghiep/khanh-hoa-cho-hoc-sinh-nghi-hoc-ngay-3011-do-mua-lu-20201129222250069.htm"
  title="Khánh Hòa cho học sinh nghỉ học ngày 30/11 do mưa lũ">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Khánh Hòa cho học sinh nghỉ học ngày 30/11 do mưa lũ" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/528_352/2020/11/29/anh-1606663195277.jpg" src="https://icdn.dantri.com.vn/zoom/528_352/filters:quality(0)/2020/11/29/anh-1606663195277.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_GiaoDucHuongNghiep|1"
  href="/giao-duc-huong-nghiep/khanh-hoa-cho-hoc-sinh-nghi-hoc-ngay-3011-do-mua-lu-20201129222250069.htm"
  title="Khánh Hòa cho học sinh nghỉ học ngày 30/11 do mưa lũ">
  
  Khánh Hòa cho học sinh nghỉ học ngày 30/11 do mưa lũ    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_GiaoDucHuongNghiep|1" class="news-item__sapo" title="Khánh Hòa cho học sinh nghỉ học ngày 30/11 do mưa lũ" href="/giao-duc-huong-nghiep/khanh-hoa-cho-hoc-sinh-nghi-hoc-ngay-3011-do-mua-lu-20201129222250069.htm">(Dân trí)&nbsp;- Nhằm ứng phó với tình hình mưa lũ trong 2 ngày qua, Giám đốc Sở GD&ĐT tỉnh Khánh Hòa tối 29/11 đã ký công văn khẩn, yêu cầu các Phòng GD&ĐT cho học sinh toàn tỉnh nghỉ học ngày 30/11.</a>
                                             </div>
    </div>

                </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_GiaoDucHuongNghiep|1" title="Toán học góp phần &quot;đẩy lùi&quot; đại dịch Covid-19" href="/giao-duc-huong-nghiep/toan-hoc-gop-phan-day-lui-dai-dich-covid-19-20201129220355792.htm">
                                    Toán học góp phần &quot;đẩy lùi&quot; đại dịch Covid-19
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_GiaoDucHuongNghiep|2" title="Quảng Nam bàn giải pháp khắc phục thiếu giáo viên mầm non và tiểu học" href="/giao-duc-huong-nghiep/quang-nam-ban-giai-phap-khac-phuc-thieu-giao-vien-mam-non-va-tieu-hoc-20201129161934341.htm">
                                    Quảng Nam bàn giải pháp khắc phục thiếu giáo viên mầm non và tiểu học
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_GiaoDucHuongNghiep|3" title="&quot;Bệnh tật chỉ là cơn đau nhất thời, dạy chữ là sứ mệnh cả cuộc đời&quot;" href="/giao-duc-huong-nghiep/benh-tat-chi-la-con-dau-nhat-thoi-day-chu-la-su-menh-ca-cuoc-doi-20201125232148717.htm">
                                    &quot;Bệnh tật chỉ là cơn đau nhất thời, dạy chữ là sứ mệnh cả cuộc đời&quot;
                                </a>
                            </h3>
                        </li>
            </ul>
        </div>
    </section>
    <section data-cate-id="1001" class="dt-section dt-section--box dt-section--primary">
        <header class="dt-section__header">
            <h2 class="dt-section__title">
                <a data-utm="Home|Box_AnSinh|1" title="An sinh" href="/an-sinh.htm">
                                        An sinh
                </a>
            </h2>

        </header>

        <div class="dt-section__body">
            <ul class="dt-list dt-list--sm">
                <li>
                    
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_AnSinh|1"
 class="news-item__avatar"   href="/an-sinh/ha-noi-chi-hon-600-ty-dong-ho-tro-nguoi-dan-gap-kho-do-covid-19-20201129184240685.htm"
  title="Hà Nội: Chi hơn 600 tỷ đồng hỗ trợ người dân gặp khó do Covid-19">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Hà Nội: Chi hơn 600 tỷ đồng hỗ trợ người dân gặp khó do Covid-19" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/528_352/2020/08/26/e-5-a-49601005-aff-04-a-64-b-1598437352026.jpg" src="https://icdn.dantri.com.vn/zoom/528_352/filters:quality(0)/2020/08/26/e-5-a-49601005-aff-04-a-64-b-1598437352026.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_AnSinh|1"
  href="/an-sinh/ha-noi-chi-hon-600-ty-dong-ho-tro-nguoi-dan-gap-kho-do-covid-19-20201129184240685.htm"
  title="Hà Nội: Chi hơn 600 tỷ đồng hỗ trợ người dân gặp khó do Covid-19">
  
  Hà Nội: Chi hơn 600 tỷ đồng hỗ trợ người dân gặp khó do Covid-19    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_AnSinh|1" class="news-item__sapo" title="Hà Nội: Chi hơn 600 tỷ đồng hỗ trợ người dân gặp khó do Covid-19" href="/an-sinh/ha-noi-chi-hon-600-ty-dong-ho-tro-nguoi-dan-gap-kho-do-covid-19-20201129184240685.htm">(Dân trí)&nbsp;- TP Hà Nội chi trả hỗ trợ khó khăn do dịch Covid-19 với tổng số tiền là 604,3 tỷ đồng. Hỗ trợ 100% mức đóng Bảo hiểm y tế cho trên 121,6 nghìn người thuộc hộ nghèo và hộ cận nghèo,…</a>
                                             </div>
    </div>

                </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_AnSinh|1" title="Không để Việt Nam trở thành địa bàn trung chuyển ma túy" href="/an-sinh/khong-de-viet-nam-tro-thanh-dia-ban-trung-chuyen-ma-tuy-20201128173057535.htm">
                                    Không để Việt Nam trở thành địa bàn trung chuyển ma túy
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_AnSinh|2" title="Lãnh đạo Văn phòng Chính phủ trao 6 tỷ đồng hỗ trợ 3 tỉnh miền Trung" href="/an-sinh/lanh-dao-van-phong-chinh-phu-trao-6-ty-dong-ho-tro-3-tinh-mien-trung-20201129112116565.htm">
                                    Lãnh đạo Văn phòng Chính phủ trao 6 tỷ đồng hỗ trợ 3 tỉnh miền Trung
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_AnSinh|3" title="Trao giải trong cuộc thi &quot;Người huấn luyện ATVSLĐ giỏi toàn quốc năm 2020&quot;" href="/an-sinh/trao-giai-trong-cuoc-thi-nguoi-huan-luyen-atvsld-gioi-toan-quoc-nam-2020-20201129070733662.htm">
                                    Trao giải trong cuộc thi &quot;Người huấn luyện ATVSLĐ giỏi toàn quốc năm 2020&quot;
                                </a>
                            </h3>
                        </li>
            </ul>
        </div>
    </section>
    <section data-cate-id="730" class="dt-section dt-section--box dt-section--primary">
        <header class="dt-section__header">
            <h2 class="dt-section__title">
                <a data-utm="Home|Box_VanHoa|1" title="Văn hóa" href="/van-hoa.htm">
                                        Văn hóa
                </a>
            </h2>
                <ul class="dt-section__nav">
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_VanHoa|2" data-cat-id="811" title="Đời sống văn hóa" href="/van-hoa/doi-song-van-hoa.htm">Đời sống văn hóa</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_VanHoa|3" data-cat-id="812" title="Điện ảnh" href="/van-hoa/dien-anh.htm">Điện ảnh</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_VanHoa|4" data-cat-id="154" title="Âm nhạc" href="/van-hoa/am-nhac.htm">Âm nhạc</a>
                            </h4>
                        </li>
                </ul>

        </header>

        <div class="dt-section__body">
            <ul class="dt-list dt-list--sm">
                <li>
                    
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_VanHoa|1"
 class="news-item__avatar"   href="/van-hoa/johnny-depp-va-amber-heard-cung-tray-trat-buoc-ra-khoi-vu-ly-hon-20201129202153908.htm"
  title="Johnny Depp và Amber Heard cùng trầy trật bước ra khỏi vụ ly hôn">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Johnny Depp và Amber Heard cùng trầy trật bước ra khỏi vụ ly hôn" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/528_352/2020/11/29/12-1606660366308.jpeg" src="https://icdn.dantri.com.vn/zoom/528_352/filters:quality(0)/2020/11/29/12-1606660366308.jpeg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_VanHoa|1"
  href="/van-hoa/johnny-depp-va-amber-heard-cung-tray-trat-buoc-ra-khoi-vu-ly-hon-20201129202153908.htm"
  title="Johnny Depp và Amber Heard cùng trầy trật bước ra khỏi vụ ly hôn">
  
  Johnny Depp và Amber Heard cùng trầy trật bước ra khỏi vụ ly hôn    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_VanHoa|1" class="news-item__sapo" title="Johnny Depp và Amber Heard cùng trầy trật bước ra khỏi vụ ly hôn" href="/van-hoa/johnny-depp-va-amber-heard-cung-tray-trat-buoc-ra-khoi-vu-ly-hon-20201129202153908.htm">(Dân trí)&nbsp;- Vụ ly hôn giữa hai diễn viên nổi tiếng ở Hollywood - Johnny Depp và Amber Heard - có lẽ là một trong những vụ ly hôn dai dẳng, mệt mỏi nhất từng được biết đến ở Hollywood.</a>
                                             </div>
    </div>

                </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_VanHoa|1" title="Dư âm sau một cuộc thi nhan sắc..." href="/van-hoa/du-am-sau-mot-cuoc-thi-nhan-sac-20201129201543392.htm">
                                    Dư âm sau một cuộc thi nhan sắc...
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_VanHoa|2" title="Người phụ nữ trả lại cổ vật đánh cắp 3 năm trước cùng tâm thư xin lỗi" href="/van-hoa/nguoi-phu-nu-tra-lai-co-vat-danh-cap-3-nam-truoc-cung-tam-thu-xin-loi-20201128211713890.htm">
                                    Người phụ nữ trả lại cổ vật đánh cắp 3 năm trước cùng tâm thư xin lỗi
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_VanHoa|3" title="Chung kết không tìm được Hoa khôi Du lịch: Tỉnh Đắk Nông lên tiếng" href="/van-hoa/chung-ket-khong-tim-duoc-hoa-khoi-du-lich-tinh-dak-nong-len-tieng-20201129112828188.htm">
                                    Chung kết không tìm được Hoa khôi Du lịch: Tỉnh Đắk Nông lên tiếng
                                </a>
                            </h3>
                        </li>
            </ul>
        </div>
    </section>
    <section data-cate-id="23" class="dt-section dt-section--box dt-section--primary">
        <header class="dt-section__header">
            <h2 class="dt-section__title">
                <a data-utm="Home|Box_GiaiTri|1" title="Giải trí" href="/giai-tri.htm">
                                        Giải trí
                </a>
            </h2>
                <ul class="dt-section__nav">
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_GiaiTri|2" data-cat-id="790" title="Sao Việt" href="/giai-tri/sao-viet.htm">Sao Việt</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_GiaiTri|3" data-cat-id="791" title="Hollywood" href="/giai-tri/hollywood.htm">Hollywood</a>
                            </h4>
                        </li>
                        <li>
                            <h4 class="dt-section__nav-item">
                                <a data-utm="Home|Box_GiaiTri|4" data-cat-id="792" title="Châu Á" href="/giai-tri/chau-a.htm">Châu Á</a>
                            </h4>
                        </li>
                </ul>

        </header>

        <div class="dt-section__body">
            <ul class="dt-list dt-list--sm">
                <li>
                    
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_GiaiTri|1"
 class="news-item__avatar"   href="/giai-tri/phut-giay-tinh-cam-cua-nsnd-cong-ly-voi-ban-gai-kem-15-tuoi-20201130074150678.htm"
  title="Phút giây tình cảm của NSND Công Lý với bạn gái kém 15 tuổi">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Phút giây tình cảm của NSND Công Lý với bạn gái kém 15 tuổi" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/528_352/2020/11/30/phut-giay-tinh-cam-cua-nsnd-cong-ly-voi-ban-gai-kem-15-tuoi-10-1606697529840.jpg" src="https://icdn.dantri.com.vn/zoom/528_352/filters:quality(0)/2020/11/30/phut-giay-tinh-cam-cua-nsnd-cong-ly-voi-ban-gai-kem-15-tuoi-10-1606697529840.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_GiaiTri|1"
  href="/giai-tri/phut-giay-tinh-cam-cua-nsnd-cong-ly-voi-ban-gai-kem-15-tuoi-20201130074150678.htm"
  title="Phút giây tình cảm của NSND Công Lý với bạn gái kém 15 tuổi">
  
  Phút giây tình cảm của NSND Công Lý với bạn gái kém 15 tuổi    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_GiaiTri|1" class="news-item__sapo" title="Phút giây tình cảm của NSND Công Lý với bạn gái kém 15 tuổi" href="/giai-tri/phut-giay-tinh-cam-cua-nsnd-cong-ly-voi-ban-gai-kem-15-tuoi-20201130074150678.htm">Hơn 4 năm bên nhau, Ngọc Hà luôn là người đồng hành chuẩn bị trang phục cho NSND Công Lý để anh yên tâm công tác.</a>
                                             </div>
    </div>

                </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_GiaiTri|1" title="Dịp hiếm hoi Ngô Thanh Vân, Thanh Hằng khoe dáng với áo tắm" href="/giai-tri/dip-hiem-hoi-ngo-thanh-van-thanh-hang-khoe-dang-voi-ao-tam-20201129153139460.htm">
                                    Dịp hiếm hoi Ngô Thanh Vân, Thanh Hằng khoe dáng với áo tắm
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_GiaiTri|2" title="George Clooney bị sốc khi có cặp sinh đôi ở tuổi U60" href="/giai-tri/george-clooney-bi-soc-khi-co-cap-sinh-doi-o-tuoi-u-60-20201130074546328.htm">
                                    George Clooney bị sốc khi có cặp sinh đôi ở tuổi U60
                                </a>
                            </h3>
                        </li>
                        <li class="news-item news-item--link">
                            <h3 class="news-item__title">
                                <a data-utm="Home|Box_GiaiTri|3" title="Cuộc sống giàu sang đáng ngưỡng mộ của &quot;mẹ Kim Tan&quot; Kim Sung Ryung" href="/giai-tri/cuoc-song-giau-sang-dang-nguong-mo-cua-me-kim-tan-kim-sung-ryung-20201129161833201.htm">
                                    Cuộc sống giàu sang đáng ngưỡng mộ của &quot;mẹ Kim Tan&quot; Kim Sung Ryung
                                </a>
                            </h3>
                        </li>
            </ul>
        </div>
    </section>

           
                        <div id="xds-56"></div>

            
            
        </div>
                    <div class="col col--secondary" id="xds-51" >
  
            </div>

    </div>
    <div id="adm_sticky_footer"></div>
    <div class="dt-divider"></div>

    
            <div id="xds-70"></div>
    <div class="row row-eq-height mb-5">
                    <div class="col-5">
                        <section class="dt-section dt-section--category">
                            
  <header class="dt-section__header" >
    <h2 class="dt-section__title">
      <a data-utm="Home|Box_DuLich|1" data-cat-id="835" title="Du Lịch" href="/du-lich.htm">Du Lịch</a>
    </h2>
    <ul class="dt-section__nav">
          <li>
              <a data-utm="Home|DuLich|2" data-cat-id="836" title="Tin tức" href="/du-lich/tin-tuc.htm">Tin tức</a>
          </li>
          <li>
              <a data-utm="Home|DuLich|3" data-cat-id="837" title="Khám phá" href="/du-lich/kham-pha.htm">Khám phá</a>
          </li>
          <li>
              <a data-utm="Home|DuLich|4" data-cat-id="839" title="Món ngon - Điểm đẹp" href="/du-lich/mon-ngon-diem-dep.htm">Món ngon - Điểm đẹp</a>
          </li>
          </ul>
  </header>

                            <div class="dt-section__body">
                                <ul class="dt-list dt-list--3">
                                        <li>
                                            
    <div class="news-item news-item--left2right ">
        


<a  data-utm="Home|Box_DuLich|1"
 class="news-item__avatar"   href="/du-lich/nam-phi-cong-dien-trai-that-nghiep-chuyen-sang-giao-do-an-de-kiem-song-20201129181645715.htm"
  title="Nam phi công điển trai thất nghiệp, chuyển sang giao đồ ăn để kiếm sống">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Nam phi công điển trai thất nghiệp, chuyển sang giao đồ ăn để kiếm sống" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/360_240/2020/11/29/nam-phi-cong-dien-trai-that-nghiepdocx-1606648542183.jpeg" src="https://icdn.dantri.com.vn/zoom/360_240/filters:quality(0)/2020/11/29/nam-phi-cong-dien-trai-that-nghiepdocx-1606648542183.jpeg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_DuLich|1"
  href="/du-lich/nam-phi-cong-dien-trai-that-nghiep-chuyen-sang-giao-do-an-de-kiem-song-20201129181645715.htm"
  title="Nam phi công điển trai thất nghiệp, chuyển sang giao đồ ăn để kiếm sống">
  
  Nam phi công điển trai thất nghiệp, chuyển sang giao đồ ăn để kiếm sống    
</a>


  
           
            </h3>
            
                                                              <div class="news-item__meta">
                                            <span class="news-item__time">3 giờ trước</span>
                </div>
                    </div>
    </div>

                                        </li>
                                        <li>
                                            
    <div class="news-item news-item--left2right news-item--small">
        


<a  data-utm="Home|Box_DuLich|2"
 class="news-item__avatar"   href="/du-lich/loat-mon-an-nhay-cam-khien-thuc-khach-do-mat-thuong-thuc-20201129074432113.htm"
  title="Loạt món ăn &quot;nhạy cảm&quot; khiến thực khách &quot;đỏ mặt&quot; thưởng thức">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Loạt món ăn &quot;nhạy cảm&quot; khiến thực khách &quot;đỏ mặt&quot; thưởng thức" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/240_156/2020/11/29/page-1606610590286.jpg" src="https://icdn.dantri.com.vn/zoom/240_156/filters:quality(0)/2020/11/29/page-1606610590286.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_DuLich|2"
  href="/du-lich/loat-mon-an-nhay-cam-khien-thuc-khach-do-mat-thuong-thuc-20201129074432113.htm"
  title="Loạt món ăn &quot;nhạy cảm&quot; khiến thực khách &quot;đỏ mặt&quot; thưởng thức">
  
  Loạt món ăn &quot;nhạy cảm&quot; khiến thực khách &quot;đỏ mặt&quot; thưởng thức    
</a>


  
           
            </h3>
            
                                                              <div class="news-item__meta">
                                            <span class="news-item__time">Chủ nhật 29/11/2020 - 07:44</span>
                </div>
                    </div>
    </div>

                                        </li>
                                        <li>
                                            
    <div class="news-item news-item--left2right news-item--small">
        


<a  data-utm="Home|Box_DuLich|3"
 class="news-item__avatar"   href="/du-lich/da-mat-xem-canh-gan-100-phi-cong-bay-du-luon-tuyet-dep-o-mien-tay-20201129064130364.htm"
  title="Đã mắt xem cảnh gần 100 phi công bay dù lượn tuyệt đẹp ở miền Tây">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Đã mắt xem cảnh gần 100 phi công bay dù lượn tuyệt đẹp ở miền Tây" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/240_156/2020/11/29/duluon-131606606104437-1606610158361.jpg" src="https://icdn.dantri.com.vn/zoom/240_156/filters:quality(0)/2020/11/29/duluon-131606606104437-1606610158361.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_DuLich|3"
  href="/du-lich/da-mat-xem-canh-gan-100-phi-cong-bay-du-luon-tuyet-dep-o-mien-tay-20201129064130364.htm"
  title="Đã mắt xem cảnh gần 100 phi công bay dù lượn tuyệt đẹp ở miền Tây">
  
  Đã mắt xem cảnh gần 100 phi công bay dù lượn tuyệt đẹp ở miền Tây    
</a>


  
           
            </h3>
            
                                                              <div class="news-item__meta">
                                            <span class="news-item__time">Chủ nhật 29/11/2020 - 07:34</span>
                </div>
                    </div>
    </div>

                                        </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="col-7">
                        <section class="dt-section dt-section--category">
                            
  <header class="dt-section__header" >
    <h2 class="dt-section__title">
      <a data-utm="Home|Box_PhapLuat|1" data-cat-id="170" title="Pháp luật" href="/phap-luat.htm">Pháp luật</a>
    </h2>
    <ul class="dt-section__nav">
          </ul>
  </header>

                            <div class="dt-section__body">
                                <ul class="dt-list dt-list--grid dt-list--grid-3">
                                   
                                        <li>
                                            
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_PhapLuat|1"
 class="news-item__avatar"   href="/phap-luat/nho-nguoi-tat-axit-tinh-dich-roi-len-ke-hoach-do-toi-cho-chong-20201129204404594.htm"
  title="Nhờ người tạt axít &quot;tình địch&quot; rồi lên kế hoạch đổ tội cho chồng">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Nhờ người tạt axít &quot;tình địch&quot; rồi lên kế hoạch đổ tội cho chồng" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/388_258/2020/11/29/1267215073852229125674235410206936059730301-n-1606657331399.jpg" src="https://icdn.dantri.com.vn/zoom/388_258/filters:quality(0)/2020/11/29/1267215073852229125674235410206936059730301-n-1606657331399.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_PhapLuat|1"
  href="/phap-luat/nho-nguoi-tat-axit-tinh-dich-roi-len-ke-hoach-do-toi-cho-chong-20201129204404594.htm"
  title="Nhờ người tạt axít &quot;tình địch&quot; rồi lên kế hoạch đổ tội cho chồng">
  
  Nhờ người tạt axít &quot;tình địch&quot; rồi lên kế hoạch đổ tội cho chồng    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_PhapLuat|1" class="news-item__sapo" title="Nhờ người tạt axít &quot;tình địch&quot; rồi lên kế hoạch đổ tội cho chồng" href="/phap-luat/nho-nguoi-tat-axit-tinh-dich-roi-len-ke-hoach-do-toi-cho-chong-20201129204404594.htm">(Dân trí)&nbsp;- Trong quá trình chờ ly hôn thì chồng của Trần Thị Diễm Thúy có quan hệ tình cảm với chị L. Thấy vậy, Thúy đã nhờ người tạt axít chị L. nhằm hủy hoại dung nhan nhân tình của chồng.</a>
                                             </div>
    </div>

                                        </li>
                                        <li>
                                            
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_PhapLuat|2"
 class="news-item__avatar"   href="/phap-luat/tphcm-he-lo-nguyen-nhan-vu-thi-the-nguoi-han-quoc-bo-trong-vali-20201128200848477.htm"
  title="TPHCM: Hé lộ nguyên nhân vụ thi thể người Hàn Quốc bỏ trong vali">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="TPHCM: Hé lộ nguyên nhân vụ thi thể người Hàn Quốc bỏ trong vali" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/388_258/2020/11/28/he-lo-nguyen-nhan-vu-thi-the-nguoi-han-quoc-bo-trong-vali-1606568785980.jpg" src="https://icdn.dantri.com.vn/zoom/388_258/filters:quality(0)/2020/11/28/he-lo-nguyen-nhan-vu-thi-the-nguoi-han-quoc-bo-trong-vali-1606568785980.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_PhapLuat|2"
  href="/phap-luat/tphcm-he-lo-nguyen-nhan-vu-thi-the-nguoi-han-quoc-bo-trong-vali-20201128200848477.htm"
  title="TPHCM: Hé lộ nguyên nhân vụ thi thể người Hàn Quốc bỏ trong vali">
  
  TPHCM: Hé lộ nguyên nhân vụ thi thể người Hàn Quốc bỏ trong vali    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_PhapLuat|2" class="news-item__sapo" title="TPHCM: Hé lộ nguyên nhân vụ thi thể người Hàn Quốc bỏ trong vali" href="/phap-luat/tphcm-he-lo-nguyen-nhan-vu-thi-the-nguoi-han-quoc-bo-trong-vali-20201128200848477.htm">(Dân trí)&nbsp;- Làm ăn thất bại dẫn đến thua lỗ, Jeong In Cheol nghĩ ra cách sát hại bạn đồng hương để cướp tài sản và bỏ thi thể nạn nhân vào trong vali để che giấu hành vi phạm tội.</a>
                                             </div>
    </div>

                                        </li>
                                        <li>
                                            
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_PhapLuat|3"
 class="news-item__avatar"   href="/phap-luat/dieu-tra-vu-mot-phong-vien-bi-2-doi-tuong-phuc-kich-chem-bi-thuong-20201129113003550.htm"
  title="Điều tra vụ một phóng viên bị 2 đối tượng &quot;phục kích&quot; chém bị thương">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Điều tra vụ một phóng viên bị 2 đối tượng &quot;phục kích&quot; chém bị thương" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/388_258/2020/11/29/motphongvienbichemsaukhidutiecthoinoi-1606624053286.jpg" src="https://icdn.dantri.com.vn/zoom/388_258/filters:quality(0)/2020/11/29/motphongvienbichemsaukhidutiecthoinoi-1606624053286.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_PhapLuat|3"
  href="/phap-luat/dieu-tra-vu-mot-phong-vien-bi-2-doi-tuong-phuc-kich-chem-bi-thuong-20201129113003550.htm"
  title="Điều tra vụ một phóng viên bị 2 đối tượng &quot;phục kích&quot; chém bị thương">
  
  Điều tra vụ một phóng viên bị 2 đối tượng &quot;phục kích&quot; chém bị thương    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_PhapLuat|3" class="news-item__sapo" title="Điều tra vụ một phóng viên bị 2 đối tượng &quot;phục kích&quot; chém bị thương" href="/phap-luat/dieu-tra-vu-mot-phong-vien-bi-2-doi-tuong-phuc-kich-chem-bi-thuong-20201129113003550.htm">(Dân trí)&nbsp;- Ngày 29/11, Công an TP Pleiku, tỉnh Gia Lai thông tin, đang phối hợp điều tra vụ một phóng viên bị 2 đối tượng phục kích chém trọng thương.</a>
                                             </div>
    </div>

                                        </li>
                                </ul>
                            </div>
                        </section>
                    </div>
    </div>
    <div class="row row-eq-height mb-5">
                    <div class="col-7">
                        <section class="dt-section dt-section--category">
                            
  <header class="dt-section__header" >
    <h2 class="dt-section__title">
      <a data-utm="Home|Box_NhipSongTre|1" data-cat-id="135" title="Nhịp sống trẻ" href="/nhip-song-tre.htm">Nhịp sống trẻ</a>
    </h2>
    <ul class="dt-section__nav">
          <li>
              <a data-utm="Home|NhipSongTre|2" data-cat-id="168" title="Người Việt trẻ" href="/nhip-song-tre/nguoi-viet-tre.htm">Người Việt trẻ</a>
          </li>
          <li>
              <a data-utm="Home|NhipSongTre|3" data-cat-id="659" title="Teen đẹp" href="/nhip-song-tre/teen-dep.htm">Teen đẹp</a>
          </li>
          <li>
              <a data-utm="Home|NhipSongTre|4" data-cat-id="788" title="Phóng sự trẻ" href="/nhip-song-tre/phong-su-tre.htm">Phóng sự trẻ</a>
          </li>
          </ul>
  </header>

                            <div class="dt-section__body">
                                <ul class="dt-list dt-list--grid dt-list--grid-3">
                                   
                                        <li>
                                            
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_NhipSongTre|1"
 class="news-item__avatar"   href="/nhip-song-tre/mu-cach-ly-chong-covid-19-la-1-trong-37-cong-trinh-tuoi-tre-sang-tao-2020-20201130010438991.htm"
  title="Mũ cách ly chống Covid-19 là 1 trong 37 công trình Tuổi trẻ sáng tạo 2020">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Mũ cách ly chống Covid-19 là 1 trong 37 công trình Tuổi trẻ sáng tạo 2020" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/388_258/2020/11/30/tuoi-tre-sang-tao-20201130-at-005311-4-1606672420735.jpg" src="https://icdn.dantri.com.vn/zoom/388_258/filters:quality(0)/2020/11/30/tuoi-tre-sang-tao-20201130-at-005311-4-1606672420735.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_NhipSongTre|1"
  href="/nhip-song-tre/mu-cach-ly-chong-covid-19-la-1-trong-37-cong-trinh-tuoi-tre-sang-tao-2020-20201130010438991.htm"
  title="Mũ cách ly chống Covid-19 là 1 trong 37 công trình Tuổi trẻ sáng tạo 2020">
  
  Mũ cách ly chống Covid-19 là 1 trong 37 công trình Tuổi trẻ sáng tạo 2020    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_NhipSongTre|1" class="news-item__sapo" title="Mũ cách ly chống Covid-19 là 1 trong 37 công trình Tuổi trẻ sáng tạo 2020" href="/nhip-song-tre/mu-cach-ly-chong-covid-19-la-1-trong-37-cong-trinh-tuoi-tre-sang-tao-2020-20201130010438991.htm">(Dân trí)&nbsp;- Mũ cách ly di động phòng dịch Covid-19 Vihelm do nhóm học sinh ở Hà Nội thực hiện là 1 trong 37 công trình, sáng kiến đoạt Giải thưởng "Tuổi trẻ sáng tạo" toàn quốc năm 2020.</a>
                                             </div>
    </div>

                                        </li>
                                        <li>
                                            
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_NhipSongTre|2"
 class="news-item__avatar"   href="/nhip-song-tre/tuoi-tre-da-nang-huong-ung-ngay-hoi-thanh-nien-voi-van-hoa-giao-thong-20201129152424074.htm"
  title="Tuổi trẻ Đà Nẵng hưởng ứng Ngày hội &quot;Thanh niên với văn hóa giao thông&quot;">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Tuổi trẻ Đà Nẵng hưởng ứng Ngày hội &quot;Thanh niên với văn hóa giao thông&quot;" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/388_258/2020/11/29/thanhnienvoivanhoagiaothong-1606638070990-1606647075278.jpeg" src="https://icdn.dantri.com.vn/zoom/388_258/filters:quality(0)/2020/11/29/thanhnienvoivanhoagiaothong-1606638070990-1606647075278.jpeg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_NhipSongTre|2"
  href="/nhip-song-tre/tuoi-tre-da-nang-huong-ung-ngay-hoi-thanh-nien-voi-van-hoa-giao-thong-20201129152424074.htm"
  title="Tuổi trẻ Đà Nẵng hưởng ứng Ngày hội &quot;Thanh niên với văn hóa giao thông&quot;">
  
  Tuổi trẻ Đà Nẵng hưởng ứng Ngày hội &quot;Thanh niên với văn hóa giao thông&quot;    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_NhipSongTre|2" class="news-item__sapo" title="Tuổi trẻ Đà Nẵng hưởng ứng Ngày hội &quot;Thanh niên với văn hóa giao thông&quot;" href="/nhip-song-tre/tuoi-tre-da-nang-huong-ung-ngay-hoi-thanh-nien-voi-van-hoa-giao-thong-20201129152424074.htm">(Dân trí)&nbsp;- Ngày hội "Thanh niên với văn hóa giao thông" nhằm tuyên truyền nâng cao nhận thức của thanh thiếu nhi về việc tuân thủ các quy định của pháp luật về an toàn giao thông.</a>
                                             </div>
    </div>

                                        </li>
                                        <li>
                                            
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_NhipSongTre|3"
 class="news-item__avatar"   href="/nhip-song-tre/nam-sinh-ha-noi-cham-moc-ky-luc-diem-tuyet-doi-phan-thi-tang-toc-olympia-20201129150547402.htm"
  title="Nam sinh Hà Nội chạm mốc kỷ lục điểm tuyệt đối phần thi Tăng tốc Olympia">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Nam sinh Hà Nội chạm mốc kỷ lục điểm tuyệt đối phần thi Tăng tốc Olympia" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/388_258/2020/11/29/olympia-2-1606635880402.jpeg" src="https://icdn.dantri.com.vn/zoom/388_258/filters:quality(0)/2020/11/29/olympia-2-1606635880402.jpeg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_NhipSongTre|3"
  href="/nhip-song-tre/nam-sinh-ha-noi-cham-moc-ky-luc-diem-tuyet-doi-phan-thi-tang-toc-olympia-20201129150547402.htm"
  title="Nam sinh Hà Nội chạm mốc kỷ lục điểm tuyệt đối phần thi Tăng tốc Olympia">
  
  Nam sinh Hà Nội chạm mốc kỷ lục điểm tuyệt đối phần thi Tăng tốc Olympia        <i class="news-title-icon ico-news-type-video"> </i>  
  
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_NhipSongTre|3" class="news-item__sapo" title="Nam sinh Hà Nội chạm mốc kỷ lục điểm tuyệt đối phần thi Tăng tốc Olympia" href="/nhip-song-tre/nam-sinh-ha-noi-cham-moc-ky-luc-diem-tuyet-doi-phan-thi-tang-toc-olympia-20201129150547402.htm">(Dân trí)&nbsp;- Sau phần thi Tăng tốc đạt điểm tuyệt đối 160 điểm, Sơn Tùng (THPT Yên Viên - Hà Nội) chia sẻ rằng đó là một sự may mắn, cậu không lường trước chiến thắng vang dội này.</a>
                                             </div>
    </div>

                                        </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="col-5">
                        <section class="dt-section dt-section--category">
                            
  <header class="dt-section__header" >
    <h2 class="dt-section__title">
      <a data-utm="Home|Box_BanDoc|1" data-cat-id="202" title="Bạn đọc" href="/ban-doc.htm">Bạn đọc</a>
    </h2>
    <ul class="dt-section__nav">
          <li>
              <a data-utm="Home|BanDoc|2" data-cat-id="910" title="Điều tra" href="/ban-doc/dieu-tra.htm">Điều tra</a>
          </li>
          <li>
              <a data-utm="Home|BanDoc|3" data-cat-id="666" title="Tư vấn pháp luật" href="/ban-doc/tu-van-phap-luat.htm">Tư vấn pháp luật</a>
          </li>
          <li>
              <a data-utm="Home|BanDoc|4" data-cat-id="662" title="Hồi âm" href="/ban-doc/hoi-am.htm">Hồi âm</a>
          </li>
          </ul>
  </header>

                            <div class="dt-section__body">
                                <ul class="dt-list dt-list--3">
                                        <li>
                                            
    <div class="news-item news-item--left2right ">
        


<a  data-utm="Home|Box_BanDoc|1"
 class="news-item__avatar"   href="/ban-doc/kinh-hai-thi-the-trong-vali-nguoi-nuoc-ngoai-pham-toi-se-bi-xu-ly-the-nao-20201129091044011.htm"
  title="Kinh hãi thi thể trong vali: Người nước ngoài phạm tội sẽ bị xử lý thế nào?">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Kinh hãi thi thể trong vali: Người nước ngoài phạm tội sẽ bị xử lý thế nào?" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/360_240/2020/11/29/helonguyennhanvuthithenguoihanquocbotrongvali-11606568786248-1606615712816.jpg" src="https://icdn.dantri.com.vn/zoom/360_240/filters:quality(0)/2020/11/29/helonguyennhanvuthithenguoihanquocbotrongvali-11606568786248-1606615712816.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_BanDoc|1"
  href="/ban-doc/kinh-hai-thi-the-trong-vali-nguoi-nuoc-ngoai-pham-toi-se-bi-xu-ly-the-nao-20201129091044011.htm"
  title="Kinh hãi thi thể trong vali: Người nước ngoài phạm tội sẽ bị xử lý thế nào?">
  
  Kinh hãi thi thể trong vali: Người nước ngoài phạm tội sẽ bị xử lý thế nào?    
</a>


  
           
            </h3>
            
                                                              <div class="news-item__meta">
                                            <span class="news-item__time">2 giờ trước</span>
                </div>
                    </div>
    </div>

                                        </li>
                                        <li>
                                            
    <div class="news-item news-item--left2right news-item--small">
        


<a  data-utm="Home|Box_BanDoc|2"
 class="news-item__avatar"   href="/ban-doc/di-massage-nuru-cac-quy-ong-ham-cua-la-coi-chung-tien-mat-tat-mang-20201127113511660.htm"
  title="Đi massage nuru, các quý ông ham của lạ coi chừng &quot;tiền mất tật mang&quot;!">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Đi massage nuru, các quý ông ham của lạ coi chừng &quot;tiền mất tật mang&quot;!" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/240_156/2020/08/25/ls-luc-1598324228417.jpg" src="https://icdn.dantri.com.vn/zoom/240_156/filters:quality(0)/2020/08/25/ls-luc-1598324228417.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_BanDoc|2"
  href="/ban-doc/di-massage-nuru-cac-quy-ong-ham-cua-la-coi-chung-tien-mat-tat-mang-20201127113511660.htm"
  title="Đi massage nuru, các quý ông ham của lạ coi chừng &quot;tiền mất tật mang&quot;!">
  
  Đi massage nuru, các quý ông ham của lạ coi chừng &quot;tiền mất tật mang&quot;!    
</a>


  
           
            </h3>
            
                                                              <div class="news-item__meta">
                                            <span class="news-item__time">16 giờ trước</span>
                </div>
                    </div>
    </div>

                                        </li>
                                        <li>
                                            
    <div class="news-item news-item--left2right news-item--small">
        


<a  data-utm="Home|Box_BanDoc|3"
 class="news-item__avatar"   href="/ban-doc/se-xu-ly-dut-diem-vu-trang-trai-lon-tra-tan-nguoi-dan-tai-nghe-an-20201127225445881.htm"
  title="Sẽ xử lý dứt điểm vụ trang trại lợn &quot;tra tấn&quot; người dân tại Nghệ An">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Sẽ xử lý dứt điểm vụ trang trại lợn &quot;tra tấn&quot; người dân tại Nghệ An" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/240_156/2020/11/22/received-2776939932570910-1606035538769.jpeg" src="https://icdn.dantri.com.vn/zoom/240_156/filters:quality(0)/2020/11/22/received-2776939932570910-1606035538769.jpeg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_BanDoc|3"
  href="/ban-doc/se-xu-ly-dut-diem-vu-trang-trai-lon-tra-tan-nguoi-dan-tai-nghe-an-20201127225445881.htm"
  title="Sẽ xử lý dứt điểm vụ trang trại lợn &quot;tra tấn&quot; người dân tại Nghệ An">
  
  Sẽ xử lý dứt điểm vụ trang trại lợn &quot;tra tấn&quot; người dân tại Nghệ An        <i class="news-title-icon ico-news-type-video"> </i>  
  
</a>


  
           
            </h3>
            
                                                              <div class="news-item__meta">
                                            <span class="news-item__time">Thứ Bảy 28/11/2020 - 08:07</span>
                </div>
                    </div>
    </div>

                                        </li>
                                </ul>
                            </div>
                        </section>
                    </div>
    </div>
            <div id="xds-71"></div>
    <div class="row row-eq-height mb-5">
                    <div class="col-5">
                        <section class="dt-section dt-section--category">
                            
  <header class="dt-section__header" >
    <h2 class="dt-section__title">
      <a data-utm="Home|Box_TinhYeuGioiTinh|1" data-cat-id="130" title="Tình yêu - Giới tính" href="/tinh-yeu-gioi-tinh.htm">Tình yêu - Giới tính</a>
    </h2>
    <ul class="dt-section__nav">
          <li>
              <a data-utm="Home|TinhYeuGioiTinh|2" data-cat-id="670" title="Chuyện của tôi" href="/tinh-yeu-gioi-tinh/chuyen-cua-toi.htm">Chuyện của tôi</a>
          </li>
          <li>
              <a data-utm="Home|TinhYeuGioiTinh|3" data-cat-id="161" title="Gia đình" href="/tinh-yeu-gioi-tinh/gia-dinh.htm">Gia đình</a>
          </li>
          <li>
              <a data-utm="Home|TinhYeuGioiTinh|4" data-cat-id="158" title="Tình yêu" href="/tinh-yeu-gioi-tinh/tinh-yeu.htm">Tình yêu</a>
          </li>
          </ul>
  </header>

                            <div class="dt-section__body">
                                <ul class="dt-list dt-list--3">
                                        <li>
                                            
    <div class="news-item news-item--left2right ">
        


<a  data-utm="Home|Box_TinhYeuGioiTinh|1"
 class="news-item__avatar"   href="/tinh-yeu-gioi-tinh/xoi-hong-bong-khong-vi-map-mo-voi-vo-cu-20201129205018690.htm"
  title="Xôi hỏng bỏng không vì mập mờ với vợ cũ">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Xôi hỏng bỏng không vì mập mờ với vợ cũ" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/360_240/2020/11/29/screen-shot-20201129-at-84804-pm-1606657726311.jpeg" src="https://icdn.dantri.com.vn/zoom/360_240/filters:quality(0)/2020/11/29/screen-shot-20201129-at-84804-pm-1606657726311.jpeg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_TinhYeuGioiTinh|1"
  href="/tinh-yeu-gioi-tinh/xoi-hong-bong-khong-vi-map-mo-voi-vo-cu-20201129205018690.htm"
  title="Xôi hỏng bỏng không vì mập mờ với vợ cũ">
  
  Xôi hỏng bỏng không vì mập mờ với vợ cũ    
</a>


  
           
            </h3>
            
                                                              <div class="news-item__meta">
                                            <span class="news-item__time">2 giờ trước</span>
                </div>
                    </div>
    </div>

                                        </li>
                                        <li>
                                            
    <div class="news-item news-item--left2right news-item--small">
        


<a  data-utm="Home|Box_TinhYeuGioiTinh|2"
 class="news-item__avatar"   href="/tinh-yeu-gioi-tinh/chieu-chuong-vo-bau-nhu-ba-hoang-den-ngay-sinh-no-nang-tang-toi-mon-qua-dat-gia-20201129085227211.htm"
  title="Chiều chuộng vợ bầu như bà hoàng, đến ngày sinh nở, nàng tặng tôi món quà &#x27;đắt giá&#x27;">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Chiều chuộng vợ bầu như bà hoàng, đến ngày sinh nở, nàng tặng tôi món quà &#x27;đắt giá&#x27;" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/240_156/2020/11/29/chieu-chuong-vo-bau-nhu-ba-hoang-den-ngay-sinh-no-nang-tang-toi-mon-qua-dat-gia-2-1606614529504.jpg" src="https://icdn.dantri.com.vn/zoom/240_156/filters:quality(0)/2020/11/29/chieu-chuong-vo-bau-nhu-ba-hoang-den-ngay-sinh-no-nang-tang-toi-mon-qua-dat-gia-2-1606614529504.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_TinhYeuGioiTinh|2"
  href="/tinh-yeu-gioi-tinh/chieu-chuong-vo-bau-nhu-ba-hoang-den-ngay-sinh-no-nang-tang-toi-mon-qua-dat-gia-20201129085227211.htm"
  title="Chiều chuộng vợ bầu như bà hoàng, đến ngày sinh nở, nàng tặng tôi món quà &#x27;đắt giá&#x27;">
  
  Chiều chuộng vợ bầu như bà hoàng, đến ngày sinh nở, nàng tặng tôi món quà &#x27;đắt giá&#x27;    
</a>


  
           
            </h3>
            
                                                              <div class="news-item__meta">
                                            <span class="news-item__time">17 giờ trước</span>
                </div>
                    </div>
    </div>

                                        </li>
                                        <li>
                                            
    <div class="news-item news-item--left2right news-item--small">
        


<a  data-utm="Home|Box_TinhYeuGioiTinh|3"
 class="news-item__avatar"   href="/tinh-yeu-gioi-tinh/hai-ba-thong-gia-cang-thang-chi-vi-mot-cau-noi-dua-20201128222442535.htm"
  title="Hai bà thông gia căng thẳng chỉ vì một câu &quot;nói đùa&quot;">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Hai bà thông gia căng thẳng chỉ vì một câu &quot;nói đùa&quot;" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/240_156/2020/11/28/screen-shot-20201128-at-102245-pm-1606576983367.png" src="https://icdn.dantri.com.vn/zoom/240_156/filters:quality(0)/2020/11/28/screen-shot-20201128-at-102245-pm-1606576983367.png">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_TinhYeuGioiTinh|3"
  href="/tinh-yeu-gioi-tinh/hai-ba-thong-gia-cang-thang-chi-vi-mot-cau-noi-dua-20201128222442535.htm"
  title="Hai bà thông gia căng thẳng chỉ vì một câu &quot;nói đùa&quot;">
  
  Hai bà thông gia căng thẳng chỉ vì một câu &quot;nói đùa&quot;    
</a>


  
           
            </h3>
            
                                                              <div class="news-item__meta">
                                            <span class="news-item__time">Chủ nhật 29/11/2020 - 07:12</span>
                </div>
                    </div>
    </div>

                                        </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="col-7">
                        <section class="dt-section dt-section--category">
                            
  <header class="dt-section__header" >
    <h2 class="dt-section__title">
      <a data-utm="Home|Box_KhoaHocCongNghe|1" data-cat-id="894" title="Khoa học - Công nghệ" href="/khoa-hoc-cong-nghe.htm">Khoa học - Công nghệ</a>
    </h2>
    <ul class="dt-section__nav">
          <li>
              <a data-utm="Home|KhoaHocCongNghe|2" data-cat-id="909" title="Thế giới tự nhiên" href="/khoa-hoc-cong-nghe/the-gioi-tu-nhien.htm">Thế giới tự nhiên</a>
          </li>
          <li>
              <a data-utm="Home|KhoaHocCongNghe|3" data-cat-id="895" title="Khoa học đó đây" href="/khoa-hoc-cong-nghe/khoa-hoc-do-day.htm">Khoa học đó đây</a>
          </li>
          </ul>
  </header>

                            <div class="dt-section__body">
                                <ul class="dt-list dt-list--grid dt-list--grid-3">
                                   
                                        <li>
                                            
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_KhoaHocCongNghe|1"
 class="news-item__avatar"   href="/khoa-hoc-cong-nghe/he-lo-bi-mat-cua-quai-vat-bien-ca-co-3-trai-tim-9-bo-oc-20201130065051682.htm"
  title="Hé lộ bí mật của quái vật biển cả có 3 trái tim, 9 bộ óc">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Hé lộ bí mật của quái vật biển cả có 3 trái tim, 9 bộ óc" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/388_258/2020/11/30/bachtuoc-1-docx-1606693068508.jpeg" src="https://icdn.dantri.com.vn/zoom/388_258/filters:quality(0)/2020/11/30/bachtuoc-1-docx-1606693068508.jpeg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_KhoaHocCongNghe|1"
  href="/khoa-hoc-cong-nghe/he-lo-bi-mat-cua-quai-vat-bien-ca-co-3-trai-tim-9-bo-oc-20201130065051682.htm"
  title="Hé lộ bí mật của quái vật biển cả có 3 trái tim, 9 bộ óc">
  
  Hé lộ bí mật của quái vật biển cả có 3 trái tim, 9 bộ óc    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_KhoaHocCongNghe|1" class="news-item__sapo" title="Hé lộ bí mật của quái vật biển cả có 3 trái tim, 9 bộ óc" href="/khoa-hoc-cong-nghe/he-lo-bi-mat-cua-quai-vat-bien-ca-co-3-trai-tim-9-bo-oc-20201130065051682.htm">(Dân trí)&nbsp;- Sinh vật có 3 trái tim, 9 bộ óc đó chính là bạch tuộc. Chúng còn có máu xanh lam và một hệ thống thần kinh kì lạ quái đản chẳng giống sinh vật nào trên Trái đất.</a>
                                             </div>
    </div>

                                        </li>
                                        <li>
                                            
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_KhoaHocCongNghe|2"
 class="news-item__avatar"   href="/khoa-hoc-cong-nghe/nhat-ban-chuan-bi-co-mau-dat-dau-tien-cua-tieu-hanh-tinh-20201130063556050.htm"
  title="Nhật Bản chuẩn bị có mẫu đất đầu tiên của tiểu hành tinh">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Nhật Bản chuẩn bị có mẫu đất đầu tiên của tiểu hành tinh" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/388_258/2020/11/30/datdocx-1606692853761.jpeg" src="https://icdn.dantri.com.vn/zoom/388_258/filters:quality(0)/2020/11/30/datdocx-1606692853761.jpeg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_KhoaHocCongNghe|2"
  href="/khoa-hoc-cong-nghe/nhat-ban-chuan-bi-co-mau-dat-dau-tien-cua-tieu-hanh-tinh-20201130063556050.htm"
  title="Nhật Bản chuẩn bị có mẫu đất đầu tiên của tiểu hành tinh">
  
  Nhật Bản chuẩn bị có mẫu đất đầu tiên của tiểu hành tinh    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_KhoaHocCongNghe|2" class="news-item__sapo" title="Nhật Bản chuẩn bị có mẫu đất đầu tiên của tiểu hành tinh" href="/khoa-hoc-cong-nghe/nhat-ban-chuan-bi-co-mau-dat-dau-tien-cua-tieu-hanh-tinh-20201130063556050.htm">(Dân trí)&nbsp;- Tàu vũ trụ của Nhật Bản sắp về đến Trái đất sau chuyến hành trình kéo dài một năm thám hiểm tiểu hành tinh xa xôi với các mẫu đất và dữ liệu có thể cung cấp manh mối về nguồn gốc của Hệ Mặt trời.</a>
                                             </div>
    </div>

                                        </li>
                                        <li>
                                            
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_KhoaHocCongNghe|3"
 class="news-item__avatar"   href="/khoa-hoc-cong-nghe/phat-trien-cong-nghe-cho-phep-nguoi-linh-giao-tiep-qua-tin-hieu-nao-20201130063156446.htm"
  title="Phát triển công nghệ cho phép người lính giao tiếp qua &quot;tín hiệu não&quot;">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Phát triển công nghệ cho phép người lính giao tiếp qua &quot;tín hiệu não&quot;" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/388_258/2020/11/30/my-2-docx-1606692575003.jpeg" src="https://icdn.dantri.com.vn/zoom/388_258/filters:quality(0)/2020/11/30/my-2-docx-1606692575003.jpeg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_KhoaHocCongNghe|3"
  href="/khoa-hoc-cong-nghe/phat-trien-cong-nghe-cho-phep-nguoi-linh-giao-tiep-qua-tin-hieu-nao-20201130063156446.htm"
  title="Phát triển công nghệ cho phép người lính giao tiếp qua &quot;tín hiệu não&quot;">
  
  Phát triển công nghệ cho phép người lính giao tiếp qua &quot;tín hiệu não&quot;    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_KhoaHocCongNghe|3" class="news-item__sapo" title="Phát triển công nghệ cho phép người lính giao tiếp qua &quot;tín hiệu não&quot;" href="/khoa-hoc-cong-nghe/phat-trien-cong-nghe-cho-phep-nguoi-linh-giao-tiep-qua-tin-hieu-nao-20201130063156446.htm">(Dân trí)&nbsp;- Mục tiêu chính của quân đội Mỹ là xây dựng một hệ thống cho phép binh lính giao tiếp thông qua tín hiệu não của họ.</a>
                                             </div>
    </div>

                                        </li>
                                </ul>
                            </div>
                        </section>
                    </div>
    </div>
    <div class="row row-eq-height mb-5">
                    <div class="col-7">
                        <section class="dt-section dt-section--category">
                            
  <header class="dt-section__header" >
    <h2 class="dt-section__title">
      <a data-utm="Home|Box_TuyenSinh|1" data-cat-id="704" title="Tuyển sinh" href="/tuyen-sinh.htm">Tuyển sinh</a>
    </h2>
    <ul class="dt-section__nav">
          <li>
              <a data-utm="Home|TuyenSinh|2" data-cat-id="769" title="Bí quyết học và thi" href="/tuyen-sinh/bi-quyet-hoc-va-thi.htm">Bí quyết học và thi</a>
          </li>
          <li>
              <a data-utm="Home|TuyenSinh|3" data-cat-id="708" title="Chỉ tiêu - Điểm chuẩn" href="/tuyen-sinh/chi-tieu-diem-chuan.htm">Chỉ tiêu - Điểm chuẩn</a>
          </li>
          <li>
              <a data-utm="Home|TuyenSinh|4" data-cat-id="706" title="Đề thi - Đáp án" href="/tuyen-sinh/de-thi-dap-an.htm">Đề thi - Đáp án</a>
          </li>
          </ul>
  </header>

                            <div class="dt-section__body">
                                <ul class="dt-list dt-list--grid dt-list--grid-3">
                                   
                                        <li>
                                            
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_TuyenSinh|1"
 class="news-item__avatar"   href="/giao-duc-huong-nghiep/bo-gddt-tran-tinh-ve-trach-nhiem-lien-quan-toi-sai-pham-truong-dh-dong-do-20201130063631189.htm"
  title="Bộ GD-ĐT trần tình về trách nhiệm liên quan tới sai phạm trường ĐH Đông Đô">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Bộ GD-ĐT trần tình về trách nhiệm liên quan tới sai phạm trường ĐH Đông Đô" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/388_258/2020/05/15/dh-dong-do-1589542215410.jpg" src="https://icdn.dantri.com.vn/zoom/388_258/filters:quality(0)/2020/05/15/dh-dong-do-1589542215410.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_TuyenSinh|1"
  href="/giao-duc-huong-nghiep/bo-gddt-tran-tinh-ve-trach-nhiem-lien-quan-toi-sai-pham-truong-dh-dong-do-20201130063631189.htm"
  title="Bộ GD-ĐT trần tình về trách nhiệm liên quan tới sai phạm trường ĐH Đông Đô">
  
  Bộ GD-ĐT trần tình về trách nhiệm liên quan tới sai phạm trường ĐH Đông Đô    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_TuyenSinh|1" class="news-item__sapo" title="Bộ GD-ĐT trần tình về trách nhiệm liên quan tới sai phạm trường ĐH Đông Đô" href="/giao-duc-huong-nghiep/bo-gddt-tran-tinh-ve-trach-nhiem-lien-quan-toi-sai-pham-truong-dh-dong-do-20201130063631189.htm">(Dân trí)&nbsp;- Bộ Giáo dục và Đào tạo chính thức thông tin một loạt vấn đề liên quan tới sai phạm đào tạo văn bằng 2 của Trường Đại học Đông Đô.</a>
                                             </div>
    </div>

                                        </li>
                                        <li>
                                            
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_TuyenSinh|2"
 class="news-item__avatar"   href="/tuyen-sinh/hieu-truong-truong-y-nhan-nhu-tan-bac-si-xem-benh-nhan-la-thay-20201127160722812.htm"
  title="Hiệu trưởng trường Y nhắn nhủ tân bác sĩ &quot;xem bệnh nhân là thầy&quot;">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Hiệu trưởng trường Y nhắn nhủ tân bác sĩ &quot;xem bệnh nhân là thầy&quot;" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/388_258/2020/11/27/cactanbacsimoiratruongnhanbang-1606467706643-1606469115892.jpeg" src="https://icdn.dantri.com.vn/zoom/388_258/filters:quality(0)/2020/11/27/cactanbacsimoiratruongnhanbang-1606467706643-1606469115892.jpeg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_TuyenSinh|2"
  href="/tuyen-sinh/hieu-truong-truong-y-nhan-nhu-tan-bac-si-xem-benh-nhan-la-thay-20201127160722812.htm"
  title="Hiệu trưởng trường Y nhắn nhủ tân bác sĩ &quot;xem bệnh nhân là thầy&quot;">
  
  Hiệu trưởng trường Y nhắn nhủ tân bác sĩ &quot;xem bệnh nhân là thầy&quot;    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_TuyenSinh|2" class="news-item__sapo" title="Hiệu trưởng trường Y nhắn nhủ tân bác sĩ &quot;xem bệnh nhân là thầy&quot;" href="/tuyen-sinh/hieu-truong-truong-y-nhan-nhu-tan-bac-si-xem-benh-nhan-la-thay-20201127160722812.htm">(Dân trí)&nbsp;- Sáng 27/11, Trường ĐH Y khoa Phạm Ngọc Thạch tổ chức lễ tốt nghiệp cho 810 tân bác sĩ Y khoa hệ chính quy và 208 cử nhân khối ngành Sức khỏe.</a>
                                             </div>
    </div>

                                        </li>
                                        <li>
                                            
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_TuyenSinh|3"
 class="news-item__avatar"   href="/giao-duc-huong-nghiep/bo-giao-duc-dao-tao-len-tieng-vu-bang-gia-truong-dai-hoc-dong-do-20201126100008628.htm"
  title="Bộ Giáo dục &amp; Đào tạo lên tiếng vụ bằng giả Trường Đại học Đông Đô">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Bộ Giáo dục &amp; Đào tạo lên tiếng vụ bằng giả Trường Đại học Đông Đô" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/388_258/2020/05/15/dh-dong-do-1589542215410.jpg" src="https://icdn.dantri.com.vn/zoom/388_258/filters:quality(0)/2020/05/15/dh-dong-do-1589542215410.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_TuyenSinh|3"
  href="/giao-duc-huong-nghiep/bo-giao-duc-dao-tao-len-tieng-vu-bang-gia-truong-dai-hoc-dong-do-20201126100008628.htm"
  title="Bộ Giáo dục &amp; Đào tạo lên tiếng vụ bằng giả Trường Đại học Đông Đô">
  
  Bộ Giáo dục &amp; Đào tạo lên tiếng vụ bằng giả Trường Đại học Đông Đô    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_TuyenSinh|3" class="news-item__sapo" title="Bộ Giáo dục &amp; Đào tạo lên tiếng vụ bằng giả Trường Đại học Đông Đô" href="/giao-duc-huong-nghiep/bo-giao-duc-dao-tao-len-tieng-vu-bang-gia-truong-dai-hoc-dong-do-20201126100008628.htm">(Dân trí)&nbsp;- Ngày 26/11, Vụ trưởng Vụ Giáo dục đại học -  Bộ GD&ĐT Nguyễn Thu Thủy cho biết, sẽ xử lý nghiêm các đơn vị, cá nhân liên quan nếu có sai sót, vi phạm của trường ĐH Đông Đô.</a>
                                             </div>
    </div>

                                        </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="col-5">
                        <section class="dt-section dt-section--category">
                            
  <header class="dt-section__header" >
    <h2 class="dt-section__title">
      <a data-utm="Home|Box_DuHoc|1" data-cat-id="734" title="Du học" href="/du-hoc.htm">Du học</a>
    </h2>
    <ul class="dt-section__nav">
          <li>
              <a data-utm="Home|DuHoc|2" data-cat-id="736" title="Cơ hội du học" href="/du-hoc/co-hoi-du-hoc.htm">Cơ hội du học</a>
          </li>
          <li>
              <a data-utm="Home|DuHoc|3" data-cat-id="749" title="Thế giới du học" href="/du-hoc/the-gioi-du-hoc.htm">Thế giới du học</a>
          </li>
          <li>
              <a data-utm="Home|DuHoc|4" data-cat-id="750" title="Tài trí Việt" href="/du-hoc/tai-tri-viet.htm">Tài trí Việt</a>
          </li>
          </ul>
  </header>

                            <div class="dt-section__body">
                                <ul class="dt-list dt-list--3">
                                        <li>
                                            
    <div class="news-item news-item--left2right ">
        


<a  data-utm="Home|Box_DuHoc|1"
 class="news-item__avatar"   href="/du-hoc/ireland-truong-dh-cho-vacxin-ngua-covid-19-moi-mo-cua-toan-dien-tro-lai-20201129072838573.htm"
  title="Ireland: Trường ĐH chờ vắc-xin ngừa Covid-19 mới mở cửa toàn diện trở lại">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Ireland: Trường ĐH chờ vắc-xin ngừa Covid-19 mới mở cửa toàn diện trở lại" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/360_240/2020/11/29/bai-cho-trang-du-hocdocx-1606609575215.jpeg" src="https://icdn.dantri.com.vn/zoom/360_240/filters:quality(0)/2020/11/29/bai-cho-trang-du-hocdocx-1606609575215.jpeg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_DuHoc|1"
  href="/du-hoc/ireland-truong-dh-cho-vacxin-ngua-covid-19-moi-mo-cua-toan-dien-tro-lai-20201129072838573.htm"
  title="Ireland: Trường ĐH chờ vắc-xin ngừa Covid-19 mới mở cửa toàn diện trở lại">
  
  Ireland: Trường ĐH chờ vắc-xin ngừa Covid-19 mới mở cửa toàn diện trở lại    
</a>


  
           
            </h3>
            
                                                              <div class="news-item__meta">
                                            <span class="news-item__time">Chủ nhật 29/11/2020 - 07:28</span>
                </div>
                    </div>
    </div>

                                        </li>
                                        <li>
                                            
    <div class="news-item news-item--left2right news-item--small">
        


<a  data-utm="Home|Box_DuHoc|2"
 class="news-item__avatar"   href="/du-hoc/nhat-ban-khong-dong-cua-truong-hoc-du-covid-19-20201128111346404.htm"
  title="Nhật Bản: Không đóng cửa trường học dù Covid-19">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Nhật Bản: Không đóng cửa trường học dù Covid-19" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/240_156/2020/11/28/koichi-2811-1606536750078.jpeg" src="https://icdn.dantri.com.vn/zoom/240_156/filters:quality(0)/2020/11/28/koichi-2811-1606536750078.jpeg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_DuHoc|2"
  href="/du-hoc/nhat-ban-khong-dong-cua-truong-hoc-du-covid-19-20201128111346404.htm"
  title="Nhật Bản: Không đóng cửa trường học dù Covid-19">
  
  Nhật Bản: Không đóng cửa trường học dù Covid-19    
</a>


  
           
            </h3>
            
                                                              <div class="news-item__meta">
                                            <span class="news-item__time">Thứ Bảy 28/11/2020 - 16:00</span>
                </div>
                    </div>
    </div>

                                        </li>
                                        <li>
                                            
    <div class="news-item news-item--left2right news-item--small">
        


<a  data-utm="Home|Box_DuHoc|3"
 class="news-item__avatar"   href="/du-hoc/nam-sinh-14-tuoi-dau-tien-tot-nghiep-dai-hoc-nganh-bao-chi-truyen-thong-20201127211816968.htm"
  title="Nam sinh 14 tuổi đầu tiên tốt nghiệp đại học ngành Báo chí - Truyền thông">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Nam sinh 14 tuổi đầu tiên tốt nghiệp đại học ngành Báo chí - Truyền thông" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/240_156/2020/11/28/namsinhdautientaiandototnghiepdaihocnam-14-tuoidocx-1606486608826-1606535103661.jpeg" src="https://icdn.dantri.com.vn/zoom/240_156/filters:quality(0)/2020/11/28/namsinhdautientaiandototnghiepdaihocnam-14-tuoidocx-1606486608826-1606535103661.jpeg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_DuHoc|3"
  href="/du-hoc/nam-sinh-14-tuoi-dau-tien-tot-nghiep-dai-hoc-nganh-bao-chi-truyen-thong-20201127211816968.htm"
  title="Nam sinh 14 tuổi đầu tiên tốt nghiệp đại học ngành Báo chí - Truyền thông">
  
  Nam sinh 14 tuổi đầu tiên tốt nghiệp đại học ngành Báo chí - Truyền thông    
</a>


  
           
            </h3>
            
                                                              <div class="news-item__meta">
                                            <span class="news-item__time">Thứ Bảy 28/11/2020 - 07:07</span>
                </div>
                    </div>
    </div>

                                        </li>
                                </ul>
                            </div>
                        </section>
                    </div>
    </div>
            <div id="xds-72"></div>
    <div class="row row-eq-height mb-5">
                    <div class="col-5">
                        <section class="dt-section dt-section--category">
                            
  <header class="dt-section__header" >
    <h2 class="dt-section__title">
      <a data-utm="Home|Box_DoiSong|1" data-cat-id="844" title="Đời sống" href="/doi-song.htm">Đời sống</a>
    </h2>
    <ul class="dt-section__nav">
          <li>
              <a data-utm="Home|DoiSong|2" data-cat-id="883" title="Cộng đồng" href="/doi-song/cong-dong.htm">Cộng đồng</a>
          </li>
          <li>
              <a data-utm="Home|DoiSong|3" data-cat-id="884" title="Nhà đẹp" href="/doi-song/nha-dep.htm">Nhà đẹp</a>
          </li>
          <li>
              <a data-utm="Home|DoiSong|4" data-cat-id="926" title="Bảo vệ Gia đình Việt" href="/doi-song/bao-ve-gia-dinh-viet.htm">Bảo vệ Gia đình Việt</a>
          </li>
          </ul>
  </header>

                            <div class="dt-section__body">
                                <ul class="dt-list dt-list--3">
                                        <li>
                                            
    <div class="news-item news-item--left2right ">
        


<a  data-utm="Home|Box_DoiSong|1"
 class="news-item__avatar"   href="/doi-song/nhung-cach-lam-sach-nem-giuong-nhanh-chong-20201130071507562.htm"
  title="Những cách làm sạch nệm giường nhanh chóng">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Những cách làm sạch nệm giường nhanh chóng" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/360_240/2020/11/30/nem-2-1606695226997.jpg" src="https://icdn.dantri.com.vn/zoom/360_240/filters:quality(0)/2020/11/30/nem-2-1606695226997.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_DoiSong|1"
  href="/doi-song/nhung-cach-lam-sach-nem-giuong-nhanh-chong-20201130071507562.htm"
  title="Những cách làm sạch nệm giường nhanh chóng">
  
  Những cách làm sạch nệm giường nhanh chóng    
</a>


  
           
            </h3>
            
                                                              <div class="news-item__meta">
                                            <span class="news-item__time">2 giờ trước</span>
                </div>
                    </div>
    </div>

                                        </li>
                                        <li>
                                            
    <div class="news-item news-item--left2right news-item--small">
        


<a  data-utm="Home|Box_DoiSong|2"
 class="news-item__avatar"   href="/doi-song/hang-tram-nguoi-dan-vung-lu-quang-tri-di-cho-tu-thien-0-dong-20201129214226909.htm"
  title="Hàng trăm người dân vùng lũ Quảng Trị đi chợ từ thiện 0 đồng">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Hàng trăm người dân vùng lũ Quảng Trị đi chợ từ thiện 0 đồng" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/240_156/2020/11/29/1269594733967747584274321575243098186754580-n-1606660736824.jpg" src="https://icdn.dantri.com.vn/zoom/240_156/filters:quality(0)/2020/11/29/1269594733967747584274321575243098186754580-n-1606660736824.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_DoiSong|2"
  href="/doi-song/hang-tram-nguoi-dan-vung-lu-quang-tri-di-cho-tu-thien-0-dong-20201129214226909.htm"
  title="Hàng trăm người dân vùng lũ Quảng Trị đi chợ từ thiện 0 đồng">
  
  Hàng trăm người dân vùng lũ Quảng Trị đi chợ từ thiện 0 đồng    
</a>


  
           
            </h3>
            
                                                              <div class="news-item__meta">
                                            <span class="news-item__time">4 giờ trước</span>
                </div>
                    </div>
    </div>

                                        </li>
                                        <li>
                                            
    <div class="news-item news-item--left2right news-item--small">
        


<a  data-utm="Home|Box_DoiSong|3"
 class="news-item__avatar"   href="/du-lich/ve-xu-chua-doi-thuong-thuc-mon-banh-cong-beo-gion-tuyet-ngon-20201128205640389.htm"
  title="Về xứ chùa Dơi thưởng thức món bánh cống béo, giòn tuyệt ngon">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Về xứ chùa Dơi thưởng thức món bánh cống béo, giòn tuyệt ngon" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/240_156/2020/11/29/cachlambanhcongbanhcongsoctrangdongiantainha-8760-x-367-1606643431300.jpg" src="https://icdn.dantri.com.vn/zoom/240_156/filters:quality(0)/2020/11/29/cachlambanhcongbanhcongsoctrangdongiantainha-8760-x-367-1606643431300.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_DoiSong|3"
  href="/du-lich/ve-xu-chua-doi-thuong-thuc-mon-banh-cong-beo-gion-tuyet-ngon-20201128205640389.htm"
  title="Về xứ chùa Dơi thưởng thức món bánh cống béo, giòn tuyệt ngon">
  
  Về xứ chùa Dơi thưởng thức món bánh cống béo, giòn tuyệt ngon    
</a>


  
           
            </h3>
            
                                                              <div class="news-item__meta">
                                            <span class="news-item__time">16 giờ trước</span>
                </div>
                    </div>
    </div>

                                        </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="col-7">
                        <section class="dt-section dt-section--category">
                            
  <header class="dt-section__header" >
    <h2 class="dt-section__title">
      <a data-utm="Home|Box_ChuyenLa|1" data-cat-id="132" title="Chuyện lạ" href="/chuyen-la.htm">Chuyện lạ</a>
    </h2>
    <ul class="dt-section__nav">
          </ul>
  </header>

                            <div class="dt-section__body">
                                <ul class="dt-list dt-list--grid dt-list--grid-3">
                                   
                                        <li>
                                            
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_ChuyenLa|1"
 class="news-item__avatar"   href="/chuyen-la/video-kinh-hai-ho-lac-vao-thi-tran-duoi-can-nguoi-roi-xuong-ho-o-an-do-20201128223608321.htm"
  title="Video: Kinh hãi hổ lạc vào thị trấn, đuổi cắn người rơi xuống hố ở Ấn Độ">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Video: Kinh hãi hổ lạc vào thị trấn, đuổi cắn người rơi xuống hố ở Ấn Độ" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/388_258/2020/11/28/screen-shot-20201128-at-103437-pm-1606577698358.png" src="https://icdn.dantri.com.vn/zoom/388_258/filters:quality(0)/2020/11/28/screen-shot-20201128-at-103437-pm-1606577698358.png">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_ChuyenLa|1"
  href="/chuyen-la/video-kinh-hai-ho-lac-vao-thi-tran-duoi-can-nguoi-roi-xuong-ho-o-an-do-20201128223608321.htm"
  title="Video: Kinh hãi hổ lạc vào thị trấn, đuổi cắn người rơi xuống hố ở Ấn Độ">
  
  Video: Kinh hãi hổ lạc vào thị trấn, đuổi cắn người rơi xuống hố ở Ấn Độ        <i class="news-title-icon ico-news-type-video"> </i>  
  
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_ChuyenLa|1" class="news-item__sapo" title="Video: Kinh hãi hổ lạc vào thị trấn, đuổi cắn người rơi xuống hố ở Ấn Độ" href="/chuyen-la/video-kinh-hai-ho-lac-vao-thi-tran-duoi-can-nguoi-roi-xuong-ho-o-an-do-20201128223608321.htm">Một con hổ không biết từ đâu đi lạc vào một thị trấn đông dân và bắt đầu đuổi cắn người. Video hiện trường ghi cảnh tượng kinh hoàng khi con hổ lao vào một người đàn ông, khiến người này rơi xuống hố.</a>
                                             </div>
    </div>

                                        </li>
                                        <li>
                                            
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_ChuyenLa|2"
 class="news-item__avatar"   href="/chuyen-la/nguoi-dan-ong-bi-ban-7-phat-dan-3-nam-sau-bi-dao-dam-xuyen-dau-20201127220715765.htm"
  title="Người đàn ông bị bắn 7 phát đạn, 3 năm sau bị dao đâm xuyên đầu">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Người đàn ông bị bắn 7 phát đạn, 3 năm sau bị dao đâm xuyên đầu" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/388_258/2020/11/27/nguoi-dan-ong-bi-ban-7-phat-dan-3-nam-sau-bi-dao-dam-xuyen-dau-1-1606489444686.jpg" src="https://icdn.dantri.com.vn/zoom/388_258/filters:quality(0)/2020/11/27/nguoi-dan-ong-bi-ban-7-phat-dan-3-nam-sau-bi-dao-dam-xuyen-dau-1-1606489444686.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_ChuyenLa|2"
  href="/chuyen-la/nguoi-dan-ong-bi-ban-7-phat-dan-3-nam-sau-bi-dao-dam-xuyen-dau-20201127220715765.htm"
  title="Người đàn ông bị bắn 7 phát đạn, 3 năm sau bị dao đâm xuyên đầu">
  
  Người đàn ông bị bắn 7 phát đạn, 3 năm sau bị dao đâm xuyên đầu    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_ChuyenLa|2" class="news-item__sapo" title="Người đàn ông bị bắn 7 phát đạn, 3 năm sau bị dao đâm xuyên đầu" href="/chuyen-la/nguoi-dan-ong-bi-ban-7-phat-dan-3-nam-sau-bi-dao-dam-xuyen-dau-20201127220715765.htm">Đang làm việc, anh Harker bất ngờ bị một kẻ lạ mặt vô cớ tấn công. Kẻ lạ mặt đâm thẳng con dao ngập sâu vào đầu Harker, nhưng điều "thần kỳ" đã xảy ra.</a>
                                             </div>
    </div>

                                        </li>
                                        <li>
                                            
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_ChuyenLa|3"
 class="news-item__avatar"   href="/chuyen-la/nguoi-ngoai-hanh-tinh-cam-cay-cot-kim-loai-bi-an-giua-sa-mac-my-20201127221241034.htm"
  title="Người ngoài hành tinh cắm cây cột kim loại bí ẩn giữa sa mạc Mỹ?">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Người ngoài hành tinh cắm cây cột kim loại bí ẩn giữa sa mạc Mỹ?" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/388_258/2020/11/27/nguoi-ngoai-hanh-tinh-cam-cay-cot-kim-loai-bi-an-giua-sa-mac-my-1-1606489692553.jpg" src="https://icdn.dantri.com.vn/zoom/388_258/filters:quality(0)/2020/11/27/nguoi-ngoai-hanh-tinh-cam-cay-cot-kim-loai-bi-an-giua-sa-mac-my-1-1606489692553.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_ChuyenLa|3"
  href="/chuyen-la/nguoi-ngoai-hanh-tinh-cam-cay-cot-kim-loai-bi-an-giua-sa-mac-my-20201127221241034.htm"
  title="Người ngoài hành tinh cắm cây cột kim loại bí ẩn giữa sa mạc Mỹ?">
  
  Người ngoài hành tinh cắm cây cột kim loại bí ẩn giữa sa mạc Mỹ?    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_ChuyenLa|3" class="news-item__sapo" title="Người ngoài hành tinh cắm cây cột kim loại bí ẩn giữa sa mạc Mỹ?" href="/chuyen-la/nguoi-ngoai-hanh-tinh-cam-cay-cot-kim-loai-bi-an-giua-sa-mac-my-20201127221241034.htm">Trong khi dùng trực thăng để giám sát số lượng cừu sừng trong sa mạc bang Utah, Mỹ, các phi công thuộc Sở An toàn Công cộng bang Utah (DPS) bất ngờ phát hiện một khối kim loại lớn cắm sừng sững trên đất.</a>
                                             </div>
    </div>

                                        </li>
                                </ul>
                            </div>
                        </section>
                    </div>
    </div>
    <div class="row row-eq-height mb-5">
                    <div class="col-7">
                        <section class="dt-section dt-section--category">
                            
  <header class="dt-section__header" >
    <h2 class="dt-section__title">
      <a data-utm="Home|Box_Blog|1" data-cat-id="702" title="Blog" href="/blog.htm">Blog</a>
    </h2>
    <ul class="dt-section__nav">
          </ul>
  </header>

                            <div class="dt-section__body">
                                <ul class="dt-list dt-list--grid dt-list--grid-3">
                                   
                                        <li>
                                            
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_Blog|1"
 class="news-item__avatar"   href="/blog/song-la-cho-dau-chi-nhan-rieng-minh-20201129045945416.htm"
  title="&quot;Sống là cho đâu chỉ nhận riêng mình…&quot;">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="&quot;Sống là cho đâu chỉ nhận riêng mình…&quot;" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/388_258/2020/11/29/abc-1606600499886.jpg" src="https://icdn.dantri.com.vn/zoom/388_258/filters:quality(0)/2020/11/29/abc-1606600499886.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_Blog|1"
  href="/blog/song-la-cho-dau-chi-nhan-rieng-minh-20201129045945416.htm"
  title="&quot;Sống là cho đâu chỉ nhận riêng mình…&quot;">
  
  &quot;Sống là cho đâu chỉ nhận riêng mình…&quot;    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_Blog|1" class="news-item__sapo" title="&quot;Sống là cho đâu chỉ nhận riêng mình…&quot;" href="/blog/song-la-cho-dau-chi-nhan-rieng-minh-20201129045945416.htm">(Dân trí)&nbsp;- Xin tri ân những người hùng thầm lặng - không chỉ 400 đại biểu xuất sắc có mặt ở Lễ tuyên dương, mà còn là tất thảy tấm lòng cao cả ở trên đời.</a>
                                             </div>
    </div>

                                        </li>
                                        <li>
                                            
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_Blog|2"
 class="news-item__avatar"   href="/blog/nhung-vuon-hoa-hong-pha-nat-tien-dan-20201128014316660.htm"
  title="Những &quot;vườn hoa hồng&quot; phá nát tiền dân">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Những &quot;vườn hoa hồng&quot; phá nát tiền dân" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/388_258/2020/11/28/hoahonghopdong-1-1606502455993.jpg" src="https://icdn.dantri.com.vn/zoom/388_258/filters:quality(0)/2020/11/28/hoahonghopdong-1-1606502455993.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_Blog|2"
  href="/blog/nhung-vuon-hoa-hong-pha-nat-tien-dan-20201128014316660.htm"
  title="Những &quot;vườn hoa hồng&quot; phá nát tiền dân">
  
  Những &quot;vườn hoa hồng&quot; phá nát tiền dân    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_Blog|2" class="news-item__sapo" title="Những &quot;vườn hoa hồng&quot; phá nát tiền dân" href="/blog/nhung-vuon-hoa-hong-pha-nat-tien-dan-20201128014316660.htm">(Dân trí)&nbsp;- Chỉ cần các cơ quan chức năng thanh tra xem có "nâng khống", "thổi giá", có "hoa hồng, hoa huệ" không là biết rõ nguyên nhân của việc "bùng nhùng" trong mua sắm.</a>
                                             </div>
    </div>

                                        </li>
                                        <li>
                                            
    <div class="news-item news-item--normal">
        


<a  data-utm="Home|Box_Blog|3"
 class="news-item__avatar"   href="/blog/maradona-hien-than-cho-nhung-gi-that-nhat-cua-con-nguoi-20201127043155893.htm"
  title="Maradona: &quot;Hiện thân cho những gì thật nhất của con người&quot;">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Maradona: &quot;Hiện thân cho những gì thật nhất của con người&quot;" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/388_258/2020/11/27/maradona-1606426186811.jpg" src="https://icdn.dantri.com.vn/zoom/388_258/filters:quality(0)/2020/11/27/maradona-1606426186811.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_Blog|3"
  href="/blog/maradona-hien-than-cho-nhung-gi-that-nhat-cua-con-nguoi-20201127043155893.htm"
  title="Maradona: &quot;Hiện thân cho những gì thật nhất của con người&quot;">
  
  Maradona: &quot;Hiện thân cho những gì thật nhất của con người&quot;    
</a>


  
           
            </h3>
            
                                     <a data-utm="Home|Box_Blog|3" class="news-item__sapo" title="Maradona: &quot;Hiện thân cho những gì thật nhất của con người&quot;" href="/blog/maradona-hien-than-cho-nhung-gi-that-nhat-cua-con-nguoi-20201127043155893.htm">(Dân trí)&nbsp;- Maradona qua đời ở tuổi 60, tôi chợt nhớ lời bài hát của cố nhạc sĩ Y Vân: "Em ơi có bao nhiêu. 60 năm cuộc đời". Cuộc đời của ông khá ngắn ngủi, nhưng những gì ông để lại sẽ trường tồn với thời gian.</a>
                                             </div>
    </div>

                                        </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="col-5">
                        <section class="dt-section dt-section--category">
                            
  <header class="dt-section__header" >
    <h2 class="dt-section__title">
      <a data-utm="Home|Box_DienDan|1" data-cat-id="673" title="Diễn đàn" href="/dien-dan.htm">Diễn đàn</a>
    </h2>
    <ul class="dt-section__nav">
          <li>
              <a data-utm="Home|DienDan|2" data-cat-id="701" title="Giáo dục" href="/dien-dan/giao-duc.htm">Giáo dục</a>
          </li>
          <li>
              <a data-utm="Home|DienDan|3" data-cat-id="668" title="Xã hội" href="/dien-dan/xa-hoi.htm">Xã hội</a>
          </li>
          <li>
              <a data-utm="Home|DienDan|4" data-cat-id="671" title="Thế giới" href="/dien-dan/the-gioi.htm">Thế giới</a>
          </li>
          </ul>
  </header>

                            <div class="dt-section__body">
                                <ul class="dt-list dt-list--3">
                                        <li>
                                            
    <div class="news-item news-item--left2right ">
        


<a  data-utm="Home|Box_DienDan|1"
 class="news-item__avatar"   href="/dien-dan/ai-dung-bang-gia-20201126122614680.htm"
  title="Ai dùng bằng giả?">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Ai dùng bằng giả?" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/360_240/2020/11/26/mbanbanggia-1570566179796-1606368318215.jpg" src="https://icdn.dantri.com.vn/zoom/360_240/filters:quality(0)/2020/11/26/mbanbanggia-1570566179796-1606368318215.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_DienDan|1"
  href="/dien-dan/ai-dung-bang-gia-20201126122614680.htm"
  title="Ai dùng bằng giả?">
  
  Ai dùng bằng giả?    
</a>


  
           
            </h3>
            
                                                              <div class="news-item__meta">
                                            <span class="news-item__time">Thứ Năm 26/11/2020 - 12:26</span>
                </div>
                    </div>
    </div>

                                        </li>
                                        <li>
                                            
    <div class="news-item news-item--left2right news-item--small">
        


<a  data-utm="Home|Box_DienDan|2"
 class="news-item__avatar"   href="/dien-dan/khi-hoa-hau-lo-comment-vo-co-lo-20201125132902033.htm"
  title="Khi hoa hậu lộ comment &quot;vờ cờ lờ&quot;...">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Khi hoa hậu lộ comment &quot;vờ cờ lờ&quot;..." class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/240_156/2020/11/25/anh-che-1606285522733.jpg" src="https://icdn.dantri.com.vn/zoom/240_156/filters:quality(0)/2020/11/25/anh-che-1606285522733.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_DienDan|2"
  href="/dien-dan/khi-hoa-hau-lo-comment-vo-co-lo-20201125132902033.htm"
  title="Khi hoa hậu lộ comment &quot;vờ cờ lờ&quot;...">
  
  Khi hoa hậu lộ comment &quot;vờ cờ lờ&quot;...    
</a>


  
           
            </h3>
            
                                                              <div class="news-item__meta">
                                            <span class="news-item__time">Thứ Tư 25/11/2020 - 13:29</span>
                </div>
                    </div>
    </div>

                                        </li>
                                        <li>
                                            
    <div class="news-item news-item--left2right news-item--small">
        


<a  data-utm="Home|Box_DienDan|3"
 class="news-item__avatar"   href="/dien-dan/hoi-chung-so-sai-20201124133051879.htm"
  title="Hội chứng sợ sai">
  
  
                        
                        <div class="dt-thumbnail dt-thumbnail--3x2">
                            <img alt="Hội chứng sợ sai" class=" no-img" lazy-src="https://icdn.dantri.com.vn/zoom/240_156/2020/11/24/giamtoidabienchesekhongconcongchuc-100-trieu-1487904536060-1606199403243.jpg" src="https://icdn.dantri.com.vn/zoom/240_156/filters:quality(0)/2020/11/24/giamtoidabienchesekhongconcongchuc-100-trieu-1487904536060-1606199403243.jpg">
                        </div> 
                        
                         
</a>


          <div class="news-item__content">
           

            <h3 class='news-item__title'>
                    


<a  data-utm="Home|Box_DienDan|3"
  href="/dien-dan/hoi-chung-so-sai-20201124133051879.htm"
  title="Hội chứng sợ sai">
  
  Hội chứng sợ sai    
</a>


  
           
            </h3>
            
                                                              <div class="news-item__meta">
                                            <span class="news-item__time">Thứ Ba 24/11/2020 - 13:31</span>
                </div>
                    </div>
    </div>

                                        </li>
                                </ul>
                            </div>
                        </section>
                    </div>
    </div>

                <div id="xds-55"></div>



    
<script type="application/ld+json">
{"@context":"http://schema.org","@type":"Organization","name":"Báo Dân Trí","url":"https://dantri.com.vn","slogan":"Tin tức Việt Nam và quốc tế nóng, nhanh, cập nhật 24h","logo":"https://cdnweb.dantri.com.vn/bundle/static/assets/logo_dantri.png","email":"info@dantri.com.vn","additionalType":"https://vi.wikipedia.org/wiki/B%C3%A1o_%C4%91i%E1%BB%87n_t%E1%BB%AD","sameAs":["https://www.facebook.com/baodantridientu","https://vi.wikipedia.org/wiki/D%C3%A2n_tr%C3%AD_(b%C3%A1o)"],"address":{"@type":"PostalAddress","streetAddress":"Nhà 48, ngõ 2 Giảng Võ, Cát Linh, Đống Đa","addressLocality":"Hà Nội"},"contactPoint":[{"@type":"ContactPoint","telephone":"+842437366491","contactOption":"TollFree","contactType":"customer service","areaServed":"VN"}]}</script>



</div>
            <div id="xds-4"></div>

</main>

<footer class="dt-footer">
  


  <div class="dt-footer__content">
    <div class="container">
      <div class="row">
        <div class="dt-footer__info col-6">
          <p>Cơ quan của Bộ Lao động - Thương binh và Xã hội</p>
          <p>Tổng biên tập: Phạm Tuấn Anh</p>
          <p>
            Giấy phép hoạt động báo điện tử Dân trí số 298/GP - BTTTT Hà Nội, ngày 15-07-2020.
          </p>
          <p>Tòa soạn: Nhà 48, ngõ 2 Giảng Võ, Cát Linh, Đống Đa, Hà Nội</p>
          <p>
            Điện thoại: <a href="tel:024-3736-6491">024-3736-6491</a>. Fax:
            <a href="tel:024-3736-6491">024-3736-6491</a>
          </p>
          <p>
            Email: <a href="mailto:info@dantri.com.vn">info@dantri.com.vn</a>.
            Website:
            <a href="https://www.dantri.com.vn">https://www.dantri.com.vn</a>
          </p>
          <p>
            Mọi hành động sử dụng nội dung đăng tải trên Báo điện tử Dân trí tại
            địa chỉ www.dantri.com.vn phải có sự đồng ý bằng văn bản của Báo
            điện tử Dân trí.
          </p>
        </div>
        <div class="col-1"></div>
        <div class="dt-footer__ads col-4">
          <p class="dt-footer_ads-info">
            Liên hệ quảng cáo:&nbsp;<a href="tel:0945540330">0945.54.03.03</a>
            
          </p>
          <p>Email: <a href="mailto:quangcao@dantri.com.vn">quangcao@dantri.com.vn</a></p>
          <p>
            <a switch-version href="javascript:void(0);"><strong>Xem bản mobile</strong></a>
          </p>
          <div class="dt-footer__app clearfix">
            <a aria-label="Báo Dân trí ios" title="Báo Dân trí - Dantri.com.vn" target="_blank" rel="noopener" href="https://apps.apple.com/vn/app/b%C3%A1o-d%C3%A2n-tr%C3%AD-dantri-com-vn/id1455334618?l=vi">
              <i class="dt-icon icon-app-store"></i>
            </a>
            <a aria-label="Báo Dân trí android" title="Báo Dân trí - Dantri.com.vn" target="_blank" rel="noopener" href="https://play.google.com/store/apps/details?id=vn.com.dantrinews.android">
              <i class="dt-icon icon-play-store"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>


<script>var jsSettings={"ImageDomain":"https://icdn.dantri.com.vn","VideoDomain":"https://vcdn.dantri.com.vn","AudioDomain":"https://acdn.dantri.com.vn","CommentsDomain":"https://comment.dantri.com.vn","ApiComments":"https://apicomment.dantri.com.vn","DuLichDomain":"https://dulich.dantri.com.vn","TuyenSinhDomain":"https://tuyensinh.dantri.com.vn","DuHocDomain":"https://duhoc.dantri.com.vn","WebDomain":"https://dantri.com.vn","MobileDomain":"https://dantri.com.vn","CaptchaDomain":"https://captcha.dantri.com.vn","WebApi":"https://webapi.dantri.com.vn","AssertsDomain":"https://cdnweb.dantri.com.vn","ResourceDomains":["https://*.dantri.com.vn/**","http://*.dantri.com.vn/**"],"CurrentDomain":"https://dantri.com.vn","IsMobile":0,"UngHoDomain":"https://ungho.dantri.com.vn","FacebookAppId":"164035690775918","CommonCDN":"https://cdnasset.dantri.com.vn","IsAmp":0,"BlockedAds":false,"Features":{"BannerUngThu":false},"AppType":"Web","XdsSlots":{"INVALID":"xds-0","TOP_HEADER":"xds-1","TOP_NEXT_TO_DT_LOGO":"xds-2","BACKGROUP":"xds-3","HOME_BALLOON_ADS":"xds-4","HOME_BACKGROUND":"xds-40","HOME_TOP_HEADER":"xds-41","HOME_TOP_RIGHT":"xds-50","HOME_MIDDLE_RIGHT":"xds-51","HOME_CENTER_BANNER":"xds-52","HOME_NATIVE_1":"xds-53","HOME_NATIVE_2":"xds-54","HOME_BOTTOM":"xds-55","HOME_MIDDLE_COLUMN_BOTTOM":"xds-56","HOME_PRIMARY_TOP":"xds-57","HOME_PRIMARY_BOTTOM":"xds-58","HOME_NATIVE_3":"xds-59","HOME_NATIVE_4":"xds-60","HOME_HORIZONTAL_0":"xds-70","HOME_HORIZONTAL_1":"xds-71","HOME_HORIZONTAL_2":"xds-72","HOME_HORIZONTAL_3":"xds-73","HOME_HORIZONTAL_4":"xds-74","HOME_HORIZONTAL_5":"xds-75","HOME_HORIZONTAL_6":"xds-76","HOME_HORIZONTAL_7":"xds-77","CATEGORY_BACKGROUND":"xds-90","CATEGORY_TOP_HEADER":"xds-92","CATEGORY_TOP_RIGHT":"xds-100","CATEGORY_MIDDLE_RIGHT":"xds-101","CATEGORY_MIDDLE_CENTER":"xds-102","CATEGORY_NATIVE_1":"xds-103","CATEGORY_NATIVE_2":"xds-104","CATEGORY_BOTTOM":"xds-105","CATEGORY_NATIVE_3":"xds-106","CATEGORY_TOP_READ":"xds-107","CATEGORY_NATIVE_4":"xds-108","ARTICLE_RIGHT":"xds-150","ARTICLE_BOTTOM":"xds-151","ARTICLE_BANNER":"xds-152","ARTICLE_NATIVE_1":"xds-153","ARTICLE_NATIVE_2":"xds-154","ARTICLE_IN_PAGE_1":"xds-155","ARTICLE_IN_PAGE_2":"xds-156","ARTICLE_TOP_HEADER":"xds-157","ARTICLE_BOTTOM_PAGE":"xds-158","ARTICLE_NATIVE_3":"xds-159","MOBILE_TOP_HEADER":"xds-200","MOBILE_TOP_MOST":"xds-201","MOBILE_AFTER_BREADCRUMB":"xds-250","MOBILE_CATE_NATIVE_1":"xds-260","MOBILE_CATE_NATIVE_2":"xds-261","MOBILE_CATE_NATIVE_3":"xds-262","MOBILE_CATE_E_MAGAZINE_1":"xds-263","MOBILE_CATE_BOTTOM":"xds-264","MOBILE_CATEGORY_CENTER_1":"xds-265","MOBILE_CATE_ABOVE_NAV":"xds-266","MOBILE_BEFORE_FOOTER":"xds-300","MOBILE_HOME_CENTER_1":"xds-301","MOBILE_HOME_CENTER_2":"xds-302","MOBILE_BIG_ARTICLE_1":"xds-305","MOBILE_BIG_ARTICLE_2":"xds-306","MOBILE_HOME_CENTER_3":"xds-307","MOBILE_HOME_CENTER_4":"xds-308","MOBILE_HOME_CENTER_5":"xds-309","MOBILE_BEFORE_VIDEO":"xds-400","MOBILE_HOME_BOTTOM":"xds-401","MOBILE_FIRST_10_ARTICLE":"xds-500","MOBILE_IN_PAGE_1":"xds-3030","MOBILE_IN_PAGE_2":"xds-3040","MOBILE_BIG_ARTICLE_3":"xds-3061","MOBILE_BIG_ARTICLE_4":"xds-3062","MOBILE_BIG_ARTICLE_5":"xds-3063","MOBILE_BEFORE_COMMENT":"xds-3064","MOBILE_HOME_CENTER_6":"xds-3091","MOBILE_HOME_CENTER_7":"xds-3092","MOBILE_HOME_CENTER_8":"xds-3093","MOBILE_ARTICLE_E_MAGAZINE":"xds-4010","MOBILE_ARTICLE_AUTHOR_SIGN":"xds-5001","AMP_AUTO_ADS":"xds-9999","AMP_HOME_BEFORE_TTSK":"xds-10000","AMP_HOME_TTSK_5TH":"xds-10001","AMP_HOME_BEFORE_VIDEO":"xds-10002","AMP_HOME_BEFORE_THE_THAO":"xds-10003","AMP_HOME_NHAN_AI":"xds-10004","AMP_HOME_VAN_HOA":"xds-10005","AMP_HOME_PHAP_LUAT":"xds-10006","AMP_HOME_OTO":"xds-10007","AMP_HOME_KHOA_HOC":"xds-10008","AMP_HOME_DU_HOC":"xds-10009","AMP_HOME_BLOG":"xds-10010","AMP_ARTICLE_AFTER_SAPO":"xds-10050","AMP_ARTICLE_PARAGRAPH9":"xds-10051","AMP_ARTICLE_PARAGRAPH3":"xds-10052","AMP_ARTICLE_SHARE":"xds-10053","AMP_ARTICLE_LASTEST":"xds-10060","AMP_ARTICLE_FOOTER":"xds-10061","AMP_CATE_TOP":"xds-10100","AMP_CATE_TOP4":"xds-10101","AMP_CATE_AFTER_VIDEO":"xds-10102","AMP_CATE_NEWS_5TH":"xds-10103","AMP_CATE_NEWS_BOTTOM":"xds-10104","AMP_CATE_FOOTER":"xds-10105","AMP_TAG_TOP":"xds-10150","AMP_TAG_MIDDLE":"xds-10151","AMP_TAG_FOOTER":"xds-10152","INTER_WEB_ARTICLE_TIN_LIEN_QUAN":"xds-20000","INTER_MOBILE_ARTICLE_TIN_LIEN_QUAN":"xds-30000","CAFE_HOZ":"xds-1000000"},"IsInter":false,"Version":"637422901018333340","GoogleCaptchaConfig":{"SiteKey":"6LfAP8kZAAAAAPiZ8ZFuHdhifvNch-G9O1-aLQRs","SecretKey":null}};</script>

    


  <script  src="https://cdnweb.dantri.com.vn/bundle/static/dantri.min.js?_=f1ce08bf"></script>
<script  src="https://cdnweb.dantri.com.vn/bundle/static/vdlibs~dantri.min.js?_=f1ce08bf"></script>
<script  src="https://cdnweb.dantri.com.vn/bundle/static/vendors~dantri.min.js?_=f1ce08bf"></script>
      
</body>
</html>
