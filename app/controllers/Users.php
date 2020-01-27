<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Users extends MY_Controller
{
    const BASE_URL = 'users/';
    const PAGE_TITLE = 'Users';

    public function __construct()
    {
        parent::__construct();
        //const default variable
        $this->slice->with('BASE_URL', base_url(self::BASE_URL));
        $this->slice->with('PAGE_TITLE', self::PAGE_TITLE);
        $this->load->model('M_user');

    }
    
    public function index()
    {
        // get data
        $data['rs_users'] = $this->M_user->get_all();
        // parse data to page
        view('users.index', $data);
    }
    public function add()
    {
        view('users.add');
    }
    public function edit($id)
    {
        $data['result'] = $this->ion_auth->user($id)->row_array();
        $data['rs_groups'] = $this->ion_auth->groups()->result_array();
        $data['current_group'] = $this->ion_auth->get_users_groups($id)->row_array();
        // print_r($data);die();
        view('users.edit', $data);
    }
    public function delete($id)
    {
        $data['result'] = $this->ion_auth->user($id)->row_array();
        $data['rs_groups'] = $this->ion_auth->groups()->result_array();
        $data['current_group'] = $this->ion_auth->get_users_groups($id)->row_array();
        view('users.delete', $data);
    }
    public function add_process()
    {
        $tables = $this->config->item('tables', 'ion_auth');

        $identity_column = $this->config->item('identity', 'ion_auth');
        $this->data['identity_column'] = $identity_column;
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        if ($identity_column !== 'email') {
            $this->form_validation->set_rules('identity', 'Identity', 'trim|required|is_unique[' . $tables['users'] . '.' . $identity_column . ']');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        } else {
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[' . $tables['users'] . '.email]');
        }
        $this->form_validation->set_rules('phone', 'Phone', 'trim');
        $this->form_validation->set_rules('company', 'Company', 'trim');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|matches[password_confirm]');
        $this->form_validation->set_rules('password_confirm', 'Password Confirmation','required');
        
        if ($this->form_validation->run() === true) {
            $email = strtolower($this->input->post('email'));
            $identity = ($identity_column === 'email') ? $email : $this->input->post('identity');
            $password = $this->input->post('password');
            $additional_data = [
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'company' => $this->input->post('company'),
                'phone' => $this->input->post('phone'),
            ];
        }
        if ($this->form_validation->run() === true ) {
            // check to see if we are creating the user
            if ($this->ion_auth->register($identity, $password, $email, $additional_data)) {
                $this->send_notification(self::BASE_URL, 'success', $this->ion_auth->messages());
            }else {
                $this->send_notification(self::BASE_URL.'add', 'error', 'Data failed to add !');
            }
        } else {
            // display the create user form
            // set the flash data error message if there is one
            $this->send_notification(self::BASE_URL.'add', 'error', validation_errors());
        }
    }
    public function edit_process()
    {
         // validate form input
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('phone', 'Phone', 'trim');
        $this->form_validation->set_rules('company', 'Company', 'trim');
        
        $id = $this->input->post('id');
        if ($this->input->post('password')) {
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|matches[password_confirm]');
            $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required');
        }

        if ($this->form_validation->run() === true) {
            $data = [
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'company' => $this->input->post('company'),
                'phone' => $this->input->post('phone'),
            ];
            // update the password if it was posted
            if ($this->input->post('password')) {
                $data['password'] = $this->input->post('password');
            }

            // Only allow updating groups if user is admin
            if ($this->ion_auth->is_admin()) {
                // Update the groups user belongs to
                $this->ion_auth->remove_from_group('', $id);
                
                $groupData = $this->input->post('groups');
                $this->ion_auth->add_to_group($groupData, $id);
                
            }
            // check to see if we are updating the user
            if ($this->ion_auth->update($id, $data)) {
                // redirect them back to the admin page if admin, or to the base url if non admin
                $this->send_notification(self::BASE_URL, 'success', $this->ion_auth->messages());
            } else {
                // redirect them back to the admin page if admin, or to the base url if non admin
                $this->send_notification(self::BASE_URL, 'error', $this->ion_auth->errors());
            }
        }
    }
    public function delete_process()
    {
        $this->form_validation->set_rules('id', 'Users ID', 'trim|required');
        
        $id = $this->input->post('id');
        if ($this->form_validation->run() !== false) {
            $where = array('id' => $id );
            // insert
            if ($this->M_user->delete($where)) {
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
    public function activate($id, $code = false)
    {
        $activation = false;

        if ($code !== false) {
            $activation = $this->ion_auth->activate($id, $code);
            $this->send_notification('auth/login', 'success', $this->ion_auth->messages());
        } elseif ($this->ion_auth->is_admin()) {
            $activation = $this->ion_auth->activate($id);
            $this->send_notification(self::BASE_URL, 'success', $this->ion_auth->messages());

        }else {
            $this->send_notification(self::BASE_URL, 'error', $this->ion_auth->errors());

        }
    }

    /**
     * Deactivate the user
     *
     * @param int|string|null $id The user ID
     */
    public function deactivate($id)
    {
        $id = (int)$id;
        
        if($this->ion_auth->deactivate($id) == true){
            $this->send_notification(self::BASE_URL, 'success', 'Account Deactivate successfully !');
        }else {
            $this->send_notification(self::BASE_URL, 'error', 'Account Deactivate failed !');
        }
    }
}
/* End of file Groups.php */
