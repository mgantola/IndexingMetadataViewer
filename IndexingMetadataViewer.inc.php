<?php

import('lib.pkp.classes.plugins.GenericPlugin');

class IndexingMetadataViewer extends GenericPlugin  {
	/**
	 * @copydoc Plugin::register()
	 */
    function register($category, $path) { 
        if (parent::register($category, $path)) { 
            HookRegistry::register( 
                'Templates::Manager::Index::ManagementPages', 
                array(&$this, 'callback') 
            ); 
            return true; 
        } 
        return false; 
    } 



	/**
	 * Provide a name for this plugin
	 *
	 * The name will appear in the Plugin Gallery where editors can
	 * install, enable and disable plugins.
	 */
	public function getDisplayName() {
		return __('plugins.generic.iMV.title');
	}

	/**
	 * Provide a description for this plugin
	 *
	 * The description will appear in the Plugin Gallery where editors can
	 * install, enable and disable plugins.
	 */
	public function getDescription() {
		return __('plugins.generic.iMV.description');
	}
	
	    function callback($hookName, $args) { 
        $params =& $args[0]; 
        $smarty =& $args[1]; 
        $output =& $args[2]; 
        $output = '<li>&#187; <a href=”http://pkp.sfu.ca”>My New Link</a></li>'; 
        return false; 
    } 
}