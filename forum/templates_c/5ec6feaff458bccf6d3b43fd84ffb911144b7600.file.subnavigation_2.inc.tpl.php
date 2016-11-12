<?php /* Smarty version Smarty-3.0.8, created on 2012-06-16 16:07:28
         compiled from "themes/default/subtemplates/subnavigation_2.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2096660194fdcee88609138-03490234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ec6feaff458bccf6d3b43fd84ffb911144b7600' => 
    array (
      0 => 'themes/default/subtemplates/subnavigation_2.inc.tpl',
      1 => 1273222535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2096660194fdcee88609138-03490234',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('mode')->value=='index'){?>
<ul id="subnavmenu"><li><a class="refresh" href="index.php?refresh=1&amp;category=<?php echo $_smarty_tpl->getVariable('category')->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('refresh_linktitle');?>
" rel="nofollow"><?php echo $_smarty_tpl->getConfigVariable('refresh_link');?>
</a></li><li><?php if ($_smarty_tpl->getVariable('thread_order')->value==0){?><a class="order-1" href="index.php?mode=index&amp;thread_order=1" title="<?php echo $_smarty_tpl->getConfigVariable('order_link_title_1');?>
" rel="nofollow"><?php echo $_smarty_tpl->getConfigVariable('order_link');?>
</a><?php }else{ ?><a class="order-2" href="index.php?mode=index&amp;thread_order=0" title="<?php echo $_smarty_tpl->getConfigVariable('order_link_title_2');?>
" rel="nofollow"><?php echo $_smarty_tpl->getConfigVariable('order_link');?>
</a><?php }?></li><li><?php if ($_smarty_tpl->getVariable('usersettings')->value['fold_threads']==0){?><a class="fold-1" href="index.php?fold_threads=true" title="<?php echo $_smarty_tpl->getConfigVariable('fold_threads_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('fold_threads');?>
</a><?php }else{ ?><a class="fold-2" href="index.php?fold_threads=true" title="<?php echo $_smarty_tpl->getConfigVariable('expand_threads_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('expand_threads');?>
</a><?php }?></li><li><?php if ($_smarty_tpl->getVariable('usersettings')->value['user_view']==0){?><a class="tableview" href="index.php?toggle_view=true" title="<?php echo $_smarty_tpl->getConfigVariable('table_view_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('table_view');?>
</a><?php }else{ ?><a class="threadview" href="index.php?toggle_view=true" title="<?php echo $_smarty_tpl->getConfigVariable('thread_view_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('thread_view');?>
</a><?php }?></li></ul>
<?php }elseif($_smarty_tpl->getVariable('mode')->value=='entry'){?>
<ul id="subnavmenu"><li><a class="openthread" href="index.php?mode=thread&amp;id=<?php echo $_smarty_tpl->getVariable('tid')->value;?>
#p<?php echo $_smarty_tpl->getVariable('id')->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('open_in_thread_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('open_in_thread_link');?>
</a></li></ul>
<?php }elseif($_smarty_tpl->getVariable('mode')->value=='thread'){?>
<ul id="subnavmenu"><li><?php if ($_smarty_tpl->getVariable('usersettings')->value['thread_display']==0){?><a class="linear" href="index.php?mode=thread&amp;id=<?php echo $_smarty_tpl->getVariable('id')->value;?>
&amp;toggle_thread_display=true" title="<?php echo $_smarty_tpl->getConfigVariable('thread_linear_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('thread_linear');?>
</a><?php }else{ ?><a class="hierarchic" href="index.php?mode=thread&amp;id=<?php echo $_smarty_tpl->getVariable('id')->value;?>
&amp;toggle_thread_display=true" title="<?php echo $_smarty_tpl->getConfigVariable('thread_hierarchical_linktitle');?>
"><?php echo $_smarty_tpl->getConfigVariable('thread_hierarchical');?>
</a><?php }?></li>
</ul>
<?php }?>
<?php if ($_smarty_tpl->getVariable('categories')->value&&$_smarty_tpl->getVariable('mode')->value=='index'){?>
<form action="index.php" method="get" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
"><div>
<input type="hidden" name="mode" value="<?php echo $_smarty_tpl->getVariable('mode')->value;?>
" />
&nbsp;<select class="small" size="1" name="category" title="<?php echo $_smarty_tpl->getConfigVariable('category_title');?>
">
<option value="0"<?php if ($_smarty_tpl->getVariable('category')->value==0){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getConfigVariable('all_categories');?>
</option>
<?php if ($_smarty_tpl->getVariable('category_selection')->value){?><option value="-1"<?php if ($_smarty_tpl->getVariable('category')->value==-1){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getConfigVariable('my_category_selection');?>
</option><?php }?>
<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('categories')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['key']->value!=0){?><option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->getVariable('category')->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option><?php }?>
<?php }} ?>
</select><noscript><div class="inline"><input class="small" type="submit" value="&raquo;" title="<?php echo $_smarty_tpl->getConfigVariable('go');?>
" /></div></noscript></div></form><?php }?>
<?php if ($_smarty_tpl->getVariable('pagination_top')->value){?>
&nbsp; <?php if ($_smarty_tpl->getVariable('pagination_top')->value['previous']){?><a href="index.php?mode=<?php echo $_smarty_tpl->getVariable('mode')->value;?>
&amp;page=<?php echo $_smarty_tpl->getVariable('pagination_top')->value['previous'];?>
<?php if ($_smarty_tpl->getVariable('category')->value){?>&amp;category=<?php echo $_smarty_tpl->getVariable('category')->value;?>
<?php }?>"><img class="previous" src="<?php echo $_smarty_tpl->getVariable('THEMES_DIR')->value;?>
/<?php echo $_smarty_tpl->getVariable('theme')->value;?>
/images/plain.png" alt="[&laquo;]" title="<?php echo $_smarty_tpl->getConfigVariable('previous_page_link_title');?>
" width="6" height="11" /></a><?php }?>
<form action="index.php" method="get"><div class="inline">
<input type="hidden" name="mode" value="<?php echo $_smarty_tpl->getVariable('mode')->value;?>
" />
<?php if ($_smarty_tpl->getVariable('order')->value){?><input type="hidden" name="order" value="<?php echo $_smarty_tpl->getVariable('order')->value;?>
" /><?php }?>
<?php if ($_smarty_tpl->getVariable('category')->value){?><input type="hidden" name="category" value="<?php echo $_smarty_tpl->getVariable('category')->value;?>
" /><?php }?>
<select class="small" size="1" name="page" title="<?php echo $_smarty_tpl->getConfigVariable('browse_page_title');?>
">
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pagination_top')->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
<?php if ($_smarty_tpl->tpl_vars['item']->value!=0){?><option value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value==$_smarty_tpl->getVariable('page')->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option><?php }?>
<?php }} ?>
</select><noscript><div class="inline"><input class="small" type="submit" value="&raquo;" title="<?php echo $_smarty_tpl->getConfigVariable('go');?>
" /></div></noscript>
</div></form>
<?php if ($_smarty_tpl->getVariable('pagination_top')->value['next']){?><a href="index.php?mode=<?php echo $_smarty_tpl->getVariable('mode')->value;?>
&amp;page=<?php echo $_smarty_tpl->getVariable('pagination_top')->value['next'];?>
<?php if ($_smarty_tpl->getVariable('category')->value){?>&amp;category=<?php echo $_smarty_tpl->getVariable('category')->value;?>
<?php }?>"><img class="next" src="<?php echo $_smarty_tpl->getVariable('THEMES_DIR')->value;?>
/<?php echo $_smarty_tpl->getVariable('theme')->value;?>
/images/plain.png" alt="[&raquo;]" title="<?php echo $_smarty_tpl->getConfigVariable('next_page_link_title');?>
" width="6" height="11" /></a><?php }?>
<?php }?>
