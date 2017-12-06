<?php
/* Smarty version 3.1.29, created on 2017-11-19 16:15:26
  from "/var/www/html/whmcs/templates/hostrocket/supportticketsubmit-customfields.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a11a00e8a7664_73439161',
  'file_dependency' => 
  array (
    'ed9452834ee220391f41c9088337e6a20c19d292' => 
    array (
      0 => '/var/www/html/whmcs/templates/hostrocket/supportticketsubmit-customfields.tpl',
      1 => 1511027315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a11a00e8a7664_73439161 ($_smarty_tpl) {
$_from = $_smarty_tpl->tpl_vars['customfields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_customfield_0_saved_item = isset($_smarty_tpl->tpl_vars['customfield']) ? $_smarty_tpl->tpl_vars['customfield'] : false;
$_smarty_tpl->tpl_vars['customfield'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['customfield']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['customfield']->value) {
$_smarty_tpl->tpl_vars['customfield']->_loop = true;
$__foreach_customfield_0_saved_local_item = $_smarty_tpl->tpl_vars['customfield'];
?>
    <div class="form-group">
        <label for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>
</label>
        <?php echo $_smarty_tpl->tpl_vars['customfield']->value['input'];?>

        <?php if ($_smarty_tpl->tpl_vars['customfield']->value['description']) {?>
            <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>
</p>
        <?php }?>
    </div>
<?php
$_smarty_tpl->tpl_vars['customfield'] = $__foreach_customfield_0_saved_local_item;
}
if ($__foreach_customfield_0_saved_item) {
$_smarty_tpl->tpl_vars['customfield'] = $__foreach_customfield_0_saved_item;
}
}
}
