<?php
/**
 * @defgroup plugins_generic_iterSubmission Iter Submission plugin
 */
/**
 * @file plugins/generic/iterSubmission/index.php
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_iterSubmission
 * @brief Wrapper for "Iter Submission" plugin.
 *
 */
require_once('IterSubmission.inc.php');
return new IterSubmission();
?>