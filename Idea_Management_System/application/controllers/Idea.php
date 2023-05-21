<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Idea extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // load model
        $this->load->model('Idea_model');
    }

    // index view idea
    public function index()
    {
        $data['title'] = 'Idea Data';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['ideas'] = $this->db->order_by('date_posted', 'DESC');
        $data['ideas'] = $this->Idea_model->getAll();
            
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar');
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('idea/index', $data);
        $this->load->view('templates/admin_footer');
    }

    // add idea
    public function addidea()
    {
        $idea = $this->Idea_model;
        $this->form_validation->set_rules('department', 'department', 'required', [
            'required' => 'Department is required!'
        ]);
        $this->form_validation->set_rules('title', 'Idea Title', 'required', [
            'required' => 'Idea title is required!'
        ]);
        $this->form_validation->set_rules('description', 'Idea Description', 'required', [
            'required' => 'Idea description is required!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Idea';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar');
            $this->load->view('templates/admin_topbar', $data);
            $this->load->view('idea/add_idea');
            $this->load->view('templates/admin_footer');
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Failed to post!</div>');
        } else {
            $idea->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Posted successfully!</div>');
            redirect('user');
        }
    }

    // view detail idea
    public function detail($id)
    {
        $data['title'] = 'Idea Detail Information';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['idea'] = $this->Idea_model->getById($id);
            
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar');
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('idea/detail', $data);
        $this->load->view('templates/admin_footer');
    }

    // delete idea
    public function deleteidea($id = null)
    {
        if (!isset($id)) show_404();

        $idea = $this->Idea_model;
        if ($idea->delete($id)) {
            redirect('idea');
        }
    }

}