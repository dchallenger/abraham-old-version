<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
$config["edit_cached_query"] = 'SELECT `ww_users_job_title`.`job_title_id` as record_id, `ww_users_job_title`.`created_on` as "users_job_title.created_on", `ww_users_job_title`.`created_by` as "users_job_title.created_by", `ww_users_job_title`.`modified_on` as "users_job_title.modified_on", `ww_users_job_title`.`modified_by` as "users_job_title.modified_by", ww_users_job_title.job_title as "users_job_title.job_title", ww_users_job_title.job_title_code as "users_job_title.job_title_code", ww_users_job_title.status_id as "users_job_title.status_id"
FROM (`ww_users_job_title`)
WHERE `ww_users_job_title`.`job_title_id` = "{$record_id}"';