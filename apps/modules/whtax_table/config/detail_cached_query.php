<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
$config["detail_cached_query"] = 'SELECT `ww_payroll_whtax_table`.`whtax_id` as record_id, `ww_payroll_whtax_table`.`created_on` as "payroll_whtax_table.created_on", `ww_payroll_whtax_table`.`created_by` as "payroll_whtax_table.created_by", `ww_payroll_whtax_table`.`modified_on` as "payroll_whtax_table.modified_on", `ww_payroll_whtax_table`.`modified_by` as "payroll_whtax_table.modified_by", ww_payroll_whtax_table.payroll_schedule_id as "payroll_whtax_table.payroll_schedule_id", ww_payroll_whtax_table.taxcode_id as "payroll_whtax_table.taxcode_id", ww_payroll_whtax_table.salary_from as "payroll_whtax_table.salary_from", ww_payroll_whtax_table.salary_to as "payroll_whtax_table.salary_to", ww_payroll_whtax_table.fixed_amount as "payroll_whtax_table.fixed_amount", ww_payroll_whtax_table.excess_percentage as "payroll_whtax_table.excess_percentage"
FROM (`ww_payroll_whtax_table`)
WHERE `ww_payroll_whtax_table`.`whtax_id` = "{$record_id}"';