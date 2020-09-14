<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
$config["detail_cached_query"] = 'SELECT `ww_partners_offense_sanction`.`sanction_id` as record_id, `ww_partners_offense_sanction`.`created_on` as "partners_offense_sanction.created_on", `ww_partners_offense_sanction`.`created_by` as "partners_offense_sanction.created_by", `ww_partners_offense_sanction`.`modified_on` as "partners_offense_sanction.modified_on", `ww_partners_offense_sanction`.`modified_by` as "partners_offense_sanction.modified_by", ww_partners_offense_sanction.sanction as "partners_offense_sanction.sanction", posc.offense_sanction_category as "partners_offense_sanction.offense_sanction_category", pol.offense_level as "partners_offense_sanction.offense_level", ww_partners_offense_sanction.offense_level_id as "partners_offense_sanction.offense_level_id", ww_partners_offense_sanction.sanction_category_id as "partners_offense_sanction.sanction_category_id"
FROM (`ww_partners_offense_sanction`)
LEFT JOIN `ww_partners_offense_sanction_category` posc ON  `ww_partners_offense_sanction`.`sanction_category_id` = `posc`.`offense_sanction_category_id`
LEFT JOIN `ww_partners_offense_level` pol ON  `ww_partners_offense_sanction`.`offense_level_id` = `pol`.`offense_level_id`
WHERE `ww_partners_offense_sanction`.`sanction_id` = "{$record_id}"';