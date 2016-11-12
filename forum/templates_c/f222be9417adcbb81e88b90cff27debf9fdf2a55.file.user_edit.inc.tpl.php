<?php /* Smarty version Smarty-3.0.8, created on 2012-06-16 16:11:16
         compiled from "themes/default/subtemplates/user_edit.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:832963664fdcef6c2fd688-93029049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f222be9417adcbb81e88b90cff27debf9fdf2a55' => 
    array (
      0 => 'themes/default/subtemplates/user_edit.inc.tpl',
      1 => 1268478381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '832963664fdcef6c2fd688-93029049',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_replace')) include '/home/nightshadow/www/gref/forum/modules/smarty/plugins/modifier.replace.php';
?><?php  $_config = new Smarty_Internal_Config($_smarty_tpl->getVariable('language_file')->value, $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("user_edit", 'local'); ?>
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
<li><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable($_smarty_tpl->getVariable('error')->value),"[profile_length]",$_smarty_tpl->getVariable('profil_length')->value),"[profile_maxlength]",$_smarty_tpl->getVariable('settings')->value['profile_maxlength']),"[signature_length]",$_smarty_tpl->getVariable('signature_length')->value),"[signature_maxlength]",$_smarty_tpl->getVariable('settings')->value['signature_maxlength']),"[word]",$_smarty_tpl->getVariable('word')->value),"[not_accepted_word]",$_smarty_tpl->getVariable('not_accepted_word')->value),"[not_accepted_words]",$_smarty_tpl->getVariable('not_accepted_words')->value);?>
</li>
<?php endfor; endif; ?>
</ul>
<?php }?>
<?php if ($_smarty_tpl->getVariable('msg')->value){?><p class="ok"><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->getVariable('msg')->value);?>
</p><?php }?>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="user" />
<table class="normaltab" border="0" cellpadding="5" cellspacing="1">
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_user_name');?>
</strong></td>
<td class="d"><strong><?php echo $_smarty_tpl->getVariable('user_name')->value;?>
</strong></td>
</tr>
<?php if ($_smarty_tpl->getVariable('settings')->value['avatars']>0){?>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_avatar');?>
</strong></td>
<td class="d">
<div id="avatar_wrapper"><?php if ($_smarty_tpl->getVariable('avatar')->value){?><img src="<?php echo $_smarty_tpl->getVariable('avatar')->value['image'];?>
" alt="<?php echo $_smarty_tpl->getConfigVariable('edit_avatar_link_title');?>
" width="<?php echo $_smarty_tpl->getVariable('avatar')->value['width'];?>
" height="<?php echo $_smarty_tpl->getVariable('avatar')->value['height'];?>
" /><?php }?></div>
<span class="small">[ <a id="edit_avatar" href="index.php?mode=avatar"><?php echo $_smarty_tpl->getConfigVariable('edit_avatar_link');?>
</a> ]</span>
</td>
</tr>
<?php }?>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_user_pw');?>
</strong></td>
<td class="d"><span class="small">[ <a href="index.php?mode=user&amp;action=edit_pw"><?php echo $_smarty_tpl->getConfigVariable('edit_pw');?>
</a> ]</span></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_user_email');?>
</strong></td>
<td class="d"><!--<a href="mailto:<?php echo $_smarty_tpl->getVariable('user_email')->value;?>
">--><?php echo $_smarty_tpl->getVariable('user_email')->value;?>
<!--</a>--> &nbsp;<span class="small">[ <a href="index.php?mode=user&amp;action=edit_email"><?php echo $_smarty_tpl->getConfigVariable('edit_email');?>
</a> ]</span><br />
<span class="small"><input id="email_contact" type="checkbox" name="email_contact" value="1"<?php if ($_smarty_tpl->getVariable('email_contact')->value==1){?> checked="checked"<?php }?> /><label for="email_contact"><?php echo $_smarty_tpl->getConfigVariable('edit_user_email_contact');?>
</label></span></td>
</tr>
<tr>
<td class="c"><label for="user_hp"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_user_hp');?>
</strong></label></td>
<td class="d"><input id="user_hp" type="text" size="40" name="user_hp" value="<?php echo $_smarty_tpl->getVariable('user_hp')->value;?>
" maxlength="<?php echo $_smarty_tpl->getVariable('settings')->value['hp_maxlength'];?>
" /></td>
</tr>
<tr>
<td class="c"><label for="user_real_name"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_user_real_name');?>
</strong></label></td>
<td class="d"><input id="user_real_name" type="text" size="40" name="user_real_name" value="<?php echo $_smarty_tpl->getVariable('user_real_name')->value;?>
" maxlength="<?php echo $_smarty_tpl->getVariable('settings')->value['name_maxlength'];?>
" /></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_user_gender');?>
</strong></td>
<td class="d">
<input id="male" type="radio" name="user_gender" value="1"<?php if ($_smarty_tpl->getVariable('user_gender')->value=="1"){?> checked="checked"<?php }?> /><label for="male"><?php echo $_smarty_tpl->getConfigVariable('male');?>
</label><br />
<input id="female" type="radio" name="user_gender" value="2"<?php if ($_smarty_tpl->getVariable('user_gender')->value=="2"){?> checked="checked"<?php }?> /><label for="female"><?php echo $_smarty_tpl->getConfigVariable('female');?>
</label></td>
</tr>
<tr>
<td class="c"><label for="user_birthday"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_user_birthday');?>
</strong></label></td>
<td class="d"><input id="user_birthday" type="text" size="40" name="user_birthday" value="<?php echo $_smarty_tpl->getVariable('user_birthday')->value;?>
" /> <span class="small">(<?php echo $_smarty_tpl->getConfigVariable('birthday_format');?>
)</span></td>
</tr>
<tr>
<td class="c"><label for="user_location"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_user_location');?>
</strong></label></td>
<td class="d"><input id="user_location" type="text" size="40" name="user_location" value="<?php echo $_smarty_tpl->getVariable('user_location')->value;?>
" maxlength="<?php echo $_smarty_tpl->getVariable('settings')->value['location_maxlength'];?>
" /></td>
</tr>
<tr>
<td class="c"><label for="profile"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_user_profile');?>
</strong></label></td>
<td class="d"><textarea id="profile" cols="65" rows="12" name="profile"><?php echo $_smarty_tpl->getVariable('profile')->value;?>
</textarea></td>
</tr>
<tr>
<td class="c"><label for="signature"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_user_signature');?>
</strong></label></td>
<td class="d"><textarea id="signature" cols="65" rows="4" name="signature"><?php echo $_smarty_tpl->getVariable('signature')->value;?>
</textarea></td>
</tr>
<?php if ($_smarty_tpl->getVariable('categories')->value){?>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_user_cat_selection');?>
</strong></td>
<td class="d">
<ul class="checkboxlist">
<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('categories')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['key']->value!=0){?><li><input id="category_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" type="checkbox" name="category_selection[]" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if (isset($_smarty_tpl->getVariable('category_selection',null,true,false)->value)&&in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->getVariable('category_selection')->value)){?> checked="checked"<?php }?> /><label for="category_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</label></li><?php }?>
<?php }} ?>
</ul>
</td>
</tr>
<?php }?>

<?php if ($_smarty_tpl->getVariable('languages')->value){?>
<tr>
<td class="c"><strong><label for="user_language"><?php echo $_smarty_tpl->getConfigVariable('edit_user_language');?>
</label></strong></td>
<td class="d">
<select id="user_language" name="user_language" size="1">
<option value=""<?php if ($_smarty_tpl->getVariable('user_language')->value==''){?> selected="selected"<?php }?>><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('edit_user_default_language'),"[default_language]",$_smarty_tpl->getVariable('default_language')->value);?>
</option>
<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('languages')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['l']->value['identifier'];?>
"<?php if ($_smarty_tpl->tpl_vars['l']->value['identifier']==$_smarty_tpl->getVariable('user_language')->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['l']->value['title'];?>
</option>
<?php }} ?>
</select>
</td>
</tr>
<?php }?>

<tr>
<td class="c"><strong><?php if ($_smarty_tpl->getVariable('time_zones')->value){?><label for="user_time_zone"><?php echo $_smarty_tpl->getConfigVariable('edit_user_time_zone');?>
</label><?php }else{ ?><?php echo $_smarty_tpl->getConfigVariable('edit_user_time_zone');?>
<?php }?></strong></td>
<td class="d">
<?php if ($_smarty_tpl->getVariable('time_zones')->value){?>
<p>
<select id="user_time_zone" name="user_time_zone" size="1">
<option value=""<?php if ($_smarty_tpl->getVariable('user_time_zone')->value==''){?> selected="selected"<?php }?>><?php if ($_smarty_tpl->getVariable('default_time_zone')->value){?><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('edit_user_default_time_zone'),"[default_time_zone]",$_smarty_tpl->getVariable('default_time_zone')->value);?>
<?php }else{ ?><?php echo $_smarty_tpl->getConfigVariable('edit_user_default_time_zone_svr');?>
<?php }?></option>
<?php  $_smarty_tpl->tpl_vars['tz'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('time_zones')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tz']->key => $_smarty_tpl->tpl_vars['tz']->value){
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['tz']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['tz']->value==$_smarty_tpl->getVariable('user_time_zone')->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tz']->value;?>
</option>
<?php }} ?>
</select>
</p>
<?php }?>
<p><span class="small"><label for="user_time_difference"><?php echo $_smarty_tpl->getConfigVariable('edit_user_time_difference');?>
</label></span><br /><input id="user_time_difference" type="text" size="6" name="user_time_difference" value="<?php echo $_smarty_tpl->getVariable('user_time_difference')->value;?>
" maxlength="6" /></p>
</td>
</tr>

<?php if ($_smarty_tpl->getVariable('themes')->value){?>
<tr>
<td class="c"><strong><label for="user_theme"><?php echo $_smarty_tpl->getConfigVariable('edit_user_theme');?>
</label></strong></td>
<td class="d">
<select id="user_theme" name="user_theme" size="1">
<option value=""<?php if ($_smarty_tpl->getVariable('user_theme')->value==''){?> selected="selected"<?php }?>><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('edit_user_default_theme'),"[default_theme]",$_smarty_tpl->getVariable('default_theme')->value);?>
</option>
<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('themes')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['identifier'];?>
"<?php if ($_smarty_tpl->tpl_vars['t']->value['identifier']==$_smarty_tpl->getVariable('user_theme')->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value['title'];?>
</option>
<?php }} ?>
</select>
</td>
</tr>
<?php }?>

<?php if ($_smarty_tpl->getVariable('settings')->value['autologin']==1){?>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_user_auto_login');?>
</strong></td>
<td class="d"><input id="auto_login" type="checkbox" name="auto_login" value="1"<?php if ($_smarty_tpl->getVariable('auto_login')->value==1){?> checked="checked"<?php }?> /><label for="auto_login"><?php echo $_smarty_tpl->getConfigVariable('enable_auto_login');?>
</label></td>
</tr>
<?php }?>

<?php if ($_smarty_tpl->getVariable('mod')->value||$_smarty_tpl->getVariable('admin')->value){?>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->getConfigVariable('edit_user_notification');?>
</strong></td>
<td class="d"><input id="new_posting_notification" type="checkbox" name="new_posting_notification" value="1"<?php if ($_smarty_tpl->getVariable('new_posting_notification')->value=="1"){?> checked="checked"<?php }?> /><label for="new_posting_notification"><?php echo $_smarty_tpl->getConfigVariable('admin_mod_notif_posting');?>
</label><br />
<input id="new_user_notification" type="checkbox" name="new_user_notification" value="1"<?php if ($_smarty_tpl->getVariable('new_user_notification')->value=="1"){?> checked="checked"<?php }?> /><label for="new_user_notification"><?php echo $_smarty_tpl->getConfigVariable('admin_mod_notif_register');?>
</label></td>
</tr>
<?php }?>
<tr>
<td class="c">&nbsp;</td>
<td class="d"><input type="submit" name="edit_user_submit" value="<?php echo $_smarty_tpl->getConfigVariable('userdata_submit_button');?>
" /></td>
</tr>
</table>
</div>
</form>
