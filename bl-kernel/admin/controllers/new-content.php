<?php defined('BLUDIT') or die('Bludit CMS.');

// ============================================================================
// Check role
// ============================================================================

// ============================================================================
// Functions
// ============================================================================

// ============================================================================
// Main before POST
// ============================================================================

// ============================================================================
// POST Method
// ============================================================================

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	createPage($_POST);
	Redirect::page('content');
}

// ============================================================================
// Main after POST
// ============================================================================

// Title of the page
$layout['title'] = $Language->g('New content').' - '.$layout['title'];