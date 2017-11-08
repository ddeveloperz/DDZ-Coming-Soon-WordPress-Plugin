<?php define(DDZ_DIR_URL, plugin_dir_url(__FILE__ )); 

function ddz_get_option($option)
{
    $value = get_option( $option );
    return $value;
}


?>

<!DOCTYPE html>
<html lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" type="text/css" href="<?php echo DDZ_DIR_URL ?>front_view/css/style.css" media="all">

    <title>Landing Page</title>

    <script type="text/javascript" src="<?php echo DDZ_DIR_URL ?>front_view/js/jquery.js"></script>
    <script type="text/javascript">
        /*  */
        var panelsStyles = {
            "fullContainer": "body"
        };
        /*  */
    </script>


    <style type="text/css" media="all" id="siteorigin-panels-layouts-head">

        #page-col-cell-id {
        	width: 100%;
        }

        #pl-1863 .so-panel,
        #pl-1863 .so-panel:last-child {
            margin-bottom: 0px
        }

        #cm> .panel-row-style {
            padding: 9% 0 14% 0
        }

        #panel-1> .panel-widget-style,
        #panel-4> .panel-widget-style,
        #panel-6> .panel-widget-style,
        #panel-8> .panel-widget-style {
            padding: 25px 0 25px 0
        }

        #panel-2> .panel-widget-style {
            padding: 0 0 0 5px
        }

        #panel-3> .panel-widget-style {
            color: #d1d1d1
        }

        #panel-5> .panel-widget-style {
            padding: 10px 0 5px 0
        }

        #panel-9> .panel-widget-style {
            color: #ffffff
        }

        #panel-9 a {
            color: #e0e0e0
        }

        #cm {
            margin-left: -35px;
            margin-right: -35px
        }

        #cm .page-col-cell {
            padding-left: 35px!important;
            padding-right: 35px!important
        }

        @media (max-width:780px) {
            #cm.panel-no-style,
            #cm.panel-has-style > .panel-row-style {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column
            }
            #cm .page-col-cell {
                margin-right: 0
            }
            #cm .page-col-cell {
                width: 100%
            }
            #pl-1863 .page-col-cell {
                padding: 0
            }
            #pl-1863 .page-col .page-col-cell-empty {
                display: none
            }
            #pl-1863 .page-col .page-col-cell-mobile-last {
                margin-bottom: 0px
            }
        }
    </style>
    <style type="text/css">
body
{
	font-size: 16px;
	color: #FFF;
	font-family:helvetica
}


.logo-image {
    width: 200px;
    margin: 0 auto;
}

        #banner {
            background: url(<?php  //$image_backgorund = wp_get_attachment_url( ddz_get_option('ddz_background_img') ); 
                    if (isset($image_backgorund) && !empty($image_backgorund)) {
                        echo $image_backgorund;
                    } else {
                        echo DDZ_DIR_URL.'front_view/images/2.jpg';
                        } ?> ) no-repeat center top;
            background-size: cover
        }
h1.maintitle {
    font-size: 4em;
}


        .w_optin_1 input,
        .w_optin_1 textarea {
            border-radius: 3px
        }

        .social-column-design-color a.social-fb {
            background-color: #415e9b
        }

        .social-column-design-transparent a.social-fb {
            background-color: transparent
        }

        .social-column-design-transparent a.social-fb:hover,
        .social-column-design-black a.social-fb:hover,
        .social-column-design-white a.social-fb:hover {
            background-color: #415e9b
        }

        .social-column-design-color a.social-tw {
            background-color: #1bb2e9
        }

        .social-column-design-transparent a.social-tw {
            background-color: transparent
        }

        .social-column-design-transparent a.social-tw:hover,
        .social-column-design-black a.social-tw:hover,
        .social-column-design-white a.social-tw:hover {
            background-color: #1bb2e9
        }

        .social-column-design-color a.social-gplus {
            background-color: #d13d2f
        }

        .social-column-design-transparent a.social-gplus {
            background-color: transparent
        }

        .social-column-design-transparent a.social-gplus:hover,
        .social-column-design-black a.social-gplus:hover,
        .social-column-design-white a.social-gplus:hover {
            background-color: #d13d2f
        }

        .social-column-design-color a.social-ins {
            background-color: #46769e
        }

        .social-column-design-transparent a.social-ins {
            background-color: transparent
        }

        .social-column-design-transparent a.social-ins:hover,
        .social-column-design-black a.social-ins:hover,
        .social-column-design-white a.social-ins:hover {
            background-color: #46769e
        }

        .social-column-design-color a.social-link {
            background-color: #006dc0
        }

        .social-column-design-transparent a.social-link {
            background-color: transparent
        }

        .social-column-design-transparent a.social-link:hover,
        .social-column-design-black a.social-link:hover,
        .social-column-design-white a.social-link:hover {
            background-color: #006dc0
        }

        .social-column-design-color a.social-pin {
            background-color: #c61118
        }

        .social-column-design-transparent a.social-pin {
            background-color: transparent
        }

        .social-column-design-transparent a.social-pin:hover,
        .social-column-design-black a.social-pin:hover,
        .social-column-design-white a.social-pin:hover {
            background-color: #c61118
        }


    </style>

</head>

<body class="">
    <div id="skrollr-body">
        <section id="banner" class="animated-header">

            <div id="banner_content" class="row banner-mode-content">
                <div id="pl-1863" class="panel-layout">
                    <div id="cm" class="page-col panel-has-style">
                        <div class="row-justification-center panel-row-style panel-row-style-for-0" style="margin-bottom: 0; ">
                            <div id="page-col-cell-id" class="page-col-cell">
                                <div class="so-panel widget_inb-image inbound-image panel-first-child" data-index="0">
                                    <div class="logo-image image-center">
                                        <a href="<?php echo site_url( ); ?>">
                                            <?php 
                                            $image = wp_get_attachment_url(ddz_get_option('ddz_logo'));

                                            ?>
                                            <img src="<?php echo $image; ?>"></a>
                                    </div>
                                </div>
                                <div id="panel-1" class="so-panel widget_inb-divider inbound-divider" data-index="1">
                                    <div class="panel-widget-style panel-widget-style-for-1">
                                        <hr id="widget_divider_1" class="divider divider-solid align-center">
                                    </div>
                                </div>
                                <div id="panel-2" class="so-panel widget_inb-headline inbound-headline" data-index="2">
                                    <div class="panel-widget-style panel-widget-style-for-2">
                                        <div id="widget_headline_1" class="inbound-headline headline-no-decoration">
                                            <h1 class="maintitle"><?php echo ddz_get_option('ddz_title_1'); ?></h1></div>
                                    </div>
                                </div>
                                <div id="panel-3" class="so-panel widget_inb-headline inbound-headline" data-index="3">
                                    <div id="ws-1" class="panel-widget-style panel-widget-style-for-3">
                                        <div id="widget_headline_2" class="inbound-headline headline-no-decoration">
                                            <h2 class="regular-sub-title"><?php echo ddz_get_option('ddz_title_2'); ?></h2></div>
                                    </div>
                                </div>
                                <div id="panel-4" class="so-panel widget_inb-divider inbound-divider" data-index="4">
                                    <div class="panel-widget-style panel-widget-style-for-4">
                                        <hr id="widget_divider_2" class="divider divider-solid align-center">
                                    </div>
                                </div>
                                <div id="panel-5" class="so-panel widget_inb-countdown inbound-countdown" data-index="5">
                                    <div class="panel-widget-style panel-widget-style-for-5"> <?php $date = ddz_get_option('ddz_lanuch_date');
                                                                                                     //echo $date;
               


                ?>
                                        <div class="countdown wd style-black size-large skrollable skrollable-before" data-days="Days" data-hours="Hours" data-minutes="Minutes" data-seconds="Seconds" data-end="<?php echo date("Y,m,d", strtotime($date));  ?>"><div class="counter__group"><div><span class="" style="top: 0px;">1</span></div><div><span class="" style="top: 0px;">3</span></div><div><span class="" style="top: 0px;">8</span></div><p>Days</p></div><div class="counter__group"><div><span class="" style="top: 0px;">1</span></div><div><span class="" style="top: 0px;">7</span></div><p>Hours</p></div><div class="counter__group"><div><span class="" style="top: 0px;">1</span></div><div><span class="" style="top: 0px;">8</span></div><p>Minutes</p></div><div class="counter__group"><div><span class="" style="top: 0px;">1</span></div><div><span class="" style="top: 0px;">9</span></div><p>Seconds</p></div></div>
                                    </div>
                                </div>
                                <div id="panel-6" class="so-panel widget_inb-divider inbound-divider" data-index="6">
                                    <div class="panel-widget-style panel-widget-style-for-6">
                                        <hr id="widget_divider_3" class="divider divider-solid align-center">
                                    </div>
                                </div>
                                <div id="panel-7" class="so-panel widget_inb-opt-in-form inbound-opt-in-form" data-index="7">
                                    <div class="form-optin w_optin_1 optin-columns optin-center">
                                        <form action="http://demos.shapingrain.com/inbound/inbound-comingsoon/#" method="post" name="newsletterform">
                                            <input type="email" size="30" value="" name="email" placeholder="Your E-mail Address" required="">
                                            <input type="submit" value="Notify Me! ">
                                        </form>
                                    </div>
                                </div>
                                <div id="panel-8" class="so-panel widget_inb-divider inbound-divider" data-index="8">
                                    <div class="panel-widget-style panel-widget-style-for-8">
                                        <hr id="widget_divider_4" class="divider divider-solid align-center">
                                    </div>
                                </div>
                                <div id="panel-9" class="so-panel widget_inb-social-icons inbound-social-icons panel-last-child" data-index="9">
                                    <div id="ws-2" class="panel-widget-style panel-widget-style-for-9">
                                        <div class="social-widget style-transparent icon-size-1">
                                            <ul>
                                                <li><a href="https://www.facebook.com/username" class="social-fb" title="Facebook" rel="me"><i class="fa fa-facebook fa-1x"></i></a></li>
                                                <li><a href="http://www.twitter.com/username" class="social-tw" title="Twitter" rel="me"><i class="fa fa-twitter fa-1x"></i></a></li>
                                                <li><a href="http://google.com/+username" class="social-gplus" title="Google+" rel="me"><i class="fa fa-google-plus fa-1x"></i></a></li>
                                                <li><a href="http://www.instagram.com/username" class="social-ins" title="Instagram" rel="me"><i class="fa fa-instagram fa-1x"></i></a></li>
                                                <li><a href="http://www.linkedin.com/in/username/" class="social-link" title="LinkedIn" rel="me"><i class="fa fa-linkedin fa-1x"></i></a></li>
                                                <li><a href="http://www.pinterest.com/username" class="social-pin" title="Pinterest" rel="me"><i class="fa fa-pinterest fa-1x"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <main>
            <div id="main_content" class="clearfix">
                <div id="blog_content" class="row clearfix">
                    <article id="post-1864" class="post-1864 page type-page status-publish hentry odd first last">
                        <div class="page-content"></div>
                    </article>
                </div>
            </div>
        </main><a href="http://demos.shapingrain.com/inbound/inbound-comingsoon/#" class="scrollup" style="display: none;"><span>Scroll up</span></a></div>
    <script type="text/javascript" src="<?php echo DDZ_DIR_URL ?>front_view/js/countdown.min.js"></script>

    <script type="text/javascript" src="<?php echo DDZ_DIR_URL ?>front_view/js/jquery.smartmenus.min.js"></script>
    <script type="text/javascript" src="<?php echo DDZ_DIR_URL ?>front_view/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="<?php echo DDZ_DIR_URL ?>front_view/js/jquery.placeholder.min.js"></script>
    <script type="text/javascript" src="<?php echo DDZ_DIR_URL ?>front_view/js/inbound.js"></script>




</body></html>
