<?php
echo $this->Form->create('Question');
echo $this->Form->input('country_id',array('id' => 'country_id', 'empty' =>''));
echo $this->Form->input('city_id',array('id' => 'city_id', 'empty' =>''));
echo $this->Form->end('Enviar');
?>



<?php

//AJAX for Dynamic Drop down
$this->Js->get('#country_id')->event('change',
    $this->Js->request(array(
        'controller'=>'questions',
        'action' =>'get_by_country',
    ), array(
        'update' =>'#city_id',
        'async' => true,
        'method' => 'Post',
        'dataExpression'=>true,
        'data'=> $this->Js->serializeForm(array(
                'isForm' => true,
                'inline' => true
            ))
    ))
);
// END AJAX
?>