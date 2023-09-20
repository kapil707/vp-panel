<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Scheme_Model extends CI_Model  
{
	function get_single_data_row($tbl='',$where='',$orderby='',$asc_desc='')
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
		return $this->db->get($tbl)->row();
	}
	
	function get_single_data_result($tbl='',$where='',$orderby='',$asc_desc='',$limit='')
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
	
	function get_product_all_info($id)
	{
		$this->db->select('tbl_product.id,tbl_product.url,tbl_product.image,tbl_product.name,tbl_product.url');
		$this->db->from('tbl_product');
		$this->db->join('tbl_product_category', "tbl_product_category.product_id=tbl_product.id", 'right outer');
		$where = array('tbl_product_category.category_id'=>$id,'tbl_product.status'=>'1');
		$this->db->where($where);
		$this->db->limit(4);
		$query = $this->db->get();
		return $query->result();
	}
	function insert_fun($tbl,$dt)
	{
		if($this->db->insert($tbl,$dt))
		{
			return $this->db->insert_id();
		}
		else
		{
			return false;
		}
	}
	function select_all_fun($tbl,$where)
	{
		if($where!="")
		{
			$this->db->where($where);
		}
		return $this->db->get($tbl)->result_array();	
	}
	function select_all_fun_order_by($tbl,$where,$orderby)
	{
		if($where!="")
		{
			$this->db->where($where);
		}	
		if($orderby!="")
		{
			$this->db->order_by($orderby);
		}
		return $this->db->get($tbl)->result_array();	
	}
	function edit_fun($tbl,$dt,$where)
	{
		if($this->db->update($tbl,$dt,$where))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function delete_fun($tbl,$where)
	{
		if($this->db->delete($tbl,$where))
		{
			return true;				
		}
		else
		{
			return false;
		}
	}
	function time_conveter($display_time_H,$display_time_i)
	{		
		if($display_time_H == "00")
		{
			$display_time = "12:$display_time_i AM";
		}
		if($display_time_H == "01")
		{
			$display_time = "01:$display_time_i AM";
		}
		if($display_time_H == "02")
		{
			$display_time = "02:$display_time_i AM";
		}
		if($display_time_H == "03")
		{
			$display_time = "03:$display_time_i AM";
		}
		if($display_time_H == "04")
		{
			$display_time = "04:$display_time_i AM";
		}
		if($display_time_H == "05")
		{
			$display_time = "05:$display_time_i AM";
		}
		if($display_time_H == "06")
		{
			$display_time = "06:$display_time_i AM";
		}
		if($display_time_H == "07")
		{
			$display_time = "07:$display_time_i AM";
		}
		if($display_time_H == "08")
		{
			$display_time = "08:$display_time_i AM";
		}
		if($display_time_H == "09")
		{
			$display_time = "09:$display_time_i AM";
		}
		if($display_time_H == "10")
		{
			$display_time = "10:$display_time_i AM";
		}
		if($display_time_H == "11")
		{
			$display_time = "11:$display_time_i AM";
		}
		if($display_time_H == "12")
		{
			$display_time = "12:$display_time_i PM";
		}
		if($display_time_H == "13")
		{
			$display_time = "01:$display_time_i PM";
		}
		if($display_time_H == "14")
		{
			$display_time = "02:$display_time_i PM";
		}
		if($display_time_H == "15")
		{
			$display_time = "03:$display_time_i PM";
		}
		if($display_time_H == "16")
		{
			$display_time = "04:$display_time_i PM";
		}
		if($display_time_H == "17")
		{
			$display_time = "05:$display_time_i PM";
		}
		if($display_time_H == "18")
		{
			$display_time = "06:$display_time_i PM";
		}
		if($display_time_H == "19")
		{
			$display_time = "07:$display_time_i PM";
		}
		if($display_time_H == "20")
		{
			$display_time = "08:$display_time_i PM";
		}
		if($display_time_H == "21")
		{
			$display_time = "09:$display_time_i PM";
		}
		if($display_time_H == "22")
		{
			$display_time = "10:$display_time_i PM";
		}
		if($display_time_H == "23")
		{
			$display_time = "11:$display_time_i PM";
		}
		return $display_time;
	}
	
	public function Under_User($under_id)
	{ 
		$where = array('id'=>$under_id);
		$result = $this->select_all_fun("tbl_admin",$where);
		foreach ($result as $row)
		{
			return $row["name"]." (".$row["user_type"].")";
		}
	}
	public function record_count($tbl) {
		return $this->db->count_all($tbl);
	}
	public function youtube_video_url($video_url)
	{
		$video_url = str_replace("https://www.youtube.com/watch?v=","",$video_url);
		$video_url = str_replace("http://www.youtube.com/watch?v=","",$video_url);
		$video_url = str_replace("https://youtu.be/","",$video_url);
		$video_url = str_replace("http://youtu.be/","",$video_url);
		return $video_url;
	}
	public function photo_up($name,$x,$y,$upload_path)
	{
		$name = $name."_".time().".png";
		move_uploaded_file($y,$upload_path.$name);
		return $name;
	}
	
	public function new_photo_code_by_kapil($upload_path,$photo,$upload_resize,$thumbSize_w,$thumbSize_h)
	{
		//$imgSrc = "photo7_1560153205.png";
		$imgSrc = $upload_path.$photo;
		
		$photo = str_replace(".png","",$photo);
		//getting the image dimensions
		list($width, $height) = getimagesize($imgSrc);
		//saving the image into memory (for manipulation with GD Library)
		$myImage = imagecreatefromjpeg($imgSrc);
		// calculating the part of the image to use for thumbnail
		if ($width > $height) {
			$y = 0;
			$x = ($width - $height) / 2;
			$smallestSide = $height;
		} else {
			$x = 0;
			$y = ($height - $width) / 2;
			$smallestSide = $width;
		}
		// copying the part into thumbnail
		/*$thumbSize_w = 1000;
		$thumbSize_h = 275;*/
		$thumb = imagecreatetruecolor($thumbSize_w, $thumbSize_h);
		imagecopyresampled($thumb, $myImage, 0, 0, $x, $y, $thumbSize_w, $thumbSize_h,$smallestSide, $smallestSide);
		//final output
		header('Content-type: image/jpeg');
		/*imagejpeg($thumb, "resized.jpg" );*/
		imagejpeg($thumb,$upload_resize.$photo.".jpg");
	}
	public function img_resize($tmpname,$size,$save_dir,$save_name,$maxisheight=0)
	{
		$save_dir	.= ( substr($save_dir,-1) != "/") ? "/" : "";
		$gis		 = getimagesize($tmpname);
		$type        = $gis[2];
		
		switch($type)
		{
			case "1": $imorig = imagecreatefromgif($tmpname); break;
			case "2": $imorig = imagecreatefromjpeg($tmpname);break;
			case "3": $imorig = imagecreatefrompng($tmpname); break;
			default:  $imorig = imagecreatefromjpeg($tmpname);
		}
		$x = imagesx($imorig);
		$y = imagesy($imorig);
		$woh = (!$maxisheight)? $gis[0] : $gis[1] ;   
		if($woh <= $size)
		{
			$aw = $x;
			$ah = $y;
		}
		else
		{
			if(!$maxisheight)
			{
				$aw = $size;
				$ah = $size * $y / $x;
			} 
			else
			{
				$aw = $size * $x / $y;
				$ah = $size;
			}
		}
		$im = imagecreatetruecolor($aw,$ah);
    	if (imagecopyresampled($im,$imorig , 0,0,0,0,$aw,$ah,$x,$y))
		if (imagejpeg($im, $save_dir.$save_name))
		{
            return true;
		}
		else
		{
			return false;
		}
	}
	
	public function get_website_data($page_type)
	{
		$query = $this->db->query("select * from tbl_website where page_type='$page_type'")->row();
		if($query->mydata=="")
		{
			$query->mydata = base64_encode("");
		}
		return base64_decode($query->mydata);
	}
	
	public function watermark_image($oldimage_name,$new_image_name,$image_path)
	{
		list($owidth,$oheight) = getimagesize($oldimage_name);
		$width = 770;
		$height = 430;    
		$im = imagecreatetruecolor($width, $height);
		$img_src = imagecreatefromjpeg($oldimage_name);
		imagecopyresampled($im, $img_src, 0, 0, 0, 0, $width, $height, $owidth, $oheight);
		$watermark = imagecreatefrompng($image_path);
		list($w_width, $w_height) = getimagesize($image_path);    
		$pos_x = $width - $w_width; 
		$pos_y = $height - $w_height;
		imagecopy($im, $watermark, 210, 200, 0, 0, $w_width, $w_height);
		imagejpeg($im, $new_image_name, 100);
		imagedestroy($im);
		unlink($oldimage_name);
		return true;
	}
	
	public function get_seleced_theme($type)
	{
		$query = $this->db->query("select * from tbl_theme where $type='1'");
		$row = $query->row();
		return $row->id;
	}
	
	public function get_product_category_range_low($category_id,$catname)
	{
		$query = $this->db->query("select tbl_variations1_variations2_join.price1 from tbl_product_category,tbl_variations1_variations2_join where ($catname) and tbl_variations1_variations2_join.product_id=tbl_product_category.product_id and tbl_variations1_variations2_join.price1!='0' order by tbl_variations1_variations2_join.price1 asc")->row();
		$x = $query->price1;
		
		return $x;
	}
	
	public function get_product_category_range_high($category_id,$catname)
	{
		$query = $this->db->query("select tbl_variations1_variations2_join.price1 from tbl_product_category,tbl_variations1_variations2_join where ($catname) and tbl_variations1_variations2_join.product_id=tbl_product_category.product_id and tbl_variations1_variations2_join.price1!='0' order by tbl_variations1_variations2_join.price1 desc")->row();
		$x1 = $query->price1;
		if($x<=$x1)
		{
			$x = $x1;
		}
		
		return $x;
	}
	public function get_price_today()
	{
		$query = $this->db->query("select * from tbl_website where page_type='price_today'")->row();
		$x = base64_decode($query->mydata);
		if($x=="" || $x=="0")
		{
			$x = "1";
		}
		return $x;
	}
	
	public function get_product_price($id)
	{
		error_reporting(0);
		$query = $this->db->query("select * from tbl_product where id='$id'")->row();
		
		if($query->product_type=="3")
		{
			$combo_product = $query->combo_product;
			$combo_product2 = explode(",",$combo_product);
			$xy = 0;
			foreach($combo_product2 as $pid)
			{
				// yha wo ha jo bik gaya ha
				$query1n = $this->db->query("select * from tbl_variations1_variations2_join where id='$pid'")->row();
				$get_available1 = $this->Scheme_Model->get_available($product_id,$query1n->variations1,$query1n->variations2);
				
				$get_available2[$xy] = $query1n->quantity - $get_available1;
				$xy++;
			}
			sort($get_available2);
		}
		
		if($query->product_type==1 || $query->product_type==3)
		{
			$query1 = $this->db->query("select * from tbl_variations1_variations2_join where product_id='$id' and variations1='0' and variations2='0' order by final_price asc")->row();
		}
		if($query->product_type==2)
		{
			$query1 = $this->db->query("select * from tbl_variations1_variations2_join where product_id='$id' and variations1!='0' and variations2!='0' order by final_price asc")->row();
		}
		
		$get_available = $this->Scheme_Model->get_available($id,$query1->variations1,$query1->variations2);
		
		if($query1->discount=="" || $query1->discount=="0")
		{
			$query1->discount = "";
		}		
		$price = $query1->price;
		//$x[0] = $price + ($price * $query->product_gst / 100);
		$x[0] = $price;
		if($query1->discount == "")
		{
			$x[1] = $price;
		}
		else
		{
			$x[1] = $query1->discount;
		}
		//$x[1] =	$x[1] + ($x[1] * $query->product_gst / 100);
		$x[1] =	$x[1];
		$x[2] = $query1->discount;
		if($x[2]!="")
		{
			$x[2] = $price - $query1->discount;
			$x[2] = ($x[2] / $price) * 100;
			$x[2] = round($x[2])."% off";
		}		
		if($query->product_type=="3")
		{
			$x[3] = $get_available2[0];
		}
		else
		{
			$x[3] = $query1->quantity - $get_available;
			if($x[3]==0 || $x[3]=="")
			{
				$x[2] = "0";
			}
		}
		
		$today_date = date("Ymd");
		$sale_end_date = date("Ymd",strtotime($query1->sale_end_date));
		if($query1->discount!="")
		{
			if($sale_end_date=="19700101")
			{
				$sale_end_date=$today_date;
			}
			if($today_date<=$sale_end_date)
			{
			}
			else
			{
				$x[1] = $x[0];
				$query1->discount = $x[2] = "";
			}
		}
		$x[4] = $query->button_type;
		if($x[4]=="0")
		{
			$variations1 	= $query1->id;
			$product_id 	= $query->id;
			if($query->product_type==1 || $query->product_type==3)
			{
				if($x[3]!=0)
				{
					$query2 = $this->db->query("select * from tbl_variations1_variations2_join where product_id='$product_id' and id='$variations1' and variations1='0' and variations2='0'")->row();
					
					$variations1_id = $query2->variations1;
					$variations2_id = $query2->variations2;
					
					$temp_id = $_SESSION['temp_id'];
					$query3 = $this->db->query("select * from tbl_add_to_cart where product_id='$product_id' and temp_id='$temp_id' and variations1_id='$variations1_id' and variations2_id='$variations2_id'")->row();
					if($query3->id!="")
					{
						$cid= $query3->id;
						$my = "<div class='mobile_col_off col-sm-6 col-6 new_add_to_cart_css new_add_to_cart_".$product_id."'><a title='Remove From cart' class='btn btn-danger full_width_btn mybtn_remove_from_cart_color pt-2 pb-2 pr-3 pl-3' onclick='new_remove_to_cart(".$cid.",".$product_id.",".$variations1.")' href='JavaScript:Void(0);' style='width:100%'><i class='fa fa-shopping-bag mr-1'></i>Remove</a></div>
						
						<div class='mobile_div_show col-sm-12 col-12 new_add_to_cart_css new_add_to_cart_".$product_id."'><a title='Remove From cart' class='btn btn-danger full_width_btn1 mybtn_remove_from_cart_color pt-2 pb-2 pr-3 pl-3' onclick='new_remove_to_cart(".$cid.",".$product_id.",".$variations1.")' href='JavaScript:Void(0);' style='width:100%'><i class='fa fa-shopping-bag mr-1'></i>Remove</a></div>";
					}
					else
					{
						$my = "<div class='mobile_col_off col-sm-6 col-6 new_add_to_cart_css new_add_to_cart_".$product_id."'><a title='Add To Cart' class='btn btn-primary full_width_btn mybtn_add_to_cart_color pt-2 pb-2 pr-3 pl-3' onclick='new_add_to_cart(".$product_id.",".$variations1.")' href='JavaScript:Void(0);'><i class='fa fa-shopping-bag mr-1'></i>Add to Cart</a></div>
						
						<div class='mobile_div_show col-sm-12 col-12 new_add_to_cart_css new_add_to_cart_".$product_id."'><a title='Add To Cart' class='btn btn-primary full_width_btn1 mybtn_add_to_cart_color pt-2 pb-2 pr-3 pl-3' onclick='new_add_to_cart(".$product_id.",".$variations1.")' href='JavaScript:Void(0);'><i class='fa fa-shopping-bag mr-1'></i>Add to Cart</a></div>
						";
					}
					$x[5] = $my."<div class='mobile_col_off col-sm-6 col-6 new_buy_now_div_css new_buy_now_div_".$product_id."'><a title='Buy Now' class='btn btn-warning full_width_btn mybtn_buy_now_cart_color pt-2 pb-2 pr-3 pl-3' onclick='new_buy_now(".$product_id.",".$variations1.")' href='JavaScript:Void(0);'><i class='fa fa-check-circle' aria-hidden='true'></i>Buy Now</a></div>";
				}
				else
				{
					$x[5] = "<div class='col-sm-12'><a class='btn btn-danger full_width_btn1 mybtn_out_of_stock_cart_color pt-2 pb-2 pr-3 pl-3' href='#'>Out Of Stock</a></div>";
				}
			}
			if($query->product_type==2)
			{
				$x[5] = "<div class='col-sm-12'><a title='Options' href='".base_url()."product/".$query->url.".html' class='btn btn-primary full_width_btn1 mybtn_options_cart_color'><i class='fa fa-shopping-bag mr-1'></i>Options</a></div>";
			}
		}
		if($x[4]=="1")
		{
			$x[5] = "<div class='col-12'><a title='View Product' href='".base_url()."product/".$query->url.".html' class='btn btn-primary full_width_btn1 mybtn_view_product_cart_color'><i class='fa fa-shopping-bag mr-1'></i>View Product</a></div>";
		}
		return $x;
	}
	
	public function get_product_price_var($id)
	{
		$query1 = $this->db->query("select * from tbl_variations1_variations2_join where id='$id'")->row();	
		$product_id = $query1->product_id;
		$get_available = $this->Scheme_Model->get_available($product_id,$query1->variations1,$query1->variations2);	
		$query = $this->db->query("select * from tbl_product where id='$product_id'")->row();
		if($query->product_type=="3")
		{
			$combo_product = $query->combo_product;
			$combo_product2 = explode(",",$combo_product);
			$xy = 0;
			foreach($combo_product2 as $pid)
			{
				// yha wo ha jo bik gaya ha
				$query1n = $this->db->query("select * from tbl_variations1_variations2_join where id='$pid'")->row();
				$get_available1 = $this->Scheme_Model->get_available($product_id,$query1n->variations1,$query1n->variations2);			
				$get_available2[$xy] = $query1n->quantity - $get_available1;
				$xy++;
			}
			sort($get_available2);
		}	
		if($query1->discount=="" || $query1->discount=="0")
		{
			$query1->discount = "";
		}
		$price = $query1->price;
		//$x[0] = $price + ($price * $query->product_gst / 100);
		$x[0] = $price;
		if($query1->discount == "")
		{
			$x[1] = $price;
		}
		else
		{
			$x[1] = $query1->discount;
		}
		//$x[1] =	$x[1] + ($x[1] * $query->product_gst / 100);
		$x[2] = $query1->discount;
		if($x[2]!="")
		{
			$x[2] = $price - $query1->discount;
			$x[2] = ($x[2] / $price) * 100;
			$x[2] = round($x[2])."% off";
		}
		if($query->product_type=="3")
		{
			$x[3] = $get_available2[0];
		}
		else
		{
			$x[3] = $query1->quantity - $get_available;
			if($x[3]==0 || $x[3]=="")
			{
				$x[2] = "0";
			}
		}
		$today_date = date("Ymd");
		$sale_end_date = date("Ymd",strtotime($query1->sale_end_date));
		if($query1->discount!="")
		{
			if($sale_end_date=="19700101")
			{
				$sale_end_date=$today_date;
			}
			if($today_date<=$sale_end_date)
			{
			}
			else
			{
				$x[1] = $x[0];
				$query1->discount = $x[2] = "";
			}
		}
		return $x;
	}
	
	public function product_variations1_name_to_id($id)
	{
		$query = $this->db->query("select * from tbl_variations1 where id='$id' ")->row();
		$x = $query->variations1_name;
		return $x;
	}
	
	public function product_variations2_name_to_id($id)
	{
		$query = $this->db->query("select * from tbl_variations2 where id='$id' ")->row();
		$x = $query->variations2_name;
		return $x;
	}
	
	public function product_search_variations1($get,$pid)
	{
		$xx = "0";
		if($get["price1"]=="")
		{
			$xx = "1";
		}
		$q1 = $this->db->query("select DISTINCT tbl_variations1.variations1_name from tbl_product,tbl_variations1 where  tbl_product.id=$pid and  tbl_variations1.product_id=tbl_product.id and tbl_product.status='1' ")->result();
		foreach($q1 as $row123)
		{
			$x = ucwords(base64_decode($row123->variations1_name));
			if($get[$x]=="on")
			{
				$xx = "1";
			}
		}
		return $xx;
	}
	
	public function product_search_variations2($get,$pid)
	{
		$xx = "0";
		if($get["price1"]=="")
		{
			$xx = "1";
		}
		$q1 = $this->db->query("select DISTINCT tbl_variations2.variations2_name from tbl_product,tbl_variations2 where  tbl_product.id=$pid and  tbl_variations2.product_id=tbl_product.id and tbl_product.status='1' ")->result();
		foreach($q1 as $row123)
		{
			$x = ucwords(base64_decode($row123->variations2_name));
			if($get[$x]=="on")
			{
				$xx = "1";
			}
		}
		return $xx;
	}
	
	public function get_selected_product_price($id)
	{
		$temp_id = $_SESSION["temp_id"];
		$query = $this->db->query("select * from tbl_add_to_cart where id='$id' and temp_id='$temp_id'")->row();
		if($query->id)
		{
			$x[0] = $query->price;
			$discount = $query->discount;
			if($discount=="" || $discount==0)
			{
			}
			else
			{
				$x[0] = $discount;
			}
			$x[1] = $query->product_quantity;
			//$x[2] = $x[0] * $query->gst / 100;
			$x[3] = ($x[0] + $x[2]) * $x[1];
		}
		return $x;
	}
	
	function compressImage($ext,$uploadedfile,$path,$actual_image_name,$newwidth)
	{
		if($ext=="jpg" || $ext=="jpeg")
		{
			$src = imagecreatefromjpeg($uploadedfile);
		}
		else if($ext=="png")
		{
			$src = imagecreatefrompng($uploadedfile);
		}
		else if($ext=="gif")
		{
			$src = imagecreatefromgif($uploadedfile);
		}
		else
		{
			$src = imagecreatefrombmp($uploadedfile);
		}
																		
		list($width,$height)=getimagesize($uploadedfile);
		$newheight=($height/$width)*$newwidth;
		$tmp=imagecreatetruecolor($newwidth,$newheight);
		imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
		$filename = $path.$newwidth.'_'.$actual_image_name;
		imagejpeg($tmp,$filename,100);
		imagedestroy($tmp);
		$filename = $actual_image_name;
		return $filename;
	}
	function getExtension($str) 
	{
		$i = strrpos($str,".");
		if (!$i) { return ""; } 
		$l = strlen($str) - $i;
		$ext = substr($str,$i+1,$l);
		return $ext;
	}
	
	public function get_category_default_image($image,$css)
	{
		//$image = str_replace(".png","",$image).".jpg";
		$u2 = base_url()."uploads/manage_category/photo/resize/".$image;
		if(@GetImageSize($u2))
		{	
		}
		?>
		<img class="<?= $css ?>" src="<?=$u2; ?>">
		<?php
	}
	
	public function get_product_default_image($id,$css)
	{
		$upload_resize 		= base_url()."uploads/manage_product/photo/resize/";
		$query = $this->db->query("select * from tbl_multiple_image where product_id='$id' order by img_no asc")->row();
		if($query->id)
		{
			?>
			<div class="img_hover_css">
			<?php
			$myic = 1;
			$query1 = $this->db->query("select * from tbl_multiple_image where product_id='$id' order by img_no asc limit 2")->result();
			foreach($query1 as $row1)
			{
				//$row1->image = str_replace(".png","",$row1->image).".jpg";
				$x = $upload_resize.$row1->image;
				if($myic==1){
				?>
				<img src="<?=$x; ?>" class="<?= $css ?> img_hover_css<?= $myic ?>">
				<?php
				}
				if($myic==2){
				?>
				<img src="<?=$x; ?>" class="<?= $css ?> img_hover_css<?= $myic ?>">
				<?php
				}
				$myic++;
			}
			?>
			</div>
			<?php
		}
		else
		{
			?>
			<img src="<?= base_url()?>/uploads/manage_product/photo/notfound.png" class="<?= $css ?>">
			<?php
		}
		return $x;
	}
	
public function cart_total_amount($coutry_id,$state_id)
	{
		$price_icon = $this->Scheme_Model->get_website_data("price_icon");
		$total = 0;
		$gst = 0;
		$temp_id = $_SESSION['temp_id'];
		$result = $this->db->query("select * from tbl_add_to_cart where temp_id='$temp_id'")->result();
		foreach($result as $row)
		{
			$total+= $row->final_price * $row->quantity;
		}
		$invoice_country 	= $this->Scheme_Model->get_website_data("invoice_country") ;$invoice_state 		= $this->Scheme_Model->get_website_data("invoice_state");
		$shipping_free 		= $this->Scheme_Model->get_website_data("shipping_free");
		$shipping 			= $this->Scheme_Model->get_website_data("shipping");
		
		$query = $this->db->query("select * FROM `tbl_shipping` where country_id='$coutry_id' and state_id='$state_id'")->row();
		if($query->id)
		{
			$shipping = $query->shipping;
		}
		$coupon_code_discount = $_SESSION["coupon_code_discount"];
		return round($total+$gst+$shipping-$coupon_code_discount,2);
	}
	
	public function newcart_show_me()
	{
		$price_icon = $this->Scheme_Model->get_website_data("price_icon");
		?>
		<ul data-money-format="Rs. {{amount}}" data-shop-currency="INR" data-shop-name="Meraki Essentials">
		<li class="mm-subtitle" style="width:100% !important;float:left !important;margin-bottom:10px;text-align: right;height: 22px;"><a class="continue ss-icon" href="#cart" style="margin: -10px;"><span class="icon-close"></span></a></li>
		<?php
		$i = 1;
		$temp_id = $_SESSION['temp_id'];
		$result = $this->db->query("select * from tbl_add_to_cart where temp_id='$temp_id'")->result();
		foreach($result as $row)
		{
			$row_id = $row->id;
			$product_id = $row->product_id;
			$row1 = $this->db->query("select * from tbl_product where id='$product_id'")->row();
			$pro = $this->Scheme_Model->get_selected_product_price($row->id); ?>
			<li class="cart_item cart_table_item cart_item_<?php echo $row_id ?>" style="width:100% !important;float:left !important; margin-bottom:10px;">
				
					<div class="cart_image">
						<a href="<?= base_url(); ?>product/<?= $row1->url; ?>.html?v1=<?= $row->variations1_name?>&v2=<?= $row->variations2_name?>" title="<?= base64_decode($row->product_name)?>">
						<?php
						$join = $this->db->query("select * from tbl_variations1_variations2_join where variations1='$row->variations1_id' and variations2='$row->variations2_id'")->row();
						$img = $this->db->query("select * from tbl_multiple_image where join_id='$join->id'")->row(); ?>
						<img src="<?= base_url(); ?>/uploads/manage_product/photo/resize/<?= $img->image; ?>" alt="<?= base64_decode($row->product_name)?>" /></a>
					</div>
					<div class="item_info">
						<a href="<?= base_url(); ?>product/<?= $row1->url; ?>.html?v1=<?= $row->variations1_name?>&v2=<?= $row->variations2_name?>" title="<?= base64_decode($row->product_name)?>">
						<?= base64_decode($row->product_name)?>
						<?php
						if($row1->variations1_title!="")
						{
							?>
							<br>
							<?= base64_decode($row1->variations1_title); ?>:
							<span>
							<?= base64_decode($row->variations1_name); ?>
							</span>
							<?php
						}
						?>
						<?php
						if($row1->variations2_title!="")
						{
							?>
							<br>
							<?= base64_decode($row1->variations2_title); ?>:
							<?php
							if($row->variations2_name!="0") { ?>
							<span>
							<?= base64_decode($row->variations2_name); ?>
							</span>
							<?php
							}
						}
						?>
						</a>
						<div class="price">
							<span class="money">
							<?= $price_icon ?>
							<?= number_format($pro[3],2);?>
							</span>
						</div>
						<a href="javascript:void(0);" title="Remove this item" onclick="remove_to_cart_in_cart_page('<?php echo $row->id ?>')">Remove</a>
					</div>
				
			</li>
					
		<?php 
		$cart_count++;
		}
			if($cart_count!=0)
			{
			?>
			<li class="mm-subtitle clearfix">
				<a href="<?= base_url(); ?>cart" class="action_button edit_cart right" style="float: left;width: 35%;">View Cart</a>
				<a href="<?= base_url(); ?>cart/Checkout" class="action_button right" style="float: left;width: 35%;">
				Checkout
				</a>
			</li>
			<?php
			}
			if($cart_count==0 || $cart_count=="")
			{
				?>
				<p class="mm-counter">
				  <span class="icon-minus minus"></span><input type="number" min="0" class="quantity" name="updates[]" id="updates_3656319270941" value="1" data-line-id="1" readonly /><span class="icon-plus plus"></span>
				</p>
				<?php
			}
			?>
		</ul>
		<?php
		$_SESSION["new_cart_count"] = $cart_count;
	}
	
	public function register_email($id)
	{
		$row = $this->db->query("select * from tbl_client where id='$id'")->row();
		?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">		
		<?php
		$invoice_name = "RegisterAccount";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";
		$headers .= "From: \"$invoice_name\" <$invoice_name>\r\n";
		$subject = "Register Account";
		
		$img_url = base_url()."/uploads/manage_website/photo/".$this->Scheme_Model->get_website_data("invoice_logo");
		$invoice_country = $this->Scheme_Model->get_website_data("invoice_country");
		$invoice_state = $this->Scheme_Model->get_website_data("invoice_state");
		$invoice_state = $this->db->query("select * from tbl_state where id=
		'$invoice_state'")->row();
		$invoice_state = $invoice_state->name;
		
		$invoice_country = $this->db->query("select * from tbl_country where id='$invoice_country'")->row();
		$invoice_country = $invoice_country->name;
		
		$invoice_address = $this->Scheme_Model->get_website_data("invoice_address").",".$invoice_state.",".$invoice_country;
		$invoice_footer = $this->Scheme_Model->get_website_data("invoice_footer");
		
		$mailbody = "<table cellpadding='5' bgcolor='#eee' cellspacing='5' style='max-width: 600px;margin: auto; padding: 30px; border: 1px solid #ffffff; box-shadow: 0 0 10px rgba(0, 0, 0, .15); font-size: 16px;line-height: 24px;  font-family: Arial; background:#ffffff; color: #2e2e2e;'>
		<tr class='information'>
		<td colspan='2'>
			<table style='width: 600px; line-height: inherit; text-align: left;'>
				<tr>
					<td>
						<table style='width: 600px; line-height: inherit; text-align: left;'>
							<tr>
								<td style='padding-bottom: 20px;padding-top: 18px;text-align:center; width:35%;' width='35%'>
									<img src='".$img_url."' width='90%'>
								</td>
								<td style='padding-bottom: 20px;padding-top: 20px;text-align:right;'>
									".$invoice_address."
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td style='border-bottom-style: solid;  border-bottom-color: #dbc180;border-bottom-width: 2px;'></td>
				</tr>
				<tr>
					<td style='padding-bottom: 40px; text-align: center; padding-bottom: 20px;'>
						<h3>".$title_me."</h3>
					</td>
				</tr>
				<tr>
					<td>
				Dear ".base64_decode($row->fname).",<br><br> Thanks to Register your account<br><br> Your Login Details<br><br> Email: $row->email <br><br> Password: your password<br><br>
					</td>
				</tr>
			</table>";
		
		$email = $row->email;
		
		$to	= $email.",".$this->Scheme_Model->get_website_data("invoice_email");
		mail($to, $subject, $mailbody, $headers ."X-Mailer: PHP/" . phpversion());
	}
	
	public function enquiry_email_for_user($id)
	{
		$row = $this->db->query("select * from tbl_enquiry where id='$id'")->row();
		$invoice_name = "Enquiry";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";
		$headers .= "From: \"$invoice_name\" <$invoice_name>\r\n";
		$subject = "Register Account";
		
		$img_url = base_url()."/uploads/manage_website/photo/".$this->Scheme_Model->get_website_data("invoice_logo");
		$invoice_country = $this->Scheme_Model->get_website_data("invoice_country");
		$invoice_state = $this->Scheme_Model->get_website_data("invoice_state");
		$invoice_state = $this->db->query("select * from tbl_state where id=
		'$invoice_state'")->row();
		$invoice_state = $invoice_state->name;
		
		$invoice_country = $this->db->query("select * from tbl_country where id='$invoice_country'")->row();
		$invoice_country = $invoice_country->name;
		
		$invoice_address = $this->Scheme_Model->get_website_data("invoice_address").",".$invoice_state.",".$invoice_country;
		$invoice_footer = $this->Scheme_Model->get_website_data("invoice_footer");
		
		$mailbody = "<table cellpadding='5' bgcolor='#eee' cellspacing='5' style='max-width: 600px;margin: auto; padding: 30px; border: 1px solid #ffffff; box-shadow: 0 0 10px rgba(0, 0, 0, .15); font-size: 16px;line-height: 24px;  font-family: Arial; background:#ffffff; color: #2e2e2e;'>
		<tr class='information'>
		<td colspan='2'>
			<table style='width: 600px; line-height: inherit; text-align: left;'>
				<tr>
					<td>
						<table style='width: 600px; line-height: inherit; text-align: left;'>
							<tr>
								<td style='padding-bottom: 20px;padding-top: 18px;text-align:center; width:35%;' width='35%'>
									<img src='".$img_url."' width='90%'>
								</td>
								<td style='padding-bottom: 20px;padding-top: 20px;text-align:right;'>
									".$invoice_address."
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td style='border-bottom-style: solid;  border-bottom-color: #dbc180;border-bottom-width: 2px;'></td>
				</tr>
				<tr>
					<td style='padding-bottom: 40px; text-align: center; padding-bottom: 20px;'>
						<h3>".$title_me."</h3>
					</td>
				</tr>
				<tr>
					<td>
					Dear ".($row->full_name).",<br><br> Thank to send enquiry contact you soon as possible<br><br>
					</td>
				</tr>
			</table>";
		
		$email = $row->email;
		
		$to	= $email;
		mail($to, $subject, $mailbody, $headers ."X-Mailer: PHP/" . phpversion());
	}
	
	public function enquiry_email_for_admin($id)
	{
		$row = $this->db->query("select * from tbl_enquiry where id='$id'")->row();
		
		$invoice_name = "Enquiry";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";
		$headers .= "From: \"$invoice_name\" <$invoice_name>\r\n";
		$subject = "Register Account";
		
		$img_url = base_url()."/uploads/manage_website/photo/".$this->Scheme_Model->get_website_data("invoice_logo");
		$invoice_country = $this->Scheme_Model->get_website_data("invoice_country");
		$invoice_state = $this->Scheme_Model->get_website_data("invoice_state");
		$invoice_state = $this->db->query("select * from tbl_state where id=
		'$invoice_state'")->row();
		$invoice_state = $invoice_state->name;
		
		$invoice_country = $this->db->query("select * from tbl_country where id='$invoice_country'")->row();
		$invoice_country = $invoice_country->name;
		
		$invoice_address = $this->Scheme_Model->get_website_data("invoice_address").",".$invoice_state.",".$invoice_country;
		$invoice_footer = $this->Scheme_Model->get_website_data("invoice_footer");
		
		$product_name = base64_decode($row->product_name);
		if($row->variations1_name!="")
		{
			$product_name.= ",".base64_decode($row->variations1_name);
		}
		if($row->variations2_name!="")
		{
			$product_name.= ",".base64_decode($row->variations2_name);
		}
		$tbl_product = $this->db->query("select * from tbl_product where id='$row->product_id'")->row();
		$siteurl = base_url()."product/".$tbl_product->url.".html?v1=".$row->variations1_name."&$v2=".$row->variations2_name;
		$adminurl = base_url()."admin/manage_product/edit/".$row->product_id;
		
		$mailbody = "<table cellpadding='5' bgcolor='#eee' cellspacing='5' style='max-width: 600px;margin: auto; padding: 30px; border: 1px solid #ffffff; box-shadow: 0 0 10px rgba(0, 0, 0, .15); font-size: 16px;line-height: 24px;  font-family: Arial; background:#ffffff; color: #2e2e2e;'>
		<tr class='information'>
		<td colspan='2'>
			<table style='width: 600px; line-height: inherit; text-align: left;'>
				<tr>
					<td>
						<table style='width: 600px; line-height: inherit; text-align: left;'>
							<tr>
								<td style='padding-bottom: 20px;padding-top: 18px;text-align:center; width:35%;' width='35%'>
									<img src='".$img_url."' width='90%'>
								</td>
								<td style='padding-bottom: 20px;padding-top: 20px;text-align:right;'>
									".$invoice_address."
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td style='border-bottom-style: solid;  border-bottom-color: #dbc180;border-bottom-width: 2px;'></td>
				</tr>
				<tr>
					<td style='padding-bottom: 40px; text-align: center; padding-bottom: 20px;'>
						<h3>".$title_me."</h3>
					</td>
				</tr>
				<tr>
					<td>
						Name:- ".$row->full_name."<br>
						Email:- ".$row->email."<br>
						MobileNo:- ".$row->mobile_no."<br>
						Enquiry:- ".base64_decode($row->enquiry)."<br>
						Product:- ".$product_name."<br>
						Product SiteUrl:- ".$siteurl."<br>
						Product AdminUrl:- ".$adminurl."<br>
					</td>
				</tr>
			</table>";
		
		$to	= $this->Scheme_Model->get_website_data("invoice_email");
		mail($to, $subject, $mailbody, $headers ."X-Mailer: PHP/" . phpversion());
	}
	
	
	
	public function order_to_send_mail($id,$mymsg)
	{
		$price_icon = $this->Scheme_Model->get_website_data("price_icon");
		$row = $this->db->query("select * from tbl_checkout where id='$id'")->row();
		
		$corrier_data = "";
		$corrier_no = $row->corrier_no;
		$corrier_name = $row->corrier_name;
		if($corrier_no!="" && $corrier_name!="")
		{
			$corrier_name = $this->db->query("select * from tbl_corrier where id='$corrier_name'")->row();
			$corrier_name = base64_decode($corrier_name->name);
			$corrier_data = "Corrier No : $corrier_no <br> Corrier Name : $corrier_name";
		}
		
		$order_id = $row->order_id;
		$date = date("d-M-Y",strtotime($row->date));
		$companyname = base64_decode($row->companyname);
		$fname = base64_decode($row->fname);
		$lname = base64_decode($row->lname);
		$email = $row->email;
		$mobile = $row->mobile;
		$country_id = $row->country_id;
		$state_id = base64_decode($row->state);
		$country = $this->db->query("select * from tbl_country where id='$country_id'")->row();
		if($country_id=="101")
		{
			$state = $this->db->query("select * from tbl_state where id=
			'$state_id'")->row();
			$state_id = $state->name;
		}
		
		$address2 = base64_decode($row->address).",".$state_id.",".$country->name;
		$total_price = number_format($row->total_price,2);
		$gst = $row->gst;
		$gst_type = number_format($row->gst_type,2);
		$shipping = number_format($row->shipping,2);
		$coupon_code_discount = number_format($row->coupon_code_discount,2);
		$grand_total = number_format($row->grand_total,2);
		
		$temp_id = $row->temp_id;
		$result1 = $this->db->query("select * from tbl_add_to_cart where temp_id='$temp_id'")->result();
		foreach ($result1 as $row1)
		{
			$product_id = $row1->product_id;
			$row2 = $this->db->query("select * from tbl_product where id='$product_id'")->row();
			
			$product_quantity = $row1->product_quantity;
			$price = $row1->price - ($row1->price * $row1->discount / 100);
			$total = number_format($price * $row1->product_quantity,2);
			$price = number_format($price,2);
			$myproductdata.='<tr><td style="font-size: 17px;padding: 6px;">
				'.base64_decode($row2->name).'
			</td>
			<td style="font-size: 17px;text-align:right;padding: 6px;">
				'.$product_quantity.'
			</td>
			<td style="font-size: 17px;text-align:right;padding: 6px;">
				'.$price_icon.' '.$price.'/-
			</td>
			<td style="font-size: 17px;text-align:right;padding: 6px;">
				'.$row2->product_gst.'
			</td>
			<td style="font-size: 17px;text-align:right;padding: 6px;">
				'.$price_icon.' '.$total.'/-		
			</td></tr>';
		}
		
		if($gst_type==1)
		{			
			$gst = '<tr>
						<td style=" border-top: 1px solid #eee;font-size: 15px; font-weight: bold;text-align: right; padding: 8px;">
						   Total GST: '.$price_icon.' '.number_format($gst,2).'/-
						</td>
					</tr>';
		}
		else
		{
			$gst = '<tr>
						<td style=" border-top: 1px solid #eee;font-size: 15px; font-weight: bold;text-align: right; padding: 8px;">
						   Total SGST: '.$price_icon.' '.number_format($gst/2,2).'/-
						</td>
					</tr>
					<tr>
						<td style=" border-top: 1px solid #eee;font-size: 15px; font-weight: bold;text-align: right; padding: 8px;">
						   Total CGST: '.$price_icon.' '.number_format($gst/2,2).'/-
						</td>
					</tr>';
		}
		
		$img_url = base_url()."/uploads/manage_website/photo/".$this->Scheme_Model->get_website_data("invoice_logo");
		$invoice_country = $this->Scheme_Model->get_website_data("invoice_country");
		$invoice_state = $this->Scheme_Model->get_website_data("invoice_state");
		
		if($invoice_country=="101")
		{
			$invoice_state = $this->db->query("select * from tbl_state where id=
			'$invoice_state'")->row();
			$invoice_state = $invoice_state->name;
		}
		$invoice_country = $this->db->query("select * from tbl_country where id='$invoice_country'")->row();
		$invoice_country = $invoice_country->name;
		
		$invoice_address = $this->Scheme_Model->get_website_data("invoice_address").",".$invoice_state.",".$invoice_country;
		$invoice_footer = $this->Scheme_Model->get_website_data("invoice_footer");
		
		$mailbody = "<table cellpadding='0' bgcolor='#eee' cellspacing='0' style='max-width: 600px;margin: auto; padding: 30px; border: 1px solid #eee; box-shadow: 0 0 10px rgba(0, 0, 0, .15); font-size: 16px;line-height: 24px;  font-family: Arial; background:#eee; color: #2e2e2e;'>
   <tr class='information'>
		<td colspan='2'>
			<table style='width: 600px; line-height: inherit; text-align: left;'>
				<tr>
					<td colspan='2'>
						<table style='width: 600px; line-height: inherit; text-align: left;'>
							<tr>
								<td style='padding-bottom: 20px;padding-top: 18px;text-align:center; width:35%;' width='35%'>
									<img src='".$img_url."' width='90%'>
								</td>
								<td style='padding-bottom: 20px;padding-top: 20px;text-align:right;'>
									".$invoice_address."
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td style='border-bottom-style: solid;  border-bottom-color: #dbc180;border-bottom-width: 2px;' colspan='2'></td>
				</tr>
				<tr>
					<td style='padding-bottom: 40px; text-align: center; padding-bottom: 20px;' colspan='2'>
						<h3>Order Status : ".$mymsg."</h3>
						<br>".$corrier_data."
					</td>
				</tr>
				<tr>
					<td style='padding-bottom: 40px; text-align: center; padding-bottom: 20px;' colspan='2'>
						<h3>Shipping Details</h3>
					</td>
				</tr>
				<tr>
					<td style='padding-bottom: 40px; text-align: left; padding-bottom: 20px;width:55%'>				
						<span style='font-size: 17px;'>".$companyname."</span><br>
						<p style='margin:0;font-size: 17px;'>".$fname." ".$lname."</p>
						<p style='margin:0;font-size: 17px;'>".$email."</p><p style='margin:0;font-size: 17px;'>".$mobile."</p>
						<p style='margin:0;font-size: 17px;'>".$address2."</p>
					</td>
					<td style='padding-bottom: 40px; text-align: right; padding-bottom: 20px;' valign='top'>
						<span style='font-size: 17px;'>Invoice #: ".$order_id."</span><br>
						<p style='margin:0;font-size: 17px;'>Created: ".$date."</p>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td>
			<table bgcolor='#fff' style='width: 600px; background: #fff; line-height: inherit; text-align: left;'>
				<tr class='heading'>
					<td>
						<table style='width: 600px; line-height: inherit; text-align: left;' border='1' cellpadding='0' cellspacing='0'>
							<tr>
								<td style='background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;padding: 6px;font-size: 17px;color:#2e2e2e;'>
									Product Name
								</td>
								<td style='background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;font-size: 17px;padding: 6px;width: 5%;color:#2e2e2e;text-align:center;'>Qty</td>		
								<td style='background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;font-size: 17px;padding: 6px;color:#2e2e2e;width: 20%;text-align:center;'>
									Price
								</td>
								<td style='background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;font-size: 17px;padding: 6px;color:#2e2e2e;width: 20%;text-align:center;'>
									GST(%)
								</td>
								<td style='background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;font-size: 17px;padding: 6px;width: 20%;color:#2e2e2e;text-align:center;'>
									Total
								</td>
							</tr>
							".$myproductdata."
					  </table>
					</td>   
				</tr>							
				<tr class='total'>
				   <td>
						<table style='width: 600px; line-height: inherit; text-align: left;'>
							<tr>
								<td style=' border-top: 1px solid #eee;font-size: 15px; font-weight: bold;text-align: right; padding: 8px;'>
								   Total Price: ".$price_icon." ".$total_price."/-
								</td>
							</tr>
							<tr>
								<td style=' border-top: 1px solid #eee;font-size: 15px; font-weight: bold;text-align: right; padding: 8px;'>
								   Shipping: ".$price_icon." ".$shipping."/-
								</td>
							</tr>
							".$gst."
							<tr>
								<td style=' border-top: 1px solid #eee;font-size: 15px; font-weight: bold;text-align: right; padding: 8px;'>
								   Coupon Code Discount: ".$price_icon." ".$coupon_code_discount."/-
								</td>
							</tr>
							<tr>
								<td style=' border-top: 1px solid #eee;font-size: 15px; font-weight: bold;text-align: right; padding: 8px;'>
								   Grand Total: ".$price_icon." ".$grand_total."/-
								</td>
							</tr>
						</table>
				   </td> 
				</tr>
				<tr class='information'>
					<td>
						<table style='width: 600px; line-height: inherit; text-align:left; margin-top: 30px;'>
							<tr>
								<td style='padding-bottom: 40px;text-align: center;'>
								   ".$invoice_footer."
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>";
		return $mailbody;
	}
	
	public function user_order_history()
	{	
		$price_icon = $this->Scheme_Model->get_website_data("price_icon");
		$i = 1;
		$user_id = $_SESSION["client_id"];
		$result = $this->db->query("select * from tbl_checkout,tbl_add_to_cart where tbl_checkout.temp_id=tbl_add_to_cart.temp_id and tbl_add_to_cart.user_id='$user_id'")->result();
		foreach($result as $row)
		{
			$row_id = $row->id;
			$product_id = $row->product_id;
			$row1 = $this->db->query("select * from tbl_product where id='$product_id'")->row();
			$pro = $this->Scheme_Model->get_selected_product_price($row_id); ?>
			<div class="cart_table_item cart_item_<?php echo $row_id ?> top_border p-2" style="margin-top:5px;">
				<div class="row">
					<div class="col-sm-2 col-3">
						<a href="<?= base_url(); ?>product/<?= $row1->url; ?>.html?v1=<?= $row->variations1_name?>&v2=<?= $row->variations2_name?>">
							<?php echo $this->Scheme_Model->get_product_default_image($row1->id,"img-fluid img-thumbnail"); ?>
						</a>
					</div>
					<div class="col-sm-10 col-9">
						<div class="row">
							<div class="col-sm-12">
								<div class="cut-text3">
									<a href="<?= base_url(); ?>product/<?= $row1->url; ?>.html?v1=<?= $row->variations1_name?>&v2=<?= $row->variations2_name?>">
										<?= base64_decode($row->product_name)?>
									</a>
								</div>
								<?php
								if($row1->variations1_title!="")
								{
									?>
									<br>
									<?= base64_decode($row1->variations1_title); ?>:
									<span>
									<?= base64_decode($row->variations1_name); ?>
									</span>
									<?php
								}
								?>
								<?php
								if($row1->variations2_title!="")
								{
									?>
									<br>
									<?= base64_decode($row1->variations2_title); ?>:
									<?php
									if($row->variations2_name!="0") { ?>
									<span>
									<?= base64_decode($row->variations2_name); ?>
									</span>
									<?php
									}
								}
								?>
							</div>
							<div class="col-sm-12">
								<span class="amount">
									Price:
									<?= $price_icon ?>
									<?= number_format($pro[0] + $pro[2]);?>
								</span>
							</div>
							<div class="col-sm-12">
								<span class="amount">
									Subtotal (<?= $pro[1];?> item):
									<?= $price_icon ?>
									<?= number_format($pro[3]);?>
								</span>
							</div>
							<div class="col-sm-12">
								<button type="button" class="btn btn-info mydefault_btn_bg_or_text_color" data-toggle="modal" data-target="#myModal_<?php echo $row->order_id ?>">
								View Invoice
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		<?php 
	}
	
	public function wish_list_product_price($product_id,$variations1,$variations2)
	{
		$row = $this->db->query("select price1 from tbl_variations1_variations2_join where product_id='$product_id' and variations1='$variations1' and variations2='$variations2'")->row();
		if($row->price1)
		{
			return $row->price1;
		}
	}
	
	public function user_wish_list()
	{	
		$price_icon = $this->Scheme_Model->get_website_data("price_icon");
		$i = 1;
		$user_id = $_SESSION["client_id"];
		$result = $this->db->query("select * from add_to_wishlist where user_id='$user_id'")->result();
		foreach($result as $row)
		{
			$row_id = $row->id;
			$product_id = $row->product_id;
			$row1 = $this->db->query("select * from tbl_product where id='$product_id'")->row();
			$price = $this->Scheme_Model->wish_list_product_price($product_id,$row->variations1_id,$row->variations2_id); ?>
			<div class="cart_table_item cart_item_<?php echo $row_id ?> top_border p-2" style="margin-top:5px;">
				<div class="row">
					<div class="col-sm-2 col-3">
						<a href="<?= base_url(); ?>product/<?= $row1->url; ?>.html?v1=<?= $row->variations1_name?>&v2=<?= $row->variations2_name?>">
							<?php echo $this->Scheme_Model->get_product_default_image($row1->id,"img-fluid img-thumbnail"); ?>
						</a>
					</div>
					<div class="col-sm-10 col-9">
						<div class="row">
							<div class="col-sm-12">
								<div class="cut-text3">
									<a href="<?= base_url(); ?>product/<?= $row1->url; ?>.html?v1=<?= $row->variations1_name?>&v2=<?= $row->variations2_name?>">
										<?= base64_decode($row->product_name)?>
									</a>
								</div>
								<?php
								if($row1->variations1_title!="")
								{
									?>
									<br>
									<?= base64_decode($row1->variations1_title); ?>:
									<span>
									<?= base64_decode($row->variations1_name); ?>
									</span>
									<?php
								}
								?>
								<?php
								if($row1->variations2_title!="")
								{
									?>
									<br>
									<?= base64_decode($row1->variations2_title); ?>:
									<?php
									if($row->variations2_name!="0") { ?>
									<span>
									<?= base64_decode($row->variations2_name); ?>
									</span>
									<?php
									}
								}
								?>
							</div>
							<div class="col-sm-12">
								<span class="amount">
									Price:
									<?= $price_icon ?>
									<?= number_format($price);?>
								</span>
							</div>
							<div class="col-sm-12">
								<a onclick="remove_to_wishlist('<?php echo $row_id ?>','<?php echo $product_id ?>','<?= $vid; ?>')" title="already in wishlist" href="#">
									<span class="mobile_div_show">
										<i class="fa fa-trash" aria-hidden="true"></i> 
									</span>
									<span class="mobile_div_off">
									<i class="fa fa-trash" aria-hidden="true"></i> 
										Delete
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		<?php 
	}
	public function reviews_count($product_id)
	{
		$count = 0;
		$star = 0;
		$result = $this->db->query("select id,star from tbl_review where product_id='$product_id' order by id asc")->result();
		foreach($result as $row){
			$count++;
			$star = $star + $row->star;
		}
		$x[0] = $count;
		$x[1] = number_format($star / $count,1);
		if($x[0]=="0")
		{
			$x[1] = "0";
		}
		if($x[0]=="0")
		{
			$x[2] = '<i class="fa fa-star-o theme-star"></i>
			<i class="fa fa-star-o theme-star"></i>
			<i class="fa fa-star-o theme-star"></i>
			<i class="fa fa-star-o theme-star"></i>
			<i class="fa fa-star-o theme-star"></i>';
		}
		else
		{
			if($x[1]>=0.0 && $x[1]<=0.9)
			{
				$x[2] = '				
				<i class="fa fa-star-half-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>';
			}
			if($x[1]>=0.9 && $x[1]<=1.0)
			{
				$x[2] = '				
				<i class="fa fa-star-half-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>';
			}
			if($x[1]>=1.1 && $x[1]<=1.9)
			{
				$x[2] = '				
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star-half-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>';
			}
			if($x[1]>=1.9 && $x[1]<=2.0)
			{
				$x[2] = '				
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>';
			}
			if($x[1]>=2.1 && $x[1]<=2.9)
			{
				$x[2] = '				
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star-half-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>';
			}
			if($x[1]>=2.9 && $x[1]<=3.0)
			{
				$x[2] = '				
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>';
			}
			if($x[1]>=3.1 && $x[1]<=3.9)
			{
				$x[2] = '				
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star-half-o theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>';
			}
			if($x[1]>=3.9 && $x[1]<=4.0)
			{
				$x[2] = '				
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star-o theme-star"></i>';
			}
			if($x[1]>=4.1 && $x[1]<=4.9)
			{
				$x[2] = '				
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star-half-o theme-star"></i>';
			}
			if($x[1]>=4.9 && $x[1]<=5.0)
			{
				$x[2] = '				
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>
				<i class="fa fa-star theme-star"></i>';
			}
		}
		
		$x[2] = "<span title='Rating ".$x[1]."'>".$x[2]."</span>";
		return $x;
	}
	public function show_review($product_id)
	{
		$result = $this->db->query("select * from tbl_review where product_id='$product_id' order by id asc")->result();
		foreach($result as $row){
		?>
		<li>
			<div class="comment">
				<div class="img-thumbnail d-block">
					<img class="avatar" alt="" src="<?= base_url(); ?>assets/website/default/img/avatars/avatar-2.jpg">
				</div>
				<div class="comment-block">
					<div class="comment-arrow"></div>
					<span class="comment-by">
						<strong>
							<?php echo $row->full_name; ?>
						</strong>
						<span>						
							<?php echo date("d M y",$row->time) ?>,
							<?php echo date("h:i a",$row->time) ?>
						</span>
						<span class="float-right">
							<i class="fa fa-star" <?php if($row->star>=1) { ?> style="color:blue" <?php } ?>></i>
							<i class="fa fa-star" <?php if($row->star>=2) { ?> style="color:blue" <?php } ?>></i>
							<i class="fa fa-star" <?php if($row->star>=3) { ?> style="color:blue" <?php } ?>></i>
							<i class="fa fa-star" <?php if($row->star>=4) { ?> style="color:blue" <?php } ?>></i>
							<i class="fa fa-star" <?php if($row->star>=5) { ?> style="color:blue" <?php } ?>></i>
							<span>(<?php echo $row->star; ?>)</span>
						</span>
					</span>
					<?php echo base64_decode($row->message); ?>
				</div>
			</div>
		</li>
		<div class="sin-rattings">
			<div class="star-author-all">
				<div class="ratting-star f-left">
					
				</div>
				<div class="ratting-author f-right">
					<h3></h3>
					
				</div>
			</div>
			<p></p>
		</div>
		<?php
		}
	}
	public function get_available($product_id,$variations1_id,$variations2_id)
	{
		$get_available = 0;
		$add_to_cart = $this->db->query("select * from tbl_add_to_cart where product_id='$product_id' and variations1_id='$variations1_id' and variations2_id='$variations2_id'")->result();
		foreach($add_to_cart as $row1)
		{
			$tbl_checkout = $this->db->query("select * from tbl_checkout where temp_id='$row1->temp_id'")->row();
		
			if($tbl_checkout->status!=0 && $tbl_checkout->status!=3){
				$get_available = $get_available + $row1->product_quantity;
			}
		}
		return $get_available;
	}
	
	public function get_combo_qty($id)
	{
		$query1 = $this->db->query("select * from tbl_variations1_variations2_join where id='$id'")->row();		
		
		$product_id = $query1->product_id;		
		$query = $this->db->query("select * from tbl_product where id='$product_id'")->row();
		if($query->product_type=="3")
		{
			$combo_product = $query->combo_product;
			$combo_product2 = explode(",",$combo_product);
			$xy = 0;
			foreach($combo_product2 as $pid)
			{
				// yha wo ha jo bik gaya ha
				$query1n = $this->db->query("select * from tbl_variations1_variations2_join where id='$pid'")->row();
				$get_available1 = $this->Scheme_Model->get_available($product_id,$query1n->variations1,$query1n->variations2);
				
				$get_available2[$xy] = $query1n->quantity - $get_available1;
				$xy++;
			}
			sort($get_available2);
		}
		return $get_available2[0];
	}
	
	
	public function count_total_pruct_in_mainpg($category_id)
	{
		$count = 0;
		$query = $this->db->query("select id from tbl_product_category where category_id='$category_id'")->result();
		foreach($query as $row)
		{
			$count++;
		}
		return $count;
	}
	
	
	public function download_gst_report($from,$to)
	{
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->setActiveSheetIndex(0);
		error_reporting(0);
		ob_clean();
		
		date_default_timezone_set('Asia/Calcutta');
		$from1 = date("d-M-Y",strtotime($from));
		$to1 = date("d-M-Y",strtotime($to));
		$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('A1','order id')
		->setCellValue('B1','first name')
		->setCellValue('C1','last name')
		->setCellValue('D1','company')
		->setCellValue('E1','adress')
		->setCellValue('F1','mobile')
		->setCellValue('G1','email')
		->setCellValue('H1','gst')
		->setCellValue('I1','price')
		->setCellValue('J1','date');
		
		/*$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(24);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(24);
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(24);
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(24);
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(24);
		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(24);
		$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(24);
		$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(24);
		$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(24);
		$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(24);
		
		
		$sheet = $objPHPExcel->getActiveSheet();		
		$BStyle = array(
		  'borders' => array(
			'allborders' => array(
			  'style' => PHPExcel_Style_Border::BORDER_THIN
			)
		  )
		);
		$objPHPExcel->getActiveSheet()->getStyle('A1:J6')->applyFromArray($BStyle);
		
		$objPHPExcel->getActiveSheet()->getStyle('A6:J6')->applyFromArray(array('font' => array('size' => 10,'bold' => TRUE,'name'  => 'Calibri')));	
		
		//$query = $this->db->query("select * from tbl_checkout where date >= '$from' and date <= '$to' order by acno desc")->result();*/
		/*$query = $this->db->query("select * from tbl_checkout")->result();
		$rowCount = 1;
		$total = 0;
		foreach($query as $value)
		{
			/*$objPHPExcel->getActiveSheet()->getStyle('A'.$rowCount.':J'.$rowCount)->applyFromArray($BStyle);
			
			$objPHPExcel->getActiveSheet()->getStyle('A'.$rowCount.':J'.$rowCount)->applyFromArray(array('font' => array('size' => 9,'bold' => false,'color' => array('rgb' => '000000'),'name'  => 'Calibri')));*/
			
			/*$objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount,$value->order_id);
			$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount,$value->order_id);
			$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount,$value->order_id);
			$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount,$value->order_id);
			$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount,$value->order_id);
			$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount,$value->order_id);
			$objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount,$value->order_id);
			$objPHPExcel->getActiveSheet()->SetCellValue('H'.$rowCount,number_format($value->gst,2));
			$objPHPExcel->getActiveSheet()->SetCellValue('I'.$rowCount,$value->order_id);
			$objPHPExcel->getActiveSheet()->SetCellValue('J'.$rowCount,date("d/m/Y",strtotime($value->date)));
			
			$total = $total + $value->grand_total;
			$rowCount++;*/
		//}
		
		/*$objPHPExcel->getActiveSheet()
        ->getStyle('A'.$rowCount.':N'.$rowCount)
        ->getFill()
        ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
        ->getStartColor()
        ->setRGB('FFFF00');
		
		$objPHPExcel->getActiveSheet()->getStyle('A'.$rowCount.':N'.$rowCount)->applyFromArray($BStyle);
		
		$objPHPExcel->getActiveSheet()->getStyle('A'.$rowCount.':N'.$rowCount)->applyFromArray(array('font' => array('size' => 9,'bold' => true,'color' => array('rgb' => '000000'),'name'  => 'Calibri')));
		
		$objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount,"Total");
		$objPHPExcel->getActiveSheet()->SetCellValue('M'.$rowCount,round($total,2));
		$rowCount++;
		$objPHPExcel->getActiveSheet()->getStyle('A'.$rowCount.':J'.$rowCount)->applyFromArray($BStyle);
		*/
		
		if($mytype=="")
		{
			$file_name = "report.xls";
			
			$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
			//$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel5');
			/*$objWriter->save('uploads_sales/kapilkifile.xls');*/
			
			header('Content-type: application/vnd.ms-excel');
			header('Content-Disposition: attachment; filename='.$file_name);
			header('Cache-Control: max-age=0');
			ob_start();
			$objWriter->save('php://output');
			$data = ob_get_contents();
		}
	}
	public function imagechangetob64image($url)
	{
		$b64image = base64_encode(file_get_contents($url));
		return $b64image;
	}
	
		public function emailsend_function($id,$title_me,$paymeny_type)
	{
		$price_icon = $this->Scheme_Model->get_website_data("price_icon");
		$row = $this->db->query("select * from tbl_checkout where id='$id'")->row();
		$order_id = $row->order_id;
		$date = date("d-M-Y",strtotime($row->date));
		$companyname = base64_decode($row->companyname);
		$fname = base64_decode($row->fname);
		$lname = base64_decode($row->lname);
		$email = $row->email;
		$mobile = $row->mobile;
		$country_id = $row->country_id;
		$state_id = ($row->state);
		$towncity = ($row->towncity);
		$postcode = ($row->postcode);
		$country = $this->db->query("select * from tbl_country where id='$country_id'")->row();
		
		$state = $this->db->query("select * from tbl_state where id=
		'$state_id'")->row();
		$state_id = $state->name;
		
		$city = $this->db->query("select * from tbl_city where id=
		'$towncity'")->row();
		$city_id = $city->name;
		
		$address2 = $city_id.",".$state_id.",".$country->name."($postcode) <br>".base64_decode($row->address);
		$total_price = number_format($row->total_price,2);
		$gst = $row->gst;
		$gst_type = $row->gst_type;
		$shipping = number_format($row->shipping,2);
		$coupon_code_discount = number_format($row->coupon_code_discount,2);
		$grand_total = number_format($row->grand_total,2);
		
		$temp_id = $row->temp_id;
		$result1 = $this->db->query("select * from tbl_add_to_cart where temp_id='$temp_id'")->result();
		foreach ($result1 as $row1)
		{
			$product_id = $row1->product_id;
			$row2 = $this->db->query("select * from tbl_product where id='$product_id'")->row();
			
			$tbl_website_type1 = $this->db->query("select * from tbl_website_type1 where selected_theme='1'")->row();
			
			$product_quantity = $row1->product_quantity;
			if($row1->discount=="" || $row1->discount==0)
			{
			  	$price = $row1->price - ($row1->price * $row2->product_gst / 100);$price1 = $row1->price;			 				
			}
			else
			{
			    $price = $row1->discount - ($row1->discount * $row2->product_gst / 100);
				$price1 = $row1->discount;
			}
		
			$total = number_format($price * $row1->product_quantity,2);
			$price = round($price);
			$myproductdata.='<tr><td style="font-size: 17px;padding: 6px;">
				'.base64_decode($row2->name).'
			</td>
			<td style="font-size: 17px;text-align:right;padding: 6px;">
				'.$product_quantity.'
			</td>
			<td style="font-size: 17px;text-align:right;padding: 6px;">
				'.$price_icon.' '.$price*$product_quantity.'/-
			</td>
			<td style="font-size: 17px;text-align:right;padding: 6px;">
				'.$row2->product_gst.'
			</td>
			<td style="font-size: 17px;text-align:right;padding: 6px;">
				'.$price_icon.' '.$price1*$product_quantity.'/-
			</td></tr>';
		}
		
		$tax = $gst;
		if($gst_type==1)
		{			
			$gst = '<tr>
						<td style=" border-top: 1px solid #eee;font-size: 14px; font-weight: bold;text-align: right; padding: 8px;">
						   Total GST: '.$price_icon.' '.number_format($gst,2).'/-
						</td>
					</tr>';
		}
		else
		{
			$gst = '<tr>
						<td style=" border-top: 1px solid #eee;font-size: 14px; font-weight: bold;text-align: right; padding: 8px;">
						   Total SGST: '.$price_icon.' '.number_format($gst/2,2).'/-
						</td>
					</tr>
					<tr>
						<td style=" border-top: 1px solid #eee;font-size: 14px; font-weight: bold;text-align: right; padding: 8px;">
						   Total CGST: '.$price_icon.' '.number_format($gst/2,2).'/-
						</td>
					</tr>';
		}
		
		$title_of_tax = "GST";
		if($tbl_website_type1->title=="tax")
		{
			$title_of_tax = "Tax";
			$gst = '<tr>
						<td style=" border-top: 1px solid #eee;font-size: 14px; font-weight: bold;text-align: right; padding: 8px;">
						   Total Tax: '.$price_icon.' '.number_format($tax,2).'/-
						</td>
					</tr>';
		}
		
		$img_url = base_url()."/uploads/manage_website/photo/".$this->Scheme_Model->get_website_data("invoice_logo");
		$invoice_country = $this->Scheme_Model->get_website_data("invoice_country");
		$invoice_state = $this->Scheme_Model->get_website_data("invoice_state");
		$invoice_state = $this->db->query("select * from tbl_state where id=
		'$invoice_state'")->row();
		$invoice_state = $invoice_state->name;
		
		$invoice_country = $this->db->query("select * from tbl_country where id='$invoice_country'")->row();
		$invoice_country = $invoice_country->name;
		
		$invoice_address = $this->Scheme_Model->get_website_data("invoice_address").",".$invoice_state.",".$invoice_country;
		$invoice_footer = $this->Scheme_Model->get_website_data("invoice_footer");
		
		$gstno = $this->Scheme_Model->get_website_data("gstno");
		$panno = $this->Scheme_Model->get_website_data("panno");
		
		$mailbody = "<table cellpadding='5' bgcolor='#eee' cellspacing='5' style='max-width: 600px;margin: auto; padding: 30px; border: 1px solid #ffffff; box-shadow: 0 0 10px rgba(0, 0, 0, .15); font-size: 16px;line-height: 24px;  font-family: Arial; background:#ffffff; color: #2e2e2e;'>
   <tr class='information'>
		<td colspan='2'>
			<table style='width: 600px; line-height: inherit; text-align: left;'>			    
				<tr>
					<td colspan='2'>
						<table style='width: 600px; line-height: inherit; text-align: left;'>
							<tr>
								<td style='padding-bottom: 10px;padding-top: 18px;text-align:center; width:50%;' width='50%'>
									<img src='".$img_url."' width='90%'>
								</td>
								<td style='padding-bottom: 20px;padding-top: 20px;text-align:right;'>
									Tax Invoice / ".$title_me."
								</td>
							</tr>
							<tr>
								<td style='padding-bottom: 10px;padding-top: 18px;text-align:left;' valign='top'>
									<b>Sold By :</b><br>
									".$invoice_address."
									<br>
									<b>PAN No: </b> ".$panno."<br>
									<b>GST No :</b> ".$gstno."
								</td>
								<td style='padding-bottom: 20px;padding-top: 20px;text-align:right;' valign='top'>
									<b>Billing Address :</b>
									<span style='font-size: 17px;'>".$companyname."</span><br>
									<p style='margin:0;font-size: 17px;'>".$fname." ".$lname."</p>
									<p style='margin:0;font-size: 17px;'>".$email."</p><p style='margin:0;font-size: 17px;'>".$mobile."</p>
									<p style='margin:0;font-size: 17px;'>".$address2."</p>
								</td>
							</tr>
							<tr>
								<td style='padding-bottom: 10px;padding-top: 18px;text-align:left;' valign='top'>
									Order Number : <span style='font-size: 17px;'>Invoice #: ".$order_id."</span><br>
									<p style='margin:0;font-size: 17px;'>Order Date : ".$date."</p>
									<p style='margin:0;font-size: 17px;'>Payment Type: ".$paymeny_type."</p>
								</td>
								<td>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td>
			<table bgcolor='#fff' style='width: 600px; background: #fff; line-height: inherit; text-align: left;'>
				<tr class='heading'>
					<td>
						<table style='width: 600px; line-height: inherit; text-align: left;' border='1' cellpadding='0' cellspacing='0'>
							<tr>
								<td style='background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;padding: 6px;font-size: 17px;color:#2e2e2e;'>
									Product Name
								</td>
								<td style='background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;font-size: 17px;padding: 6px;width: 5%;color:#2e2e2e;text-align:center;'>Qty</td>		
								<td style='background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;font-size: 17px;padding: 6px;color:#2e2e2e;width: 20%;text-align:center;'>
									Price
								</td>
								<td style='background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;font-size: 17px;padding: 6px;color:#2e2e2e;width: 20%;text-align:center;'>
									".$title_of_tax."(%)
								</td>
								<td style='background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;font-size: 17px;padding: 6px;width: 20%;color:#2e2e2e;text-align:center;'>
									Total
								</td>
							</tr>
							".$myproductdata."
					  </table>
					</td>   
				</tr>							
				<tr class='total'>
				   <td>
						<table style='width: 600px; line-height: inherit; text-align: left;'>
							<tr>
								<td style=' border-top: 1px solid #eee;font-size: 14px; font-weight: bold;text-align: right; padding: 8px;'>
								   Total Price: ".$price_icon." ".$total_price."/-
								</td>
							</tr>
							<tr>
								<td style=' border-top: 1px solid #eee;font-size: 14px; font-weight: bold;text-align: right; padding: 8px;'>
								   Shipping: ".$price_icon." ".$shipping."/-
								</td>
							</tr>
							".$gst."
							<tr>
								<td style=' border-top: 1px solid #eee;font-size: 14px; font-weight: bold;text-align: right; padding: 8px;'>
								   Coupon Code Discount: ".$price_icon." ".$coupon_code_discount."/-
								</td>
							</tr>
							<tr>
								<td style=' border-top: 1px solid #eee;font-size: 14px; font-weight: bold;text-align: right; padding: 8px;'>
								   Grand Total: ".$price_icon." ".$grand_total."/-
								</td>
							</tr>
						</table>
				   </td> 
				</tr>
				<tr class='information'>
					<td>
						<table style='width: 600px; line-height: inherit; text-align:left; margin-top: 30px;'>
							<tr>
								<td style='padding-bottom: 40px;text-align: center;'>
								   ".$invoice_footer."
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>";
		return $mailbody;
	}
	/*****************************************/
}  