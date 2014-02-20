<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Survey
 *
 * @author Masande
 */

class Survey extends AppModel{
     public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        ),
        'company' => array(
            'rule' => 'notEmpty'
        ),
		  'contact' => array(
            'rule' => 'notEmpty'
        ),
        'email' => array(
            'rule' => 'notEmpty'
        ),
		  'title' => array(
            'rule' => 'notEmpty'
        ),
        'consultant' => array(
            'rule' => 'notEmpty'
        )
    );

}
    
}
?>
