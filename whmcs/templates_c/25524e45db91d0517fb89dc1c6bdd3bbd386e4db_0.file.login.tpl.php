<?php
/* Smarty version 3.1.29, created on 2017-11-22 13:22:52
  from "/var/www/html/whmcs/templates/flathost/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a156c1c3a6460_91481931',
  'file_dependency' => 
  array (
    '25524e45db91d0517fb89dc1c6bdd3bbd386e4db' => 
    array (
      0 => '/var/www/html/whmcs/templates/flathost/login.tpl',
      1 => 1511353036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a156c1c3a6460_91481931 ($_smarty_tpl) {
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['LANG']->value['login']), 0, true);
?>


<?php if ($_smarty_tpl->tpl_vars['incorrect']->value) {?>
<div class="alert alert-danger textcenter">
    <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginincorrect'];?>
</p>
</div>
<?php }?>

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['systemsslurl']->value;?>
dologin.php" class="form">

<div class="logincontainer">

    <fieldset>

        <div class="form-group">
                <input class="form-control" name="username" id="username" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginemail'];?>
" />
        </div>
        <div class="form-group">
                <input class="form-control" name="password" id="password" type="password" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginpassword'];?>
"/>
        </div>

        <div class="form-group">
        <div class="checkbox"><label><input type="checkbox" name="rememberme"<?php if ($_smarty_tpl->tpl_vars['rememberme']->value) {?> checked="checked"<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginrememberme'];?>
</label></div>
          <div class="loginbtn"><input id="login" type="submit" class="btn btn-block btn-success btn-lg" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginbutton'];?>
" /></div>
           </div>
          <p><a href="pwreset.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginforgotteninstructions'];?>
</a></p>
       

    </fieldset>

</div>

</form>

<?php echo '<script'; ?>
 type="text/javascript">
$("#username").focus();
<?php echo '</script'; ?>
>
<?php }
}
