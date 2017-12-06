<?php
/* Smarty version 3.1.29, created on 2017-11-18 18:49:27
  from "/var/www/html/whmcs/templates/orderforms/standard_cart/sidebar-categories-collapsed.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a1072a7593903_12933436',
  'file_dependency' => 
  array (
    '3530200b804698216a5b6be04e002491b48cf06b' => 
    array (
      0 => '/var/www/html/whmcs/templates/orderforms/standard_cart/sidebar-categories-collapsed.tpl',
      1 => 1510924221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1072a7593903_12933436 ($_smarty_tpl) {
?>
<div class="categories-collapsed visible-xs visible-sm clearfix">

    <div class="pull-left form-inline">
        <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>
">
            <select name="gid" onchange="submit()" class="form-control">
                <optgroup label="Product Categories">
                    <?php
$_from = $_smarty_tpl->tpl_vars['productgroups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_productgroup_0_saved_item = isset($_smarty_tpl->tpl_vars['productgroup']) ? $_smarty_tpl->tpl_vars['productgroup'] : false;
$__foreach_productgroup_0_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['productgroup'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['productgroup']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['productgroup']->value) {
$_smarty_tpl->tpl_vars['productgroup']->_loop = true;
$__foreach_productgroup_0_saved_local_item = $_smarty_tpl->tpl_vars['productgroup'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['productgroup']->value['gid'];?>
"<?php if ($_smarty_tpl->tpl_vars['gid']->value == $_smarty_tpl->tpl_vars['productgroup']->value['gid']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['productgroup']->value['name'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['productgroup'] = $__foreach_productgroup_0_saved_local_item;
}
if ($__foreach_productgroup_0_saved_item) {
$_smarty_tpl->tpl_vars['productgroup'] = $__foreach_productgroup_0_saved_item;
}
if ($__foreach_productgroup_0_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_productgroup_0_saved_key;
}
?>
                </optgroup>
                <optgroup label="Actions">
                    <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                        <option value="addons"<?php if ($_smarty_tpl->tpl_vars['gid']->value == "addons") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartproductaddons'];?>
</option>
                        <?php if ($_smarty_tpl->tpl_vars['renewalsenabled']->value) {?>
                            <option value="renewals"<?php if ($_smarty_tpl->tpl_vars['gid']->value == "renewals") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainrenewals'];?>
</option>
                        <?php }?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?>
                        <option value="registerdomain"<?php if ($_smarty_tpl->tpl_vars['domain']->value == "register") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navregisterdomain'];?>
</option>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                        <option value="transferdomain"<?php if ($_smarty_tpl->tpl_vars['domain']->value == "transfer") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['transferinadomain'];?>
</option>
                    <?php }?>
                    <option value="viewcart"<?php if ($_smarty_tpl->tpl_vars['action']->value == "view") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['viewcart'];?>
</option>
                </optgroup>
            </select>
        </form>
    </div>

    <?php if (!$_smarty_tpl->tpl_vars['loggedin']->value && $_smarty_tpl->tpl_vars['currencies']->value) {?>
        <div class="pull-right form-inline">
            <form method="post" action="cart.php<?php if ($_smarty_tpl->tpl_vars['action']->value) {?>?a=<?php echo $_smarty_tpl->tpl_vars['action']->value;
} elseif ($_smarty_tpl->tpl_vars['gid']->value) {?>?gid=<?php echo $_smarty_tpl->tpl_vars['gid']->value;
}?>">
                <select name="currency" onchange="submit()" class="form-control">
                    <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['choosecurrency'];?>
</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['currencies']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_listcurr_1_saved_item = isset($_smarty_tpl->tpl_vars['listcurr']) ? $_smarty_tpl->tpl_vars['listcurr'] : false;
$_smarty_tpl->tpl_vars['listcurr'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['listcurr']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['listcurr']->value) {
$_smarty_tpl->tpl_vars['listcurr']->_loop = true;
$__foreach_listcurr_1_saved_local_item = $_smarty_tpl->tpl_vars['listcurr'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['listcurr']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['listcurr']->value['id'] == $_smarty_tpl->tpl_vars['currency']->value['id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['listcurr']->value['code'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['listcurr'] = $__foreach_listcurr_1_saved_local_item;
}
if ($__foreach_listcurr_1_saved_item) {
$_smarty_tpl->tpl_vars['listcurr'] = $__foreach_listcurr_1_saved_item;
}
?>
                </select>
            </form>
        </div>
    <?php }?>

</div>
<?php }
}
