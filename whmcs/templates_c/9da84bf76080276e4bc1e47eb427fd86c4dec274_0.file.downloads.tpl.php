<?php
/* Smarty version 3.1.29, created on 2017-11-18 18:50:09
  from "/var/www/html/whmcs/templates/hostrocket/downloads.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a1072d19599a3_14059463',
  'file_dependency' => 
  array (
    '9da84bf76080276e4bc1e47eb427fd86c4dec274' => 
    array (
      0 => '/var/www/html/whmcs/templates/hostrocket/downloads.tpl',
      1 => 1511027314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1072d19599a3_14059463 ($_smarty_tpl) {
if (empty($_smarty_tpl->tpl_vars['dlcats']->value)) {?>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['downloadsnone'],'textcenter'=>true), 0, true);
?>

<?php } else { ?>
    <form role="form" method="post" action="<?php echo routePath('download-search');?>
">
        <div class="input-group input-group-lg kb-search margin-bottom">
            <input type="text" name="search" id="inputDownloadsSearch" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadssearch'];?>
" />
            <span class="input-group-btn">
                <input type="submit" id="btnDownloadsSearch" class="btn btn-primary btn-input-padded-responsive" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['search'];?>
" />
            </span>
        </div>
    </form>

    <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadsintrotext'];?>
</p>

    <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadscategories'];?>
</h2>

    <div class="row">
        <?php
$_from = $_smarty_tpl->tpl_vars['dlcats']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_dlcat_0_saved_item = isset($_smarty_tpl->tpl_vars['dlcat']) ? $_smarty_tpl->tpl_vars['dlcat'] : false;
$_smarty_tpl->tpl_vars['dlcat'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['dlcat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['dlcat']->value) {
$_smarty_tpl->tpl_vars['dlcat']->_loop = true;
$__foreach_dlcat_0_saved_local_item = $_smarty_tpl->tpl_vars['dlcat'];
?>
            <div class="col-sm-6">
                <a href="<?php echo routePath('download-by-cat',$_smarty_tpl->tpl_vars['dlcat']->value['id'],$_smarty_tpl->tpl_vars['dlcat']->value['urlfriendlyname']);?>
">
                    <i class="fa fa-folder-open-o"></i>
                    <strong><?php echo $_smarty_tpl->tpl_vars['dlcat']->value['name'];?>
</strong>
                </a>
                (<?php echo $_smarty_tpl->tpl_vars['dlcat']->value['numarticles'];?>
)
                <br>
                <?php echo $_smarty_tpl->tpl_vars['dlcat']->value['description'];?>

            </div>
        <?php
$_smarty_tpl->tpl_vars['dlcat'] = $__foreach_dlcat_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['dlcat']->_loop) {
?>
            <div class="col-sm-12">
                <p class="text-center fontsize3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadsnone'];?>
</p>
            </div>
        <?php
}
if ($__foreach_dlcat_0_saved_item) {
$_smarty_tpl->tpl_vars['dlcat'] = $__foreach_dlcat_0_saved_item;
}
?>
    </div>

    <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadspopular'];?>
</h2>

    <div class="list-group">
        <?php
$_from = $_smarty_tpl->tpl_vars['mostdownloads']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_download_1_saved_item = isset($_smarty_tpl->tpl_vars['download']) ? $_smarty_tpl->tpl_vars['download'] : false;
$_smarty_tpl->tpl_vars['download'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['download']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['download']->value) {
$_smarty_tpl->tpl_vars['download']->_loop = true;
$__foreach_download_1_saved_local_item = $_smarty_tpl->tpl_vars['download'];
?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['download']->value['link'];?>
" class="list-group-item">
                <strong>
                    <i class="fa fa-download"></i>
                    <?php echo $_smarty_tpl->tpl_vars['download']->value['title'];?>

                    <?php if ($_smarty_tpl->tpl_vars['download']->value['clientsonly']) {?>
                        <i class="fa fa-lock text-muted"></i>
                    <?php }?>
                </strong>
                <br>
                <?php echo $_smarty_tpl->tpl_vars['download']->value['description'];?>

                <br>
                <small><?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadsfilesize'];?>
: <?php echo $_smarty_tpl->tpl_vars['download']->value['filesize'];?>
</small>
            </a>
        <?php
$_smarty_tpl->tpl_vars['download'] = $__foreach_download_1_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['download']->_loop) {
?>
            <span class="list-group-item text-center">
                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadsnone'];?>

            </span>
        <?php
}
if ($__foreach_download_1_saved_item) {
$_smarty_tpl->tpl_vars['download'] = $__foreach_download_1_saved_item;
}
?>
    </div>
<?php }
}
}
