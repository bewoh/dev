<?php /* Smarty version Smarty-3.1.17, created on 2014-04-10 18:24:11
         compiled from "/var/www/html/bewoh/dev/admin/aplicacao/visualizador/camadas/erro/erro400.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17923443195347443b903715-56573156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fe45c4eb9b9bdc795fe671b9434c7a39a323c75' => 
    array (
      0 => '/var/www/html/bewoh/dev/admin/aplicacao/visualizador/camadas/erro/erro400.tpl',
      1 => 1396715604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17923443195347443b903715-56573156',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5347443b906787_62030224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5347443b906787_62030224')) {function content_5347443b906787_62030224($_smarty_tpl) {?><div class="error-container">
    <div class="well">
        <h1 class="grey lighter smaller">
            <span class="blue bigger-125">
                <i class="icon-sitemap"></i>
                404
            </span>
            Page Not Found
        </h1>

        <hr />
        <h3 class="lighter smaller">We looked everywhere but we couldn't find it!</h3>

        <div>
            <form class="form-search">
                <span class="input-icon">
                    <i class="icon-search"></i>

                    <input type="text" class="input-medium search-query" placeholder="Give it a search..." />
                </span>
                <button class="btn btn-small" onclick="return false;">Go!</button>
            </form>

            <div class="space"></div>
            <h4 class="smaller">Try one of the following:</h4>

            <ul class="unstyled spaced inline bigger-110">
                <li>
                    <i class="icon-hand-right blue"></i>
                    Re-check the url for typos
                </li>

                <li>
                    <i class="icon-hand-right blue"></i>
                    Read the faq
                </li>

                <li>
                    <i class="icon-hand-right blue"></i>
                    Tell us about it
                </li>
            </ul>
        </div>

        <hr />
        <div class="space"></div>

        <div class="row-fluid">
            <div class="center">
                <a href="#" class="btn btn-grey">
                    <i class="icon-arrow-left"></i>
                    Go Back
                </a>

                <a href="#" class="btn btn-primary">
                    <i class="icon-dashboard"></i>
                    Dashboard
                </a>
            </div>
        </div>
    </div>
</div><?php }} ?>
