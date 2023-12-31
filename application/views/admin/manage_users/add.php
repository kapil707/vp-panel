<div class="row">
	<div class="col-xs-12" style="margin-bottom:20px;">
		<a href="<?= base_url()?>admin/<?= $Page_name; ?>" class="btn btn-w-m btn-info">
			Back
		</a>
	</div>
	<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
		<div class="col-xs-9">
			<div class="ibox float-e-margins">
				<div class="ibox-content">
					<div class="form-group">			
						<div class="col-sm-12">
							<label class="control-label" for="form-field-1">
								Name
							</label>
						</div>
						<div class="col-sm-12">
							<input type="text" class="form-control" id="form-field-1" placeholder="Name" name="name" value="<?= set_value('name'); ?>" required="required" />
						</div>
						<div class="help-inline col-sm-12 has-error">
							<span class="help-block reset middle">  
								<?= form_error('name'); ?>
							</span>
						</div>
					</div>
					
					<div class="form-group">	
						<div class="col-sm-12">
							<label class="control-label" for="form-field-1">
								Email Id
							</label>
						</div>
						<div class="col-sm-12">
							<input type="email" class="form-control" id="form-field-1" placeholder="Email Id" name="email" value="<?= set_value('email'); ?>" required="required" />
						</div>
						<div class="help-inline col-sm-12 has-error">
							<span class="help-block reset middle">  
								<?= form_error('email'); ?>
							</span>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label" for="form-field-1">
								User Type
							</label>
						</div>
						<div class="col-sm-12">
							<select name="user_type" id="user_type" data-placeholder="Select User Type" class="chosen-select">
								<option value="">
									
								</option>
								<?php
								$user_type = "";
								$result1 = $this->db->query("select * from tbl_user_type where id!='1'")->result();
								foreach($result1 as $row1)
								{
									?>
									<option value="<?= $row1->user_type; ?>" <?php if($user_type == $row1->user_type) { ?> selected="selected" <?php } ?>>
									<?= $row1->user_title; ?>
									</option>
									<?php
								}
								?>
							</select>
						</div>
						<div class="help-inline col-sm-12 has-error">
							<span class="help-block reset middle">  
								<?= form_error('parent_category'); ?>
							</span>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label" for="form-field-1">
								Password
							</label>
						</div>
						<div class="col-sm-12">
							<input type="password" class="form-control" id="form-field-1" placeholder="Password" name="password" value="" required="required" />
						</div>
						<div class="help-inline col-sm-12 has-error">
							<span class="help-block reset middle">  
								<?= form_error('password'); ?>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-3">
			<?php publish_panel_right_top($row,"Submit"); ?>
			<div class="ibox float-e-margins">
				<div class="ibox-content">
					<?php admin_side_image("Image","image","",$row->image,"",""); ?>
				</div>
			</div>
		</div>
	</form>
</div>