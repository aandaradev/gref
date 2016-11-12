<?php /* Smarty version Smarty-3.0.8, created on 2012-06-16 16:08:57
         compiled from "themes/default/subtemplates/contact.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19903444414fdceee10819d0-68681958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d1db45b8f28d87ddf6801ee12bc74f3eef5e0f9' => 
    array (
      0 => 'themes/default/subtemplates/contact.inc.tpl',
      1 => 1265303086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19903444414fdceee10819d0-68681958',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_replace')) include '/home/nightshadow/www/gref/forum/modules/smarty/plugins/modifier.replace.php';
?><?php  $_config = new Smarty_Internal_Config($_smarty_tpl->getVariable('language_file')->value, $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("contact", 'local'); ?>
<?php if ($_smarty_tpl->getVariable('captcha')->value){?><?php  $_config = new Smarty_Internal_Config($_smarty_tpl->getVariable('language_file')->value, $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("captcha", 'local'); ?><?php }?>
<?php if ($_smarty_tpl->getVariable('error_message')->value){?>
<p class="caution"><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->getVariable('error_message')->value);?>
</p>
<?php }elseif($_smarty_tpl->getVariable('sent')->value){?>
<p class="ok"><?php echo $_smarty_tpl->getConfigVariable('email_sent');?>
</p>
<?php }else{ ?>
<h1><?php if ($_smarty_tpl->getVariable('recipient_name')->value){?><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('contact_user_hl'),"[recipient_name]",($_smarty_tpl->getVariable('recipient_name')->value));?>
<?php }else{ ?><?php echo $_smarty_tpl->getConfigVariable('contact_hl');?>
<?php }?></h1>
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
<li><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable($_smarty_tpl->getVariable('error')->value),"[text_length]",$_smarty_tpl->getVariable('text_length')->value),"[text_maxlength]",$_smarty_tpl->getVariable('settings')->value['email_text_maxlength']),"[not_accepted_word]",$_smarty_tpl->getVariable('not_accepted_word')->value),"[not_accepted_words]",$_smarty_tpl->getVariable('not_accepted_words')->value);?>
</li>
<?php endfor; endif; ?>
</ul>
<?php }?>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
">
<div>
<input type="hidden" name="mode" value="contact" />
<?php if ($_smarty_tpl->getVariable('id')->value){?><input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('id')->value;?>
" /><?php }?>
<?php if ($_smarty_tpl->getVariable('recipient_user_id')->value){?><input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->getVariable('recipient_user_id')->value;?>
" /><?php }?>
<?php if ($_smarty_tpl->getVariable('session')->value){?><input type="hidden" name="<?php echo $_smarty_tpl->getVariable('session')->value['name'];?>
" value="<?php echo $_smarty_tpl->getVariable('session')->value['id'];?>
" /><?php }?>
<p><label for="sender_email"><?php echo $_smarty_tpl->getConfigVariable('sender_address_caption');?>
</label><br />
<input id="sender_email" type="text" name="sender_email" value="<?php echo $_smarty_tpl->getVariable('sender_email')->value;?>
" size="50" /></p>
<p><label for="subject"><?php echo $_smarty_tpl->getConfigVariable('subject_caption');?>
</label><br />
<input id="subject" type="text" name="subject" value="<?php echo (($tmp = @$_smarty_tpl->getVariable('subject')->value)===null||$tmp==='' ? '' : $tmp);?>
" size="50" maxlength="<?php echo $_smarty_tpl->getVariable('settings')->value['email_subject_maxlength'];?>
" /></p>
<p><label for="message"><?php echo $_smarty_tpl->getConfigVariable('message_caption');?>
</label><br />
<textarea id="message" name="text" rows="20" cols="80"><?php echo (($tmp = @$_smarty_tpl->getVariable('text')->value)===null||$tmp==='' ? '' : $tmp);?>
</textarea></p>
<?php if ($_smarty_tpl->getVariable('captcha')->value){?>
<?php if ($_smarty_tpl->getVariable('captcha')->value['type']==2){?>
<p><strong><?php echo $_smarty_tpl->getConfigVariable('captcha_marking');?>
</strong><br />
<img class="captcha" src="modules/captcha/captcha_image.php?<?php echo $_smarty_tpl->getVariable('session')->value['name'];?>
=<?php echo $_smarty_tpl->getVariable('session')->value['id'];?>
" alt="<?php echo $_smarty_tpl->getConfigVariable('captcha_image_alt');?>
" width="180" height="40" /><br />
<label for="captcha_code"><?php echo $_smarty_tpl->getConfigVariable('captcha_expl_image');?>
</label> <input id="captcha_code" type="text" name="captcha_code" value="" size="10" /></p>
<?php }else{ ?>
<p><strong><?php echo $_smarty_tpl->getConfigVariable('captcha_marking');?>
</strong><br />
<label for="captcha_code"><?php echo $_smarty_tpl->getConfigVariable('captcha_expl_math');?>
 <?php echo $_smarty_tpl->getVariable('captcha')->value['number_1'];?>
 + <?php echo $_smarty_tpl->getVariable('captcha')->value['number_2'];?>
 = </label><input id="captcha_code" type="text" name="captcha_code" value="" size="5" /></p>
<?php }?>
<?php }?>
<p><input type="submit" name="message_submit" value="<?php echo $_smarty_tpl->getConfigVariable('message_submit_caption');?>
" size="50" onclick="document.getElementById('throbber-submit').style.display = 'inline'" /> <img id="throbber-submit" style="display:none;" src="<?php echo $_smarty_tpl->getVariable('THEMES_DIR')->value;?>
/<?php echo $_smarty_tpl->getVariable('theme')->value;?>
/images/throbber_submit.gif" alt="" width="16" height="16" /></p>
</div>
</form>
<?php }?>
