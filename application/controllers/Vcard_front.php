<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vcard_front extends CI_Controller
{
    public $CII = NULL;
    
    public function __construct()
    {
        parent::__construct();
        $this->CI = &get_instance();
        $this->load->model('Vcard_model');
    }
    public function userActive($id)
    {
        $formArray=array();
        $formArray['status']=1;
        $this->Vcard_model->userActiveInactive($id,$formArray);
    }
    public function userInactive($id)
    {
        $formArray=array();
        $formArray['status']=0;
        $this->Vcard_model->userActiveInactive($id,$formArray);
    }
    public function paymentInactive($id)
    {
        $formArray=array();
        $formArray['payment_status']=0;
        $this->Vcard_model->userActiveInactive($id,$formArray);
    }
    public function userPaymentActive($id)
    {
        $formArray=array();
        $cdate = strtotime(date("Y-m-d"));
        $formArray['enddate'] = date("Y-m-d", strtotime("+12 month", $cdate));
        $formArray['status']=1;
        $this->Vcard_model->userActiveInactive($id,$formArray);
    }
    public function dummy()
    {
        $this->load->view('Admin/dummy');
    }
    public function getName1($value)
    {
        $this->load->model('Vcard_model');
        $name = $this->Vcard_model->getName1($value);
        return $name['cat_name'];
    }
    public function vcard_generate($id)
    {
        $this->load->library('vcard');
        $details=$this->Vcard_model->getPersonal($id);
        // print_r($details);
        $disname=$details['owner_name'];
        $company=$details['company_name'];
        $url=$details['website'];
        $office=$details['contact_no'];
        $cell=$details['alternate_contact1'];
        $email=$details['email'];
        $data=array();
        $data['display_name']=$disname;
        $data['company']=$company;
        $data['url']=$url;
        $data['office_tel']=$office;
        $data['cell_tel']=$cell;
        $data['email1']=$email;

        // $data=array();
        // $data['display_name']='neel';
        // $data['company']='bkwdf';
        // $data['url']='sdf';
        // $data['office_tel']='1234567890';
        // $data['cell_tel']='0987654321';
        // $data['email1']='abc@gmail.com';
        $this->vcard->vcard($data);
        $this->vcard->download();    
    }
    public function index1($id)
    {
        // $id=26;
        $data['detail']=$this->Vcard_model->getPersonal($id);
        $data['product']=$this->Vcard_model->getProducts($id);
        $data['gallery']=$this->Vcard_model->getGallery($id);
        $data['brands']=$this->Vcard_model->getBrands($id);
        $data['testimonial']=$this->Vcard_model->getTestimonial($id);
        // $data['logo']=$this->Vcard_model->getLogo();
        // $data['favicon']=$this->Vcard_model->getFavicon();
        // $data['slider']=$this->Vcard_model->getSlider();
        // $data['color']=$this->Vcard_model->getTheme();
        // $data['contact']=$this->Vcard_model->getContact();
        // $data['message']=$this->Vcard_model->getWhatsappMessage();
        // $data['message1']=$this->Vcard_model->getProductMessage();
        // $data['about']=$this->Vcard_model->getAbout();
        // $data['aboutyear']=$this->Vcard_model->getAbtYear();
        // $data['productcate']=$this->Vcard_model->getProductCategory();
        // $data['products']=$this->Vcard_model->getProducts();
        // $data['gallery']=$this->Vcard_model->getGallery();
        // $data['video']=$this->Vcard_model->getVideos();
        // $data['testimonial']=$this->Vcard_model->getTestimonial();
        // $data['brands']=$this->Vcard_model->getBrands();
        // $data['qrcode']=$this->Vcard_model->getQRCode();
        // $data['social']=$this->Vcard_model->getSocialMedia();
        // $data['check']=$this->Vcard_model->getCheckBrands();
        // print_r($data['testimonial']);
        $filename="index$id";
        // echo $filename;
        $this->load->view('Users/'.$filename,$data);
    //   $this->load->view('index2',$data);
    }

    public function indextest()
    {   
        $id=1;
        $data['detail']=$this->Vcard_model->getPersonal($id);
        $data['product']=$this->Vcard_model->getProducts($id);
        $data['gallery']=$this->Vcard_model->getGallery($id);
        $data['brands']=$this->Vcard_model->getBrands($id);
        $data['testimonial']=$this->Vcard_model->getTestimonial($id);
        $this->load->view('index2',$data);
    }
    public function index2($id)
    {
        $data['detail']=$this->Vcard_model->getPersonal($id);
        $data['product']=$this->Vcard_model->getProducts($id);
        $data['gallery']=$this->Vcard_model->getGallery($id);
        $data['brands']=$this->Vcard_model->getBrands($id);
        $data['testimonial']=$this->Vcard_model->getTestimonial($id);

        $this->load->view('Users/index19',$data);
    }

    public function index3()
    {
        $id=1;
        $data['detail']=$this->Vcard_model->getPersonal($id);
        $data['product']=$this->Vcard_model->getProducts($id);
        $data['gallery']=$this->Vcard_model->getGallery($id);
        $data['brands']=$this->Vcard_model->getBrands($id);
        $data['testimonial']=$this->Vcard_model->getTestimonial($id);

        $this->load->view('index3',$data);
    }
    public function index4()
    {
        $id=1;
        $data['detail']=$this->Vcard_model->getPersonal($id);
        $data['product']=$this->Vcard_model->getProducts($id);
        $data['gallery']=$this->Vcard_model->getGallery($id);
        $data['brands']=$this->Vcard_model->getBrands($id);
        $data['testimonial']=$this->Vcard_model->getTestimonial($id);

        $this->load->view('index4',$data);
    }
}