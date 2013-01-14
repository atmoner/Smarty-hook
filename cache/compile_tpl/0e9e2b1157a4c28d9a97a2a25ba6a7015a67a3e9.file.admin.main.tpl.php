<?php /* Smarty version Smarty-3.1.12, created on 2012-11-21 00:18:29
         compiled from "/var/www/themes/admin.main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7028630550aa793baef339-64378124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e9e2b1157a4c28d9a97a2a25ba6a7015a67a3e9' => 
    array (
      0 => '/var/www/themes/admin.main.tpl',
      1 => 1353453508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7028630550aa793baef339-64378124',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50aa793bb1f4c5_57784148',
  'variables' => 
  array (
    'api' => 0,
    'i' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa793bb1f4c5_57784148')) {function content_50aa793bb1f4c5_57784148($_smarty_tpl) {?><link rel='stylesheet' href='themes/css/admin.css' type='text/css' />

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
			<td class='desc'>

							<p> <?php echo $_smarty_tpl->tpl_vars['i']->value['Description'];?>
</p>

						<div class='active second plugin-version-author-uri'>
						Version 2.4.5 | <?php echo $_smarty_tpl->tpl_vars['language']->value['AUTHOR'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['AuthorURI'];?>
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
<?php }} ?>