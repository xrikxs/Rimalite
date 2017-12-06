<?php
/* Smarty version 3.1.29, created on 2017-11-18 15:01:56
  from "/var/www/html/whmcs/admin/templates/blend/systemhealthandupdates.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a103d54afd6e0_52591713',
  'file_dependency' => 
  array (
    'c592c04d77e994eb2b1cb4d8e94448adefd68d7a' => 
    array (
      0 => '/var/www/html/whmcs/admin/templates/blend/systemhealthandupdates.tpl',
      1 => 1510924052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a103d54afd6e0_52591713 ($_smarty_tpl) {
?>
<div class="system-health-export-buttons clearfix hidden-xs">
    <a href="systemhealthandupdates.php?export=json" class="btn btn-link pull-right">
        <i class="fa fa-code fa-fw"></i>
        <?php echo WHMCS\Smarty::langFunction(array('key'=>"healthCheck.exportAsJson"),$_smarty_tpl);?>

    </a>
    <a href="systemhealthandupdates.php?export=text" class="btn btn-link pull-right">
        <i class="fa fa-file-text-o fa-fw"></i>
        <?php echo WHMCS\Smarty::langFunction(array('key'=>"healthCheck.exportAsText"),$_smarty_tpl);?>

    </a>
</div>

<div class="health-status-blocks">
    <div class="row health-status-col-margin">
        <div class="col-sm-4">
            <div class="health-status-block health-status-block-success clearfix">
                <div class="icon">
                    <i class="fa fa-check"></i>
                </div>
                <div class="detail">
                    <span class="count"><?php echo $_smarty_tpl->tpl_vars['successfulChecks']->value;?>
</span>
                    <span class="desc"><?php echo WHMCS\Smarty::langFunction(array('key'=>"healthCheck.successfulChecks"),$_smarty_tpl);?>
</span>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="health-status-block health-status-block-warning clearfix">
                <div class="icon">
                    <i class="fa fa-warning"></i>
                </div>
                <div class="detail">
                    <span class="count"><?php echo $_smarty_tpl->tpl_vars['warningChecks']->value;?>
</span>
                    <span class="desc"><?php echo WHMCS\Smarty::langFunction(array('key'=>"healthCheck.warningChecks"),$_smarty_tpl);?>
</span>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="health-status-block health-status-block-danger clearfix">
                <div class="icon">
                    <i class="fa fa-times"></i>
                </div>
                <div class="detail">
                    <span class="count"><?php echo $_smarty_tpl->tpl_vars['dangerChecks']->value;?>
</span>
                    <span class="desc"><?php echo WHMCS\Smarty::langFunction(array('key'=>"healthCheck.dangerChecks"),$_smarty_tpl);?>
</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row health-status-col-margin">
    <div class="health-status-col health-status-col-danger">

        <div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="panel panel-health-check panel-health-check-danger">
            <div class="panel-heading">
                <i class="fa fa-times-circle"></i>
                <?php echo WHMCS\Smarty::langFunction(array('key'=>"healthCheck.dangerChecks"),$_smarty_tpl);?>

                <span class="pull-right clickable">
                    <i class="glyphicon glyphicon-chevron-up"></i>
                </span>
            </div>
            <div class="panel-body">

                <?php
$_from = $_smarty_tpl->tpl_vars['checks']->value['danger'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_check_0_saved_item = isset($_smarty_tpl->tpl_vars['check']) ? $_smarty_tpl->tpl_vars['check'] : false;
$__foreach_check_0_saved_key = isset($_smarty_tpl->tpl_vars['id']) ? $_smarty_tpl->tpl_vars['id'] : false;
$_smarty_tpl->tpl_vars['check'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['check']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['check']->value) {
$_smarty_tpl->tpl_vars['check']->_loop = true;
$__foreach_check_0_saved_local_item = $_smarty_tpl->tpl_vars['check'];
?>
                    <div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="panel">
                        <div class="panel-heading">

                            <?php echo $_smarty_tpl->tpl_vars['check']->value->getTitle();?>

                        </div>
                        <div class="panel-body">
                            <?php echo $_smarty_tpl->tpl_vars['check']->value->getBody();?>

                        </div>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['check'] = $__foreach_check_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['check']->_loop) {
?>
                    <div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="panel">
                        <div class="panel-heading">
                            <?php echo WHMCS\Smarty::langFunction(array('key'=>"healthCheck.noChecksFailedTitle"),$_smarty_tpl);?>

                        </div>
                        <div class="panel-body">
                            <?php echo WHMCS\Smarty::langFunction(array('key'=>"healthCheck.noDangerChecksFailedDesc"),$_smarty_tpl);?>

                        </div>
                    </div>
                <?php
}
if ($__foreach_check_0_saved_item) {
$_smarty_tpl->tpl_vars['check'] = $__foreach_check_0_saved_item;
}
if ($__foreach_check_0_saved_key) {
$_smarty_tpl->tpl_vars['id'] = $__foreach_check_0_saved_key;
}
?>

            </div>
        </div>
    </div>
    <div class="health-status-col">

        <div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="panel panel-health-check panel-health-check-warning">
            <div class="panel-heading">
                <i class="fa fa-warning"></i>
                <?php echo WHMCS\Smarty::langFunction(array('key'=>"healthCheck.warningChecks"),$_smarty_tpl);?>

                <span class="pull-right clickable">
                    <i class="glyphicon glyphicon-chevron-up"></i>
                </span>
            </div>
            <div class="panel-body">

                <?php
$_from = $_smarty_tpl->tpl_vars['checks']->value['warning'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_check_1_saved_item = isset($_smarty_tpl->tpl_vars['check']) ? $_smarty_tpl->tpl_vars['check'] : false;
$__foreach_check_1_saved_key = isset($_smarty_tpl->tpl_vars['id']) ? $_smarty_tpl->tpl_vars['id'] : false;
$_smarty_tpl->tpl_vars['check'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['check']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['check']->value) {
$_smarty_tpl->tpl_vars['check']->_loop = true;
$__foreach_check_1_saved_local_item = $_smarty_tpl->tpl_vars['check'];
?>
                    <div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="panel">
                        <div class="panel-heading">
                            <?php echo $_smarty_tpl->tpl_vars['check']->value->getTitle();?>

                        </div>
                        <div class="panel-body">
                            <?php echo $_smarty_tpl->tpl_vars['check']->value->getBody();?>

                        </div>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['check'] = $__foreach_check_1_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['check']->_loop) {
?>
                    <div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="panel">
                        <div class="panel-heading">
                            <?php echo WHMCS\Smarty::langFunction(array('key'=>"healthCheck.noChecksFailedTitle"),$_smarty_tpl);?>

                        </div>
                        <div class="panel-body">
                            <?php echo WHMCS\Smarty::langFunction(array('key'=>"healthCheck.noWarningChecksFailedDesc"),$_smarty_tpl);?>

                        </div>
                    </div>
                <?php
}
if ($__foreach_check_1_saved_item) {
$_smarty_tpl->tpl_vars['check'] = $__foreach_check_1_saved_item;
}
if ($__foreach_check_1_saved_key) {
$_smarty_tpl->tpl_vars['id'] = $__foreach_check_1_saved_key;
}
?>

            </div>
        </div>
    </div>
    <div class="health-status-col health-status-col-success">

        <div class="panel panel-health-check panel-health-check-success">
            <div class="panel-heading">
                <i class="fa fa-check"></i>
                <?php echo WHMCS\Smarty::langFunction(array('key'=>"healthCheck.successfulChecks"),$_smarty_tpl);?>

                <span class="pull-right clickable">
                    <i class="glyphicon glyphicon-chevron-up"></i>
                </span>
            </div>
            <div class="panel-body">

                <?php
$_from = $_smarty_tpl->tpl_vars['checks']->value['success'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_check_2_saved_item = isset($_smarty_tpl->tpl_vars['check']) ? $_smarty_tpl->tpl_vars['check'] : false;
$__foreach_check_2_saved_key = isset($_smarty_tpl->tpl_vars['id']) ? $_smarty_tpl->tpl_vars['id'] : false;
$_smarty_tpl->tpl_vars['check'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['check']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['check']->value) {
$_smarty_tpl->tpl_vars['check']->_loop = true;
$__foreach_check_2_saved_local_item = $_smarty_tpl->tpl_vars['check'];
?>
                    <div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="panel">
                        <div class="panel-heading">
                            <?php echo $_smarty_tpl->tpl_vars['check']->value->getTitle();?>

                        </div>
                        <div class="panel-body">
                            <?php echo $_smarty_tpl->tpl_vars['check']->value->getBody();?>

                        </div>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['check'] = $__foreach_check_2_saved_local_item;
}
if ($__foreach_check_2_saved_item) {
$_smarty_tpl->tpl_vars['check'] = $__foreach_check_2_saved_item;
}
if ($__foreach_check_2_saved_key) {
$_smarty_tpl->tpl_vars['id'] = $__foreach_check_2_saved_key;
}
?>

            </div>
        </div>
    </div>
</div>

<div class="text-center visible-xs">
    <a href="systemhealthandupdates.php?export=json" class="btn btn-link">
        <i class="fa fa-code fa-fw"></i>
        <?php echo WHMCS\Smarty::langFunction(array('key'=>"healthCheck.exportAsJson"),$_smarty_tpl);?>

    </a>
    <a href="systemhealthandupdates.php?export=text" class="btn btn-link">
        <i class="fa fa-file-text-o fa-fw"></i>
        <?php echo WHMCS\Smarty::langFunction(array('key'=>"healthCheck.exportAsText"),$_smarty_tpl);?>

    </a>
</div>
<?php }
}
