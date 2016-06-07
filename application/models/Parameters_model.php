<?php 

class Parameters_model extends MY_Model {

	/**
	* Get website parameters from database
	* - ex: $this->Parameters_model->get_Param('SiteName');
	*		return SiteName value
	*/

	public function get_Param($name)
	{
		$this->db->select($this->_table.'.value');
		$this->db->where('name', $name);
		$query = $this->db->get($this->_table);

		// Count results
		$count = count($query->result());

		if($count > 0)
			return $query->result()[$count-1]->value;
	}
}