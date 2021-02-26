@extends('layouts.appmaster')

@section('title', 'Form')

@section('content')
<div align="center">
<br/>
<h3>Form</h3>

<form method="POST" action= "submitForm" class="was-validated">
<input type="hidden" name ="_token" value="<?php echo csrf_token()?>"/>
	<table>
	<tr>
		<td>   
			<div class="form-group">
				<label for="input1">Input 1: </label>
				<input type="text" name="input1" class="form-control" placeholder="Enter input 1" required="required"/>
				<div class="invalid-feedback">Incorrect Information</div>
			</div>
    	</td>
	</tr>
	
	<tr>
		<td>   
			<div class="form-group">
				<label for="input2">Input 2: </label>
				<input type="text" name="input2" class="form-control" placeholder="Enter input 2" required="required"/>
				<div class="invalid-feedback">Incorrect Information</div>
			</div>
    	</td>
	</tr>
	
	<tr>
		<td>   
			<div class="form-group">
				<label for="input3">Input 3: </label>
				<input type="text" name="input3" class="form-control" placeholder="Enter input 3" required="required"/>
				<div class="invalid-feedback">Incorrect Information</div>
			</div>
    	</td>
	</tr>
	
	<tr>
		<td>   
			<div class="form-group">
				<label for="input4">Input 4: </label>
				<input type="text" name="input4" class="form-control" placeholder="Enter input 4" required="required"/>
				<div class="invalid-feedback">Incorrect Information</div>
			</div>
    	</td>
	</tr>
		
	<tr>
		<td colspan= "2" align="center">
		<div align="center">
		<input type= "submit" value= "Submit" class="btn btn-primary">
		</div>
		</td>
	</tr>	
	</table>
	
</form>

@if(isset($results))
	<h5>{{$results}}</h5>
@endif

</div>
@endsection