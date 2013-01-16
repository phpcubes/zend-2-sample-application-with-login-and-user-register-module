<?php
namespace Album\Form;

use Zend\Form\Form;

class AlbumForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('album');
        $this->setAttribute('method', 'post');
        $this->add(array(
            'name' => 'id',
            'attributes' => array(
                'type'  => 'hidden',  
                 'required'=>true
            		
            ),
        ));
        
        $this->add(array(
            'name' => 'artist',
            'attributes' => array(
             'type'  => 'text',
              'required'=>true
            ),
            'options' => array(
                'label' => 'Artist',
            		
            ),
        ));
        
        $this->add(array(
            'name' => 'title',
            'attributes' => array(
             'type'  => 'text',
            'required'=>true
            ),
            'options' => array(
                'label' => 'Title',
            ),
        ));
        
        
        $this->add(array(
            'type' => 'Zend\Form\Element\Select',
            'name' => 'gender',
            'options' => array(
                'label' => 'Gender',
                'value_options' => array(
                    '1' => 'Select your gender',
                    '2' => 'Female',
                    '3' => 'Male'
                ),
            ),
            'attributes' => array(
                'value' => '1' //set selected to '1'
            )
        ));
        
        $this->add(array(
            'type' => 'Zend\Form\Element\MultiCheckbox',
            'name' => 'hobby',
            'options' => array(
                'label' => 'Please choose one/more of the hobbies',
                'value_options' => array(
                    '1' =>'Cooking',
                    '2'=>'Writing',
                    '3'=>'Others'
                ),
            ),
            'attributes' => array(
                'value' => '1' //set checked to '1'
            )
        ));
        
        $this->add(array(
            'type' => 'Zend\Form\Element\Email',
            'name' => 'email',
            'options' => array(
                'label' => 'Email'
            ),
            'attributes' => array(
                'placeholder' => 'you@domain.com','required'=>true
            )
        ));
 
        $this->add(array(
            'type' => 'Zend\Form\Element\Date',
            'name' => 'birth',
            'options' => array(
                'label' => 'Birth', 
            		
            ) ,
            'attributes'=>array(
               'required'=>true
            ),
        ));
        
        $this->add(array(
            'name' => 'address',
            'attributes'=>array(
                'type'=>'textarea' ,'required'=>true
            ),
            'options' => array(
                'label' => 'Address',
            ),
        ));
        
        $this->add(array(
            'type' => 'Zend\Form\Element\Radio',
            'name' => 'direction',
            'options' => array(
                'label' => 'Please choose one of the directions',
                'value_options' => array(
                    '1' => 'Programming',
                    '2' => 'Design',
                ),
            ),
            'attributes' => array(
                'value' => '1' //set checked to '1'
            )
        ));
        
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Go',
                'id' => 'submitbutton',
            		'class'=>'btn-primary btn-large'
            ),
        ));
    }
}