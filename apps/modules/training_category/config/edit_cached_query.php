<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
$config["edit_cached_query"] = 'SELECT `ww_training_category`.`category_id` as record_id, `ww_training_category`.`created_on` as "training_category.created_on", `ww_training_category`.`created_by` as "training_category.created_by", `ww_training_category`.`modified_on` as "training_category.modified_on", `ww_training_category`.`modified_by` as "training_category.modified_by", ww_training_category.description as "training_category.description", ww_training_category.category_code as "training_category.category_code", ww_training_category.category as "training_category.category"
FROM (`ww_training_category`)
WHERE `ww_training_category`.`category_id` = "{$record_id}"';