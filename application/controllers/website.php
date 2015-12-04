<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Website extends CI_Controller {

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
	public function index()
	{
        $data["content"]="home";
        $data["header"]="home_header";
		$this->load->view('templateFront',$data);
	}
    public function project(){
     $data["content"]="project";
        $data["header"]="home_header";
		$this->load->view('templateFront',$data);
    }
    public function gallery(){
     $data["content"]="gallery";
		    //  $data["header"]="home_header";
        $data["header"]="gallery_header";
		$this->load->view('templateFront',$data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
