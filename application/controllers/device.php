<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Device extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();
    }
    public function index()
    {
        $this->global['pageTitle'] = 'CodeInsect : Customer';

        $this->loadViews("device", $this->global, NULL , NULL);
    }
}

?>