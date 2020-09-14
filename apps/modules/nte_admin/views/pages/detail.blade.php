@extends('layouts/master')

@section('page_styles')
	@parent
	@include('edit/page_styles')
	<link href="{{ theme_path() }}plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
@stop

@section('page_content')
	@parent

	<div class="row">
        <div class="col-md-9">
			<form>
				<input type="hidden" id="record_id" name="record_id" value="{{ $record_id }}">
				@if($coc_process == 'immediate')
					@include('detail/fgs')
					@include('buttons/detail_custom')		
				@else
					@include('detail/fgs')
					@include('buttons/detail')				
				@endif				
			</form>
       	</div>  
    	<div class="col-md-3 visible-lg visible-md">
			<div class="portlet">
				<div class="clearfix margin-bottom-20">
					@include('common/search-form')
					<div class="actions margin-top-20 clearfix">
						<span class="pull-left"><a class="text-muted" href="{{ $mod->url }}">{{ lang('common.back_to_list') }} &nbsp;<i class="m-icon-swapright"></i></a></span>
						<span class="pull-right"><a class="text-muted" id="trash">{{ lang('common.trash_folder') }} <i class="fa fa-trash-o"></i></a></span>
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
	@include('edit/page_scripts')
	<script type="text/javascript" src="{{ theme_path() }}modules/common/edit.js"></script> 
	<script src="{{ theme_path() }}plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script> 
@stop

@section('view_js')
	@parent
	{{ get_edit_js( $mod ) }}
@stop