<?php
class Owner_model extends CI_Model
{
    function getLogCheck($formArray)
    {
        $que = $this->db->query("select * from tbl_admin where BINARY admin_mail='" . $formArray['email'] . "'");
        $cn = $this->db->affected_rows();
        if ($cn == 1) {
            $que1 = $this->db->query("select * from tbl_admin where BINARY admin_mail='" . $formArray['email'] . "' and BINARY password='" . $formArray['pwd'] . "'");
            $cn1 = $this->db->affected_rows();
            if ($cn1 == 1) {
                if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
                } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                } else {
                    $ip = $_SERVER['REMOTE_ADDR'];
                }

                $my_date = date("Y-m-d H:i:s");

                $this->db->query("UPDATE `tbl_admin` SET ipaddress='" . $ip . "',lastdatetimelogin='" . $my_date . "' where admin_mail='" . $formArray['email'] . "' and password='" . $formArray['pwd'] . "'");

                return true;
            } else {
                // $error = "toastr.error('Looks like username or password is wrong.', 'Opps..!')";
                return false;
            }
        } else {
            // $error = "toastr.error('Looks like username or password is wrong.', 'Opps..!')";
            return false;
        }
    }
    function getPersonalInfo()
    {
        $query = $this->db->query("select user_id,slug,company_name,owner_name,startdate,eight_date,enddate,status,payment_status from tbl_users");
        return $query->result_array();
    }
    function getEditInfo($id)
    {
        $query = $this->db->query("select user_mail,password,user_id,slug,company_name,owner_name,startdate,eight_date,enddate,status,payment_status from tbl_users where user_id='" . $id . "'");
        return $query->row_array();
    }
    function getDeleteUserInfo($id)
    {
        $query = $this->db->query("select logo_image,about_image,qrimage,favicon_image,slider_image1,slider_image2,popup_image1 from tbl_users where user_id='" . $id . "'");
        return $query->row_array();
    }
    function getDeleteProductInfo($id)
    {
        $query = $this->db->query("select product_image1,product_image2,product_image3,product_image4,product_image5,product_image6,product_image7,product_image8,product_image9,product_image10,product_image11,product_image12 from tbl_product where user_id='" . $id . "'");
        return $query->row_array();
    }
    function getDeleteServiceInfo($id)
    {
        $query = $this->db->query("select service_image1,service_image2,service_image3,service_image4,service_image5,service_image6,service_image7,service_image8,service_image9,service_image10,service_image11,service_image12 from tbl_service where user_id='" . $id . "'");
        return $query->row_array();
    }
    function getDeleteGalleryInfo($id)
    {
        $query = $this->db->query("select gallery_image1,gallery_image2,gallery_image3,gallery_image4,gallery_image5,gallery_image6,gallery_image7,gallery_image8,gallery_image9,gallery_image10,gallery_image11,gallery_image12 from tbl_gallery where user_id='" . $id . "'");
        return $query->row_array();
    }
    function getDeleteTestimonialInfo($id)
    {
        $query = $this->db->query("select testimonial_image1,testimonial_image2,testimonial_image3,testimonial_image4 from tbl_testimonial where user_id='" . $id . "'");
        return $query->row_array();
    }
    function delUser($id)
    {
        $query = $this->db->query("DELETE FROM tbl_users
        WHERE user_id='" . $id . "'");
    }
    function delProduct($id)
    {
        $query = $this->db->query("DELETE FROM tbl_product
        WHERE user_id='" . $id . "'");
    }
    function delService($id)
    {
        $query = $this->db->query("DELETE FROM tbl_service
        WHERE user_id='" . $id . "'");
    }
    function delGallery($id)
    {
        $query = $this->db->query("DELETE FROM tbl_gallery
        WHERE user_id='" . $id . "'");
    }
    function delTestimonial($id)
    {
        $query = $this->db->query("DELETE FROM tbl_testimonial
        WHERE user_id='" . $id . "'");
    }
    function updatePersonalInfo($id, $data)
    {
        $this->db->where('user_id', $id);
        $this->db->update('tbl_users', $data);
    }
}