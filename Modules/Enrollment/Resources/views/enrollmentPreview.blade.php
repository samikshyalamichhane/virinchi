<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Name of the student: {{$detail->name}}
	<br>
	Mobile phone no: {{$detail->mobile_phone_no}}
	<br>
	Email ID: {{$detail->email}}
	<br>
	Father’s name: {{$detail->father_name}}
	<br>
	Father’s Contact No: {{$detail->father_contact_no}}
	<br>
	Parent’s Email ID: {{$detail->parent_email}}
	<br>
	Mother’s name: {{$detail->mother_name}}
	<br>
	Mother’s Contact No: {{$detail->mother_contact_no}}
	<br>
	Citizenship / Passport Number: {{$detail->citizenship_or_passport_number}}
	<br>
	Date of Birth(Day/Month/Year): {{$detail->dob}}
	<br>
	<h4 class="applyonline-form-title">Educational Quilification</h4>
	<h5>Secondary Education</h5>
	
	<br>
	Board: {{$detail->secondary_education_board}}
	<br>
	School: {{$detail->secondary_education_school}}
	<br>
	Passed Year: {{$detail->secondary_education_pass_year}}
	<br>
	Grade/ Score: {{$detail->secondary_education_grade}}
	<br>
	<h5>Higher Secondary Education</h5>
	<br>
	Board: {{$detail->higher_secondary_education_board}}
	<br>
	School/Collage: {{$detail->higher_secondary_education_school}}
	<br>
	Passed Year: {{$detail->higher_secondary_education_passed_year}}
	<br>
	Grade/ Score: {{$detail->higher_secondary_education_grade}}
	<br>
	<h5>Bachelor Degree</h5>
	<br>
	Board: {{$detail->bachelor_degree_board}}
	<br>
	College/Institude: {{$detail->bachelor_degree_college}}
	<br>
	Passed Year: {{$detail->bachelor_degree_passed_year}}
	<br>
	Grade/ Score: {{$detail->bachelor_degree_grade}}
	<br>
	<h5>Any  Other Quilification</h5>
	<br>
	Board: {{$detail->other_qualification_board}}
	<br>
	College/Institude: {{$detail->other_qualification_college}}
	<br>
	Passed Year: {{$detail->other_qualification_passed_year}}
	<br>
	Grade/ Score: {{$detail->other_qualification_grade}}
</body>
</html>	