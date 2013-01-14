<?php /* Smarty version Smarty-3.1.12, created on 2013-01-14 13:07:26
         compiled from "/var/www/themes/header.html" */ ?>
<?php /*%%SmartyHeaderCode:211601023650e9ad6f24d804-38198477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72a8bf26bb41ff9f80cd6b5e9ed576095e061ffe' => 
    array (
      0 => '/var/www/themes/header.html',
      1 => 1358165244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211601023650e9ad6f24d804-38198477',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50e9ad6f2947d4_33774319',
  'variables' => 
  array (
    'title' => 0,
    'Name' => 1,
    'hooks' => 0,
    'i' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e9ad6f2947d4_33774319')) {function content_50e9ad6f2947d4_33774319($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sortby')) include '/var/www/libs/plugins/modifier.sortby.php';
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
	<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = smarty_modifier_sortby($_smarty_tpl->tpl_vars['hooks']->value->add_Css,"#prio"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
	<link href="../themes/css/<?php echo $_smarty_tpl->tpl_vars['i']->value['file'];?>
" rel="stylesheet">
	<?php } ?>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="/"><?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</a>
          <div class="nav-collapse collapse">
            <ul class="nav"> 
 			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = smarty_modifier_sortby($_smarty_tpl->tpl_vars['hooks']->value->add_Menu,"#prio"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>            
			  <?php if (isset($_smarty_tpl->tpl_vars['i']->value['dropdown'])){?>
			  <li class="dropdown">
			  	 <a href="/" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
 <b class="caret"></b></a> 
			  	 <ul class="dropdown-menu">
			  	 <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['i']->value['dropdown']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value){
$_smarty_tpl->tpl_vars['j']->_loop = true;
?>
			  	 <li><a href="<?php echo $_smarty_tpl->tpl_vars['j']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['j']->value['title'];?>
</a></li>
			  	 <?php } ?>
			  	 </ul>
			  </li>
			  <?php }else{ ?> 
			  	<li <?php if ($_smarty_tpl->tpl_vars['i']->value['id']==$_GET['p']){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</a></li>
			  <?php }?> 
 			<?php } ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<?php }} ?>