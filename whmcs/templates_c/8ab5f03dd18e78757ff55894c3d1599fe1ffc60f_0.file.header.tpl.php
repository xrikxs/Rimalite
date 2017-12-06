<?php
/* Smarty version 3.1.29, created on 2017-11-18 21:12:23
  from "/var/www/html/whmcs/templates/hostrocket/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a109427c30e87_02610065',
  'file_dependency' => 
  array (
    '8ab5f03dd18e78757ff55894c3d1599fe1ffc60f' => 
    array (
      0 => '/var/www/html/whmcs/templates/hostrocket/header.tpl',
      1 => 1511035906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a109427c30e87_02610065 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['title']) {
echo $_smarty_tpl->tpl_vars['kbarticle']->value['title'];?>
 - <?php }
echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</title>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


    <?php echo $_smarty_tpl->tpl_vars['headoutput']->value;?>


</head>
<body>

<?php echo $_smarty_tpl->tpl_vars['headeroutput']->value;?>


<section id="header">
    <div class="container">
        <ul class="top-nav">
            <?php if ($_smarty_tpl->tpl_vars['languagechangeenabled']->value && count($_smarty_tpl->tpl_vars['locales']->value) > 1) {?>
                <li>
                    <a href="#" class="choose-language" data-toggle="popover" id="languageChooser">
                        <?php echo $_smarty_tpl->tpl_vars['activeLocale']->value['localisedName'];?>

                        <b class="caret"></b>
                    </a>
                    <div id="languageChooserContent" class="hidden">
                        <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['locales']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_locale_0_saved_item = isset($_smarty_tpl->tpl_vars['locale']) ? $_smarty_tpl->tpl_vars['locale'] : false;
$_smarty_tpl->tpl_vars['locale'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['locale']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['locale']->value) {
$_smarty_tpl->tpl_vars['locale']->_loop = true;
$__foreach_locale_0_saved_local_item = $_smarty_tpl->tpl_vars['locale'];
?>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['currentpagelinkback']->value;?>
language=<?php echo $_smarty_tpl->tpl_vars['locale']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['locale']->value['localisedName'];?>
</a>
                                </li>
                            <?php
$_smarty_tpl->tpl_vars['locale'] = $__foreach_locale_0_saved_local_item;
}
if ($__foreach_locale_0_saved_item) {
$_smarty_tpl->tpl_vars['locale'] = $__foreach_locale_0_saved_item;
}
?>
                        </ul>
                    </div>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                <li>
                    <a href="#" data-toggle="popover" id="accountNotifications" data-placement="bottom">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['notifications'];?>

                        <?php if (count($_smarty_tpl->tpl_vars['clientAlerts']->value) > 0) {?><span class="label label-info">NEW</span><?php }?>
                        <b class="caret"></b>
                    </a>
                    <div id="accountNotificationsContent" class="hidden">
                        <ul class="client-alerts">
                        <?php
$_from = $_smarty_tpl->tpl_vars['clientAlerts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_alert_1_saved_item = isset($_smarty_tpl->tpl_vars['alert']) ? $_smarty_tpl->tpl_vars['alert'] : false;
$_smarty_tpl->tpl_vars['alert'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['alert']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->_loop = true;
$__foreach_alert_1_saved_local_item = $_smarty_tpl->tpl_vars['alert'];
?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['alert']->value->getLink();?>
">
                                    <i class="fa fa-fw fa-<?php if ($_smarty_tpl->tpl_vars['alert']->value->getSeverity() == 'danger') {?>exclamation-circle<?php } elseif ($_smarty_tpl->tpl_vars['alert']->value->getSeverity() == 'warning') {?>warning<?php } elseif ($_smarty_tpl->tpl_vars['alert']->value->getSeverity() == 'info') {?>info-circle<?php } else { ?>check-circle<?php }?>"></i>
                                    <div class="message"><?php echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();?>
</div>
                                </a>
                            </li>
                        <?php
$_smarty_tpl->tpl_vars['alert'] = $__foreach_alert_1_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['alert']->_loop) {
?>
                            <li class="none">
                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['notificationsnone'];?>

                            </li>
                        <?php
}
if ($__foreach_alert_1_saved_item) {
$_smarty_tpl->tpl_vars['alert'] = $__foreach_alert_1_saved_item;
}
?>
                        </ul>
                    </div>
                </li>
                <li class="primary-action">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/logout.php" class="btn btn-action">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavlogout'];?>

                    </a>
                </li>
            <?php } else { ?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['login'];?>
</a>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['allowClientRegistration']) {?>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/register.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['register'];?>
</a>
                    </li>
                <?php }?>
                <li class="primary-action">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=view" class="btn btn-action">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['viewcart'];?>

                    </a>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['adminMasqueradingAsClient']->value || $_smarty_tpl->tpl_vars['adminLoggedIn']->value) {?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/logout.php?returntoadmin=1" class="btn btn-logged-in-admin" data-toggle="tooltip" data-placement="bottom" title="<?php if ($_smarty_tpl->tpl_vars['adminMasqueradingAsClient']->value) {
echo $_smarty_tpl->tpl_vars['LANG']->value['adminmasqueradingasclient'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['logoutandreturntoadminarea'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['adminloggedin'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['returntoadminarea'];
}?>">
                        <i class="fa fa-sign-out"></i>
                    </a>
                </li>
            <?php }?>
        </ul>

        <?php if ($_smarty_tpl->tpl_vars['assetLogoPath']->value) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php" class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['assetLogoPath']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
"></a>
        <?php } else { ?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php" class="logo logo-text"><img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/logo.png" width="143" height="18" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
"></a>
        <?php }?>

    </div>
</section>

<section id="main-menu">

    <nav id="nav" class="navbar navbar-default navbar-main" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="primary-nav">

                <ul class="nav navbar-nav">

                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navbar'=>$_smarty_tpl->tpl_vars['primaryNavbar']->value), 0, true);
?>


                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navbar'=>$_smarty_tpl->tpl_vars['secondaryNavbar']->value), 0, true);
?>

                    <li><a class="chat-button" href="#">Live Chat</a></li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div>
    </nav>

</section>
<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'homepage') {?>
<div id="top-content" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center rocket-animation-holder">
                <div class="rocket-animation">
                    <div class="rocket">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/rocket.png" width="136" height="190">
                        <span class="rocket-line rline1"></span>
                        <span class="rocket-line rline2"></span>
                        <span class="rocket-line rline3"></span>
                    </div>
                    <div class="cloud cloud1"><img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/cloud.png" width="60" height="35"></div>
                    <div class="cloud cloud2"><img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/cloud.png" width="60" height="35"></div>
                    <div class="cloud cloud3"><img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/cloud.png" width="60" height="35"></div>
                </div>
                <h1>Quality with the<br>
Best price!</h1>
                <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value || $_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                <h4>Find your best hosting plan today</h4>
                <div class="domain-form-holder">
                    <form id="domain-form" method="post" action="domainchecker.php">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-md-7 domain-text-holder">
                                    <input type="text" class="domain-text" name="domain" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['exampledomain'];?>
" />
                                    <i class="hroc hroc-search-icon"></i>
                                </div>
                                <div class="col-xs-12 col-md-5 btn-go-holder">
                                    <ul>
                                    <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?>
                                        <li><input type="submit" class="btn-go" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['search'];?>
" /></li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                                        <li><input type="submit" name="transfer" class="btn-go d-color" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainstransfer'];?>
" /></li>
                                    <?php }?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                    </form>
                </div>
                <?php } else { ?>
                <div class="toparea-space"></div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
    
<div id="info" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 row-title">
                <h4>Our Services</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-3">
                <div id="info-box1" class="info-box opened-info">
                    <div class="info-icon"><i class="hroc hroc-business"></i></div>
                    <div class="info-title">Unlimited trafic</div>
                    <div class="info-circle"><div class="circle-icon"></div></div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <div id="info-box2" class="info-box">
                    <div class="info-icon"><i class="hroc hroc-transport"></i></div>
                    <div class="info-title">Fast & friendly support</div>
                    <div class="info-circle"><div class="circle-icon"></div></div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <div id="info-box3" class="info-box">
                    <div class="info-icon"><i class="hroc hroc-technology"></i></div>
                    <div class="info-title">SSD Storage</div>
                    <div class="info-circle"><div class="circle-icon"></div></div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <div id="info-box4" class="info-box">
                    <div class="info-icon"><i class="hroc hroc-search"></i></div>
                    <div class="info-title">Secure & automatic backups</div>
                    <div class="info-circle"><div class="circle-icon"></div></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="info-text1" class="container-fluid info-text-holder">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="info-title-icon">
                    <i class="hroc hroc-business"></i>
                    <div>Unlimited trafic</div>
                </div>
                <div class="info-text">
                Regardless of the traffic volume upstream or downstream, traffic will always remain free with the maximum bandwidth available.
                </div>
            </div>
        </div>
    </div>
</div>
<div id="info-text2" class="container-fluid info-text-holder info-closed">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="info-title-icon">
                    <i class="hroc hroc-transport"></i>
                    <div>Fast & friendly support</div>
                </div>
                <div class="info-text">
                Our technicians are available 24 hours a day, 7 days a week for any questions regarding setting up or operating your server.
                </div>
            </div>
        </div>
    </div>
</div>
<div id="info-text3" class="container-fluid info-text-holder info-closed">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="info-title-icon">
                    <i class="hroc hroc-technology"></i>
                    <div>SSD Storage</div>
                </div>
                <div class="info-text">
We give standard SDD storage, because it's  over ten times faster than HDD. SSD is the best choice if you have data on your server.
                </div>
            </div>
        </div>
    </div>
</div>
<div id="info-text4" class="container-fluid info-text-holder info-closed">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="info-title-icon">
                    <i class="hroc hroc-search"></i>
                    <div>Secure & automatic backups</div>
                </div>
                <div class="info-text">
                That's why we perform backups every day, 7 days a week, 365 days a year on all Minecraft servers. for up to 7 days.
                </div>
            </div>
        </div>
    </div>
</div>
<div id="features" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 row-title">
                <h4>Hostrocket features</h4>
                <h5>A wide range of amazing info for your satisfaction</h5>
            </div>
        </div>
        <div class="row feature-row rtl-row">
            <div class="col-sm-12 col-md-5 text-center">
                <img class="feature-image" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/feature1.png">
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="feature-title">Security Guaranteed.</div>
                <div class="feature-subtitle">Get Started Quickly & Easily</div>
                <div class="feature-text">
                    <p>Hostrocket network covers +250 countries and devices ranging from desktops and laptops to smart phones and tablets.</p>
                    <p>As an advertiser you'll get instant access to an intuitive and easy-to-use self-serve interface and have +1 billion users a click away. Choose between a variety of advanced targeting options and set up conversion tracking to keep full control of your ROI</p>
                </div>
                <a class="feature-button" href="#">Select plan</a>
            </div>
        </div>
        <div class="row feature-row">
            <div class="col-sm-12 col-md-5 text-center">
                <img class="feature-image" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/feature2.png">
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="feature-title">Fast as rocket.</div>
                <div class="feature-subtitle">Get Started Quickly & Easily</div>
                <div class="feature-text">
                    <p>Hostrocket network covers +250 countries and devices ranging from desktops and laptops to smart phones and tablets.</p>

                    <p>As an advertiser you'll get instant access to an intuitive and easy-to-use self-serve interface and have +1 billion users a click away. Choose between a variety of advanced targeting options and set up conversion tracking to keep full control of your ROI</p>
                </div>
                <a class="feature-button" href="#">Select plan</a>
            </div>
        </div>
    </div>
</div>
<div id="starting" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sx-12 col-md-6">
                <h4>Start building your own server today!</h4>
            </div>
            <div class="col-sx-12 col-md-3">
                <div class="price-holder">
                    <div class="currency">€</div>
                    <div class="number">
                        <div class="num-big">3</div>
                        <div class="num-small-holder">
                            <div class="plan-info">Starting From</div>
                            <div class="num-small">.38<div class="duration">/mo</div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sx-12 col-md-3">
                <a class="plan-button" href="#">Choose plan</a>
            </div>
        </div>
    </div>
</div>
<div id="reasons" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 row-title">
                <h4>More reasons why you’ll love Hostrocket</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="reason-box">
                    <h5>24/7  Amazing support</h5>
                    <p>Our support staff is available 24/7/365 to assist you via Telephone, LiveChat, or Email with any hosting-related issues</p>
                </div>
                <div class="reason-box">
                    <h5>45 Day Guarantee</h5>
                    <p>Try our services at no risk! If you're not completely satisfied you can cancel within 45 days for a complete refund.</p>
                </div>
                <div class="reason-box">
                    <h5>99.9% uptime</h5>
                    <p>The availability of your website is our top priority. We stand by that fact with our uptime guarantee!</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <iframe class="vimeo" src="https://player.vimeo.com/video/72978544" width="100%" height="310" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>
<div id="testimonials" class="container-fluid">
    <div class="container">
        <div class="row text-center">
            <div class="col-xs-12">
                <div class="testimonials-slider">
                    <div class="testimonial-slide">
                        <div class="slide-content">
                            <div class="col-sm-12 col-md-3">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/sample.jpg" alt="">
                            </div>
                            <div class="col-sm-12 col-md-9">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque quos dolores et quas molestias excepturi.<br>
                                    praesentium voluptatum deleniti atque corrupti quos et quas molestias excepturi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-slide">
                        <div class="slide-content">
                            <div class="col-sm-12 col-md-3">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/sample.jpg" alt="">
                            </div>
                            <div class="col-sm-12 col-md-9">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque quos dolores et quas molestias excepturi.<br>
                                    praesentium voluptatum deleniti atque corrupti quos et quas molestias excepturi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-slide">
                        <div class="slide-content">
                            <div class="col-sm-12 col-md-3">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/sample.jpg" alt="">
                            </div>
                            <div class="col-sm-12 col-md-9">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque quos dolores et quas molestias excepturi.<br>
                                    praesentium voluptatum deleniti atque corrupti quos et quas molestias excepturi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } else { ?>
<div id="top-content" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h3 class="page-title"><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</h3>
            </div>
        </div>
    </div>
</div>
<?php }?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/verifyemail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    
<div id="main-body-holder" class="container-fluid">
<section id="main-body">
    <div class="container<?php if ($_smarty_tpl->tpl_vars['skipMainBodyContainer']->value) {?>-fluid without-padding<?php }?>">
        <div class="row">

        <?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() || $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>
            <?php if ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() && !$_smarty_tpl->tpl_vars['skipMainBodyContainer']->value) {?>
                <div class="col-md-9 pull-md-right">
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value,'showbreadcrumb'=>true), 0, true);
?>

                </div>
            <?php }?>
            <div class="col-md-3 pull-md-left sidebar">
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sidebar'=>$_smarty_tpl->tpl_vars['primarySidebar']->value), 0, true);
?>

            </div>
        <?php }?>
        <!-- Container for main page display content -->
        <div class="<?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() || $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>col-md-9 pull-md-right<?php } else { ?>col-xs-12<?php }?> main-content">
            <?php if (!$_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() && !$_smarty_tpl->tpl_vars['showingLoginPage']->value && !$_smarty_tpl->tpl_vars['inShoppingCart']->value && $_smarty_tpl->tpl_vars['templatefile']->value != 'homepage' && !$_smarty_tpl->tpl_vars['skipMainBodyContainer']->value) {?>
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value,'showbreadcrumb'=>true), 0, true);
?>

            <?php }
}
}
