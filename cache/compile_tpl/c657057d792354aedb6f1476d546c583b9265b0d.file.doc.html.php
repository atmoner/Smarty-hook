<?php /* Smarty version Smarty-3.1.12, created on 2013-01-14 15:17:18
         compiled from "/var/www/themes/doc.html" */ ?>
<?php /*%%SmartyHeaderCode:16270072750f4136e9aa0e3-03878770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c657057d792354aedb6f1476d546c583b9265b0d' => 
    array (
      0 => '/var/www/themes/doc.html',
      1 => 1358173035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16270072750f4136e9aa0e3-03878770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'section_hook' => 0,
    'section_hook_functions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f4136e9fc0f9_24046782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f4136e9fc0f9_24046782')) {function content_50f4136e9fc0f9_24046782($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Documentation'), 0);?>


<?php if ($_smarty_tpl->tpl_vars['section_hook']->value){?>
    <div class="container-fluid">    
		<?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
        <div class="span8">
          <div class="hero-unit">
            <h2>Hooks Smarty</h2>
            Hooks allow to involve some function of the script although precise locations
			<dl>
				<dt>action</dt> 
				<dd>This hook is called by the index.php. It is therefore often used for menu or header</dd>
			</dl>
			<dl>
				<dt>new_page</dt> 
				<dd>This hook allows you to create a new page. It is involved in the switch from the index.php</dd>
			</dl>
          </div> 
        </div><!--/span-->
      </div><!--/row--> 

<?php }elseif($_smarty_tpl->tpl_vars['section_hook_functions']->value){?>
    <div class="container-fluid">    
		<?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
        <div class="span8">
 
            <h2>Hooks function</h2>
                <ul>
                	<li><a href="#addCss">addCss()</a></li>
                	<li><a href="#addJs">addJs()</a></li>
					<li><a href="#addMenu">addMenu()</a></li>
					<li><a href="#remove_addMenu">remove_addMenu()</a></li>
					<li><a href="#addMainsidebar">addMainsidebar()</a></li>
					<li><a href="#remove_addMainsidebar">remove_addMainsidebar()</a></li>
					<li><a href="#add_page">add_page()</a></li>
				</ul>
				
				
		<div class="tabbable">
		  <ul class="nav nav-tabs">
		    <h3 id="addCss">addCss()</h3>
			<li class="active"><a href="#addCss1" data-toggle="tab">Description</a></li>
			<li><a href="#addCss2" data-toggle="tab">Argument</a></li>
			<li><a href="#addCss3" data-toggle="tab">Exemple</a></li>
		  </ul>
		  <div class="tab-content">
			<div id="addCss1" class="tab-pane active">
			  <h4>Adding css</h4>
			  <p>This function allows you to add a css files with priority.</p>
			</div>
			<div id="addCss2" class="tab-pane">
			<h4>Argument</h4>
                <ul>
                	<li>Id</li>
                	<li>File</li>
					<li>Priority</li>
				</ul>
			</div>
			<div id="addCss3" class="tab-pane">
			  <h4>Exemple</h4>
			  <pre>$hook->addCss('my_css','mycss.css',4);</pre>
			</div>
		  </div><!-- /.tab-content -->
		</div><!-- /.tabbable -->
          
          <hr>				

		<div class="tabbable">
		  <ul class="nav nav-tabs">
		    <h3 id="addJs">addJs()</h3>
			<li class="active"><a href="#addJs1" data-toggle="tab">Description</a></li>
			<li><a href="#addJs2" data-toggle="tab">Argument</a></li>
			<li><a href="#addJs3" data-toggle="tab">Exemple</a></li>
		  </ul>
		  <div class="tab-content">
			<div id="addJs1" class="tab-pane active">
			  <h4>Adding javascript</h4>
			  <p>This function allows you to add a javascript files with priority.</p>
			</div>
			<div id="addJs2" class="tab-pane">
			<h4>Argument</h4>
                <ul>
                	<li>Id</li>
                	<li>File</li>
					<li>Priority</li>
				</ul>
			</div>
			<div id="addJs3" class="tab-pane">
			  <p>External file:</p>
			  <pre>$hook->addJs('my_js','http://code.jquery.com/jquery-1.8.3.min.js',5);</pre>
			  <p>Internal file (/themes/js/):</p>
			  <pre>$hook->addJs('my_js','my_js.js',6);</pre>
			</div>
		  </div><!-- /.tab-content -->
		</div><!-- /.tabbable -->
          
          <hr>		
				
		<div class="tabbable">
		  <ul class="nav nav-tabs">
		    <h3 id="addMenu">addMenu()</h3>
			<li class="active"><a href="#addMenu1" data-toggle="tab">Description</a></li>
			<li><a href="#addMenu2" data-toggle="tab">Argument</a></li>
			<li><a href="#addMenu3" data-toggle="tab">Exemple</a></li>
		  </ul>
		  <div class="tab-content">
			<div id="addMenu1" class="tab-pane active">
			  <h4>Adding menu link</h4>
			  <p>This function allows you to add a link in the menu bar, you can add a link to a submenu</p>
			</div>
			<div id="addMenu2" class="tab-pane">
			<h4>Argument</h4>
                <ul>
                	<li>Id string</li>
                	<li>Title string</li>
                	<li>Url string</li>
					<li>Priority num</li>
					<li>Dropdown array() (Default = NULL)</li>
				</ul>
			</div>
			<div id="addMenu3" class="tab-pane">
			  <h4>Exemple</h4>
			  <pre>$hook->addMenu('mylink', 'My link', '?p=mylink', 7);</pre>
			  <p>With submenu</p> 
<pre>$hook->addMenu('contact', 'Contact', '?p=contact', 6, 
		array(
		'simple-contact' => array(
			'title' => 'Simple contact', 
			'url' => '?p=contact&section=simple-contact'
		),
		'pro-contact' => array(
			'title' => 'Professional contact ', 
			'url' => '?p=contact&section=pro-contact'
		)
	));</pre>


			</div>
		  </div><!-- /.tab-content -->
		</div><!-- /.tabbable -->
          
          <hr>
          
		<div class="tabbable">
		  <ul class="nav nav-tabs">
		    <h3 id="remove_addMenu">remove_addMenu()</h3>
			<li class="active"><a href="#remove_addMenu1" data-toggle="tab">Description</a></li>
			<li><a href="#remove_addMenu2" data-toggle="tab">Argument</a></li>
			<li><a href="#remove_addMenu3" data-toggle="tab">Exemple</a></li>
		  </ul>
		  <div class="tab-content">
			<div id="remove_addMenu1" class="tab-pane active">
			  <h4>Remove menu</h4>
			  <p>This function allows you to remove a link from the header menu</p>
			</div>
			<div id="remove_addMenu2" class="tab-pane">
			<h4>Argument</h4>
                <ul>
                	<li>Id string</li>
				</ul>
			</div>
			<div id="remove_addMenu3" class="tab-pane">
			  <h4>Exemple</h4>
			  <pre>$hook->remove_addMenu('home');</pre>
			</div>
		  </div><!-- /.tab-content -->
		</div><!-- /.tabbable -->          

          <hr>

		<div class="tabbable">
		  <ul class="nav nav-tabs">
		    <h3 id="addMainsidebar">addMainsidebar()</h3>
			<li class="active"><a href="#addMainsidebar1" data-toggle="tab">Description</a></li>
			<li><a href="#addMainsidebar2" data-toggle="tab">Argument</a></li>
			<li><a href="#addMainsidebar3" data-toggle="tab">Exemple</a></li>
		  </ul>
		  <div class="tab-content">
			<div id="addMainsidebar1" class="tab-pane active">
			  <h4>Add link in main sidebar</h4>
			  <p>This function allows you to add a section in the sidebar (left menu)</p>
			</div>
			<div id="addMainsidebar2" class="tab-pane">
			<h4>Argument</h4>
                <ul>
                	<li>Id string</li>
                	<li>Title string</li>
                	<li>Url string</li>
					<li>Priority num</li>
				</ul>
			</div>
			<div id="addMainsidebar3" class="tab-pane">
			  <h4>Exemple</h4>
			  <pre>$hook->addMainsidebar('new_main_link', 'New Main links', '?p=yourpage', 2);</pre>
			</div>
		  </div><!-- /.tab-content -->
		</div><!-- /.tabbable -->               
 
           <hr>         

		<div class="tabbable">
		  <ul class="nav nav-tabs">
		    <h3 id="remove_addMainsidebar">remove_addMainsidebar()</h3>
			<li class="active"><a href="#remove_addMainsidebar1" data-toggle="tab">Description</a></li>
			<li><a href="#remove_addMainsidebar2" data-toggle="tab">Argument</a></li>
			<li><a href="#remove_addMainsidebar3" data-toggle="tab">Exemple</a></li>
		  </ul>
		  <div class="tab-content">
			<div id="remove_addMainsidebar1" class="tab-pane active">
			  <h4>Remove sidebar menu</h4>
			  <p>This function allows you to remove a link from the sidebar menu</p>
			</div>
			<div id="remove_addMainsidebar2" class="tab-pane">
			<h4>Argument</h4>
                <ul>
                	<li>Id string</li>
				</ul>
			</div>
			<div id="remove_addMainsidebar3" class="tab-pane">
			  <h4>Exemple</h4>
			  <pre>$hook->remove_addMainsidebar('main_links');</pre>
			</div>
		  </div><!-- /.tab-content -->
		</div><!-- /.tabbable -->               
 
           <hr> 

		<div class="tabbable">
		  <ul class="nav nav-tabs">
		    <h3 id="add_page">add_page()</h3>
			<li class="active"><a href="#add_page1" data-toggle="tab">Description</a></li>
			<li><a href="#add_page2" data-toggle="tab">Argument</a></li>
			<li><a href="#add_page3" data-toggle="tab">Exemple</a></li>
		  </ul>
		  <div class="tab-content">
			<div id="add_page1" class="tab-pane active">
			  <h4>Create a new page</h4>
			  <p>This function allows you to create a new page.</p>
			</div>
			<div id="add_page2" class="tab-pane">
			<h4>Argument</h4>
                <ul>
                	<li>Plugin_name string</li>
                	<li>Strip string</li>
				</ul>
			</div>
			<div id="add_page3" class="tab-pane">
			  <h4>Exemple</h4>
			  <pre>$hook->add_page('newpage','newpage');</pre>
			</div>
		  </div><!-- /.tab-content -->
		</div><!-- /.tabbable -->               
 
           <hr>   
                     
          </div> 
        </div><!--/span-->
<?php }else{ ?>

<?php }?>



<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>