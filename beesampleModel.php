<?php
class BeesampleModel{
	protected $db
	
	public function_contruct(PDO $db){
            $this->db= $db;
	
	}
	
	public function_getAllObservation(){
            return $this->db->query('SELECT * FROM bee_samples');
	
	}

	}
	
?>;