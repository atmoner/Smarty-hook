<?php /* Smarty version Smarty-3.1.12, created on 2013-01-12 10:35:35
         compiled from "/var/www/themes/sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:45777867150e9b76699c075-42891880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '890000bb27d893ef046090e7b6b74f86a11831b7' => 
    array (
      0 => '/var/www/themes/sidebar.html',
      1 => 1357983324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45777867150e9b76699c075-42891880',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50e9b76699dce9_71967108',
  'variables' => 
  array (
    'hooks' => 0,
    'i' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e9b76699dce9_71967108')) {function content_50e9b76699dce9_71967108($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sortby')) include '/var/www/libs/plugins/modifier.sortby.php';
?>      <div class="row-fluid">
        <div class="span2 offset1">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = smarty_modifier_sortby($_smarty_tpl->tpl_vars['hooks']->value->add_Mainsidebar,"#prio"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
		          <?php if ($_smarty_tpl->tpl_vars['i']->value['id']=='main_links'){?>
		          <li class="nav-header"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</li>
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
					  	<li <?php if ($_smarty_tpl->tpl_vars['i']->value['id']==$_GET['p']||empty($_GET['p'])&&$_smarty_tpl->tpl_vars['i']->value['url']=='/'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</a></li>
					  <?php }?> 
		 			<?php } ?>
				  <?php }elseif($_smarty_tpl->tpl_vars['i']->value['id']=='other_links'){?>
				      <li class="nav-header"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</li>
				      <li><a href="#">Link</a></li>
				      <li><a href="#">Link</a></li>
				      <li><a href="#">Link</a></li>
				      <li><a href="#">Link</a></li>
				      <li><a href="#">Link</a></li>
				      <li><a href="#">Link</a></li>
		          <?php }?> 
              <?php } ?>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
<?php }} ?>