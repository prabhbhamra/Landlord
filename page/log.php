<?php
class page_log extends Page {
	function init (){
		parent::init();
		    
		$this->api->auth->check();

        $model = $this->add('Model_Log');
        $model->getField('log_detail')->system(true);
		$this->add('FormAndSave')->setModel($model)->loadData($this->api->auth->get('id'));
		}
		}