<div class="row">
    <div class="col-xs-12">
		<?php
		$subfolders = glob('./theme/*', GLOB_ONLYDIR);
		foreach ($subfolders as $subfolder) {
			?>
			<div class="col-sm-4">
				<div class="row" style="padding:5px;">
					<div class="col-sm-12" style="border:solid 1px #ddd; height:300px;overflow:hidden;">
						<img alt="image" src="<?= base_url()?><?php echo $subfolder ?>/screenshot.jpg" width="100%" height="300px" />
					</div>
					<div class="col-sm-12" style="background:rgba(255,255,255,.65);height:50px;padding:15px;border-left:solid 1px #ddd;border-right:solid 1px #ddd;border-bottom:solid 1px #ddd;">
						<?php
						$subfolder_title = str_replace("./theme/","",$subfolder);
						?>
						<span style="color:#000000;font-size:15px">
							<?= ucwords($subfolder_title); ?>
						</span>
						<?php if(get_field_data("system_theme")==$subfolder_title) { ?>
						<span class="text-right" style="float:right">Activated</span>
						<?php } else {?>
						<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
							<button type="Submit" class="text-right" style="float:right;margin-top:-22px;" name="Submit" value="Submit">Activate</button>
							<input type="hidden" name="system_theme" value="<?php echo $subfolder_title ?>">
						</form>
						<?php } ?>
					</div>
				</div>
			</div>
		<?php
		}
		?>
	</div>
</div>