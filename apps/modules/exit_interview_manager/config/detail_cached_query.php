<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
$config["detail_cached_query"] = 'SELECT ww_partners_clearance_exit_interview_layout.*, `ww_partners_clearance_exit_interview_layout`.`exit_interview_layout_id` as record_id, `ww_partners_clearance_exit_interview_layout`.`created_on` as "partners_clearance_layout.created_on", `ww_partners_clearance_exit_interview_layout`.`created_by` as "partners_clearance_layout.created_by", `ww_partners_clearance_exit_interview_layout`.`modified_on` as "partners_clearance_layout.modified_on", `ww_partners_clearance_exit_interview_layout`.`modified_by` as "partners_clearance_layout.modified_by"
FROM (`ww_partners_clearance_exit_interview_layout`)
WHERE `ww_partners_clearance_exit_interview_layout`.`exit_interview_layout_id` = "{$record_id}"';