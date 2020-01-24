<?php defined('BASEPATH') or exit('No direct script access allowed');


class Welcome_admin extends MY_Controller
{
    const BASE_URL = 'home/welcome_admin';
    const PAGE_TITLE = 'Dashboard Admin';


    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('user_group_model');
        $this->slice->with('BASE_URL',self::BASE_URL);
        $this->slice->with('PAGE_TITLE',self::PAGE_TITLE);
        // $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
    }
    public function index()
    {
        view('home.welcome_admin');
    }

}
