<style>
:root {
    --main-color: #4495f8; 
    --active-color: #3ededc;
    --title-color: #343434;
    --overlay-img-color: #0b0941;
    --p-color: #929292;

}
/*Standart Settings*/
*{
    box-sizing: border-box;
}

h1 {
    font: 600 72px 'Rubik';
}
h2 {
    font: 400 48px 'Rubik', sans-serif;
}
h3 {
     font: 400 24px 'Rubik', sans-serif;
}
h4 {
     font: 400 20px 'Rubik', sans-serif;
}
h5 {
     font: 400 16px 'Rubik', sans-serif;
}
.standard_button {
    font: 700 16px 'Rubik';
    color: #fff;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    display: inline-block;
    padding: 17px 40px;
    border-radius: 40px;
    background-color: var(--main-color);
    text-decoration: none!important;
    transition: .3s;
}
.standard_button:hover{
    background: var(--active-color);
}
.button_second {
    font: 700 16px 'Rubik';
    color: #fff;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    display: inline-block;
    padding: 17px 40px;
    border-radius: 40px;
    background-color: rgba(255,255,255,.2);
    border: 1px solid var(--main-color);
    text-decoration: none;
    transition: .3s;
}
.button_second:hover{
    background: var(--active-color);
    border: 1px solid var(--active-color);
}
body{
    color: var(--p-color);
    font: 400 16px/1.8 'Rubik', sans-serif; 
    margin: 0;
}
body > .content{
    min-height: 650px;
}
ul{
    list-style-position: inside;
}
.customClear:before, .customClear:after,
.container-fluid-custom:before, .container-fluid-custom:after,
.container-custom-clear:before, .container-custom-clear:after{
    content:"";
    display:block;
    height:0;
    overflow:hidden;    
    clear:both;
}
footer ul, header ul{
    list-style: none;
    padding: 0;
    margin: 0;
}
.floatLeft{
    float: left;
}
.floatRight{
    float: right;
}
.clear{
    clear: both;
}
a, button, input[type="submit"], a img{
    transition:all 0.3s linear;
}
input.form-control::-moz-placeholder, textarea::-moz-placeholder{
    color: var(--paragraphover_color);
    opacity: 1!important;
}
input.form-control::-webkit-input-placeholder, textarea::-webkit-input-placeholder{
    color: var(--paragraphover_color);
}
input:not([type="checkbox"]), select{
    -moz-appearance: none;
    -webkit-appearance: none;    
}
select.form-control{
    color: var(--paragraphover_color);
}
.mobileAppear{
    display: none;
}
a, a:hover, a:focus{
    text-decoration: none;
}
.header > .container-fluid{
    padding: 0;
}
footer{
    box-shadow: 0 3px 15px rgba(0, 0, 0, 0.6);
}
iframe, img{
    max-width: 100%;
}
img{
    vertical-align: middle;
}
a img{
    border: none;
}
.forLink{
    display: none;
}
a.button{
    display: inline-block;
    padding: 10px 18px;
}
input, textarea, select{
    border-radius: 0;
    border: none;
    box-shadow: none;
}
.caret {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: 2px;
    vertical-align: middle;
    border-top: 4px dashed;
    border-top: 4px solid\9;
    border-right: 4px solid transparent;
    border-left: 4px solid transparent;
}
.container-custom {
    width: 100%;
    max-width: 1199px;
    padding: 0 15px;
    margin: 0 auto;
}
.container-flex{
    display: flex;
}
/*title-style*/
.title-wrap{
    width: 100%;
    max-width: 970px;
    margin: 0 auto 50px;
    padding: 0 15px;
    text-align: center;
    background-color: inherit;
}
.title-box{
    margin: 0;
    display: inline-block;
    position: relative;
    background-color: inherit;
}
.title-line{
    display: block;
    width: 100%;
    height: 1px;
    background: #bcbcbc;
    position: relative;
    top: 17px;
}
.subtitle-text {
    color: var(--active-color);
    text-transform: uppercase;
    font-family: 'Fira Sans Condensed', sans-serif;
    font-size: 18px;
    font-weight: bold;  
    background-color: inherit;
    padding: 0 20px;
    position: relative;
}
.title-text{
    margin: 0;
    padding-top: 5px;
    text-align: center;
    text-transform: uppercase;
    display: block;
    color: var(--title-color);
}

@media(max-width:767px){
    .title-text{
        font-size: 36px;
    }
    .title-wrap{
        margin-bottom: 30px;
    }
}
/*End Standart Settings*/
/*logo hover*/
.logo:hover img{
    opacity: 0.7;
}
/*header*//*header*//*header*/
header{
    position: absolute;
    width: 100%;
    z-index: 999;
}
header .container-fluid-custom{
    width: 100%;
}
header .rightSide{
    padding-top: 37px;
    padding-bottom: 26px;
    padding-right: 100px;
    white-space:nowrap;
}
header .rightSide .ownBut{
    background: #69031A;
    color: #fff;
    text-transform: uppercase;
    padding: 10px 38px;
    margin-top: 15px;
    font-size: 24px;
}
header .rightSide .ownBut:hover{
    background: #E1A73E;
}
.home header {
    background: transparent;
}
.mobileMenu{
    display: none;
}
.menu-item-has-children ul{
    position: absolute;
    top: 100%;
    display: none;
    min-width: 100%;
    left: 0;
    padding-top: 10px;
}
.menu-item-has-children ul li{
    display: block;
    margin-right: 0!important;
    position: relative;
}
.menu-item-has-children ul li a{
    padding: 10px 20px;
    text-transform: uppercase;
    display: block;
    text-align: left;
    background: var(--main-color);
    color: #fff;
    margin-top: 0;
    font-size: 16px;
}
.menu-item-has-children ul ul{
    top: 0;
    left: 100%;
    padding-top: 0;
}
.header-nav .caret{
    color: #fff;
}
.menu-item-has-children ul .caret{
    margin-left: 3px;
}
.openMenu{
    display: block!important;
}
.sub-menu .sub-menu{
    padding-top: 0!important;
}
.nav-wrap{
    padding-right: 20px;
    width: calc(100% - 420px);
    background: rgba(0,0,0,.6);
    position: relative;
}
.nav-wrap:before{
    content: "";
    width: 0;
    height: 0;
    border-top: 45px solid rgba(0,0,0,.6); 
    border-left: 30px solid transparent;
    position: absolute;
    top: 0;
    left: -30px;
}
.nav-wrap:after{
    content: "";
    width: 0;
    height: 0;
    border-bottom: 45px solid rgba(0,0,0,.6); 
    border-left: 30px solid transparent;
    position: absolute;
    bottom: 0;
    left: -30px;
}
header nav{
    text-align: center;
    margin: 0;
    display: flex;
    align-items: center;
}
header nav li{
    position: relative;
}
header nav li:not(:last-child){
    margin-right: 30px;
}
header nav li a{
    white-space:nowrap;
    color: #fff;
    display: block;
    text-decoration: none!important;  
    font: 700 16px 'Fira Sans Condensed';
    letter-spacing: 0.2em;
    position: relative;  
    background: transparent;
    text-transform: uppercase;
}
header nav li:last-child a:after {
    display: none;
}
header nav ul li:last-child a {
    border: 0;
}
header nav li a:hover{
    color: var(--active-color);
}
header nav .sub-menu{
    left: 0;
    position: absolute;
    top: 0;
    width: auto;
}
header nav .sub-menu li a:hover{
    background-color: var(--active-color);
    color: #fff;
}
header nav .sub-menu li{
    width: auto;
    min-width: 100%;
}
header nav > .menu-header-menu-container > ul > li > a{
    text-transform: uppercase;
    transition: background-color 0.3s;
}
header nav .menu-header-menu-container > ul{
    display: flex;
}
.logo {
    flex-shrink: 0;
}
.logo a{
    display: block;
    position: relative;
    transition: none;
}
.mobileMenu {
    background: transparent !important;
}
.logo img {
    display: block;
    max-height: 70px;
}
.fixing.activated nav .sub-menu li a {
    color: #fff;
}
.fixing.activated .contact a {
    color: #000;
    border: 1px solid #000;
}
.fixing.activated .contact a:hover {
    color: #0DBF9B;
    border-color: #0DBF9B;
    background: transparent; 
}
.fixing.activated .top-header{
    display: none;
}
.fixing.activated nav{
    margin: 0;
}
.fixing.activated .logo{
    overflow: hidden;
    width: 280px;
}
.fixing.activated .nav-wrap:before,
.fixing.activated .nav-wrap:after{
    display: none;
}
.fixing.activated .nav-wrap {
    width: calc(100% - 280px);
    background: #000;
}
header .fixing.activated nav > .menu-header-menu-container > ul > li > a{
    padding: 20px;
}
/*sticky header*/
.fixing{
    top: -70px;
    transition: top 0.3s
}
.fixing.activated{
    position: fixed;
    width: 100%;
    left: 0;
    background: var(--title-color);
}
.fixing.activated .bottom-header{
    border-bottom: none;
    padding: 10px 15px;
}
/*Mobile Menu*/
.mobileMenu{
    display: none;
    cursor: pointer;
    float: right;
    height: 80px;
    padding: 18px 12px;
    width: 80px;
}
.iconAnime{
    position: relative;
    width: 30px;
    height: 100%;
    display: inline-block;
    top: 0px;
    width: 100%;
}
.iconAnime span{
    height: 3px;
    width: 100%;
    border-radius: 3px;
    background: #fff;
    display: inline-block;
    position: absolute;
    right: 0;
}
.iconAnime span:first-child{
    top: 0;
    transition: all 0.25s;
}
.iconAnime span:nth-child(2){
    width: 80%;
    top: calc(50% - 2px);
    transition: all 0.25s;
}
.iconAnime span:last-child{
    width: 60%;
    bottom: 0;
    transition: all 0.25s;
}
.mobileMenuOpen .iconAnime span:first-child{
    top: calc(50% - 3px);
    transform: rotate(225deg);
    width: 100%;
}
.mobileMenuOpen .iconAnime span:nth-child(2){
    top: calc(50% - 2px);
    display:none;
}
.mobileMenuOpen .iconAnime span:last-child{
    top: 19px;
    transform: rotate(135deg);
    width: 100%;
}
.menu-item-has-children .thereCaret.active img{
    transform: rotate(90deg);
}
.menu-item-has-children .thereCaret{
    padding: 0px 10px;
    position: absolute;
    top: 0px;
    right: 0px;
    cursor: pointer;
    display: block;
    z-index: 2;
}
.thereCaret img{
    height: 25px;
    transition: all 0.3s;
    position: relative;
    top: 4px;
}
.menu-item-has-children ul {
    padding-top: 0;
}
/*Custom Elements Styling*/
.top-header{
    padding: 9px 0;
    background-color: rgba(255,255,255,.15);
}
.top-header > div{
    align-items: center;
    justify-content: flex-end;
}
.header-phone{
    padding-left: 35px;
    align-items: center;
    position: relative;
    color: var(--active-color);
    font:600 16px 'Fira Sans Condensed';
    letter-spacing: 0.1em;
    margin-right: 35px;
}
.header-phone:hover{
    color: #fff;
}
.header-phone:hover img:nth-child(2){
    opacity: 0;
}
.header-phone img{
    position: absolute;
    left: 0;
}
.social a{
    align-items: center;
    justify-content: center;
    position: relative;
    width: 35px;
    height: 35px;
    background-color: #fff;
    border-radius: 50%;
}
.social a:hover{
    background-color: var(--active-color);
}
.social a:hover img:last-child{
    opacity: 0;
}
.social li:not(:last-child){
    margin-right: 15px;
}
.social a img{
    position: absolute;
    height: 14px;
}
.bottom-header nav > div > ul{
    display: flex;
    flex-wrap: wrap;
}
.bottom-header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 15px;
    border-bottom: 1px solid rgba(255,255,255,.15);
}
/* underline hover */
header nav > div > ul > li > a {
  display: inline-block;
  vertical-align: middle;
  transform: translateZ(0);
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
}
header nav > div > ul > li > a:before {
  content: "";
  position: absolute;
  z-index: -1;
  left: 50%;
  right: 50%;
  bottom: -10px;
  background: var(--active-color);
  height: 4px;
  transition-property: left, right;
  transition-duration: 0.3s;
  transition-timing-function: ease-out;
}
header nav > div > ul > li > a:hover:before, 
header nav > div > ul > li > a:focus:before, 
header nav > div > ul > li > a:active:before {
  left: 0;
  right: 0;
}
/*end underline hover*/
.fixing.activated .logo img{
    width: 200px;
}
/*end header*//*end header*/

/*Responsivness*//*Responsivness*//*Responsivness*/
@media(max-width:1199px){
    .logo a{
        transition: none;
    }
    header nav .menu-header-menu-container > ul {
        flex-direction: column;
    }
    header .fixing.activated nav > .menu-header-menu-container > ul > li > a {
        padding: 12px;
    }    
    /*mobile*/
    .fixing nav{
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
    }
    header nav li a:after {
        display: none;
    }
    .fixing.activated .logo {
        margin: 0px;
    }
    .mobileMenu{
        display: block;
        float: right;
        width: 80px!important;
        height: 80px;
    }
    .bottom-header nav ul{
        flex-direction: column;
    }    
    header nav{
        padding: 0;
        margin-top: 0;
        overflow: auto;
        background: var(--main-color);
    }
    header nav li{
        float: none!important;
        display: block!important;
        text-align: left;
    }
    header nav li a{
        padding: 10px 15px;
        margin-top: 0;
        color: #fff!important;
        background: none!important;
        display: block;
    }
    .fixing nav > div > ul > li:last-child a{
        background: none!important;
    }
    .menu-item-has-children ul li a{
        padding: 5px 15px;
    }
    .sub-menu, .sub-menu .sub-menu{
        background: none!important;
        position: static;
        box-shadow: none!important;
    }
    .header-nav .menu-header-menu-container > ul > li{
        margin-right: 0!important;
    }
    .header-nav .menu-header-menu-container > ul > li > a{
        text-transform: uppercase;
        padding: 10px 15px!important;
        border-bottom: 1px solid #F3C45C!important;
    }
    .sub-menu, .sub-menu .sub-menu{
        background: none!important;
        position: static!important;
        box-shadow: none!important;
    }
    .sub-menu{
        padding-left: 20px!important;
        text-transform: uppercase;
    }
    .fixing.activated .iconAnime span {
        background: #fff;
    }
    .fixing.activated nav li a {
        color: #fff !important;
    }
}

@media(max-width:767px){
    .mobileMenu{
        width: 60px!important;
        height: 60px;
    }
    .mobileMenuOpen .iconAnime span:first-child {
        top: 50%;
    }
    .mobileMenuOpen .iconAnime span:last-child {
        top: 12px;
    }
    .header-phone a:last-child{
        margin-right: 0;
    }
    .bottom-header{
        padding: 15px;
    }
    .top-header > div{
        justify-content: center;
    }
}

@media(max-width:600px){
    .fixing.activated{
        top:0!important;
    }
    .fixing.activated .logo a{
        margin-left: 0;
    }
    .fixing.activated .logo {
        width: auto;
    }
    .logo img{
        max-height: 50px;
    }
    .bottom-header{
        padding: 10px 15px;
    }
}

</style>