<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
$config["list_cached_query"] = 'SELECT `ww_time_record_tardiness_settings`.`habitual_tardiness_id` as record_id, `ww_time_record_tardiness_settings`.`created_on` as "time_record_tardiness_settings_created_on", `ww_time_record_tardiness_settings`.`created_by` as "time_record_tardiness_settings_created_by", `ww_time_record_tardiness_settings`.`modified_on` as "time_record_tardiness_settings_modified_on", `ww_time_record_tardiness_settings`.`modified_by` as "time_record_tardiness_settings_modified_by"
FROM (`ww_time_record_tardiness_settings`)';