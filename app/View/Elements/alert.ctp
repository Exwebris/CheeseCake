<?php 
if ($this->Session->check('Message.flash')) {
	echo $this->Session->flash();  
}
if ($messages = $this->Session->read('Message.multiFlash')) {
	foreach ($messages as $k => $v) {
		echo $this->Session->flash('multiFlash.'.$k);
	}
}
?>
