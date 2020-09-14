<div class="portlet">
	<div class="portlet-title">
		<div class="caption">{{ lang('pay_grade.pay_grade_information') }}</div>
		<div class="tools"><a class="collapse" href="javascript:;"></a></div>
	</div>
		<div class="portlet-body form">			<div class="form-group">
				<label class="control-label col-md-3">{{ lang('pay_grade.pay_grade') }}</label>
				<div class="col-md-7">							<input type="text" disabled="disabled" class="form-control" name="users_job_pay_level[pay_level]" id="users_job_pay_level-pay_level" value="{{ $record['users_job_pay_level.pay_level'] }}" placeholder="{{ lang('pay_grade.p_pay_grade') }}" /> 				</div>	
			</div>			<div class="form-group">
				<label class="control-label col-md-3">{{ lang('pay_grade.pay_grade_code') }}</label>
				<div class="col-md-7">							<input type="text" disabled="disabled" class="form-control" name="users_job_pay_level[pay_level_code]" id="users_job_pay_level-pay_level_code" value="{{ $record['users_job_pay_level.pay_level_code'] }}" placeholder="{{ lang('pay_grade.p_pay_grade_code') }}" /> 				</div>	
			</div>			<div class="form-group">
				<label class="control-label col-md-3">{{ lang('pay_grade.active') }}</label>
				<div class="col-md-7">							<div class="make-switch" data-on-label="&nbsp;{{ lang('pay_grade.option_yes') }}&nbsp;" data-off-label="&nbsp;{{ lang('pay_grade.option_no') }}&nbsp;">
						    	<input type="checkbox" disabled="disabled" value="1" @if( $record['users_job_pay_level.status_id'] ) checked="checked" @endif name="users_job_pay_level[status_id][temp]" id="users_job_pay_level-status_id-temp" class="dontserializeme toggle"/>
						    	<input type="hidden" disabled="disabled" name="users_job_pay_level[status_id]" id="users_job_pay_level-status_id" value="<?php echo $record['users_job_pay_level.status_id'] ? 1 : 0 ?>"/>
							</div> 				</div>	
			</div>	</div>
</div>