<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$config['fieldgroups'] = array();
$config['fieldgroups'][1] = array(
	'fg_id' => 1,
	'label' => 'Basic Information',
	'description' => '',
	'display_id' => 3,
	'sequence' => 1,
	'active' => 1,
	'fields' => array(
		'fieldgroups.label',
		'fieldgroups.description',
		'fieldgroups.display_id',
		'fieldgroups.sequence',
		'fieldgroups.status'	)
);
