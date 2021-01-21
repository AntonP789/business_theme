<style>
    /*----------General css for slick slider----------*/
    .slick-slider{
        position: relative;
        display: block;
        box-sizing: border-box;
        -webkit-user-select: none;
        -moz-user-select: none;
            -ms-user-select: none;
                user-select: none;
        -webkit-touch-callout: none;
        -khtml-user-select: none;
        -ms-touch-action: pan-y;
            touch-action: pan-y;
        -webkit-tap-highlight-color: transparent;
    }
    .slick-list{
        position: relative;
        display: block;
        overflow: hidden;
        margin: 0;
        padding: 0;
    }
    .slick-list:focus{
        outline: none;
    }
    .slick-list.dragging{
        cursor: pointer;
        cursor: hand;
    }
    .slick-slider .slick-track,
    .slick-slider .slick-list{
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
    }
    .slick-track{
        position: relative;
        top: 0;
        left: 0;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    .slick-track:before,
    .slick-track:after{
        display: table;
        content: '';
    }
    .slick-track:after{
        clear: both;
    }
    .slick-loading .slick-track{
        visibility: hidden;
    }
    .slick-slide{
        display: none;
        float: left;
        height: 100%;
        min-height: 1px;
    }
    [dir='rtl'] .slick-slide{
        float: right;
    }
    .slick-slide img{
        display: block;
    }
    .slick-slide.slick-loading img{
        display: none;
    }
    .slick-slide.dragging img{
        pointer-events: none;
    }
    .slick-initialized .slick-slide{
        display: block;
    }
    .slick-loading .slick-slide{
        visibility: hidden;
    }
    .slick-vertical .slick-slide{
        display: block;
        height: auto;
        border: 1px solid transparent;
    }
    .slick-arrow.slick-hidden {
        display: none;
    }
    /*---------- End General css for slick slider----------*/

    /*Footer Styles*/
    .footer-top {
        padding: 60px 0;
        background-color: #141414;
    }
    .footer-top-box {
        display: flex;
    }
    .footer-top-link {
        width: 25%;
    }
    .footer-top-link ul li a {
        text-transform: uppercase;
        color: #8d8d8d;
        font-size: 18px;
    }
    .footer-top-link ul li a:hover  {
        color: var(--main-color);
        text-decoration: none;
    }
    .footer-top-social {
        border-left: 1px solid #434343;
        border-right: 1px solid #434343;
        width: 50%;
        padding: 0 10px;
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: space-between;
    }
    .footer-top-social > img {
        margin-bottom: 80px;
        width: 370px;
    }
    .footer-top-social ul {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .footer-top-social ul li {
        padding: 0 10px;
    }
    .footer-top-social ul li a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 70px;
        height: 70px;
        border-radius: 50%;
        background-color: #fff;
        transition: .3s;
    }
    .footer-top-social ul li a img {
        width: 30px;
        height: 30px;
        transition: 0.3s;
    }
    .footer-top-social ul li a:hover{
        box-shadow: 0px 0px 15px rgba(143,198,61,0.72)
    }
    .footer-top-social ul li a img:last-child,
    .footer-top-social ul li a:hover img:first-child{
        opacity: 1;
    }
    .footer-top-social ul li a img:first-child,
    .footer-top-social ul li a:hover img:last-child{
        opacity: 0;
    }
    .footer-top-contact {
        width: 25%;
        display: flex;
        text-align: right;
        padding-left: 60px;
        flex-direction: column;
    }
    .footer-top h3 {
        margin-bottom: 35px;
        font-size: 30px;
        color: var(--main-color);
        text-transform: uppercase;
    }
    .footer-top-contact ul li {
        color: #8d8d8d;
    }
    .footer-top-contact ul li:not(:last-child){
        margin-bottom: 35px;
    }
    .footer-top-contact ul li a {
        font-size: var(--font_size_standard);
        transition: all linear .3s;
        color: #8d8d8d;
        font-family: 'Rubik', sans-serif;
    }
    .footer-top-contact ul li a:hover {
        text-decoration: none;
        color: var(--main-color);
    }
    .footer-top-nav {
        padding: 45px 0;
    }
    .footer-top-nav ul {
        display: flex;
        justify-content: space-around;
        align-items: center;
    }
    .footer-top-nav ul li a {
        font-family: 'Fira Sans Condensed', sans-serif;
        font-weight: bold;
        color: #fff;
        text-transform: uppercase;
        font-size: 24px;
        text-decoration: none;
    }
    .footer-top-nav ul li a:hover {
        color: var(--main-color);
    }
    .footer-bottom {
        padding: 25px 0;
        background-color: var(--title-color);
    }
    .footer-bottom p {
        text-align: center;
        color: #fff;
        text-transform: uppercase;
        font-weight: 300;
    }
    @media screen and (max-width: 1200px){
        .footer-top-contact {
            padding-left: 0;
        }
        .footer-top-box{
            padding: 0 20px;
        }
    }
    @media screen  and (max-width: 991px){
        .footer-top-social > img {
            margin-bottom: 30px;
        }
        .footer-top-social {
            border: none;
            order: -1;
            padding-bottom: 50px;
        }
        .footer-top-box {
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .footer-top-link {
            width: 50%;
            max-width: 250px;
        }
        .footer-top-social {
            width: 100%;
        }
        .footer-top-contact {
            width: 50%;
            max-width: 250px;
        }
        .footer-top-nav ul {
            flex-wrap: wrap;
        }
        .footer-top-nav ul li {
            width: 33.333%;
            text-align: center;
            margin-bottom: 20px;
        }
        .footer-top-nav {
            padding: 20px 0;
        }
        .footer-bottom {
            padding: 20px 0;
        }
    }
    @media screen and (max-width: 767px){
        .footer-top h3 {
            margin-bottom: 20px;
        }
        .footer-top-contact ul li {
            margin-bottom: 10px;
        }
        .footer-top-link {
            width: 100%;
            text-align: center;
        }
        .footer-top-contact {
            width: 100%;
            text-align: center;
        }
        .footer-top {
            padding: 50px 0 30px;
        }
        .footer-top-contact,
        .footer-top-link{
            max-width: none;
        }
        .footer-top-link{
            margin-bottom: 40px;
        }
        .footer-top-social > img {
            margin-bottom: 40px;
        }
        .footer-top-contact ul li:not(:last-child) {
            margin-bottom: 10px;
        }
    }
    @media screen and (max-width: 600px){
        .footer-top-social > img {
            width: 280px;
        }
    }
</style>