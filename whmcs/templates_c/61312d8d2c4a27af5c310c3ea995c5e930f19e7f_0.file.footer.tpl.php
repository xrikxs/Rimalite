<?php
/* Smarty version 3.1.29, created on 2017-11-17 16:14:48
  from "/var/www/html/whmcs/templates/six/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a0efce87ab579_85039477',
  'file_dependency' => 
  array (
    '61312d8d2c4a27af5c310c3ea995c5e930f19e7f' => 
    array (
      0 => '/var/www/html/whmcs/templates/six/footer.tpl',
      1 => 1510924214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0efce87ab579_85039477 ($_smarty_tpl) {
?>

                </div><!-- /.main-content -->
                <?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren()) {?>
                    <div class="col-md-3 pull-md-left sidebar">
                        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sidebar'=>$_smarty_tpl->tpl_vars['secondarySidebar']->value), 0, true);
?>

                    </div>
                <?php }?>
            <div class="clearfix"></div>
        </div>
    </div>
</section>

<section id="footer">
    <div class="container">
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <p>Copyright &copy; <?php echo $_smarty_tpl->tpl_vars['date_year']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
. All Rights Reserved.</p>
    </div>
</section>

<div class="modal system-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true">
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
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary modal-submit">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->tpl_vars['footeroutput']->value;?>


</body>
</html>
<?php }
}
