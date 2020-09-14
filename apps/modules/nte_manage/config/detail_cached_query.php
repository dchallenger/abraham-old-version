<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
$config["detail_cached_query"] = ' SELECT ww_partners_incident.*, ww_partners_incident.incident_id as record_id, partnerso.offense, partnersis.incident_status, ww_partners_incident_nte.nte_status_id 

FROM (`ww_partners_incident`)
LEFT JOIN ww_partners_offense partnerso ON ww_partners_incident.offense_id = partnerso.offense_id 
LEFT JOIN ww_partners_incident_status partnersis ON ww_partners_incident.incident_status_id = partnersis.incident_status_id 
INNER JOIN ww_partners_incident_nte ON ww_partners_incident_nte.incident_id = ww_partners_incident.incident_id      
WHERE `ww_partners_incident`.`incident_id` = "{$record_id}"';