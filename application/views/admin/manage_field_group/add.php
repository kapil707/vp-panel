<div class="row">	<div class="col-xs-12" style="margin-bottom:20px;">		<a href="<?= base_url()?>admin/<?= $Page_name; ?>" class="btn btn-w-m btn-info">			Back		</a>	</div>	<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">		<div class="col-xs-9">			<div class="ibox float-e-margins">				<div class="ibox-content">					<div class="form-group">						<div class="col-sm-12">							<label class="control-label" for="form-field-1">								Field Label							</label>						</div>						<div class="col-sm-12">							<input type="text" class="form-control" id="form-field-1" placeholder="Field Label" name="field_label" value="<?php echo set_value('field_label'); ?>" required />						</div>						<div class="help-inline col-sm-12 has-error">							<span class="help-block reset middle">  								<?= form_error('field_label'); ?>							</span>						</div>					</div>										<div class="form-group">						<div class="col-sm-12">							<label class="control-label" for="form-field-1">								Field Name							</label>						</div>						<div class="col-sm-12">							<input type="text" class="form-control field_name" id="form-field-1" placeholder="Field Name" name="field_name" value="<?php echo set_value('field_name'); ?>" required />						</div>						<div class="help-inline col-sm-12 has-error">							<span class="help-block reset middle">  								<?= form_error('field_name'); ?>							</span>						</div>					</div>										<div class="form-group">						<div class="col-sm-12">							<label class="control-label" for="form-field-1">								Field Type							</label>						</div>						<div class="col-sm-12">							<select name="field_type" id="field_type" data-placeholder="Select Field Type" class="chosen-select">								<option value="0">									Select Field Type								</option>								<?php								$query = $this->db->query("select * from tbl_field_group_type")->result();								foreach($query as $r){									?>									<option value="<?php echo $r->id ?>" <?php if($r->id==set_value('field_type')) { ?> selected <?php } ?>>									<?php echo $r->title ?>									</option>									<?php								}								?>							</select>						</div>						<div class="help-inline col-sm-12 has-error">							<span class="help-block reset middle">  								<?= form_error('field_type'); ?>							</span>						</div>					</div>				</div>			</div>		</div>		<div class="col-xs-3">			<?php publish_panel_right_top($row,"Submit"); ?>			<div class="ibox float-e-margins">				<div class="ibox-content">					<div class="form-group">						<div class="col-sm-12">							<label class="control-label" for="form-field-1">								Required							</label>						</div>						<div class="col-sm-12">							<select name="required" id="required" data-placeholder="Select Required" class="chosen-select">								<option value="1" <?php if(set_value('required')=="1") { ?> selected <?php } ?>>									Active								</option>								<option value="0" <?php if(set_value('required')=="0") { ?> selected <?php } ?>>									Inactive								</option>							</select>						</div>						<div class="help-inline col-sm-12 has-error">							<span class="help-block reset middle">  								<?= form_error('required'); ?>							</span>						</div>					</div>				</div>			</div>		</div>	</form></div>