<?php
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 2017-05-17
 * Time: 9:43 AM
 */
class News extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('news-model');
    }
}