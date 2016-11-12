<?php /* Smarty version Smarty-3.0.8, created on 2012-06-16 16:09:05
         compiled from "themes/default/subtemplates/login.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8219618194fdceee9eb6ca1-75359510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '871e87d7855b79a9fe2aab3bbdf66a77849ba9dd' => 
    array (
      0 => 'themes/default/subtemplates/login.inc.tpl',
      1 => 1266863699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8219618194fdceee9eb6ca1-75359510',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php  $_config = new Smarty_Internal_Config($_smarty_tpl->getVariable('language_file')->value, $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("login", 'local'); ?>
<?php if ($_smarty_tpl->getVariable('ip_temporarily_blocked')->value){?>
<?php echo $_smarty_tpl->getConfigVariable('login_message');?>

<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('login_ip_temp_blocked');?>
</p>
<?php }else{ ?>
<?php if ($_smarty_tpl->getVariable('login_message')->value&&$_smarty_tpl->getConfigVariable($_smarty_tpl->getVariable('login_message')->value)){?>
<p class="<?php if ($_smarty_tpl->getVariable('login_message')->value=='account_activated'||$_smarty_tpl->getVariable('login_message')->value=='mail_sent'||$_smarty_tpl->getVariable('login_message')->value=='pw_sent'){?>ok<?php }else{ ?>caution<?php }?>"><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->getVariable('login_message')->value);?>
</p>
<?php }?>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="<?php echo $_smarty_tpl->getVariable('mode')->value;?>
" />
<?php if ($_smarty_tpl->getVariable('back')->value){?><input type="hidden" name="back" value="<?php echo $_smarty_tpl->getVariable('back')->value;?>
" /><?php }?>
<?php if ($_smarty_tpl->getVariable('id')->value){?><input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('id')->value;?>
" /><?php }?>
<p><label for="login" class="main"><?php echo $_smarty_tpl->getConfigVariable('login_username');?>
</label><br /><input id="login" class="login" type="text" name="username" size="25" /></p>
<p><label for="password" class="main"><?php echo $_smarty_tpl->getConfigVariable('login_password');?>
</label><br /><input id="password" class="login" type="password" name="userpw" size="25" /></p>
<?php if ($_smarty_tpl->getVariable('settings')->value['autologin']==1){?>
<p class="small"><input id="autologin" type="checkbox" name="autologin_checked" value="true" /> <label for="autologin"><?php echo $_smarty_tpl->getConfigVariable('login_auto');?>
</label></p>
<?php }?>
<p><input type="submit" value="<?php echo $_smarty_tpl->getConfigVariable('login_submit');?>
" /></p>
</div>
</form>
<p class="small"><?php echo $_smarty_tpl->getConfigVariable('login_advice');?>
</p>
<p class="small"><a href="index.php?mode=login&amp;action=pw_forgotten"><?php echo $_smarty_tpl->getConfigVariable('pw_forgotten_link');?>
</a></p>
<?php }?>
