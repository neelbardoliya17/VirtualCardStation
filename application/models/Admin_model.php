<?php
class Admin_model extends CI_Model
{
    function getHeaderData()
    {
        $query = $this->db->query("select favicon_image,logo_image from tbl_users");
        return $he = $query->row_array();
    }
    function getSlug($id)
    {
        $query = $this->db->get_where('tbl_users', array('user_id' => $id));
        $row = $query->row();
        return $row->slug;
    }
    function getSlugCount($slug)
    {
        $this->db->select('count(*) as slugcount');
        $this->db->from('tbl_users');
        $this->db->like('slug', $slug);
        $query=$this->db->get();
        return $query->row(0)->slugcount;
    }
    function getSlugCount1($slug,$id)
    {
        $this->db->select('count(*) as slugcount');
        $this->db->from('tbl_users');
        $this->db->like('slug', $slug);
        $this->db->where('user_id!=',$id);
        $query=$this->db->get();
        return $query->row(0)->slugcount;
    }
    public function get_user_by_verification_code($verification_code) {
        $this->db->where('verification_code', $verification_code);
        $query = $this->db->get('tbl_users');

        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }
    public function verify_user_email($user_id) {
        $data = array(
            'is_verified' => 1,
            'verification_code' => null
        );
        $this->db->where('user_id', $user_id);
        $this->db->update('tbl_users', $data);
    }
    public function isVerified($email)
    {
        $this->db->select('is_verified');
        $this->db->from('tbl_users');
        $this->db->where('user_mail',$email);
        $query=$this->db->get();
        return $query->row(0)->is_verified;
    }
    public function MailExist($mail)
    {
        $this->db->select('count(*) as mailcount');
        $this->db->from('tbl_users');
        $this->db->where('user_mail',$mail);
        $query=$this->db->get();
        return $query->row(0)->mailcount;
    }
    public function getUserFromEmail($email)
    {
        $query = $this->db->get_where('tbl_users', array('user_mail' => $email));
        $row = $query->row();
        return $row->user_id;
    }
    public function updatePassword($slug,$data)
    {
        $this->db->where('slug', $slug);
        $this->db->update('tbl_users', $data);
    }
    public function ImageUpdate($id,$formArray,$tablename)
    {
        $this->db->where('user_id', $id);
        $this->db->update($tablename, $formArray);
    }
    function getFavLog($id)
    {
        $query = $this->db->query("select favicon_image,username from tbl_users where user_id='" . $id . "' ");
        return $he = $query->row_array();
    }
    function getLogCheck($formArray)
    {
        $que = $this->db->query("select * from tbl_users where BINARY user_mail='" . $formArray['email'] . "'");
        $cn = $this->db->affected_rows();
        if ($cn == 1) {
            $que1 = $this->db->query("select * from tbl_users where BINARY user_mail='" . $formArray['email'] . "' and BINARY password='" . $formArray['pwd'] . "'");
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

                $this->db->query("UPDATE `tbl_users` SET ipaddress='" . $ip . "',lastdatetimelogin='" . $my_date . "' where user_mail='" . $formArray['email'] . "' and password='" . $formArray['pwd'] . "'");

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
    function getUserId($formArray)
    {
        $query = $this->db->query("select user_id from tbl_users where  user_mail='" . $formArray['email'] . "' and  password='" . $formArray['pwd'] . "'");
        $cn = $query->row_array();
        return $cn;
    }
    function addUser($formArray)
    {
        $que = $this->db->query("select username from tbl_users");
        $cn = $que->result_array();
        $data = array();
        $data['register'] = $cn;
        foreach ($data['register'] as $re) {
            if ($re['username'] == $formArray['username']) {
                return $var="0";
            }
        }
        $this->db->insert('tbl_users', $formArray);
        return $this->db->insert_id();
    }
    function getUserPass($id)
    {
        $query=$this->db->query("select username,user_mail,verification_code,password from tbl_users where user_id='".$id."'");
        return $he=$query->row_array();
    }
    function getPersonalInfo($id)
    {
        $query = $this->db->query("select company_name,user_mail,slug,username,status,payment_status,startdate,eight_date,af_month,enddate,owner_name,contact_no,alternate_contact1,alternate_contact2,alternate_contact3,position,email,address,logo_image from tbl_users where user_id='" . $id . "'");
        return $he = $query->row_array();
    }
    function getAboutInfo($id)
    {
        $query = $this->db->query("select about_title,about_description,about_image,est_year,business_type,website,mon_fri,saturday,sunday,maptag,mapurl from tbl_users where user_id='" . $id . "'");
        return $he = $query->row_array();
    }
    function getThemeInfo($id)
    {
        $query = $this->db->query("select popup_image1,header_color,header_text_color,about_color,about_text_color,button_color,footer_color,footer_text_color from tbl_users where user_id='" . $id . "'");
        return $he = $query->row_array();
    }
    function getProductInfo($id)
    {
        $query = $this->db->query("select * from tbl_product where user_id='" . $id . "'");
        return $he = $query->row_array();
    }
    function updateProductInfo($id, $formArray)
    {
        $this->db->where('user_id', $id);
        $this->db->update('tbl_product', $formArray);
    }
    function getBrandsInfo($id)
    {
        $query = $this->db->query("select * from tbl_service where user_id='" . $id . "'");
        return $he = $query->row_array();
    }
    function setBrands($id, $formArray)
    {
        $this->db->where('user_id', $id);
        $this->db->update('tbl_service', $formArray);
    }
    function setProductAs($id, $formArray)
    {
        $this->db->where('user_id', $id);
        $this->db->update('tbl_product', $formArray);
    }
    function updateBrandsInfo($id, $data)
    {
        $this->db->where('user_id', $id);
        $this->db->update('tbl_service', $data);
    }
    function updatePersonalInfo($id, $data)
    {
        $this->db->where('user_id', $id);
        $this->db->update('tbl_users', $data);
    }
    function getGalleryInfo($id)
    {
        $query = $this->db->query("select * from tbl_gallery where user_id='" . $id . "'");
        return $he = $query->row_array();
    }
    function updateGalleryInfo($id, $data)
    {
        $this->db->where('user_id', $id);
        $this->db->update('tbl_gallery', $data);
    }
    function getTestimonialInfo($id)
    {
        $query = $this->db->query("select * from tbl_testimonial where user_id='" . $id . "'");
        return $he = $query->row_array();
    }
    function updateTestimonialInfo($id, $data)
    {
        $this->db->where('user_id', $id);
        $this->db->update('tbl_testimonial', $data);
    }
    function getSocialMediaInfo($id)
    {
        $query = $this->db->query("select facebook,instagram,linkedin,twitter,youtube,video_link1,video_link2,video_link3 from tbl_users where user_id='" . $id . "'");
        return $he = $query->row_array();
    }
    function getOtherInfo($id)
    {
        $query = $this->db->query("select  qrlink,qrimage,favicon_image,slider_image1,slider_image2,whatsapp_message,product_message from tbl_users where user_id='" . $id . "'");
        return $he = $query->row_array();
    }
    function getSelect($id)
    {
        $query = $this->db->query("select theme from tbl_users where user_id='" . $id . "'");
        return $select = $query->row_array();
    }
    function getPasswordCheck($id, $formArray)
    {
        $query = $this->db->query("select password from tbl_users where user_id='" . $id . "'");
        $data['pass'] = $query->result_array();
        $var = "";
        foreach ($data['pass'] as $pa) {
            $paaa = $pa['password'];
        }
        // echo $paaa;
        if ($formArray['old_pass'] == $paaa) {
            echo "Password False";
            if ($formArray['new_pass'] == $formArray['conf_pass']) {
                echo "True pass";
                $this->db->query("UPDATE `tbl_users` SET password='" . $formArray['new_pass'] . "' where user_id='" . $id . "'");
                return $var = "1";
            } else {
                echo "False Pass";
                return $var = "0";
            }
        } else {
            return $var = "10";
        }
    }
    function addpro($formArray)
    {
        $this->db->insert('tbl_product', $formArray);
        $this->db->insert('tbl_gallery', $formArray);
        $this->db->insert('tbl_service', $formArray);
        $this->db->insert('tbl_testimonial', $formArray);
    }
}
