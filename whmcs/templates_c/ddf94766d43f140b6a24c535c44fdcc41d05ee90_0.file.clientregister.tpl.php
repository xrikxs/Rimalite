<?php
/* Smarty version 3.1.29, created on 2017-11-18 15:01:14
  from "/var/www/html/whmcs/templates/six/clientregister.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a103d2a78d236_36735902',
  'file_dependency' => 
  array (
    'ddf94766d43f140b6a24c535c44fdcc41d05ee90' => 
    array (
      0 => '/var/www/html/whmcs/templates/six/clientregister.tpl',
      1 => 1510924214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a103d2a78d236_36735902 ($_smarty_tpl) {
if (in_array('state',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>
    <?php echo '<script'; ?>
>
        var statesTab = 10;
        var stateNotRequired = true;
    <?php echo '</script'; ?>
>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/StatesDropdown.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/PasswordStrength.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    window.langPasswordStrength = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrength'];?>
";
    window.langPasswordWeak = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthweak'];?>
";
    window.langPasswordModerate = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthmoderate'];?>
";
    window.langPasswordStrong = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthstrong'];?>
";
    jQuery(document).ready(function()
    {
        jQuery("#inputNewPassword1").keyup(registerFormPasswordStrengthFeedback);
    });
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['registrationDisabled']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>((($_smarty_tpl->tpl_vars['LANG']->value['registerCreateAccount']).(' <strong><a href="cart.php" class="alert-link">')).($_smarty_tpl->tpl_vars['LANG']->value['registerCreateAccountOrder'])).('</a></strong>')), 0, true);
?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'errorshtml'=>$_smarty_tpl->tpl_vars['errormessage']->value), 0, true);
?>

<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['registrationDisabled']->value) {?>
<div id="registration">
    <form method="post" class="using-password-strength" action="<?php echo $_SERVER['PHP_SELF'];?>
" role="form" name="orderfrm" id="frmCheckout">
        <input type="hidden" name="register" value="true"/>

        <div id="containerNewUserSignup">

            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/linkedaccounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkContext'=>"registration"), 0, true);
?>


            <div class="sub-heading">
                <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['personalInformation'];?>
</span>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group prepend-icon">
                        <label for="inputFirstName" class="field-icon">
                            <i class="fa fa-user"></i>
                        </label>
                        <input type="text" name="firstname" id="inputFirstName" class="field form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['firstName'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['clientfirstname']->value;?>
" <?php if (!in_array('firstname',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?> autofocus>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group prepend-icon">
                        <label for="inputLastName" class="field-icon">
                            <i class="fa fa-user"></i>
                        </label>
                        <input type="text" name="lastname" id="inputLastName" class="field form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['lastName'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['clientlastname']->value;?>
" <?php if (!in_array('lastname',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?>>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group prepend-icon">
                        <label for="inputEmail" class="field-icon">
                            <i class="fa fa-envelope"></i>
                        </label>
                        <input type="email" name="email" id="inputEmail" class="field form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['emailAddress'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['clientemail']->value;?>
">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group prepend-icon">
                        <label for="inputPhone" class="field-icon">
                            <i class="fa fa-phone"></i>
                        </label>
                        <input type="tel" name="phonenumber" id="inputPhone" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['phoneNumber'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['clientphonenumber']->value;?>
">
                    </div>
                </div>
            </div>

            <div class="sub-heading">
                <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['billingAddress'];?>
</span>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group prepend-icon">
                        <label for="inputCompanyName" class="field-icon">
                            <i class="fa fa-building"></i>
                        </label>
                        <input type="text" name="companyname" id="inputCompanyName" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['companyName'];?>
 (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)" value="<?php echo $_smarty_tpl->tpl_vars['clientcompanyname']->value;?>
">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group prepend-icon">
                        <label for="inputAddress1" class="field-icon">
                            <i class="fa fa-building-o"></i>
                        </label>
                        <input type="text" name="address1" id="inputAddress1" class="field form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['streetAddress'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['clientaddress1']->value;?>
"  <?php if (!in_array('address1',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?>>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group prepend-icon">
                        <label for="inputAddress2" class="field-icon">
                            <i class="fa fa-map-marker"></i>
                        </label>
                        <input type="text" name="address2" id="inputAddress2" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['streetAddress2'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['clientaddress2']->value;?>
">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group prepend-icon">
                        <label for="inputCity" class="field-icon">
                            <i class="fa fa-building-o"></i>
                        </label>
                        <input type="text" name="city" id="inputCity" class="field form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['city'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['clientcity']->value;?>
"  <?php if (!in_array('city',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?>>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group prepend-icon">
                        <label for="state" class="field-icon" id="inputStateIcon">
                            <i class="fa fa-map-signs"></i>
                        </label>
                        <label for="stateinput" class="field-icon" id="inputStateIcon">
                            <i class="fa fa-map-signs"></i>
                        </label>
                        <input type="text" name="state" id="state" class="field form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['state'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['clientstate']->value;?>
"  <?php if (!in_array('state',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?>>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group prepend-icon">
                        <label for="inputPostcode" class="field-icon">
                            <i class="fa fa-certificate"></i>
                        </label>
                        <input type="text" name="postcode" id="inputPostcode" class="field form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['postcode'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['clientpostcode']->value;?>
" <?php if (!in_array('postcode',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?>>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group prepend-icon">
                        <label for="inputCountry" class="field-icon" id="inputCountryIcon">
                            <i class="fa fa-globe"></i>
                        </label>
                        <select name="country" id="inputCountry" class="field form-control">
                            <?php
$_from = $_smarty_tpl->tpl_vars['clientcountries']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_countryName_0_saved_item = isset($_smarty_tpl->tpl_vars['countryName']) ? $_smarty_tpl->tpl_vars['countryName'] : false;
$__foreach_countryName_0_saved_key = isset($_smarty_tpl->tpl_vars['countryCode']) ? $_smarty_tpl->tpl_vars['countryCode'] : false;
$_smarty_tpl->tpl_vars['countryName'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['countryCode'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['countryName']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['countryCode']->value => $_smarty_tpl->tpl_vars['countryName']->value) {
$_smarty_tpl->tpl_vars['countryName']->_loop = true;
$__foreach_countryName_0_saved_local_item = $_smarty_tpl->tpl_vars['countryName'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['countryCode']->value;?>
"<?php if ((!$_smarty_tpl->tpl_vars['clientcountry']->value && $_smarty_tpl->tpl_vars['countryCode']->value == $_smarty_tpl->tpl_vars['defaultCountry']->value) || ($_smarty_tpl->tpl_vars['countryCode']->value == $_smarty_tpl->tpl_vars['clientcountry']->value)) {?> selected="selected"<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['countryName']->value;?>

                                </option>
                            <?php
$_smarty_tpl->tpl_vars['countryName'] = $__foreach_countryName_0_saved_local_item;
}
if ($__foreach_countryName_0_saved_item) {
$_smarty_tpl->tpl_vars['countryName'] = $__foreach_countryName_0_saved_item;
}
if ($__foreach_countryName_0_saved_key) {
$_smarty_tpl->tpl_vars['countryCode'] = $__foreach_countryName_0_saved_key;
}
?>
                        </select>
                    </div>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['customfields']->value || $_smarty_tpl->tpl_vars['currencies']->value) {?>
            <div class="sub-heading">
                <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderadditionalrequiredinfo'];?>
</span>
            </div>
            <div class="row">
                <?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>
                <?php
$_from = $_smarty_tpl->tpl_vars['customfields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_customfield_1_saved_item = isset($_smarty_tpl->tpl_vars['customfield']) ? $_smarty_tpl->tpl_vars['customfield'] : false;
$_smarty_tpl->tpl_vars['customfield'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['customfield']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['customfield']->value) {
$_smarty_tpl->tpl_vars['customfield']->_loop = true;
$__foreach_customfield_1_saved_local_item = $_smarty_tpl->tpl_vars['customfield'];
?>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>
</label>
                            <div class="control">
                                <?php echo $_smarty_tpl->tpl_vars['customfield']->value['input'];?>

                            <?php if ($_smarty_tpl->tpl_vars['customfield']->value['description']) {?>
                                <span class="field-help-text"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>
</span>
                            <?php }?>
                            </div>
                        </div>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['customfield'] = $__foreach_customfield_1_saved_local_item;
}
if ($__foreach_customfield_1_saved_item) {
$_smarty_tpl->tpl_vars['customfield'] = $__foreach_customfield_1_saved_item;
}
?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['customfields']->value && count($_smarty_tpl->tpl_vars['customfields']->value)%2 > 0) {?>
                    <div class="clearfix"></div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['currencies']->value) {?>
                <div class="col-sm-6">
                    <div class="form-group prepend-icon">
                        <label for="inputCurrency" class="field-icon">
                            <i class="fa fa-money"></i>
                        </label>
                        <select id="inputCurrency" name="currency" class="field form-control">
                            <?php
$_from = $_smarty_tpl->tpl_vars['currencies']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_curr_2_saved_item = isset($_smarty_tpl->tpl_vars['curr']) ? $_smarty_tpl->tpl_vars['curr'] : false;
$_smarty_tpl->tpl_vars['curr'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['curr']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['curr']->value) {
$_smarty_tpl->tpl_vars['curr']->_loop = true;
$__foreach_curr_2_saved_local_item = $_smarty_tpl->tpl_vars['curr'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['curr']->value['id'];?>
"<?php if (!$_POST['currency'] && $_smarty_tpl->tpl_vars['curr']->value['default'] || $_POST['currency'] == $_smarty_tpl->tpl_vars['curr']->value['id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['curr']->value['code'];?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['curr'] = $__foreach_curr_2_saved_local_item;
}
if ($__foreach_curr_2_saved_item) {
$_smarty_tpl->tpl_vars['curr'] = $__foreach_curr_2_saved_item;
}
?>
                        </select>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
        <?php }?>
        <div id="containerNewUserSecurity" <?php if ($_smarty_tpl->tpl_vars['remote_auth_prelinked']->value && !$_smarty_tpl->tpl_vars['securityquestions']->value) {?> class="hidden"<?php }?>>

            <div class="sub-heading">
                <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['accountSecurity'];?>
</span>
            </div>
            <div id="containerPassword" class="row<?php if ($_smarty_tpl->tpl_vars['remote_auth_prelinked']->value && $_smarty_tpl->tpl_vars['securityquestions']->value) {?> hidden<?php }?>">
                <div id="passwdFeedback" style="display: none;" class="alert alert-info text-center col-sm-12"></div>
                <div class="col-sm-6">
                    <div class="form-group prepend-icon">
                        <label for="inputNewPassword1" class="field-icon">
                            <i class="fa fa-lock"></i>
                        </label>
                        <input type="password" name="password" id="inputNewPassword1" data-error-threshold="<?php echo $_smarty_tpl->tpl_vars['pwStrengthErrorThreshold']->value;?>
" data-warning-threshold="<?php echo $_smarty_tpl->tpl_vars['pwStrengthWarningThreshold']->value;?>
" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapassword'];?>
" autocomplete="off"<?php if ($_smarty_tpl->tpl_vars['remote_auth_prelinked']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
"<?php }?>>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group prepend-icon">
                        <label for="inputNewPassword2" class="field-icon">
                            <i class="fa fa-lock"></i>
                        </label>
                        <input type="password" name="password2" id="inputNewPassword2" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaconfirmpassword'];?>
" autocomplete="off"<?php if ($_smarty_tpl->tpl_vars['remote_auth_prelinked']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
"<?php }?>>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="passwordStrengthMeterBar">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <p class="text-center small text-muted" id="passwordStrengthTextLabel"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrength'];?>
: <?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthenter'];?>
</p>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['securityquestions']->value) {?>
            <div class="row">
                <div class="form-group col-sm-12">
                    <select name="securityqid" id="inputSecurityQId" class="field form-control">
                        <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasecurityquestion'];?>
</option>
                        <?php
$_from = $_smarty_tpl->tpl_vars['securityquestions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_question_3_saved_item = isset($_smarty_tpl->tpl_vars['question']) ? $_smarty_tpl->tpl_vars['question'] : false;
$_smarty_tpl->tpl_vars['question'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['question']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
$__foreach_question_3_saved_local_item = $_smarty_tpl->tpl_vars['question'];
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['question']->value['id'] == $_smarty_tpl->tpl_vars['securityqid']->value) {?> selected<?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['question']->value['question'];?>

                            </option>
                        <?php
$_smarty_tpl->tpl_vars['question'] = $__foreach_question_3_saved_local_item;
}
if ($__foreach_question_3_saved_item) {
$_smarty_tpl->tpl_vars['question'] = $__foreach_question_3_saved_item;
}
?>
                    </select>
                </div>
                <div class="col-sm-6">
                    <div class="form-group prepend-icon">
                        <label for="inputSecurityQAns" class="field-icon">
                            <i class="fa fa-lock"></i>
                        </label>
                        <input type="password" name="securityqans" id="inputSecurityQAns" class="field form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasecurityanswer'];?>
" autocomplete="off">
                    </div>
                </div>
            </div>
            <?php }?>
        </div>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


        <br/>
        <?php if ($_smarty_tpl->tpl_vars['accepttos']->value) {?>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-danger tospanel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span class="fa fa-exclamation-triangle tosicon"></span> &nbsp; <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertos'];?>
</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <label class="checkbox">
                                    <input type="checkbox" name="accepttos" class="accepttos">
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertosagreement'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['tosurl']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertos'];?>
</a>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
        <p align="center">
            <input class="btn btn-large btn-primary" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientregistertitle'];?>
"/>
        </p>
    </form>
</div>
<?php }
}
}
