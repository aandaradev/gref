<?php /* Smarty version Smarty-3.0.8, created on 2012-06-16 16:07:28
         compiled from "themes/default/subtemplates/subnavigation_1.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3292917414fdcee881ac498-46246167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa9dd93583029e05bb5e87b449766d1490319500' => 
    array (
      0 => 'themes/default/subtemplates/subnavigation_1.inc.tpl',
      1 => 1299534416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3292917414fdcee881ac498-46246167',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_replace')) include '/home/nightshadow/www/gref/forum/modules/smarty/plugins/modifier.replace.php';
?><?php if ($_smarty_tpl->getVariable('subnav_location')->value){?>
<p class="subnav">
<?php if ($_smarty_tpl->getVariable('breadcrumbs')->value){?>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['name'] = 'nr';
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('breadcrumbs')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['nr']['total']);
?>
<?php $_smarty_tpl->tpl_vars["breadcrumb_linkname"] = new Smarty_variable($_smarty_tpl->getVariable('breadcrumbs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['nr']['index']]['linkname'], null, null);?>
<a href="<?php echo $_smarty_tpl->getVariable('breadcrumbs')->value[$_smarty_tpl->getVariable('smarty')->value['section']['nr']['index']]['link'];?>
"><?php echo $_smarty_tpl->getConfigVariable($_smarty_tpl->getVariable('breadcrumb_linkname')->value);?>
</a> &raquo;
<?php endfor; endif; ?>
<?php }?>
<?php echo $_smarty_tpl->getVariable('subnav_location')->value;?>
</p>
<?php }elseif($_smarty_tpl->getVariable('subnav_link')->value){?>
<?php $_smarty_tpl->tpl_vars["link_name"] = new Smarty_variable($_smarty_tpl->getVariable('subnav_link')->value['name'], null, null);?>
<?php if ($_smarty_tpl->getVariable('subnav_link')->value['title']){?><?php $_smarty_tpl->tpl_vars["link_title"] = new Smarty_variable($_smarty_tpl->getVariable('subnav_link')->value['title'], null, null);?><?php }?>
<a class="stronglink" href="index.php<?php if ($_smarty_tpl->getVariable('subnav_link')->value['id']&&!$_smarty_tpl->getVariable('subnav_link')->value['mode']){?>?id=<?php echo $_smarty_tpl->getVariable('subnav_link')->value['id'];?>
<?php }else{ ?>?mode=<?php echo $_smarty_tpl->getVariable('subnav_link')->value['mode'];?>
<?php if ($_smarty_tpl->getVariable('subnav_link')->value['back']){?>&amp;back=<?php echo $_smarty_tpl->getVariable('subnav_link')->value['back'];?>
<?php }?><?php if ($_smarty_tpl->getVariable('subnav_link')->value['id']){?>&amp;id=<?php echo $_smarty_tpl->getVariable('subnav_link')->value['id'];?>
<?php }?><?php }?>" title="<?php echo (($tmp = @smarty_modifier_replace($_smarty_tpl->getConfigVariable($_smarty_tpl->getVariable('link_title')->value),"[name]",$_smarty_tpl->getVariable('name_repl_subnav')->value))===null||$tmp==='' ? '' : $tmp);?>
"><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable($_smarty_tpl->getVariable('link_name')->value),"[name]",$_smarty_tpl->getVariable('name_repl_subnav')->value);?>
</a>
<?php }else{ ?>
&nbsp;
<?php }?>
