<?php /* Smarty version Smarty-3.1.12, created on 2013-01-14 13:16:31
         compiled from "/var/www/themes/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:188746860650e9ad6f2978d8-78417200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43892007f17e44ca97da4dbc16400acde65d4221' => 
    array (
      0 => '/var/www/themes/footer.html',
      1 => 1358165790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188746860650e9ad6f2978d8-78417200',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50e9ad6f2994d2_29431083',
  'variables' => 
  array (
    'hooks' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e9ad6f2994d2_29431083')) {function content_50e9ad6f2994d2_29431083($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sortby')) include '/var/www/libs/plugins/modifier.sortby.php';
?>      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = smarty_modifier_sortby($_smarty_tpl->tpl_vars['hooks']->value->add_Js,"#prio"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
	<script src="<?php echo $_smarty_tpl->tpl_vars['i']->value['file'];?>
"></script>
	<?php } ?>
	
  </body>
</html>

<?php }} ?>