<?php

App::uses('FormHelper', 'View/Helper');

class CheeseFormHelper extends FormHelper {

	public function dateTime($fieldName, $dateFormat = 'DMY', $timeFormat = '12', $attributes = array()) {
		$class = 'datepicker';
		
		// See if we need to use time picker as well
		$dateFormatChars = str_split($dateFormat);
		$timeChars = array('a', 'A', 'B', 'g', 'G', 'h', 'H', 'i', 's', 'u'); // based on date()
		foreach ($timeChars as $timeChar) {
			if (in_array($timeChar, $dateFormatChars)) {
				$class = 'datetimepicker';
				break;
			}
		}
		return $this->input($fieldName, array('type' => 'text', 'class' => $class));
	}
}
?>
