<?php /* Smarty version Smarty-3.1.16, created on 2014-03-10 19:25:34
         compiled from "..\aplicacao\visualizador\layout\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22397531e741eb6ef77-48399344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0f7ba7e6bb05e3442928803b9e2a9aab887c1e2' => 
    array (
      0 => '..\\aplicacao\\visualizador\\layout\\index.tpl',
      1 => 1390070529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22397531e741eb6ef77-48399344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tituloPagina' => 0,
    'baseUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531e741ebe8d72_50693028',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531e741ebe8d72_50693028')) {function content_531e741ebe8d72_50693028($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
    <head>

        <!-- Basic -->
        <meta charset="utf-8">
        <title><?php echo $_smarty_tpl->tpl_vars['tituloPagina']->value;?>
</title>
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Porto - Responsive HTML5 Template">
        <meta name="author" content="Crivos.com">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Web Fonts  -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Libs CSS -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
css/fonts/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
vendor/flexslider/flexslider.css" media="screen" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
vendor/magnific-popup/magnific-popup.css" media="screen" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
css/theme.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
css/theme-elements.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
css/theme-animate.css">

        <!-- Current Page Styles -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
vendor/revolution-slider/css/settings.css" media="screen" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
vendor/revolution-slider/css/captions.css" media="screen" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
vendor/circle-flip-slideshow/css/component.css" media="screen" />

        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
css/custom.css">

        <!-- Skin CSS -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
css/skins/blue.css">

        <!-- Responsive CSS -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
css/bootstrap-responsive.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
css/theme-responsive.css" />

        <!-- Favicons -->
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
img/favicon.ico">
        <link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
img/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
img/apple-touch-icon-144x144.png">

        <!-- Head Libs -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
vendor/modernizr.js"></script>

        <!--[if IE]>
                <link rel="stylesheet" href="css/ie.css">
        <![endif]-->

        <!--[if lte IE 8]>
                <script src="vendor/respond.js"></script>
        <![endif]-->

        <!-- Facebook OpenGraph Tags - Go to http://developers.facebook.com/ for more information.
        <meta property="og:title" content="Porto Website Template."/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="http://www.crivos.com/themes/porto"/>
        <meta property="og:image" content="http://www.crivos.com/themes/porto/"/>
        <meta property="og:site_name" content="Porto"/>
        <meta property="fb:app_id" content=""/>
        <meta property="og:description" content="Porto - Responsive HTML5 Template"/>
        -->

    </head>
    <body>

        <div class="body">
            <header>
                <div class="container">
                    <h1 class="logo">
                        <a href="index.html">
                            <img alt="Porto" src="img/logo.png">
                        </a>
                    </h1>
                    <div class="search">
                        <form class="form-search" id="searchForm" action="page-search-results.html" method="get">
                            <div class="control-group">
                                <input type="text" class="input-medium search-query" name="q" id="q" placeholder="Pesquisar...">
                                <button class="search" type="submit"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <nav>
                        <ul class="nav nav-pills nav-top">
                            <li>
                                <a href="about-us.html"><i class="icon-angle-right"></i>Sobre Nós</a>
                            </li>
                            <li>
                                <a href="contact-us.html"><i class="icon-angle-right"></i>Fale Conosco</a>
                            </li>
                            <li class="mail">
                                <span><i class="icon-envelope"></i>bewohtech@gmail.com</span>
                            </li>
                        </ul>
                    </nav>
                    <div class="social-icons">
                        <ul class="social-icons">
                            <li class="facebook"><a href="http://www.facebook.com/bewoh.tech" target="_blank" title="Facebook">Facebook</a></li>
                            <li class="twitter"><a href="http://www.twitter.com/bewohtech" target="_blank" title="Twitter">Twitter</a></li>
                            <li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin">Linkedin</a></li>
                        </ul>
                    </div>
                    <nav>
                        <ul class="nav nav-pills nav-main" id="mainMenu">
                            <li class="dropdown active">
                                <a class="dropdown-toggle" href="index.html">
                                    Home
                                    <i class="icon-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a href="#">Sliders</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index.html">Revolution Slider</a></li>
                                            <li><a href="index-slider-2.html">Nivo Slider</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.html">Home Version 1</a></li>
                                    <li><a href="index-2.html">Home Version 2</a></li>
                                    <li><a href="index-one-page.html">One Page Website</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="about-us.html">About Us</a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#">
                                    Features
                                    <i class="icon-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a href="#">Headers</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index.html">Header Version 1</a></li>
                                            <li><a href="index-header-2.html">Header Version 2</a></li>
                                            <li><a href="index-header-3.html">Header Version 3</a></li>
                                            <li><a href="index-header-4.html">Header Version 4</a></li>
                                            <li><a href="index-header-5.html">Header Version 5</a></li>
                                            <li><a href="index-header-6.html">Header Version 6</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#">Footers</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index.html#footer">Footer Version 1</a></li>
                                            <li><a href="index-footer-2.html#footer">Footer Version 2</a></li>
                                            <li><a href="index-footer-3.html#footer">Footer Version 3</a></li>
                                            <li><a href="index-footer-4.html#footer">Footer Version 4</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-full-width.html">Blog Full Width</a></li>
                                            <li><a href="blog-large-image.html">Blog Large Image</a></li>
                                            <li><a href="blog-medium-image.html">Blog Medium Image</a></li>
                                            <li><a href="blog-post.html">Single Post</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="feature-grid-system.html">Grid System</a></li>
                                    <li><a href="feature-pricing-tables.html">Pricing Tables</a></li>
                                    <li><a href="feature-icons.html">Icons</a></li>
                                    <li><a href="feature-elements.html">Elements</a></li>
                                    <li><a href="feature-animations.html">Animations</a></li>
                                    <li><a href="feature-typograpy.html">Typograpy</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#">
                                    Portfolio
                                    <i class="icon-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="portfolio-2-columns.html">2 Columns</a></li>
                                    <li><a href="portfolio-3-columns.html">3 Columns</a></li>
                                    <li><a href="portfolio-4-columns.html">4 Columns</a></li>
                                    <li><a href="portfolio-single-project.html">Single Project</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#">
                                    Pages
                                    <i class="icon-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="page-full-width.html">Full width</a></li>
                                    <li><a href="page-left-sidebar.html">Left sidebar</a></li>
                                    <li><a href="page-right-sidebar.html">Right sidebar</a></li>
                                    <li><a href="page-custom-header.html">Custom Header</a></li>
                                    <li><a href="page-404.html">404 Error</a></li>
                                    <li><a href="page-team.html">Team</a></li>
                                    <li><a href="page-services.html">Services</a></li>
                                    <li><a href="page-careers.html">Careers</a></li>
                                    <li><a href="page-faq.html">FAQ</a></li>
                                    <li><a href="sitemap.html">Sitemap</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="contact-us.html">
                                    Contact Us
                                    <i class="icon-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">

                                    <li><a href="contact-us.html">Version 1</a></li>
                                    <li><a href="contact-us-2.html">Version 2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>

            <div role="main" class="main">
                <div id="content" class="content full">

                    <div class="slider-container">
                        <div class="slider" id="revolutionSlider">
                            <ul>
                                <li data-transition="fade" data-slotamount="10" data-masterspeed="300">
                                    <img src="img/slides/slide-bg.jpg" data-fullwidthcentering="on" alt="">

                                    <div class="caption sft stb visible-desktop"
                                         data-x="42"
                                         data-y="180"
                                         data-speed="300"
                                         data-start="1000"
                                         data-easing="easeOutExpo"><img src="img/slides/slide-title-border.png" alt=""></div>

                                    <div class="caption top-label lfl stl"
                                         data-x="92"
                                         data-y="180"
                                         data-speed="300"
                                         data-start="500"
                                         data-easing="easeOutExpo">QUER RENOVAR SUA MARCA?</div>

                                    <div class="caption sft stb visible-desktop"
                                         data-x="422"
                                         data-y="180"
                                         data-speed="300"
                                         data-start="1000"
                                         data-easing="easeOutExpo"><img src="img/slides/slide-title-border.png" alt=""></div>

                                    <div class="caption main-label sft stb"
                                         data-x="0"
                                         data-y="230"
                                         data-speed="300"
                                         data-start="1500"
                                         data-easing="easeOutExpo">DEIXE COM A GENTE</div>

                                    <div class="caption bottom-label sft stb"
                                         data-x="50"
                                         data-y="280"
                                         data-speed="500"
                                         data-start="2000"
                                         data-easing="easeOutExpo">Conheça nossas opções.</div>

                                    <div class="caption randomrotate"
                                         data-x="800"
                                         data-y="250"
                                         data-speed="500"
                                         data-start="2500"
                                         data-easing="easeOutBack"><img src="img/slides/slide-concept-2-1.png" alt=""></div>

                                    <div class="caption sfb"
                                         data-x="850"
                                         data-y="200"
                                         data-speed="400"
                                         data-start="3000"
                                         data-easing="easeOutBack"><img src="img/slides/slide-concept-2-2.png" alt=""></div>

                                    <div class="caption sfb"
                                         data-x="820"
                                         data-y="170"
                                         data-speed="700"
                                         data-start="3150"
                                         data-easing="easeOutBack"><img src="img/slides/slide-concept-2-3.png" alt=""></div>

                                    <div class="caption sfb"
                                         data-x="770"
                                         data-y="130"
                                         data-speed="1000"
                                         data-start="3250"
                                         data-easing="easeOutBack"><img src="img/slides/slide-concept-2-4.png" alt=""></div>

                                    <div class="caption sfb"
                                         data-x="500"
                                         data-y="30"
                                         data-speed="600"
                                         data-start="3450"
                                         data-easing="easeOutExpo"><img src="img/slides/slide-concept-2-5.png" alt=""></div>

                                    <div class="caption blackboard-text lfb "
                                         data-x="630"
                                         data-y="300"
                                         data-speed="500"
                                         data-start="3450"
                                         data-easing="easeOutExpo" style="font-size: 37px;">Pense</div>

                                    <div class="caption blackboard-text lfb "
                                         data-x="655"
                                         data-y="350"
                                         data-speed="500"
                                         data-start="3650"
                                         data-easing="easeOutExpo" style="font-size: 47px;">Fora</div>

                                    <div class="caption blackboard-text lfb "
                                         data-x="660"
                                         data-y="400"
                                         data-speed="500"
                                         data-start="3850"
                                         data-easing="easeOutExpo" style="font-size: 32px;">Da caixa :)</div>
                                </li>
                                <li data-transition="fade" data-slotamount="10" data-masterspeed="300">
                                    <img src="img/slides/slide-bg.jpg" data-fullwidthcentering="on" alt="">

                                    <div class="caption fade"
                                         data-x="50"
                                         data-y="100"
                                         data-speed="2500"
                                         data-start="200"
                                         data-easing="easeOutExpo"><img src="img/slides/slide-concept.png" alt=""></div>

                                    <div class="caption blackboard-text fade "
                                         data-x="180"
                                         data-y="180"
                                         data-speed="1500"
                                         data-start="1000"
                                         data-easing="easeOutExpo" style="font-size: 30px;">é muito</div>

                                    <div class="caption blackboard-text fade "
                                         data-x="180"
                                         data-y="220"
                                         data-speed="1500"
                                         data-start="1200"
                                         data-easing="easeOutExpo" style="font-size: 40px;">FÁCIL!!!</div>

                                    <div class="caption main-label sft stb"
                                         data-x="580"
                                         data-y="200"
                                         data-speed="300"
                                         data-start="1500"
                                         data-easing="easeOutExpo">FAÇA SEU PROJETO</div>

                                    <div class="caption bottom-label sft stb"
                                         data-x="580"
                                         data-y="250"
                                         data-speed="500"
                                         data-start="2000"
                                         data-easing="easeOutExpo">Escolha a melhor opção para você e monte o seu.</div>

                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="home-intro">
                        <div class="container">

                            <div class="row">
                                <div class="span8">
                                    <p>
                                        A forma mais rápida e fácil de criar ou inovar a sua <em>marca.</em>
                                        <span>Conosco seu projeto vira realidade.</span>
                                    </p>
                                </div>
                                <div class="span4">
                                    <div class="get-started">
                                        <a href="#" class="btn btn-large btn-primary">Criar Projeto!</a>
                                        <div class="learn-more">ou <a href="index.html">conheça mais.</a></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container">

                        <div class="row center">
                            <div class="span12">
                                <h2 class="short">Veja alguns de nossos <strong class="inverted">produtos</strong>.</h2>
                                <p class="featured lead">
                                    Escolha a melhor opção para você e clique em saiba mais para conhecer melhor o produto do seu interesse.
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="container">

                        <div class="row featured-boxes">
                            <div class="span3">
                                <div class="featured-box featured-box-primary" style="height: 327px;">
                                    <div class="box-content">
                                        <i class="image-icon user big"></i>
                                        <h4>Loved by Customers</h4>
                                        <p>Donec id elit non mi fusce dapibus.<a class="learn-more" href="/">saiba mais <i class="icon-angle-right"></i></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="featured-box featured-box-secundary" style="height: 327px;">
                                    <div class="box-content">
                                        <i class="icon icon-book"></i>
                                        <h4>Well Documented</h4>
                                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.<a class="learn-more" href="/">saiba mais <i class="icon-angle-right"></i></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="featured-box featured-box-tertiary" style="height: 327px;">
                                    <div class="box-content">
                                        <i class="icon icon-trophy"></i>
                                        <h4>Winner</h4>
                                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.<a class="learn-more" href="/">saiba mais <i class="icon-angle-right"></i></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="featured-box featured-box-quaternary" style="height: 327px;">
                                    <div class="box-content">
                                        <i class="icon icon-cogs"></i>
                                        <h4>Customizable</h4>
                                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus. <a class="learn-more" href="/">saiba mais <i class="icon-angle-right"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="tall" />

                    </div>

                    <div class="container">

                        <div class="row">
                            <div class="span8">
                                <h2>Our <strong>Features</strong></h2>
                                <div class="row">
                                    <div class="span4">
                                        <div class="feature-box">
                                            <div class="feature-box-icon">
                                                <i class="icon-group"></i>
                                            </div>
                                            <div class="feature-box-info">
                                                <h4 class="shorter">Customer Support</h4>
                                                <p class="tall">Lorem ipsum dolor sit amet, consectetur adip.</p>
                                            </div>
                                        </div>
                                        <div class="feature-box">
                                            <div class="feature-box-icon">
                                                <i class="icon-file"></i>
                                            </div>
                                            <div class="feature-box-info">
                                                <h4 class="shorter">HTML5 / CSS3 / JS</h4>
                                                <p class="tall">Lorem ipsum dolor sit amet, adip.</p>
                                            </div>
                                        </div>
                                        <div class="feature-box">
                                            <div class="feature-box-icon">
                                                <i class="icon-google-plus"></i>
                                            </div>
                                            <div class="feature-box-info">
                                                <h4 class="shorter">500+ Google Fonts</h4>
                                                <p class="tall">Lorem ipsum dolor sit amet, consectetur adip.</p>
                                            </div>
                                        </div>
                                        <div class="feature-box">
                                            <div class="feature-box-icon">
                                                <i class="icon-adjust"></i>
                                            </div>
                                            <div class="feature-box-info">
                                                <h4 class="shorter">Colors</h4>
                                                <p class="tall">Lorem ipsum dolor sit amet, consectetur adip.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span4">
                                        <div class="feature-box">
                                            <div class="feature-box-icon">
                                                <i class="icon-film"></i>
                                            </div>
                                            <div class="feature-box-info">
                                                <h4 class="shorter">Sliders</h4>
                                                <p class="tall">Lorem ipsum dolor sit amet, consectetur.</p>
                                            </div>
                                        </div>
                                        <div class="feature-box">
                                            <div class="feature-box-icon">
                                                <i class="image-icon small user"></i>
                                            </div>
                                            <div class="feature-box-info">
                                                <h4 class="shorter">Icons</h4>
                                                <p class="tall">Lorem ipsum dolor sit amet, consectetur adip.</p>
                                            </div>
                                        </div>
                                        <div class="feature-box">
                                            <div class="feature-box-icon">
                                                <i class="icon-reorder"></i>
                                            </div>
                                            <div class="feature-box-info">
                                                <h4 class="shorter">Buttons</h4>
                                                <p class="tall">Lorem ipsum dolor sit, consectetur adip.</p>
                                            </div>
                                        </div>
                                        <div class="feature-box">
                                            <div class="feature-box-icon">
                                                <i class="icon-desktop"></i>
                                            </div>
                                            <div class="feature-box-info">
                                                <h4 class="shorter">Lightbox</h4>
                                                <p class="tall">Lorem sit amet, consectetur adip.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="span4">
                                <h2>and more...</h2>
                                <div class="accordion" id="accordion">
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="icon-lightbulb"></i> Group Item #1</a>
                                        </div>
                                        <div id="collapseOne" class="accordion-body collapse in">
                                            <div class="accordion-inner">
                                                Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor odio vulputate eleifend in in tortorodio vulputate eleifend in in tortor.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i class="icon-bell-alt"></i> Group Item #2</a>
                                        </div>
                                        <div id="collapseTwo" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                                Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><i class="icon-laptop"></i> Group Item #3</a>
                                        </div>
                                        <div id="collapseThree" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                                Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="tall" />

                        <div class="row center">
                            <div class="span12">
                                <h2 class="short">We're not the only ones <strong>excited</strong> about Porto Template...</h2>
                                <h4 class="lead tall">5.500 projetos em andamento. Conheça alguns clientes.</h4>
                            </div>
                        </div>
                        <div class="row center">
                            <div class="flexslider unstyled" data-plugin-options='{"directionNav":false, "animation":"slide", "slideshow": false, "maxVisibleItems": 6}'>
                                <ul class="slides">
                                    <li>
                                        <div class="span2">
                                            <img class="mobile-max-width small" src="img/logo-client-1.jpg" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="span2">
                                            <img class="mobile-max-width small" src="img/logo-client-2.jpg" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="span2">
                                            <img class="mobile-max-width small" src="img/logo-client-3.jpg" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="span2">
                                            <img class="mobile-max-width small" src="img/logo-client-4.jpg" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="span2">
                                            <img class="mobile-max-width small" src="img/logo-client-5.jpg" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="span2">
                                            <img class="mobile-max-width small" src="img/logo-client-6.jpg" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="span2">
                                            <img class="mobile-max-width small" src="img/logo-client-4.jpg" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="span2">
                                            <img class="mobile-max-width small" src="img/logo-client-2.jpg" alt="">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="map-section">
                        <section class="featured footer map">
                            <div class="container">
                                <div class="row">
                                    <div class="span6">
                                        <div class="recent-posts">
                                            <h2>Latest <strong>Blog</strong> Posts</h2>
                                            <div class="row">
                                                <div class="flexslider unstyled" data-plugin-options='{"directionNav":false, "animation":"slide"}'>
                                                    <ul class="slides">
                                                        <li>
                                                            <div class="span3">
                                                                <article>
                                                                    <div class="date">
                                                                        <span class="day">15</span>
                                                                        <span class="month">Jan</span>
                                                                    </div>
                                                                    <h4><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="/" class="read-more">read more <i class="icon-angle-right"></i></a></p>
                                                                </article>
                                                            </div>
                                                            <div class="span3">
                                                                <article>
                                                                    <div class="date">
                                                                        <span class="day">15</span>
                                                                        <span class="month">Jan</span>
                                                                    </div>
                                                                    <h4><a href="blog-post.html">Lorem ipsum dolor</a></h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. <a href="/" class="read-more">read more <i class="icon-angle-right"></i></a></p>
                                                                </article>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="span3">
                                                                <article>
                                                                    <div class="date">
                                                                        <span class="day">12</span>
                                                                        <span class="month">Jan</span>
                                                                    </div>
                                                                    <h4><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="/" class="read-more">read more <i class="icon-angle-right"></i></a></p>
                                                                </article>
                                                            </div>
                                                            <div class="span3">
                                                                <article>
                                                                    <div class="date">
                                                                        <span class="day">11</span>
                                                                        <span class="month">Jan</span>
                                                                    </div>
                                                                    <h4><a href="blog-post.html">Lorem ipsum dolor</a></h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="/" class="read-more">read more <i class="icon-angle-right"></i></a></p>
                                                                </article>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="span3">
                                                                <article>
                                                                    <div class="date">
                                                                        <span class="day">15</span>
                                                                        <span class="month">Jan</span>
                                                                    </div>
                                                                    <h4><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="/" class="read-more">read more <i class="icon-angle-right"></i></a></p>
                                                                </article>
                                                            </div>
                                                            <div class="span3">
                                                                <article>
                                                                    <div class="date">
                                                                        <span class="day">15</span>
                                                                        <span class="month">Jan</span>
                                                                    </div>
                                                                    <h4><a href="blog-post.html">Lorem ipsum dolor</a></h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. <a href="/" class="read-more">read more <i class="icon-angle-right"></i></a></p>
                                                                </article>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="row">
                                                    <div class="span6">
                                                        <a class="btn btn-flat btn-mini btn-primary pull-right pull-bottom-phone" href="#">View All Posts <i class="icon-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span6">
                                        <h2><strong>O que</strong> os Clientes dizem</h2>
                                        <div class="row">
                                            <div class="flexslider flexslider-top-title unstyled" data-plugin-options='{"controlNav":false, "slideshow": false, "animationLoop": true, "animation":"slide"}'>
                                                <ul class="slides">
                                                    <li>
                                                        <div class="span6">
                                                            <blockquote class="testimonial">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.</p>
                                                            </blockquote>
                                                            <div class="testimonial-arrow-down"></div>
                                                            <div class="testimonial-author">
                                                                <div class="thumbnail thumbnail-small">
                                                                    <img src="img/clients/client-1.jpg" alt="">
                                                                </div>
                                                                <p><strong>John Smith</strong><span>CEO & Founder - Red Wine</span></p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="span6">
                                                            <blockquote class="testimonial">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                            </blockquote>
                                                            <div class="testimonial-arrow-down"></div>
                                                            <div class="testimonial-author">
                                                                <div class="thumbnail thumbnail-small">
                                                                    <img src="img/clients/client-1.jpg" alt="">
                                                                </div>
                                                                <p><strong>John Smith</strong><span>CEO & Founder - Crivos</span></p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-ribon">
                            <span>Conheça Mais</span>
                        </div>
                        <div class="span3">
                            <h4>Newsletter</h4>
                            <p>Mantenha-se atualizado sobre as novidades e novos produtos da nossa empresa. Digite seu e-mail e assine a nossa newsletter..</p>

                            <div class="alert alert-success hidden" id="newsletterSuccess">
                                <strong>Success!</strong> You've been added to our email list.
                            </div>

                            <div class="alert alert-error hidden" id="newsletterError"></div>

                            <form class="form-inline" id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
                                <div class="control-group">
                                    <div class="input-append">
                                        <input class="span2" placeholder="Endereço de e-mail" name="email" id="email" type="text">
                                        <button class="btn" type="submit">Go!</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="span3">
                            <h4>Últimos Tweets</h4>
                            <div id="tweet" class="twitter" data-account-id="crivosthemes">
                                <p>Carregando, aguarde...</p>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="contact-details">
                                <h4>Contato</h4>
                                <ul class="contact">
                                    <li><p><i class="icon-map-marker"></i> <strong>Endereço:</strong> Av. Site em teste, 325</p></li>
                                    <li><p><i class="icon-phone"></i> <strong>Telefone:</strong> (11) 3456-7890</p></li>
                                    <li><p><i class="icon-envelope"></i> <strong>Email:</strong> <a href="mailto:bewohtech@gmail.com">bewohtech@gmail.com</a></p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="span2">
                            <h4>Siga</h4>
                            <div class="social-icons">
                                <ul class="social-icons">
                                    <li class="facebook"><a href="http://www.facebook.com/bewoh.tech" target="_blank" data-placement="bottom" rel="tooltip" title="Facebook">Facebook</a></li>
                                    <li class="twitter"><a href="http://www.twitter.com/bewohtech" target="_blank" data-placement="bottom" rel="tooltip" title="Twitter">Twitter</a></li>
                                    <li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" data-placement="bottom" rel="tooltip" title="Linkedin">Linkedin</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">
                            <div class="span1">
                                <a href="index.html" class="logo">
                                    <img alt="Porto Website Template" src="img/logo-footer.png">
                                </a>
                            </div>
                            <div class="span7">
                                <p>© Copyright 2014 by Bewoh. All Rights Reserved.</p>
                            </div>
                            <div class="span4">
                                <nav id="sub-menu">
                                    <ul>
                                        <li><a href="page-faq.html">FAQ's</a></li>
                                        <li><a href="sitemap.html">Sitemap</a></li>
                                        <li><a href="contact-us.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Libs -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="vendor/jquery.js"><\/script>')</script>
        <script src="vendor/jquery.easing.js"></script>
        <script src="vendor/jquery.appear.js"></script>
        <script src="vendor/jquery.cookie.js"></script>
        <!-- <script src="master/style-switcher/style.switcher.js"></script> Style Switcher -->
        <script src="vendor/bootstrap.js"></script>
        <script src="vendor/selectnav.js"></script>
        <script src="vendor/twitterjs/twitter.js"></script>
        <script src="vendor/revolution-slider/js/jquery.themepunch.plugins.js"></script>
        <script src="vendor/revolution-slider/js/jquery.themepunch.revolution.js"></script>
        <script src="vendor/flexslider/jquery.flexslider.js"></script>
        <script src="vendor/circle-flip-slideshow/js/jquery.flipshow.js"></script>
        <script src="vendor/magnific-popup/magnific-popup.js"></script>
        <script src="vendor/jquery.validate.js"></script>

        <script src="js/plugins.js"></script>

        <!-- Current Page Scripts -->
        <script src="js/views/view.home.js"></script>

        <!-- Theme Initializer -->
        <script src="js/theme.js"></script>

        <!-- Custom JS -->
        <script src="js/custom.js"></script>

        <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
        <!--
        <script>
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-XXXXX-X']);
                _gaq.push(['_trackPageview']);

                (function() {
                        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                })();
        </script>
        -->

    </body>
</html><?php }} ?>
