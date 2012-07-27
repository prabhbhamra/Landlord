<?php
class Model_Tenant extends Model_Table {
    public $entity_code='tenant';
    
    function init(){
        parent::init();

        $this->addField('name');
        $this->addField('email');
    }
}
