<?php
class Vcard_model extends CI_Model
{

    function userActiveInactive($id,$formArray)
    {
        $this->db->where('user_id', $id);
        $this->db->update('tbl_users', $formArray);
    }
    function getPersonal($id)
    {
        $query = $this->db->query("select * from tbl_users where user_id='".$id."'");
        return $detail = $query->row_array();
    }                                                                              
    function getProducts($id)
    {
        $query = $this->db->query("select * from tbl_product where user_id='".$id."'");
        return $product = $query->row_array();
    }
    function getGallery($id)
    {
        $query = $this->db->query("select * from tbl_gallery where user_id='".$id."'");
        return $gallery = $query->row_array();
    }
    function getBrands($id)
    {
        $query = $this->db->query("select * from tbl_service where user_id='".$id."'");
        return $gallery = $query->row_array();
    }
    function getTestimonial($id)
    {
        $query = $this->db->query("select * from tbl_testimonial where user_id='".$id."'");
        return $testimonial = $query->row_array();
    }
    // function getLogo()
    // {
    //     $this->db->where('user_id', 1);
    //     return $logo = $this->db->get('tbl_users')->row_array();
    // }
    // function getFavicon()
    // {
    //     $this->db->where('user_id', 1);
    //     return $logo = $this->db->get('tbl_users')->row_array();
        
    // }
    // function getSlider()
    // {
    //     $query = $this->db->query('select slider_image1 from tbl_users limit 2');
    //     return $slider = $query->result_array();
    // }
    // function getTheme()
    // {
    //     $this->db->where('id', 1);
    //     return $color = $this->db->get('tbl_color')->row_array();
    // }
    // function getContact()
    // {
    //     $this->db->where('con_id', 3);
    //     return $contact = $this->db->get('tbl_contact')->row_array();
    // }
    // function getWhatsappMessage()
    // {
    //     $this->db->where('addmore_id', 2);
    //     return $message = $this->db->get('tbl_addmore')->row_array();
    // }
    // function getProductMessage()
    // {
    //     $this->db->where('addmore_id', 3);
    //     return $message = $this->db->get('tbl_addmore')->row_array();
    // }
    // function getAbout()
    // {
    //     $this->db->where('page_id', 1);
    //     return $message = $this->db->get('tbl_page')->row_array();
    // }
    // function getAbtYear()
    // {
    //     $this->db->where('addmore_id', 1);
    //     return $message = $this->db->get('tbl_addmore')->row_array();
    // }
    // function getGallery()
    // {
    //     $query = $this->db->query('select * from tbl_gallery order by position limit 12');
    //     return $gallery = $query->result_array();
    // }
    // function getVideos()
    // {
    //     $query = $this->db->query('select * from tbl_video order by position limit 3');
    //     return $video = $query->result_array();
    // }
    // function getTestimonial()
    // {
    //     $query = $this->db->query('select * from tbl_testimonial order by position limit 4');
    //     return $testi = $query->result_array();
    // }
    // function getQRCode()
    // {
    //     $this->db->where('qr_id', 1);
    //     return $qr = $this->db->get('tbl_qrcode')->row_array();
    // }
    // function getName1($value)
    // {
    //     $query = $this->db->query("select * from tbl_product_category where cat_id= '" .$value. "' ");
    //     return $name = $query->row_array();
    // }
    // function getProducts()
    // {
    //     $query = $this->db->query('select * from tbl_product order by position limit 12');
    //     return $product = $query->result_array();
    // }
    // function getProductCategory()
    // {
    //     $query = $this->db->query('select * from tbl_product_category order by position');
    //     return $productcat = $query->result_array();
    // }
    // function getBrands()
    // {
    //     $query = $this->db->query('select * from tbl_service order by position limit 15');
    //     return $brands = $query->result_array();
    // }
    // function getSocialMedia()
    // {
    //     $query = $this->db->query('select * from tbl_socialmedia');
    //     return $social = $query->result_array();
    // }    
    // function getCheckBrands()
    // {
    //     $query = $this->db->query("select * from admintable where control= 'admin' ");
    //     return $brands = $query->row_array();
    // }
}

 ?>
