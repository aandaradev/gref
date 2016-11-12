<?php /* Smarty version Smarty-3.0.8, created on 2012-06-16 16:08:44
         compiled from "themes/default/subtemplates/register.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8492457554fdceed41fa4a4-62294684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f7a1d5838a400263c3da0251318296a74c7f09f' => 
    array (
      0 => 'themes/default/subtemplates/register.inc.tpl',
      1 => 1267448914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8492457554fdceed41fa4a4-62294684',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_replace')) include '/home/nightshadow/www/gref/forum/modules/smarty/plugins/modifier.replace.php';
?><?php  $_config = new Smarty_Internal_Config($_smarty_tpl->getVariable('language_file')->value, $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("register", 'local'); ?>
<?php if ($_smarty_tpl->getVariable('captcha')->value){?><?php  $_config = new Smarty_Internal_Config($_smarty_tpl->getVariable('language_file')->value, $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("captcha", 'local'); ?><?php }?>
<p class="normal"><?php echo $_smarty_tpl->getConfigVariable('register_exp');?>
</p>
<?php if ($_smarty_tpl->getVariable('errors')->value){?>
<p class="caution"><?php echo $_smarty_tpl->getConfigVariable('error_headline');?>
</p>
<ul>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['name'] = 'mysec';
$_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('errors')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['mysec']['total']);
?>
<?php $_smarty_tpl->tpl_vars["error"] = new Smarty_variable($_smarty_tpl->getVariable('errors')->value[$_smarty_tpl->getVariable('smarty')->value['section']['mysec']['index']], null, null);?>
<li><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable($_smarty_tpl->getVariable('error')->value),"[characters]",$_smarty_tpl->getVariable('settings')->value['min_pw_length']);?>
</li>
<?php endfor; endif; ?>
</ul>
<?php }?>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="register" />
<?php if ($_smarty_tpl->getVariable('captcha')->value){?><input type="hidden" name="<?php echo $_smarty_tpl->getVariable('captcha')->value['session_name'];?>
" value="<?php echo $_smarty_tpl->getVariable('captcha')->value['session_id'];?>
" /><?php }?>
<p><label for="new_user_name" class="main"><?php echo $_smarty_tpl->getConfigVariable('register_username');?>
</label><br />
<input id="new_user_name" class="login" type="text" size="30" name="new_user_name" value="<?php echo (($tmp = @$_smarty_tpl->getVariable('new_user_name')->value)===null||$tmp==='' ? '' : $tmp);?>
" maxlength="<?php echo $_smarty_tpl->getVariable('settings')->value['username_maxlength'];?>
" /></p>
<p><label for="new_user_email" class="main"><?php echo $_smarty_tpl->getConfigVariable('register_user_email');?>
</label><br />
<input id="new_user_email" class="login" type="text" size="30" name="new_user_email" value="<?php echo (($tmp = @$_smarty_tpl->getVariable('new_user_email')->value)===null||$tmp==='' ? '' : $tmp);?>
" maxlength="<?php echo $_smarty_tpl->getVariable('settings')->value['email_maxlength'];?>
" /></p>
<p><label for="reg_pw" class="main"><?php echo $_smarty_tpl->getConfigVariable('register_pw');?>
</label><br />
<input id="reg_pw" class="login" type="password" size="30" name="reg_pw" maxlength="255" /></p>
<p><label for="reg_pw_conf" class="main"><?php echo $_smarty_tpl->getConfigVariable('register_pw_conf');?>
</label><br />
<input id="reg_pw_conf" class="login" type="password" size="30" name="reg_pw_conf" maxlength="255" /></p>
<?php if ($_smarty_tpl->getVariable('terms_of_use_agreement')->value){?>
<?php $_smarty_tpl->tpl_vars['terms_of_use_url'] = new Smarty_variable($_smarty_tpl->getVariable('settings')->value['terms_of_use_url'], null, null);?>
<p><input id="terms_of_use_agree" type="checkbox" name="terms_of_use_agree" value="1"<?php if ($_smarty_tpl->getVariable('terms_of_use_agree')->value&&$_smarty_tpl->getVariable('terms_of_use_agree')->value==1){?> checked="checked"<?php }?> />&nbsp;<label for="terms_of_use_agree"><?php if ($_smarty_tpl->getVariable('terms_of_use_url')->value){?><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('terms_of_use_agreement'),"[[","<a id=\"terms_of_use\" href=\"".($_smarty_tpl->getVariable('terms_of_use_url')->value)."\">"),"]]","</a>");?>
<?php }else{ ?><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('terms_of_use_agreement'),"[[",''),"]]",'');?>
<?php }?></label></p>
<?php }?>
<?php if ($_smarty_tpl->getVariable('captcha')->value){?>
<?php if ($_smarty_tpl->getVariable('captcha')->value['type']==2){?>
<p><strong><?php echo $_smarty_tpl->getConfigVariable('captcha_marking');?>
</strong><br />
<img class="captcha" src="modules/captcha/captcha_image.php?<?php echo $_smarty_tpl->getVariable('captcha')->value['session_name'];?>
=<?php echo $_smarty_tpl->getVariable('captcha')->value['session_id'];?>
" alt="<?php echo $_smarty_tpl->getConfigVariable('captcha_image_alt_reg');?>
" width="180" height="40" /><br />
<label for="captcha_code"><?php echo $_smarty_tpl->getConfigVariable('captcha_expl_image');?>
</label><br />
<input id="captcha_code" type="text" name="captcha_code" value="" size="10" /></p>
<?php }else{ ?>
<p><strong><?php echo $_smarty_tpl->getConfigVariable('captcha_marking');?>
</strong><br />
<label for="captcha_code"><?php echo $_smarty_tpl->getConfigVariable('captcha_expl_math');?>
 <?php echo $_smarty_tpl->getVariable('captcha')->value['number_1'];?>
 + <?php echo $_smarty_tpl->getVariable('captcha')->value['number_2'];?>
 = </label><input id="captcha_code" type="text" name="captcha_code" value="" size="5" /></p>
<?php }?>
<?php }?>
<p><input type="submit" name="register_submit" value="<?php echo $_smarty_tpl->getConfigVariable('submit_button_ok');?>
" /></p>
</div>
</form>
