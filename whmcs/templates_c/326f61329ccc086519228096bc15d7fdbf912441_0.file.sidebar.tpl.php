<?php
/* Smarty version 3.1.29, created on 2017-11-17 16:23:48
  from "/var/www/html/whmcs/admin/templates/lara/sidebar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a0eff0435fbe3_89430742',
  'file_dependency' => 
  array (
    '326f61329ccc086519228096bc15d7fdbf912441' => 
    array (
      0 => '/var/www/html/whmcs/admin/templates/lara/sidebar.tpl',
      1 => 1510931598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0eff0435fbe3_89430742 ($_smarty_tpl) {
?>
      <!-- Control Sidebar -->
	  <aside class="control-sidebar <?php if ($_smarty_tpl->tpl_vars['lara_sidebar_skin']->value) {?> <?php echo $_smarty_tpl->tpl_vars['lara_sidebar_skin']->value;?>
 <?php } else { ?> control-sidebar-dark <?php }?>">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
		  <?php if ($_smarty_tpl->tpl_vars['ticketTabStatus']->value) {?><li class="active"><a href="#control-sidebar-ticket-tab" data-toggle="tab"><i class="fa fa-ticket"></i></a></li><?php }?>
		  <?php if ($_smarty_tpl->tpl_vars['browserTabStatus']->value) {?><li class="active"><a href="#control-sidebar-browser-tab" data-toggle="tab"><i class="fa fa-globe"></i></a></li><?php }?>
		  <?php if ($_smarty_tpl->tpl_vars['addonmodulesTabStatus']->value) {?><li class="active"><a href="#control-sidebar-addonmodules-tab" data-toggle="tab"><i class="fa fa-puzzle-piece"></i></a></li><?php }?>
          <?php if ($_smarty_tpl->tpl_vars['homeTabStatus']->value) {?><li class="active"><?php } else { ?><li><?php }?> <a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-search"></i></a></li>
		  <?php if ($_smarty_tpl->tpl_vars['sidebar']->value == "home") {?><li><a href="#control-sidebar-widgets-tab" data-toggle="tab"><i class="fa fa-dashboard"></i></a></li><?php }?>
          <li><a href="#control-sidebar-skins-tab" data-toggle="tab"><i class="fa  fa-paint-brush"></i></a></li>
		  <li><a href="#control-sidebar-about-tab" data-toggle="tab"><i class="fa  fa-info-circle"></i></a></li>
		  
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
		
		    <?php if ($_smarty_tpl->tpl_vars['addonmodulesTabStatus']->value) {?>
			  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/sidebar-tabs/addonmodules.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['browserTabStatus']->value) {?>
			  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/sidebar-tabs/browser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['ticketTabStatus']->value) {?>
			  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/sidebar-tabs/ticket.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

			<?php }?>
			
			<!-- Home tab content -->
			<?php if ($_smarty_tpl->tpl_vars['homeTabStatus']->value) {?><div class="tab-pane active" id="control-sidebar-home-tab"><?php } else { ?><div class="tab-pane" id="control-sidebar-home-tab"><?php }?>
			
				<?php if ($_smarty_tpl->tpl_vars['sidebar']->value == "support") {?>
				  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/sidebar-tabs/sub-supporttickets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

				  <?php if (($_smarty_tpl->tpl_vars['inticketlist']->value) && ($_smarty_tpl->tpl_vars['tagcloud']->value != "None")) {?>
				   	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/sidebar-tabs/sub-tagcloud.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

				  <?php }?>			
				<?php }?>
				
				<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/sidebar-tabs/sub-advancedsearch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

				
				<?php if ($_smarty_tpl->tpl_vars['sidebar']->value == "home") {?> 
					<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/sidebar-tabs/sub-systeminfo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

				<?php }?>
				
				<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/sidebar-tabs/sub-staffonline.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

			</div>
			
			<?php if ($_smarty_tpl->tpl_vars['sidebar']->value == "home") {?>
				<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/sidebar-tabs/widgets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

			<?php }?>			
			
			<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/sidebar-tabs/skins.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

			<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/sidebar-tabs/about.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	
			
		</div>
      </aside>
    <div class="control-sidebar-bg"></div>
<?php }
}
