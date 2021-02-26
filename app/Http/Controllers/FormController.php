<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Data;
use App\Business\FormBusinessService;

session_start();

class FormController extends Controller {
	
	// Define service variable to be used as FormBusinessService
    private $formService;  
    
    
    /**
     * Default constructor to initialize the Business Service object
     */
    function __construct() {
    	$this->formService = new FormBusinessService();
    }
    
    
	/**
	 * Method to retrieve the input from a form POST and put it in a Data object
	 * @param Request $request
	 */
    public function readForm(Request $request) {
    	// Get the variables stored within $request that were passed in through the form
        $input1 = $request->input('input1');
        $input2 = $request->input('input2');
        $input3 = $request->input('input3');
        $input4 = $request->input('input4');
        
        // Create a User object with the parameters
        $data = new Data($input1, $input2, $input3, $input4);
        
        // Call the passData method within the business service
        $results = $this->formService->passData($data);
        
        // Return the results of the method call above as a data variable to the view
        $data = ['results' => $results];
        return view('assessment')->with($data);
    }
    
}




