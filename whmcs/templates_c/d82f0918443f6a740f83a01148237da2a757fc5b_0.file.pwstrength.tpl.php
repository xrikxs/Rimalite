<?php
/* Smarty version 3.1.29, created on 2017-11-22 13:20:19
  from "/var/www/html/whmcs/templates/flathost/pwstrength.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a156b83a79342_70378283',
  'file_dependency' => 
  array (
    'd82f0918443f6a740f83a01148237da2a757fc5b' => 
    array (
      0 => '/var/www/html/whmcs/templates/flathost/pwstrength.tpl',
      1 => 1511353036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a156b83a79342_70378283 ($_smarty_tpl) {
?>

<?php echo '<script'; ?>
>
jQuery(document).ready(function(){
    jQuery("#password").keyup(function () {
        var pw = jQuery("#password").val();
        var pwlength=(pw.length);
        if(pwlength>5)pwlength=5;
        var numnumeric=pw.replace(/[0-9]/g,"");
        var numeric=(pw.length-numnumeric.length);
        if(numeric>3)numeric=3;
        var symbols=pw.replace(/\W/g,"");
        var numsymbols=(pw.length-symbols.length);
        if(numsymbols>3)numsymbols=3;
        var numupper=pw.replace(/[A-Z]/g,"");
        var upper=(pw.length-numupper.length);
        if(upper>3)upper=3;
        var pwstrength=((pwlength*10)-20)+(numeric*10)+(numsymbols*15)+(upper*10);
        if(pwstrength<0){pwstrength=0}
        if(pwstrength>100){pwstrength=100}
        jQuery("#pwstrengthbox").removeClass("weak moderate strong");
        jQuery("#pwstrengthbox").html("<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthstrong'];?>
");
        jQuery("#pwstrengthbox").addClass("strong");
        if (pwstrength<75) {
            jQuery("#pwstrengthbox").html("<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthmoderate'];?>
");
            jQuery("#pwstrengthbox").addClass("moderate");
        }
        if (pwstrength<30) {
            jQuery("#pwstrengthbox").html("<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthweak'];?>
");
            jQuery("#pwstrengthbox").addClass("weak");
        }
    });
});
<?php echo '</script'; ?>
>

<div id="pwstrengthbox"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthenter'];?>
</div><?php }
}
