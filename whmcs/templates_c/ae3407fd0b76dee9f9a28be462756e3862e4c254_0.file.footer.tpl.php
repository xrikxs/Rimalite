<?php
/* Smarty version 3.1.29, created on 2017-11-18 21:12:23
  from "/var/www/html/whmcs/templates/hostrocket/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a109427c3f6f7_37542453',
  'file_dependency' => 
  array (
    'ae3407fd0b76dee9f9a28be462756e3862e4c254' => 
    array (
      0 => '/var/www/html/whmcs/templates/hostrocket/footer.tpl',
      1 => 1511035903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a109427c3f6f7_37542453 ($_smarty_tpl) {
?>

                </div><!-- /.main-content -->
                <?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren()) {?>
                    <div class="col-md-3 pull-md-left sidebar">
                        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sidebar'=>$_smarty_tpl->tpl_vars['secondarySidebar']->value), 0, true);
?>

                    </div>
                <?php }?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
</div>

<div id="footer" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 row-title">
                <h4>Got questions or need help></h4>
                <h5>Contact us and we will help you</h5>
            </div>
        </div>
        <div class="row main-footer-content">
            <p>Hostrocket network covers +250 countries and devices ranging from<br> 
                desktops and laptops to smart phones and tablets.</p>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <div class="contact-box">
                    <i class="hroc hroc-whatsapp"></i> +(038) 38 638036
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="contact-box">
                    <i class="hroc hroc-envelope"></i> Mari@hosting.com
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="contact-box">
                    <i class="hroc hroc-instagram"></i> @MariHosting
                </div>
            </div>
        </div>
    </div>
</div>

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
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/slick.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/main.js"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['footeroutput']->value;?>


</body>
</html>
<?php }
}
