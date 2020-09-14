<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$config['fields'] = array();
$config['fields'][2]['partners_incident.status'] = array(
	'f_id' => 11,
	'fg_id' => 2,
	'label' => 'Status',
	'description' => '',
	'table' => 'partners_incident',
	'column' => 'status',
	'uitype_id' => 1,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 11,
	'datatype' => 'required',
	'active' => '1',
	'encrypt' => 0
);
$config['fields'][2]['partners_incident.incident_status_id'] = array(
	'f_id' => 10,
	'fg_id' => 2,
	'label' => 'Status',
	'description' => '',
	'table' => 'partners_incident',
	'column' => 'incident_status_id',
	'uitype_id' => 1,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 10,
	'datatype' => 'required',
	'active' => '1',
	'encrypt' => 0
);
$config['fields'][2]['partners_incident.damages'] = array(
	'f_id' => 9,
	'fg_id' => 2,
	'label' => 'Damage/s done (If any) ',
	'description' => '',
	'table' => 'partners_incident',
	'column' => 'damages',
	'uitype_id' => 2,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 4,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0
);
$config['fields'][2]['partners_incident.violation_details'] = array(
	'f_id' => 8,
	'fg_id' => 2,
	'label' => 'Details of Violation ',
	'description' => '',
	'table' => 'partners_incident',
	'column' => 'violation_details',
	'uitype_id' => 2,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 3,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0
);
$config['fields'][2]['partners_incident.location'] = array(
	'f_id' => 7,
	'fg_id' => 2,
	'label' => 'Location',
	'description' => '',
	'table' => 'partners_incident',
	'column' => 'location',
	'uitype_id' => 1,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 2,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0
);
$config['fields'][2]['partners_incident.witnesses'] = array(
	'f_id' => 6,
	'fg_id' => 2,
	'label' => 'Witnesses',
	'description' => '',
	'table' => 'partners_incident',
	'column' => 'witnesses',
	'uitype_id' => 4,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 1,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0,
	'searchable' => array(
		'type_id' => '1',
		'table' => 'users',
		'multiple' => 1,
		'group_by' => '',
		'label' => 'full_name',
		'value' => 'user_id',
		'textual_value_column' => ''
	)
);
$config['fields'][1]['partners_incident.attachments'] = array(
	'f_id' => 5,
	'fg_id' => 1,
	'label' => 'Attachments',
	'description' => '',
	'table' => 'partners_incident',
	'column' => 'attachments',
	'uitype_id' => 8,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 5,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0
);
$config['fields'][1]['partners_incident.date_time_of_offense'] = array(
	'f_id' => 4,
	'fg_id' => 1,
	'label' => 'Date and Time of Offense',
	'description' => '',
	'table' => 'partners_incident',
	'column' => 'date_time_of_offense',
	'uitype_id' => 16,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 4,
	'datatype' => 'required',
	'active' => '1',
	'encrypt' => 0
);
$config['fields'][1]['partners_incident.date_sent'] = array(
	'f_id' => 4,
	'fg_id' => 1,
	'label' => 'Date Sent',
	'description' => '',
	'table' => 'partners_incident',
	'column' => 'date_sent',
	'uitype_id' => 16,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 4,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0
);
$config['fields'][1]['partners_incident.complainants'] = array(
	'f_id' => 3,
	'fg_id' => 1,
	'label' => 'Complainant/s',
	'description' => '',
	'table' => 'partners_incident',
	'column' => 'complainants',
	'uitype_id' => 4,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 3,
	'datatype' => 'required',
	'active' => '1',
	'encrypt' => 0,
	'searchable' => array(
		'type_id' => '1',
		'table' => 'users',
		'multiple' => 1,
		'group_by' => '',
		'label' => 'full_name',
		'value' => 'user_id',
		'textual_value_column' => ''
	)
);
$config['fields'][1]['partners_incident.offense_id'] = array(
	'f_id' => 2,
	'fg_id' => 1,
	'label' => 'Offense ',
	'description' => '',
	'table' => 'partners_incident',
	'column' => 'offense_id',
	'uitype_id' => 4,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 2,
	'datatype' => 'required',
	'active' => '1',
	'encrypt' => 0,
	'searchable' => array(
		'type_id' => '1',
		'table' => 'partners_offense',
		'multiple' => 0,
		'group_by' => '',
		'label' => 'offense',
		'value' => 'offense_id',
		'textual_value_column' => ''
	)
);
$config['fields'][1]['partners_incident.involved_partners'] = array(
	'f_id' => 1,
	'fg_id' => 1,
	'label' => 'Involved Employee/s',
	'description' => '',
	'table' => 'partners_incident',
	'column' => 'involved_partners',
	'uitype_id' => 4,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 1,
	'datatype' => 'required',
	'active' => '1',
	'encrypt' => 0,
	'searchable' => array(
		'type_id' => '1',
		'table' => 'users',
		'multiple' => 1,
		'group_by' => '',
		'label' => 'full_name',
		'value' => 'user_id',
		'textual_value_column' => ''
	)
);
