<?php
class Model_Property extends Model_Table {
    public $entity_code='property';
    function init(){
        parent::init();

        $this->addField('property_type');
		
	
        //$this->addField('year')->type('int');
        //$this->addField('imdb')->caption('IMDB Link');
    }
}
