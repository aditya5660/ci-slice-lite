<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Groups extends MY_Controller
{
    const BASE_URL = 'groups/';
    const PAGE_TITLE = 'Groups';

    public function __construct()
    {
        parent::__construct();
        //const default variable
        $this->slice->with('BASE_URL', base_url(self::BASE_URL));
        $this->slice->with('PAGE_TITLE', self::PAGE_TITLE);
        $this->load->model('M_group');
    }
    
    public function index()
    {
        // get data
        $data['rs_group'] = $this->M_group->get_all();
        // parse data to page
        view('groups.index', $data);
    }
    public function add(Type $var = null)
    {
        view('groups.add');
    }
    public function edit($id)
    {
        $data['result'] = $this->M_group->get($id);
        view('groups.edit', $data);
    }
    public function delete($id)
    {
        $data['result'] = $this->M_group->get($id);
        view('groups.delete', $data);
    }
    public function add_process()
    {
        $this->form_validation->set_rules('name', 'Group Name', 'trim|required');
        $this->form_validation->set_rules('description', 'description', 'trim|required');
        $this->form_validation->set_rules('default_page', 'Default Page', 'trim|required');
        
        if ($this->form_validation->run() !== false) {
            $params = array(
                'name'	=> $this->input->post('name'),
                'description'	=> $this->input->post('description'),
                'default_page'	=> $this->input->post('default_page'),
            );
            // insert
            if ($this->M_group->insert($params)) {
                //sukses notif
                $this->send_notification(self::BASE_URL, 'success', 'Data added successfully !');
            } else {
                $this->send_notification(self::BASE_URL.'add', 'error', 'Data failed to add !');
            }
        } else {
            // default error
            $this->send_notification(self::BASE_URL.'add', 'error', 'Some Fields are Incorrect. !');
        }
    }
    public function edit_process()
    {
        $this->form_validation->set_rules('id', 'Group ID', 'trim|required');
        $this->form_validation->set_rules('name', 'Group Name', 'trim|required');
        $this->form_validation->set_rules('description', 'description', 'trim|required');
        $this->form_validation->set_rules('default_page', 'Default Page', 'trim|required');
        
        $id = $this->input->post('id');
        if ($this->form_validation->run() !== false) {
            $params = array(
                'name'	=> $this->input->post('name'),
                'description'	=> $this->input->post('description'),
                'default_page'	=> $this->input->post('default_page'),
            );
            $where = array('id' => $id );
            // insert
            if ($this->M_group->update($params,$where)) {
                //sukses notif
                $this->send_notification(self::BASE_URL, 'success', 'Data edited successfully !');
            } else {
                $this->send_notification(self::BASE_URL.'edit/'.$id, 'error', 'Data failed to edited !');
            }
        } else {
            // default error
            $this->send_notification(self::BASE_URL.'edit/'.$id, 'error', 'Some Fields are Incorrect. !');
        }
    }
    public function delete_process()
    {
        $this->form_validation->set_rules('id', 'Group ID', 'trim|required');
        
        $id = $this->input->post('id');
        if ($this->form_validation->run() !== false) {
            $where = array('id' => $id );
            // insert
            if ($this->M_group->delete($where)) {
                //sukses notif
                $this->send_notification(self::BASE_URL, 'success', 'Data deleted successfully !');
            } else {
                $this->send_notification(self::BASE_URL.'delete/'.$id, 'error', 'Data failed to delete !');
            }
        } else {
            // default error
            $this->send_notification(self::BASE_URL.'delete/'.$id, 'error', 'Some Fields are Incorrect. !');
        }
    }
}
/* End of file Groups.php */
