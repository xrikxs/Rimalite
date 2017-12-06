<?php
/* Smarty version 3.1.29, created on 2017-11-22 13:20:19
  from "/var/www/html/whmcs/templates/flathost/pageheader.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a156b83a753a9_67862625',
  'file_dependency' => 
  array (
    'f5875a3654869805e0b4f8bc11713b2b146c9f5e' => 
    array (
      0 => '/var/www/html/whmcs/templates/flathost/pageheader.tpl',
      1 => 1511353036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a156b83a753a9_67862625 ($_smarty_tpl) {
?>
<div class="page-header">
    <div class="styled_title"><h1><?php echo $_smarty_tpl->tpl_vars['title']->value;
if ($_smarty_tpl->tpl_vars['desc']->value) {?> <small><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</small><?php }?></h1></div>
</div><?php }
}
