<?php
/* Smarty version 3.1.29, created on 2017-11-22 13:20:19
  from "/var/www/html/whmcs/templates/flathost/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a156b83a37990_30924722',
  'file_dependency' => 
  array (
    '84edefbec1f470550f40c1b2770c362bb1c9609c' => 
    array (
      0 => '/var/www/html/whmcs/templates/flathost/footer.tpl',
      1 => 1511353036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a156b83a37990_30924722 ($_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['pagetitle']->value == $_smarty_tpl->tpl_vars['LANG']->value['carttitle']) {?></div><?php }?>

    </div>
</div>
 

<!--===== Flathost  Footer =====-->

<div class="footer">
  <div class="container">
    <div class="row footerlinks">
      <div class="col-sm-4 col-md-2">
        <p>CALL US</p>
        <ul>
          <li> +1 4528 254 247</li>
          <li>+1 4002 188 355</li>
        </ul>
      </div>
      <div class="col-sm-4 col-md-2">
        <p>FOLLOW US</p>
        <ul>
          <li><a href="http://twitter.com/surjithctly" target="_blank">Follow on Twitter</a></li>
          <li><a href="http://web3canvas.com" target="_blank">Like us on Facebook</a></li>
          <li><a href="http://surjithctly.in" target="_blank">Join on Linkedin</a> </li>
        </ul>
      </div>
      <div class="col-sm-4 col-md-2">
        <p>COMPANY</p>
        <ul>
          <li> <a href="#">About us</a></li>
          <li><a href="#">Latest from Blog</a></li>
          <li><a href="#">Our Team</a></li>
        </ul>
      </div>
      <div class="col-sm-4 col-md-2">
        <p>EMAIL US</p>
        <ul>
          <li><a href="mailto:support@mail.in" target="_blank">support@mail.com</a></li>
          <li><a href="mailto:mail@mail.in" target="_blank">sales@mail.com</a></li>
        </ul>
      </div>
      
      <div class="col-sm-4 col-md-2">
        <p>LEGAL TERMS</p>
        <ul>
          <li><a href="#">Terms of use</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="col-sm-4 col-md-2">
        <p>Language</p>
        <ul>
          <li> <?php if ($_smarty_tpl->tpl_vars['langchange']->value) {?><div id="languagechooser"><?php echo $_smarty_tpl->tpl_vars['setlanguage']->value;?>
</div><?php }?> </li>
        </ul>
      </div>
    </div>
    <div class="row copyright">
      <div class="pull-right hidden-xs"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/logo-footer.png" alt="logo"></div>
      <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['copyright'];?>
 &copy; <?php echo $_smarty_tpl->tpl_vars['date_year']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
. <?php echo $_smarty_tpl->tpl_vars['LANG']->value['allrightsreserved'];?>
.</p>
    </div>
  </div>
</div>

<?php echo $_smarty_tpl->tpl_vars['footeroutput']->value;?>


</body>
</html><?php }
}
