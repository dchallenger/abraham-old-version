<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
$config["edit_cached_query"] = 'SELECT `ww_time_record_summary`.`record_id` as record_id, `ww_time_record_summary`.`created_on` as "time_record_summary.created_on", `ww_time_record_summary`.`created_by` as "time_record_summary.created_by", `ww_time_record_summary`.`modified_on` as "time_record_summary.modified_on", `ww_time_record_summary`.`modified_by` as "time_record_summary.modified_by", ww_time_record_summary.day_type as "time_record_summary.day_type", ww_time_record_summary.ot as "time_record_summary.ot", ww_time_record_summary.undertime as "time_record_summary.undertime", ww_time_record_summary.late as "time_record_summary.late", ww_time_record_summary.lwop as "time_record_summary.lwop", ww_time_record_summary.lwp as "time_record_summary.lwp", ww_time_record_summary.absent as "time_record_summary.absent", ww_time_record_summary.hrs_actual as "time_record_summary.hrs_actual", DATE_FORMAT(ww_time_record_summary.payroll_date, \'%M %d, %Y\') as "time_record_summary.payroll_date", DATE_FORMAT(ww_time_record_summary.date, \'%M %d, %Y\') as "time_record_summary.date", ww_time_record_summary.user_id as "time_record_summary.user_id"
FROM (`ww_time_record_summary`)
WHERE `ww_time_record_summary`.`record_id` = "{$record_id}"';