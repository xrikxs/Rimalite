<?php
/* Smarty version 3.1.29, created on 2017-11-17 16:23:48
  from "/var/www/html/whmcs/admin/templates/lara/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a0eff0434fe43_33941996',
  'file_dependency' => 
  array (
    '233e8e5f22ede386c3fe69dac2c358ff76cc7f9f' => 
    array (
      0 => '/var/www/html/whmcs/admin/templates/lara/footer.tpl',
      1 => 1510931598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0eff0434fe43_33941996 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/whmcs/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
?>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

	  
	  
      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          <?php echo smarty_modifier_date_format(time(),"%A, %d %B %Y, %H:%M");?>

        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; <a href="http://www.whmcs.com/" target="_blank">WHMCompleteSolution</a>.</strong> All rights reserved.
      </footer>
	  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>



		<div id="greyout"></div>

		<form id="frmmynotes">
			<input type="hidden" name="action" value="savenotes" />
			<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
" />
			<div class="modal fade modal-my-notes" id="myNotes">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header modal-warning">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['mynotes'];?>
</h4>
						</div>
						<div class="modal-body">
							<textarea id="mynotesbox" name="notes" rows="12" class="form-control"><?php echo $_smarty_tpl->tpl_vars['admin_notes']->value;?>
</textarea>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['cancel'];?>
</button>
							<button type="button" class="btn btn-primary" onclick="notesclose('1')"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['savechanges'];?>
</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		
		<div class="modal whmcs-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content panel panel-primary">
					<div class="modal-header panel-heading">
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span>
							<span class="sr-only">Close</span>
						</button>
						<h4 class="modal-title">Title</h4>
					</div>
					<div class="modal-body panel-body">
						Loading...
					</div>
					<div class="modal-footer panel-footer">
						<div class="pull-left loader">
							<i class="fa fa-circle-o-notch fa-spin"></i> Loading...
						</div>
						<button id="modalAjaxClose" type="button" class="btn btn-default" data-dismiss="modal">
							Close
						</button>
						<button type="button" class="btn btn-primary modal-submit">
							Submit
						</button>
					</div>
				</div>
			</div>
		</div>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/lightbox.min.js"><?php echo '</script'; ?>
>		
		
    </div><!-- ./wrapper -->
	<?php echo $_smarty_tpl->tpl_vars['footeroutput']->value;?>

	
  </body>
</html>
<?php }
}
