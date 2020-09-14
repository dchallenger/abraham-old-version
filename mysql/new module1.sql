/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.1.41 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `` (
	`mod_id` int ,
	`mod_code` varchar ,
	`route` varchar ,
	`table` varchar ,
	`primary_key` varchar ,
	`enable_mass_action` tinyint ,
	`short_name` varchar ,
	`long_name` varchar ,
	`icon` varchar ,
	`disabled` tinyint ,
	`wizard_on_new` tinyint ,
	`description` text (196605),
	`list_template_header` text (196605),
	`list_template` text (196605),
	`sensitivity_filter` tinyint ,
	`fg_id` int ,
	`f_id` int ,
	`parent_group` varchar ,
	`sub_group` varchar ,
	`created_on` timestamp ,
	`created_by` int ,
	`modified_on` datetime ,
	`modified_by` int ,
	`deleted` tinyint 
); 
insert into `` (`mod_id`, `mod_code`, `route`, `table`, `primary_key`, `enable_mass_action`, `short_name`, `long_name`, `icon`, `disabled`, `wizard_on_new`, `description`, `list_template_header`, `list_template`, `sensitivity_filter`, `fg_id`, `f_id`, `parent_group`, `sub_group`, `created_on`, `created_by`, `modified_on`, `modified_by`, `deleted`) values('253','coordinator','admin/time/coordinator','users_coordinator','coordinator_id','1','Coordinator','Coordinator','','0','0','','<th width=\"33%\">Company</th>\r\n<th width=\"33%\">Branch</th>\r\n<th width=\"34%\">Corodinator</th>','<tr class=\"record\">\r\n    <td class=\"hidden-xs\">\r\n</td>\r\n</tr>','0','1','1','','','2017-04-11 13:05:29','1','2017-04-11 21:10:39','1','0');
insert into `` (`mod_id`, `mod_code`, `route`, `table`, `primary_key`, `enable_mass_action`, `short_name`, `long_name`, `icon`, `disabled`, `wizard_on_new`, `description`, `list_template_header`, `list_template`, `sensitivity_filter`, `fg_id`, `f_id`, `parent_group`, `sub_group`, `created_on`, `created_by`, `modified_on`, `modified_by`, `deleted`) values('254','offense_category','admin/offense_category','partners_offense_category','offense_category_id','1','Offense Category','Offense Category','fa-th-list','0','0','Manage and list offense category','<th width=\"8%\" class=\"hidden-xs\"></th>\r\n<th width=\"35%\">Offense Category</th>\r\n<th width=\"35%\">Description</th>','<tr class=\"record\">\r\n    <td>\r\n        <div>\r\n            <input type=\"checkbox\" class=\"record-checker checkboxes\" value=\"<?php echo $record_id; ?>\" />\r\n        </div>\r\n    </td>\r\n    <td>\r\n        \r\n    </td>\r\n    <td>\r\n        \r\n    </td>\r\n    <td>\r\n        <div class=\"btn-group\">\r\n            <a class=\"btn btn-xs text-muted\" href=\"{{ $edit_url }}\"><i class=\"fa fa-pencil\"></i> Edit</a>\r\n        </div>\r\n        <div class=\"btn-group\">\r\n            <a class=\"btn btn-xs text-muted\" href=\"#\" data-close-others=\"true\" data-toggle=\"dropdown\"><i class=\"fa fa-gear\"></i> Options</a>\r\n            <ul class=\"dropdown-menu pull-right\">\r\n                {{ $options }}\r\n            </ul>\r\n        </div>\r\n    </td>\r\n</tr>','0','1','2','','','2017-04-15 06:10:17','1','2017-04-15 14:16:15','1','0');
insert into `` (`mod_id`, `mod_code`, `route`, `table`, `primary_key`, `enable_mass_action`, `short_name`, `long_name`, `icon`, `disabled`, `wizard_on_new`, `description`, `list_template_header`, `list_template`, `sensitivity_filter`, `fg_id`, `f_id`, `parent_group`, `sub_group`, `created_on`, `created_by`, `modified_on`, `modified_by`, `deleted`) values('255','offense_level','admin/offense_level','partners_offense_level','offense_level_id','1','Offense level','Offense level','fa-th-list','0','0','Manage and list offense level','<th width=\"45%\">Offense Level</th>\r\n<th width=\"45%\">Description</th>','<tr class=\"record\">\r\n    <td>\r\n        <div>\r\n            <input type=\"checkbox\" class=\"record-checker checkboxes\" value=\"<?php echo $record_id; ?>\" />\r\n        </div>\r\n    </td>\r\n    <td>\r\n        {{ $partners_offense_level_offense_level }}\r\n    </td>\r\n    <td>\r\n        {{ $partners_offense_level_description }}\r\n    </td>\r\n    <td>\r\n        <div class=\"btn-group\">\r\n            <a class=\"btn btn-xs text-muted\" href=\"{{ $edit_url }}\"><i class=\"fa fa-pencil\"></i> Edit</a>\r\n        </div>\r\n        <div class=\"btn-group\">\r\n            <a class=\"btn btn-xs text-muted\" href=\"#\" data-close-others=\"true\" data-toggle=\"dropdown\"><i class=\"fa fa-gear\"></i> Options</a>\r\n            <ul class=\"dropdown-menu pull-right\">\r\n                {{ $options }}\r\n            </ul>\r\n        </div>\r\n    </td>\r\n</tr>','0','1','2','','','2017-04-15 06:55:29','1','2017-04-15 15:02:19','1','0');
insert into `` (`mod_id`, `mod_code`, `route`, `table`, `primary_key`, `enable_mass_action`, `short_name`, `long_name`, `icon`, `disabled`, `wizard_on_new`, `description`, `list_template_header`, `list_template`, `sensitivity_filter`, `fg_id`, `f_id`, `parent_group`, `sub_group`, `created_on`, `created_by`, `modified_on`, `modified_by`, `deleted`) values('256','offense_sanction_category','admin/offense_sanction_category','partners_offense_sanction_category','offense_sanction_category_id','1','Offense Sanction Category','Offense Sanction Category','fa-th-list','0','0','Manage and list offense category','<th width=\"40%\">Offense Category</th>\r\n<th width=\"40%\">Description</th>','<tr class=\"record\">\r\n    <td>\r\n        <div>\r\n            <input type=\"checkbox\" class=\"record-checker checkboxes\" value=\"<?php echo $record_id; ?>\" />\r\n        </div>\r\n    </td>\r\n    <td>\r\n        {{ $partners_offense_sanction_category_offense_sanction_category }}\r\n    </td>\r\n    <td>\r\n        {{ $partners_offense_sanction_category_description }}\r\n    </td>\r\n    <td>\r\n        <div class=\"btn-group\">\r\n            <a class=\"btn btn-xs text-muted\" href=\"{{ $edit_url }}\"><i class=\"fa fa-pencil\"></i> Edit</a>\r\n        </div>\r\n        <div class=\"btn-group\">\r\n            <a class=\"btn btn-xs text-muted\" href=\"#\" data-close-others=\"true\" data-toggle=\"dropdown\"><i class=\"fa fa-gear\"></i> Options</a>\r\n            <ul class=\"dropdown-menu pull-right\">\r\n                {{ $options }}\r\n            </ul>\r\n        </div>\r\n    </td>\r\n</tr>','0','1','2','','','2017-04-15 07:14:42','1','2017-04-15 15:20:22','1','0');
