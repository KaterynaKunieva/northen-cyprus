<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Test</title>
  <link rel="stylesheet" href="css/main.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- head:css -->

  <style>html{overflow-x:hidden}body{font-family:Circe;font-size:15px;margin:0 auto;overflow-x:hidden}.container{padding-left:54px;padding-right:57px;height:100%}header{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center;position:absolute;padding:10px 58px 0 92px;width:100%;background:-webkit-gradient(linear,left top,left bottom,from(#006264),to(transparent));background:-o-linear-gradient(top,#006264,transparent);background:linear-gradient(180deg,#006264,transparent)}.header__about{padding:10px 58px 145px 92px}.header__contacts{background:#1e6465}.header__contacts .head__menu ul li a:hover{color:#a1827c}.header__logo{max-width:140px;max-height:120px;padding:10px;margin:-10px;width:100%;height:100%;background:-o-radial-gradient(center,ellipse,rgba(255,255,255,.2) 30%,rgba(255,255,255,0) 70%);background:radial-gradient(ellipse at center,rgba(255,255,255,.2) 30%,rgba(255,255,255,0) 70%)}.header__logo img{max-height:100px;height:100%;max-width:140px;width:100%}.header__phone{max-width:48px;max-height:49px;width:100%;height:100%;margin-left:36px}.head__menu{margin-left:auto}.head__menu ul{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center;max-width:580px}.head__menu ul>li{margin-left:38px}.head__menu ul>li>a{text-decoration:none;text-transform:uppercase;color:#fff;font-weight:700}.head__menu ul>li>a:hover{color:#1e6465}.selectedMenu{color:#1e6465!important}.main_head{max-height:100vh;background-repeat:no-repeat;background-position:center;background-size:cover;width:100%}.main__content{height:100%;padding:363px 115px 168px}.main__title{width:490px;margin-bottom:61px;font-weight:700;font-size:42px;letter-spacing:1.68px;color:#fff}.main__btn{height:56px;width:253px;padding:18px 24px 20px;background-color:#a7857e;border:1px solid #a7857e;border-radius:28px;-webkit-border-radius:28px;-moz-border-radius:28px;-ms-border-radius:28px;-o-border-radius:28px;font-family:Circe;font-size:18px;line-height:100%;font-weight:700;color:#fff;white-space:nowrap;text-align:center}.main__btn:hover{cursor:pointer}.toggle__menu{display:none}.sandwich__menu{width:58px;height:41px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.sandwich__menu:hover{cursor:pointer}.sw-topper{width:58px;height:9px;margin-bottom:7px;background:#fff;border:none;-webkit-transition:-webkit-transform .5s,top .2s;-webkit-transition:top .2s,-webkit-transform .5s;transition:top .2s,-webkit-transform .5s;-o-transition:transform .5s,top .2s;transition:transform .5s,top .2s;transition:transform .5s,top .2s,-webkit-transform .5s;display:block;border-radius:3px}.sw-bottom{width:58px;height:9px;margin-bottom:7px;background:#fff;border:none;-webkit-transition:-webkit-transform .5s,top .2s;-webkit-transition:top .2s,-webkit-transform .5s;transition:top .2s,-webkit-transform .5s;-o-transition:transform .5s,top .2s;transition:transform .5s,top .2s;transition:transform .5s,top .2s,-webkit-transform .5s;-webkit-transition-delay:.2s,0;-o-transition-delay:.2s,0;transition-delay:.2s,0;border-radius:3px}.sw-footer{width:58px;height:9px;background:#fff;border:none;-webkit-transition:all .5s;-o-transition:all .5s;transition:all .5s;-webkit-transition-delay:.1s;-o-transition-delay:.1s;transition-delay:.1s;border-radius:3px}.sandwich__menu.active .sw-topper{position:absolute;top:5px;-webkit-transform:rotate(-45deg);-ms-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-clip-path:polygon(100% 0,0 0,0 100%,100% 100%);clip-path:polygon(100% 0,0 0,0 100%,100% 100%)}.sandwich__menu.active .sw-footer{position:absolute;top:5px;left:0;-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg);-webkit-clip-path:polygon(100% 0,0 0,0 100%,100% 100%);clip-path:polygon(100% 0,0 0,0 100%,100% 100%)}.sandwich__menu.active .sw-bottom{opacity:0;-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg);-webkit-clip-path:polygon(100% 0,0 0,0 100%,100% 100%);clip-path:polygon(100% 0,0 0,0 100%,100% 100%)}</style>

  <!-- endinject -->

  <!-- Load CSS, CSS Localstorage & WebFonts Main Function -->
  <!-- <script>!function(e){"use strict";function t(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&e.attachEvent("on"+t,n)}function n(t,n){return e.localStorage&&localStorage[t+"_content"]&&localStorage[t+"_file"]===n}function a(t,a){if(e.localStorage&&e.XMLHttpRequest)n(t,a)?o(localStorage[t+"_content"]):l(t,a);else{var s=r.createElement("link");s.href=a,s.id=t,s.rel="stylesheet",s.type="text/css",r.getElementsByTagName("head")[0].appendChild(s),r.cookie=t}}function l(e,t){var n=new XMLHttpRequest;n.open("GET",t,!0),n.onreadystatechange=function(){4===n.readyState&&200===n.status&&(o(n.responseText),localStorage[e+"_content"]=n.responseText,localStorage[e+"_file"]=t)},n.send()}function o(e){var t=r.createElement("style");t.setAttribute("type","text/css"),r.getElementsByTagName("head")[0].appendChild(t),t.styleSheet?t.styleSheet.cssText=e:t.innerHTML=e}var r=e.document;e.loadCSS=function(e,t,n){var a,l=r.createElement("link");if(t)a=t;else{var o;o=r.querySelectorAll?r.querySelectorAll("style,link[rel=stylesheet],script"):(r.body||r.getElementsByTagName("head")[0]).childNodes,a=o[o.length-1]}var s=r.styleSheets;l.rel="stylesheet",l.href=e,l.media="only x",a.parentNode.insertBefore(l,t?a:a.nextSibling);var c=function(e){for(var t=l.href,n=s.length;n--;)if(s[n].href===t)return e();setTimeout(function(){c(e)})};return l.onloadcssdefined=c,c(function(){l.media=n||"all"}),l},e.loadLocalStorageCSS=function(l,o){n(l,o)||r.cookie.indexOf(l)>-1?a(l,o):t(e,"load",function(){a(l,o)})}}(this);</script>
    <script>loadCSS("css/main.min.css", false, "all" );</script> -->
  <!-- Load CSS End -->
</head>

<body>
  <header>
    <button class="toggle__menu">
      <span class="menu sandwich__menu">
        <span class="sw-topper"></span>
        <span class="sw-bottom"></span>
        <span class="sw-footer"></span>
      </span>
    </button>
    <div class="header__logo"><img src="img/logo.png" alt="logo" /></div>
    <nav class="menu head__menu">
      <ul>
        <li><a href="estate.php">недвижимость</a></li>
        <li><a href="index.php">Про остров</a></li>
        <li><a href="about.php">О компании</a></li>
        <li><a href="contacts.php">контакты</a></li>
      </ul>
    </nav>
    <a class="header__phone">
      <img src="img/phone.png" alt="phone" />
    </a>
  </header>