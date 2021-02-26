<?php

namespace App\Business;

class FormBusinessService {
    
	/**
	 * Method to check and see if the data object contains any properties that match a given string
	 * @param $data - Data: An object containing the data from the form input
	 * @return boolean
	 */
    public function passData($data) {
    	
    	// Check to see if any of the inputs match the given string
    	if(strcmp($data->getInput1(), "CST-256") == 0 || strcmp($data->getInput2(), "CST-256") == 0 || 
    		strcmp($data->getInput3(), "CST-256") == 0 || strcmp($data->getInput4(), "CST-256") == 0 ) {
    		
    		// If any of the inputs match, return true
    		return "True";
    	}
    	else {
    		// No string matched, return false
    		return "False";
    	}
    	
    }
    
}





