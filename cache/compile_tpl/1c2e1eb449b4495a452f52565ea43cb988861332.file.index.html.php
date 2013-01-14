<?php /* Smarty version Smarty-3.1.12, created on 2013-01-14 16:08:54
         compiled from "/var/www/themes/index.html" */ ?>
<?php /*%%SmartyHeaderCode:50865455150e9ad6f0cddd3-53102246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c2e1eb449b4495a452f52565ea43cb988861332' => 
    array (
      0 => '/var/www/themes/index.html',
      1 => 1358176131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50865455150e9ad6f0cddd3-53102246',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50e9ad6f2134d3_44027542',
  'variables' => 
  array (
    'highlight' => 0,
    'functionplugin' => 0,
    'functionplugin_addlink' => 0,
    'addNewHook' => 0,
    'testNewHook' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e9ad6f2134d3_44027542')) {function content_50e9ad6f2134d3_44027542($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Main'), 0);?>


    <div class="container-fluid">    
		<?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
        <div class="span8">
          <div >
            <h2>Smarty Hooks system</h2>
			<ul class="unstyled">
				<li><a href="#whatishook">What is a hook?</a></li>
				<li><a href="#whoitwork">How hooks work on this script?</a></li>
				<li><a href="#createplugin">How to create my first plugin?</a></li>
				<li><a href="#createhook">How to create new hook?</a></li>
				<li><a href="#demo">Demonstration</a></li>
			</ul>
            
            
            
            <h3 id="whatishook">What is a hook?</h3>
            <blockquote>In computer programming, the term hooking covers a range of techniques used to alter or augment the behavior of an operating system, of applications, or of other software components by intercepting function calls or messages or events passed between software components. Code that handles such intercepted function calls, events or messages is called a “hook”.</blockquote>

            <h3 id="whoitwork">How hooks work on this script?</h3>            
            <p>The hook system work into two parts:</p>
            <blockquote>
				<ol>
					<li>
						<a href="?p=documentation&section=hooks">Hook</a>
						<p>The hooks can trigger an hook function to a precise location of the site</p>
					</li>
					<li>
						<a href="?p=documentation&section=hook-functions">Hook function</a>
						<p>what are the possible action that can be run for each hook</p>
					</li>
				</ol>            
            </blockquote>
            
          <h3 id="createplugin">How to create my first plugin?</h3>
          <blockquote>
          All plugins are found in the <strong>/plugins</strong> folder, which is at the root of the script main folder.<br />
          Each modules has its own sub-folder inside the <strong>/plugins</strong> folder: /paypal, /newpage, etc. </blockquote>
          
          <blockquote>The name of the php file of the plugin should be like this: *.plugin.php<br />
          Exemple: <strong>/plugins/newpage/myplugin.plugin.php</strong>
          </blockquote>
          
          <p>This example allows you to create a new page:</p>
          <pre><?php echo $_smarty_tpl->tpl_vars['highlight']->value;?>
</pre><br />
          
          <blockquote>With this basic plugin, you can go to the <a href="?p=admin" target="_BLANK">administration panel</a>, you will see your plugin appear! <br />
          Now you just call your function by hooks, like this:</blockquote>
          <pre><?php echo $_smarty_tpl->tpl_vars['functionplugin']->value;?>
</pre><br />
          
          <p>To continue the example, we can use function <code>addMenu()</code> to add the link in header and sidebar</p>
          <pre><?php echo $_smarty_tpl->tpl_vars['functionplugin_addlink']->value;?>
</pre><br />
          
          <blockquote>This completes the example of creation of plugin.<br />
			Obviously, it will write all the other hooks to make your script interesting</blockquote>
          </div> 
          
          <h3 id="createhook">How to create new hook?</h3>
          <blockquote>All hooks are declared in the file: <strong>/libs/startup.php</strong><br />
          To create a new hook, you must add it to the array of <code>$hook->set_hooks</code> function. <br />
          Exemple:</blockquote>
          <pre><?php echo $_smarty_tpl->tpl_vars['addNewHook']->value;?>
</pre><br />         
          
          <blockquote>Once the hook state, you can add the condition test your hook to the desired location, like this:</blockquote>
          <pre><?php echo $_smarty_tpl->tpl_vars['testNewHook']->value;?>
</pre><br />
          
          <h4>Using the hook in a plugin</h4>
          <pre>add_hook('new_page','plugin_function');</pre><br />
 
          <h3 id="demo">Demonstration</h3>         
          <p>See <a href="?p=admin" target="_BLANK">admin panel</a></p>
          
        </div><!--/span-->
      </div><!--/row--> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>