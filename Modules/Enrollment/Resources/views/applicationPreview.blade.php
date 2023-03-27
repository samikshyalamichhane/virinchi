<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	How did you hear about us: {{$detail->how_did_you_hear_about_us}} 
	
	<br>
	PLEASE USE THE BOX BELOW TO ASK A SPECIFIC QUESTION OR TELL US MORE INFORMATION ABOUT YOUR CURRENT SITUATION: {{$detail->specefic_question}}
	<br>
	<h4 class="applyonline-form-title">Student Information</h4>
	<br>
	FIRST NAME: {{$detail->first_name}}
	<br>
	LAST NAME: {{$detail->last_name}}
	<br>
	MIDDLE NAME: {{$detail->middle_name}}
	<br>
	Gender: {{$detail->gender}}
	<br>
	DATE OF BIRTH: {{$detail->dob}}
	<br>
	CANDIDATE'S EMAIL: {{$detail->email}}
	<br>
	CURRENT GRADE: {{$detail->current_grade}}
	<br>
	COURSE INTERESTED IN APPLYING FOR: {{$detail->interested_course}}
	<br>
	YEAR APPLYING FOR: {{$detail->year_applying_for}}
	<br>
	<h4 class="applyonline-form-title">Guardian's Information</h4>
	<br>
	RELATION: {{$detail->relation}}
	<br>
	FIRST NAME: {{$detail->guardian_first_name}}
	<br>
	LAST NAME: {{$detail->guardian_last_name}}
	<br>
	MIDDLE NAME: {{$detail->guardian_middle_name}}
	<br>
	CONTACT NUMBER: {{$detail->guardian_contact}}
	<br>
	EMAIL: {{$detail->guardian_email}}
	<br>
	COUNTRY OF RESIDENCE: {{$detail->country_of_residence}}
	<br>
	ADDRESS: {{$detail->country_address}}





	
</body>
</html>	