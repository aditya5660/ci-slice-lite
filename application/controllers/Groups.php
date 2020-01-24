<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Groups extends MY_Controller {
    
    const BASE_URL = 'groups';
    const PAGE_TITLE = 'Groups';

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->slice->with('BASE_URL',self::BASE_URL);
        $this->slice->with('PAGE_TITLE',self::PAGE_TITLE);
        $this->load->model('M_group');
        
    }
    
    public function index()
    {
        $data['rs_group'] = $this->M_group->get_all();
        
        view('groups.index',$data);
    }
    public function add(Type $var = null)
    {
        # code...
    }

}

/* End of file Groups.php */
