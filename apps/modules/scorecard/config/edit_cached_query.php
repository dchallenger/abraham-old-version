<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
$config["edit_cached_query"] = 'SELECT `ww_performance_setup_scorecard`.`scorecard_id` as record_id, `ww_performance_setup_scorecard`.`created_on` as "performance_setup_scorecard.created_on", `ww_performance_setup_scorecard`.`created_by` as "performance_setup_scorecard.created_by", `ww_performance_setup_scorecard`.`modified_on` as "performance_setup_scorecard.modified_on", `ww_performance_setup_scorecard`.`modified_by` as "performance_setup_scorecard.modified_by", ww_performance_setup_scorecard.status_id as "performance_setup_scorecard.status_id", ww_performance_setup_scorecard.description as "performance_setup_scorecard.description", ww_performance_setup_scorecard.scorecard as "performance_setup_scorecard.scorecard"
FROM (`ww_performance_setup_scorecard`)
WHERE `ww_performance_setup_scorecard`.`scorecard_id` = "{$record_id}"';