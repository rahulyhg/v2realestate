<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Website extends CI_Controller
{
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
     *
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $data['content'] = 'home';
        $data['header'] = 'home_header';
				$data["project"] = $this->project_model->getAllProjectsOnly3();
        $this->load->view('templateFront', $data);
    }
    public function project()
    {
        $data['content'] = 'project';
				$id = $this->input->get_post("id");
				$data["project"] = $this->project_model->getSingleProject($id);
        $data['header'] = 'project_header';
        $this->load->view('templateFront', $data);
    }
    public function gallery()
    {
        $data['content'] = 'gallery';
				$data["project"] = $this->project_model->getAllProjects();
        $data['header'] = 'gallery_header';
        $this->load->view('templateFront', $data);
    }
    public function submitcontactus()
    {
      $name = $this->input->get_post('name');
      $email = $this->input->get_post('email');
      $message = $this->input->get_post('message');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
