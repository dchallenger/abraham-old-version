<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
$config["edit_cached_query"] = 'SELECT `ww_payroll_rate_type`.`payroll_rate_type_id` as record_id, `ww_payroll_rate_type`.`created_on` as "payroll_rate_type.created_on", `ww_payroll_rate_type`.`created_by` as "payroll_rate_type.created_by", `ww_payroll_rate_type`.`modified_on` as "payroll_rate_type.modified_on", `ww_payroll_rate_type`.`modified_by` as "payroll_rate_type.modified_by", ww_payroll_rate_type.payroll_rate_type as "payroll_rate_type.payroll_rate_type", ww_payroll_rate_type.description as "payroll_rate_type.description"
FROM (`ww_payroll_rate_type`)
WHERE `ww_payroll_rate_type`.`payroll_rate_type_id` = "{$record_id}"';