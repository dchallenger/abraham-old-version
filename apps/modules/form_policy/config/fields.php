<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$config['fields'] = array();
$config['fields'][2]['time_form_class_policy.severity'] = array(
	'f_id' => 11,
	'fg_id' => 2,
	'label' => 'Severity',
	'description' => '',
	'table' => 'time_form_class_policy',
	'column' => 'severity',
	'uitype_id' => 4,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 4,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0,
	'searchable' => array(
		'type_id' => '2',
		'table' => 'SELECT \'Warning\' AS source
UNION ALL 
SELECT \'Strict Compliance\' AS source',
		'multiple' => 0,
		'group_by' => '',
		'label' => 'source',
		'value' => 'source',
		'textual_value_column' => ''
	)
);
$config['fields'][2]['time_form_class_policy.role_id'] = array(
	'f_id' => 18,
	'fg_id' => 2,
	'label' => 'Role',
	'description' => '',
	'table' => 'time_form_class_policy',
	'column' => 'role_id',
	'uitype_id' => 10,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 11,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0,
	'searchable' => array(
		'type_id' => '1',
		'table' => 'roles',
		'multiple' => 1,
		'group_by' => '',
		'label' => 'role',
		'value' => 'role_id',
		'textual_value_column' => ''
	)
);
$config['fields'][2]['time_form_class_policy.employment_type_id'] = array(
	'f_id' => 17,
	'fg_id' => 2,
	'label' => 'Employment Type',
	'description' => '',
	'table' => 'time_form_class_policy',
	'column' => 'employment_type_id',
	'uitype_id' => 10,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 10,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0,
	'searchable' => array(
		'type_id' => '1',
		'table' => 'partners_employment_type',
		'multiple' => 1,
		'group_by' => '',
		'label' => 'employment_type',
		'value' => 'employment_type_id',
		'textual_value_column' => ''
	)
);
$config['fields'][2]['time_form_class_policy.employment_status_id'] = array(
	'f_id' => 16,
	'fg_id' => 2,
	'label' => 'Employment Status',
	'description' => '',
	'table' => 'time_form_class_policy',
	'column' => 'employment_status_id',
	'uitype_id' => 10,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 9,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0,
	'searchable' => array(
		'type_id' => '1',
		'table' => 'partners_employment_status',
		'multiple' => 1,
		'group_by' => '',
		'label' => 'employment_status',
		'value' => 'employment_status_id',
		'textual_value_column' => ''
	)
);
$config['fields'][2]['time_form_class_policy.group_id'] = array(
	'f_id' => 15,
	'fg_id' => 2,
	'label' => 'Group',
	'description' => '',
	'table' => 'time_form_class_policy',
	'column' => 'group_id',
	'uitype_id' => 10,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 8,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0,
	'searchable' => array(
		'type_id' => '1',
		'table' => 'users_group',
		'multiple' => 1,
		'group_by' => '',
		'label' => 'group',
		'value' => 'group_id',
		'textual_value_column' => ''
	)
);
$config['fields'][2]['time_form_class_policy.department_id'] = array(
	'f_id' => 14,
	'fg_id' => 2,
	'label' => 'Department',
	'description' => '',
	'table' => 'time_form_class_policy',
	'column' => 'department_id',
	'uitype_id' => 10,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 7,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0,
	'searchable' => array(
		'type_id' => '1',
		'table' => 'users_department',
		'multiple' => 1,
		'group_by' => '',
		'label' => 'department',
		'value' => 'department_id',
		'textual_value_column' => ''
	)
);
$config['fields'][2]['time_form_class_policy.division_id'] = array(
	'f_id' => 13,
	'fg_id' => 2,
	'label' => 'Division',
	'description' => '',
	'table' => 'time_form_class_policy',
	'column' => 'division_id',
	'uitype_id' => 10,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 6,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0,
	'searchable' => array(
		'type_id' => '1',
		'table' => 'users_division',
		'multiple' => 1,
		'group_by' => '',
		'label' => 'division',
		'value' => 'division_id',
		'textual_value_column' => ''
	)
);
$config['fields'][2]['time_form_class_policy.company_id'] = array(
	'f_id' => 12,
	'fg_id' => 2,
	'label' => 'Company',
	'description' => '',
	'table' => 'time_form_class_policy',
	'column' => 'company_id',
	'uitype_id' => 10,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 5,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0,
	'searchable' => array(
		'type_id' => '1',
		'table' => 'users_company',
		'multiple' => 1,
		'group_by' => '',
		'label' => 'company',
		'value' => 'company_id',
		'textual_value_column' => ''
	)
);
$config['fields'][2]['time_form_class_policy.description'] = array(
	'f_id' => 20,
	'fg_id' => 2,
	'label' => 'Description',
	'description' => '',
	'table' => 'time_form_class_policy',
	'column' => 'description',
	'uitype_id' => 2,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 3,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0
);
$config['fields'][2]['time_form_class_policy.class_value'] = array(
	'f_id' => 9,
	'fg_id' => 2,
	'label' => 'Value',
	'description' => '',
	'table' => 'time_form_class_policy',
	'column' => 'class_value',
	'uitype_id' => 1,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 2,
	'datatype' => 'required',
	'active' => '1',
	'encrypt' => 0
);
$config['fields'][2]['time_form_class_policy.class_id'] = array(
	'f_id' => 8,
	'fg_id' => 2,
	'label' => 'Class',
	'description' => '',
	'table' => 'time_form_class_policy',
	'column' => 'class_id',
	'uitype_id' => 4,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 1,
	'datatype' => 'required',
	'active' => '1',
	'encrypt' => 0,
	'searchable' => array(
		'type_id' => '1',
		'table' => 'time_form_class',
		'multiple' => 0,
		'group_by' => '',
		'label' => 'class_code',
		'value' => 'class_id',
		'textual_value_column' => ''
	)
);
