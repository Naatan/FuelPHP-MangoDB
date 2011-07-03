<?php 

class Mango_Validation extends \Fuel\Core\Validation {

	protected $_empty_rules = array('not_empty', 'matches', 'required');

	/**
	 * Removes a field, and all its rules and its label from Validation object
	 */
	public function offsetUnset($field)
	{
		unset($this->_labels[$field], $this->_rules[$field]);

		if ( isset($this[$field]))
		{
			parent::offsetUnset($field);
		}
	}

} // End Mango_Validation