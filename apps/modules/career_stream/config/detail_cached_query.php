<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
$config["detail_cached_query"] = 'SELECT `ww_users_job_class`.`job_class_id` as record_id, `ww_users_job_class`.`created_on` as "users_job_class.created_on", `ww_users_job_class`.`created_by` as "users_job_class.created_by", `ww_users_job_class`.`modified_on` as "users_job_class.modified_on", `ww_users_job_class`.`modified_by` as "users_job_class.modified_by", ww_users_job_class.status_id as "users_job_class.status_id", ww_users_job_class.job_class_code as "users_job_class.job_class_code", ww_users_job_class.job_class as "users_job_class.job_class"
FROM (`ww_users_job_class`)
WHERE `ww_users_job_class`.`job_class_id` = "{$record_id}"';