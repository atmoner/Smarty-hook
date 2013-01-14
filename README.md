Smarty Hooks system
=============

* * *

*   What is a hook?
*   How hooks work on this script?
*   How to create my first plugin?
*   How to create new hook?
*   Demonstration

### What is a hook? ###

> In computer programming, the term hooking covers a range of techniques used to alter or augment the behavior of an operating system, of applications, or of other software components by intercepting function calls or messages or events passed between software components. Code that handles such intercepted function calls, events or messages is called a “hook”.

### How hooks work on this script? ###

The hook system work into two parts:

        Hook

        The hooks can trigger an hook function to a precise location of the site
        Hook function

        what are the possible action that can be run for each hook

### How to create my first plugin? ###

> All plugins are found in the /plugins folder, which is at the root of the script main folder.
> Each modules has its own sub-folder inside the /plugins folder: /paypal, /newpage, etc. 

> The name of the php file of the plugin should be like this: *.plugin.php
> Exemple: /plugins/newpage/myplugin.plugin.php 

This example allows you to create a new page:

    <?php

    /*
    Plugin Name: My first plugin
    Plugin URI: http://your-url.com/your-plugin.html
    Description: This is the short description of your plugin
    Version: 1.0
    Author: Your Name
    Author URI: http://www.your-website.com/
    */

    //set plugin id as file name of plugin
    $plugin_id = basename(__FILE__);

    //some plugin data
    $data['name'] = "My first plugin";
    $data['author'] = "Your Name";
    $data['url'] = "http://www.your-website.com/";

    //register plugin data
    register_plugin($plugin_id, $data);

> With this basic plugin, you can go to the administration panel, you will see your plugin appear!
> Now you just call your function by hooks, like this:

    function add_New_page() {
	    global $hook;
	    $hook->add_page('newpage','newpage');
    }

    // add hook, where to execute a function
    add_hook('new_page','add_New_page');


> To continue the example, we can use function addMenu() to add the link in header and sidebar

    function addMenu_plugin() {
	    global $hook;
	    $hook->addMenu('newpage', 'My new page', '?p=newpage', 8); 
    }

    add_hook('action','addMenu_plugin');


> This completes the example of creation of plugin.
> Obviously, it will write all the other hooks to make your script interesting

### How to create new hook? ###

> All hooks are declared in the file: /libs/startup.php
> To create a new hook, you must add it to the array of $hook->set_hooks function.
Exemple:

    $hook->set_hooks(
    	array(
    		'action',  
    		'new_page',
    		'my_new_hook' // My new hook
    	));


> Once the hook state, you can add the condition test your hook to the desired location, like this:

    if ($hook->hook_exist('my_new_hook'))  
    	$hook->execute_hook('my_new_hook'); 


### Using the hook in a plugin ###

    add_hook('new_page','plugin_function');


### Demonstration ###

See admin panel

