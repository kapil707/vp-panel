<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main_Model extends CI_Model  
{
	public function get_website_data($page_type)
	{
		$value = "";
		$query = $this->db->query("select * from tbl_website where page_type='$page_type'")->row();
		if(!empty($query->id))
		{
			$value = $query->mydata;
		}
		return $value;
	}
	
	public function image_to_webp($path='',$file='',$upload_resize='',$upload_path='')
	{
		$image = imagecreatefromstring(file_get_contents($path.$file));
		ob_start();
		imagejpeg($image,NULL,100);
		$cont = ob_get_contents();
		ob_end_clean();
		imagedestroy($image);
		$content = imagecreatefromstring($cont);
		$output = $upload_resize.$file.'.webp';
		imagewebp($content,$output);
		imagedestroy($content);	
		
		//unlink($upload_path.$file);
	}
	
	function get_single_data_result($tbl='',$where='',$orderby='',$asc_desc='',$limit='',$limit_start='')
	{
		if($where!="")
		{
			$this->db->where($where);
		}
		if($orderby!="")
		{
			if($asc_desc=="asc")
			{
				$this->db->order_by($orderby,"asc");
			}
			if($asc_desc=="desc")
			{
				$this->db->order_by($orderby,"desc");
			}
		}
		if($limit!="")
		{
			$this->db->limit($limit, $limit_start);
		}
		return $this->db->get($tbl)->result();
	}
	
	
	function youtube_url($str="")
	{
		$str = str_replace("https://www.youtube.com/watch?v=","",$str);
		$str = "https://www.youtube.com/embed/".$str;
		return $str;
	}}  