<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$permission = array();
$permission['dashboard']['list'] = 1;
$permission['dashboard']['detail'] = 1;
$permission['my_calendar']['list'] = 1;
$permission['my_calendar']['detail'] = 1;
$permission['my_calendar']['add'] = 1;
$permission['my_calendar']['edit'] = 1;
$permission['timerecord']['list'] = 1;
$permission['timerecord']['detail'] = 1;
$permission['my201']['list'] = 1;
$permission['my201']['detail'] = 1;
$permission['birthdays']['list'] = 1;
$permission['birthdays']['detail'] = 1;
$permission['partners']['list'] = 1;
$permission['partners']['detail'] = 1;
$permission['form_application_manage']['list'] = 1;
$permission['form_application_manage']['detail'] = 1;
$permission['admin_timerecord']['list'] = 1;
$permission['admin_timerecord']['detail'] = 1;
$permission['change_request']['list'] = 1;
$permission['change_request']['detail'] = 1;
$permission['form_application_admin']['list'] = 1;
$permission['form_application_admin']['detail'] = 1;
$permission['form_application_admin']['add'] = 1;
$permission['form_application_admin']['edit'] = 1;
$permission['my_change_request']['list'] = 1;
$permission['my_change_request']['detail'] = 1;
$permission['annual_manpower_planning']['list'] = 1;
$permission['annual_manpower_planning']['detail'] = 1;
$permission['annual_manpower_planning']['add'] = 1;
$permission['annual_manpower_planning']['edit'] = 1;
$permission['applicants']['list'] = 1;
$permission['applicants']['detail'] = 1;
$permission['applicants']['add'] = 1;
$permission['applicants']['edit'] = 1;
$permission['mrf']['list'] = 1;
$permission['mrf']['detail'] = 1;
$permission['mrf']['add'] = 1;
$permission['mrf']['edit'] = 1;

$config['permission'] = $permission;