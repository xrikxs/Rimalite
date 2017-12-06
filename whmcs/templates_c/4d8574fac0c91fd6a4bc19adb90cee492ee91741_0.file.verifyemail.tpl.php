<?php
/* Smarty version 3.1.29, created on 2017-12-04 18:03:37
  from "/var/www/html/members/templates/hostify/includes/verifyemail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a257fe96dc8c1_11183194',
  'file_dependency' => 
  array (
    '4d8574fac0c91fd6a4bc19adb90cee492ee91741' => 
    array (
      0 => '/var/www/html/members/templates/hostify/includes/verifyemail.tpl',
      1 => 1512241899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a257fe96dc8c1_11183194 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['emailVerificationIdValid']->value) {?>
    <div class="email-verification success">
        <div class="container">
            <i class="fa fa-check"></i>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['emailAddressVerified'];?>

        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['emailVerificationIdValid']->value === false) {?>
    <div class="email-verification failed">
        <div class="container">
            <i class="fa fa-times-circle"></i>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['emailKeyExpired'];?>

            <div class="pull-right">
                <button id="btnResendVerificationEmail" class="btn btn-default btn-sm">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['resendEmail'];?>

                </button>
            </div>
        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['emailVerificationPending']->value && !$_smarty_tpl->tpl_vars['showingLoginPage']->value) {?>
    <div class="email-verification">
        <div class="container">
            <button type="button" class="btn close"><span aria-hidden="true">&times;</span></button>
            <button id="btnResendVerificationEmail" class="btn btn-default btn-sm btn-resend-verify-email hidden-xs">
                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['resendEmail'];?>

            </button>
            <div class="text">
                <i class="fa fa-warning"></i>
                <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['verifyEmailAddress'];?>
</span>
            </div>
        </div>
    </div>
<?php }
}
}
