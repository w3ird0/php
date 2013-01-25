<?php
namespace Register\Form;

use Zend\Form\Form;

class RegisterForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('register');
        $this->setAttribute('method', 'post');
        /*$this->add(array(
            'name' => 'id',
            'attributes' => array(
                'type'  => 'hidden',
            ),
        ));
        $this->add(array(
            'name' => 'artist',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Artist',
            ),
        ));
        $this->add(array(
            'name' => 'title',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Title',
            ),
        ));*/
        $this->add(array(
            'name' => 'register',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'register',
                'id' => 'submitbutton',
            ),
        ));
    }
}
