<?php
class SchoolsController extends AppController {
    
    //public $helpers = array(’Html’, ’Form’);
    
    public function index(){
        
        $this->set('schools', $this->School->find('all'));
    }
}