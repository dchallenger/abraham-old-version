<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
$config["edit_cached_query"] = 'SELECT `ww_time_shift_weekly`.`calendar_id` as record_id, `ww_time_shift_weekly`.`created_on` as "time_shift_weekly.created_on", `ww_time_shift_weekly`.`created_by` as "time_shift_weekly.created_by", `ww_time_shift_weekly`.`modified_on` as "time_shift_weekly.modified_on", `ww_time_shift_weekly`.`modified_by` as "time_shift_weekly.modified_by", ww_time_shift_weekly.calendar as "time_shift_weekly.calendar", ww_time_shift_weekly.default as "time_shift_weekly.default"
FROM (`ww_time_shift_weekly`)
WHERE `ww_time_shift_weekly`.`calendar_id` = "{$record_id}"';