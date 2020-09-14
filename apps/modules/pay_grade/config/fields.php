<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$config['fields'] = array();
$config['fields'][1]['users_job_pay_level.status_id'] = array(
	'f_id' => 3,
	'fg_id' => 1,
	'label' => 'Active',
	'description' => '',
	'table' => 'users_job_pay_level',
	'column' => 'status_id',
	'uitype_id' => 3,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 3,
	'datatype' => 'V',
	'active' => '1',
	'encrypt' => 0
);
$config['fields'][1]['users_job_pay_level.pay_level_code'] = array(
	'f_id' => 2,
	'fg_id' => 1,
	'label' => 'Pay Grade Code',
	'description' => '',
	'table' => 'users_job_pay_level',
	'column' => 'pay_level_code',
	'uitype_id' => 1,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 2,
	'datatype' => 'V',
	'active' => '1',
	'encrypt' => 0
);
$config['fields'][1]['users_job_pay_level.pay_level'] = array(
	'f_id' => 1,
	'fg_id' => 1,
	'label' => 'Pay Grade',
	'description' => '',
	'table' => 'users_job_pay_level',
	'column' => 'pay_level',
	'uitype_id' => 1,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 1,
	'datatype' => 'V',
	'active' => '1',
	'encrypt' => 0
);
