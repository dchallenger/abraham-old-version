@extends('layouts/master')

@section('page_styles')
	@parent
	@include('edit/page_styles')
	<link type="text/css" rel="stylesheet" href="{{ theme_path() }}plugins/bootstrap-timepicker/compiled/timepicker.css">
	<link href="{{ theme_path() }}plugins/bootstrap-switch/static/stylesheets/bootstrap-switch-metro.css" type="text/css" rel="stylesheet">
@stop

@section('page-header')
	
	<div class="row">
	<div class="col-md-12">
		<!-- BEGIN PAGE TITLE & BREADCRUMB-->
		<h3 class="page-title">
			{{ $mod->long_name }} <small>{{ $mod->description }}</small>
		</h3>
		<ul class="page-breadcrumb breadcrumb">
			<li class="btn-group">
				<a href="{{ $back_url }}"><button class="btn blue" type="button">
				<span>{{ lang('form_application.back') }}</span>
				</button></a>
			</li>
			<li>
				<i class="fa fa-home"></i>
				<a href="{{ base_url('') }}">{{ lang('form_application.home') }}</a> 
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<!-- jlm i class="fa {{ $mod->icon }}"></i -->
				<a href="{{ $mod->url }}">{{ $mod->long_name }}</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>{{ ucwords( $mod->method )}}</li>
		</ul>
		<!-- END PAGE TITLE & BREADCRUMB-->
	</div>
</div>

@stop

@section('page_content')
	@parent

	<div class="row">
        <div class="col-md-9">
			<form class="form-horizontal" action="<?php echo $url?>/save_form">
				<input type="hidden" id="record_id" name="record_id" value="{{ $record_id }}">
				<input type="hidden" id="form_id" name="form_id" value="{{ $form_id }}">
				<input type="hidden" name="forms_title" id="forms_title" value="{{ $form_title }}">
				<input type="hidden" name="form_code" id="form_code" value="{{ $form_code }}">
				<input type="hidden" name="view" id="view" value="edit" >

				
				<div class="portlet">
					<div class="portlet-title">
						<div class="caption">{{ $form_title }}</div>
						<div class="tools"><a class="collapse" href="javascript:;"></a></div>
					</div>
					<div class="portlet-body form">						
							<div class="form-group">
								<label class="control-label col-md-4"><?=lang('form_application.type')?><span class="required">*</span></label>
								<div class="col-md-6">
									<div class="make-switch" data-on-label="&nbsp;In&nbsp;" data-off-label="&nbsp;Out&nbsp;">
										<input type="checkbox" value="0" <?php echo ($ut_type == 1) ? "checked" : ""; ?> class="toggle" id="ut_type-temp" name="ut_type-temp" class="dontserializeme toggle" />
										<input type="hidden" value="<?php echo ($ut_type == 1) ? 1: 0; ?>" checked class="toggle" id="ut_type" name="ut_type"/>
									</div>
									<div class="help-block small">
										<?=lang('form_application.select_inout')?>
									</div>
								</div>
							</div>  
							<div class="form-group">
								<label class="control-label col-md-4">{{ lang('form_application.ut_date') }}<span class="required">* </span></label>
								<div class="col-md-6">							
									<div class="input-group date date-picker" data-date-format="MM dd, yyyy">                                       
											<input type="text" size="16" class="form-control" name="time_forms[focus_date]" id="time_forms-focus_date" value="{{ $focus_date['val'] }}" />
											<span class="input-group-btn">
												<button class="btn default date-set" type="button"><i class="fa fa-calendar"></i></button>
											</span>
									</div> 				
								</div>	
							</div>	

							<div class="form-group">
								<label class="control-label col-md-4">{{ lang('form_application.date_time') }}<span class="required">* </span></label>
								<div class="col-md-6">							
									<div class="input-group date form_datetime" data-date-format="MM dd, yyyy - HH:ii p">
										<input type="text" class="form-control" name="ut_time_in_out" id="ut_time_in_out" value="<?php echo $ut_time_in_out; ?>" placeholder="">
										<span class="input-group-btn">
											<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
										</span>
									</div> 				
									<div class="help-block small">
										{{ lang('form_application.select_date_time') }}
									</div>
								</div>	
							</div>			


							<div class="form-group">
								<label class="control-label col-md-4">{{ lang('form_application.reason') }}<span class="required">* </span></label>
								<div class="col-md-6">							<textarea class="form-control" name="time_forms[reason]" id="time_forms-reason" placeholder="" rows="4">{{ $record['time_forms.reason'] }}</textarea> 				</div>	
							</div>			



							<div class="form-group">
								<label class="control-label col-md-4">{{ lang('form_application.file_upload') }}</label>
								<div class="col-md-6">							<div data-provides="fileupload" class="fileupload fileupload-new" id="time_forms_upload-upload_id-container">
				                                <input type="hidden" name="time_forms_upload[upload_id]" id="time_forms_upload-upload_id" value="<?php echo implode(",", $upload_id['val']) ?>"/>
				                                <span class="btn default btn-sm btn-file">
				                                <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select</span>
				                                <input type="file" id="time_forms_upload-upload_id-fileupload" type="file" name="files[]" multiple="">
				                                </span>
				                                <ul class="padding-none margin-top-10">
				                                <?php 
													implode($upload_id['val']);
														if( count($upload_id['val']) > 0 ) {
															// $upload_ids =  explode(',', $upload_id['val']);
															// print_r($upload_id['val']);
															foreach( $upload_id['val'] as $upload_id_val )
															{
																$upload = $db->get_where('system_uploads', array('upload_id' => $upload_id_val))->row();
																$file = FCPATH . urldecode( $upload->upload_path );
																if( file_exists( $file ) )
																{
																	$f_info = get_file_info( $file );
																	$f_type = filetype( $file );

																	$finfo = finfo_open(FILEINFO_MIME_TYPE);
																	$f_type = finfo_file($finfo, $file);

																	switch( $f_type )
																	{
																		case 'image/jpeg':
																			$icon = 'fa-picture-o';
																			break;
																		case 'video/mp4':
																			$icon = 'fa-film';
																			break;
																		case 'audio/mpeg':
																			$icon = 'fa-volume-up';
																			break;
																		default:
																			$icon = 'fa-file-text-o';
																	}
																	$filepath = base_url()."time/application/download_file/".$upload_id_val;
																	echo '<li class="padding-3 fileupload-delete-'.$upload_id_val.'" style="list-style:none;">
															            <a href="'.$filepath.'">
																		<span class="padding-right-5"><i class="fa '. $icon .' text-muted padding-right-5"></i></span>
															            <span>'. basename($f_info['name']) .'</span>
															            <span class="padding-left-10"><a style="float: none;" data-dismiss="fileupload" class="close fileupload-delete" upload_id="'.$upload_id_val.'" href="javascript:void(0)"></a></span>
															        </a></li>';
																}
															}
														}
													?>
				                                </ul>
				                            </div> 	
				                            <div class="help-block small">
												{{ lang('form_application.supp_docs') }}
											</div>				
				                        </div>	
							</div>	

	<?php
					if(in_array($form_status_id['val'], array(2,3,6)) && $within_cutoff){ 
		?>
		<hr />

		<div class="form-group">
			<label class="control-label col-md-4">{{ lang('form_application.remarks') }}<span class="required">* </span></label>
			<div class="col-md-6">							
				<textarea class="form-control" name="cancelled_comment" id="cancelled_comment" placeholder="" rows="4"></textarea> 				
				<label class="control-label col-md-7 text-muted small"> {{ lang('form_application.required_cancel') }}</label>
			</div>	
		</div>	

		<?php
	}
	?>

						</div>
				</div>
				<div name="change_options" id="change_options">
								</div>



				<div class="form-actions fluid" align="center">
				  <div class="row">
				    <div class="col-md-12">
				      <div>
						<?php 
							if( $form_status_id['val'] < 7 || empty($form_status_id['val']) ){ 
								if($form_status_id['val'] == 1 || empty($form_status_id['val'])){ ?>
									<button type="button" class="btn blue btn-sm" onclick="save_form( $(this).parents('form'), 1 )">{{ lang('form_application.save_draft') }}</button>
									<button type="button" class="btn green btn-sm" onclick="save_form( $(this).parents('form'), 2 )">{{ lang('form_application.submit') }}</button>
						<?php 	
								}elseif($form_status_id['val'] < 3 ){ 
						?>
									<button type="button" class="btn green btn-sm" onclick="save_form( $(this).parents('form'), 2 )">{{ lang('form_application.submit') }}</button>
									<button type="button" class="btn red btn-sm" onclick="save_form( $(this).parents('form'), 8 )">{{ lang('form_application.cancel_app') }}</button>	
							<?php 
								}elseif(in_array($form_status_id['val'], array(2,3,6)) && $within_cutoff){
						?>
									<button type="button" class="btn red btn-sm" onclick="save_form( $(this).parents('form'), 8 )">{{ lang('form_application.cancel_app') }}</button>	
						<?php 
								} 
							}
						?>
				        <a href="<?php echo $back_url;?>" class="btn default btn-sm">{{ lang('form_application.back') }}</a>
				      </div>
				    </div>
				  </div>
				</div>




			</form>
       	</div>  
    	<div class="col-md-3 visible-lg visible-md">
			<div class="portlet">
				<div class="portlet-body">
					<div class="clearfix">
						<div class="panel panel-success">
							<!-- Default panel contents -->
							<div class="panel-heading">
								<h4 class="panel-title">{{ lang('form_application.shift_details') }}</h4>
							</div>
							
							<!-- Table -->
								<table class="table">
									<thead>
										<tr>
											<th class="small">{{ lang('form_application.shift') }}</th>
											<th class="small">{{ lang('form_application.schedule') }}</th>
											<th class="small">{{ lang('form_application.logs') }}</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="small">{{ lang('form_application.time_in') }}</td>
											<td class="small text-info" id="shift_time_start" name="shift_time_start"><?php echo array_key_exists('shift_time_start', $shift_details) ? date("g:ia", strtotime($shift_details['shift_time_start'])) : '-'; ?></td>
											<td class="small text-info" id="logs_time_in" name="logs_time_in"><?php echo array_key_exists('logs_time_in', $shift_details) ? $shift_details['logs_time_in'] != '-' ? date("g:ia", strtotime($shift_details['logs_time_in'])) : '-' : '-'; ?></td>
										</tr>
										<tr>
											<td class="small">{{ lang('form_application.time_out') }}</td>
											<td class="small text-info" id="shift_time_end" name="shift_time_end"><?php echo array_key_exists('shift_time_end', $shift_details) ? date("g:ia", strtotime(date("Y-m-d")." ".$shift_details['shift_time_end'])) : "-"; ?></td>
											<td class="small text-info" id="logs_time_out" name="logs_time_out"><?php echo array_key_exists('logs_time_out', $shift_details) ? $shift_details['logs_time_out'] != '-' ? date("g:ia", strtotime($shift_details['logs_time_out'])) : '-' : '-'; ?></td>
										</tr>
									</tbody>
								</table>
						</div>
					</div>

					<div class="clearfix">
						<div class="panel panel-success">
							<div class="panel-heading">
								<h4 class="panel-title">{{ lang('form_application.approvers') }}</h4>
							</div>

							<ul class="list-group">
								<?php foreach($approver_list as $index => $value){ ?>
									<li class="list-group-item"><?=$value['lastname'].', '.$value['firstname']?><br><small class="text-muted"><?=$value['position']?></small> </li>
								<?php } ?>
							</ul>
						</div>
					</div> 
			
				</div>
			</div>
		</div>		
	</div>
@stop

@section('page_plugins')
	@parent
	@include('edit/page_plugins')
@stop

@section('page_scripts')
	@parent
	<script src="{{ theme_path() }}scripts/form-components.js"></script> 
	<script type="text/javascript" src="{{ theme_path() }}modules/common/edit.js"></script> 
	<script type="text/javascript" src="{{ theme_path() }}plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
@stop

@section('view_js')
	@parent
	<script>
	$(document).ready(function(){

		check_ut_type($('#ut_type').val());

	  	$("#time_forms-date_from").change(function(){
		  	$("#time_forms-date_to").val($("#time_forms-date_from").val());
		  	if($(this).val() != "" && $("#time_forms-date_to").val() != ""){
		  		get_shift_details($(this).val(), $("#time_forms-date_to").val(), 10, 1, $('#ut_type').val());
	  		}
		});

	  	$("#time_forms-date_to").change(function(){		  		
	  		$("#time_forms-date_from").val($("#time_forms-date_to").val());
		  	if($(this).val() != "" && $("#time_forms-date_from").val() != ""){
		  		get_shift_details($("#time_forms-date_from").val(), $(this).val(), 10, 2, $('#ut_type').val());
	  		}
		});

	  	$("#ut_time_in_out").change(function(){		  		
		  	if($(this).val() != ""){
		  		get_shift_details($("#ut_time_in_out").val(), $(this).val(), 10, 2, $('#ut_type').val());
	  		}
		});

		$('#ut_type-temp').change(function(){
			if( $(this).is(':checked') ){
				$('#ut_type').val('1');
				check_ut_type(1);
			}else{
				$('#ut_type').val('0');
				check_ut_type(0);
			}
		  	if($("#date_from").val() != "" && $("#date_to").val() != ""){
	  			get_shift_details($("#ut_time_in_out").val(), $("#ut_time_in_out").val(), 10, 1, $('#ut_type').val());
	  		}
		});		

	});


	function check_ut_type(ut_type){

		$('.modal-title').html('Undertime Form');
		$('#time_forms-date_from').parent().parent().parent().hide();
		$('#time_forms-date_to').parent().parent().parent().show();
		$('#time_forms-date_from').val($('#date_to').val());

  	}
	</script>
	{{ get_edit_js( $mod ) }}
@stop
