<?php
import('lib.pkp.classes.plugins.GenericPlugin');
class IndexingMetadataViewer extends GenericPlugin {
	public function register($category, $path, $mainContextId = NULL) {

		// Register the plugin even when it is not enabled
		$success = parent::register($category, $path);
				
		if ($success && $this->getEnabled()) {
			HookRegistry::register('ArticleHandler::view',array(&$this, 'callback'));

		}

		return $success;
	}

	/**
	 * Provide a name for this plugin
	 *
	 * The name will appear in the Plugin Gallery where editors can
	 * install, enable and disable plugins.
	 */
	public function getDisplayName() {
		return __('plugins.generic.iMV.displayName');;
	}

	/**
	 * Provide a description for this plugin
	 *
	 * The description will appear in the Plugin Gallery where editors can
	 * install, enable and disable plugins.
	 */
	public function getDescription() {
		return __('Descripcion');;
	}
	
	    function callback($hookName, $args) { 
        $params =& $args[0]; 
        $smarty =& $args[1];         
        $output = '<li>&#187; <a href=”http://pkp.sfu.ca”>My New Link</a></li>'; 
        return false; 
    }
}