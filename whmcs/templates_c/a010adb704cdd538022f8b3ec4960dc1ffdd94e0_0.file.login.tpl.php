<?php
/* Smarty version 3.1.29, created on 2017-12-02 20:13:33
  from "/var/www/html/whmcs/templates/hostify/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a22fb5d6580d3_44966916',
  'file_dependency' => 
  array (
    'a010adb704cdd538022f8b3ec4960dc1ffdd94e0' => 
    array (
      0 => '/var/www/html/whmcs/templates/hostify/login.tpl',
      1 => 1512241891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a22fb5d6580d3_44966916 ($_smarty_tpl) {
?>
<div id="form-section" class="container-fluid signin">
    <div class="website-logo">
        <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php">
            <div class="logo" style="width:62px;height:18px"></div>
        </a>
    </div>
    <div class="row">
        <div class="info-slider-holder">
            <div class="bg-animation"></div>
            <div class="info-holder">
                <h6>A Service you can anytime modify.</h6>
                <div class="bold-title">it’s not that hard to get<br>
    a website <span>anymore.</span></div>
                <div class="mini-testimonials-slider">
                    <div>
                        <div class="details-holder">
                            <img class="photo" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/person1.jpg" alt="">
                            <h4>Chris Walker</h4>
                            <h5>CEO & CO-Founder @HelloBrandio</h5>
                            <p>“In hostify we trust. I am with them for over
    7 years now. It always felt like home!
    Loved their customer support”</p>
                        </div>
                    </div>
                    <div>
                        <div class="details-holder">
                            <img class="photo" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/person2.jpg" alt="">
                            <h4>Chris Walker</h4>
                            <h5>CEO & CO-Founder @HelloBrandio</h5>
                            <p>“In hostify we trust. I am with them for over
    7 years now. It always felt like home!
    Loved their customer support”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-holder">
            <div class="menu-holder">
                <ul class="main-links">
                    <li><a class="normal-link" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/register.php">Don’t have an account?</a></li>
                    <li><a class="sign-button" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/register.php">Sign up</a></li>
                </ul>
            </div>
            <div class="signin-signup-form">
                <div class="form-items">
                    <div class="form-title"><?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['LANG']->value['login'],'desc'=>((string)$_smarty_tpl->tpl_vars['LANG']->value['restrictedpage'])), 0, true);
?>
</div>
                    <?php if ($_smarty_tpl->tpl_vars['incorrect']->value) {?>
                        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['loginincorrect'],'textcenter'=>true), 0, true);
?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['verificationId']->value && empty($_smarty_tpl->tpl_vars['transientDataName']->value)) {?>
                        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['verificationKeyExpired'],'textcenter'=>true), 0, true);
?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['ssoredirect']->value) {?>
                        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['sso']['redirectafterlogin'],'textcenter'=>true), 0, true);
?>

                    <?php }?>
                    <form id="signinform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;?>
dologin.php" role="form">
                        <div class="form-text">
                            <input id="inputEmail" type="email" name="username" name="username" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['enteremail'];?>
">
                        </div>
                        <div class="form-text">
                            <input id="inputPassword" type="password" name="password" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapassword'];?>
" autocomplete="off">
                        </div>
                        <div class="form-text text-holder">
                            <input id="chkbox" type="checkbox" class="hno-checkbox" name="rememberme" /> <label for="chkbox"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginrememberme'];?>
</label>
                        </div>
                        <div class="form-button">
                            <button id="login" type="submit" class="ybtn ybtn-purple"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginbutton'];?>
</button>
                            <a href="pwreset.php" class="btn btn-link"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['forgotpw'];?>
</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
