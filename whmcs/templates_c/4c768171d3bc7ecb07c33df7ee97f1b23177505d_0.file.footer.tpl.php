<?php
/* Smarty version 3.1.29, created on 2017-12-02 20:08:05
  from "/var/www/html/whmcs/templates/hostguruwhmcs/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a22fa15155cd7_74536760',
  'file_dependency' => 
  array (
    '4c768171d3bc7ecb07c33df7ee97f1b23177505d' => 
    array (
      0 => '/var/www/html/whmcs/templates/hostguruwhmcs/footer.tpl',
      1 => 1512241640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a22fa15155cd7_74536760 ($_smarty_tpl) {
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
</section>

    <!-- 
    *******************
        FOOTER
    ****************** 
    -->

    <footer class="wpc-footer">
        <div class="container no-padding-sm">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php"><img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/logo-light.png" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
" /></a>
                    <div class="footer-info">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Officiis at, voluptatem similique tempora voluptate quia in ea minima earum.
                    </div>
                    <p class="contact"><i class="flaticon-location"></i> 2901 Some Road, City, Country</p> 
                    <p class="contact"><a href="mailto:info@hostguru.com"><i class="flaticon-letter"></i>info@hostguru.com</a></p> 
                    <p class="contact"><a href="tel:+1234567890"><i class="flaticon-technology-1"></i>1 -234 -456 -7890 </a></p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="heading">Explore our pages</div>
                    <ul class="footer-menu classic">
                        <li class="menu-item"><a href="index.html">Home</a> </li>                             
                        <li class="menu-item"><a href="about.html">About Us</a> </li>
                        <li class="menu-item"><a href="services.html">Services</a></li>
                        <li class="menu-item"><a href="blog.html">Blog</a></li>
                        <li class="menu-item"><a href="domains.html">Domain Registration</a></li>
                        <li class="menu-item"><a href="hosting.html">Shared Hosting</a></li>
                        <li class="menu-item"><a href="cloud.html">Cloud VPS Slider</a></li>
                        <li class="menu-item"><a href="servers.html">Dedicated Servers</a></li>
                        <li class="menu-item"><a href="datacenter.html">Datacenter</a></li>
                        <li class="menu-item"><a href="team.html">Our team</a></li>
                        <li class="menu-item"><a href="countdown.html">Coming soon</a></li>
                        <li class="menu-item"><a href="faq.html">Faq</a></li>                       
                        <li class="menu-item"><a href="cart.html">cart</a></li>
                        <li class="menu-item"><a href="checkout.html">checkout</a></li>
                        <li class="menu-item"><a href="contact.html">contact</a></li>
                        <li class="menu-item"><a href="elements.html">elements</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 text-xs-center text-sm-center">
                    <div class="heading">Contact info</div>
                    <div class="soc-icons">
                        <a href=""><i class="fa fa-facebook"></i> Facebook</a>
                        <a href=""><i class="fa fa-google-plus"></i> Google Plus</a> <br>
                        <a href=""><i class="fa fa-twitter"></i> Twitter</a> 
                        <a href=""><i class="fa fa-linkedin"></i> Linkedin</a>                      
                    </div>                  
                </div>
            </div>          
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 no-padding-sm">
                    <div class="footer-bottom">
                    <div class="container no-padding-sm">
                        <div class="row">
                            <div class="col-lg-6 col-xs-12 text-center text-lg-left">
                                <div class="copyrigh">Copyright 2016 Host Guru - web hosting.</div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <ul class="footer-menu">
                                    <li class="menu-item"><a href="#">Legal</a></li>
                                    <li class="menu-item"><a href="#">Sitemap</a></li>
                                    <li class="menu-item"><a href="#">Privacy Policy</a></li>                             
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>



 

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/bootstrap-select.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    var csrfToken = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
',
        markdownGuide = '<?php echo WHMCS\Smarty::langFunction(array('key'=>"markdown.title"),$_smarty_tpl);?>
',
        locale = '<?php if (!empty($_smarty_tpl->tpl_vars['mdeLocale']->value)) {
echo WHMCS\Smarty::langFunction(array('key'=>"locale"),$_smarty_tpl);
} else { ?>en_GB<?php }?>',
        saved = '<?php echo WHMCS\Smarty::langFunction(array('key'=>"markdown.saved"),$_smarty_tpl);?>
',
        saving = '<?php echo WHMCS\Smarty::langFunction(array('key'=>"markdown.saving"),$_smarty_tpl);?>
';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/whmcs.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/AjaxModal.js"><?php echo '</script'; ?>
>

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
