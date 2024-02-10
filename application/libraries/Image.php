<?php
class Image
{
    function createImage($imagename, $upload,$width,$height)
    {
        //  ->load->library('upload');
        $CI = &get_instance();
        $CI->load->library('upload');
        // if ($_FILES[$imagename]['size'] < 5000) {
        $bb = array(
            'upload_path' => './assets/user_assets/' . $upload . '/big_img/',
            'allowed_types' => 'jpg|png|jpeg|gif|webp',
            'max_size' => 200000,
        );
        $CI->upload->initialize($bb);
        if ($CI->upload->do_upload($imagename)) {
            $data = $CI->upload->data();
            $config2 = array(
                'image_library' => 'gd2',
                'source_image' => FCPATH . 'assets/user_assets/' . $upload . '/big_img/' . $data['file_name'],
                'width' => $width,
                'height' => $height,
                'new_image' => FCPATH . 'assets/user_assets/' . $upload . '/' . $data['file_name'],
            );

            $CI->load->library('image_lib');
            $CI->image_lib->initialize($config2);
            $CI->image_lib->resize();
            $CI->image_lib->clear();
            // unlink(FCPATH . 'assets/white_assets/'.$upload.'/big_img/' . $data['file_name']);
        }
        return $data['file_name'];
        // } else {
        // echo "<script>alert('Image size is large'); </script>";
        // }
    }
    function createImage1($imagename, $upload,$width,$height)
    {
        //  ->load->library('upload');
        $CI = &get_instance();
        $CI->load->library('upload');
        // if ($_FILES[$imagename]['size'] < 5000) {
        $bb = array(
            'upload_path' => './assets/user_assets/' . $upload . '/big_img/',
            'allowed_types' => 'jpg|png|jpeg|gif|webp',
            'max_size' => 200000,
        );
        $CI->upload->initialize($bb);
        



        
        
        
        if ($CI->upload->do_upload($imagename)) {
            $data = $CI->upload->data();
            $config2 = array(
                'image_library' => 'gd2',
                'source_image' => FCPATH . 'assets/user_assets/' . $upload . '/big_img/' . $data['file_name'],
                'width' => $width,
                'height' => $height,
                'new_image' => FCPATH . 'assets/user_assets/' . $upload . '/' . $data['file_name'],
            );

            $CI->load->library('image_lib');
            $CI->image_lib->initialize($config2);
            $CI->image_lib->resize();
            $CI->image_lib->clear();
            unlink(FCPATH . 'assets/user_assets/'.$upload.'/big_img/' . $data['file_name']);
        }
        // return $data['file_name'];
        $image_path=FCPATH . 'assets/user_assets/' . $upload . '/' . $data['file_name'];
        $CI->load->library('image_lib');
        $img_info=getimagesize($image_path);
        $mime_type=$img_info['mime'];

    //    print_r($img_info);
    //     echo $mime_type;
        if($mime_type=='image/webp')
        {
            return $data['file_name'];
        }else
        {
        switch ($mime_type) {
            case 'image/jpeg':
                $img = imagecreatefromjpeg($image_path);
                break;
            case 'image/png':
                $img = imagecreatefrompng($image_path);
                break;
            case 'image/gif':
                $img = imagecreatefromgif($image_path);
                break;
            default:
                // Unsupported image type
                return false;
        }
        $webp_path = preg_replace('/\.(jpe?g|png|gif)$/i', '.webp', $image_path);
      
        
        
        $i = 1;
        while (file_exists($webp_path)) {
            $path_info = pathinfo($webp_path);
            $webp_path = $path_info['dirname'] . '/' . $path_info['filename'] . '_' . $i . '.webp';
            $i++;
        }
        
        $webimg=basename($webp_path);
        
        
        
        imagewebp($img, $webp_path);
        imagedestroy($img);
        unlink(FCPATH . 'assets/user_assets/'.$upload.'/' . $data['file_name']);
        return $webimg;
    }
    }
    function createFile($filename, $upload)
    {
        $CI = &get_instance();
        $CI->load->library('upload');
        $bb1 = array(
            'upload_path' => './assets/user_assets/' . $upload,
            'allowed_types' => 'pdf|docx',
            'max_size' => 10000
        );
        $CI->upload->initialize($bb1);
        $CI->upload->do_upload($filename);
        $fd1 = $CI->upload->data();
        return $fd1['file_name'];
    }
    function createMultiImages($image, $upload)
    {
        $CI = &get_instance();
        $CI->load->library('upload');
        $countfiles = count($_FILES[$image]['name']);
        for ($i = 0; $i < $countfiles; $i++) {

            if (!empty($_FILES[$image]['name'][$i])) {
                $_FILES['file']['name'] = $_FILES[$image]['name'][$i];
                $_FILES['file']['tmp_name'] = $_FILES[$image]['tmp_name'][$i];
                $_FILES['file']['size'] = $_FILES[$image]['size'][$i];

                // // Set preference
                $config['upload_path'] = './assets/user_assets/' . $upload . '/big_img';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
                $config['max_size'] = '50000'; // max_size in kb
                $config['file_name'] = $_FILES[$image]['name'][$i];

                $CI->upload->initialize($config);
                if ($CI->upload->do_upload('file')) {
                    $data = array('upload_data' => $CI->upload->data());
                    $config2 = array(
                        'image_library' => 'gd2',
                        'source_image' => FCPATH . 'assets/user_assets/' . $upload . '/big_img/' . $data['upload_data']['file_name'],
                        'width' => 200,
                        'height' => 150,
                        'new_image' => FCPATH . 'assets/user_assets/' . $upload . '/' . $data['upload_data']['file_name'],
                    );
                    $CI->load->library('image_lib');
                    $CI->image_lib->initialize($config2);
                    $CI->image_lib->resize();
                    $CI->image_lib->clear();
                }
            }
        }
        $data1 = "";
        for ($i = 0; $i < $countfiles; $i++) {
            $data1 .= $_FILES[$image]['name'][$i] . ",";
        }
        if ($data1 == ",") {
            $data1 = substr($data1, 1);
        }
        return $data1;
    }
    function createMultiImagesUpdate($image, $upload, $frontimg1)
    {
        $CI = &get_instance();
        $CI->load->library('upload');
        $countfiles = count($_FILES[$image]['name']);
        for ($i = 0; $i < $countfiles; $i++) {

            if (!empty($_FILES[$image]['name'][$i])) {

                $_FILES['file']['name'] = $_FILES[$image]['name'][$i];
                $_FILES['file']['tmp_name'] = $_FILES[$image]['tmp_name'][$i];
                $_FILES['file']['size'] = $_FILES[$image]['size'][$i];

                // // Set preference
                $config['upload_path'] = './assets/user_assets/' . $upload . '/big_img';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
                $config['max_size'] = '50000'; // max_size in kb
                $config['file_name'] = $_FILES[$image]['name'][$i];

                $CI->upload->initialize($config);
                if ($CI->upload->do_upload('file')) {
                    $data = array('upload_data' => $CI->upload->data());
                    $config2 = array(
                        'image_library' => 'gd2',
                        'source_image' => FCPATH . 'assets/user_assets/' . $upload . '/big_img/' . $data['upload_data']['file_name'],
                        'width' => 200,
                        'height' => 150,
                        'new_image' => FCPATH . 'assets/user_assets/' . $upload . '/' . $data['upload_data']['file_name'],
                    );
                    $CI->load->library('image_lib');
                    $CI->image_lib->initialize($config2);
                    $CI->image_lib->resize();
                    $CI->image_lib->clear();
                }
            }
        }
        $data1 = $frontimg1;
        // echo $img;
        for ($i = 0; $i < $countfiles; $i++) {
            $data1 .= $_FILES[$image]['name'][$i] . ",";
        }
        return $data1;
    }
    function createMultiIcon($icon, $upload, $i)
    {
        $CI = &get_instance();
        $CI->load->library('upload');
        $bb = array(
            'upload_path' => './assets/user_assets/' . $upload . '/big_img/',
            'allowed_types' => 'jpg|png|jpeg|gif|webp',
            'max_size' => 50000,
        );

        $CI->upload->initialize($bb);
        $_FILES['file']['name'] = $_FILES[$icon]['name'][$i];
        $_FILES['file']['tmp_name'] = $_FILES[$icon]['tmp_name'][$i];
        $_FILES['file']['size'] = $_FILES[$icon]['size'][$i];

        if ($CI->upload->do_upload('file')) {
            $data = $CI->upload->data();

            $config2 = array(
                'image_library' => 'gd2',
                'source_image' => FCPATH . 'assets/user_assets/' . $upload . '/big_img/' . $data['file_name'],
                'width' => 200,
                'height' => 150,
                'new_image' => FCPATH . 'assets/user_assets/' . $upload . '/' . $data['file_name'],
            );

            $CI->load->library('image_lib');
            $CI->image_lib->initialize($config2);
            $CI->image_lib->resize();
            $CI->image_lib->clear();
        }
        return $data['file_name'];
    }
}
