<div id="modal_window" class="modal_window">
    <style>    
        #modal_window{
            width: 100vw;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 101%;
            z-index: 999999;
            transition: .5s;
            background-color: rgba(0,0,0,.7);
        }
        #modal_window.active{
            left: 0%;
        }
        #modal_window .overlay{
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }
        #modal_window .modal_subtitle{
            text-align: center;
            font: 400 16px/1.5 'Open Sans';
            color: var(--p-color);
            margin-bottom: 40px;
        }
        #modal_window .modal_title{
            padding: 0 20px;
            font: 700 28px/1.8 'Open Sans';
            text-align: center;
            color: var(--title-color);
            margin: 0;
            margin-bottom: 15px;
        }
        #modal_window p.line-title{
            font: 18px/1.2 'Open Sans';
            width: calc(100% + 100px);
            margin-left: -50px;
            text-align: center;   
        }
        #modal_window p.line-title + hr{
            margin: 10px 10px 20px;
            height: 1px;
            background: var(--paragraphover_color);
            border: none!important;
            width: calc(100% + 100px);
            margin-left: -50px;             
        }       
        #modal_window .modal_wrap{
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #modal_window .modal_content{
            width: 535px;
            max-width: 90%;
            background: #fff;
            max-height: 100%;
            overflow-y: auto;
        }
        #modal_window .modal_box{
            padding: 60px 117px;
            position: relative;
            z-index: 2;
        }
        #modal_window .close_modal{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            border: 1px solid var(--paragraphover_color);
            border-radius: 50%;
            position: absolute;
            top: 30px;
            right: 30px;
            transition: .3s;
            background: transparent;
            cursor: pointer;
        }
        #modal_window .close_modal:hover{
            background: var(--paragraphover_color);
        }
        #modal_window .close_modal:hover .st0-close{
            fill: #fff;
        }
        /*Form Part*/
        #modal_window .form_container{
            max-width: 300px;
            margin: 0 auto;
        }
        #modal_window .form_item:not(.submit) input{
            height: 50px;
            border-bottom: 1px solid var(--paragraphover_color);
            padding: 0 15px;
            font: 16px 'Open Sans';
            width: 100%;
            border: 1px solid #bcbcbc;
            border-radius: 3px;
        }
        #modal_window .form_item:not(:last-child){
            margin-bottom: 25px;
        }         
        #modal_window textarea{
            width: 100%;
            height: 90px;
            padding: 15px;
            font: 16px 'Open Sans';
            color:  var(--paragraphover_color);
            border: 1px solid #bcbcbc;
            border-radius: 3px;
            resize: none;
        }
        #modal_window .form_item input::-moz-placeholder, 
        #modal_window .form_item textarea::-moz-placeholder{
            font-size: 16px;
            color: var(--paragraphover_color);
            opacity: 1!important;
        }
        #modal_window .form_item input::-webkit-input-placeholder, 
        #modal_window .form_item textarea::-webkit-input-placeholder{
            color: var(--paragraphover_color);
            font-size: 16px;
        }      
        #modal_window .submit input{
            background: var(--hover_color);
            color: #fff;
            border: none;
            border-radius: 60px;
            transition: 0.3s;
            width: 200px;
            display: block;
            margin: 0 auto;
            height: 50px;
            cursor: pointer;
            font: 700 16px 'Open Sans';
            text-transform: uppercase;
        }
        #modal_window .submit input:hover{
            background: var(--title_color);
        }     
        #modal_window .form_container h3{
            color: var(--title_color);
            font: 700 24px 'Open Sans';
            text-align: center;
            margin-bottom: 20px;
        }
        #modal_window .form_container h3 span{
            text-transform: uppercase;
        }
        #modal_window .form_container .modal_window_subtitle{
            font: 400 16px 'Open Sans';
            color: var(--paragraphover_color);
            margin-bottom: 15px;
            text-align: center; 
        }
        #modal_window .form_container .modal_window_subtitle span{
            color: var(--hover_color);
            font-weight: 700;
            font-size: 20px;
        }
        /* Responsiveness *//* Responsiveness *//* Responsiveness */
        @media(max-width: 767px){
            #modal_window .modal_box{
                padding: 60px 30px;
            }
            #modal_window p.line-title,
            #modal_window p.line-title + hr{
                width: 100%;
                margin-left: 0;
            }
        }
    </style>
    <div class="overlay"></div>
    <div class="modal_wrap">
        <div class="modal_content">
            <div class="modal_box">
                <span class="close_modal">
                    <svg version="1.1" id="???_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="18px" height="18px" viewBox="0 0 18 18" style="enable-background:new 0 0 18 18;" xml:space="preserve">
                        <style type="text/css">
                            .st0-close{fill:#565656; transition: .3s;}
                        </style>
                        <path class="st0-close" d="M17.09,0.911c-0.326-0.326-0.853-0.326-1.178,0L9,7.822L2.09,0.911c-0.326-0.326-0.853-0.326-1.178,0
                        c-0.326,0.326-0.326,0.853,0,1.178L7.822,9l-6.911,6.911c-0.326,0.325-0.326,0.853,0,1.178c0.163,0.163,0.376,0.244,0.589,0.244
                        s0.426-0.081,0.589-0.244L9,10.178l6.911,6.911c0.163,0.163,0.376,0.244,0.589,0.244s0.426-0.081,0.589-0.244
                        c0.326-0.326,0.326-0.853,0-1.178L10.179,9l6.911-6.911C17.415,1.764,17.415,1.236,17.09,0.911z"/>
                    </svg>
                </span>
                <div class="form_wrap">
                    <?php echo do_shortcode('[contact-form-7 id="839" title="Modal Contact"]'); ?>  
                </div>               
            </div>            
        </div>        
    </div>
</div><!-- end apply form -->