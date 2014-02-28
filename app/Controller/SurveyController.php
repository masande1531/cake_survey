<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class SurveyController extends AppController{
    public $helper = array('Html', 'Form');
    
    public function index(){
        $this->set('surveys', $this->Survey->find('all', array(
		'group' => array('name', 'p_communication', 'p_money'))));
    }
    
    
    public function add(){
            if ($this->request->is('post')) {
            $this->Survey->create();
            if ($this->Survey->save($this->request->data)) {
                $this->Session->setFlash(__('Your post has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your post.'));
        }
    }
    
     public function view(){
         $this->set('surveys', $this->Survey->find('all'));
    }
}
?>

