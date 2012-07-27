<?php
class Model_Log extends Model_Table {
    public $entity_code='logbook';
    
    function init(){
        parent::init();

        $this->addField('property_id');
		$this->addField('log_detail');
       
    }
}