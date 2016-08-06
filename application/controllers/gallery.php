<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

    function __construct() { 
        parent::__construct(); 
        $this->load->helper('url');
    }
        
	public function index()
	{   
            $directory = '../setif/assets/images/gallery';
            $gallerty_title= array_diff(scandir($directory), array('..', '.'));
//            $gallery_img = array();
//            $gallery_imgpath = array();
//            foreach ($gallerty_title as $value) {
//                $dir = $directory.'/'.$value;
//                    $exclude = array( ".","..","error_log","_notes" );
//                    if (is_dir($dir)) {
//                        $files = scandir($dir);
//                        $a = 0;
//                        foreach($files as $file){
//                            if(!in_array($file,$exclude)){
//                               $gallery_imgpath[$value][$a] = GALLERY.$value .'/'. $file;
//                               $gallery_img[$value][$a] = $file;
//                               $a++;
//                              }
//                        }
//                    }
//            }
            $data['gallerty_title'] = $gallerty_title;
            //$data['gallery_imgpath'] = $gallery_imgpath;
            //$data['gallery_img'] = $gallery_img;
            $this->load->template('basic/gallery_view',$data);
	}
        public function split($imgdir)
        {
            $directory = '../setif/assets/images/gallery';
            $gallery_img = array();
            $gallery_imgpath = array();
            $dir = $directory.'/'.$imgdir;
                    $exclude = array( ".","..","error_log","_notes" );
                    if (is_dir($dir)) {
                        $files = scandir($dir);
                        $a = 0;
                        foreach($files as $file){
                            if(!in_array($file,$exclude)){
                               $gallery_imgpath[$a] = GALLERY.$imgdir .'/'. $file;
                               $gallery_img[$a] = $file;
                               $a++;
                              }
                        }
                    }
            $data['title'] = $imgdir;
            $data['gallery_imgpath'] = $gallery_imgpath;
            $data['gallery_img'] = $gallery_img;
            $this->load->template('basic/gallery_split_view',$data);
        }
}
?>

