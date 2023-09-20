<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Media extends CI_Controller {
	
	var $Page_title = "Media";
	var $Page_name  = "media";
	var $Page_view  = "media";
	var $Page_menu  = "media";
	var $page_controllers = "media";
	var $Page_tbl   = "tbl_media";
	public function index($id="")
	{
		$Page_title = $this->Page_title;
		$Page_name 	= $this->Page_name;
		$Page_view 	= $this->Page_view;
		$Page_menu 	= $this->Page_menu;
		$Page_tbl 	= $this->Page_tbl;
		$page_controllers 	= $this->page_controllers;	

		$data['title1'] = $Page_title;
		$data['title2'] = "View";
		$data['Page_name'] = $Page_name;
		$data['Page_menu'] = $Page_menu;
		$this->breadcrumbs->push("<i class='fa fa-home' aria-hidden='true'></i>Home","home");		

		$tbl = $Page_tbl;		

		$data['url_path'] = base_url()."uploads/manage_media/photo/main/";
		
		$id = str_replace("-"," ",$id);
		
		$data['tbl_media_category'] = $row = $this->db->query("select * from tbl_media_category where title='$id'")->row();
		
		
		$data['result'] = $result = $this->db->query("select * from $Page_tbl where category='$row->id'")->result();
		$i = 0;
		foreach($result as $row)
		{
			$i++;
		}
		if($i==1)
		{
			?>
			<script>
			window.location.href = "<?php echo base_url() ?>mediaview/<?php echo strtolower(str_replace(" ","-",$row->title)); ?>"
			</script>
			<?php
		}
		
		$this->load->view("website/header",$data);
		$this->load->view("website/media_new",$data);
		$this->load->view("website/footer",$data);
		
		$this->load->view("lightbox");
	}
	
	public function view($id="")
	{
		$Page_title = $this->Page_title;
		$Page_name 	= $this->Page_name;
		$Page_view 	= $this->Page_view;
		$Page_menu 	= $this->Page_menu;
		$Page_tbl 	= $this->Page_tbl;
		$page_controllers 	= $this->page_controllers;	

		$data['title1'] = $Page_title;
		$data['title2'] = "View";
		$data['Page_name'] = $Page_name;
		$data['Page_menu'] = $Page_menu;
		$this->breadcrumbs->push("<i class='fa fa-home' aria-hidden='true'></i>Home","home");		

		$tbl = $Page_tbl;		

		$data['url_path'] = base_url()."uploads/manage_media_child/photo/main/";
		
		
		$data['id'] = $id;
		$cat = str_replace("-"," ",$id);
		$data['id'] = $cat;
		
		$row1 = $this->db->query("select * from tbl_media where title='$cat'")->row();
		
		$data['result'] = $this->db->query("select * from tbl_media_child where status='1' and category='$row1->id'")->result();

		
		$this->load->view("website/header",$data);
		$this->load->view("website/media_new_child",$data);
		$this->load->view("website/footer",$data);
		
		$this->load->view("lightbox");
	}
}