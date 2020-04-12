<?php

import('lib.pkp.classes.plugins.GenericPlugin');

class IndexingMetadataViewer extends GenericPlugin  {
	/**
	 * @copydoc Plugin::register()
	 */
    public function register($category, $path, $mainContextId = NULL) { 
		// Register the plugin even when it is not enabled
		$success = parent::register($category, $path, $mainContextId);

		if ($success && $this->getEnabled()) {
			// Do something when the plugin is enabled
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
	
}