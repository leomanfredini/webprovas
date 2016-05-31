<?php

class Content extends AppModel {
	var $name = 'Content';
	public $belongsTo = array('Grade');	
}