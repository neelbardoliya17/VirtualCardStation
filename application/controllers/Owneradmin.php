<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Owneradmin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->CI = &get_instance();
        $this->load->library('form_validation');
        $this->load->library('ciqrcode');
        $this->load->model('Owner_model');
    }
    public function index()
    {
        // $this->load->model('admin_model');
        // $data1 = $this->Admin_model->getHeaderData();
        // $data = array();
        // $data['head'] = $data1;
        $this->load->view('Owner/login');
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
        }
        if (isset($_POST['submit'])) {
            $formArray = array();
            $formArray['email'] = $email;
            $formArray['pwd'] = $password;
            $data = array();
            // $data['userid'] = $this->Owner_model->getUserId($formArray);
            // $id = implode(",", (array)$data['userid']);
            $aa = $this->load->Owner_model->getLogCheck($formArray);
            //  $ver=$this->load->Admin_model->isVerified($email);
            if ($aa == true) {
                
                $this->session->set_userdata('user', $formArray['email']);
                redirect('Owneradmin/admindashboard/');
                // if($ver==1)
                // {
                
                // $this->session->set_userdata('id', $id);
                
                // }
                // else
                // {
                //      $this->session->set_flashdata('error', 'Please Verify Your Email First');
                //     redirect('admin');
                // }
            } else {
                $this->session->set_flashdata('error', 'Opps..!Looks like username or password is wrong.');
                redirect('Owneradmin');
            }
        }
    }
    public function admindashboard()
    {
        $data=array();
        $data['person'] = $this->Owner_model->getPersonalInfo();
        $this->load->view('Owner/admindashboard',$data);
    }
    public function editUser($id)
    {
         if (!isset($_POST['addper'])) {
            $data = array();
            $data['userid'] = $id;
            $data['person'] = $this->Owner_model->getEditInfo($id);
            $this->load->view('Owner/editpage', $data);
        }
        else
        {
            $uid = $_POST['userid'];
            $data['startdate'] = $_POST['startdate'];
            $data['eight_date'] = $_POST['eight_date'];
            $data['enddate'] = $_POST['enddate'];
            if (isset($_POST['chk'])) {
                $data['status']=1;
            }
            if (!isset($_POST['chk'])) {
               $data['status']=0;
            }
            if (isset($_POST['chk1'])) {
                $data['payment_status']=1;
            }
            if (!isset($_POST['chk1'])) {
               $data['payment_status']=0;
            }
            $this->Owner_model->updatePersonalInfo($uid, $data);
            redirect('Owneradmin/admindashboard');
        }
    }
    public function deleteUser($id)
    {
        $data=$this->Owner_model->getDeleteUserInfo($id);
        if($data['logo_image'])
        {
           unlink(FCPATH . 'assets/user_assets/logo/' . $data['logo_image']);
        //  echo $data['logo_image'].'<br>';   
        }
        if($data['about_image'])
        {
            unlink(FCPATH . 'assets/user_assets/about/' . $data['about_image']);
        //  echo $data['about_image'].'<br>';   
        }
        if($data['qrimage'])
        {
            unlink(FCPATH . 'assets/user_assets/qrcode/' . $data['qrimage']);
        //  echo $data['qrimage'].'<br>';   
        }
        if($data['favicon_image'])
        {
            unlink(FCPATH . 'assets/user_assets/favicon/' . $data['favicon_image']);
        //  echo $data['favicon_image'].'<br>';   
        }
        if($data['slider_image1'])
        {
            unlink(FCPATH . 'assets/user_assets/slider/' . $data['slider_image1']);
        //  echo $data['slider_image1'].'<br>';   
        }
        if($data['slider_image2'])
        {
            unlink(FCPATH . 'assets/user_assets/slider/' . $data['slider_image2']);
        //  echo $data['slider_image2'].'<br>';   
        }
        if($data['popup_image1'])
        {
            unlink(FCPATH . 'assets/user_assets/popup/' . $data['popup_image1']);
        //  echo $data['popup_image1'].'<br>';   
        }
        
        $this->deleteProduct($id);
        $this->deleteSerivce($id);
        $this->deleteGallery($id);
        $this->deleteTestmonial($id);
        
        
        $this->Owner_model->delUser($id);
        $this->Owner_model->delProduct($id);
        $this->Owner_model->delService($id);
        $this->Owner_model->delGallery($id);
        $this->Owner_model->delTestimonial($id);
        
        redirect('Owneradmin/admindashboard');
    }
    public function deleteProduct($id)
    {
        $data=$this->Owner_model->getDeleteProductInfo($id);
        for($i=1;$i<=12;$i++)
        {
            $name=$data['product_image'.$i];
            if($name!=NULL)
            {
                // echo $name.'<br>';    
                unlink(FCPATH . 'assets/user_assets/product/' . $name);
            }
        }
    }
    public function deleteSerivce($id)
    {
        $data=$this->Owner_model->getDeleteServiceInfo($id);
        for($i=1;$i<=12;$i++)
        {
            $name=$data['service_image'.$i];
            if($name!=NULL)
            {
                // echo $name.'<br>';    
                unlink(FCPATH . 'assets/user_assets/service/' . $name);
            }
        }
    }
    public function deleteGallery($id)
    {
        $data=$this->Owner_model->getDeleteGalleryInfo($id);
        for($i=1;$i<=12;$i++)
        {
            $name=$data['gallery_image'.$i];
            if($name!=NULL)
            {
                // echo $name.'<br>';    
                unlink(FCPATH . 'assets/user_assets/galleryF/' . $name);
            }
        }
    }
    public function deleteTestmonial($id)
    {
        $data=$this->Owner_model->getDeleteTestimonialInfo($id);
        for($i=1;$i<=4;$i++)
        {
            $name=$data['testimonial_image'.$i];
            if($name!=NULL)
            {
                // echo $name.'<br>';    
                unlink(FCPATH . 'assets/user_assets/testimonial/' . $name);
            }
        }
    }
    public function test(){
        $text=md5('neelbardoliya4@gmail.com');
        echo $text;
    }
    public function logout()
    {
        // session_start();
        $_SESSION['user'] = "";
        session_destroy();
        unset($_SESSION);
        redirect('Owneradmin/index');
    }
}



?>