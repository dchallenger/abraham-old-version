<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
$config["detail_cached_query"] = 'SELECT `ww_time_forms`.`forms_id` as record_id, `ww_time_forms`.`display_name` as display_name, ww_time_forms.date_approved as "time_forms_date_approved", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y\') as "time_forms_date_to", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", ww_time_forms.form_status_id as "time_forms_form_status_id", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y\') as "time_forms_date_to", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", ww_time_forms.form_status_id as "time_forms_form_status_id", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y\') as "time_forms_date_to", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", ww_time_forms.form_status_id as "time_forms_form_status_id", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y\') as "time_forms_date_to", DATE_FORMAT(ww_time_forms.focus_date, \'%M %d, %Y\') as "time_forms_focus_date", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", ww_time_forms.form_status_id as "time_forms_form_status_id", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y\') as "time_forms_date_to", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", ww_time_forms_maternity.delivery_id as "time_forms_maternity_delivery_id", ww_time_forms_maternity.pregnancy_no as "time_forms_maternity_pregnancy_no", DATE_FORMAT(ww_time_forms_maternity.expected_date, \'%M %d, %Y\') as "time_forms_maternity_expected_date", DATE_FORMAT(ww_time_forms_maternity.actual_date, \'%M %d, %Y\') as "time_forms_maternity_actual_date", DATE_FORMAT(ww_time_forms_maternity.return_date, \'%M %d, %Y\') as "time_forms_maternity_return_date", ww_time_forms.form_status_id as "time_forms_form_status_id", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y\') as "time_forms_date_to", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", DATE_FORMAT(ww_time_forms_maternity.actual_date, \'%M %d, %Y\') as "time_forms_maternity_actual_date", ww_time_forms.form_status_id as "time_forms_form_status_id", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y\') as "time_forms_date_to", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", ww_time_forms.form_status_id as "time_forms_form_status_id", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y\') as "time_forms_date_to", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", ww_time_forms.form_status_id as "time_forms_form_status_id", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y\') as "time_forms_date_to", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", ww_time_forms.form_status_id as "time_forms_form_status_id", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y %h:%i %p\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y %h:%i %p\') as "time_forms_date_to", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", ww_time_forms_obt.location as "time_forms_obt_location", ww_time_forms_obt.company_to_visit as "time_forms_obt_company_to_visit", ww_time_forms_obt.name as "time_forms_obt_name", ww_time_forms_obt.position as "time_forms_obt_position", ww_time_forms_obt.contact_no as "time_forms_obt_contact_no", ww_time_forms.form_status_id as "time_forms_form_status_id", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y %h:%i %p\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y %h:%i %p\') as "time_forms_date_to", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", ww_time_forms.form_status_id as "time_forms_form_status_id", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y\') as "time_forms_date_to", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", ww_time_forms.form_status_id as "time_forms_form_status_id", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y %h:%i %p\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y %h:%i %p\') as "time_forms_date_to", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", ww_time_forms.form_status_id as "time_forms_form_status_id", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y\') as "time_forms_date_to", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", ww_time_forms_date.shift_id as "time_forms_date_shift_id", ww_time_forms_date.shift_to as "time_forms_date_shift_to", ww_time_forms.form_status_id as "time_forms_form_status_id", if(`ww_time_forms_date`.`duration_id` = 1, "AM", "PM") as "time_forms_date_type", `ww_time_forms`.`created_on` as "time_forms_created_on", if(`ww_time_forms`.`date_sent` = "0000-00-00 00:00:00", `ww_time_forms`.`created_on`, `ww_time_forms`.`date_sent`) as "time_forms_date_sent", `ww_time_forms`.`created_by` as "time_forms_created_by", `ww_time_forms`.`modified_on` as "time_forms_modified_on", `ww_time_forms`.`modified_by` as "time_forms_modified_by", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y\') as "time_forms_date_to", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", ww_time_forms.form_status_id as "time_forms_form_status_id", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y\') as "time_forms_date_to", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", ww_time_forms.form_status_id as "time_forms_form_status_id", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y\') as "time_forms_date_to", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", ww_time_forms.form_status_id as "time_forms_form_status_id", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y\') as "time_forms_date_to", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", ww_time_forms.form_status_id as "time_forms_form_status_id", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y\') as "time_forms_date_to", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", ww_time_forms_maternity.delivery_id as "time_forms_maternity_delivery_id", ww_time_forms_maternity.pregnancy_no as "time_forms_maternity_pregnancy_no", DATE_FORMAT(ww_time_forms_maternity.expected_date, \'%M %d, %Y\') as "time_forms_maternity_expected_date", DATE_FORMAT(ww_time_forms_maternity.actual_date, \'%M %d, %Y\') as "time_forms_maternity_actual_date", DATE_FORMAT(ww_time_forms_maternity.return_date, \'%M %d, %Y\') as "time_forms_maternity_return_date", ww_time_forms.form_status_id as "time_forms_form_status_id", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y\') as "time_forms_date_to", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", DATE_FORMAT(ww_time_forms_maternity.actual_date, \'%M %d, %Y\') as "time_forms_maternity_actual_date", ww_time_forms.form_status_id as "time_forms_form_status_id", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y\') as "time_forms_date_to", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", ww_time_forms.form_status_id as "time_forms_form_status_id", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y\') as "time_forms_date_to", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", ww_time_forms.form_status_id as "time_forms_form_status_id", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y\') as "time_forms_date_to", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", ww_time_forms.form_status_id as "time_forms_form_status_id", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y %h:%i %p\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y %h:%i %p\') as "time_forms_date_to", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", ww_time_forms_obt.location as "time_forms_obt_location", ww_time_forms_obt.company_to_visit as "time_forms_obt_company_to_visit", ww_time_forms_obt.name as "time_forms_obt_name", ww_time_forms_obt.position as "time_forms_obt_position", ww_time_forms_obt.contact_no as "time_forms_obt_contact_no", ww_time_forms.form_status_id as "time_forms_form_status_id", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y %h:%i %p\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y %h:%i %p\') as "time_forms_date_to", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", ww_time_forms.form_status_id as "time_forms_form_status_id", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y\') as "time_forms_date_to", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", ww_time_forms.form_status_id as "time_forms_form_status_id", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y %h:%i %p\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y %h:%i %p\') as "time_forms_date_to", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", ww_time_forms.form_status_id as "time_forms_form_status_id", DATE_FORMAT(ww_time_forms.date_from, \'%M %d, %Y\') as "time_forms_date_from", DATE_FORMAT(ww_time_forms.date_to, \'%M %d, %Y\') as "time_forms_date_to", ww_time_forms.date_declined as "time_forms_date_declined", ww_time_forms.reason as "time_forms_reason", ww_time_forms_upload.upload_id as "time_forms_upload_upload_id", ww_time_forms_date.shift_id as "time_forms_date_shift_id", ww_time_forms_date.shift_to as "time_forms_date_shift_to", `ww_time_forms`.`scheduled` as "time_forms_scheduled", ww_time_forms.form_status_id as "time_forms_form_status_id", ww_time_forms_approver.display_name as "time_forms_appover"
FROM (`ww_time_forms`)
LEFT JOIN `ww_time_forms_approver` ON `ww_time_forms_approver`.`forms_id` = `ww_time_forms`.`forms_id`
LEFT JOIN `ww_time_forms_upload` ON `ww_time_forms_upload`.`forms_id` = `ww_time_forms`.`forms_id`
LEFT JOIN `ww_time_forms_maternity` ON `ww_time_forms_maternity`.`forms_id` = `ww_time_forms`.`forms_id`
LEFT JOIN `ww_time_forms_obt` ON `ww_time_forms_obt`.`forms_id` = `ww_time_forms`.`forms_id`
LEFT JOIN `ww_time_forms_date` ON `ww_time_forms_date`.`forms_id` = `ww_time_forms`.`forms_id`
WHERE `ww_time_forms`.`forms_id` = "{$record_id}"'; 