<?php
/* Smarty version 3.1.29, created on 2017-11-22 13:20:19
  from "/var/www/html/whmcs/templates/flathost/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a156b83a2de78_23431383',
  'file_dependency' => 
  array (
    '9d6e7fb07f800c289d24c3e649e424a27c100e12' => 
    array (
      0 => '/var/www/html/whmcs/templates/flathost/header.tpl',
      1 => 1511353036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a156b83a2de78_23431383 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
" />
<title><?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['title']) {
echo $_smarty_tpl->tpl_vars['kbarticle']->value['title'];?>
 - <?php }
echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if ($_smarty_tpl->tpl_vars['systemurl']->value) {?>
<base href="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;?>
" />
<?php }
echo '<script'; ?>
 type="text/javascript" src="includes/jscript/jquery.js"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['livehelpjs']->value) {
echo $_smarty_tpl->tpl_vars['livehelpjs']->value;?>

    <?php }?>
<link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/bootstrap.css" rel="stylesheet">
<link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/flathost.css" rel="stylesheet">
<!--==== GOOGLE FONT - MONTSERRAT =======-->
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/whmcs.js"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['headoutput']->value;?>

</head>

<body>
<?php echo $_smarty_tpl->tpl_vars['headeroutput']->value;?>
 

<!--===== FLATHOST NAVIGATION ======-->

<nav class="navbar navbar-default navbar-static-top" role="navigation"> 
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.php"> <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
" /></a> </div>
    <a href="index.php" class="hidden"><?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</a> 
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../index.html">HOME</a></li>
        <li class="hidden-sm"><a href="#">FEATURES</a></li>
        <li class="hidden-sm"><a href="#">PARTNERS</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#">CONTACT</a></li>
      </ul>
      </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
    
  </div>
</nav>

<!--===== WHMCS NAVIGATION ======-->

<div class="navbar navbar-inverse navbar-static-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-whmcs-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <div class="navbar-collapse navbar-whmcs-collapse collapse">
  <ul class="nav navbar-nav">
    <li>  <a id="Menu-Home" href="<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>clientarea<?php } else { ?>index<?php }?>.php"><span class="glyphicon glyphicon-home"></span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['hometitle'];?>
</a></li>
    <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
    <li class="dropdown"><a id="Menu-Services" class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-tasks"></span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['navservices'];?>
&nbsp;<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a id="Menu-Services-My_Services" href="clientarea.php?action=products"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavservices'];?>
</a></li>
        <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['pmaddon']) {?>
        <li><a id="Menu-Services-My_Projects" href="index.php?m=project_management"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaprojects'];?>
</a></li>
        <?php }?>
        <li class="divider"></li>
        <li><a id="Menu-Services-Order_New_Services" href="cart.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navservicesorder'];?>
</a></li>
        <li><a id="Menu-Services-View_Available_Addons" href="cart.php?gid=addons"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaviewaddons'];?>
</a></li>
      </ul>
    </li>
    <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['domainreg'] || $_smarty_tpl->tpl_vars['condlinks']->value['domaintrans']) {?>
    <li class="dropdown"><a id="Menu-Domains" class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-globe"></span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['navdomains'];?>
&nbsp;<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a id="Menu-Domains-My_Domains" href="clientarea.php?action=domains"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavdomains'];?>
</a></li>
        <li class="divider"></li>
        <li><a id="Menu-Domains-Renew_Domains" href="cart.php?gid=renewals"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navrenewdomains'];?>
</a></li>
        <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['domainreg']) {?>
        <li><a id="Menu-Domains-Register_a_New_Domain" href="cart.php?a=add&domain=register"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navregisterdomain'];?>
</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['domaintrans']) {?>
        <li><a id="Menu-Domains-Transfer_Domains_to_Us" href="cart.php?a=add&domain=transfer"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navtransferdomain'];?>
</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['enomnewtldsenabled']->value) {?>
        <li><a id="Menu-Domains-Preregister_New_TLDs" href="<?php echo $_smarty_tpl->tpl_vars['enomnewtldslink']->value;?>
">Preregister New TLDs</a></li>
        <?php }?>
        <li class="divider"></li>
        <li><a id="Menu-Domains-Whois_Lookup" href="domainchecker.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navwhoislookup'];?>
</a></li>
      </ul>
    </li>
    <?php }?>
    <li class="dropdown"><a id="Menu-Billing" class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-usd"></span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['navbilling'];?>
&nbsp;<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a id="Menu-Billing-My_Invoices" href="clientarea.php?action=invoices"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoices'];?>
</a></li>
        <li><a id="Menu-Billing-My_Quotes" href="clientarea.php?action=quotes"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['quotestitle'];?>
</a></li>
        <li class="divider"></li>
        <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['addfunds']) {?>
        <li><a id="Menu-Billing-Add_Funds" href="clientarea.php?action=addfunds"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['addfunds'];?>
</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['masspay']) {?>
        <li><a id="Menu-Billing-Mass_Payment" href="clientarea.php?action=masspay&all=true"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['masspaytitle'];?>
</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['updatecc']) {?>
        <li><a id="Menu-Billing-Manage_Credit_Card" href="clientarea.php?action=creditcard"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navmanagecc'];?>
</a></li>
        <?php }?>
      </ul>
    </li>
    <li class="dropdown"><a id="Menu-Support" class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-info-sign"></span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['navsupport'];?>
&nbsp;<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a id="Menu-Support-Tickets" href="supporttickets.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navtickets'];?>
</a></li>
        <li><a id="Menu-Support-Knowledgebase" href="knowledgebase.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebasetitle'];?>
</a></li>
        <li><a id="Menu-Support-Downloads" href="downloads.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadstitle'];?>
</a></li>
        <li><a id="Menu-Support-Network_Status" href="serverstatus.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['networkstatustitle'];?>
</a></li>
      </ul>
    </li>
    <li><a id="Menu-Open_Ticket" href="submitticket.php"><span class="glyphicon glyphicon-envelope"></span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['navopenticket'];?>
</a></li>
    <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['affiliates']) {?>
    <li><a id="Menu-Affiliates" href="affiliates.php"><span class="glyphicon glyphicon-screenshot"></span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['affiliatestitle'];?>
</a></li>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['livehelp']->value) {?>
    <li><a id="Menu-Live_Chat" href="#" class="LiveHelpButton">Live Chat - <span class="LiveHelpTextStatus">Offline</span></a></li>
    <?php }?>
  </ul>
  
   <!--nav right-->
 
  <ul class="nav  navbar-nav navbar-right">
    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="Menu-Hello_User"><span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['hello'];?>
, <?php echo $_smarty_tpl->tpl_vars['loggedinuser']->value['firstname'];?>
&nbsp; <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a id="Menu-Hello_User-Edit_Account_Details" href="clientarea.php?action=details"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['editaccountdetails'];?>
</a></li>
        <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['updatecc']) {?>
        <li><a id="Menu-Hello_User-Contacts_Sub-Accounts" href="clientarea.php?action=creditcard"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navmanagecc'];?>
</a></li>
        <?php }?>
        <li><a href="clientarea.php?action=contacts"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavcontacts'];?>
</a></li>
        <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['addfunds']) {?>
        <li><a id="Menu-Hello_User-Add_Funds" href="clientarea.php?action=addfunds"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['addfunds'];?>
</a></li>
        <?php }?>
        <li><a id="Menu-Hello_User-Email_History" href="clientarea.php?action=emails"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navemailssent'];?>
</a></li>
        <li><a id="Menu-Hello_User-Change_Password" href="clientarea.php?action=changepw"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavchangepw'];?>
</a></li>
        <li class="divider"></li>
        <li><a id="Menu-Hello_User-Logout" href="logout.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['logouttitle'];?>
</a></li>
      </ul>
    </li>
  <?php } else { ?>
    <li><a id="Menu-Annoucements" href="announcements.php"><span class="glyphicon glyphicon-bullhorn"></span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['announcementstitle'];?>
</a></li>
    <li><a id="Menu-Knowledgebase" href="knowledgebase.php"><span class="glyphicon glyphicon-info-sign"></span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebasetitle'];?>
</a></li>
    <li><a id="Menu-Network_Status" href="serverstatus.php"><span class="glyphicon glyphicon-stats"></span>  <?php echo $_smarty_tpl->tpl_vars['LANG']->value['networkstatustitle'];?>
</a></li>
    <li><a id="Menu-Affiliates" href="affiliates.php"><span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['affiliatestitle'];?>
</a></li>
    <li><a id="Menu-Contact_Us" href="contact.php"><span class="glyphicon glyphicon-envelope"></span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['contactus'];?>
</a></li>
    <?php if ($_smarty_tpl->tpl_vars['livehelp']->value) {?>
    <li><a id="Menu-Live_Chat" href="#" class="LiveHelpButton">Live Chat - <span class="LiveHelpTextStatus">Offline</span></a></li>
    <?php }?>
    </ul>
 
  <ul class="nav  navbar-nav navbar-right">
    <li class="dropdown"><a id="Menu-Account" class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['account'];?>
&nbsp;<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a id="Menu-Account-Login" href="clientarea.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['login'];?>
</a></li>
        <li><a id="Menu-Account-Register" href="register.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['register'];?>
</a></li>
        <li class="divider"></li>
        <li><a id="Menu-Account-Forgot_Password" href="pwreset.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['forgotpw'];?>
</a></li>
      </ul>
    </li>
  </ul>
  <?php }?> </div>

    <!--/.nav-collapse --> 
  </div>
</div>

<!-- /navbar -->

<div class="container">
<div class="contentpadded">
<?php if ($_smarty_tpl->tpl_vars['pagetitle']->value == $_smarty_tpl->tpl_vars['LANG']->value['carttitle']) {?>
<div id="whmcsorderfrm">
<?php }?> 
<?php }
}
