<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller
{
    //set the class variable.
    public $template  = array();
    public $data      = array();

    /*Loading the default libraries, helper, language */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));

    }

        /*Front Page Layout*/
    public function layout()
    {
        $this->template['header'] = $this->load->view('layout/header', $this->data, true);
        $this->template['middle'] = $this->load->view($this->middle, $this->data, true);
        $this->template['footer'] = $this->load->view('layout/footer', $this->data, true);
        $this->load->view('layout/index', $this->template);
    }

}