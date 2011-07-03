<?php 

class Mango_Validation_Exception extends Validation_Exception {

	/**
	 * @var  string  Name of model
	 */
	public $model;
	public $array;

	/**
	 * @var  int  Sequence number of model (if applicable)
	 */
	public $seq;

	public function __construct($model, $array, $message = 'Failed to validate array', array $values = NULL, $code = 0)
	{
		$this->model = $model;
		$this->array = $array;

		$errors = $array->errors();

		//parent::__construct($array, $message, $values, $code);
		parent::__construct($message);
	}

} // End Mango_Validation_Exception
