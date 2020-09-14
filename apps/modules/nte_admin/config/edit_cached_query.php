<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
$config["edit_cached_query"] = 'SELECT `ww_partners_incident`.`incident_id` as record_id, `ww_partners_incident`.`created_on` as "partners_incident.created_on", `ww_partners_incident`.`created_by` as "partners_incident.created_by", `ww_partners_incident`.`modified_on` as "partners_incident.modified_on", `ww_partners_incident`.`modified_by` as "partners_incident.modified_by", ww_partners_incident.damages as "partners_incident.damages", ww_partners_incident.violation_details as "partners_incident.violation_details", ww_partners_incident.location as "partners_incident.location", ww_partners_incident.witnesses as "partners_incident.witnesses", ww_partners_incident.attachments as "partners_incident.attachments", ww_partners_incident.date_time_of_offense as "partners_incident.date_time_of_offense", ww_partners_incident.complainants as "partners_incident.complainants", ww_partners_incident.offense_id as "partners_incident.offense_id", ww_partners_incident.involved_partners as "partners_incident.involved_partners"
, ww_partners_incident.incident_status_id AS incident_status_id
FROM (`ww_partners_incident`)
WHERE `ww_partners_incident`.`incident_id` = "{$record_id}"';