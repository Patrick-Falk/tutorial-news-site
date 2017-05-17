<?php
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 2017-05-17
 * Time: 9:29 AM
 */
class News_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

//    QUESTION: what does it mean for slug to be true / false?
//    ANSWER: this allows one to query based on just the slug. ie. "look for a story based on a tag"
    public function get_news($slug=FALSE){
        if ($slug===FALSE){
            $query = $this->db->get('news');
            return $query->result_array();
        }

//        If slug is true
//        $slug is automatically sanitized!
        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }
}
?>