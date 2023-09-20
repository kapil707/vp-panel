<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_menu'))
{
    function get_menu()
    {	
		$ci =& get_instance();
		$ci->load->database(); 
	
		$result = $ci->db->query("select * from tbl_menu where status=1 and menu_id=0 order by seq_no asc")->result();
		foreach($result as $row){
			$x.= '<li><a href="'.base_url().$row->url.'" class="nav-link">'.$row->menu.'</a></li>';
		}
        return $x;
    }   
	
	function get_library_to_image($id,$type="")
    {
		$ci =& get_instance();
		$ci->load->database(); 
	
		$row = $ci->db->query("select image from tbl_library where id='$id'")->row();
		
		if($row->image && $type==""){
			return base_url()."uploads/manage_library/photo/resize/".$row->image;
		}
		
		if($row->image && $type=="main"){
			return base_url()."uploads/manage_library/photo/main/".$row->image;
		}
	}
	
	function get_field_data($field_name)
    {
		$ci =& get_instance();
		$ci->load->database(); 
	
		$row = $ci->db->query("select title from tbl_field_data where field_name='$field_name'")->row();
		return $row->title;
	}
}