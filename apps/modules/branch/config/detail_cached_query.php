<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
$config["detail_cached_query"] = 'SELECT `ww_users_branch`.`branch_id` as record_id, IF(ww_users_branch.status_id = 1, "Yes", "No") as "users_branch_status_id", ww_users_branch.branch_code as "users_branch_branch_code", ww_users_branch.branch as "users_branch_branch", `ww_users_branch`.`created_on` as "users_branch_created_on", `ww_users_branch`.`created_by` as "users_branch_created_by", `ww_users_branch`.`modified_on` as "users_branch_modified_on", `ww_users_branch`.`modified_by` as "users_branch_modified_by", IF(ww_users_branch.status_id = 1, "Yes", "No") as "users_branch_status_id", ww_users_branch.branch_code as "users_branch_branch_code", ww_users_branch.branch as "users_branch_branch", ww_users_branch.sss_branch_code as "users_branch_sss_branch_code", ww_users_branch.sss_branch_code_locator as "users_branch_sss_branch_code_locator", ww_users_branch.hdmf_branch_code as "users_branch_hdmf_branch_code", ww_users_branch.company_coe as "users_branch_company_coe"
FROM (`ww_users_branch`)
WHERE `ww_users_branch`.`branch_id` = "{$record_id}"';