<?php

App::uses('FormHelper', 'View/Helper');

class CheeseFormHelper extends FormHelper {

	public function dateTime($fieldName, $dateFormat = 'DMY', $timeFormat = '12', $attributes = array()) {
		return $this->input($fieldName, array('type' => 'text', 'class' => 'datetimepicker'));
	}
}
?>
