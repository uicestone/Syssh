<?php
class SS_Output extends CI_Output{
	function __construct(){
		parent::__construct();
	}
	
	// --------------------------------------------------------------------

	/**
	 * Prepend Output
	 *
	 * Prepends data onto the output string
	 *
	 * @access	public
	 * @param	string
	 * @return	void
	 */
	function prepend_output($output)
	{
		if ($this->final_output == '')
		{
			$this->final_output = $output;
		}
		else
		{
			$this->final_output = $output.$this->final_output;
		}

		return $this;
	}
}
?>