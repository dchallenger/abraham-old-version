<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
$config["detail_cached_query"] = 'SELECT `ww_users_job_grade_level`.`job_grade_id` as record_id, `ww_users_job_grade_level`.`created_on` as "users_job_grade_level.created_on", `ww_users_job_grade_level`.`created_by` as "users_job_grade_level.created_by", `ww_users_job_grade_level`.`modified_on` as "users_job_grade_level.modified_on", `ww_users_job_grade_level`.`modified_by` as "users_job_grade_level.modified_by", ww_users_job_grade_level.status_id as "users_job_grade_level.status_id", ww_users_job_grade_level.job_grade_code as "users_job_grade_level.job_grade_code", ww_users_job_grade_level.job_level as "users_job_grade_level.job_level"
FROM (`ww_users_job_grade_level`)
WHERE `ww_users_job_grade_level`.`job_grade_id` = "{$record_id}"';