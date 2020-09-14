@extends('layouts.master')

@section('page_styles')
	@parent
	
	<style>
		.popover {min-width: 400px !important;}
    </style>    
    
@stop
@section('theme_styles')
	@parent
	<!-- <link href="< ?php echo theme_path(); ?>plugins/select2/select2.css" rel="stylesheet" type="text/css"/> -->
	<link href="{{ theme_path() }}plugins/select2/select2_metro.css" rel="stylesheet" type="text/css"/>
	<link href="{{ theme_path() }}plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css"/>
	<link href="{{ theme_path() }}plugins/bootstrap-datetimepicker/css/datetimepicker.css" rel="stylesheet" type="text/css"/>
	<link type="text/css" rel="stylesheet" href="{{ theme_path() }}plugins/bootstrap-timepicker/compiled/timepicker.css">
@stop
@section('page_content')
	@parent

	<div class="row">

	    <div class="col-md-12">

	        <!-- Listing -->
	        <div class="portlet" id="list">

	            <div class="breadcrumb hidden-lg hidden-md hidden-sm hidden-xs">
	                <div class="block input-icon right">
	                    <i class="fa fa-search"></i>
	                    <input type="text" placeholder="Search..." class="form-control">
	                </div>
	            </div>
				<div class="portlet-body">
					<div >
						<ul class="nav nav-tabs ">
							@if ($permission_tr_personal)
								<li class=""><a href="{{ get_mod_route('timerecord') }}">{{ lang('common.personal') }}</a></li>
								<li class="active"><a href="{{ get_mod_route('timerecord') }}/updating">Updating</a></li>
							@endif
							@if ($permission_tr_manage)
								<li class=""><a href="{{ get_mod_route('timerecord_manage') }}">{{ lang('common.manage') }}</a></li>
							@endif
						</ul>
					</div>
				</div>
				@if(isset($partners))
				<div class="portlet-body">
					<ul class="nav nav-pills margin-top-25" >
						<li class="active">
							<a href="{{ get_mod_route('timerecord') }}/updating" id="tab_personal">
							<i class="fa fa-user"></i>&nbsp;Personal</a>
						</li>
						<li class="">
							<a href="{{ get_mod_route('timerecord') }}/updating/manage" id="tab_by_employee">
							<i class="fa fa-user"></i>&nbsp;By Employee</a>
						</li>
					</ul>
				</div>
				@endif
					<form class="form-horizontal">
				        <div class="margin-top-25 col-md-4">
				               <div class="input-group">
				                    <span class="input-group-addon">
				                    <i class="fa fa-list"></i>
				                    </span>
				               		<select id="pay_dates" class="form-control select2me col-md-4" data-placeholder="Select Period..." name="pay_dates">
				               			{{ $ppf }}
				               		</select>
				               		<input type="hidden" id="pay_date_name" name="pay_date_name" value="">
				               		<input type="hidden" class="dontserializeme" id="type" value="updating" >
				               </div>
				        </div>
				        <input type="hidden" name="forms_id" id="forms_id">
				        <input type="hidden" name="user_id" id="user_id" value="{{ $user_id }}">
				        <br><br><br><br>
				        <div class="portlet-body margin-top-25">
				        	<!-- Table -->
				                <div  class="text-center" style="display: none;" id="loader">
								    <img src="{{ theme_path() }}img/ajax-loading.gif" alt="loading..." /> Fetching record(s)
								</div>

								<div class="well" style="display:none;">
								    <p class="bold"><i class="fa fa-exclamation-triangle"></i> No record/s found!</p>
								    <span><p class="small margin-bottom-0">No available Time Record/s.</p></span>
								</div>
								<table id="list-table-updating" class="table table-condensed table-hover" style="display: none;">
				                    <thead>
				                        <tr>
				                            <th width="1%" class="hidden-xs">
										        <span data-original-title="Schedules" data-content="List to remind you of your restdays and holidays" data-placement="right" data-trigger="hover" class="popovers">
										            <i class="fa fa-align-justify"></i>
										        </span></th>

				                            <th>{{ lang('timerecord.date') }}</th>
				                            <th>Shift</th>
				                            <th style="width: 20%">{{ lang('timerecord.in') }}</th>
				                            <th style="width: 20%">{{ lang('timerecord.out') }}</th>
				                            <th class="hidden-xs">Remarks</th>
				                        </tr>
				                    </thead>

				                    <tbody>
				                    	
				                    </tbody>
				                    <tfoot>
				                    	
				                    </tfoot>

				                </table>
				                <!-- End Table -->
				                <div class="form-actions fluid" style="display: none;" id="buttons">
								  <div align="center" class="row">
								    <div class="col-md-12">
										<div class="">
											<button onclick="save_timerecord_aux( $(this).parents('form'), 1 , 'personal')" class="btn blue btn-sm" type="button">Save as draft</button>
											<button onclick="save_timerecord_aux( $(this).parents('form'), 2 , 'personal')" class="btn green btn-sm" type="button">Submit</button>
											
										</div>
								    </div>
								  </div>
								</div>
						</div>
				    </form>
	        </div>
	    </div>

@stop


@section('view_js')
	@parent
	{{ get_list_js( $mod ) }}
	<script src="{{ theme_path() }}plugins/select2/select2.min.js" type="text/javascript" ></script>
	<script src="{{ theme_path() }}plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js" type="text/javascript" ></script>
	<script src="{{ theme_path() }}plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript" ></script>
	<script src="{{ theme_path() }}scripts/ui-extended-modals.js"></script>
	<script type="text/javascript" src="{{ theme_path() }}modules/timerecord/updating.js"></script>
@stop
