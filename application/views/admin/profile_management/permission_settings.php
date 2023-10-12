<div class="row">
    <div class="col-xs-12">
    	<form class="form-horizontal" role="form" method="post">
            <div class="form-group">
                <div class="col-sm-2 text-right">
                    <label class="col-sm-12 control-label">
                        Select User Type
                    </label>
                </div>
                <div class="col-sm-10">
                    <select name="user_type" id="user_type" class="form-control" required="required" onchange="user_type_onchange()">
                        <option value="">
                            Select User Type
                        </option>
                        <?php
						$user_type = $this->session->flashdata('user_type1');
                        $query = $this->db->query("select * from tbl_user_type");
                        $result1 = $query->result();
                        foreach($result1 as $row1)
                        {
                            ?>
                            <option value="<?= $row1->user_type; ?>"
                            <?php if($row1->user_type==$user_type){ echo "selected"; } ?>>
                                <?= $row1->user_title; ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group" id="page_type_div">
        		<div class="col-sm-12">
                    <div class="col-sm-6">
                        All Permission
                    </div>
                    <div class="col-sm-6">
                        Permission Of Category
                    </div>
             	</div>
           		<div class="col-sm-12">
                	<select class="form-control dual_select" multiple name="page_type[]" id="page_type">
                	<?php
					$query = $this->db->query("select * from tbl_permission_page order by page_title asc");
					$result1 = $query->result();
					foreach($result1 as $row1)
					{
						$page_type = $row1->page_type;
						$query = $this->db->query("select * from tbl_permission_settings where user_type='$user_type' and page_type='$page_type'");
						$row2 = $query->row();
						?>
						<option value="<?= $row1->page_type; ?>" <?php if($row2->page_type==$row1->page_type) { echo "selected"; }?>>
							<?= $row1->page_title; ?>
						</option>
						<?php
					}
					?>
					</select>
                </div>
            </div>

            <div class="form-group text-right">
            	<input type="submit" class="ladda-button ladda-button-demo btn btn-primary submitbtn" value="Permission Set" name="Submit" onclick="return check_all_value_not_null()" style="display:none" />
            </div>
     	</form>
    </div>
	<div class="col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example">
                <thead>
                    <tr>
                    	<th>
                        	Sno.
                        </th>
						<th>
                        	Page Title
                        </th>
                        <th>
                        	Page Fa Fa Icon
                        </th>
						<th>
						 	Sorting Order
                        </th>
						<th>
                        	Add
                        </th>
						<th>
                        	View
                        </th>
						<th>
                        	Setting
                        </th>
                    </tr>
                </thead>
				<tbody>
                <?php
				$i=1;
                foreach ($result as $row)
                {
					?>
                    <tr id="row_<?= $row->id; ?>">
                    	<td>
                        	<?= $i++; ?>
                        </td>
 						<td>
                        	<?= $row->page_title; ?>
                        </td>
						<td>
							<input type="text" value="" onchange="change_fafa_icon('<?= $row->id; ?>')" class="fafa_icon_<?= $row->id; ?>">
							<?= base64_decode($row->fafa_icon); ?>
                        </td>
						<td>
							<input type="number" value="<?= $row->sorting_order; ?>" onchange="change_sorting_order('<?= $row->id; ?>')" class="sorting_order_<?= $row->id; ?>">
                        </td>
						<td>
							<input type="checkbox" <?php if($row->page_add) { echo "checked"; } ?> onchange="onchange_page_add('<?= $row->id; ?>')" class="page_add_<?= $row->id; ?>"> Add
						</td>
						<td>
							<input type="checkbox" <?php if($row->page_view) { echo "checked"; } ?> onchange="onchange_page_view('<?= $row->id; ?>')" class="page_view_<?= $row->id; ?>"> View
						</td>
						<td>
							<input type="checkbox" <?php if($row->page_setting) { echo "checked"; } ?> onchange="onchange_page_setting('<?= $row->id; ?>')" class="page_setting_<?= $row->id; ?>"> Setting
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
<script>
function user_type_onchange()
{
	var user_type = $("#user_type option:selected").val();	
	$(".submitbtn").show();
	if(user_type=="")
	{
		$(".submitbtn").hide();
	}
	if(user_type=="")
	{
		java_alert_function("warning","Select User Type")	

		$.ajax({
			type       : "POST",
			data       :  { user_type:user_type } ,
			url        : "<?= base_url()?>admin/profile_management/get_permission_settings",
			success    : function(data){
				if(data!="")
				{
					$("#page_type_div").html(data);
					$('.dual_select').bootstrapDualListbox({
					selectorMinimalHeight: 160
					});
				}
				else
				{
					java_alert_function("error","Something Wrong")
				}
			}
		});
	}
	else
	{
		$.ajax({
			type       : "POST",
			data       :  { user_type:user_type } ,
			url        : "<?= base_url()?>admin/profile_management/get_permission_settings",
			success    : function(data){
				if(data!="")
				{
					$("#page_type_div").html(data);
					$('.dual_select').bootstrapDualListbox({
					selectorMinimalHeight: 160
					});
				}
				else
				{
					java_alert_function("error","Something Wrong")
				}
			}
		});
	}
}
function check_all_value_not_null()
{
	var user_type = $("#user_type option:selected").val();	
	$(".submitbtn").show();
	if(user_type=="")
	{
		$(".submitbtn").hide();
		java_alert_function("warning","Select User Type")
		return false;
	}
	/*var page_type = $("#page_type option:selected").text();
	if(page_type=="")
	{
		java_alert_function("warning","Select Permission Page")
		return false;
	}*/
}


function change_fafa_icon(id)
{
	value = $(".fafa_icon_"+id).val();
	onchange_page_api(id,"fafa_icon",value)
}

function change_sorting_order(id)
{
	value = $(".sorting_order_"+id).val();
	onchange_page_api(id,"sorting_order",value)
}

function onchange_page_add(id)
{
	value = $(".page_add_"+id).val();
	onchange_page_api(id,"page_add",value)
}

function onchange_page_edit(id)
{
	value = $(".page_edit_"+id).val();
	onchange_page_api(id,"page_edit",value)
}

function onchange_page_setting(id)
{
	value = $(".page_edit_"+id).val();
	onchange_page_api(id,"page_setting",value)
}

function onchange_page_api(id,type,value)
{
	$.ajax({
		type       : "POST",
		data       :  { id:id,type:type,value:value} ,
		url        : "<?= base_url()?>admin/<?= $Page_name; ?>/onchange_page_api",
		success    : function(data){
			if(data!="")
			{
				java_alert_function("success","Update Successfully");
			}
			else
			{
				java_alert_function("error","Something Wrong")
			}
		}
	});
}
</script>