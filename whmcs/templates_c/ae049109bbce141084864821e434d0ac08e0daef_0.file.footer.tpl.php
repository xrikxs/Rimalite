<?php
/* Smarty version 3.1.29, created on 2017-12-06 16:03:45
  from "/var/www/html/whmcs/templates/hostify/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a2806d1900cc4_21519235',
  'file_dependency' => 
  array (
    'ae049109bbce141084864821e434d0ac08e0daef' => 
    array (
      0 => '/var/www/html/whmcs/templates/hostify/footer.tpl',
      1 => 1512572622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2806d1900cc4_21519235 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['loginpage']->value == 0 && $_smarty_tpl->tpl_vars['templatefile']->value != "clientregister") {?>
                        </div><!-- /.main-content -->
                <div class="col-md-3 pull-md-left sidebar">
                <?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren()) {?>
                    <div>
                        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sidebar'=>$_smarty_tpl->tpl_vars['secondarySidebar']->value), 0, true);
?>

                    </div>
                <?php }?>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
</div>
<div id="footer" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-3">
                <div class="address-holder">
                    <div class="email"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Submit a ticket</div> 
                    <div class="email"><i class="fa fa-envelope"></i> Info@rimalite.net</div>
                    <div class="address">
                        <i class="fa fa-map-marker"></i> 
                        <div>Hilversum,<br>
                             The Netherlands.</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2">
                <div class="footer-menu-holder">
                    <h4>Company</h4>
                    <ul class="footer-menu">
                        <li><a href="about.html">About Us</a></li>
						<li><a href="contact.html">Contact Us</a></li>
                        <li><a href="pp.html">Privacy Policy</a></li>
                        <li><a href="tos.html">Terms Of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-3">
                <div class="footer-menu-holder">
                    <h4>Services</h4>
                    <ul class="footer-menu">
                        <li><a href="mcpackage.html">MC Hosting</a></li>
                        <li><a href="mcpe.html">MCPE Hosting</a></li>
                        <li><a href="teamspeak3.html">Ts3 Hosting</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="footer-menu-holder">
                    <h4>Others</h4>
                    <ul class="footer-menu">
                        <li><a href="FAQ.html">FAQ</a></li>
                        <li><a href="portal.html">Payment Methods</a></li>
                        <li><a href="client/register.php">Create Account</a></li>
                        <li><a href="whmcs.html">GamePanel</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-1 col-md-1">
                <div class="social-menu-holder">
                    <ul class="social-menu">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="copyright" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="info-text">Copyright © 2018 Rimalite | All Rights Reserved <br>
										Provided with <i class="fa fa-heart" aria-hidden="true"></i> and care. </div>
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
<?php }
if ($_smarty_tpl->tpl_vars['templatefile']->value == "clientregister") {
echo '<script'; ?>
>
    $(window).on("load", function() {
        $("select").addClass("selectpicker");
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/bootstrap-select.min.js"><?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/bootstrap-slider.min.js"><?php echo '</script'; ?>
>
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
