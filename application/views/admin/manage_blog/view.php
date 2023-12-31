<div class="row">
    <div class="col-xs-12" style="margin-bottom:20px;">
		<a href="<?= base_url()?>admin/<?= $Page_name; ?>/add<?php echo $child_page ?>" class="btn btn-w-m btn-info">
			Add +
		</a>
	</div>
    <div class="col-xs-12">
		<div class="ibox float-e-margins">
			<div class="ibox-content">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover dataTables-example">
						<thead>
							<tr>
								<th>
									Sno.
								</th>
								<th>
									Title
								</th>
								<th>
									Image
								</th>
								<th>
									Status
								</th>
								<th>
									Update
								</th>
								<th>
									Action
								</th>
							</tr>
						</thead>
						<tbody>
						<?php
						$i=1;
						foreach ($result as $row)
						{
							?>
							<tr id="row_<?= $row->id; ?>" <?php if($row->status==0){ ?> class="text-warning" <?php } ?>>
								<td>
									<?= $i++; ?>
								</td>
								<td>
									<?php 
									$child_page1 = "";
									if(isset($_GET["child_page"])){
										$child_page1 = $_GET["child_page"]."/";
									} ?>
									<?= ($row->title); ?><br>
									<a href="<?= base_url(); ?><?php echo $child_page1 ?><?php echo $row->url; ?>"target='_blank'>
										<?= base_url(); ?><?php echo $child_page1 ?><?php echo $row->url; ?>
									</a>
								</td>
								<td>
									<img src="<?php echo get_library_to_image($row->image,'main'); ?>" class="text-center" width="120px">
								</td>
								<td>
									<?php
									if($row->status=="1"){
										echo "Active";
									}
									if($row->status=="0"){
										echo "Inactive";
									}
									?>
								</td>
								<td>
									<?php 
									$date = ($row->update_time); 
									echo date('d M,Y', $date);
									?> at
									<?php 
									$time = ($row->update_time); 
									echo date('H:i', $time);
									?>
								</td>
								<td class="text-right">
									<div class="btn-group">
										<a href="edit/<?= $row->id; ?>/<?php echo $child_page ?>" class="btn-white btn btn-xs">Edit
										</a>
										<a href="javascript:void(0)" onclick="delete_page_rec('<?= $row->id; ?>')" class="btn-white btn btn-xs">Delete</i> </a>
									</div>
								</td>
							</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
    </div>
</div>