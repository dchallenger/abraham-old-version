<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
$config["list_cached_query"] = 'SELECT `ww_payroll_transaction_mode`.`payroll_transaction_mode_id` as record_id, 
ww_payroll_transaction_mode.payroll_transaction_mode as "payroll_transaction_mode_payroll_transaction_mode", 
ww_payroll_transaction_mode.description as "payroll_transaction_mode_description", 
`ww_payroll_transaction_mode`.`created_on` as "payroll_transaction_mode_created_on", 
`ww_payroll_transaction_mode`.`created_by` as "payroll_transaction_mode_created_by", 
`ww_payroll_transaction_mode`.`modified_on` as "payroll_transaction_mode_modified_on", 
`ww_payroll_transaction_mode`.`modified_by` as "payroll_transaction_mode_modified_by",
`ww_payroll_transaction_mode`.`can_delete` as `can_delete`
FROM (`ww_payroll_transaction_mode`)
WHERE (
	ww_payroll_transaction_mode.payroll_transaction_mode like "%{$search}%" OR 
	ww_payroll_transaction_mode.description like "%{$search}%"
)';