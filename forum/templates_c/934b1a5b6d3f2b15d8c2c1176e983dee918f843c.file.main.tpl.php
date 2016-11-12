<?php /* Smarty version Smarty-3.0.8, created on 2012-06-16 16:07:27
         compiled from "themes/default/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4407960814fdcee87883e03-40624917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '934b1a5b6d3f2b15d8c2c1176e983dee918f843c' => 
    array (
      0 => 'themes/default/main.tpl',
      1 => 1308334358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4407960814fdcee87883e03-40624917',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_replace')) include '/home/nightshadow/www/gref/forum/modules/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_escape')) include '/home/nightshadow/www/gref/forum/modules/smarty/plugins/modifier.escape.php';
?><?php  $_config = new Smarty_Internal_Config($_smarty_tpl->getVariable('language_file')->value, $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("general", 'local'); ?><?php if ($_smarty_tpl->getVariable('subnav_location')->value&&$_smarty_tpl->getVariable('subnav_location_var')->value){?><?php $_smarty_tpl->tpl_vars["subnav_location"] = new Smarty_variable(smarty_modifier_replace($_smarty_tpl->getConfigVariable($_smarty_tpl->getVariable('subnav_location')->value),"[var]",$_smarty_tpl->getVariable('subnav_location_var')->value), null, null);?><?php }elseif($_smarty_tpl->getVariable('subnav_location')->value){?><?php $_smarty_tpl->tpl_vars['subnav_location'] = new Smarty_variable($_smarty_tpl->getConfigVariable($_smarty_tpl->getVariable('subnav_location')->value), null, null);?><?php }?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->getConfigVariable('language');?>
" dir="<?php echo $_smarty_tpl->getConfigVariable('dir');?>
">
<head>
<title><?php if ($_smarty_tpl->getVariable('page_title')->value){?><?php echo $_smarty_tpl->getVariable('page_title')->value;?>
 - <?php }elseif($_smarty_tpl->getVariable('subnav_location')->value){?><?php echo $_smarty_tpl->getVariable('subnav_location')->value;?>
 - <?php }?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value['forum_name'],"html");?>
</title>
<meta http-equiv="content-type" content="text/html; charset=<?php echo $_smarty_tpl->getConfigVariable('charset');?>
" />
<meta name="description" content="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value['forum_description'],"html");?>
" />
<?php if ($_smarty_tpl->getVariable('keywords')->value){?><meta name="keywords" content="<?php echo $_smarty_tpl->getVariable('keywords')->value;?>
" /><?php }?>
<?php if ($_smarty_tpl->getVariable('mode')->value=='posting'){?>
<meta name="robots" content="noindex" />
<?php }?>
<meta name="generator" content="my little forum <?php echo $_smarty_tpl->getVariable('settings')->value['version'];?>
" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('THEMES_DIR')->value;?>
/<?php echo $_smarty_tpl->getVariable('theme')->value;?>
/style.min.css" media="all" />
<?php if ($_smarty_tpl->getVariable('settings')->value['rss_feed']==1){?><link rel="alternate" type="application/rss+xml" title="RSS" href="index.php?mode=rss" /><?php }?>
<?php if (!$_smarty_tpl->getVariable('top')->value){?>
<link rel="top" href="./" />
<?php }?>
<?php if ($_smarty_tpl->getVariable('link_rel_first')->value){?>
<link rel="first" href="<?php echo $_smarty_tpl->getVariable('link_rel_first')->value;?>
" />
<?php }?>
<?php if ($_smarty_tpl->getVariable('link_rel_prev')->value){?>
<link rel="prev" href="<?php echo $_smarty_tpl->getVariable('link_rel_prev')->value;?>
" />
<?php }?>
<?php if ($_smarty_tpl->getVariable('link_rel_next')->value){?>
<link rel="next" href="<?php echo $_smarty_tpl->getVariable('link_rel_next')->value;?>
" />
<?php }?>
<?php if ($_smarty_tpl->getVariable('link_rel_last')->value){?>
<link rel="last" href="<?php echo $_smarty_tpl->getVariable('link_rel_last')->value;?>
" />
<?php }?>
<link rel="search" href="index.php?mode=search" />
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->getVariable('THEMES_DIR')->value;?>
/<?php echo $_smarty_tpl->getVariable('theme')->value;?>
/images/favicon.ico" />
<?php if ($_smarty_tpl->getVariable('mode')->value=='entry'){?><link rel="canonical" href="<?php echo $_smarty_tpl->getVariable('settings')->value['forum_address'];?>
index.php?mode=thread&amp;id=<?php echo $_smarty_tpl->getVariable('tid')->value;?>
" /><?php }?>
<script src="index.php?mode=js_defaults&amp;t=<?php echo $_smarty_tpl->getVariable('settings')->value['last_changes'];?>
<?php if ($_smarty_tpl->getVariable('user')->value){?>&amp;user_type=<?php echo $_smarty_tpl->getVariable('user_type')->value;?>
<?php }?>" type="text/javascript" charset="utf-8"></script>
<script src="js/main.min.js" type="text/javascript" charset="utf-8"></script>
<?php if ($_smarty_tpl->getVariable('mode')->value=='posting'){?>
<script src="js/posting.min.js" type="text/javascript" charset="utf-8"></script>
<?php }?>
<?php if ($_smarty_tpl->getVariable('mode')->value=='admin'){?>
<script src="js/admin.min.js" type="text/javascript" charset="utf-8"></script>
<?php }?>
</head>

<body>
<!--[if IE]><div id="ie"><![endif]-->

<div id="top">

<div id="logo">
<?php if ($_smarty_tpl->getVariable('settings')->value['home_linkname']){?><p class="home"><a href="<?php echo $_smarty_tpl->getVariable('settings')->value['home_linkaddress'];?>
"><?php echo $_smarty_tpl->getVariable('settings')->value['home_linkname'];?>
</a></p><?php }?>
<h1><a href="./" title="<?php echo $_smarty_tpl->getConfigVariable('forum_index_link_title');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('settings')->value['forum_name'],"html");?>
</a></h1>
</div>

<div id="nav">
<ul id="usermenu">
<?php if ($_smarty_tpl->getVariable('user')->value){?><li><a href="index.php?mode=user&amp;action=edit_profile" title="<?php echo $_smarty_tpl->getConfigVariable('profile_link_title');?>
"><strong><?php echo $_smarty_tpl->getVariable('user')->value;?>
</strong></a></li><li><a href="index.php?mode=user" title="<?php echo $_smarty_tpl->getConfigVariable('user_area_link_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('user_area_link');?>
</a></li><?php if ($_smarty_tpl->getVariable('admin')->value){?><li><a href="index.php?mode=admin" title="<?php echo $_smarty_tpl->getConfigVariable('admin_area_link_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('admin_area_link');?>
</a></li><?php }?><li><a href="index.php?mode=login" title="<?php echo $_smarty_tpl->getConfigVariable('log_out_link_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('log_out_link');?>
</a></li><?php }else{ ?><li><a href="index.php?mode=login" title="<?php echo $_smarty_tpl->getConfigVariable('log_in_link_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('log_in_link');?>
</a></li><?php if ($_smarty_tpl->getVariable('settings')->value['register_mode']!=2){?><li><a href="index.php?mode=register" title="<?php echo $_smarty_tpl->getConfigVariable('register_link_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('register_link');?>
</a></li><?php }?><?php if ($_smarty_tpl->getVariable('settings')->value['user_area_public']){?><li><a href="index.php?mode=user" title="<?php echo $_smarty_tpl->getConfigVariable('user_area_link_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('user_area_link');?>
</a></li><?php }?><?php }?>
<?php if ($_smarty_tpl->getVariable('menu')->value){?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('menu')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?><li><a href="index.php?mode=page&amp;id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['linkname'];?>
</a></li><?php }} ?>
<?php }?>
</ul>
<form id="topsearch" action="index.php" method="get" title="<?php echo $_smarty_tpl->getConfigVariable('search_title');?>
" accept-charset="<?php echo $_smarty_tpl->getConfigVariable('charset');?>
"><div><input type="hidden" name="mode" value="search" /><label for="search-input"><?php echo $_smarty_tpl->getConfigVariable('search_marking');?>
</label>&nbsp;<input id="search-input" type="text" name="search" value="<?php echo $_smarty_tpl->getConfigVariable('search_default_value');?>
" /><!--&nbsp;<input type="image" src="templates/<?php echo $_smarty_tpl->getVariable('settings')->value['template'];?>
/images/submit.png" alt="[&raquo;]" />--></div></form></div>
</div>

<div id="subnav">
<div id="subnav-1"><?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('theme')->value)."/subtemplates/subnavigation_1.inc.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?></div>
<div id="subnav-2"><?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('theme')->value)."/subtemplates/subnavigation_2.inc.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?></div>
</div>

<div id="content">
<?php if ($_smarty_tpl->getVariable('subtemplate')->value){?>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('theme')->value)."/subtemplates/".($_smarty_tpl->getVariable('subtemplate')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php }else{ ?>
<?php echo (($tmp = @$_smarty_tpl->getVariable('content')->value)===null||$tmp==='' ? '' : $tmp);?>

<?php }?>
</div>

<div id="footer">
<div id="footer-1"><?php if ($_smarty_tpl->getVariable('total_users_online')->value){?><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('counter_users_online'),"[total_postings]",$_smarty_tpl->getVariable('total_postings')->value),"[total_threads]",$_smarty_tpl->getVariable('total_threads')->value),"[registered_users]",$_smarty_tpl->getVariable('registered_users')->value),"[total_users_online]",$_smarty_tpl->getVariable('total_users_online')->value),"[registered_users_online]",$_smarty_tpl->getVariable('registered_users_online')->value),"[unregistered_users_online]",$_smarty_tpl->getVariable('unregistered_users_online')->value);?>
<?php }else{ ?><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('counter'),"[total_postings]",$_smarty_tpl->getVariable('total_postings')->value),"[total_threads]",$_smarty_tpl->getVariable('total_threads')->value),"[registered_users]",$_smarty_tpl->getVariable('registered_users')->value);?>
<?php }?><br />
<?php if ($_smarty_tpl->getVariable('forum_time_zone')->value){?><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->getConfigVariable('forum_time_with_time_zone'),'[time]',$_smarty_tpl->getVariable('forum_time')->value),'[time_zone]',$_smarty_tpl->getVariable('forum_time_zone')->value);?>
<?php }else{ ?><?php echo smarty_modifier_replace($_smarty_tpl->getConfigVariable('forum_time'),'[time]',$_smarty_tpl->getVariable('forum_time')->value);?>
<?php }?></div>
<div id="footer-2">
<ul id="footermenu">
<?php if ($_smarty_tpl->getVariable('settings')->value['rss_feed']==1){?><li><a class="rss" href="index.php?mode=rss" title="<?php echo $_smarty_tpl->getConfigVariable('rss_feed_postings_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('rss_feed_postings');?>
</a> &nbsp;<a class="rss" href="index.php?mode=rss&amp;items=thread_starts" title="<?php echo $_smarty_tpl->getConfigVariable('rss_feed_new_threads_title');?>
"><?php echo $_smarty_tpl->getConfigVariable('rss_feed_new_threads');?>
</a></li><?php }?><li><a href="index.php?mode=contact" title="<?php echo $_smarty_tpl->getConfigVariable('contact_linktitle');?>
" rel="nofollow"><?php echo $_smarty_tpl->getConfigVariable('contact_link');?>
</a></li>
</ul></div>
</div>
<div id="pbmlf"><a href="http://mylittleforum.net/">powered by my little forum</a></div>

<!--[if IE]></div><![endif]-->

</body>
</html>
