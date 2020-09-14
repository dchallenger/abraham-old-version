<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
$config["detail_cached_query"] = 'SELECT `ww_training_library`.`library_id` as record_id, `ww_training_library`.`created_on` as "training_library.created_on", `ww_training_library`.`created_by` as "training_library.created_by", `ww_training_library`.`modified_on` as "training_library.modified_on", `ww_training_library`.`modified_by` as "training_library.modified_by", DATE_FORMAT(ww_training_library.published_date, \'%M %d, %Y\') as "training_library.published_date", ww_training_library.module as "training_library.module", ww_training_library.description as "training_library.description", ww_training_library.author as "training_library.author", ww_training_library.library as "training_library.library"
FROM (`ww_training_library`)
WHERE `ww_training_library`.`library_id` = "{$record_id}"';