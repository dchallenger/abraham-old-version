<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
$config["detail_cached_query"] = 'SELECT `ww_users_position`.`position_id` as record_id, `ww_users_position`.`created_on` as "users_position.created_on", `ww_users_position`.`created_by` as "users_position.created_by", `ww_users_position`.`modified_on` as "users_position.modified_on", `ww_users_position`.`modified_by` as "users_position.modified_by", ww_users_position.position as "users_position.position", ww_users_position.position_code as "users_position.position_code", ww_users_position.employee_type_id as "users_position.employee_type_id", ww_users_position.immediate_id as "users_position.immediate_id", ww_users_position.immediate_position as "users_position.immediate_position", ww_users_position.status_id as "users_position.status_id", ww_users_position.job_description as "users_position.job_description", ww_users_position.attachment as "users_position.attachment"
FROM (`ww_users_position`)
WHERE `ww_users_position`.`position_id` = "{$record_id}"';