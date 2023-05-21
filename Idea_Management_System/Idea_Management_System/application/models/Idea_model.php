<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Idea_model extends CI_Model {

    public function getAll()
    {
        return $this->db->get('user_idea')->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where('user_idea', ['id' => $id])->row_array();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id               = uniqid();
        $this->name             = $post['name'];
        $this->department          = $post['department'];
        $this->title            = $post['title'];
        $this->description      = $post['description'];
        $this->category             = $post['category'];
        $this->date_posted    = time();
        $this->file             = $this->_uploadFile();

        return $this->db->insert('user_idea', $this);
    }

    public function delete($id)
    {
        $this->_deleteFile($id);
        return $this->db->delete('user_idea', ['id' => $id]);
    }

    private function _uploadFile()
    {
        $config['upload_path']      = './assets/img/idea/';
        $config['allowed_types']    = 'jpg|png|jpeg|pdf|docx';
        $config['file_name']        = $this->id;
        $config['overwrite']        = true;
        $config['max_size']         = '15000';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
            return $this->upload->data('file_name');
        }

        return "default.jpg";
    }

    private function _deleteFile($id)
    {
        $idea = $this->getById($id);

        if ($idea['file'] != 'default.jpg') {
            $file_name = explode(".", $idea['file'])[0];
            return array_map('unlink', glob(FCPATH . "assets/img/idea/$file_name.*"));
        }
    }

}