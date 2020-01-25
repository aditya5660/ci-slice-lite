<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends MY_Model {

    public $table = 'users'; // you MUST mention the table name
	public $primary_key = 'id'; // you MUST mention the primary key
	public $fillable = array(
		'id',
		'ip_address',
		'username',
		'password',
		'email',
		'activation_selector',
		'activation_code',
		'forgotten_password_selector',
		'forgotten_password_code',
		'forgotten_password_time',
		'remember_selector',
		'remember_code',
		'created_on',
		'last_login',
		'active',
		'first_name',
		'last_name',
		'company',
		'phone'
	); // If you want, you can set an array with the fields that can be filled by insert/update
    public $protected = array(); // ...Or you can set an array with the fields that cannot be filled by insert/update
	
	public function __construct()
	{
        parent::__construct();
        $this->return_as = 'array';
	}
}

/* End of file M_group.php */
