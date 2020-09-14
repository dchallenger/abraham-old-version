@extends('layouts/master')

@section('page_styles')
	@parent
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
				<a href="{{ $mod->url }}"><button class="btn blue" type="button">
				<span>{{ lang('form_application_admin.back') }}</span>
				</button></a>
			</li>
			<li>
				<i class="fa fa-home"></i>
				<a href="{{ base_url('') }}">{{ lang('form_application_admin.home') }}</a> 
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
        		<input type="hidden" name="view" id="view" value="detail" >
				<div id="vl_container" class="portlet">
						<div class="portlet-title">
							<div class="caption">{{ $form_title }} <small class="text-muted">{{ lang('form_application_admin.view') }}</small></div>
						</div>
	                    <div class="portlet-body form" id="main_form">
	                        <!-- BEGIN FORM-->
	                            <div class="form-body">
									<?php if( $record['time_forms_form_status_id'] != 1 ){ ?>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label col-md-4 col-sm-4 text-right text-muted">{{ lang('form_application_admin.date_filed') }} :</label>
												<div class="col-md-7 col-sm-7">
													<span><?php echo date('F d, Y - D',strtotime($record['time_forms_date_sent'])) ?></span>
												</div>
											</div>
										</div>
									</div>
									<?php } ?>
	                            	<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label col-md-4 col-sm-4 text-right text-muted">{{ lang('form_application_admin.type') }} :</label>
												<div class="col-md-7 col-sm-7">
													<span>
														<?php

															$dtrp_type_options = array();
															$dtrp_type_options[1] = 'Time In';
															$dtrp_type_options[2] = 'Time Out';
															$dtrp_type_options[3] = 'Time In and Time Out';

						                            		foreach($dtrp_type_options as $index => $value){
						                            			if( $dtrp_type == $index ){
						                            				echo $value;
						                            			}
						                            		}
														?>
													</span>
												</div>
											</div>
										</div>
									</div>

									<?php if( $dtrp_type == 1 || $dtrp_type == 3 ){ ?>

	                                <div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label col-md-4 col-sm-4 text-right text-muted">{{ lang('form_application_admin.from') }} :</label>
												<div class="col-md-7 col-sm-7">
													<span>{{ $date_from['val'] }}</span>
												</div>
											</div>
										</div>
									</div>

									<?php } ?>

									<?php if( $dtrp_type == 2 || $dtrp_type == 3 ){ ?>

									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label col-md-4 col-sm-4 text-right text-muted">{{ lang('form_application_admin.to') }} :</label>
												<div class="col-md-7 col-sm-7">
													<span>{{ $date_to['val'] }}</span>
												</div>
											</div>
										</div>
									</div>

									<?php } ?>

	                                <div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label col-md-4 col-sm-4 text-right text-muted">{{ lang('form_application_admin.reason') }} :</label>
												<div class="col-md-7 col-sm-7">
													<span>{{ $record['time_forms_reason'] }}</span>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
			                                <div class="form-group">
												<label class="control-label col-md-4 col-sm-4 text-right text-muted">{{ lang('form_application_admin.file_upload') }} :</label>
												<div class="controls col-md-6">
													<ul class="padding-none">

                                                    <?php 
													implode($uploads);
														if( count($uploads) > 0 ) {

															foreach( $uploads as $upload_id_val )
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
																            <span class="padding-left-10"></span>
																            </a>
															        	</li>';
																}
															}
														}
													?>


                                                </ul>
												</div>
											</div>
										</div>
									</div>
									<?php if($form_status_id['val'] == 7 || $form_status_id['val'] == 8){
										?>
									<hr />
	                                <?php 
										foreach ($disapproved_cancelled_remarks as $key => $value) :
									?>
	                                <div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label col-md-4 col-sm-4 text-right text-muted">{{ lang('form_application_admin.approver')}} :</label>
												<div class="col-md-7 col-sm-7">
													<span>{{ $value['approver_name'] }}</span>
													<br />
													<?php 
													$date = date("F d, Y H:i:s", strtotime($value['date']));
												    if(date("H:i:s", strtotime($date)) == "00:00:00"){
												       $comment_date = 'on '.date("F d, Y", strtotime($date));
												    }else{
												    	if($value['date'] == '0000-00-00 00:00:00'){
												    		$comment_date = '';
												    	} else {
												    		$comment_date = 'on '.date("F d, Y g:ia", strtotime($date));
												    	}
												    } 
													?>
													<span class="help-block small">{{ $value['form_status'] }} {{ $comment_date }}</span>
												</div>
											</div>
										</div>
									</div>
									<div class="row hidden">
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label col-md-4 col-sm-4 text-right text-muted">{{ $value['form_status'] }}date :</label>
												<div class="col-md-7 col-sm-7">
													<span>{{ date('F d, Y g:ia', strtotime($value['date'])) }}</span>
												</div>
											</div>
										</div>
									</div>
	                                <div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label col-md-4 col-sm-4 text-right text-muted">&nbsp;</label>
												<div class="col-md-7 col-sm-7">
													<span>{{ ($value['comment'] == '') ? '' : $value['comment'] }}</span>
												</div>
											</div>
										</div>
									</div>
									<?php
										endforeach;
									}
									?>
	                            </div>
	                            <div class="form-actions fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-offset-4 col-md-8">
	                                        	<a href="{{ $mod->url }}" class="btn btn-default btn-sm">{{ lang('form_application_admin.back_tolist') }}</a>
	                                        </div>
                                        </div>
                                    </div>
                                </div>
	                        <!-- END FORM--> 
	                    </div>
	            	</div>



       	</div>  
    	<div class="col-md-3 visible-lg visible-md">
			<div class="portlet">
				<div class="portlet-body">
					<div class="clearfix">
						<!-- <div class="panel panel-success">
							<div class="panel-heading">
								<h4 class="panel-title">{{ lang('form_application.shift_details') }}</h4>
							</div>
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
						</div> -->
					</div>

					<div class="clearfix">
						<div class="panel panel-success">
							<div class="panel-heading">
								<h4 class="panel-title"><?php echo $approver_title; ?></h4>
							</div>

							<ul class="list-group">
								<?php foreach($approver_list as $index => $value){ ?>
									<li class="list-group-item"><?=$value['lastname'].', '.$value['firstname']?>
										<br><small class="text-muted"><?=$value['position']?></small>
									<?php if($form_status_id['val'] > 2){ 
								            $form_style = 'info';
								            switch($value['form_status_id']){
								                case 7:
								                    $form_style = 'danger';
								                break;
								                case 6:
								                    $form_style = 'success';
								                break;
								                case 5:
								                case 4:
								                case 3:
								                case 2:
								                    $form_style = 'warning';
								                break;
								                case 1:
								                    $form_style = 'info';
								                break;
								                case 8:
								                default:
								                    $form_style = 'default';
								                break;
								            }
								        ?>
									<br><p><span class="badge badge-<?php echo $form_style ?>"><?=$value['form_status']?></span></p> </li>
								<?php }
								} ?>
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
@stop

@section('page_scripts')
	@parent
@stop

@section('view_js')
	@parent
@stop


