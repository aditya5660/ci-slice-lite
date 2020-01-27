<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{



    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('slice', 'session','ion_auth'));
		//display page with slice
        $this->load->model('User_group_model');
        $this->_display_page();
    }
    public function _display_page()
    {
        if (empty($this->session->userdata('user_id'))) {
            // default error
            $this->send_notification('auth/login', 'error', 'Login First !');
        } else {
			// get user data
            $user_id = $this->session->userdata('user_id');
            
			$detail_user = $this->User_group_model->get_user_detail_with_all_roles( array('user_id' => $user_id ));
            // get detail user_data
			//parse variabel default user data
            $this->slice->with('com_user', $detail_user);
            $this->slice->with('site_name', 'CISLICE v1.0');
            // $this->slice->with('list_sidebar_nav', self::_display_sidebar_navigation());
            // $this->slice->with('user_last_login', $this->M_user->get_user_last_login($com_user['user_id']));
        }
	}
	public function send_notification($content, $type, $message)
    {
        // $content = $content;
        if (!empty($type) && !empty($message)) {
            if ($type == 'success') {
                // set flash data
                $this->session->set_flashdata('success', $message);
                // redirect to content
                redirect($content);
            } else {
                // get error flash data
                
                $this->session->set_flashdata('form_error', validation_errors('<div class="">', '</div>'));
                $this->session->set_flashdata('error', $message);
                // redirect to content
                redirect($content);
            }
        }
    }
}
