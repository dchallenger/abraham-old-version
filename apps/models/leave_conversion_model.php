<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if ( !class_exists('Record') )
{
	require __DIR__ . '/record.php';
}

class leave_conversion_model extends Record
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
		$this->mod_id = 226;
		$this->mod_code = 'leave_conversion';
		$this->route = 'leave_conversion';
		$this->url = site_url('leave_conversion');
		$this->primary_key = 'leave_conversion_id';
		$this->table = 'payroll_leave_conversion';
		$this->icon = '';
		$this->short_name = 'Leave Conversion';
		$this->long_name  = 'Leave Conversion';
		$this->description = 'Maintenance of Leave Conversion';
		$this->path = APPPATH . 'modules/leave_conversion/';

		parent::__construct();
	}

	function _get_list($start, $limit, $search, $filter, $trash = false)
	{
		$data = array();				
		
		$qry = $this->_get_list_cached_query();
		
		if( $trash )
		{
			$qry .= " AND {$this->db->dbprefix}{$this->table}.deleted = 1";
		}
		else{
			$qry .= " AND {$this->db->dbprefix}{$this->table}.deleted = 0";	
		}
		
		$qry .= " GROUP BY {$this->db->dbprefix}{$this->table}.leave_conversion_id";	

		$qry .= ' '. $filter;
		$qry .= " LIMIT $limit OFFSET $start";

		$this->load->library('parser');
		$this->parser->set_delimiters('{$', '}');
		$qry = $this->parser->parse_string($qry, array('search' => $search), TRUE);

		$result = $this->db->query( $qry );
		if($result->num_rows() > 0)
		{			
			foreach($result->result_array() as $row){
				$data[] = $row;
			}
		}
		return $data;
	}	
}