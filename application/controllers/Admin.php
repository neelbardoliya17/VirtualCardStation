<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public $CI = NULL;

    public function __construct()
    {
        parent::__construct();
        $this->CI = &get_instance();
        $this->load->library('form_validation');
        $this->load->library('ciqrcode');
        $this->load->model('Admin_model');
    }
    public function test()
    {
        echo base_url();
    }
    public function getFavLog($id)
    {
        $dd = $this->Admin_model->getFavLog($id);
        return $dd;
    }
    public function index()
    {
        // $this->load->model('admin_model');
        $data1 = $this->Admin_model->getHeaderData();
        $data = array();
        $data['head'] = $data1;
        $this->load->view('Admin/login', $data);
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
        }
        if (isset($_POST['submit'])) {
            $formArray = array();
            $formArray['email'] = $email;
            $formArray['pwd'] = $password;
            $data = array();
            $data['userid'] = $this->Admin_model->getUserId($formArray);
            $id = implode(",", (array)$data['userid']);
            $aa = $this->load->Admin_model->getLogCheck($formArray);
             $ver=$this->load->Admin_model->isVerified($email);
            if ($aa == true) {
                if($ver==1)
                {
                $this->session->set_userdata('user', $formArray['email']);
                $this->session->set_userdata('id', $id);
                redirect('Admin/userdashboard/' . $id);
                }
                else
                {
                     $this->session->set_flashdata('error', 'Please Verify Your Email First');
                    redirect('admin');
                }
            } else {
                $this->session->set_flashdata('error', 'Opps..!Looks like username or password is wrong.');
                redirect('admin');
            }
        }
    }


    public function register()
    {
        if (!isset($_POST['register'])) {
            $this->load->view('Admin/register');
        } else {
            if (isset($_POST['chk'])) {
                $formArray = array();
                // $formArray['username'] = $_POST['username'];
                $email=$_POST['email'];
                $formArray['password'] = $_POST['password'];
                $formArray['user_mail'] = $email;
                $formArray['verification_code']=md5($email);
                $slug=$_POST['slug'];
                $formArray['company_name']=$slug;
                $slug = str_replace(' ','-',$slug);
                $count=$this->Admin_model->getSlugCount($slug);
                if($count>0)
                {
                    $slug.=$count;
                    $formArray['slug']=$slug;
                }
                else
                {
                    $formArray['slug']=$slug;    
                }
                
                
                $formArray['username'] = strstr($_POST['email'], '@', true);
                $cdate = strtotime(date("Y-m-d"));
                $formArray['startdate'] = date("Y-m-d");
                $formArray['eight_date']=date("Y-m-d", strtotime("+7 days", $cdate));
                $formArray['af_month']=date("Y-m-d", strtotime("+31 days", $cdate));
                $formArray['enddate'] = date("Y-m-d", strtotime("+12 month", $cdate));
                $iid = $this->Admin_model->addUser($formArray);
                if($iid=="0")
                {
                    echo "<script type ='text/JavaScript'>";
                    $message="Email Exist try another ID";  
                    echo "alert('$message');window.location.href = 'register'";  
                    echo "</script>";
                }
                else
                {
                        $newarra = array();
                        $newarra['user_id'] = $iid;
                        $this->Admin_model->addpro($newarra);
                        $fname="index$iid.php";
                        $src_path=APPPATH.'views/index.php';
                        $des_path=APPPATH.'views/Users/'.$fname;
                        // touch($des_path.$fname);
                        copy($src_path,$des_path);
                        $dataarr=array();
                        $dataarr=$this->Admin_model->getUserPass($iid);
                        
                        
                        $this->send_verification_email($dataarr['user_mail'],$dataarr['verification_code']);
                        
                        
                        // $config = Array(
                        // 'protocol' => 'smtp',
                        // 'smtp_host' => 'smtp.sendgrid.net',
                        // 'smtp_port' => 587,
                        // 'smtp_user' => 'dezykharwar1@gmail.com',
                        // 'smtp_pass' => 'Dezy@123',
                        // 'mailtype'  => 'html', 
                        // 'charset'   => 'iso-8859-1',
                        // 'validation'=>TRUE
                        // );
                
                        // $to=$dataarr['user_mail']; 
                        
                        
                        
                        // $this->load->library('email', $config);
                        // $this->email->set_newline("\r\n");
                        // $this->email->set_mailtype("html");
                        // $this->email->from('dezykharwar1@gmail.com', 'Dezy');
                        // $this->email->to($to); 
                
                        // $this->email->subject('Digital Card Registration Confirmation');
                        // $emailContent="<!DOCTYPE>
                        // <html>
                        // <head>
                        // </head>
                        // <body>
                        //   <h3>Your Account Has Been Created for Digital Card.The Username and Password is Given Below.</h3>
                        //   <h4>Username:</h4><p>".$dataarr['username']."</p>
                        //   <h4>Password:</h4><p>".$dataarr['password']."</p>
                        //   <p>Thanks & Regards</p>
                        //   <h3>Iced Infotech</h3>
                        // </body>
                        // </html>";
                        // $this->email->message($emailContent);  
                        // $this->email->send();
                
                        // echo $this->email->print_debugger();
                        
                        $this->session->set_flashdata('success', 'Verification Link has been send to your Email');
                        // copy($src_path,$des_path.$fname);
                        redirect('admin/register');
                }
              
                // $this->admin_model->addserv($newarra);
                // $this->admin_model->addgall($newarra);
                // $this->admin_model->addtest($newarra);
                // echo $iddd;
                // redirect('admin');
            } else {
                $this->session->set_flashdata('error', 'Check Terms and Condition');
                redirect('admin/register');
            }
        }
    }
    
    public function send_verification_email($email, $verification_code)
{
    // Set email parameters
    $this->load->library("email");
    $this->email->from('neelbardoliya17@gmail.com', 'ICED INFOTECH');
    $this->email->to($email);
    $this->email->subject("Digital Card Email Verification");

    // Construct email message
    $message = "<!DOCTYPE html>
                <html>
                <head>
                </head>
                <body>
                <h1>Please click the link below to verify your email</h1>
                <a href='" . base_url("admin/verify_email/$verification_code") . "'>Verify Email</a>
                </body>
                </html>";

    $this->email->message($message);

    // Send email using mail protocol
    if ($this->email->send()) {
        echo "Success";
        return true;
    } else {
        // Uncomment the following line to print debug information
        // echo $this->email->print_debugger();
        echo "Fail";
        return false;
    }
}

    public function verify_email($verification_code) {
        $user = $this->Admin_model->get_user_by_verification_code($verification_code);

        if ($user) {
            $this->Admin_model->verify_user_email($user['user_id']);
            $this->session->set_flashdata('success', 'Your email has been verified. You can now login');
            redirect('admin');
        } else {
            $this->session->set_flashdata('error', 'Invalid verification code');
            redirect('admin');
        }
    }
    public function userdashboard($id)
    {
        $data=array();
        $data['userid']=$id;
         $data['fav'] = $this->getFavLog($id);
        $data['person'] = $this->Admin_model->getPersonalInfo($id);
        $this->load->view('Admin/userdashboard',$data);
    }
    
    public function dashboard($id)
    {
        if (!isset($_POST['addper'])) {
            $data = array();
            $data['fav'] = $this->getFavLog($id);
            // print_r($data['fav']);
            $data['userid'] = $id;
            $data['person'] = $this->Admin_model->getPersonalInfo($id);
            $this->load->view('Admin/dashboard', $data);
        } else {
            $uid = $_POST['userid'];
            $slug=$_POST['company_name'];
            $data['company_name'] = $slug;
            $slug=str_replace(' ','-',$slug);
            $count=$this->Admin_model->getSlugCount1($slug,$id);
            if($count>0)
            {
                $slug.=$count;
                $data['slug']=$slug;
            }
            else
            {
                $data['slug']=$slug;
            }
            $data['owner_name'] = $_POST['owner_name'];
            // $data['position'] = $_POST['position'];
            // $data['email'] = $_POST['email'];
            $data['address']=$_POST['address'];
            $data['contact_no'] = $_POST['contact_no'];
            $data['alternate_contact1'] = $_POST['alcon1'];
            $data['alternate_contact2'] = $_POST['alcon2'];
            $data['alternate_contact3'] = $_POST['alcon3'];
            $logo_img1 = $_POST['logo_img1'];
            // if ($_FILES['logo_img']['error'] > 0) {
            //     $data['logo_image'] = $logo_img1;
            // } else {
            //     unlink(FCPATH . 'assets/user_assets/logo/' . $logo_img1);
            //     unlink(FCPATH . 'assets/user_assets/logo/big_img/' . $logo_img1);
            
            
                if($logo_img1=="")
                {
                    if ($_FILES['logo_img']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("logo_img", "logo", "200", "77");
                $data['logo_image'] = $image;
                    }
                }
               
            // }
            $this->Admin_model->updatePersonalInfo($uid, $data);
            redirect('Admin/about/' . $uid);
        }
    }
    public function about($id)
    {
        if (!isset($_POST['addabt'])) {
            $data = array();
            $data['fav'] = $this->getFavLog($id);
            $data['userid'] = $id;
            $data['about'] = $this->Admin_model->getAboutInfo($id);
            $this->load->view('Admin/about', $data);
        } else {
            $uid = $_POST['userid'];
            $data['about_title'] = $_POST['abt_title'];
            $data['about_description'] = $_POST['abt_desc'];
            
            $data['est_year'] = $_POST['est_year'];
            $data['business_type'] = $_POST['business_type'];
            $data['website'] = $_POST['web'];
            $data['mon_fri'] = $_POST['mon_fri'];
            $data['saturday'] = $_POST['saturday'];
            $data['sunday'] = $_POST['sunday'];
            $data['maptag'] = $_POST['maptag'];
            $data['mapurl'] = $_POST['mapurl'];
            $about_img1 = $_POST['abt_img1'];

            // if ($_FILES['abt_img']['error'] > 0) {
            //     $data['about_image'] = $about_img1;
            // } else {
            //     unlink(FCPATH . 'assets/user_assets/about/' . $about_img1);
            //     unlink(FCPATH . 'assets/user_assets/about/big_img/' . $about_img1);
            if($about_img1=="")
            {
                if($_FILES['about_image']['error']<=0)    
                {
                $this->load->library('image');
                $image = $this->image->createImage1("about_image", "about", "720", "720");
                $data['about_image'] = $image;
                }
            }
            // }
            $this->Admin_model->updatePersonalInfo($uid, $data);
            redirect('Admin/theme/' . $uid);
        }
    }
    public function theme($id)
    {
        if (!isset($_POST['addthe'])) {
            $data = array();
            $data['fav'] = $this->getFavLog($id);
            $data['userid'] = $id;
            $data['theme'] = $this->Admin_model->getThemeInfo($id);
            $this->load->view('Admin/theme', $data);
        } else {
            
            $uid = $_POST['userid'];
            $data['header_color'] = $_POST['header_color'];
            $data['header_text_color'] = $_POST['header_text_color'];
            $data['button_color'] = $_POST['button_color'];
            $data['about_color'] = $_POST['about_color'];
            $data['about_text_color'] = $_POST['about_text_color'];
            $data['footer_color'] = $_POST['footer_color'];
            $data['footer_text_color'] = $_POST['footer_text_color'];
            $pop_img1 = $_POST['popup_image2'];


            // if ($_FILES['popup_image']['error'] > 0) {
            //     $data['popup_image1'] = $pop_img1;
            // } else {
            //     unlink(FCPATH . 'assets/user_assets/popup/' . $pop_img1);
            //     unlink(FCPATH . 'assets/user_assets/popup/big_img/' . $pop_img1);
                if($pop_img1=="")
                {
                    if ($_FILES['popup_image1']['error'] <= 0) {
                        $this->load->library('image');
                        $image = $this->image->createImage1("popup_image1", "popup", "720", "720");
                        $data['popup_image1'] = $image;
                    }
                }
            // }
            // if (isset($_POST['chk'])) {
            //     $data['icon_outline'] = 1;
            // } else {
            //     $data['icon_outline'] = 0;
            // }
            $this->Admin_model->updatePersonalInfo($uid, $data);
            redirect('Admin/product/' . $uid);
        }
    }
    public function product($id)
    {
        if (isset($_POST['checkk'])) {
            if (isset($_POST['chk'])) {
                $formArray = array();
                $formArray['as_service'] = 1;
                $this->Admin_model->setProductAs($id, $formArray);
            }
            if (!isset($_POST['chk'])) {
                $formArray = array();
                $formArray['as_service'] = 0;
                $this->Admin_model->setProductAs($id, $formArray);
            }
        }
        if (!isset($_POST['addpro'])) {
            $data = array();
            $data['fav'] = $this->getFavLog($id);
            $data['userid'] = $id;
            $data['product'] = $this->Admin_model->getProductInfo($id);
            $this->load->view('Admin/product1', $data);
        } else {
            $uid = $_POST['userid'];
            $newar = array();
                $newar['catttt'] = explode(",", $_POST['catttt']);
            $cat = $_POST['catttt'];
            if (!in_array($_POST['myCat1'], $newar['catttt'])) {
                $cat .= $_POST['myCat1'] . ",";
                // $data['product_category']=$cat;
            }

            $data['product_name1'] = $_POST['pname1'];
            $data['product_cat1'] = $_POST['myCat1'];
            $productimage1 = $_POST['productimage1'];
            
            
            // if ($_FILES['pimg1']['error'] > 0) {
            //     $data['product_image1'] = $productimage1;
            // } else {
            //     if ($productimage1 != "") {
            //         unlink(FCPATH . 'assets/user_assets/product/' . $productimage1);
            //         unlink(FCPATH . 'assets/user_assets/product/big_img/' . $productimage1);
            //     }
            if($productimage1=="")
            {
                if ($_FILES['product_image1']['error'] <= 0) {
                    $this->load->library('image');
                    $image = $this->image->createImage1("product_image1", "product", "720", "720");
                    $data['product_image1'] = $image;
                }
            }
            // }


            $data['product_name2'] = $_POST['pname2'];
            if (!in_array($_POST['myCat2'], $newar['catttt'])) {
                $cat .= $_POST['myCat2'] . ",";
                // $data['product_category']=$cat;
            }
            $data['product_cat2'] = $_POST['myCat2'];
            $productimage2 = $_POST['productimage2'];
            
            // if ($_FILES['pimg2']['error'] > 0) {
            //     $data['product_image2'] = $productimage2;
            // } else {
            //     if ($productimage2 != "") {
            //         unlink(FCPATH . 'assets/user_assets/product/' . $productimage2);
            //         unlink(FCPATH . 'assets/user_assets/product/big_img/' . $productimage2);
            //     }
            if($productimage2=="")
            {
                if ($_FILES['product_image2']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("product_image2", "product", "720", "720");
                $data['product_image2'] = $image;
                }
            }
            // }

            $data['product_name3'] = $_POST['pname3'];
            if (!in_array($_POST['myCat3'], $newar['catttt'])) {
                $cat .= $_POST['myCat3'] . ",";
                // $data['product_category']=$cat;
            }
            $data['product_cat3'] = $_POST['myCat3'];
            $productimage3 = $_POST['productimage3'];
            
            // if ($_FILES['pimg3']['error'] > 0) {
            //     $data['product_image3'] = $productimage3;
            // } else {
            //     if ($productimage1 != "") {
            //         unlink(FCPATH . 'assets/user_assets/product/' . $productimage3);
            //         unlink(FCPATH . 'assets/user_assets/product/big_img/' . $productimage3);
            //     }
            if($productimage3=="")
            {
                if ($_FILES['product_image3']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("product_image3", "product", "720", "720");
                $data['product_image3'] = $image;
                }
            }
            // }

            $data['product_name4'] = $_POST['pname4'];
            if (!in_array($_POST['myCat4'], $newar['catttt'])) {
                $cat .= $_POST['myCat4'] . ",";
                // $data['product_category']=$cat;
            }
            $data['product_cat4'] = $_POST['myCat4'];
            $productimage4 = $_POST['productimage4'];
            
            // if ($_FILES['pimg4']['error'] > 0) {
            //     $data['product_image4'] = $productimage4;
            // } else {
            //     if ($productimage4 != "") {
            //         unlink(FCPATH . 'assets/user_assets/product/' . $productimage4);
            //         unlink(FCPATH . 'assets/user_assets/product/big_img/' . $productimage4);
            //     }
            if($productimage4=="")
            {
                if ($_FILES['product_image4']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("product_image4", "product", "720", "720");
                $data['product_image4'] = $image;
                }
            }
            // }

            $data['product_name5'] = $_POST['pname5'];
            if (!in_array($_POST['myCat5'], $newar['catttt'])) {
                $cat .= $_POST['myCat5'] . ",";
                // $data['product_category']=$cat;
            }
            $data['product_cat5'] = $_POST['myCat5'];
            $productimage5 = $_POST['productimage5'];
            
            // if ($_FILES['pimg5']['error'] > 0) {
            //     $data['product_image5'] = $productimage5;
            // } else {
            //     if ($productimage5 != "") {
            //         unlink(FCPATH . 'assets/user_assets/product/' . $productimage5);
            //         unlink(FCPATH . 'assets/user_assets/product/big_img/' . $productimage5);
            //     }
            if($productimage5=="")
            {
                if ($_FILES['product_image5']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("product_image5", "product", "720", "720");
                $data['product_image5'] = $image;
                }
            }
            // }

            $data['product_name6'] = $_POST['pname6'];
            if (!in_array($_POST['myCat6'], $newar['catttt'])) {
                $cat .= $_POST['myCat6'] . ",";
                // $data['product_category']=$cat;
            }
            $data['product_cat6'] = $_POST['myCat6'];
            $productimage6 = $_POST['productimage6'];
            
            // if ($_FILES['pimg6']['error'] > 0) {
            //     $data['product_image6'] = $productimage6;
            // } else {
            //     if ($productimage6 != "") {
            //         unlink(FCPATH . 'assets/user_assets/product/' . $productimage6);
            //         unlink(FCPATH . 'assets/user_assets/product/big_img/' . $productimage6);
            //     }
            if($productimage6=="")
            {
                if ($_FILES['product_image6']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("product_image6", "product", "720", "720");
                $data['product_image6'] = $image;
                }
            }
            // }

            $data['product_name7'] = $_POST['pname7'];
            if (!in_array($_POST['myCat7'], $newar['catttt'])) {
                $cat .= $_POST['myCat7'] . ",";
                // $data['product_category']=$cat;
            }
            $data['product_cat7'] = $_POST['myCat7'];
            $productimage7 = $_POST['productimage7'];
            
            // if ($_FILES['pimg7']['error'] > 0) {
            //     $data['product_image7'] = $productimage7;
            // } else {
            //     if ($productimage7 != "") {
            //         unlink(FCPATH . 'assets/user_assets/product/' . $productimage7);
            //         unlink(FCPATH . 'assets/user_assets/product/big_img/' . $productimage7);
            //     }
            if($productimage7=="")
            {
                if ($_FILES['product_image7']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("product_image7", "product", "720", "720");
                $data['product_image7'] = $image;
                }
            }
            // }

            $data['product_name8'] = $_POST['pname8'];
            if (!in_array($_POST['myCat8'], $newar['catttt'])) {
                $cat .= $_POST['myCat8'] . ",";
                // $data['product_category']=$cat;
            }
            $data['product_cat8'] = $_POST['myCat8'];
            $productimage8 = $_POST['productimage8'];
            
            // if ($_FILES['pimg8']['error'] > 0) {
            //     $data['product_image8'] = $productimage8;
            // } else {
            //     if ($productimage8 != "") {
            //         unlink(FCPATH . 'assets/user_assets/product/' . $productimage8);
            //         unlink(FCPATH . 'assets/user_assets/product/big_img/' . $productimage8);
            //     }
            if($productimage8=="")
            {
                if ($_FILES['product_image8']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("product_image8", "product", "720", "720");
                $data['product_image8'] = $image;
                }
            }
            // }

            $data['product_name9'] = $_POST['pname9'];
            if (!in_array($_POST['myCat9'], $newar['catttt'])) {
                $cat .= $_POST['myCat9'] . ",";
                // $data['product_category']=$cat;
            }
            $data['product_cat9'] = $_POST['myCat9'];
            $productimage9 = $_POST['productimage9'];
            
            // if ($_FILES['pimg9']['error'] > 0) {
            //     $data['product_image9'] = $productimage9;
            // } else {
            //     if ($productimage9 != "") {
            //         unlink(FCPATH . 'assets/user_assets/product/' . $productimage9);
            //         unlink(FCPATH . 'assets/user_assets/product/big_img/' . $productimage9);
            //     }
            if($productimage9=="")
            {
                if ($_FILES['product_image9']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("product_image9", "product", "720", "720");
                $data['product_image9'] = $image;
                }
            }
            // }

            $data['product_name10'] = $_POST['pname10'];
            if (!in_array($_POST['myCat10'], $newar['catttt'])) {
                $cat .= $_POST['myCat10'] . ",";
                // $data['product_category']=$cat;
            }
            $data['product_cat10'] = $_POST['myCat10'];
            $productimage10 = $_POST['productimage10'];
            
            // if ($_FILES['pimg10']['error'] > 0) {
            //     $data['product_image10'] = $productimage10;
            // } else {
            //     if ($productimage10 != "") {
            //         unlink(FCPATH . 'assets/user_assets/product/' . $productimage10);
            //         unlink(FCPATH . 'assets/user_assets/product/big_img/' . $productimage10);
            //     }
            if($productimage10=="")
            {
                if ($_FILES['product_image10']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("product_image10", "product", "720", "720");
                $data['product_image10'] = $image;
                }
            }
            // }

            $data['product_name11'] = $_POST['pname11'];
            if (!in_array($_POST['myCat11'], $newar['catttt'])) {
                $cat .= $_POST['myCat11'] . ",";
                // $data['product_category']=$cat;
            }
            $data['product_cat11'] = $_POST['myCat11'];
            $productimage11 = $_POST['productimage11'];
            
            // if ($_FILES['pimg11']['error'] > 0) {
            //     $data['product_image11'] = $productimage11;
            // } else {
            //     if ($productimage11 != "") {
            //         unlink(FCPATH . 'assets/user_assets/product/' . $productimage11);
            //         unlink(FCPATH . 'assets/user_assets/product/big_img/' . $productimage11);
            //     }
            if($productimage11=="")
            {
                if ($_FILES['product_image11']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("product_image11", "product", "720", "720");
                $data['product_image11'] = $image;
                }
            }
            // }

            $data['product_name12'] = $_POST['pname12'];
            if (!in_array($_POST['myCat12'], $newar['catttt'])) {
                // $cat=$_POST['catttt'].",".$_POST['myCat12'];
                // $data['product_category']=$cat;
                $cat .= $_POST['myCat12'] . ",";
            }
            $data['product_cat12'] = $_POST['myCat12'];
            $productimage12 = $_POST['productimage12'];
            
            // if ($_FILES['pimg12']['error'] > 0) {
            //     $data['product_image12'] = $productimage12;
            // } else {
            //     if ($productimage12 != "") {
            //         unlink(FCPATH . 'assets/user_assets/product/' . $productimage12);
            //         unlink(FCPATH . 'assets/user_assets/product/big_img/' . $productimage12);
            //     }
            if($productimage12=="")
            {
                if ($_FILES['product_image12']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("product_image12", "product", "720", "720");
                $data['product_image12'] = $image;
                }
            }
            // }
            $data['product_category'] = $cat;
            $this->Admin_model->updateProductInfo($uid, $data);
            redirect('Admin/brands/' . $uid);
        }
    }
    public function brands($id)
    {
        if (isset($_POST['checkk'])) {
            if (isset($_POST['chk'])) {
                $formArray = array();
                $formArray['service_display'] = 1;
                $this->Admin_model->setBrands($id, $formArray);
            }
            if (!isset($_POST['chk'])) {
                $formArray = array();
                $formArray['service_display'] = 0;
                $this->Admin_model->setBrands($id, $formArray);
            }
        }
        if (!isset($_POST['addbrand'])) {
            $data = array();
            $data['fav'] = $this->getFavLog($id);
            $data['userid'] = $id;
            $data['brands'] = $this->Admin_model->getBrandsInfo($id);
            $this->load->view('Admin/brands1', $data);
        } else {
            $uid = $_POST['userid'];

            $data['service_name1'] = $_POST['bname1'];
            $bimage1 = $_POST['bimage1'];
            // if ($_FILES['bimg1']['error'] > 0) {
            //     $data['service_image1'] = $bimage1;
            // } else {
            //     if ($bimage1 != "") {
            //         unlink(FCPATH . 'assets/user_assets/service/' . $bimage1);
            //         unlink(FCPATH . 'assets/user_assets/service/big_img/' . $bimage1);
            //     }
                if($bimage1=="")
                {
                   if ($_FILES['service_image1']['error'] <= 0) {
                    $this->load->library('image');
                    $image = $this->image->createImage1("service_image1", "service", "720", "720");
                    $data['service_image1'] = $image;
                   }
                }
            // }

            $data['service_name2'] = $_POST['bname2'];
            $bimage2 = $_POST['bimage2'];
            // if ($_FILES['bimg2']['error'] > 0) {
            //     $data['service_image2'] = $bimage2;
            // } else {
            //     if ($bimage2 != "") {
            //         unlink(FCPATH . 'assets/user_assets/service/' . $bimage2);
            //         unlink(FCPATH . 'assets/user_assets/service/big_img/' . $bimage2);
            //     }
            if($bimage2=="")
                {
                   if ($_FILES['service_image2']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("service_image2", "service", "720", "720");
                $data['service_image2'] = $image;
                   }
                }
            // }


            $data['service_name3'] = $_POST['bname3'];
            $bimage3 = $_POST['bimage3'];
            // if ($_FILES['bimg3']['error'] > 0) {
            //     $data['service_image3'] = $bimage3;
            // } else {
            //     if ($bimage3 != "") {
            //         unlink(FCPATH . 'assets/user_assets/service/' . $bimage3);
            //         unlink(FCPATH . 'assets/user_assets/service/big_img/' . $bimage3);
            //     }
            if($bimage3=="")
                {
                   if ($_FILES['service_image3']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("service_image3", "service", "720", "720");
                $data['service_image3'] = $image;
                   }
                }
            // }


            $data['service_name4'] = $_POST['bname4'];
            $bimage4 = $_POST['bimage4'];
            // if ($_FILES['bimg4']['error'] > 0) {
            //     $data['service_image4'] = $bimage4;
            // } else {
            //     if ($bimage4 != "") {
            //         unlink(FCPATH . 'assets/user_assets/service/' . $bimage4);
            //         unlink(FCPATH . 'assets/user_assets/service/big_img/' . $bimage4);
            //     }
            if($bimage4=="")
                {
                   if ($_FILES['service_image4']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("service_image4", "service", "720", "720");
                $data['service_image4'] = $image;
                   }
                }
            // }

            $data['service_name5'] = $_POST['bname5'];
            $bimage5 = $_POST['bimage5'];
            // if ($_FILES['bimg5']['error'] > 0) {
            //     $data['service_image5'] = $bimage5;
            // } else {
            //     if ($bimage5 != "") {
            //         unlink(FCPATH . 'assets/user_assets/service/' . $bimage5);
            //         unlink(FCPATH . 'assets/user_assets/service/big_img/' . $bimage5);
            //     }
            if($bimage5=="")
                {
                   if ($_FILES['service_image5']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("service_image5", "service", "720", "720");
                $data['service_image5'] = $image;
                   }
                }
            // }
https://goo.gl/maps/kWzvRYQeu1UroTc18
            $data['service_name6'] = $_POST['bname6'];
            $bimage6 = $_POST['bimage6'];
            // if ($_FILES['bimg6']['error'] > 0) {
            //     $data['service_image6'] = $bimage6;
            // } else {
            //     if ($bimage6 != "") {
            //         unlink(FCPATH . 'assets/user_assets/service/' . $bimage6);
            //         unlink(FCPATH . 'assets/user_assets/service/big_img/' . $bimage6);
            //     }
            if($bimage6=="")
                {
                   if ($_FILES['service_image6']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("service_image6", "service", "720", "720");
                $data['service_image6'] = $image;
                   }
                }
            // }

            $data['service_name7'] = $_POST['bname7'];
            $bimage7 = $_POST['bimage7'];
            // if ($_FILES['bimg7']['error'] > 0) {
            //     $data['service_image7'] = $bimage7;
            // } else {
            //     if ($bimage7 != "") {
            //         unlink(FCPATH . 'assets/user_assets/service/' . $bimage7);
            //         unlink(FCPATH . 'assets/user_assets/service/big_img/' . $bimage7);
            //     }
            if($bimage7=="")
                {
                   if ($_FILES['service_image7']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("service_image7", "service", "720", "720");
                $data['service_image7'] = $image;
                   }
                }
            // }

            $data['service_name8'] = $_POST['bname8'];
            $bimage8 = $_POST['bimage8'];
            // if ($_FILES['bimg8']['error'] > 0) {
            //     $data['service_image8'] = $bimage8;
            // } else {
            //     if ($bimage8 != "") {
            //         unlink(FCPATH . 'assets/user_assets/service/' . $bimage8);
            //         unlink(FCPATH . 'assets/user_assets/service/big_img/' . $bimage8);
            //     }
            if($bimage8=="")
                {
                   if ($_FILES['service_image8']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("service_image8", "service", "720", "720");
                $data['service_image8'] = $image;
                   }
                }
            // }

            $data['service_name9'] = $_POST['bname9'];
            $bimage9 = $_POST['bimage9'];
            // if ($_FILES['bimg9']['error'] > 0) {
            //     $data['service_image9'] = $bimage9;
            // } else {
            //     if ($bimage9 != "") {
            //         unlink(FCPATH . 'assets/user_assets/service/' . $bimage9);
            //         unlink(FCPATH . 'assets/user_assets/service/big_img/' . $bimage9);
            //     }
            if($bimage9=="")
                {
                   if ($_FILES['service_image9']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("service_image9", "service", "720", "720");
                $data['service_image9'] = $image;
                   }
                }
            // }

            $data['service_name10'] = $_POST['bname10'];
            $bimage10 = $_POST['bimage10'];
            // if ($_FILES['bimg10']['error'] > 0) {
            //     $data['service_image10'] = $bimage10;
            // } else {
            //     if ($bimage10 != "") {
            //         unlink(FCPATH . 'assets/user_assets/service/' . $bimage10);
            //         unlink(FCPATH . 'assets/user_assets/service/big_img/' . $bimage10);
            //     }
            if($bimage10=="")
                {
                   if ($_FILES['service_image10']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("service_image10", "service", "720", "720");
                $data['service_image10'] = $image;
                   }
                }
            // }

            $data['service_name11'] = $_POST['bname11'];
            $bimage11 = $_POST['bimage11'];
            // if ($_FILES['bimg11']['error'] > 0) {
            //     $data['service_image11'] = $bimage11;
            // } else {
            //     if ($bimage11 != "") {
            //         unlink(FCPATH . 'assets/user_assets/service/' . $bimage11);
            //         unlink(FCPATH . 'assets/user_assets/service/big_img/' . $bimage11);
            //     }
            if($bimage11=="")
                {
                   if ($_FILES['service_image11']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("service_image11", "service", "720", "720");
                $data['service_image11'] = $image;
                   }
                }
            // }

            $data['service_name12'] = $_POST['bname12'];
            $bimage12 = $_POST['bimage12'];
            // if ($_FILES['bimg12']['error'] > 0) {
            //     $data['service_image12'] = $bimage12;
            // } else {
            //     if ($bimage12 != "") {
            //         unlink(FCPATH . 'assets/user_assets/service/' . $bimage12);
            //         unlink(FCPATH . 'assets/user_assets/service/big_img/' . $bimage12);
            //     }
            if($bimage12=="")
                {
                   if ($_FILES['service_image12']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("service_image12", "service", "720", "720");
                $data['service_image12'] = $image;
                   }
                }
            // }

            $this->Admin_model->updateBrandsInfo($uid, $data);
            redirect('Admin/gallery/' . $uid);
        }
    }
    public function gallery($id)
    {
        
        
        if (!isset($_POST['addGall'])) {
            $data = array();
            $data['fav'] = $this->getFavLog($id);
            $data['userid'] = $id;
            $data['gallery'] = $this->Admin_model->getGalleryInfo($id);
            $this->load->view('Admin/gallery1', $data);
        } else {
            $uid = $_POST['userid'];
            $gimage1 = $_POST['gimage1'];
            if($gimage1=="")
                {
                if ($_FILES['gallery_image1']['error'] <= 0)
                {
                $this->load->library('image');
                $image = $this->image->createImage1("gallery_image1", "galleryF", "720", "720");
                $data['gallery_image1'] = $image;
                }
            }
           

            $gimage2 = $_POST['gimage2'];
            
            
            if($gimage2=="")
                {
                if ($_FILES['gallery_image2']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("gallery_image2", "galleryF", "720", "720");
                $data['gallery_image2'] = $image;
                }
            }
        


            $gimage3 = $_POST['gimage3'];
            
            
            if($gimage3=="")
                {
                if ($_FILES['gallery_image3']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("gallery_image3", "galleryF", "720", "720");
                $data['gallery_image3'] = $image;
                }
            }


            $gimage4 = $_POST['gimage4'];
            
            
            if($gimage4=="")
                {
                if ($_FILES['gallery_image4']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("gallery_image4", "galleryF", "720", "720");
                $data['gallery_image4'] = $image;
                }
            }
            
            $gimage5 = $_POST['gimage5'];
            
            
            if($gimage5=="")
                {
                if ($_FILES['gallery_image5']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("gallery_image5", "galleryF", "720", "720");
                $data['gallery_image5'] = $image;
                }
            }
            
            $gimage6 = $_POST['gimage6'];
            
           
            if($gimage6=="")
                {
                if ($_FILES['gallery_image6']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("gallery_image6", "galleryF", "720", "720");
                $data['gallery_image6'] = $image;
                }
            }
            
            $gimage7 = $_POST['gimage7'];
            
            
            if($gimage7=="")
                {
                if ($_FILES['gallery_image7']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("gallery_image7", "galleryF", "720", "720");
                $data['gallery_image7'] = $image;
                }
            }
           
            $gimage8 = $_POST['gimage8'];
            
            
            if($gimage8=="")
                {
                if ($_FILES['gallery_image8']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("gallery_image8", "galleryF", "720", "720");
                $data['gallery_image8'] = $image;
                }
            }
           
            $gimage9 = $_POST['gimage9'];
            
            
            if($gimage9=="")
                {
                if ($_FILES['gallery_image9']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("gallery_image9", "galleryF", "720", "720");
                $data['gallery_image9'] = $image;
                }
            }
        

            $gimage10 = $_POST['gimage10'];
            
           
            if($gimage10=="")
                {
                if ($_FILES['gallery_image10']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("gallery_image10", "galleryF", "720", "720");
                $data['gallery_image10'] = $image;
                }
            }
            // }

            $gimage11 = $_POST['gimage11'];
            
            
            if($gimage11=="")
                {
                if ($_FILES['gallery_image11']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("gallery_image11", "galleryF", "720", "720");
                $data['gallery_image11'] = $image;
                }
            }
            
            $gimage12 = $_POST['gimage12'];
            
         
            if($gimage12=="")
                {
                if ($_FILES['gallery_image12']['error'] <= 0) 
                {
                $this->load->library('image');
                $image = $this->image->createImage1("gallery_image12", "galleryF", "720", "720");
                $data['gallery_image12'] = $image;
                }
            }
            $data['gallery_value']="1";
            $this->Admin_model->updateGalleryInfo($uid, $data);
                redirect('Admin/testimonial/' . $uid);
            // }
            // if($gimage1!="" || $gimage2!="" || $gimage3!="" || $gimage4!="" || $gimage5!="" || $gimage6!="" || $gimage7!="" || $gimage8=="" || $gimage9=="" ||  $gimage10=="" ||  $gimage11=="" || $gimage12=="")
            // {
            //     
            // }
            // else
            // {
            //     // $this->Admin_model->updateGalleryInfo($uid, $data);
            //     redirect('Admin/testimonial/' . $uid);
            // }
            
            
        }
        if(isset($_POST['addGall1']))
        {
             $uid = $_POST['userid'];
            redirect('Admin/testimonial/' . $uid);
        }
    }
    public function testimonial($id)
    {
        if (!isset($_POST['addper'])) {
            $data = array();
            $data['fav'] = $this->getFavLog($id);
            $data['userid'] = $id;
            $data['testi'] = $this->Admin_model->getTestimonialInfo($id);
            $this->load->view('Admin/testimonial', $data);
        } else {
            $uid = $_POST['userid'];

            $data['testimonial_name1'] = $_POST['test_name1'];
            $data['testimonial_description1'] = $_POST['test_desc1'];
            $testiimg1 = $_POST['testiimg1'];
            // if ($_FILES['timg1']['error'] > 0) {
            //     $data['	testimonial_image1'] = $testiimg1;
            // } else {
            //     unlink(FCPATH . 'assets/user_assets/testimonial/' . $testiimg1);
            //     unlink(FCPATH . 'assets/user_assets/testimonial/big_img/' . $testiimg1);
            if($testiimg1=="")
            {
                if ($_FILES['testimonial_image1']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("testimonial_image1", "testimonial", "200", "200");
                $data['testimonial_image1'] = $image;
                }
            }
            // }

            $data['testimonial_name2'] = $_POST['test_name2'];
            $data['testimonial_description2'] = $_POST['test_desc2'];
            $testiimg2 = $_POST['testiimg2'];
            // if ($_FILES['timg2']['error'] > 0) {
            //     $data['testimonial_image2'] = $testiimg2;
            // } else {
            //     unlink(FCPATH . 'assets/user_assets/testimonial/' . $testiimg2);
            //     unlink(FCPATH . 'assets/user_assets/testimonial/big_img/' . $testiimg2);
            if($testiimg2=="")
            {
                if ($_FILES['testimonial_image2']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("testimonial_image2", "testimonial", "200", "200");
                $data['testimonial_image2'] = $image;
                }
            }
            
            $data['testimonial_name3'] = $_POST['test_name3'];
            $data['testimonial_description3'] = $_POST['test_desc3'];
            $testiimg2 = $_POST['testiimg3'];
            // if ($_FILES['timg2']['error'] > 0) {
            //     $data['testimonial_image2'] = $testiimg2;
            // } else {
            //     unlink(FCPATH . 'assets/user_assets/testimonial/' . $testiimg2);
            //     unlink(FCPATH . 'assets/user_assets/testimonial/big_img/' . $testiimg2);
            if($testiimg2=="")
            {
                if ($_FILES['testimonial_image3']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("testimonial_image3", "testimonial", "200", "200");
                $data['testimonial_image3'] = $image;
                }
            }
            
            $data['testimonial_name4'] = $_POST['test_name4'];
            $data['testimonial_description4'] = $_POST['test_desc4'];
            $testiimg2 = $_POST['testiimg4'];
            // if ($_FILES['timg2']['error'] > 0) {
            //     $data['testimonial_image2'] = $testiimg2;
            // } else {
            //     unlink(FCPATH . 'assets/user_assets/testimonial/' . $testiimg2);
            //     unlink(FCPATH . 'assets/user_assets/testimonial/big_img/' . $testiimg2);
            if($testiimg2=="")
            {
                if ($_FILES['testimonial_image4']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("testimonial_image4", "testimonial", "200", "200");
                $data['testimonial_image4'] = $image;
                }
            }
            // }

            $this->Admin_model->updateTestimonialInfo($uid, $data);
            redirect('Admin/socialmedia/' . $uid);
        }
    }
    public function socialmedia($id)
    {
        if (!isset($_POST['addsocial'])) {
            $data = array();
            $data['fav'] = $this->getFavLog($id);
            $data['userid'] = $id;
            $data['social'] = $this->Admin_model->getSocialMediaInfo($id);
            $this->load->view('Admin/socialmedia', $data);
        } else {
            $uid = $_POST['userid'];

            $data['facebook'] = $_POST['facebook'];
            $data['instagram'] = $_POST['instagram'];
            $data['linkedin'] = $_POST['linkedin'];
            $data['twitter'] = $_POST['twitter'];
            $data['youtube'] = $_POST['youtube'];
            $data['video_link1'] = $_POST['y1'];
            $data['video_link2'] = $_POST['y2'];
            $data['video_link3'] = $_POST['y3'];

            $this->Admin_model->updatePersonalInfo($uid, $data);
            redirect('Admin/other/' . $uid);
        }
    }
    public function other($id)
    {
        if (!isset($_POST['addoth'])) {
            $data = array();
            $data['fav'] = $this->getFavLog($id);
            $data['userid'] = $id;
            $data['other'] = $this->Admin_model->getOtherInfo($id);
            $this->load->view('Admin/other', $data);
        } else {
            $uid = $_POST['userid'];


            if ($_POST['qrimage'] != "") {
                unlink(FCPATH . 'assets/user_assets/qrcode/' . $_POST['qrimage']);
            }
            $qr_image = 'qrcode-' . date('m-d-Y-H-i-s') . '.png';
            $params['data'] = $_POST['qrlink'];
            $params['level'] = 'M';
            $params['size'] = 11;
            $params['savename'] = FCPATH . 'assets/user_assets/qrcode/' . $qr_image;
            $this->ciqrcode->generate($params);

            $data['qrimage'] = $qr_image;
            $data['qrlink'] = $_POST['qrlink'];

            $faviconimg = $_POST['faviconimg'];
            // if ($_FILES['fimg']['error'] > 0) {
            //     $data['favicon_image'] = $faviconimg;
            // } else {
            //     unlink(FCPATH . 'assets/user_assets/favicon/' . $faviconimg);
            //     unlink(FCPATH . 'assets/user_assets/favicon/big_img/' . $faviconimg);
            if($faviconimg=="")
                {
                if ($_FILES['favicon_image']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("favicon_image", "favicon", "200", "200");
                $data['favicon_image'] = $image;
                }
            }
            // }

            $sliderimage1 = $_POST['sliderimage1'];
            // if ($_FILES['simg1']['error'] > 0) {
            //     $data['slider_image1'] = $sliderimage1;
            // } else {
            //     unlink(FCPATH . 'assets/user_assets/slider/' . $sliderimage1);
            //     unlink(FCPATH . 'assets/user_assets/slider/big_img/' . $sliderimage1);
            if($sliderimage1=="")
                {
                if ($_FILES['slider_image1']['error'] <= 0) {
                $this->load->library('image');
                $image = $this->image->createImage1("slider_image1", "slider", "1400", "720");
                $data['slider_image1'] = $image;
                }
            }
            // }

            $sliderimage2 = $_POST['sliderimage2'];
            // if ($_FILES['simg2']['error'] > 0) {
            //     $data['slider_image2'] = $sliderimage2;
            // } else {
            //     unlink(FCPATH . 'assets/user_assets/slider/' . $sliderimage2);
                // unlink(FCPATH . 'assets/user_assets/slider/big_img/' . $sliderimage2);
                if($sliderimage2=="")
                {
                    if ($_FILES['slider_image2']['error'] <= 0) {
                        $this->load->library('image');
                        $image = $this->image->createImage1("slider_image2", "slider", "1400", "700");
                        $data['slider_image2'] = $image;
                }
            }
            // }

            $data['whatsapp_message'] = $_POST['wmsg'];
            $data['product_message'] = $_POST['pmsg'];

            $this->Admin_model->updatePersonalInfo($uid, $data);
            redirect('Admin/userdashboard/' . $uid);
        }
    }
    public function changepassword($id)
    {
        if (!isset($_POST['chpass'])) {
            $data = array();
            $data['fav'] = $this->getFavLog($id);
            $data['userid'] = $id;
            $this->load->view('Admin/changepass', $data);
        } else {
            $formArray = array();
            $formArray['old_pass'] = $_POST['old_pass'];
            $formArray['new_pass'] = $_POST['new_pass'];
            $formArray['conf_pass'] = $_POST['conf_pass'];
            $id = $_SESSION['id'];
            echo $id;
            // print_r($formArray);
            $er = $this->Admin_model->getPasswordCheck($id, $formArray);
            if ($er == 1) {
                $this->session->set_flashdata('success', 'Your password has been change');
                redirect('admin/changepassword/' . $id);
            } else if ($er == 0) {
                $this->session->set_flashdata('error', 'New Password and Confirm Password did not matched');
                redirect('admin/changepassword/' . $id);
            } else if ($er == 10) {
                $this->session->set_flashdata('error1', 'Password is not matched');
                redirect('admin/changepassword/' . $id);
            }
        }
    }
    
    public function forgetPassword()
    {
        if (!isset($_POST['submit'])) {
            $this->load->view('Admin/forgetPassword');
        }
        else
        {
            $email=$_POST['email'];
            $count=$this->Admin_model->MailExist($email);   
            
            if($count==1)
            {
                $id=$this->Admin_model->getUserFromEmail($email);
                $slug=$this->Admin_model->getSlug($id);
                $config = Array(
                        'protocol' => 'smtp',
                        'smtp_host' => 'smtp.sendgrid.net',
                        'smtp_port' => 587,
                        'smtp_user' => 'niralshah.251@gmail.com',
                        'smtp_pass' => 'Iced@@402',
                        'mailtype'  => 'html', 
                        'charset'   => 'iso-8859-1',
                        'validation'=>TRUE
                        );
                
                        $to=$email; 
                        
                        $enc=md5($email);
                        
                        $this->load->library('email', $config);
                        $this->email->set_newline("\r\n");
                        $this->email->set_mailtype("html");
                        $this->email->from('niralshah.251@gmail.com', 'ICED INFOTECH');
                        $this->email->to($to); 
                
                        $this->email->subject('Forget Password');
                        $emailContent="<!DOCTYPE>
                        <html>
                        <head>
                        </head>
                        <body>
                          <h3>Click the given link below to change Password</h3>
                          <h4>Link:</h4>";
                            $emailContent.="<a href='".base_url()."admin/forgetPasswordForm/".$slug."'>Click here</a>";
                          $emailContent.="</p>
                          <p>Thanks & Regards</p>
                          <h3>Iced Infotech</h3>
                        </body>
                        </html>";
                        $this->email->message($emailContent);  
                        $this->email->send();
                $this->session->set_flashdata('success', 'Mail sent to Your Mail Id(Also Check Spam Folder)');
                redirect('admin/forgetPassword');
                        // copy($src_path,$des_path.$fname);
            }
            else
            {
                $this->session->set_flashdata('error', 'Mail Does Not Registered To the Portal');
                redirect('admin/forgetPassword');
            }
            
        }
    }
    
    public function forgetPasswordForm($slug)
    {
        if (!isset($_POST['chgpassword'])) {
            $data['slug']=$slug;
            $this->load->view('Admin/forgetPasswordForm',$data);
        }
        else
        {
            $this->load->library('form_validation');    
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('error', 'Password and Confirm Password is not Matched');
                redirect('admin/forgetPasswordForm/'.$slug);
                    // echo "<script type ='text/JavaScript'>";
                    // $message="Password";  
                    // echo "alert('$message');window.location.href = 'forgetPasswordForm'";  
                    // echo "</script>";
            }
            else
            {
                $slug=$_POST['slug'];
                $password=$_POST['password'];
                // $data['id']=$uid;
                $data['password']=$password;
                $this->Admin_model->updatePassword($slug,$data);
                 $this->session->set_flashdata('update', 'Your Password is Updated');
                 $redirect_delay=5;
                $this->session->set_userdata('redirect_delay', $redirect_delay);
                redirect('admin/forgetPasswordForm/'.$slug);
                
            }
        }
    }
    
    public function pagenotfound()
    {
        $this->load->view('Admin/pagenotfound');
    }
    public function vcard_generate()
    {
        $this->load->library('vcard');
        $data=array();
        $data['display_name']='neel1';
        $data['company']="Iced INfotech";
        $data['url']="https://www.icedinfotech.com/";
        $data['office_tel']='1234567890';
        $data['cell_tel']='9601062542';
        $data['email1']='neel@gmail.com';
        $this->vcard->vcard($data);
        $this->vcard->download();    
    }
    public function select($id)
    {
        if(!isset($_POST['seltheme']))
        {    
            $data = array();
            $data['fav'] = $this->getFavLog($id);
            $data['select']=$this->Admin_model->getSelect($id);
            $data['userid'] = $id;
            $this->load->view('Admin/themeselect',$data);
        }
        else{
            
            $formArray=array();
            $uid=$_POST['userid'];
            $formArray['theme']=$_POST['theme'];
            $theme=$_POST['theme'];
            if($theme=="theme1")
            {
               $sel="index.php";
            }
            if($theme=="theme2")
            {
                $sel="index2.php";
            }
            $fname="index$uid.php";
            $src_path=APPPATH.'views/'.$sel;
            $des_path=APPPATH.'views/Users/'.$fname;
            copy($src_path,$des_path);
            $this->Admin_model->updatePersonalInfo($uid,$formArray);
            redirect('admin/dashboard/'.$uid);
        }
    }
  
    public function editPageDashboard($id,$path,$image_name,$image_value)
    {
        if(!isset($_POST['upimg']))
        {
        $data=array();
        $data['userid'] = $id;
        $data['path']=$path;
        $data['image_name']=$image_name;
        $data['image_value']=$image_value;
        $data['fav'] = $this->getFavLog($id);
        $this->load->view('Admin/editpage',$data);
        }
        else
        {
            $uid = $_POST['userid'];
            $data=array();
            $imagename1 = $_POST['imagename1'];
            if ($_FILES[$image_name]['error'] > 0) {
                $data[$image_name] = $imagename1;
            } else {
                unlink(FCPATH . 'assets/user_assets/logo/' . $imagename1);
                $this->load->library('image');
                $image = $this->image->createImage1($image_name, "logo", "200", "200");
                $data[$image_name] = $image;
                $this->Admin_model->ImageUpdate($uid,$data,"tbl_users");
            }
            redirect('Admin/dashboard/'.$uid);
        }
    }
  
    public function editPageAbout($id,$path,$image_name,$image_value)
    {
        if(!isset($_POST['upimg']))
        {
        $data=array();
        $data['userid'] = $id;
        $data['path']=$path;
        $data['image_name']=$image_name;
        $data['image_value']=$image_value;
        $data['fav'] = $this->getFavLog($id);
        $this->load->view('Admin/editpage',$data);
        }
        else
        {
            $uid = $_POST['userid'];
            $data=array();
            $imagename1 = $_POST['imagename1'];
            if ($_FILES[$image_name]['error'] > 0) {
                $data[$image_name] = $imagename1;
            } else {
                unlink(FCPATH . 'assets/user_assets/about/' . $imagename1);
                $this->load->library('image');
                $image = $this->image->createImage1($image_name, "about", "720", "720");
                $data[$image_name] = $image;
                $this->Admin_model->ImageUpdate($uid,$data,"tbl_users");
            }
            redirect('Admin/about/'.$uid);
        }
    }
    
    public function editPageTheme($id,$path,$image_name,$image_value)
    {
        if(!isset($_POST['upimg']))
        {
        $data=array();
        $data['userid'] = $id;
        $data['path']=$path;
        $data['image_name']=$image_name;
        $data['image_value']=$image_value;
        $data['fav'] = $this->getFavLog($id);
        $this->load->view('Admin/editpage',$data);
        }
        else
        {
            $this->load->view('Admin/loader');
            $uid = $_POST['userid'];
            $data=array();
            $imagename1 = $_POST['imagename1'];
            if ($_FILES[$image_name]['error'] > 0) {
                $data[$image_name] = $imagename1;
            } else {
                unlink(FCPATH . 'assets/user_assets/popup/' . $imagename1);
                $this->load->library('image');
                $image = $this->image->createImage1($image_name, "popup", "720", "720");
                $data[$image_name] = $image;
                $this->Admin_model->ImageUpdate($uid,$data,"tbl_users");
            }
            redirect('Admin/theme/'.$uid);
        }
    }
    
    public function editPageProduct($id,$path,$image_name,$image_value)
    {
        if(!isset($_POST['upimg']))
        {
        $data=array();
        $data['userid'] = $id;
        $data['path']=$path;
        $data['image_name']=$image_name;
        $data['image_value']=$image_value;
        $data['fav'] = $this->getFavLog($id);
        $this->load->view('Admin/editpage',$data);
        }
        else
        {
            $uid = $_POST['userid'];
            $data=array();
            $imagename1 = $_POST['imagename1'];
            if ($_FILES[$image_name]['error'] > 0) {
                $data[$image_name] = $imagename1;
            } else {
                unlink(FCPATH . 'assets/user_assets/product/' . $imagename1);
                $this->load->library('image');
                $image = $this->image->createImage1($image_name, "product", "720", "720");
                $data[$image_name] = $image;
                $this->Admin_model->ImageUpdate($uid,$data,"tbl_product");
            }
            redirect('Admin/product/'.$uid);
        }
    }
    
    
    public function editPageBrands($id,$path,$image_name,$image_value)
    {
        if(!isset($_POST['upimg']))
        {
        $data=array();
        $data['userid'] = $id;
        $data['path']=$path;
        $data['image_name']=$image_name;
        $data['image_value']=$image_value;
        $data['fav'] = $this->getFavLog($id);
        $this->load->view('Admin/editpage',$data);
        }
        else
        {
            $uid = $_POST['userid'];
            $data=array();
            $imagename1 = $_POST['imagename1'];
            if ($_FILES[$image_name]['error'] > 0) {
                $data[$image_name] = $imagename1;
            } else {
                unlink(FCPATH . 'assets/user_assets/service/' . $imagename1);
                $this->load->library('image');
                $image = $this->image->createImage1($image_name, "service", "720", "720");
                $data[$image_name] = $image;
                $this->Admin_model->ImageUpdate($uid,$data,"tbl_service");
            }
            redirect('Admin/brands/'.$uid);
        }
    }
    
    
    public function editPageGallery($id,$path,$image_name,$image_value)
    {
        if(!isset($_POST['upimg']))
        {
        $data=array();
        $data['userid'] = $id;
        $data['path']=$path;
        $data['image_name']=$image_name;
        $data['image_value']=$image_value;
        $data['fav'] = $this->getFavLog($id);
        $this->load->view('Admin/editpage',$data);
        }
        else
        {
            $uid = $_POST['userid'];
            $data=array();
            $imagename1 = $_POST['imagename1'];
            if ($_FILES[$image_name]['error'] > 0) {
                $data[$image_name] = $imagename1;
            } else {
                unlink(FCPATH . 'assets/user_assets/galleryF/' . $imagename1);
                $this->load->library('image');
                $image = $this->image->createImage1($image_name, "galleryF", "720", "720");
                $data[$image_name] = $image;
                $this->Admin_model->ImageUpdate($uid,$data,"tbl_gallery");
            }
            redirect('Admin/gallery/'.$uid);
        }
    }
  
  
    public function editPageTestimonial($id,$path,$image_name,$image_value)
    {
        if(!isset($_POST['upimg']))
        {
        $data=array();
        $data['userid'] = $id;
        $data['path']=$path;
        $data['image_name']=$image_name;
        $data['image_value']=$image_value;
        $data['fav'] = $this->getFavLog($id);
        $this->load->view('Admin/editpage',$data);
        }
        else
        {
            $uid = $_POST['userid'];
            $data=array();
            $imagename1 = $_POST['imagename1'];
            if ($_FILES[$image_name]['error'] > 0) {
                $data[$image_name] = $imagename1;
            } else {
                unlink(FCPATH . 'assets/user_assets/testimonial/' . $imagename1);
                $this->load->library('image');
                $image = $this->image->createImage1($image_name, "testimonial", "200", "200");
                $data[$image_name] = $image;
                $this->Admin_model->ImageUpdate($uid,$data,"tbl_testimonial");
            }
            redirect('Admin/testimonial/'.$uid);
        }
    }
    
    public function editPageFavicon($id,$path,$image_name,$image_value)
    {
        if(!isset($_POST['upimg']))
        {
        $data=array();
        $data['userid'] = $id;
        $data['path']=$path;
        $data['image_name']=$image_name;
        $data['image_value']=$image_value;
        $data['fav'] = $this->getFavLog($id);
        $this->load->view('Admin/editpage',$data);
        }
        else
        {
            $uid = $_POST['userid'];
            $data=array();
            $imagename1 = $_POST['imagename1'];
            if ($_FILES[$image_name]['error'] > 0) {
                $data[$image_name] = $imagename1;
            } else {
                unlink(FCPATH . 'assets/user_assets/favicon/' . $imagename1);
                $this->load->library('image');
                $image = $this->image->createImage1($image_name, "favicon", "200", "200");
                $data[$image_name] = $image;
                $this->Admin_model->ImageUpdate($uid,$data,"tbl_users");
            }
            redirect('Admin/other/'.$uid);
        }
    }
    
    public function editPageSlider($id,$path,$image_name,$image_value)
    {
        if(!isset($_POST['upimg']))
        {
        $data=array();
        $data['userid'] = $id;
        $data['path']=$path;
        $data['image_name']=$image_name;
        $data['image_value']=$image_value;
        $data['fav'] = $this->getFavLog($id);
        $this->load->view('Admin/editpage',$data);
        }
        else
        {
            $uid = $_POST['userid'];
            $data=array();
            $imagename1 = $_POST['imagename1'];
            if ($_FILES[$image_name]['error'] > 0) {
                $data[$image_name] = $imagename1;
            } else {
                unlink(FCPATH . 'assets/user_assets/slider/' . $imagename1);
                $this->load->library('image');
                $image = $this->image->createImage1($image_name, "slider", "1400", "720");
                $data[$image_name] = $image;
                $this->Admin_model->ImageUpdate($uid,$data,"tbl_users");
            }
            redirect('Admin/other/'.$uid);
        }
    }
    
    
  
    public function editPage($id,$path,$width,$height,$table_name,$redirect_page,$image_name,$image_value)
    {
        if(!isset($_POST['upimg']))
        {
        $data=array();
        $data['userid'] = $id;
        $data['path']=$path;
        $data['image_name']=$image_name;
        $data['image_value']=$image_value;
        $data['fav'] = $this->getFavLog($id);
        $this->load->view('Admin/editpage',$data);
        }
        else
        {
            $uid = $_POST['userid'];
            $data=array();
            $imagename1 = $_POST['imagename1'];
            if ($_FILES[$image_name]['error'] > 0) {
                $data[$image_name] = $imagename1;
            } else {
                unlink(FCPATH . 'assets/user_assets/'.$path.'/' . $imagename1);
                unlink(FCPATH . 'assets/user_assets/'.$path.'/big_img/' . $imagename1);
                $this->load->library('image');
                $image = $this->image->createImage1($image_name, $path, $width, $height);
                $data[$image_name] = $image;
                $this->admin_model->ImageUpdate($uid,$data,$table_name);
            }
            redirect('admin/'.$redirect_page.'/'.$uid);
        }
    }
    public function loader()
    {
        $this->load->view('Admin/loader');
    }
    public function logout()
    {
        // session_start();
        $_SESSION['user'] = "";
        session_destroy();
        unset($_SESSION);
        redirect('admin/index');
    }
}
