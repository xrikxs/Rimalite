<?php
/* Smarty version 3.1.29, created on 2017-12-02 20:13:37
  from "/var/www/html/whmcs/templates/hostify/clientregister.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a22fb61ac8579_61816934',
  'file_dependency' => 
  array (
    'e7ea0443f9dbcf271b14c07b66aa55b1ee392938' => 
    array (
      0 => '/var/www/html/whmcs/templates/hostify/clientregister.tpl',
      1 => 1512241891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a22fb61ac8579_61816934 ($_smarty_tpl) {
?>
<div id="form-section" class="container-fluid signup">
    <div class="website-logo">
        <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php">
            <div class="logo" style="width:62px;height:18px"></div>
        </a>
    </div>
    <div class="row">
        <div class="info-slider-holder">
            <div class="bg-animation"></div>
            <div class="info-holder">
                <h6>A Service you can anytime modify.</h6>
                <div class="bold-title">it’s not that hard to get<br>
    a website <span>anymore.</span></div>
                <div class="mini-testimonials-slider">
                    <div>
                        <div class="details-holder">
                            <img class="photo" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/person1.jpg" alt="">
                            <h4>Chris Walker</h4>
                            <h5>CEO & CO-Founder @HelloBrandio</h5>
                            <p>“In hostify we trust. I am with them for over
    7 years now. It always felt like home!
    Loved their customer support”</p>
                        </div>
                    </div>
                    <div>
                        <div class="details-holder">
                            <img class="photo" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/person2.jpg" alt="">
                            <h4>Chris Walker</h4>
                            <h5>CEO & CO-Founder @HelloBrandio</h5>
                            <p>“In hostify we trust. I am with them for over
    7 years now. It always felt like home!
    Loved their customer support”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-holder">
            <div class="menu-holder">
                <ul class="main-links">
                    <li><a class="normal-link" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/login.php">You have an account?</a></li>
                    <li><a class="sign-button" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/login.php">Sign in</a></li>
                </ul>
            </div>
            <div class="signin-signup-form">
                <div class="form-items">
                    <div class="form-title"><?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['LANG']->value['register']), 0, true);
?>
</div>
                    <?php if (in_array('state',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>
                        <?php echo '<script'; ?>
>
                            var stateNotRequired = true;
                        <?php echo '</script'; ?>
>
                    <?php }?>

                    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/StatesDropdown.js"><?php echo '</script'; ?>
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
                    <form id="signupform" method="post" class="using-password-strength" action="<?php echo $_SERVER['PHP_SELF'];?>
" role="form">
                        <input type="hidden" name="register" value="true"/>
                        <div class="row">
                            <div class="col-md-6 form-text">
                                <input type="text" name="firstname" id="firstname" value="<?php echo $_smarty_tpl->tpl_vars['clientfirstname']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareafirstname'];?>
" <?php if (!in_array('firstname',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?> />
                            </div>
                            <div class="col-md-6 form-text">
                                <input type="text" name="lastname" id="lastname" value="<?php echo $_smarty_tpl->tpl_vars['clientlastname']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientarealastname'];?>
" <?php if (!in_array('lastname',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?> />
                            </div>
                        </div>
                        <div class="form-text">
                            <input type="text" name="companyname" id="companyname" value="<?php echo $_smarty_tpl->tpl_vars['clientcompanyname']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacompanyname'];?>
" />
                        </div>
                        <div class="form-text">
                            <input type="email" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['clientemail']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaemail'];?>
" />
                        </div>

                        <div id="newPassword1" class="form-group has-feedback form-text">
                            <input type="password" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapassword'];?>
" id="inputNewPassword1" name="password" autocomplete="off" />
                            <span class="form-control-feedback glyphicon glyphicon-password"></span>
                            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pwstrength.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                        </div>
                        <div id="newPassword2" class="form-group has-feedback form-text">
                            <input type="password" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaconfirmpassword'];?>
" id="inputNewPassword2" name="password2" autocomplete="off" />
                            <span class="form-control-feedback glyphicon glyphicon-password"></span>
                            <div id="inputNewPassword2Msg">
                            </div>
                        </div>

                        <div class="form-text">
                            <input type="text" name="address1" id="address1" value="<?php echo $_smarty_tpl->tpl_vars['clientaddress1']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddress1'];?>
" <?php if (!in_array('address1',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?> />
                        </div>
                        <div class="form-text">
                            <input type="text" name="address2" id="address2" value="<?php echo $_smarty_tpl->tpl_vars['clientaddress2']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddress2'];?>
" />
                        </div>
                        <div class="form-text">
                            <input type="text" name="city" id="city" class="selectpicker" value="<?php echo $_smarty_tpl->tpl_vars['clientcity']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacity'];?>
" <?php if (!in_array('city',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?> />
                        </div>
                        <div class="form-text">
                            <input type="text" name="state" id="state" value="<?php echo $_smarty_tpl->tpl_vars['clientstate']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareastate'];?>
" <?php if (!in_array('state',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?> />
                        </div>
                        <div class="form-text">
                            <input type="text" name="postcode" id="postcode" value="<?php echo $_smarty_tpl->tpl_vars['clientpostcode']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapostcode'];?>
" <?php if (!in_array('postcode',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?> />
                        </div>

                        <div class="form-text">
                            <label for="country" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacountry'];?>
</label>
                            <select id="country" name="country" class="selectpicker">
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

                        <div class="form-text">
                            <input type="tel" name="phonenumber" id="phonenumber" value="<?php echo $_smarty_tpl->tpl_vars['clientphonenumber']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaphonenumber'];?>
" <?php if (!in_array('phonenumber',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?> />
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>
                            <?php
$_from = $_smarty_tpl->tpl_vars['customfields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_customfield_1_saved_item = isset($_smarty_tpl->tpl_vars['customfield']) ? $_smarty_tpl->tpl_vars['customfield'] : false;
$__foreach_customfield_1_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['customfield'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['customfield']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['customfield']->value) {
$_smarty_tpl->tpl_vars['customfield']->_loop = true;
$__foreach_customfield_1_saved_local_item = $_smarty_tpl->tpl_vars['customfield'];
?>
                                <div class="form-text">
                                    <label class="control-label" for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>
</label>
                                    <div class="control">
                                        <?php echo $_smarty_tpl->tpl_vars['customfield']->value['input'];?>
 <?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>

                                    </div>
                                </div>
                            <?php
$_smarty_tpl->tpl_vars['customfield'] = $__foreach_customfield_1_saved_local_item;
}
if ($__foreach_customfield_1_saved_item) {
$_smarty_tpl->tpl_vars['customfield'] = $__foreach_customfield_1_saved_item;
}
if ($__foreach_customfield_1_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_customfield_1_saved_key;
}
?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['currencies']->value) {?>
                            <div class="form-group">
                                <label for="currency" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['choosecurrency'];?>
</label>
                                <select id="currency" name="currency" class="selectpicker">
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
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['securityquestions']->value) {?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasecurityquestion'];?>
:</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group col-sm-12">
                                        <select name="securityqid" id="securityqid" class="form-control">
                                            <?php
$_from = $_smarty_tpl->tpl_vars['securityquestions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_question_3_saved_item = isset($_smarty_tpl->tpl_vars['question']) ? $_smarty_tpl->tpl_vars['question'] : false;
$__foreach_question_3_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['question'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['question']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
$__foreach_question_3_saved_local_item = $_smarty_tpl->tpl_vars['question'];
?>
                                                <option value=<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['question']->value['question'];?>
</option>
                                            <?php
$_smarty_tpl->tpl_vars['question'] = $__foreach_question_3_saved_local_item;
}
if ($__foreach_question_3_saved_item) {
$_smarty_tpl->tpl_vars['question'] = $__foreach_question_3_saved_item;
}
if ($__foreach_question_3_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_question_3_saved_key;
}
?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label" for="securityqans"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasecurityanswer'];?>
</label>
                                        <div class="col-sm-6">
                                            <input type="password" name="securityqans" id="securityqans" class="form-control" autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>

                        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


                        <?php if ($_smarty_tpl->tpl_vars['accepttos']->value) {?>
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
                        <?php }?>
                        <div class="form-button">
                            <button id="submit" type="submit" class="ybtn ybtn-purple"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientregistertitle'];?>
</button>
                        </div>
                    </form>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
