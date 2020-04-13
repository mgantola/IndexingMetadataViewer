<?php
/**
 * @defgroup plugins_generic_iterSubmission Iter Submission plugin
 */
/**
 * @file plugins/generic/IndexingMetadataViewer/index.php
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_iterSubmission
 * @brief Wrapper for "IndexingMetadataViewer" plugin.
 *
 */
require_once('IndexingMetadataViewer.inc.php');
return new IndexingMetadataViewer();
?>