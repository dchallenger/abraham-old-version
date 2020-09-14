
<div class="portlet">
	<div class="portlet-title small">
		<div class="caption" id="education-category">
            <input type="hidden" name="recruitment_personal_history[education-type][]" id="recruitment_personal_history-education-type" 
            value="<?php echo $category; ?>" />
            <?php echo $category; ?>
        </div>
        <div class="tools">
            <a class="text-muted" id="delete_education-<?php echo $count;?>" onclick="remove_form(this.id, 'education', 'history')"  style="margin-botom:-15px;" href="#"><i class="fa fa-trash-o"></i> Delete</a>
            <!-- <a class="collapse pull-right" href="javascript:;"></a> -->
        </div>
    </div>
    <div class="portlet-body form">
        <div class="form-horizontal">
            <div class="form-body">
              <!-- START FORM -->	
                <div class="form-group">
                    <label class="control-label col-md-3 small">School<span class="required">*</span></label>
                    <div class="col-md-9">
                        <div class="input-icon">
                            <input type="text" class="form-control" name="recruitment_personal_history[education-school][]" id="recruitment_personal_history-education-school" 
                            value="" placeholder="Enter School"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 small">Start Year<span class="required">*</span></label>
                    <div class="col-md-9">
                        <div class="input-icon">
                            <input type="text" class="form-control mask_number_year" name="recruitment_personal_history[education-year-from][]" id="recruitment_personal_history-education-year-from" 
                            value="" placeholder="Enter Year From"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 small ">End Year<span class="required">*</span></label>
                    <div class="col-md-9">
                        <div class="input-icon">
                            <input type="text" class="form-control mask_number_year" name="recruitment_personal_history[education-year-to][]" id="recruitment_personal_history-education-year-to" 
                            value="" placeholder="Enter Year To"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 small">Honors/Awards<span class="required">*</span></label>
                    <div class="col-md-9">
                        <div class="input-icon">
                            <input type="text" class="form-control" name="recruitment_personal_history[education-honors_awards][]" id="recruitment_personal_history-education-honors_awards" 
                            value="" placeholder="Enter Honors/Awards"/>
                        </div>
                    </div>
                </div>                
                <?php 
    $type_with_degree = array('tertiary', 'graduate studies', 'vocational');
                if(in_array(strtolower($category), $type_with_degree)) { 
                    ?>
                    <div class="form-group">
                        <label class="control-label col-md-3 small">Degree<span class="required">*</span></label>
                        <div class="col-md-9">
                            <div class="input-icon">
                                <input type="text" class="form-control" name="recruitment_personal_history[education-degree][]" id="recruitment_personal_history-education-degree" 
                                value="" placeholder="Enter Degree"/>
                            </div>
                        </div>
                    </div>
                    <?php 
                }else{
                    ?>
                    <div class="form-group" style="display:none;">
                        <label class="control-label col-md-3 small">Degree<span class="required">*</span></label>
                        <div class="col-md-9">
                            <div class="input-icon">
                                <input type="hidden" class="form-control" name="recruitment_personal_history[education-degree][]" id="recruitment_personal_history-education-degree" 
                                value="" placeholder="Enter Degree"/>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <div class="form-group">
                    <label class="control-label col-md-3 small">Status<span class="required">*</span></label>
                    <div class="col-md-9 checkbox-list">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="recruitment_personal_history[education-status][]" id="recruitment_personal_history-education-status-graduate-<?php echo $count?>"  
                            value="Graduated" onclick="check_graduate_status(this, <?php echo $count; ?>);" />
                            Graduate
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="recruitment_personal_history[education-status][]" id="recruitment_personal_history-education-status-undergraduate-<?php echo $count?>" 
                            value="Undergrad" onclick="check_graduate_status(this, <?php echo $count; ?>);"/> 
                            Undergraduate
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script language="javascript">

    var customHandleUniform = function () {
        if (!jQuery().uniform) {
            return;
        }

        var test = $("input[type=checkbox]:not(.toggle), input[type=radio]:not(.toggle, .star)");
        if (test.size() > 0) {
            test.each(function () {
                if ($(this).parents(".checker").size() == 0) {
                    $(this).show();
                    $(this).uniform();
                }
            });
        }
    }

    jQuery(document).ready(function() { 

        customHandleUniform();
    });
</script>

