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
		'payroll_phic_table.from',
		'payroll_phic_table.to',
		'payroll_phic_table.eeshare',
		'payroll_phic_table.ershare'
	)
);