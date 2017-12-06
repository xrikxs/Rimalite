<?php
/* Smarty version 3.1.29, created on 2017-11-22 13:20:22
  from "/var/www/html/whmcs/templates/flathost/homepage.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a156b864e9953_64658565',
  'file_dependency' => 
  array (
    'e44dc645a20a2ca9f8c0e89f9be754a73035f7ec' => 
    array (
      0 => '/var/www/html/whmcs/templates/flathost/homepage.tpl',
      1 => 1511353036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a156b864e9953_64658565 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/var/www/html/whmcs/vendor/smarty/smarty/libs/plugins/modifier.truncate.php';
?>
<div class="container"> 
  <!--============== Main Features ==============-->
  
  <div class="row mainFeatures" id="features">
    <div class="col-sm-6 col-md-4">
      <div class="img-thumbnail"> <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/secure_img.png" width="85" height="88" alt="secure">
        <div class="caption">
          <h4>Secure &amp; Reliable</h4>
          <p>Flathost servers are having high physical security and power redundancy Your data will be secure with us.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="img-thumbnail"> <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/fast_img.png" width="85" height="88" alt="secure">
        <div class="caption">
          <h4>Super Fast</h4>
          <p>With our ultra mordern servers and optical cables, your data will be transfered to end user in milliseconds.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-0">
      <div class="img-thumbnail"> <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/support_img.png" width="85" height="88" alt="secure">
        <div class="caption">
          <h4>Customer Support</h4>
          <p>We have a dedicated team of support for sales and support to help you in anytime. You can also chat with us.</p>
        </div>
      </div>
    </div>
  </div>
  
  
  
</div>

</div>
</div>
<!--Closing of container and containerpadding-->


<?php if ($_smarty_tpl->tpl_vars['condlinks']->value['domainreg'] || $_smarty_tpl->tpl_vars['condlinks']->value['domaintrans'] || $_smarty_tpl->tpl_vars['condlinks']->value['domainown']) {?>
<div class="domain">
<div class="container">
  
  
    <div class="row PageHead">
      <div class="col-md-12">
        <h1><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckerchoosedomain'];?>
</h1>
        <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckerenterdomain'];?>
</h3>
      </div>
    </div>
    
    
    
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['systemsslurl']->value;?>
domainchecker.php">
        <div class="row"><div class="form-group col-sm-8 col-sm-offset-2"><input class="form-control input-lg" name="domain" type="text" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckerdomainexample'];?>
" onfocus="if(this.value=='<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckerdomainexample'];?>
')this.value=''" onblur="if(this.value=='')this.value='<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckerdomainexample'];?>
'" /></div></div>
        <?php if ($_smarty_tpl->tpl_vars['captcha']->value) {?>
        <div class="captchainput" align="center">
            <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['captchaverify'];?>
</p>
            <?php if ($_smarty_tpl->tpl_vars['captcha']->value == "recaptcha") {?>
            <p><?php echo $_smarty_tpl->tpl_vars['recaptchahtml']->value;?>
</p>
            <?php } else { ?>
            <p><img src="includes/verifyimage.php" align="middle" /> <input type="text" name="code" class="input-small" maxlength="5" /></p>
            <?php }?>
        </div>
        <?php }?>
        <div class="internalpadding multiple-btns"><?php if ($_smarty_tpl->tpl_vars['condlinks']->value['domainreg']) {?><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['checkavailability'];?>
" class="btn btn-primary btn-lg" /> <?php }
if ($_smarty_tpl->tpl_vars['condlinks']->value['domaintrans']) {?><input type="submit" name="transfer" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainstransfer'];?>
" class="btn btn-success btn-lg" /><?php }
if ($_smarty_tpl->tpl_vars['condlinks']->value['domainown']) {?> <input type="submit" name="hosting" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckerhostingonly'];?>
" class="btn btn-info btn-lg" /><?php }?></div>
        </form>
        
        
</div></div>
<?php }?>

<div class="container">
<div class="contentpadded">

<div class="row">

<div class="col-sm-6">
    <div class="internalpadding">
        <div class="styled_title">
            <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navservicesorder'];?>
</h2>
        </div>
        <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahomeorder'];?>
 </p>
        <form method="post" action="cart.php">
        <p><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahomeorderbtn'];?>
 &raquo;" class="btn btn-primary" /></p>
        </form>
    </div>
</div>
<div class="col-sm-6">
    <div class="internalpadding">
        <div class="styled_title"><h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['manageyouraccount'];?>
</h2></div>
        <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahomelogin'];?>
 </p>
        <form method="post" action="clientarea.php">
        <p><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahomeloginbtn'];?>
 &raquo;" class="btn btn-success" /></p>
        </form>
    </div>
</div>

</div>
<hr>
<div class="row">

<?php if ($_smarty_tpl->tpl_vars['twitterusername']->value) {?>
<div class="styled_title">
    <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['twitterlatesttweets'];?>
</h2>
</div>
<div id="twitterfeed">
    <p><img src="images/loading.gif"></p>
</div>
<?php echo '<script'; ?>
 language="javascript">
jQuery(document).ready(function(){
  jQuery.post("announcements.php", { action: "twitterfeed", numtweets: 3 },
    function(data){
      jQuery("#twitterfeed").html(data);
    });
});
<?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['announcements']->value) {?>
<div class="styled_title">
    <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['latestannouncements'];?>
</h2>
</div>
<?php
$_from = $_smarty_tpl->tpl_vars['announcements']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_announcement_0_saved_item = isset($_smarty_tpl->tpl_vars['announcement']) ? $_smarty_tpl->tpl_vars['announcement'] : false;
$_smarty_tpl->tpl_vars['announcement'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['announcement']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->_loop = true;
$__foreach_announcement_0_saved_local_item = $_smarty_tpl->tpl_vars['announcement'];
?>
<p><?php echo $_smarty_tpl->tpl_vars['announcement']->value['date'];?>
 - <a href="<?php if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {?>announcements/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle'];?>
.html<?php } else { ?>announcements.php?id=<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];
}?>"><b><?php echo $_smarty_tpl->tpl_vars['announcement']->value['title'];?>
</b></a><br /><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['announcement']->value['text']),300,"...");?>
</p>
<?php
$_smarty_tpl->tpl_vars['announcement'] = $__foreach_announcement_0_saved_local_item;
}
if ($__foreach_announcement_0_saved_item) {
$_smarty_tpl->tpl_vars['announcement'] = $__foreach_announcement_0_saved_item;
}
}?>

</div><?php }
}
