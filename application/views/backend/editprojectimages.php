<div class="row">
<div class="col s12">
<h4 class="pad-left-15">Edit projectimages</h4>
</div>
</div>
<div class="row">
<form class='col s12' method='post' action='<?php echo site_url("site/editprojectimagessubmit");?>' enctype= 'multipart/form-data'>
<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
<div class=" row">
<div class=" input-field col s12 m6">
<?php echo form_dropdown("project",$project,set_value('project',$before->project));?>
<label for="Project">Project</label>
</div>
</div>

<div class="row">
<div class="file-field input-field col m6 s12">
<span class="img-center big image1">
                  <?php if ($before->image == '') {
} else {
   ?><img src="<?php echo base_url('uploads').'/'.$before->image;
   ?>">
<?php
} ?>
</span>
<div class="btn blue darken-4">
<span>Image</span>
<input name="image" type="file" multiple>
</div>
<div class="file-path-wrapper">
<input class="file-path validate image1" type="text" placeholder="Upload one or more files" value="<?php echo set_value('image', $before->image);?>">
</div>
<!--	<div class="md4"><a class="waves-effect waves-light btn red clearimg input-field ">Clear Image</a></div>-->
</div>
</div>

<div class="row">
<div class="col s6">
<button type="submit" class="btn btn-primary waves-effect waves-light  blue darken-4">Save</button>
<a href='<?php echo site_url("site/viewprojectimages"); ?>' class='btn btn-secondary waves-effect waves-light red'>Cancel</a>
</div>
</div>
</form>
</div>
