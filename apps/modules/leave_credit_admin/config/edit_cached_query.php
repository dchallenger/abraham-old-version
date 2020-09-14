<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
$config["edit_cached_query"] = 'SELECT `ww_time_form_balance`.`id` as record_id, 
`ww_time_form_balance`.`created_on` as "time_form_balance.created_on", 
`ww_time_form_balance`.`created_by` as "time_form_balance.created_by",
`ww_time_form_balance`.`modified_on` as "time_form_balance.modified_on", 
`ww_time_form_balance`.`modified_by` as "time_form_balance.modified_by", 
ww_time_form_balance.current as "time_form_balance.current", 
ww_time_form_balance.previous as "time_form_balance.previous", 
ww_time_form_balance.form_id as "time_form_balance.form_id", 
ww_time_form_balance.user_id as "time_form_balance.user_id", 
ww_time_form_balance.year as "time_form_balance.year",
DATE_FORMAT(ww_time_form_balance.period_extension, \'%M %d, %Y\') as "time_form_balance.period_extension"
FROM (`ww_time_form_balance`)
WHERE `ww_time_form_balance`.`id` = "{$record_id}"';