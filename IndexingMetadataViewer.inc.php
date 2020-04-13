<?php

/**
 * @file plugins/generic/iterSubmission/IterSubmission.inc.php
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class IterSubmission
 * @ingroup plugins_generic_iterSubmission
 *
 * @brief This adds new fields to the submission and makes
 * those available as metadata data and form operations.
 */

import('lib.pkp.classes.plugins.GenericPlugin');
// import('lib.pkp.classes.submission.SubmissionMetadataFormImplementation');
// import('classes.submission.SubmissionMetadataFormImplementation');

class IndexingMetadataViewer extends GenericPlugin {
	/**
	 * Constructor.
	 * @param $parentForm Form A form that can use this form.
	 */
	 
	 /*
	function IterSubmission($parentForm = null) {
		// parent::SubmissionMetadataFormImplementation($parentForm);
	}
	*/
	
	function register($category, $path, $mainContextId = NULL) {
		$success = parent::register($category, $path);
		if ($success && $this->getEnabled()) {
			HookRegistry::register( 
                'Templates::Manager::Index::ManagementPages', 
                array(&$this, 'callback') 
            );
		}
		return $success;	
	}
	
	/**
	 * Determine the plugin sequence. Overrides parent so that
	 * the plugin will be displayed during install.
	 */
	function getSeq() {
		if (!Config::getVar('general', 'installed')) return 1;
		return 0;
	}	

	function getName() {
		return 'Indexing Metadata';
	}

	function getDisplayName() {
		return 'Indexing Metadata';
	}

	function getDescription() {
		return 'Indexing Metadata';
	}	

	/**
	 * Get the filename of the ADODB schema for this plugin.
	 * @return string Full path and filename to schema descriptor.
	 */
	function getInstallSchemaFile() {
		return $this->getPluginPath() . '/schema.xml';
	}

	/**
	 * Hook callback function for TemplateManager::display
	 * @param $hookName string
	 * @param $args array
	 * @return boolean
	 */
	function callback($hookName, $args) {
		/*
		// Only pages requests interest us here
		$request =& Registry::get('request');
		if (!is_a($request->getRouter(), 'PKPPageRouter')) return null;
		$page = Request::getRequestedPage();
		$op = Request::getRequestedOp();
		switch ("$page/$op") {
			case 'article/view':
				$templateManager =& $args[0];
				$additionalHeadData = $templateManager->get_template_vars('additionalHeadData');
				$templateManager->assign(
					'additionalHeadData',
					$templateManager->get_template_vars('additionalHeadData') .
					'<script async defer src="//hypothes.is/embed.js"></script>'
				);
				break;
		}
		*/
		return false;
	}
	
}

?>