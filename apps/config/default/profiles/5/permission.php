<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$permission = array();
$permission['work_calendar']['list'] = 1;
$permission['work_calendar']['detail'] = 1;
$permission['work_calendar']['add'] = 1;
$permission['work_calendar']['edit'] = 1;
$permission['work_calendar']['delete'] = 1;
$permission['dtr_processing']['list'] = 1;
$permission['dtr_processing']['detail'] = 1;
$permission['dtr_processing']['add'] = 1;
$permission['dtr_processing']['edit'] = 1;
$permission['dtr_processing']['process'] = 1;
$permission['signatories']['list'] = 1;
$permission['signatories']['detail'] = 1;
$permission['signatories']['add'] = 1;
$permission['signatories']['edit'] = 1;
$permission['signatories']['delete'] = 1;
$permission['holiday']['list'] = 1;
$permission['holiday']['detail'] = 1;
$permission['holiday']['add'] = 1;
$permission['holiday']['edit'] = 1;
$permission['holiday']['delete'] = 1;
$permission['shift']['list'] = 1;
$permission['shift']['detail'] = 1;
$permission['shift']['add'] = 1;
$permission['shift']['edit'] = 1;
$permission['shift']['delete'] = 1;
$permission['weeklyshift']['list'] = 1;
$permission['weeklyshift']['detail'] = 1;
$permission['weeklyshift']['add'] = 1;
$permission['weeklyshift']['edit'] = 1;
$permission['weeklyshift']['delete'] = 1;
$permission['partners']['list'] = 1;
$permission['partners']['detail'] = 1;
$permission['partners']['edit'] = 1;
$permission['admin_timerecord']['list'] = 1;
$permission['admin_timerecord']['detail'] = 1;
$permission['form_policy']['list'] = 1;
$permission['form_policy']['detail'] = 1;
$permission['memo']['list'] = 1;
$permission['memo']['detail'] = 1;
$permission['form_application_admin']['list'] = 1;
$permission['form_application_admin']['detail'] = 1;
$permission['time_reference']['list'] = 1;
$permission['time_reference']['detail'] = 1;
$permission['time_reference']['add'] = 1;
$permission['time_reference']['edit'] = 1;
$permission['time_reference']['delete'] = 1;
$permission['shift_class']['list'] = 1;
$permission['shift_class']['detail'] = 1;
$permission['shift_class']['add'] = 1;
$permission['shift_class']['edit'] = 1;
$permission['shift_class']['delete'] = 1;
$permission['leave_balance_admin']['list'] = 1;
$permission['leave_balance_admin']['detail'] = 1;
$permission['leave_balance_admin']['add'] = 1;
$permission['leave_balance_admin']['edit'] = 1;
$permission['report_generator']['list'] = 1;
$permission['report_generator']['detail'] = 1;
$permission['report_generator']['add'] = 1;
$permission['report_generator']['edit'] = 1;
$permission['report_generator']['generate'] = 1;
$permission['dtr_summary']['list'] = 1;
$permission['dtr_summary']['detail'] = 1;
$permission['dtr_summary']['add'] = 1;
$permission['dtr_summary']['edit'] = 1;
$permission['report_result']['list'] = 1;
$permission['report_result']['detail'] = 1;
$permission['admin_overtime']['list'] = 1;
$permission['admin_overtime']['detail'] = 1;
$permission['memo_manage']['list'] = 1;
$permission['memo_manage']['detail'] = 1;
$permission['memo_manage']['add'] = 1;
$permission['memo_manage']['edit'] = 1;
$permission['memo_manage']['delete'] = 1;

$config['permission'] = $permission;