<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Menu_Model extends CI_Model  
{
	function menu_dropdown_check($menu_set_id='',$show_in='')
	{
		$this->db->select('*');
		$this->db->from('tbl_category');
		if($show_in=="")
		{
			$where = array('menu_set_id'=>$menu_set_id);
		}
		else
		{
			$where = array('menu_set_id'=>$menu_set_id,$show_in=>'1');
		}
		$this->db->where($where);
		$query = $this->db->get();
		$x = $query->row()->id;
		if($x=="")
		{
			$x = 0;
		}
		return $x;
	}
	
	function menu_dropdown($menu_set_id='',$show_in='')
	{
		$this->db->select('*');
		$this->db->from('tbl_category');
		if($show_in=="")
		{
			$where = array('menu_set_id'=>$menu_set_id);
		}
		else
		{
			$where = array('menu_set_id'=>$menu_set_id,$show_in=>'1');
		}
		$this->db->where($where);
		$this->db->order_by("sort_order","asc");
		$query = $this->db->get();
		return $query->result();
	}
	
	function menu_dropdown2($property_category='')
	{
		$this->db->select('*');
		$this->db->from('tbl_category');
		$where = array('property_category'=>$property_category);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}
	
	function get_product_by_category($category_id='',$limit='')
	{
		//$this->db->distinct();
		$this->db->select('tbl_product.*');
		$this->db->from('tbl_product');
		$this->db->join('tbl_product_category', "tbl_product.id=tbl_product_category.product_id", 'right outer');
		
		$where = array('tbl_product.status'=>'1','tbl_product_category.category_id'=>$category_id);
		$this->db->where($where);
		if($limit!="")
		{
			$this->db->limit($limit);
		}
		/*$this->db->group_by('tbl_category.name');*/
		$query = $this->db->get();
		return $query->result();
	}}  