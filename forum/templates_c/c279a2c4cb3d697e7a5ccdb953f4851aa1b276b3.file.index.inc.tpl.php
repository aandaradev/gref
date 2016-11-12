<?php /* Smarty version Smarty-3.0.8, created on 2012-06-16 16:07:28
         compiled from "themes/default/subtemplates/index.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1797689334fdcee88ab9987-21638405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c279a2c4cb3d697e7a5ccdb953f4851aa1b276b3' => 
    array (
      0 => 'themes/default/subtemplates/index.inc.tpl',
      1 => 1299593044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1797689334fdcee88ab9987-21638405',
  'function' => 
  array (
    'tree' => 
    array (
      'parameter' => 
      array (
        'level' => 0,
      ),
      'compiled' => '',
    ),
  ),
  'has_nocache_code' => 0,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_replace')) include '/home/nightshadow/www/gref/forum/modules/smarty/plugins/modifier.replace.php';
?><?php if ($_smarty_tpl->getVariable('tag_cloud')->value||$_smarty_tpl->getVariable('latest_postings')->value||$_smarty_tpl->getVariable('admin')->value||$_smarty_tpl->getVariable('mod')->value){?>
<div id="sidebar">
<a href="index.php?toggle_sidebar=true"><img id="sidebartoggle" class="<?php if ($_smarty_tpl->getVariable('usersettings')->value['sidebar']==0){?>show-sidebar<?php }else{ ?>hide-sidebar<?php }?>" src="<?php echo $_smarty_tpl->getVariable('THEMES_DIR')->value;?>
/<?php echo $_smarty_tpl->getVariable('theme')->value;?>
/images/plain.png" title="<?php echo $_smarty_tpl->getConfigVariable('toggle_sidebar');?>
" alt="[+/-]" width="9" height="9" /></a>
<h3 class="sidebar"><a href="index.php?toggle_sidebar=true" title="<?php echo $_smarty_tpl->getConfigVariable('toggle_sidebar');?>
"><?php echo $_smarty_tpl->getConfigVariable('sidebar');?>
</a></h3>
<div id="sidebarcontent"<?php if ($_smarty_tpl->getVariable('usersettings')->value['sidebar']==0){?> style="display:none;"<?php }?>>
<?php if ($_smarty_tpl->getVariable('latest_postings')->value){?>
<div id="latest-postings">
<h3><?php echo $_smarty_tpl->getConfigVariable('latest_postings_hl');?>
</h3>
<ul id="latest-postings-container">
<?php  $_smarty_tpl->tpl_vars['posting'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('latest_postings')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['posting']->key => $_smarty_tpl->tpl_vars['posting']->value){
?><li><a href="index.php?id=<?php echo $_smarty_tpl->tpl_vars['posting']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['posting']->value['name'];?>
, <?php echo $_smarty_tpl->tpl_vars['posting']->value['formated_time'];?>
<?php if ($_smarty_tpl->tpl_vars['posting']->value['category_name']){?> (<?php echo $_smarty_tpl->tpl_vars['posting']->value['category_name'];?>
)<?php }?>"><span<?php if ($_smarty_tpl->getVariable('read')->value&&in_array($_smarty_tpl->tpl_vars['posting']->value['id'],$_smarty_tpl->getVariable('read')->value)){?> class="read"<?php }?>><?php if ($_smarty_tpl->tpl_vars['posting']->value['pid']==0){?><strong><?php echo $_smarty_tpl->tpl_vars['posting']->value['subject'];?>
</strong><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['posting']->value['subject'];?>
<?php }?></span><br />
<?php if ($_smarty_tpl->tpl_vars['posting']->value['ago']['days']>1){?><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('posting_several_days_ago'),"[days]",$_smarty_tpl->tpl_vars['posting']->value['ago']['days_rounded']);?>
<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['posting']->value['ago']['days']==0&&$_smarty_tpl->tpl_vars['posting']->value['ago']['hours']==0){?><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('posting_minutes_ago'),"[minutes]",$_smarty_tpl->tpl_vars['posting']->value['ago']['minutes']);?>
<?php }elseif($_smarty_tpl->tpl_vars['posting']->value['ago']['days']==0&&$_smarty_tpl->tpl_vars['posting']->value['ago']['hours']!=0){?><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('posting_hours_ago'),"[hours]",$_smarty_tpl->tpl_vars['posting']->value['ago']['hours']),"[minutes]",$_smarty_tpl->tpl_vars['posting']->value['ago']['minutes']);?>
<?php }else{ ?><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('posting_one_day_ago'),"[hours]",$_smarty_tpl->tpl_vars['posting']->value['ago']['hours']),"[minutes]",$_smarty_tpl->tpl_vars['posting']->value['ago']['minutes']);?>
<?php }?><?php }?></a></li><?php }} ?>
</ul>
</div>
<?php }?>
<?php if ($_smarty_tpl->getVariable('tag_cloud')->value){?>
<div id="tagcloud">
<h3><?php echo $_smarty_tpl->getConfigVariable('tag_cloud_hl');?>
</h3>
<p id="tagcloud-container"><?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('tag_cloud')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
?>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['name'] = 'strong_start';
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['start'] = (int)0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tag']->value['frequency']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_start']['total']);
?><strong><?php endfor; endif; ?><a href="index.php?mode=search&amp;search=<?php echo $_smarty_tpl->tpl_vars['tag']->value['escaped'];?>
&amp;method=tags"><?php echo $_smarty_tpl->tpl_vars['tag']->value['tag'];?>
</a> <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['name'] = 'strong_end';
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['start'] = (int)0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tag']->value['frequency']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['strong_end']['total']);
?></strong><?php endfor; endif; ?>
<?php }} ?></p>
</div>
<?php }?>
<?php if ($_smarty_tpl->getVariable('admin')->value||$_smarty_tpl->getVariable('mod')->value){?>
<div id="modmenu">
<h3><?php echo $_smarty_tpl->getConfigVariable('options');?>
</h3>
<ul id="mod-options">
<li><a href="index.php?mode=posting&amp;delete_marked=true" class="delete-marked"><?php echo $_smarty_tpl->getConfigVariable('delete_marked_link');?>
</a></li>
<li><a href="index.php?mode=posting&amp;manage_postings=true" class="manage"><?php echo $_smarty_tpl->getConfigVariable('manage_postings_link');?>
</a></li>
<?php if ($_smarty_tpl->getVariable('show_spam_link')->value){?><li><a href="index.php?show_spam=true" class="report"><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('show_spam_link'),"[number]",$_smarty_tpl->getVariable('total_spam')->value);?>
</a></li><?php }?>
<?php if ($_smarty_tpl->getVariable('hide_spam_link')->value){?><li><a href="index.php?show_spam=true" class="report"><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('hide_spam_link'),"[number]",$_smarty_tpl->getVariable('total_spam')->value);?>
</a></li><?php }?>
<?php if ($_smarty_tpl->getVariable('delete_spam_link')->value){?><li><a href="index.php?mode=posting&amp;delete_spam=true" class="delete-spam"><?php echo $_smarty_tpl->getConfigVariable('delete_spam_link');?>
</a></li><?php }?>
</ul>
</div><?php }?>
</div>
</div>
<?php }?>

<?php if ($_smarty_tpl->getVariable('threads')->value){?>
<?php  $_smarty_tpl->tpl_vars['thread'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('threads')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['thread']->key => $_smarty_tpl->tpl_vars['thread']->value){
?>
<ul id="thread-<?php echo $_smarty_tpl->tpl_vars['thread']->value;?>
" class="thread <?php if ($_smarty_tpl->getVariable('fold_threads')->value==1){?>folded<?php }else{ ?>expanded<?php }?>">
<?php if (!is_callable('smarty_modifier_replace')) include '/home/nightshadow/www/gref/forum/modules/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_escape')) include '/home/nightshadow/www/gref/forum/modules/smarty/plugins/modifier.escape.php';
?><?php if (!function_exists('smarty_template_function_tree')) {
    function smarty_template_function_tree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->template_functions['tree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<li><a class="<?php if ($_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['pid']==0&&$_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['new']){?><?php if ($_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['sticky']==1){?>threadnew-sticky<?php }else{ ?>threadnew<?php }?><?php }elseif($_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['pid']==0){?><?php if ($_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['sticky']==1){?>thread-sticky<?php }else{ ?>thread<?php }?><?php }elseif($_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['pid']!=0&&$_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['new']){?>replynew<?php }else{ ?>reply<?php }?><?php if ($_smarty_tpl->getVariable('read')->value&&in_array($_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['id'],$_smarty_tpl->getVariable('read')->value)){?> read<?php }?>" href="index.php?id=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['id'];?>
"<?php if ($_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['spam']==1){?> title="<?php echo $_smarty_tpl->getConfigVariable('spam');?>
"<?php }?>><?php if ($_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['spam']==1){?><span class="spam"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['subject'];?>
</span><?php }else{ ?><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['subject'];?>
<?php }?></a><?php if ($_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['no_text']){?> <img class="no-text" src="<?php echo $_smarty_tpl->getVariable('THEMES_DIR')->value;?>
/<?php echo $_smarty_tpl->getVariable('theme')->value;?>
/images/no_text.png" title="<?php echo $_smarty_tpl->getConfigVariable('no_text_title');?>
" alt="<?php echo $_smarty_tpl->getConfigVariable('no_text_alt');?>
" width="11" height="9" /><?php }?> - <strong><?php if ($_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['user_type']==2){?><span class="admin" title="<?php echo $_smarty_tpl->getConfigVariable('administrator_title');?>
"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['name'];?>
</span><?php }elseif($_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['user_type']==1){?><span class="mod" title="<?php echo $_smarty_tpl->getConfigVariable('moderator_title');?>
"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['name'];?>
</span><?php }else{ ?><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['name'];?>
<?php }?></strong>, <span id="p<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['id'];?>
" class="tail"><?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['formated_time'];?>
<?php if ($_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['pid']==0){?> <a href="index.php?mode=thread&amp;id=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['id'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('open_whole_thread');?>
"><img src="<?php echo $_smarty_tpl->getVariable('THEMES_DIR')->value;?>
/<?php echo $_smarty_tpl->getVariable('theme')->value;?>
/images/complete_thread.png" title="<?php echo $_smarty_tpl->getConfigVariable('open_whole_thread');?>
" alt="[*]" width="11" height="11" /></a><?php }?><?php if ($_smarty_tpl->getVariable('admin')->value||$_smarty_tpl->getVariable('mod')->value){?> <a id="marklink_<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['id'];?>
" href="index.php?mode=posting&amp;mark=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['id'];?>
" title="<?php echo $_smarty_tpl->getConfigVariable('mark_linktitle');?>
"><?php if ($_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['marked']==0){?><img id="markimg_<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['id'];?>
" src="<?php echo $_smarty_tpl->getVariable('THEMES_DIR')->value;?>
/<?php echo $_smarty_tpl->getVariable('theme')->value;?>
/images/unmarked.png" title="<?php echo $_smarty_tpl->getConfigVariable('mark_linktitle');?>
" alt="[○]" width="11" height="11" /><?php }else{ ?><img id="markimg_<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['id'];?>
" src="<?php echo $_smarty_tpl->getVariable('THEMES_DIR')->value;?>
/<?php echo $_smarty_tpl->getVariable('theme')->value;?>
/images/marked.png" title="<?php echo $_smarty_tpl->getConfigVariable('unmark_linktitle');?>
" alt="[●]" width="11" height="11" title="<?php echo $_smarty_tpl->getConfigVariable('unmark_linktitle');?>
" /><?php }?></a> <a href="index.php?mode=posting&amp;delete_posting=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['id'];?>
&amp;back=index" title="<?php echo $_smarty_tpl->getConfigVariable('delete_posting_title');?>
"><img src="<?php echo $_smarty_tpl->getVariable('THEMES_DIR')->value;?>
/<?php echo $_smarty_tpl->getVariable('theme')->value;?>
/images/delete_posting.png" title="<?php echo $_smarty_tpl->getConfigVariable('delete_posting_title');?>
" alt="[x]" width="9" height="9" /></a><?php }?>
<?php if ($_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['category_name']&&$_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['pid']==0&&$_smarty_tpl->getVariable('category')->value<=0){?> <a href="index.php?mode=index&amp;category=<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['category'];?>
" title="<?php echo smarty_modifier_escape(smarty_modifier_replace($_smarty_tpl->getConfigVariable('change_category_link'),"[category]",$_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['category_name']),"html");?>
"><span class="category">(<?php echo $_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['category_name'];?>
)</span></a><?php }?><?php if ($_smarty_tpl->getVariable('fold_threads')->value==1&&$_smarty_tpl->getVariable('data')->value[$_smarty_tpl->getVariable('element')->value]['pid']==0&&$_smarty_tpl->getVariable('replies')->value[$_smarty_tpl->getVariable('thread')->value]>0){?> <span class="replies" title="<?php if ($_smarty_tpl->getVariable('replies')->value[$_smarty_tpl->getVariable('thread')->value]==1){?><?php echo $_smarty_tpl->getConfigVariable('one_reply');?>
<?php }else{ ?><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('several_replies'),"[replies]",$_smarty_tpl->getVariable('replies')->value[$_smarty_tpl->getVariable('thread')->value]);?>
<?php }?>">(<?php echo $_smarty_tpl->getVariable('replies')->value[$_smarty_tpl->getVariable('thread')->value];?>
)</span><?php }?></span>
<?php if (is_array($_smarty_tpl->getVariable('child_array')->value[$_smarty_tpl->getVariable('element')->value])){?>
<ul<?php if ($_smarty_tpl->getVariable('fold_threads')->value==1){?> style="display:none;"<?php }?> class="<?php if ($_smarty_tpl->getVariable('level')->value<$_smarty_tpl->getVariable('settings')->value['deep_reply']){?>reply<?php }elseif($_smarty_tpl->getVariable('level')->value>=$_smarty_tpl->getVariable('settings')->value['deep_reply']&&$_smarty_tpl->getVariable('level')->value<$_smarty_tpl->getVariable('settings')->value['very_deep_reply']){?>deep-reply<?php }else{ ?>very-deep-reply<?php }?>"><?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('child_array')->value[$_smarty_tpl->getVariable('element')->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value){
?><?php smarty_template_function_tree($_smarty_tpl,array('element'=>$_smarty_tpl->tpl_vars['child']->value,'level'=>$_smarty_tpl->getVariable('level')->value+1));?>
<?php }} ?></ul><?php }?></li><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>

<?php smarty_template_function_tree($_smarty_tpl,array('element'=>$_smarty_tpl->tpl_vars['thread']->value));?>

</ul>
<?php }} ?>
<?php }else{ ?>
<p><?php if ($_smarty_tpl->getVariable('category')->value!=0){?><?php echo $_smarty_tpl->getConfigVariable('no_messages_in_category');?>
<?php }else{ ?><?php echo $_smarty_tpl->getConfigVariable('no_messages');?>
<?php }?></p>
<?php }?>

<?php if ($_smarty_tpl->getVariable('pagination')->value){?>
<ul class="pagination pagination-index">
<?php if ($_smarty_tpl->getVariable('pagination')->value['previous']){?><li><a href="index.php?mode=<?php echo $_smarty_tpl->getVariable('mode')->value;?>
&amp;page=<?php echo $_smarty_tpl->getVariable('pagination')->value['previous'];?>
<?php if ($_smarty_tpl->getVariable('category')->value){?>&amp;category=<?php echo $_smarty_tpl->getVariable('category')->value;?>
<?php }?>" title="<?php echo $_smarty_tpl->getConfigVariable('previous_page_link_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('previous_page_link');?>
</a></li><?php }?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pagination')->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
<?php if ($_smarty_tpl->tpl_vars['item']->value==0){?><li>&hellip;</li><?php }elseif($_smarty_tpl->tpl_vars['item']->value==$_smarty_tpl->getVariable('pagination')->value['current']){?><li><span class="current"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</span></li><?php }else{ ?><li><a href="index.php?mode=<?php echo $_smarty_tpl->getVariable('mode')->value;?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<?php if ($_smarty_tpl->getVariable('category')->value){?>&amp;category=<?php echo $_smarty_tpl->getVariable('category')->value;?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a></li><?php }?>
<?php }} ?>
<?php if ($_smarty_tpl->getVariable('pagination')->value['next']){?><li><a href="index.php?mode=<?php echo $_smarty_tpl->getVariable('mode')->value;?>
&amp;page=<?php echo $_smarty_tpl->getVariable('pagination')->value['next'];?>
<?php if ($_smarty_tpl->getVariable('category')->value){?>&amp;category=<?php echo $_smarty_tpl->getVariable('category')->value;?>
<?php }?>" title="<?php echo $_smarty_tpl->getConfigVariable('next_page_link_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('next_page_link');?>
</a></li><?php }?>  
</ul>
<?php }?>
