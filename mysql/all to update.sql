insert into `ww_partners_key` (`key_id`, `key_code`, `key_label`, `key_class_id`, `key_type_id`, `deleted`) values('206','regularization_date','Regularization Date','89','0','0');
insert into `ww_partners_key` (`key_id`, `key_code`, `key_label`, `key_class_id`, `key_type_id`, `deleted`) values('207','bank_account_number_savings','Bank Account Number Savings','90','0','0');
insert into `ww_partners_key` (`key_id`, `key_code`, `key_label`, `key_class_id`, `key_type_id`, `deleted`) values('208','bank_account_number_current','Bank Account Number Current','91','0','0');

insert into `ww_partners_key_class` (`key_class_id`, `key_class_code`, `key_class`, `user_view`, `user_edit`, `for_approval`, `sort_order`, `deleted`) values('89','regularization_date','Regularization Date','1','0','0','1','0');
insert into `ww_partners_key_class` (`key_class_id`, `key_class_code`, `key_class`, `user_view`, `user_edit`, `for_approval`, `sort_order`, `deleted`) values('90','bank_account_number_savings','Bank Account Number Savings','1','0','0','1','0');
insert into `ww_partners_key_class` (`key_class_id`, `key_class_code`, `key_class`, `user_view`, `user_edit`, `for_approval`, `sort_order`, `deleted`) values('91','bank_account_number_current','Bank Account Number Current','1','0','0','1','0');

insert into `ww_menu` (`menu_item_id`, `parent_menu_item_id`, `sequence`, `label`, `icon`, `description`, `menu_item_type_id`, `mod_id`, `uri`, `method`, `created_on`, `created_by`, `modified_on`, `modified_by`, `can_delete`, `deleted`) values('127','120','1','Scheduler','','','1','252','','','2017-03-15 11:45:37','1',NULL,'0','1','0');

-- insert into `ww_approver_class` (`class_id`, `class_code`, `class`, `category`, `deleted`) values('37','LIP','Leave Incentive Program','Time Records','0');
-- insert into `ww_approver_class` (`class_id`, `class_code`, `class`, `category`, `deleted`) values('38','HL','Home Leave','Time Records','0');
-- insert into `ww_approver_class` (`class_id`, `class_code`, `class`, `category`, `deleted`) values('39','FLV','Force Leave','Time Records','0');

ALTER TABLE ww_time_form_balance_setup_policy ADD COLUMN company_id INT(11) NOT NULL after policy_id;

CREATE TABLE `ww_scheduler` (
  `scheduler_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) DEFAULT NULL,
  `sp_function` varchar(150) DEFAULT NULL,
  `description` text,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` date DEFAULT NULL,
  `deleted` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`scheduler_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;