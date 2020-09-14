@extends('layouts.master')

@section('page_styles')
	@parent
	<link type="text/css" rel="stylesheet" href="{{ theme_path() }}plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" />
    <link type="text/css" rel="stylesheet" href="{{ theme_path() }}plugins/bootstrap-tagsinput/app.css">
    <link href="{{ theme_path() }}plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
    <link href="{{ theme_path() }}plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
	<link type="text/css" rel="stylesheet" href="{{ theme_path() }}css/style-metronic.css" />
	<link rel="stylesheet" type="text/css" href="{{ theme_path() }}plugins/select2/select2_metro.css" />
@stop
			
@section('page_content')
	@parent


	<div class="row ">

		<!-- ACTIVITY FEEDS CONTAINER-->
		<div class="col-md-7 col-sm-7">
			
			<div class="portlet">
			    <div class="portlet-title line">
			        <div class="caption">{{ lang('dashboard.activity_feed') }}</div>
			        <div class="tools" style="display: none">
			            <a href="" class="collapse"></a>
			            <a href="#portlet-config" data-toggle="modal" class="config"></a>
			            <a href="" class="reload"></a>
			        </div>
			    </div>
			    <div class="portlet-body" id="chats">

					<div class="chat-form feeds_form" style="overflow: auto;">
					    <div class="">
					        <input id="input-post-update" style="overflow: visible;" class="form-control" type="text" placeholder="{{ lang('dashboard.something_to_say') }}..." />
					        <input id="message_type" class="form-control" type="hidden" value="Comment" />
					    </div>
					    
					    <div id="feed-options" style="display: none;">
							<hr class='hr-dotted margin-bottom-top-5'>
						    <div class="margin-bottom-6">
						        <input id="feed-tags" class="form-control" name="recipients" type="text" placeholder="{{ lang('dashboard.recipient') }}" />
						    </div>
						    <div class="pull-left ">
								<div class="btn-group" data-toggle="buttons">
									<label class="btn btn-default btn-sm active">
										<input class="toggle" type="radio" name="feed-to" value="user" checked="checked">
										<i class="fa fa-user"></i>
									</label>
									<label class="btn btn-default btn-sm">
										<input class="toggle" type="radio"  name="feed-to" value="company">
										<i class="fa fa-group"></i>
									</label>
									<label class="btn btn-warning btn-sm" style="margin-left: 20px;">
										<input class="toggle feedback" type="checkbox"> 
										<i class="fa fa-star"></i> {{ lang('dashboard.feedback') }}
									</label>
								</div>
							</div>
							<div class="pull-right">
						        <div id="btn-post-update" class="btn-group ">
						        	<a class="btn btn-info text-muted btn-sm post_feeds" href="#">{{ lang('dashboard.post_status') }}</a>
									<!-- <a class="btn btn-success text-muted btn-sm" type="button" href="#">Post Feedback</a> -->
						        </div>
						    </div>
					    </div>
					</div>	
					
			        <?php
			        	$feeds = array();
			        	$total_feeds = 0;
	                    $filter_feeds_qry = "SELECT DISTINCT message_type 
	                    			FROM dashboard_feeds 
	                    			WHERE recipient_id  = '" . $current_user . "' AND message_type IN ('Announcement','Company News')";

	                    $filter_feeds_result = $db->query($filter_feeds_qry);
	                    
	                    if ($filter_feeds_result->num_rows() > 0){
	                ?>
					<p class="text-muted">
					<ul class="nav nav-pills small">
					<?php
	                        foreach( $filter_feeds_result->result_array() as $feed ){

			                    $count_feeds_qry = "SELECT COUNT(*) AS feed_count
			                    			FROM dashboard_feeds 
			                    			WHERE recipient_id  = '" . $current_user . "'
			                    			AND message_type  = '" . $feed['message_type'] . "'
			                    			";

			                    $count_feeds_result = $db->query($count_feeds_qry);
			                    $total_feeds += $count_feeds_result->row('feed_count');
	                ?>
						<li>
						<a class="active-menu filter_type" href="#" onclick="filter_feeds('<?php echo $feed['message_type']; ?>')">
							<i class="fa fa-long-arrow-right"></i><?php echo $feed['message_type']; ?><!-- span class="badge">< ?php echo $count_feeds_result->row('feed_count'); ?></span -->
						</a>
						</li>
						&nbsp;
	                <?php
	                        }
	                ?>
						<li>
						<a class="active-menu filter_type" href="#" onclick="filter_feeds('all')">
							<i class="fa fa-long-arrow-right"></i>{{ lang('dashboard.filter_all') }} <!-- span class="badge">< ?php echo $total_feeds ?></span -->
						</a>
						</li>
					</ul>
					</p>
					<?php
	                    }
			        ?>
			        <br />

			        <div class="clearfix"></div>

			        <div data-always-visible="1" data-rail-visible="1">

						<?php
		                    $internal_hiring_qry = "SELECT rr.request_id, upos.position 
		                    				FROM ww_recruitment_request rr
		                    				LEFT JOIN ww_users_position upos ON rr.position_id = upos.position_id
		                    				LEFT JOIN ww_recruitment rec ON rec.request_id = rr.request_id
		                    				WHERE rr.deleted = 0 AND rr.status_id IN (4,7)
		                    				AND (rr.internal = 1 OR rr.hiring_type IN (2,3)) 
		                    				AND (rec.partner_id != {$partner_id} OR rec.partner_id IS NULL)
		                    				 GROUP BY request_id
		                    			";
		                    $internal_sql = $db->query($internal_hiring_qry);
		                    $internal_hiring_result = array();
		                    if($internal_sql->num_rows() > 0){
		                    	$internal_hiring_result = $db->query($internal_hiring_qry)->result_array();
		                    }
		                
						?>
			            <ul class="feeds-list <?php echo (count($internal_hiring_result) > 0) ? '' : 'hidden' ?>">			            	
							<li class="in">
								<img class="avatar img-responsive" alt="" src="{{ base_url('assets/img/hdi_resource-logo.png') }}" />
								<div class="message">
									<span class="arrow2"></span>
									<!-- <span class="datetime pull-right"><small class="text-muted">Just now</small></span> -->
									<span class="user_popover">
										<a 
											class="name popovers" 
											data-trigger="hover" 
											data-placement="top"
											data-html="true" 
											data-content="
												<div class='clearfix'>
													<div class='pull-left' style='padding:0; width: 120px;'>
														<img class='img-responsive' alt='' src='{{ theme_path() }}img/avatar.png' style='border-radius:2% !important; height:100px; width: 100px;' />
													</div>
													<div class='pull-right' style='padding:0; width: 200px;'>
														<p style='margin-bottom:5px;'><strong>HR Administrator</strong></p>
														<p style='margin-bottom:10px;'>HDI Resource, Inc.</p>
				                                        <p class='text-muted small' style='margin-bottom:2px !important;'><i class='fa fa-phone'></i> 757-3001<p>
				                                        <p class='text-muted small' style='margin-bottom:2px !important;'><i class='fa fa-mobile'></i> 0935-1265-000<p>
				                                        <p class='text-muted small' style='margin-bottom:2px !important;'><i class='fa fa-envelope'></i> hradministrator@mail.com<p>
													</div>
												</div>
												" 
											data-original-title="HR Administrator" style="cursor:pointer;">{{ lang('dashboard.hdi_resource') }}
										</a>
									</span>
									<br />


									<span><small class="text-muted">{{ lang('dashboard.hiring_announcement') }}</small></span>
									<br />
									<br />
									<span class="body">
										<div class="panel panel-info">
											<div class="panel-heading">
											<h3 class="panel-title">{{ lang('dashboard.internal_hiring') }}</h3>
											</div>
											<div class="panel-body small">{{ lang('dashboard.hiring_desc') }}</div>
											<table class="table">
												<thead>
												<tr>
													<th width="80%">{{ lang('dashboard.hiring_position') }}</th>
													<th width="20%"></th>
												</tr>
												</thead>
												<tbody>
													<!-- <tr>
														<td>IT Technical Support</td>
														<td><a class="btn btn-success btn-xs pull-right" onclick="internal_hiring(1, 'System Programmer')" >Apply Now</a></td>
													</tr> -->
													<?php
														foreach($internal_hiring_result as $internal_data){
													?>
														<tr>
															<td><?php echo $internal_data['position'] ?></td>
															<td><a class="btn btn-success btn-xs pull-right" onclick="internal_hiring(<?php echo $internal_data['request_id'] ?>, '<?php echo $internal_data['position'] ?>')" data-toggle="modal">{{ lang('dashboard.apply_now') }}</a></td>
														</tr>
													<?php 
														}
													?>
												</tbody>
											</table>
										</div>
									</span>
									
								</div>
							</li>
			            </ul>

			            <ul class="feeds-list feeds_container">
			            </ul>
			        </div>

			    </div>
			</div>

			<div id="no_record" class="well" style="display:none;">
				<p class="bold"><i class="fa fa-exclamation-triangle"></i> {{ lang('common.no_record_found') }}</p>
				<span><p class="small margin-bottom-0">{{ lang('common.zero_record') }}</p></span>
			</div>

			<div id="ajax-loader" class="col-md-12 col-sm-7" style="text-align:center">
				<img src="{{ theme_path() }}img/ajax-loading.gif">
			</div>
		</div>
		<!-- ACTIVITY FEEDS CONTAINER-->

		<!-- OTHER RIGHT SIDE PORTLETS -->
		<div class="col-md-5 col-sm-5">

			<!-- START Demo graphics -->
			<!-- div class="portlet hidden-xs">
				<div class="portlet-title" style="margin-bottom:3px;">
					<div class="caption"><i class="fa fa-group"></i>{{ lang('dashboard.demographic') }}</div>
					<div class="tools">
						@if( isset($business_group) && sizeof($business_group) > 1 )
							<a href="#" class="config" onclick="displayfilter()"></a>
						@endif
						<a href="" class="expand" portlet="demographics"></a>
						<a href="" class="reload" onclick="refresh_gender_stats()"></a>
					</div>
				</div>
				<div class="portlet-body" style="display: none;">

					<p class="text-muted">
						<small>{{ lang('dashboard.demographic_desc') }}</small>
					</p>

					@if( isset($business_group) && sizeof($business_group) > 1 )
					<div id="demo-filter" class="note note-info hidden" rel="0" >
						<div class="row" >
							<div class="col-md-12">
                            	<div class="help-block small" >
                                	Select filter type. 
                            	</div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list"></i></span>
									<select id="demographic-filter" class="form-control select2me input-sm" data-placeholder="Select...">
                                    	<option value="">Select...</option>
                                    	<option value="company">Company</option>
        								<option value="department">Department</option>
                                    </select>
                                </div>
							</div>
						</div>

						<hr class="hr-dotted margin-bottom-top-5">

						<div class="row" >
							<div class="col-md-12">
								<div class="form-group">
                                    <div class="input-group">
                                		<span class="input-group-addon"><i class="fa fa-list"></i></span>
                                        <select id="demographic-filter-value" class="form-control select2me input-sm" data-placeholder="Select...">
                                        	<option value="">Select...</option>
                                        </select>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
					@endif

					<div style="text-align:center;" class="col-md-12 col-sm-7 margin-bottom-25" id="gender-stats-loader">
						<img src="{{ theme_path() }}img/ajax-loading.gif" alt="Loading...">
					</div>

					<div id="gender-stats-container" style="display:none"></div>	
				</div>
			</div -->
			<!-- END Demo graphics -->

			<!-- TIMEKEEPING STATS PORTLET -->
			<!-- div class="portlet hidden-xs">

			    <div class="portlet-title" style="margin-bottom:3px;">
			        <div class="caption"><i class="fa fa-bar-chart-o"></i>{{ lang('dashboard.timekeeping_stat') }}</div>
			        <div class="tools">
						<a href="" class="expand" portlet="time_stats"></a>
						<a href="" class="reload" onclick="refresh_timekeeping_stats()"></a>
					</div>
				</div>
				<div class="portlet-body" style="display: none;">
			    
			    	<p class="text-muted">
			    		<small>{{ lang('dashboard.tk_desc') }}</small>
			    		<a href="{{ get_mod_route('timerecord') }}" class="pull-right active-menu btn btn-xs blue btn-border-radius" menu_id="35">
			    			<small>{{ lang('dashboard.see_tk') }} <i class="fa fa-arrow-circle-o-right"></i></small>
			    		</a>
			        </p>

			        <br />

					<div data-always-visible="1" data-rail-visible1="1">
						<div style="text-align:center;" class="col-md-12 col-sm-7 margin-bottom-25" id="timekeeping-stats-loader">
							<img src="{{ theme_path() }}img/ajax-loading.gif" alt="Loading...">
						</div>
			        	<div class="row" id="timekeeping-stats-container"></div>
					</div>

			    </div>
			</div -->
			<!-- END TIMEKEEPING STATS  PORTLET -->

			<!-- BIRTHDAY PORTLET -->
			<div class="portlet hidden-xs">

			    <div class="portlet-title" style="margin-bottom:3px;">
			        <div class="caption">{{ lang('dashboard.bday_celebrants') }}</div>
			        <div class="tools">
						<a href="" class="expand" portlet="birthday"></a>
					</div>
				</div>
				<div class="portlet-body" style="display: none;">
			    
			    	<p class="text-muted">
			    		<small>{{ lang('dashboard.bday_desc') }} </small>
						<div style="height:18px">
							<a href="{{ site_url('birthdays') }}" class="btn btn-xs pull-right active-menu" menu_id="35">
								<small>{{ lang('dashboard.bday_golist') }} <i class="fa fa-arrow-circle-o-right"></i></small>
							</a>
						</div>
			        </p>

			        <br/>

			        <div data-always-visible="1" data-rail-visible1="1">

			            <ul class="birthday-list">

			            	@if( $birthdays )


			            		<?php

				            		// Since this will be re-coded as ajax-only
				            		// This part will be temporary
				            		$image_dir_thumb = FCPATH.'uploads/users/thumbnail/';
						    		$image_dir_full  = FCPATH.'uploads/users/';
				            	?>

				            	@for($i=0; $i<count($birthdays); $i++)
				            		<?php

				            			// Since this will be re-coded as ajax-only
				            			// This part will be temporary 
				            			$avatar = basename(base_url( $birthdays[$i]['photo'] ));

						    			$file_name_thumbnail = urldecode($image_dir_thumb . $avatar);
						        		$file_name_full = urldecode($image_dir_full . $avatar);

								        if(file_exists($file_name_thumbnail)){
											$file_name_full = base_url() . "uploads/users/" . $avatar;
								            $avatar = base_url() . "uploads/users/thumbnail/" . $avatar;
								        }
								        else if(file_exists($file_name_full)){
								            $avatar = base_url() . "uploads/users/" . $avatar;
											$file_name_full = $avatar;
								        }
								        else{
								            $avatar = base_url() . "uploads/users/avatar.png";
											$file_name_full = $avatar;
								        }
				            		?>

					                <li class="in2 @if( $i > 4 ) hidden @endif toggle-{{ $i }}">
					                    <img 
					                    	class="avatar img-responsive" 
					                    	alt="loading" 
					                    	src="{{ $avatar }}"
					                    	style="" />
					                    <div class="message2">
				                    		<span class="arrow2"></span>

					                        <?php

					                            $data = new stdClass();

					                            $qry = "SELECT 
					                                        `up`.`user_id`, 
					                                        CONCAT(`up`.`firstname`, ' ', `up`.`middlename`, ' ', `up`.`lastname`) AS `user_name`, 
					                                        `upos`.`position`,
					                                        `up`.`company`,
					                                        `up`.`photo`,
					                                        `u`.`email` 
					                                    FROM 
					                                        `users_profile` `up` 
					                                        LEFT JOIN `users_position` `upos` ON `up`.`position_id` = `upos`.`position_id`
					                                        LEFT JOIN `users` `u` ON `u`.`user_id` = `up`.`user_id`

					                                    WHERE 
					                                        `up`.`user_id` = '" . $birthdays[$i]['celebrant_id'] . "' 
					                                    
					                                    LIMIT 1";

					                            $result = $db->query($qry);

					                            if ($result->num_rows() > 0)
					                                $data   = $result->row();

					                            $contacts = array();
					                        ?>

				                    		<span class="user_popover">
					                    		<a 
					                    			href="#" 
					                                class="user_preview popovers" 
					                                data-trigger="hover" 
					                                data-placement="top"
					                                data-html="true" 
					                                data-content="
					                                    <div class='clearfix'>
					                                        <div class='pull-left' style='padding:0; width: 120px;'>
					                                            <img class='img-responsive' alt='loading' src='{{ $file_name_full }}' style='border-radius:2% !important; height:100px; width: 100px;' />
					                                        </div>
					                                        <div class='pull-right' style='padding:0; width: 200px;'>
					                                            <p style='margin-bottom:5px;'><strong>{{ $data->position; }}</strong></p>
					                                            <p style='margin-bottom:10px;'>{{ $data->company; }}</p>

					                                            <?php

					                                                if(count($contacts)):

					                                                    for( $j=0; $j < count($contacts); $j++ ): 

					                                                        switch ($contacts[$j]['contact_type']):

					                                                            case 'Phone':
					                                                                $fa = 'phone';
					                                                                break;
					                                                            
					                                                            case 'Mobile':
					                                                                $fa = 'mobile';
					                                                                break;

					                                                            case 'Fax':
					                                                                $fa = 'fax';
					                                                                break;

					                                                            default:
					                                                                $fa = 'phone';
					                                                                break;
					                                                        
					                                                        endswitch;
					                                            ?>
					                                                        <p class='text-muted small' style='margin-bottom:2px !important;'>
					                                                            <i class='fa fa-<?php echo $fa; ?>'></i> &nbsp;
					                                                            <?php echo $contacts[$j]['contact_no']; ?>
					                                                        </p>
					                                            <?php
					                                                	endfor;
					                                                endif;
					                                            ?>

					                                            <p class='text-muted small' style='margin-bottom:2px !important;'><i class='fa fa-envelope'></i> <?php echo $data->email;  ?><p>
					                                        </div>
					                                    </div>
					                                "
					                                data-original-title = "{{ $birthdays[$i]['display_name'] }}"  >
					                    			{{ $birthdays[$i]['display_name'] }}
					                    		</a>
				                    		</span>

				                    		@if(strtotime($birthdays[$i]['birth_date']) === strtotime(date('Y-m-d')))
				                    		
					                    		<a 
					                    			class="btn default btn-sm pull-right greetings"
					                    			data-celebrant-id="{{ $birthdays[$i]['celebrant_id'] }}"
					                    			data-birth-date="{{ date('Y').'-'. date('m-d', strtotime($birthdays[$i]['birth_date'])) }}"
					                    			data-birth-string="{{ date("l d, Y", strtotime($birthdays[$i]['birth_date'])) }}"
					                    			data-celebrant-name="{{ $birthdays[$i]['display_name'] }}" 
					                    			href="javascript:;">
					                    			<i class="fa fa-gift"></i>
					                    			{{ lang('dashboard.bday_msg') }}  
					                    		</a>
					                    	@else

					                    		<span class="datetime pull-right"><small class="text-muted">{{ $birthdays[$i]['time_line'] }}</small></span>
					                    	@endif

					                        <span class="body" id="pulsate-regular">
					                        	{{ $birthdays[$i]['position'] }}
						                        <?php if(isset($business_group) && sizeof($business_group) > 1){ ?>
									                <br/>
									                <span class="text-success small"><span>{{ $birthdays[$i]['group'] }}</span><span>&nbsp;/&nbsp;</span><span>{{ $birthdays[$i]['company'] }}</span></span>
								                <?php }?>
							                </span>
					                    </div>
					                </li>
				                	@if( ($i + 1) % 5 == 0 && $i > 1 )
				            			<li class="@if( $i != 4 ) hidden @endif toggler-{{ $i }}">
				            				<br/>
				            				<!-- span class="btn" onclick="hbd_showmore({{ $i+1 }})"> {{ lang('dashboard.bday_more') }} <i class="fa fa-arrow-circle-o-right"></i> </span -->
											<a href="javascript:hbd_showmore({{ $i+1 }})" style="font-size:small">{{ lang('dashboard.bday_more') }} <i class="fa fa-arrow-circle-o-right"></i> </a>
				            			</li>
				            		@endif
				                @endfor
				            @else

								<li class="in" style="margin: 0px 0px 1px 20px;padding: 1px 0px;">
					                {{ lang('dashboard.bday_none') }}
					            </li>				            	
				            @endif
			            </ul>
			        </div>

			        <br/>			        
			    </div>
			</div>
			<!-- END BIRTHDAY PORTLET -->

			<!-- TODO PORTLET -->
			@if( $approver )
				<div class="portlet tasks-widget hidden-xs">
				    <div class="portlet-title" style="margin-bottom:3px;">
				        <div class="caption">
				        	{{ lang('dashboard.todo') }} 
				        	<span id="todo_badge" class="badge"></span>
				        </div>
				        <div class="tools">
							<a href="" class="expand" portlet="todo"></a>
							<a href="" class="reload" onclick="refresh_todos()"></a>
						</div>
					</div>
					<div class="portlet-body" style="display: none;">
				        <p class="text-muted">
				        	<small>{{ lang('dashboard.todo_desc') }}  </small>
				        	<div style="height:24px">
							<a href="{{ site_url('time/applicationmanage') }}" class="btn btn-xs pull-right active-menu" menu_id="44">
								<small>{{ lang('dashboard.todo_golist') }}  <i class="fa fa-arrow-circle-o-right"></i></small>
							</a>
						</div>
				        </p>
				        <div class="task-content">
				            <div data-always-visible="1" data-rail-visible1="1">
				                <ul id="todos-list" class="task-list" style="font-size:12px;">
									<li style="border: none" id="todos-loader" >
						                <div style="text-align: center;" class="col-md-12 col-sm-7 margin-bottom-25" id="ajax-loader">
											<img src="{{ theme_path() }}img/ajax-loading.gif" alt="Loading...">
										</div>
						            </li>
								</ul>
				            </div>
				             
				            <br/>
				            <span class="btn btn-xs blue btn-border-radius show_more" onclick="todo_showmore()"> {{ lang('dashboard.todo_more') }} <i class="fa fa-arrow-circle-o-right"></i> </span>
				        	
				        </div>

				    </div>
				</div>
			@endif			
			<!-- END TODO PORTLET -->

		</div>
		<!-- END OTHER RIGHT SIDE PORTLETS -->

	</div>
	<!-- END OUTER-MOST ROW -->

<div id="dashboard_dialog" class="modal fade" tabindex="-1" data-width="600">
	
	<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title" id="dlg-title">Octus Dolor Ictum<br>
        	<span class="small">
        		<?php echo date("l d, Y"); ?>
        		<span class="small text-muted"> - Today</span>
        	</span>
        </h4>
    </div>
    <div class="modal-body">
        <div class="chat-form margin-bottom-20 margin-top-0" style="overflow: visible;">
            <div class="input-cont">
                <input
                	id="input-greetings-update" 
                	class="form-control " 
                	type="text"
                	data-birthday=""
                	data-celebrant-id=""
                	placeholder="Write a birthday wish..."/>
            </div>
            <div id="btn-greetings-update" class="btn-cont">
            	<span class="arrow"></span>
            	<a href="" class="btn blue icn-only">
            		<i id="icn-greetings-update" class="fa fa-gift icon-white"></i>
            		<!-- <i class="fa fa-spinner icon-spin"></i> -->
            	</a>
            </div>
        </div>
        <div class="clearfix">

        	<!-- <div class="scroller" style="height:400px" data-always-visible="1" data-rail-visible1="1"> -->
        	<div data-always-visible="1" data-rail-visible1="1">
	            <ul id="birthday-greetings" class="chats greetings_container">
	            </ul>
        	</div>
        </div>

    </div>
</div>
<div id="prompt_sms"  class="modal fade" tabindex="-1" data-width="500">
</div>
<div id="internal_hiring_modal" class="modal fade" tabindex="-1" data-width="700">
</div>
<div class="modal fade" id="ajax" tabindex="-1" role="basic" aria-hidden="true">
    <img src="{{ base_url('assets/img/ajax-modal-loading.gif') }}" alt="" class="loading">
</div>	
@stop

@section('container')
	@parent
		<?php
			if(!empty($holidayEvents['event'])){
				foreach( $holidayEvents['event'] as $event ){
	        		switch(trim($event)){
			    		case "SNOW":
						//get remaining days before Christmas
						$now = time(); // or your date as well
						$your_date = strtotime(date("Y-12-25"));
						$datediff = $your_date - $now;
						$remaining_days = floor($datediff/(60*60*24))+1;
		?>
						<div class="fixed-div-bottom" style="height: 50px;  ">
							<marquee behavior="scroll" direction="left"> <img src="{{ base_url('assets/img/1-santa-reindeer.gif') }}" style=" width: 80px; border-bottom: 2px solid #ffffff;"> <span class="androgyne-font margin-left-10">Happy Holidays! <?php echo $remaining_days; ?> days to go..</span></marquee>
						</div>
		<?php
						break;
					}
				}
			}
		?>
	@stop

@section('page_scripts')
	@parent
	
	<?php
	if(!empty($holidayEvents['event_plugin'])){
		foreach( $holidayEvents['event_plugin'] as $event_plug ){
			echo $event_plug;
		}
	}

	if(!empty($holidayEvents['event_script'])){
		foreach( $holidayEvents['event_script'] as $event_scipt ){
			echo $event_scipt;
		}
	}

	?>
	<script type="text/javascript" src="{{ theme_path() }}plugins/jquery.infiniteScroll.js"></script>
    <script type="text/javascript" src="{{ theme_path() }}plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <script type="text/javascript" src="{{ theme_path() }}plugins/bootstrap-tagsinput/typeahead.js"></script>
    <script src="{{ theme_path() }}plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
    <script src="{{ theme_path() }}plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="{{ theme_path() }}plugins/select2/select2.min.js" type="text/javascript" ></script>

  
@stop

@section('view_js')
	@parent

	<script type="text/javascript">

		$(document).ready(function(){
		 	/*$("#input-greetings-update").emojioneArea({
		      pickerPosition: "bottom",
		      filtersPosition: "bottom",
		      shortnames: true,
		      autoHideFilters: true,
		      filters: {
		      	people: {
	                icon: "yum",
	                emoji: "grinning,smile,stuck_out_tongue,sob,pray,"+
	                	"hamburger,fries,pizza,cake,"+
	                	"gift,birthday,balloon,heart,two_hearts"
	            }
		      }
		    });*/ 

		 	/*$(".body").each(function() {
                $(this).html(emojione.unicodeToImage($(this).html())); 
            });*/

            // if you save to db with value EmojioneArea saveEmojisAs: 'shortname'
            /*$(".body").each(function() {
                $(this).html(emojione.shortnameToImage($(this).html()));
            });*/

			

			$('#input-post-update')
				.focus(function(){
					$('#feed-options').show();
					/*$("#input-post-update").emojioneArea({
				      pickerPosition: "bottom",
				      filtersPosition: "bottom",
				      shortnames: true,
				      autoHideFilters: true
				    });*/ 

				});

			$('input[name="feed-to"]').change(function(){
				$('#feed-tags').tagsinput('removeAll');
			});

			$('#feed-tags').tagsinput({
	        	itemValue: 'value',
	          	itemText: 'label',
	          	typeahead: {
	            	source: function(query) {
	              		return $.getJSON(base_url + module.get('route') + '/tag_' + $('input[name="feed-to"]:checked').val() );
	            	}
	          	}
	        });

	        //performance feedback
	        $('.feedback').change(function(){
			    if(this.checked){
    				$(".feeds_form").addClass("feedback-form");
    				$(".post_feeds").addClass("btn-success");
    				$(".post_feeds").removeClass("btn-info");  
    				$(".post_feeds").text("Post Feedback");  				
    				$("#message_type").val('Feedback');

			    }else{
    				$(".feeds_form").removeClass("feedback-form");
    				$(".post_feeds").removeClass("btn-success");
    				$(".post_feeds").addClass("btn-info");  
    				$(".post_feeds").text("Post Status");   
    				$("#message_type").val('Comment');
			    }

			});

		});
		
		function displayfilter(){
			var flag=$('#demo-filter').attr("rel");
			if(flag==0){
				$('#demo-filter').removeClass("hidden");
				$('#demo-filter').attr("rel",1);
			}
			else {
				$('#demo-filter').addClass("hidden");
				$('#demo-filter').attr("rel",0);
			}
		}
		
	</script>
@stop
