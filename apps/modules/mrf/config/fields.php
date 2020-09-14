<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$config['fields'] = array();
$config['fields'][1]['recruitment_request.hiring_type'] = array(
	'f_id' => 9,
	'fg_id' => 1,
	'label' => 'Position',
	'description' => '',
	'table' => 'recruitment_request',
	'column' => 'hiring_type',
	'uitype_id' => 4,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 2,
	'datatype' => 'required',
	'active' => '1',
	'encrypt' => 0,
	'searchable' => array(
		'type_id' => '1',
		'table' => 'users_position',
		'multiple' => 0,
		'group_by' => '',
		'label' => 'position',
		'value' => 'position_id',
		'textual_value_column' => ''
	)
);
$config['fields'][1]['recruitment_request.user_id'] = array(
	'f_id' => 4,
	'fg_id' => 1,
	'label' => 'Requested By',
	'description' => '',
	'table' => 'recruitment_request',
	'column' => 'user_id',
	'uitype_id' => 1,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 4,
	'datatype' => 'required',
	'active' => '1',
	'encrypt' => 0
);
$config['fields'][1]['recruitment_request.document_no'] = array(
    'f_id' => 4,
    'fg_id' => 1,
    'label' => 'Control Number',
    'description' => '',
    'table' => 'recruitment_request',
    'column' => 'document_no',
    'uitype_id' => 1,
    'display_id' => 3,
    'quick_edit' => 1,
    'sequence' => 1,
    'datatype' => 'required',
    'active' => '1',
    'encrypt' => 0
);
$config['fields'][1]['recruitment_request.description'] = array(
	'f_id' => 8,
	'fg_id' => 1,
	'label' => 'Description',
	'description' => '',
	'table' => 'recruitment_request',
	'column' => 'description',
	'uitype_id' => 2,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 7,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0
);
$config['fields'][1]['recruitment_request.date_needed'] = array(
	'f_id' => 7,
	'fg_id' => 1,
	'label' => 'Date Needed',
	'description' => 'Period Start Date ',
	'table' => 'recruitment_request',
	'column' => 'date_needed',
	'uitype_id' => 6,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 6,
	'datatype' => 'required',
	'active' => '1',
	'encrypt' => 0
);
$config['fields'][1]['recruitment_request.max_no_personel'] = array(
    'f_id' => 4,
    'fg_id' => 1,
    'label' => 'Maximum no of personnel for this position',
    'description' => '',
    'table' => 'recruitment_request',
    'column' => 'max_no_personel',
    'uitype_id' => 1,
    'display_id' => 3,
    'quick_edit' => 1,
    'sequence' => 1,
    'datatype' => 'required',
    'active' => '1',
    'encrypt' => 0
);
$config['fields'][1]['recruitment_request.total_no_incumbent'] = array(
    'f_id' => 4,
    'fg_id' => 1,
    'label' => 'Total no. of incumbents for this position',
    'description' => '',
    'table' => 'recruitment_request',
    'column' => 'total_no_incumbent',
    'uitype_id' => 1,
    'display_id' => 3,
    'quick_edit' => 1,
    'sequence' => 1,
    'datatype' => 'required',
    'active' => '1',
    'encrypt' => 0
);
$config['fields'][1]['recruitment_request.educational_attainment'] = array(
	'f_id' => 8,
	'fg_id' => 1,
	'label' => 'Education Attainment',
	'description' => '',
	'table' => 'recruitment_request',
	'column' => 'educational_attainment',
	'uitype_id' => 2,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 7,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0
);
$config['fields'][1]['recruitment_request.position_id'] = array(
	'f_id' => 9,
	'fg_id' => 1,
	'label' => 'Position',
	'description' => '',
	'table' => 'recruitment_request',
	'column' => 'position_id',
	'uitype_id' => 4,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 2,
	'datatype' => 'required',
	'active' => '1',
	'encrypt' => 0,
	'searchable' => array(
		'type_id' => '1',
		'table' => 'users_position',
		'multiple' => 0,
		'group_by' => '',
		'label' => 'position',
		'value' => 'position_id',
		'textual_value_column' => ''
	)
);
$config['fields'][1]['recruitment_request.replacement_of'] = array(
	'f_id' => 9,
	'fg_id' => 1,
	'label' => 'Replacement Of',
	'description' => '',
	'table' => 'recruitment_request',
	'column' => 'replacement_of',
	'uitype_id' => 4,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 2,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0,
	'searchable' => array(
		'type_id' => '1',
		'table' => 'users',
		'multiple' => 0,
		'group_by' => '',
		'label' => 'full_name',
		'value' => 'user_id',
		'textual_value_column' => ''
	)
);
$config['fields'][1]['recruitment_request.due_to_id'] = array(
	'f_id' => 9,
	'fg_id' => 1,
	'label' => 'Due To',
	'description' => '',
	'table' => 'recruitment_request',
	'column' => 'due_to_id',
	'uitype_id' => 4,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 2,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0,
	'searchable' => array(
		'type_id' => '1',
		'table' => 'users',
		'multiple' => 0,
		'group_by' => '',
		'label' => 'full_name',
		'value' => 'user_id',
		'textual_value_column' => ''
	)
);
$config['fields'][1]['recruitment_request.replacement_transfer_location'] = array(
    'f_id' => 4,
    'fg_id' => 1,
    'label' => 'Location',
    'description' => '',
    'table' => 'recruitment_request',
    'column' => 'replacement_transfer_location',
    'uitype_id' => 1,
    'display_id' => 3,
    'quick_edit' => 1,
    'sequence' => 1,
    'datatype' => 'required',
    'active' => '1',
    'encrypt' => 0
);
$config['fields'][1]['recruitment_request.replacement_transfer_leave_date_from'] = array(
	'f_id' => 7,
	'fg_id' => 1,
	'label' => 'Date From',
	'description' => 'Period Start Date ',
	'table' => 'recruitment_request',
	'column' => 'replacement_transfer_leave_date_from',
	'uitype_id' => 6,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 6,
	'datatype' => 'required',
	'active' => '1',
	'encrypt' => 0
);
$config['fields'][1]['recruitment_request.replacement_transfer_leave_date_to'] = array(
	'f_id' => 7,
	'fg_id' => 1,
	'label' => 'Date To',
	'description' => 'Period Start Date ',
	'table' => 'recruitment_request',
	'column' => 'replacement_transfer_leave_date_to',
	'uitype_id' => 6,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 6,
	'datatype' => 'required',
	'active' => '1',
	'encrypt' => 0
);
$config['fields'][1]['recruitment_request.department_id'] = array(
	'f_id' => 2,
	'fg_id' => 1,
	'label' => 'Department',
	'description' => '',
	'table' => 'recruitment_request',
	'column' => 'department_id',
	'uitype_id' => 4,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 2,
	'datatype' => 'required',
	'active' => '1',
	'encrypt' => 0,
	'searchable' => array(
		'type_id' => '1',
		'table' => 'users_department',
		'multiple' => 0,
		'group_by' => '',
		'label' => 'department',
		'value' => 'department_id',
		'textual_value_column' => ''
	)
);
$config['fields'][1]['recruitment_request.company_id'] = array(
	'f_id' => 1,
	'fg_id' => 1,
	'label' => 'Company',
	'description' => '',
	'table' => 'recruitment_request',
	'column' => 'company_id',
	'uitype_id' => 4,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 1,
	'datatype' => 'required',
	'active' => '1',
	'encrypt' => 0,
	'searchable' => array(
		'type_id' => '1',
		'table' => 'users_company',
		'multiple' => 0,
		'group_by' => '',
		'label' => 'company',
		'value' => 'company_id',
		'textual_value_column' => ''
	)
);
$config['fields'][1]['recruitment_request.nature_id'] = array(
	'f_id' => 2,
	'fg_id' => 1,
	'label' => 'Nature of Request',
	'description' => '',
	'table' => 'recruitment_request',
	'column' => 'nature_id',
	'uitype_id' => 4,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 2,
	'datatype' => 'required',
	'active' => '1',
	'encrypt' => 0,
	'searchable' => array(
		'type_id' => '1',
		'table' => 'recruitment_request_nature',
		'multiple' => 0,
		'group_by' => '',
		'label' => 'nature',
		'value' => 'nature_id',
		'textual_value_column' => ''
	)
);
$config['fields'][1]['recruitment_request.budgeted'] = array(
	'f_id' => 2,
	'fg_id' => 1,
	'label' => 'Nature of Request',
	'description' => '',
	'table' => 'recruitment_request',
	'column' => 'budgeted',
	'uitype_id' => 4,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 2,
	'datatype' => 'required',
	'active' => '1',
	'encrypt' => 0
	// 'searchable' => array(
	// 	'type_id' => '1',
	// 	'table' => 'recruitment_request_nature',
	// 	'multiple' => 0,
	// 	'group_by' => '',
	// 	'label' => 'nature',
	// 	'value' => 'ww_recruitment_request_nature',
	// 	'textual_value_column' => ''
	// )
);
$config['fields'][1]['recruitment_request.job_class_id'] = array(
	'f_id' => 2,
	'fg_id' => 1,
	'label' => 'Job Class',
	'description' => '',
	'table' => 'recruitment_request',
	'column' => 'job_class_id',
	'uitype_id' => 4,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 2,
	'datatype' => 'required',
	'active' => '1',
	'encrypt' => 0,
	'searchable' => array(
		'type_id' => '1',
		'table' => 'user_job_class',
		'multiple' => 0,
		'group_by' => '',
		'label' => 'job_class',
		'value' => 'job_class_id',
		'textual_value_column' => ''
	)
);
$config['fields'][1]['recruitment_request.employment_status_id'] = array(
	'f_id' => 2,
	'fg_id' => 1,
	'label' => 'Employment Status',
	'description' => '',
	'table' => 'recruitment_request',
	'column' => 'employment_status_id',
	'uitype_id' => 4,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 2,
	'datatype' => 'required',
	'active' => '1',
	'encrypt' => 0,
	'searchable' => array(
		'type_id' => '1',
		'table' => 'partners_employment_status',
		'multiple' => 0,
		'group_by' => '',
		'label' => 'employment_status',
		'value' => 'employment_status_id',
		'textual_value_column' => ''
	)
);
$config['fields'][2]['recruitment_request.attachment'] = array(
	'f_id' => 12,
	'fg_id' => 1,
	'label' => 'Attachment',
	'description' => 'Attachment',
	'table' => 'recruitment_request',
	'column' => 'attachment',
	'uitype_id' => 8,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 2,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0
);

$config['fields'][2]['recruitment_request.contract_duration'] = array(
	'f_id' => 12,
	'fg_id' => 1,
	'label' => 'Contract Duration',
	'description' => 'Contract Duration',
	'table' => 'recruitment_request',
	'column' => 'contract_duration',
	'uitype_id' => 1,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 2,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0
);

$config['fields'][2]['recruitment_request.quantity'] = array(
	'f_id' => 12,
	'fg_id' => 1,
	'label' => 'Quantity',
	'description' => 'Quantity',
	'table' => 'recruitment_request',
	'column' => 'quantity',
	'uitype_id' => 1,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 2,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0
);
$config['fields'][1]['recruitment_request.age_range_from'] = array(
    'f_id' => 4,
    'fg_id' => 1,
    'label' => 'Age Range',
    'description' => '',
    'table' => 'recruitment_request',
    'column' => 'age_range_from',
    'uitype_id' => 1,
    'display_id' => 3,
    'quick_edit' => 1,
    'sequence' => 1,
    'datatype' => 'required',
    'active' => '1',
    'encrypt' => 0
);
$config['fields'][1]['recruitment_request.age_range_to'] = array(
    'f_id' => 4,
    'fg_id' => 1,
    'label' => 'Age Range',
    'description' => '',
    'table' => 'recruitment_request',
    'column' => 'age_range_to',
    'uitype_id' => 1,
    'display_id' => 3,
    'quick_edit' => 1,
    'sequence' => 1,
    'datatype' => 'required',
    'active' => '1',
    'encrypt' => 0
);
$config['fields'][1]['recruitment_request.gender'] = array(
	'f_id' => 2,
	'fg_id' => 1,
	'label' => 'Sex',
	'description' => '',
	'table' => 'recruitment_request',
	'column' => 'gender',
	'uitype_id' => 4,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 2,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0,
	'searchable' => array(
		'type_id' => '1',
		'table' => 'partners_age_gender',
		'multiple' => 0,
		'group_by' => '',
		'label' => 'age_gender',
		'value' => 'age_gender',
		'textual_value_column' => ''
	)
);
$config['fields'][1]['recruitment_request.civil_status_id'] = array(
	'f_id' => 2,
	'fg_id' => 1,
	'label' => 'Civil Status',
	'description' => '',
	'table' => 'recruitment_request',
	'column' => 'civil_status_id',
	'uitype_id' => 4,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 2,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0,
	'searchable' => array(
		'type_id' => '1',
		'table' => 'partners_civil_status',
		'multiple' => 0,
		'group_by' => '',
		'label' => 'civil_status_id',
		'value' => 'civil_status',
		'textual_value_column' => ''
	)
);
$config['fields'][1]['recruitment_request.delivery_date'] = array(
	'f_id' => 7,
	'fg_id' => 1,
	'label' => 'Delivery Date',
	'description' => 'Delivery Date ',
	'table' => 'recruitment_request',
	'column' => 'delivery_date',
	'uitype_id' => 6,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 6,
	'datatype' => 'required',
	'active' => '1',
	'encrypt' => 0
);
$config['fields'][1]['recruitment_request.hr_remarks'] = array(
	'f_id' => 8,
	'fg_id' => 1,
	'label' => 'HR Remarks',
	'description' => '',
	'table' => 'recruitment_request',
	'column' => 'hr_remarks',
	'uitype_id' => 2,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 7,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0
);
/*$config['fields'][1]['recruitment_request.hr_assigned'] = array(
    'f_id' => 8,
    'fg_id' => 1,
    'label' => 'HR Remarks',
    'description' => '',
    'table' => 'recruitment_request',
    'column' => 'hr_assigned',
    'uitype_id' => 2,
    'display_id' => 3,
    'quick_edit' => 1,
    'sequence' => 8,
    'datatype' => '',
    'active' => '1',
    'encrypt' => 0
);*/

$config['fields'][2]['recruitment_request.salary_from'] = array(
	'f_id' => 12,
	'fg_id' => 1,
	'label' => 'Salary From',
	'description' => 'Salary From',
	'table' => 'recruitment_request',
	'column' => 'salary_from',
	'uitype_id' => 1,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 2,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0
);

$config['fields'][2]['recruitment_request.salary_to'] = array(
	'f_id' => 12,
	'fg_id' => 1,
	'label' => 'Salary To',
	'description' => 'Salary To',
	'table' => 'recruitment_request',
	'column' => 'salary_to',
	'uitype_id' => 1,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 2,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0
);

$config['fields'][2]['recruitment_request.budget_from'] = array(
	'f_id' => 12,
	'fg_id' => 1,
	'label' => 'Budget From',
	'description' => 'Budget From',
	'table' => 'recruitment_request',
	'column' => 'budget_from',
	'uitype_id' => 1,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 2,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0
);

$config['fields'][2]['recruitment_request.budget_to'] = array(
	'f_id' => 12,
	'fg_id' => 1,
	'label' => 'Budget To',
	'description' => 'Budget To',
	'table' => 'recruitment_request',
	'column' => 'budget_to',
	'uitype_id' => 1,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 2,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0
);
