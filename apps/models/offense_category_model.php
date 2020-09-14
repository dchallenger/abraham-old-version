<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if ( !class_exists('Record') )
{
	require __DIR__ . '/record.php';
}

class offense_category_model extends Record
{
	var $mod_id;
	var $mod_code;
	var $route;
	var $url;
	var $primary_key;
	var $table;
	var $icon;
	var $short_name;
	var $long_name;
	var $description;
	var $path;

	public function __construct()
	{
		$this->mod_id = 254;
		$this->mod_code = 'offense_category';
		$this->route = 'admin/offense_category';
		$this->url = site_url('admin/offense_category');
		$this->primary_key = 'offense_category_id';
		$this->table = 'partners_offense_category';
		$this->icon = 'fa-th-list';
		$this->short_name = 'Offense Category';
		$this->long_name  = 'Offense Category';
		$this->description = 'Manage and list offense category';
		$this->path = APPPATH . 'modules/offense_category/';

		parent::__construct();
	}
}