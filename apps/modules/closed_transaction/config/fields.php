<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$config['fields'] = array();
$config['fields'][1]['payroll_closed_transaction.employee_id'] = array(
	'f_id' => 1,
	'fg_id' => 1,
	'label' => 'Employee',
	'description' => '',
	'table' => 'payroll_closed_transaction',
	'column' => 'employee_id',
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
		'multiple' => 0,
		'group_by' => '',
		'label' => 'full_name',
		'value' => 'user_id',
		'textual_value_column' => ''
	)
);
$config['fields'][1]['payroll_closed_transaction.payroll_date'] = array(
	'f_id' => 2,
	'fg_id' => 1,
	'label' => 'Payroll Date',
	'description' => '',
	'table' => 'payroll_closed_transaction',
	'column' => 'payroll_date',
	'uitype_id' => 6,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 2,
	'datatype' => 'required',
	'active' => '1',
	'encrypt' => 0
);
$config['fields'][1]['payroll_closed_transaction.transaction_id'] = array(
	'f_id' => 3,
	'fg_id' => 1,
	'label' => 'Transaction',
	'description' => '',
	'table' => 'payroll_closed_transaction',
	'column' => 'transaction_id',
	'uitype_id' => 4,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 3,
	'datatype' => 'required',
	'active' => '1',
	'encrypt' => 0,
	'searchable' => array(
		'type_id' => '2',
		'table' => 'SELECT a.transaction_code, a.transaction_id, a.transaction_label, b.transaction_class
FROM {dbprefix}payroll_transaction a
LEFT JOIN {dbprefix}payroll_transaction_class b ON b.transaction_class_id =  a.transaction_class_id
WHERE a.deleted = 0',
		'multiple' => 0,
		'group_by' => 'transaction_class',
		'label' => 'transaction_label',
		'value' => 'transaction_id',
		'textual_value_column' => ''
	)
);
$config['fields'][1]['payroll_closed_transaction.quantity'] = array(
	'f_id' => 4,
	'fg_id' => 1,
	'label' => 'Quantity',
	'description' => '',
	'table' => 'payroll_closed_transaction',
	'column' => 'quantity',
	'uitype_id' => 1,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 4,
	'datatype' => 'required|numeric',
	'active' => '1',
	'encrypt' => 1
);
$config['fields'][1]['payroll_closed_transaction.unit_rate'] = array(
	'f_id' => 5,
	'fg_id' => 1,
	'label' => 'Unit Rate',
	'description' => '',
	'table' => 'payroll_closed_transaction',
	'column' => 'unit_rate',
	'uitype_id' => 1,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 5,
	'datatype' => 'require|numeric',
	'active' => '1',
	'encrypt' => 1
);
$config['fields'][1]['payroll_closed_transaction.amount'] = array(
	'f_id' => 6,
	'fg_id' => 1,
	'label' => 'Amount',
	'description' => '',
	'table' => 'payroll_closed_transaction',
	'column' => 'amount',
	'uitype_id' => 1,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 6,
	'datatype' => 'required|numeric',
	'active' => '1',
	'encrypt' => 1
);
$config['fields'][1]['payroll_closed_transaction.remarks'] = array(
	'f_id' => 7,
	'fg_id' => 1,
	'label' => 'Remarks',
	'description' => '',
	'table' => 'payroll_closed_transaction',
	'column' => 'remarks',
	'uitype_id' => 2,
	'display_id' => 3,
	'quick_edit' => 1,
	'sequence' => 7,
	'datatype' => '',
	'active' => '1',
	'encrypt' => 0
);
