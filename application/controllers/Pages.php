<?php
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 2017-05-11
 * Time: 2:20 PM
 */

class Pages extends CI_Controller {

    public function index()
    {
        $data['title'] = "News Site";

        $this->load->view('templates/header' , $data);
        $this->load->view('pages/home' , $data);
        $this->load->view('templates/footer' , $data);
    }
//    local function
    public function view ($page = 'home' )
    {
//        APPPATH (stands for application path - the application
        $filename = APPPATH.'views/pages/'.$page.'.php';

        if (!file_exists($filename))
        {
            Show_404(); //Whoops, there is no such page!
        }

        $data['title'] = ucfirst($page); // makes the string's first character uppercase

//        codeigniter function
        $this->load->view('templates/header' , $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer' , $data);
    }
}