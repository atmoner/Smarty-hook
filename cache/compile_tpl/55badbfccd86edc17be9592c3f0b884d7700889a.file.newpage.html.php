<?php /* Smarty version Smarty-3.1.12, created on 2013-01-12 10:32:52
         compiled from "/var/www/plugins/newpage/html/newpage.html" */ ?>
<?php /*%%SmartyHeaderCode:197233075550f1298d676052-47420485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55badbfccd86edc17be9592c3f0b884d7700889a' => 
    array (
      0 => '/var/www/plugins/newpage/html/newpage.html',
      1 => 1357983170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197233075550f1298d676052-47420485',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f1298d6accc0_00754158',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f1298d6accc0_00754158')) {function content_50f1298d6accc0_00754158($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'My new page'), 0);?>

    <div class="container-fluid">    
		<?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
        <div class="span8">
        
		<p>Content of my new page</p>
		
        </div><!--/span-->
      </div><!--/row--> 		

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>