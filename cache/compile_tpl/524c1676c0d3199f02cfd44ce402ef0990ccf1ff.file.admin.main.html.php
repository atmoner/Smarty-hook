<?php /* Smarty version Smarty-3.1.12, created on 2013-01-12 10:28:53
         compiled from "/var/www/themes/admin.main.html" */ ?>
<?php /*%%SmartyHeaderCode:140641373950e9b59b2f8880-89655175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '524c1676c0d3199f02cfd44ce402ef0990ccf1ff' => 
    array (
      0 => '/var/www/themes/admin.main.html',
      1 => 1357982932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140641373950e9b59b2f8880-89655175',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50e9b59b3aca42_82121078',
  'variables' => 
  array (
    'api' => 0,
    'i' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e9b59b3aca42_82121078')) {function content_50e9b59b3aca42_82121078($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Main'), 0);?>


<link rel='stylesheet' href='themes/css/admin.css' type='text/css' />

<table class="widefat" cellspacing="0" id="active-plugins-table">
	<thead>
		<tr>
			<th scope="col">Plugin</th>
			<th scope="col" class="num">Version</th>
			<th scope="col">Description</th>
			<th scope="col" class="action-links">Action</th>
		</tr>
	</thead>

	<tfoot>
		<tr>
			<th scope="col">Plugin</th>
			<th scope="col" class="num">Version</th>
			<th scope="col">Description</th>
			<th scope="col" class="action-links">Action</th>
		</tr>
	</tfoot>
 
	<tbody class="plugins">
	<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['api']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
		<tr <?php echo $_smarty_tpl->tpl_vars['i']->value['active'];?>
>
			<td class='name'> <a href="" title=""><?php echo $_smarty_tpl->tpl_vars['i']->value['Name'];?>
</a> </td>
			<td class='vers' align='center'><?php echo $_smarty_tpl->tpl_vars['i']->value['Version'];?>
</td>
			<td class='desc'><p><?php echo $_smarty_tpl->tpl_vars['i']->value['Description'];?>
</p>

						<div class='active second plugin-version-author-uri'>
						Version <?php echo $_smarty_tpl->tpl_vars['i']->value['Version'];?>
 | Author: <a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['AuthorURI'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['GO_TO_AUTHOR'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['i']->value['Author'];?>
</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['AuthorURI'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['WEB_SITE'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['language']->value['GO_TO_PLUGIN'];?>
</a>
						</div>
 
			</td>
			<td>				 
		 	  <?php echo $_smarty_tpl->tpl_vars['i']->value['linkAdd'];?>
 
			</td>
		</tr>
	<?php } ?> 
	</tbody>
</table>

 
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>