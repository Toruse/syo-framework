<?php
class Syo_Form_Text extends Syo_Form_Field
{    
    public function __construct($name,$post=false)
    {
        parent::__construct($name,$post);
        $this->_type='text';
    }    
}
?>