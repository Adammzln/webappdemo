<?php
require_once('database.php');
?>
<!DOCTYPE html>
<html>

<head>

    <title>Event Committee</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

          <?php include 'nav_ec.php'?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Enactus <small>Active Team Sheet</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-edit"></i> Mandatory Report  <i class="fa fa-chevron-circle-right"></i> ATS
                            </li>
                        </ol>
                    </div>
                </div>
           
                    <tr id="trCalCodes">
		<td width="125">
                            <span id="Label6" style="font-family:Arial;font-size:9pt;font-weight:bold;">University:  </span>
                        </td>
		<td>
                            <select name="ddlbCalCode" onchange="javascript:setTimeout('__doPostBack(\'ddlbCalCode\',\'\')', 0)" id="ddlbCalCode" style="font-size:9pt;height:25px;width:150px;margin-left: 8px">
			<option selected="selected" value="14-15">UTHM</option>
			<option value="13-14">USM</option>
			<option value="12-13">UTM</option>
			<option value="13-14">UM</option>
			<option value="12-13">UMP</option>

		</select>
                             <input type="submit" name="btnAutoPopulate" value="Confirm" onclick="javascript:return confirm('This will lead you to the selected University');" id="btnAutoPopulate" class="button" />
                        </td>
						<br><br>
	</tr>
	<div>
<table cellspacing="0" cellpadding="4" rules="all" border="1" id="GridViewMain" style="color:#333333;border-collapse:collapse;">
			<tr style="color:White;background-color:#515356;font-weight:normal;">
				<th scope="col">&nbsp;</th><th scope="col">&nbsp;</th><th scope="col" style="font-size:9pt;"><a href="javascript:__doPostBack('GridViewMain','Sort$FacultyName')" style="color:White;">Faculty Advisor First Name<br />(please list all FAs)</a></th><th scope="col" style="font-size:9pt;"><a href="javascript:__doPostBack('GridViewMain','Sort$FacultyLastName')" style="color:White;"><br />Faculty Advisor Last Name</a></th><th scope="col" style="font-size:9pt;"><a href="javascript:__doPostBack('GridViewMain','Sort$GenderName')" style="color:White;">Primary FA or<br />Co-Advisory?</a></th><th scope="col" style="font-size:9pt;"><a href="javascript:__doPostBack('GridViewMain','Sort$Title')" style="color:White;"><br />Title</a></th><th scope="col" style="font-size:9pt;"><a href="javascript:__doPostBack('GridViewMain','Sort$GenderName')" style="color:White;"><br />Gender</a></th><th scope="col" style="font-size:9pt;"><a href="javascript:__doPostBack('GridViewMain','Sort$PhoneNumber')" style="color:White;">Phone Number<br />(include country code, area code <br />and phone number)</a></th><th scope="col" style="font-size:9pt;"><a href="javascript:__doPostBack('GridViewMain','Sort$EmailAddress')" style="color:White;"><br />Email Address</a></th>
			</tr><tr style="background-color:#EEEEEE;">
				<td align="center" style="width:30px;">
                                    <span style="font-size: 9pt;">
                                        1.</span>
                                    
                                    
                                </td><td>
                                    <input type="submit" name="GridViewMain$ctl02$btnDelete" value="Delete" onclick="javascript:return confirm('Are you sure you want to delete this record?');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;GridViewMain$ctl02$btnDelete&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="GridViewMain_ctl02_btnDelete" class="button" />
                                </td><td>
                                    <input name="GridViewMain$ctl02$txtFacultyName" type="text" maxlength="100" id="GridViewMain_ctl02_txtFacultyName" style="font-size:9pt;" />
                                    <span id="GridViewMain_ctl02_RequiredFieldValidatorFacultyName" style="color:Red;font-size:9pt;display:none;"><br />Faculty Advisor cannot be blank.</span>
                                </td><td>
                                    <input name="GridViewMain$ctl02$txtFacultyLastName" type="text" maxlength="100" id="GridViewMain_ctl02_txtFacultyLastName" style="font-size:9pt;" />
                                    <span id="GridViewMain_ctl02_RequiredFieldValidatorFacultyLastName" style="color:Red;font-size:9pt;display:none;"><br />Faculty Advisor Last Name cannot be blank.</span>
                                </td><td>
                                    <select name="GridViewMain$ctl02$ddlAdvisorTypeID" id="GridViewMain_ctl02_ddlAdvisorTypeID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">Primary Enactus Advisor</option>
					<option value="2">Co-Enactus Advisor</option>

				</select>
                                    <span id="GridViewMain_ctl02_RequiredFieldValidatorAdvisorTypeID" style="color:Red;font-size:9pt;display:none;"><br />Advisor Type must be selected</span>
                                </td><td>
                                    <input name="GridViewMain$ctl02$txtTitle" type="text" maxlength="100" id="GridViewMain_ctl02_txtTitle" style="font-size:9pt;" />
                                </td><td>
                                    <select name="GridViewMain$ctl02$ddlGenderID" id="GridViewMain_ctl02_ddlGenderID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">Female</option>
					<option value="2">Male</option>

				</select>
                                    <span id="GridViewMain_ctl02_RequiredFieldValidatorGenderID" style="color:Red;font-size:9pt;display:none;"><br />Gender must be selected</span>
                                </td><td>
                                    <input name="GridViewMain$ctl02$txtPhoneNumber" type="text" maxlength="50" id="GridViewMain_ctl02_txtPhoneNumber" style="font-size:9pt;" />
                                </td><td>
                                    <input name="GridViewMain$ctl02$txtEmailAddress" type="text" maxlength="100" id="GridViewMain_ctl02_txtEmailAddress" style="font-size:9pt;" />
                                    <span id="GridViewMain_ctl02_RegularExpressionValidator1" style="color:Red;font-size:9pt;display:none;"><br />Invalid email address was entered.</span>
                                      <span id="GridViewMain_ctl02_RequiredFieldValidatorEmail" style="color:Red;font-size:9pt;display:none;"><br />Email cannot be blank</span>
                                    
                                    
                                </td>
			</tr><tr style="background-color:White;">
				<td align="center" style="width:30px;">
                                    <span style="font-size: 9pt;">
                                        2.</span>
                                    
                                    
                                </td><td>
                                    <input type="submit" name="GridViewMain$ctl03$btnDelete" value="Delete" onclick="javascript:return confirm('Are you sure you want to delete this record?');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;GridViewMain$ctl03$btnDelete&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="GridViewMain_ctl03_btnDelete" class="button" />
                                </td><td>
                                    <input name="GridViewMain$ctl03$txtFacultyName" type="text" maxlength="100" id="GridViewMain_ctl03_txtFacultyName" style="font-size:9pt;" />
                                    <span id="GridViewMain_ctl03_RequiredFieldValidatorFacultyName" style="color:Red;font-size:9pt;display:none;"><br />Faculty Advisor cannot be blank.</span>
                                </td><td>
                                    <input name="GridViewMain$ctl03$txtFacultyLastName" type="text" maxlength="100" id="GridViewMain_ctl03_txtFacultyLastName" style="font-size:9pt;" />
                                    <span id="GridViewMain_ctl03_RequiredFieldValidatorFacultyLastName" style="color:Red;font-size:9pt;display:none;"><br />Faculty Advisor Last Name cannot be blank.</span>
                                </td><td>
                                    <select name="GridViewMain$ctl03$ddlAdvisorTypeID" id="GridViewMain_ctl03_ddlAdvisorTypeID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">Primary Enactus Advisor</option>
					<option value="2">Co-Enactus Advisor</option>

				</select>
                                    <span id="GridViewMain_ctl03_RequiredFieldValidatorAdvisorTypeID" style="color:Red;font-size:9pt;display:none;"><br />Advisor Type must be selected</span>
                                </td><td>
                                    <input name="GridViewMain$ctl03$txtTitle" type="text" maxlength="100" id="GridViewMain_ctl03_txtTitle" style="font-size:9pt;" />
                                </td><td>
                                    <select name="GridViewMain$ctl03$ddlGenderID" id="GridViewMain_ctl03_ddlGenderID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">Female</option>
					<option value="2">Male</option>

				</select>
                                    <span id="GridViewMain_ctl03_RequiredFieldValidatorGenderID" style="color:Red;font-size:9pt;display:none;"><br />Gender must be selected</span>
                                </td><td>
                                    <input name="GridViewMain$ctl03$txtPhoneNumber" type="text" maxlength="50" id="GridViewMain_ctl03_txtPhoneNumber" style="font-size:9pt;" />
                                </td><td>
                                    <input name="GridViewMain$ctl03$txtEmailAddress" type="text" maxlength="100" id="GridViewMain_ctl03_txtEmailAddress" style="font-size:9pt;" />
                                    <span id="GridViewMain_ctl03_RegularExpressionValidator1" style="color:Red;font-size:9pt;display:none;"><br />Invalid email address was entered.</span>
                                      <span id="GridViewMain_ctl03_RequiredFieldValidatorEmail" style="color:Red;font-size:9pt;display:none;"><br />Email cannot be blank</span>
                                    
                                    
                                </td>
			</tr><tr style="background-color:#EEEEEE;">
				<td align="center" style="width:30px;">
                                    <span style="font-size: 9pt;">
                                        3.</span>
                                    
                                    
                                </td><td>
                                    <input type="submit" name="GridViewMain$ctl04$btnDelete" value="Delete" onclick="javascript:return confirm('Are you sure you want to delete this record?');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;GridViewMain$ctl04$btnDelete&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="GridViewMain_ctl04_btnDelete" class="button" />
                                </td><td>
                                    <input name="GridViewMain$ctl04$txtFacultyName" type="text" maxlength="100" id="GridViewMain_ctl04_txtFacultyName" style="font-size:9pt;" />
                                    <span id="GridViewMain_ctl04_RequiredFieldValidatorFacultyName" style="color:Red;font-size:9pt;display:none;"><br />Faculty Advisor cannot be blank.</span>
                                </td><td>
                                    <input name="GridViewMain$ctl04$txtFacultyLastName" type="text" maxlength="100" id="GridViewMain_ctl04_txtFacultyLastName" style="font-size:9pt;" />
                                    <span id="GridViewMain_ctl04_RequiredFieldValidatorFacultyLastName" style="color:Red;font-size:9pt;display:none;"><br />Faculty Advisor Last Name cannot be blank.</span>
                                </td><td>
                                    <select name="GridViewMain$ctl04$ddlAdvisorTypeID" id="GridViewMain_ctl04_ddlAdvisorTypeID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">Primary Enactus Advisor</option>
					<option value="2">Co-Enactus Advisor</option>

				</select>
                                    <span id="GridViewMain_ctl04_RequiredFieldValidatorAdvisorTypeID" style="color:Red;font-size:9pt;display:none;"><br />Advisor Type must be selected</span>
                                </td><td>
                                    <input name="GridViewMain$ctl04$txtTitle" type="text" maxlength="100" id="GridViewMain_ctl04_txtTitle" style="font-size:9pt;" />
                                </td><td>
                                    <select name="GridViewMain$ctl04$ddlGenderID" id="GridViewMain_ctl04_ddlGenderID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">Female</option>
					<option value="2">Male</option>

				</select>
                                    <span id="GridViewMain_ctl04_RequiredFieldValidatorGenderID" style="color:Red;font-size:9pt;display:none;"><br />Gender must be selected</span>
                                </td><td>
                                    <input name="GridViewMain$ctl04$txtPhoneNumber" type="text" maxlength="50" id="GridViewMain_ctl04_txtPhoneNumber" style="font-size:9pt;" />
                                </td><td>
                                    <input name="GridViewMain$ctl04$txtEmailAddress" type="text" maxlength="100" id="GridViewMain_ctl04_txtEmailAddress" style="font-size:9pt;" />
                                    <span id="GridViewMain_ctl04_RegularExpressionValidator1" style="color:Red;font-size:9pt;display:none;"><br />Invalid email address was entered.</span>
                                      <span id="GridViewMain_ctl04_RequiredFieldValidatorEmail" style="color:Red;font-size:9pt;display:none;"><br />Email cannot be blank</span>
                                    
                                    
                                </td>
			</tr><tr style="background-color:White;">
				<td align="center" style="width:30px;">
                                    <span style="font-size: 9pt;">
                                        4.</span>
                                    
                                    
                                </td><td>
                                    <input type="submit" name="GridViewMain$ctl05$btnDelete" value="Delete" onclick="javascript:return confirm('Are you sure you want to delete this record?');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;GridViewMain$ctl05$btnDelete&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="GridViewMain_ctl05_btnDelete" class="button" />
                                </td><td>
                                    <input name="GridViewMain$ctl05$txtFacultyName" type="text" maxlength="100" id="GridViewMain_ctl05_txtFacultyName" style="font-size:9pt;" />
                                    <span id="GridViewMain_ctl05_RequiredFieldValidatorFacultyName" style="color:Red;font-size:9pt;display:none;"><br />Faculty Advisor cannot be blank.</span>
                                </td><td>
                                    <input name="GridViewMain$ctl05$txtFacultyLastName" type="text" maxlength="100" id="GridViewMain_ctl05_txtFacultyLastName" style="font-size:9pt;" />
                                    <span id="GridViewMain_ctl05_RequiredFieldValidatorFacultyLastName" style="color:Red;font-size:9pt;display:none;"><br />Faculty Advisor Last Name cannot be blank.</span>
                                </td><td>
                                    <select name="GridViewMain$ctl05$ddlAdvisorTypeID" id="GridViewMain_ctl05_ddlAdvisorTypeID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">Primary Enactus Advisor</option>
					<option value="2">Co-Enactus Advisor</option>

				</select>
                                    <span id="GridViewMain_ctl05_RequiredFieldValidatorAdvisorTypeID" style="color:Red;font-size:9pt;display:none;"><br />Advisor Type must be selected</span>
                                </td><td>
                                    <input name="GridViewMain$ctl05$txtTitle" type="text" maxlength="100" id="GridViewMain_ctl05_txtTitle" style="font-size:9pt;" />
                                </td><td>
                                    <select name="GridViewMain$ctl05$ddlGenderID" id="GridViewMain_ctl05_ddlGenderID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">Female</option>
					<option value="2">Male</option>

				</select>
                                    <span id="GridViewMain_ctl05_RequiredFieldValidatorGenderID" style="color:Red;font-size:9pt;display:none;"><br />Gender must be selected</span>
                                </td><td>
                                    <input name="GridViewMain$ctl05$txtPhoneNumber" type="text" maxlength="50" id="GridViewMain_ctl05_txtPhoneNumber" style="font-size:9pt;" />
                                </td><td>
                                    <input name="GridViewMain$ctl05$txtEmailAddress" type="text" maxlength="100" id="GridViewMain_ctl05_txtEmailAddress" style="font-size:9pt;" />
                                    <span id="GridViewMain_ctl05_RegularExpressionValidator1" style="color:Red;font-size:9pt;display:none;"><br />Invalid email address was entered.</span>
                                      <span id="GridViewMain_ctl05_RequiredFieldValidatorEmail" style="color:Red;font-size:9pt;display:none;"><br />Email cannot be blank</span>
                                    
                                    
                                </td>
			</tr><tr style="background-color:#EEEEEE;">
				<td align="center" style="width:30px;">
                                    <span style="font-size: 9pt;">
                                        5.</span>
                                    
                                    
                                </td><td>
                                    <input type="submit" name="GridViewMain$ctl06$btnDelete" value="Delete" onclick="javascript:return confirm('Are you sure you want to delete this record?');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;GridViewMain$ctl06$btnDelete&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="GridViewMain_ctl06_btnDelete" class="button" />
                                </td><td>
                                    <input name="GridViewMain$ctl06$txtFacultyName" type="text" maxlength="100" id="GridViewMain_ctl06_txtFacultyName" style="font-size:9pt;" />
                                    <span id="GridViewMain_ctl06_RequiredFieldValidatorFacultyName" style="color:Red;font-size:9pt;display:none;"><br />Faculty Advisor cannot be blank.</span>
                                </td><td>
                                    <input name="GridViewMain$ctl06$txtFacultyLastName" type="text" maxlength="100" id="GridViewMain_ctl06_txtFacultyLastName" style="font-size:9pt;" />
                                    <span id="GridViewMain_ctl06_RequiredFieldValidatorFacultyLastName" style="color:Red;font-size:9pt;display:none;"><br />Faculty Advisor Last Name cannot be blank.</span>
                                </td><td>
                                    <select name="GridViewMain$ctl06$ddlAdvisorTypeID" id="GridViewMain_ctl06_ddlAdvisorTypeID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">Primary Enactus Advisor</option>
					<option value="2">Co-Enactus Advisor</option>

				</select>
                                    <span id="GridViewMain_ctl06_RequiredFieldValidatorAdvisorTypeID" style="color:Red;font-size:9pt;display:none;"><br />Advisor Type must be selected</span>
                                </td><td>
                                    <input name="GridViewMain$ctl06$txtTitle" type="text" maxlength="100" id="GridViewMain_ctl06_txtTitle" style="font-size:9pt;" />
                                </td><td>
                                    <select name="GridViewMain$ctl06$ddlGenderID" id="GridViewMain_ctl06_ddlGenderID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">Female</option>
					<option value="2">Male</option>

				</select>
                                    <span id="GridViewMain_ctl06_RequiredFieldValidatorGenderID" style="color:Red;font-size:9pt;display:none;"><br />Gender must be selected</span>
                                </td><td>
                                    <input name="GridViewMain$ctl06$txtPhoneNumber" type="text" maxlength="50" id="GridViewMain_ctl06_txtPhoneNumber" style="font-size:9pt;" />
                                </td><td>
                                    <input name="GridViewMain$ctl06$txtEmailAddress" type="text" maxlength="100" id="GridViewMain_ctl06_txtEmailAddress" style="font-size:9pt;" />
                                    <span id="GridViewMain_ctl06_RegularExpressionValidator1" style="color:Red;font-size:9pt;display:none;"><br />Invalid email address was entered.</span>
                                      <span id="GridViewMain_ctl06_RequiredFieldValidatorEmail" style="color:Red;font-size:9pt;display:none;"><br />Email cannot be blank</span>
                                    
                                    
                                </td>
			</tr>
		</table>
	</div><br><br>
                    <table>
                        <tr>
                            <td>
                                <input type="submit" name="btnAddNew2" value="Add Active Student" id="btnAddNew2" class="button" />
                            </td>
                        </tr>
                    </table>
					<br>
                    <div>
		<table cellspacing="0" cellpadding="4" rules="all" border="1" id="GridViewStudents" style="color:#333333;border-collapse:collapse;">
			<tr style="color:White;background-color:#515356;font-weight:normal;">
				<th scope="col">&nbsp;</th>
				<th scope="col">&nbsp;</th>
				<div class="col-md-1"><th scope="col" style="font-size:9pt;"><br />Student First Name</a></th></div>
				<div class="col-xs-6 col-md-2"><th scope="col" style="font-size:9pt;">Academic Year (e.g. 1st, 2nd, etc.)</a></th><div>
				<div class="col-xs-6 col-md-4"><th scope="col" style="font-size:9pt;">Degree</th>
				<div class="col-xs-6 col-md-4"><th scope="col" style="font-size:9pt;"><br />Field Of Study</a></th></div>
				<div class="col-xs-6 col-md-4"><th scope="col" style="font-size:9pt;"><br />Gender</a></th></div>
				<div class="col-xs-6 col-md-4"><th scope="col" style="font-size:9pt;"> Graduate Year</th></div>
				<div class="col-xs-6 col-md-4"><th scope="col" style="font-size:9pt;"><br />Email Address</a></th></div>
				<th scope="col" style="font-size:9pt;">Hours of Enactus<br />Involvement<br />(per student)</th>
			</tr>	
			<tr style="background-color:#EEEEEE;">
				<td align="center" style="width:30px;">
                                    <span style="font-size: 9pt;">
                                        1.</span>
                                    
                                    
                                </td><td>
                                    <input type="submit" name="GridViewStudents$ctl02$btnDeleteStudent" value="Delete" onclick="javascript:return confirm('Are you sure you want to delete this record?');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;GridViewStudents$ctl02$btnDeleteStudent&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="GridViewStudents_ctl02_btnDeleteStudent" class="button" />
                                </td><td>
                                    <input name="GridViewStudents$ctl02$txtStudentName" type="text" value="CHOON SEN" maxlength="100" id="GridViewStudents_ctl02_txtStudentName" style="font-size:9pt;" />
                                    <span id="GridViewStudents_ctl02_RequiredFieldValidatorStudentName" style="color:Red;font-size:9pt;display:none;"><br />Student Name cannot be blank.</span>
                                </td><td>
                                    <select name="GridViewStudents$ctl02$ddlAcademicYearID" id="GridViewStudents_ctl02_ddlAcademicYearID" style="font-size:9pt;">
					<option value="0"></option>
					<option value="1">1st Year</option>
					<option value="2">2nd Year</option>
					<option selected="selected" value="3">3rd Year</option>
					<option value="4">4th Year</option>
					<option value="5">5th Year</option>
					<option value="6">6th Year</option>
					<option value="7">7th Year</option>
					<option value="8">8th Year</option>

				</select>
                                    
                                </td><td>
																																				<select name="GridViewStudents$ctl02$ddlbDegree" id="GridViewStudents_ctl02_ddlbDegree">
					<option value="0"> </option>
					<option selected="selected" value="1">Undergraduated</option>
					<option value="2">Master’s Degree </option>
					<option value="3">PHD/Doctorate</option>
					<option value="4">Other</option>

				</select>
																																				
				<span id="GridViewStudents_ctl02_RequiredFieldValidatorDegree" style="color:Red;font-size:9pt;display:none;"><br />Degree must be selected</span>
									
					</td><td>
                                				<select name="GridViewStudents$ctl02$ddlbFieldofStudy" id="GridViewStudents_ctl02_ddlbFieldofStudy">
					<option value="0"> </option>
					<option value="1">Agriculture or Forestry</option>
					<option value="2">Architecture</option>
					<option value="9">Accounting</option>
					<option value="10">Business Administration</option>
					<option value="3">Commerce</option>
					<option value="4">Economics</option>
					<option value="5">Entrepreneurship</option>
					<option value="6">Finance</option>
					<option value="7">Hospitality</option>
					<option value="8">Management</option>
					<option value="11">Marketing/Advertising</option>
					<option value="12">Public Administration</option>
					<option value="13">Communication</option>
					<option selected="selected" value="14">Computer/Information Sciences</option>
					<option value="15">Education</option>
					<option value="16"> Aerospace Engineering</option>
					<option value="17"> Agricultural Engineering</option>
					<option value="18"> Bioengineering</option>
					<option value="20"> Chemical Engineering</option>
					<option value="19"> Civil Engineering</option>
					<option value="21"> Computer Engineering</option>
					<option value="22"> Electrical Engineering</option>
					<option value="23"> Environmental Engineering</option>
					<option value="24"> Industrial Engineering</option>
					<option value="25"> Mechanical Engineering</option>
					<option value="32">Law</option>
					<option value="26">Liberal Arts</option>
					<option value="27">Mathematics</option>
					<option value="28">Medical-Related or Health Sciences </option>
					<option value="30">Psychology</option>
					<option value="31">Social Sciences or Humanities</option>
					<option value="29">Other</option>

				</select>
                                				<span id="GridViewStudents_ctl02_RequiredFieldValidatorFieldofStudyID" style="color:Red;font-size:9pt;display:none;"><br />Field of Study must be selected</span>
                                				
                                				
                                </td><td>
                                    <select name="GridViewStudents$ctl02$ddlGenderID" id="GridViewStudents_ctl02_ddlGenderID" style="font-size:9pt;">
					<option value="0"></option>
					<option value="1">Female</option>
					<option selected="selected" value="2">Male</option>

				</select>
                                    
                                    <span id="GridViewStudents_ctl02_RequiredFieldValidatorGenderID" style="color:Red;font-size:9pt;display:none;"><br />Gender must be selected</span>
                                </td><td>
                                    <input name="GridViewStudents$ctl02$txtGraduationYear" type="text" value="2016" maxlength="4" id="GridViewStudents_ctl02_txtGraduationYear" style="font-size:9pt;width:50px;" />
                                    
                                    
                                </td><td>
                                    <input name="GridViewStudents$ctl02$txtEmailAddress" type="text" value="seanseah0702@gmail.com" maxlength="100" id="GridViewStudents_ctl02_txtEmailAddress" style="font-size:9pt;" />
                                    <span id="GridViewStudents_ctl02_RegularExpressionValidator1" style="color:Red;font-size:9pt;display:none;"><br />Invalid email address was entered.</span>
                                    
                                       <span id="GridViewStudents_ctl02_RequiredFieldValidatorEmail" style="color:Red;font-size:9pt;display:none;"><br />Email cannot be blank</span>
                                    
                                    
                                </td><td>
                                    <input name="GridViewStudents$ctl02$txtHoursInvolvement" type="text" value="12" maxlength="4" id="GridViewStudents_ctl02_txtHoursInvolvement" style="font-size:9pt;width:100px;" />
                                    
                                    
                                        
                                        <span id="GridViewStudents_ctl02_RequiredFieldValidatorHoursInvolvement" style="color:Red;font-size:9pt;display:none;"><br />Hours of Enactus Involvemen cannot be blank.</span>
                                        
                                        
                                        
                                </td>
			</tr><tr style="background-color:White;">
				<td align="center" style="width:30px;">
                                    <span style="font-size: 9pt;">
                                        2.</span>
                                    
                                    
                                </td><td>
                                    <input type="submit" name="GridViewStudents$ctl03$btnDeleteStudent" value="Delete" onclick="javascript:return confirm('Are you sure you want to delete this record?');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;GridViewStudents$ctl03$btnDeleteStudent&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="GridViewStudents_ctl03_btnDeleteStudent" class="button" />
                                </td><td>
                                    <input name="GridViewStudents$ctl03$txtStudentName" type="text" maxlength="100" id="GridViewStudents_ctl03_txtStudentName" style="font-size:9pt;" />
                                    <span id="GridViewStudents_ctl03_RequiredFieldValidatorStudentName" style="color:Red;font-size:9pt;display:none;"><br />Student Name cannot be blank.</span>
                                </td><td>
                                    <select name="GridViewStudents$ctl03$ddlAcademicYearID" id="GridViewStudents_ctl03_ddlAcademicYearID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">1st Year</option>
					<option value="2">2nd Year</option>
					<option value="3">3rd Year</option>
					<option value="4">4th Year</option>
					<option value="5">5th Year</option>
					<option value="6">6th Year</option>
					<option value="7">7th Year</option>
					<option value="8">8th Year</option>

				</select>
                                    
                                </td><td>
																																				<select name="GridViewStudents$ctl03$ddlbDegree" id="GridViewStudents_ctl03_ddlbDegree">
					<option selected="selected" value="0"> </option>
					<option value="1">Undergraduated</option>
					<option value="2">Master’s Degree </option>
					<option value="3">PHD/Doctorate</option>
					<option value="4">Other</option>

				</select>
																																				
																																				<span id="GridViewStudents_ctl03_RequiredFieldValidatorDegree" style="color:Red;font-size:9pt;display:none;"><br />Degree must be selected</span>
																																				
																																</td><td>
                                				<select name="GridViewStudents$ctl03$ddlbFieldofStudy" id="GridViewStudents_ctl03_ddlbFieldofStudy">
					<option selected="selected" value="0"> </option>
					<option value="1">Agriculture or Forestry</option>
					<option value="2">Architecture</option>
					<option value="9">Accounting</option>
					<option value="10">Business Administration</option>
					<option value="3">Commerce</option>
					<option value="4">Economics</option>
					<option value="5">Entrepreneurship</option>
					<option value="6">Finance</option>
					<option value="7">Hospitality</option>
					<option value="8">Management</option>
					<option value="11">Marketing/Advertising</option>
					<option value="12">Public Administration</option>
					<option value="13">Communication</option>
					<option value="14">Computer/Information Sciences</option>
					<option value="15">Education</option>
					<option value="16"> Aerospace Engineering</option>
					<option value="17"> Agricultural Engineering</option>
					<option value="18"> Bioengineering</option>
					<option value="20"> Chemical Engineering</option>
					<option value="19"> Civil Engineering</option>
					<option value="21"> Computer Engineering</option>
					<option value="22"> Electrical Engineering</option>
					<option value="23"> Environmental Engineering</option>
					<option value="24"> Industrial Engineering</option>
					<option value="25"> Mechanical Engineering</option>
					<option value="32">Law</option>
					<option value="26">Liberal Arts</option>
					<option value="27">Mathematics</option>
					<option value="28">Medical-Related or Health Sciences </option>
					<option value="30">Psychology</option>
					<option value="31">Social Sciences or Humanities</option>
					<option value="29">Other</option>

				</select>
                                				<span id="GridViewStudents_ctl03_RequiredFieldValidatorFieldofStudyID" style="color:Red;font-size:9pt;display:none;"><br />Field of Study must be selected</span>
                                				
                                				
                                </td><td>
                                    <select name="GridViewStudents$ctl03$ddlGenderID" id="GridViewStudents_ctl03_ddlGenderID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">Female</option>
					<option value="2">Male</option>

				</select>
                                    
                                    <span id="GridViewStudents_ctl03_RequiredFieldValidatorGenderID" style="color:Red;font-size:9pt;display:none;"><br />Gender must be selected</span>
                                </td><td>
                                    <input name="GridViewStudents$ctl03$txtGraduationYear" type="text" maxlength="4" id="GridViewStudents_ctl03_txtGraduationYear" style="font-size:9pt;width:50px;" />
                                    
                                    
                                </td><td>
                                    <input name="GridViewStudents$ctl03$txtEmailAddress" type="text" maxlength="100" id="GridViewStudents_ctl03_txtEmailAddress" style="font-size:9pt;" />
                                    <span id="GridViewStudents_ctl03_RegularExpressionValidator1" style="color:Red;font-size:9pt;display:none;"><br />Invalid email address was entered.</span>
                                    
                                       <span id="GridViewStudents_ctl03_RequiredFieldValidatorEmail" style="color:Red;font-size:9pt;display:none;"><br />Email cannot be blank</span>
                                    
                                    
                                </td><td>
                                    <input name="GridViewStudents$ctl03$txtHoursInvolvement" type="text" maxlength="4" id="GridViewStudents_ctl03_txtHoursInvolvement" style="font-size:9pt;width:100px;" />
                                    
                                    
                                        
                                        <span id="GridViewStudents_ctl03_RequiredFieldValidatorHoursInvolvement" style="color:Red;font-size:9pt;display:none;"><br />Hours of Enactus Involvemen cannot be blank.</span>
                                        
                                        
                                        
                                </td>
			</tr><tr style="background-color:#EEEEEE;">
				<td align="center" style="width:30px;">
                                    <span style="font-size: 9pt;">
                                        3.</span>
                                    
                                    
                                </td><td>
                                    <input type="submit" name="GridViewStudents$ctl04$btnDeleteStudent" value="Delete" onclick="javascript:return confirm('Are you sure you want to delete this record?');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;GridViewStudents$ctl04$btnDeleteStudent&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="GridViewStudents_ctl04_btnDeleteStudent" class="button" />
                                </td><td>
                                    <input name="GridViewStudents$ctl04$txtStudentName" type="text" maxlength="100" id="GridViewStudents_ctl04_txtStudentName" style="font-size:9pt;" />
                                    <span id="GridViewStudents_ctl04_RequiredFieldValidatorStudentName" style="color:Red;font-size:9pt;display:none;"><br />Student Name cannot be blank.</span>
                                </td><td>
                                    <select name="GridViewStudents$ctl04$ddlAcademicYearID" id="GridViewStudents_ctl04_ddlAcademicYearID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">1st Year</option>
					<option value="2">2nd Year</option>
					<option value="3">3rd Year</option>
					<option value="4">4th Year</option>
					<option value="5">5th Year</option>
					<option value="6">6th Year</option>
					<option value="7">7th Year</option>
					<option value="8">8th Year</option>

				</select>
                                    
                                </td><td>
																																				<select name="GridViewStudents$ctl04$ddlbDegree" id="GridViewStudents_ctl04_ddlbDegree">
					<option selected="selected" value="0"> </option>
					<option value="1">Undergraduated</option>
					<option value="2">Master’s Degree </option>
					<option value="3">PHD/Doctorate</option>
					<option value="4">Other</option>

				</select>
																																				
																																				<span id="GridViewStudents_ctl04_RequiredFieldValidatorDegree" style="color:Red;font-size:9pt;display:none;"><br />Degree must be selected</span>
																																				
																																</td><td>
                                				<select name="GridViewStudents$ctl04$ddlbFieldofStudy" id="GridViewStudents_ctl04_ddlbFieldofStudy">
					<option selected="selected" value="0"> </option>
					<option value="1">Agriculture or Forestry</option>
					<option value="2">Architecture</option>
					<option value="9">Accounting</option>
					<option value="10">Business Administration</option>
					<option value="3">Commerce</option>
					<option value="4">Economics</option>
					<option value="5">Entrepreneurship</option>
					<option value="6">Finance</option>
					<option value="7">Hospitality</option>
					<option value="8">Management</option>
					<option value="11">Marketing/Advertising</option>
					<option value="12">Public Administration</option>
					<option value="13">Communication</option>
					<option value="14">Computer/Information Sciences</option>
					<option value="15">Education</option>
					<option value="16"> Aerospace Engineering</option>
					<option value="17"> Agricultural Engineering</option>
					<option value="18"> Bioengineering</option>
					<option value="20"> Chemical Engineering</option>
					<option value="19"> Civil Engineering</option>
					<option value="21"> Computer Engineering</option>
					<option value="22"> Electrical Engineering</option>
					<option value="23"> Environmental Engineering</option>
					<option value="24"> Industrial Engineering</option>
					<option value="25"> Mechanical Engineering</option>
					<option value="32">Law</option>
					<option value="26">Liberal Arts</option>
					<option value="27">Mathematics</option>
					<option value="28">Medical-Related or Health Sciences </option>
					<option value="30">Psychology</option>
					<option value="31">Social Sciences or Humanities</option>
					<option value="29">Other</option>

				</select>
                                				<span id="GridViewStudents_ctl04_RequiredFieldValidatorFieldofStudyID" style="color:Red;font-size:9pt;display:none;"><br />Field of Study must be selected</span>
                                				
                                				
                                </td><td>
                                    <select name="GridViewStudents$ctl04$ddlGenderID" id="GridViewStudents_ctl04_ddlGenderID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">Female</option>
					<option value="2">Male</option>

				</select>
                                    
                                    <span id="GridViewStudents_ctl04_RequiredFieldValidatorGenderID" style="color:Red;font-size:9pt;display:none;"><br />Gender must be selected</span>
                                </td><td>
                                    <input name="GridViewStudents$ctl04$txtGraduationYear" type="text" maxlength="4" id="GridViewStudents_ctl04_txtGraduationYear" style="font-size:9pt;width:50px;" />
                                    
                                    
                                </td><td>
                                    <input name="GridViewStudents$ctl04$txtEmailAddress" type="text" maxlength="100" id="GridViewStudents_ctl04_txtEmailAddress" style="font-size:9pt;" />
                                    <span id="GridViewStudents_ctl04_RegularExpressionValidator1" style="color:Red;font-size:9pt;display:none;"><br />Invalid email address was entered.</span>
                                    
                                       <span id="GridViewStudents_ctl04_RequiredFieldValidatorEmail" style="color:Red;font-size:9pt;display:none;"><br />Email cannot be blank</span>
                                    
                                    
                                </td><td>
                                    <input name="GridViewStudents$ctl04$txtHoursInvolvement" type="text" maxlength="4" id="GridViewStudents_ctl04_txtHoursInvolvement" style="font-size:9pt;width:100px;" />
                                    
                                    
                                        
                                        <span id="GridViewStudents_ctl04_RequiredFieldValidatorHoursInvolvement" style="color:Red;font-size:9pt;display:none;"><br />Hours of Enactus Involvemen cannot be blank.</span>
                                        
                                        
                                        
                                </td>
			</tr><tr style="background-color:White;">
				<td align="center" style="width:30px;">
                                    <span style="font-size: 9pt;">
                                        4.</span>
                                    
                                    
                                </td><td>
                                    <input type="submit" name="GridViewStudents$ctl05$btnDeleteStudent" value="Delete" onclick="javascript:return confirm('Are you sure you want to delete this record?');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;GridViewStudents$ctl05$btnDeleteStudent&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="GridViewStudents_ctl05_btnDeleteStudent" class="button" />
                                </td><td>
                                    <input name="GridViewStudents$ctl05$txtStudentName" type="text" maxlength="100" id="GridViewStudents_ctl05_txtStudentName" style="font-size:9pt;" />
                                    <span id="GridViewStudents_ctl05_RequiredFieldValidatorStudentName" style="color:Red;font-size:9pt;display:none;"><br />Student Name cannot be blank.</span>
                                </td><td>
                                    <select name="GridViewStudents$ctl05$ddlAcademicYearID" id="GridViewStudents_ctl05_ddlAcademicYearID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">1st Year</option>
					<option value="2">2nd Year</option>
					<option value="3">3rd Year</option>
					<option value="4">4th Year</option>
					<option value="5">5th Year</option>
					<option value="6">6th Year</option>
					<option value="7">7th Year</option>
					<option value="8">8th Year</option>

				</select>
                                    
                                </td><td>
																																				<select name="GridViewStudents$ctl05$ddlbDegree" id="GridViewStudents_ctl05_ddlbDegree">
					<option selected="selected" value="0"> </option>
					<option value="1">Undergraduated</option>
					<option value="2">Master’s Degree </option>
					<option value="3">PHD/Doctorate</option>
					<option value="4">Other</option>

				</select>
																																				
																																				<span id="GridViewStudents_ctl05_RequiredFieldValidatorDegree" style="color:Red;font-size:9pt;display:none;"><br />Degree must be selected</span>
																																				
																																</td><td>
                                				<select name="GridViewStudents$ctl05$ddlbFieldofStudy" id="GridViewStudents_ctl05_ddlbFieldofStudy">
					<option selected="selected" value="0"> </option>
					<option value="1">Agriculture or Forestry</option>
					<option value="2">Architecture</option>
					<option value="9">Accounting</option>
					<option value="10">Business Administration</option>
					<option value="3">Commerce</option>
					<option value="4">Economics</option>
					<option value="5">Entrepreneurship</option>
					<option value="6">Finance</option>
					<option value="7">Hospitality</option>
					<option value="8">Management</option>
					<option value="11">Marketing/Advertising</option>
					<option value="12">Public Administration</option>
					<option value="13">Communication</option>
					<option value="14">Computer/Information Sciences</option>
					<option value="15">Education</option>
					<option value="16"> Aerospace Engineering</option>
					<option value="17"> Agricultural Engineering</option>
					<option value="18"> Bioengineering</option>
					<option value="20"> Chemical Engineering</option>
					<option value="19"> Civil Engineering</option>
					<option value="21"> Computer Engineering</option>
					<option value="22"> Electrical Engineering</option>
					<option value="23"> Environmental Engineering</option>
					<option value="24"> Industrial Engineering</option>
					<option value="25"> Mechanical Engineering</option>
					<option value="32">Law</option>
					<option value="26">Liberal Arts</option>
					<option value="27">Mathematics</option>
					<option value="28">Medical-Related or Health Sciences </option>
					<option value="30">Psychology</option>
					<option value="31">Social Sciences or Humanities</option>
					<option value="29">Other</option>

				</select>
                                				<span id="GridViewStudents_ctl05_RequiredFieldValidatorFieldofStudyID" style="color:Red;font-size:9pt;display:none;"><br />Field of Study must be selected</span>
                                				
                                				
                                </td><td>
                                    <select name="GridViewStudents$ctl05$ddlGenderID" id="GridViewStudents_ctl05_ddlGenderID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">Female</option>
					<option value="2">Male</option>

				</select>
                                    
                                    <span id="GridViewStudents_ctl05_RequiredFieldValidatorGenderID" style="color:Red;font-size:9pt;display:none;"><br />Gender must be selected</span>
                                </td><td>
                                    <input name="GridViewStudents$ctl05$txtGraduationYear" type="text" maxlength="4" id="GridViewStudents_ctl05_txtGraduationYear" style="font-size:9pt;width:50px;" />
                                    
                                    
                                </td><td>
                                    <input name="GridViewStudents$ctl05$txtEmailAddress" type="text" maxlength="100" id="GridViewStudents_ctl05_txtEmailAddress" style="font-size:9pt;" />
                                    <span id="GridViewStudents_ctl05_RegularExpressionValidator1" style="color:Red;font-size:9pt;display:none;"><br />Invalid email address was entered.</span>
                                    
                                       <span id="GridViewStudents_ctl05_RequiredFieldValidatorEmail" style="color:Red;font-size:9pt;display:none;"><br />Email cannot be blank</span>
                                    
                                    
                                </td><td>
                                    <input name="GridViewStudents$ctl05$txtHoursInvolvement" type="text" maxlength="4" id="GridViewStudents_ctl05_txtHoursInvolvement" style="font-size:9pt;width:100px;" />
                                    
                                    
                                        
                                        <span id="GridViewStudents_ctl05_RequiredFieldValidatorHoursInvolvement" style="color:Red;font-size:9pt;display:none;"><br />Hours of Enactus Involvemen cannot be blank.</span>
                                        
                                        
                                        
                                </td>
			</tr><tr style="background-color:#EEEEEE;">
				<td align="center" style="width:30px;">
                                    <span style="font-size: 9pt;">
                                        5.</span>
                                    
                                    
                                </td><td>
                                    <input type="submit" name="GridViewStudents$ctl06$btnDeleteStudent" value="Delete" onclick="javascript:return confirm('Are you sure you want to delete this record?');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;GridViewStudents$ctl06$btnDeleteStudent&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="GridViewStudents_ctl06_btnDeleteStudent" class="button" />
                                </td><td>
                                    <input name="GridViewStudents$ctl06$txtStudentName" type="text" maxlength="100" id="GridViewStudents_ctl06_txtStudentName" style="font-size:9pt;" />
                                    <span id="GridViewStudents_ctl06_RequiredFieldValidatorStudentName" style="color:Red;font-size:9pt;display:none;"><br />Student Name cannot be blank.</span>
                                </td><td>
                                    <select name="GridViewStudents$ctl06$ddlAcademicYearID" id="GridViewStudents_ctl06_ddlAcademicYearID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">1st Year</option>
					<option value="2">2nd Year</option>
					<option value="3">3rd Year</option>
					<option value="4">4th Year</option>
					<option value="5">5th Year</option>
					<option value="6">6th Year</option>
					<option value="7">7th Year</option>
					<option value="8">8th Year</option>

				</select>
                                    
                                </td><td>
																																				<select name="GridViewStudents$ctl06$ddlbDegree" id="GridViewStudents_ctl06_ddlbDegree">
					<option selected="selected" value="0"> </option>
					<option value="1">Undergraduated</option>
					<option value="2">Master’s Degree </option>
					<option value="3">PHD/Doctorate</option>
					<option value="4">Other</option>

				</select>
																																				
																																				<span id="GridViewStudents_ctl06_RequiredFieldValidatorDegree" style="color:Red;font-size:9pt;display:none;"><br />Degree must be selected</span>
																																				
																																</td><td>
                                				<select name="GridViewStudents$ctl06$ddlbFieldofStudy" id="GridViewStudents_ctl06_ddlbFieldofStudy">
					<option selected="selected" value="0"> </option>
					<option value="1">Agriculture or Forestry</option>
					<option value="2">Architecture</option>
					<option value="9">Accounting</option>
					<option value="10">Business Administration</option>
					<option value="3">Commerce</option>
					<option value="4">Economics</option>
					<option value="5">Entrepreneurship</option>
					<option value="6">Finance</option>
					<option value="7">Hospitality</option>
					<option value="8">Management</option>
					<option value="11">Marketing/Advertising</option>
					<option value="12">Public Administration</option>
					<option value="13">Communication</option>
					<option value="14">Computer/Information Sciences</option>
					<option value="15">Education</option>
					<option value="16"> Aerospace Engineering</option>
					<option value="17"> Agricultural Engineering</option>
					<option value="18"> Bioengineering</option>
					<option value="20"> Chemical Engineering</option>
					<option value="19"> Civil Engineering</option>
					<option value="21"> Computer Engineering</option>
					<option value="22"> Electrical Engineering</option>
					<option value="23"> Environmental Engineering</option>
					<option value="24"> Industrial Engineering</option>
					<option value="25"> Mechanical Engineering</option>
					<option value="32">Law</option>
					<option value="26">Liberal Arts</option>
					<option value="27">Mathematics</option>
					<option value="28">Medical-Related or Health Sciences </option>
					<option value="30">Psychology</option>
					<option value="31">Social Sciences or Humanities</option>
					<option value="29">Other</option>

				</select>
                                				<span id="GridViewStudents_ctl06_RequiredFieldValidatorFieldofStudyID" style="color:Red;font-size:9pt;display:none;"><br />Field of Study must be selected</span>
                                				
                                				
                                </td><td>
                                    <select name="GridViewStudents$ctl06$ddlGenderID" id="GridViewStudents_ctl06_ddlGenderID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">Female</option>
					<option value="2">Male</option>

				</select>
                                    
                                    <span id="GridViewStudents_ctl06_RequiredFieldValidatorGenderID" style="color:Red;font-size:9pt;display:none;"><br />Gender must be selected</span>
                                </td><td>
                                    <input name="GridViewStudents$ctl06$txtGraduationYear" type="text" maxlength="4" id="GridViewStudents_ctl06_txtGraduationYear" style="font-size:9pt;width:50px;" />
                                    
                                    
                                </td><td>
                                    <input name="GridViewStudents$ctl06$txtEmailAddress" type="text" maxlength="100" id="GridViewStudents_ctl06_txtEmailAddress" style="font-size:9pt;" />
                                    <span id="GridViewStudents_ctl06_RegularExpressionValidator1" style="color:Red;font-size:9pt;display:none;"><br />Invalid email address was entered.</span>
                                    
                                       <span id="GridViewStudents_ctl06_RequiredFieldValidatorEmail" style="color:Red;font-size:9pt;display:none;"><br />Email cannot be blank</span>
                                    
                                    
                                </td><td>
                                    <input name="GridViewStudents$ctl06$txtHoursInvolvement" type="text" maxlength="4" id="GridViewStudents_ctl06_txtHoursInvolvement" style="font-size:9pt;width:100px;" />
                                    
                                    
                                        
                                        <span id="GridViewStudents_ctl06_RequiredFieldValidatorHoursInvolvement" style="color:Red;font-size:9pt;display:none;"><br />Hours of Enactus Involvemen cannot be blank.</span>
                                        
                                        
                                        
                                </td>
			</tr><tr style="background-color:White;">
				<td align="center" style="width:30px;">
                                    <span style="font-size: 9pt;">
                                        6.</span>
                                    
                                    
                                </td><td>
                                    <input type="submit" name="GridViewStudents$ctl07$btnDeleteStudent" value="Delete" onclick="javascript:return confirm('Are you sure you want to delete this record?');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;GridViewStudents$ctl07$btnDeleteStudent&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="GridViewStudents_ctl07_btnDeleteStudent" class="button" />
                                </td><td>
                                    <input name="GridViewStudents$ctl07$txtStudentName" type="text" maxlength="100" id="GridViewStudents_ctl07_txtStudentName" style="font-size:9pt;" />
                                    <span id="GridViewStudents_ctl07_RequiredFieldValidatorStudentName" style="color:Red;font-size:9pt;display:none;"><br />Student Name cannot be blank.</span>
                                </td><td>
                                    <select name="GridViewStudents$ctl07$ddlAcademicYearID" id="GridViewStudents_ctl07_ddlAcademicYearID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">1st Year</option>
					<option value="2">2nd Year</option>
					<option value="3">3rd Year</option>
					<option value="4">4th Year</option>
					<option value="5">5th Year</option>
					<option value="6">6th Year</option>
					<option value="7">7th Year</option>
					<option value="8">8th Year</option>

				</select>
                                    
                                </td><td>
																																				<select name="GridViewStudents$ctl07$ddlbDegree" id="GridViewStudents_ctl07_ddlbDegree">
					<option selected="selected" value="0"> </option>
					<option value="1">Undergraduated</option>
					<option value="2">Master’s Degree </option>
					<option value="3">PHD/Doctorate</option>
					<option value="4">Other</option>

				</select>
																																				
																																				<span id="GridViewStudents_ctl07_RequiredFieldValidatorDegree" style="color:Red;font-size:9pt;display:none;"><br />Degree must be selected</span>
																																				
																																</td><td>
                                				<select name="GridViewStudents$ctl07$ddlbFieldofStudy" id="GridViewStudents_ctl07_ddlbFieldofStudy">
					<option selected="selected" value="0"> </option>
					<option value="1">Agriculture or Forestry</option>
					<option value="2">Architecture</option>
					<option value="9">Accounting</option>
					<option value="10">Business Administration</option>
					<option value="3">Commerce</option>
					<option value="4">Economics</option>
					<option value="5">Entrepreneurship</option>
					<option value="6">Finance</option>
					<option value="7">Hospitality</option>
					<option value="8">Management</option>
					<option value="11">Marketing/Advertising</option>
					<option value="12">Public Administration</option>
					<option value="13">Communication</option>
					<option value="14">Computer/Information Sciences</option>
					<option value="15">Education</option>
					<option value="16"> Aerospace Engineering</option>
					<option value="17"> Agricultural Engineering</option>
					<option value="18"> Bioengineering</option>
					<option value="20"> Chemical Engineering</option>
					<option value="19"> Civil Engineering</option>
					<option value="21"> Computer Engineering</option>
					<option value="22"> Electrical Engineering</option>
					<option value="23"> Environmental Engineering</option>
					<option value="24"> Industrial Engineering</option>
					<option value="25"> Mechanical Engineering</option>
					<option value="32">Law</option>
					<option value="26">Liberal Arts</option>
					<option value="27">Mathematics</option>
					<option value="28">Medical-Related or Health Sciences </option>
					<option value="30">Psychology</option>
					<option value="31">Social Sciences or Humanities</option>
					<option value="29">Other</option>

				</select>
                                				<span id="GridViewStudents_ctl07_RequiredFieldValidatorFieldofStudyID" style="color:Red;font-size:9pt;display:none;"><br />Field of Study must be selected</span>
                                				
                                				
                                </td><td>
                                    <select name="GridViewStudents$ctl07$ddlGenderID" id="GridViewStudents_ctl07_ddlGenderID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">Female</option>
					<option value="2">Male</option>

				</select>
                                    
                                    <span id="GridViewStudents_ctl07_RequiredFieldValidatorGenderID" style="color:Red;font-size:9pt;display:none;"><br />Gender must be selected</span>
                                </td><td>
                                    <input name="GridViewStudents$ctl07$txtGraduationYear" type="text" maxlength="4" id="GridViewStudents_ctl07_txtGraduationYear" style="font-size:9pt;width:50px;" />
                                    
                                    
                                </td><td>
                                    <input name="GridViewStudents$ctl07$txtEmailAddress" type="text" maxlength="100" id="GridViewStudents_ctl07_txtEmailAddress" style="font-size:9pt;" />
                                    <span id="GridViewStudents_ctl07_RegularExpressionValidator1" style="color:Red;font-size:9pt;display:none;"><br />Invalid email address was entered.</span>
                                    
                                       <span id="GridViewStudents_ctl07_RequiredFieldValidatorEmail" style="color:Red;font-size:9pt;display:none;"><br />Email cannot be blank</span>
                                    
                                    
                                </td><td>
                                    <input name="GridViewStudents$ctl07$txtHoursInvolvement" type="text" maxlength="4" id="GridViewStudents_ctl07_txtHoursInvolvement" style="font-size:9pt;width:100px;" />
                                    
                                    
                                        
                                        <span id="GridViewStudents_ctl07_RequiredFieldValidatorHoursInvolvement" style="color:Red;font-size:9pt;display:none;"><br />Hours of Enactus Involvemen cannot be blank.</span>
                                        
                                        
                                        
                                </td>
			</tr><tr style="background-color:#EEEEEE;">
				<td align="center" style="width:30px;">
                                    <span style="font-size: 9pt;">
                                        7.</span>
                                    
                                    
                                </td><td>
                                    <input type="submit" name="GridViewStudents$ctl08$btnDeleteStudent" value="Delete" onclick="javascript:return confirm('Are you sure you want to delete this record?');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;GridViewStudents$ctl08$btnDeleteStudent&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="GridViewStudents_ctl08_btnDeleteStudent" class="button" />
                                </td><td>
                                    <input name="GridViewStudents$ctl08$txtStudentName" type="text" maxlength="100" id="GridViewStudents_ctl08_txtStudentName" style="font-size:9pt;" />
                                    <span id="GridViewStudents_ctl08_RequiredFieldValidatorStudentName" style="color:Red;font-size:9pt;display:none;"><br />Student Name cannot be blank.</span>
                                </td><td>
                                    <select name="GridViewStudents$ctl08$ddlAcademicYearID" id="GridViewStudents_ctl08_ddlAcademicYearID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">1st Year</option>
					<option value="2">2nd Year</option>
					<option value="3">3rd Year</option>
					<option value="4">4th Year</option>
					<option value="5">5th Year</option>
					<option value="6">6th Year</option>
					<option value="7">7th Year</option>
					<option value="8">8th Year</option>

				</select>
                                    
                                </td><td>
																																				<select name="GridViewStudents$ctl08$ddlbDegree" id="GridViewStudents_ctl08_ddlbDegree">
					<option selected="selected" value="0"> </option>
					<option value="1">Undergraduated</option>
					<option value="2">Master’s Degree </option>
					<option value="3">PHD/Doctorate</option>
					<option value="4">Other</option>

				</select>
																																				
																																				<span id="GridViewStudents_ctl08_RequiredFieldValidatorDegree" style="color:Red;font-size:9pt;display:none;"><br />Degree must be selected</span>
																																				
																																</td><td>
                                				<select name="GridViewStudents$ctl08$ddlbFieldofStudy" id="GridViewStudents_ctl08_ddlbFieldofStudy">
					<option selected="selected" value="0"> </option>
					<option value="1">Agriculture or Forestry</option>
					<option value="2">Architecture</option>
					<option value="9">Accounting</option>
					<option value="10">Business Administration</option>
					<option value="3">Commerce</option>
					<option value="4">Economics</option>
					<option value="5">Entrepreneurship</option>
					<option value="6">Finance</option>
					<option value="7">Hospitality</option>
					<option value="8">Management</option>
					<option value="11">Marketing/Advertising</option>
					<option value="12">Public Administration</option>
					<option value="13">Communication</option>
					<option value="14">Computer/Information Sciences</option>
					<option value="15">Education</option>
					<option value="16"> Aerospace Engineering</option>
					<option value="17"> Agricultural Engineering</option>
					<option value="18"> Bioengineering</option>
					<option value="20"> Chemical Engineering</option>
					<option value="19"> Civil Engineering</option>
					<option value="21"> Computer Engineering</option>
					<option value="22"> Electrical Engineering</option>
					<option value="23"> Environmental Engineering</option>
					<option value="24"> Industrial Engineering</option>
					<option value="25"> Mechanical Engineering</option>
					<option value="32">Law</option>
					<option value="26">Liberal Arts</option>
					<option value="27">Mathematics</option>
					<option value="28">Medical-Related or Health Sciences </option>
					<option value="30">Psychology</option>
					<option value="31">Social Sciences or Humanities</option>
					<option value="29">Other</option>

				</select>
                                				<span id="GridViewStudents_ctl08_RequiredFieldValidatorFieldofStudyID" style="color:Red;font-size:9pt;display:none;"><br />Field of Study must be selected</span>
                                				
                                				
                                </td><td>
                                    <select name="GridViewStudents$ctl08$ddlGenderID" id="GridViewStudents_ctl08_ddlGenderID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">Female</option>
					<option value="2">Male</option>

				</select>
                                    
                                    <span id="GridViewStudents_ctl08_RequiredFieldValidatorGenderID" style="color:Red;font-size:9pt;display:none;"><br />Gender must be selected</span>
                                </td><td>
                                    <input name="GridViewStudents$ctl08$txtGraduationYear" type="text" maxlength="4" id="GridViewStudents_ctl08_txtGraduationYear" style="font-size:9pt;width:50px;" />
                                    
                                    
                                </td><td>
                                    <input name="GridViewStudents$ctl08$txtEmailAddress" type="text" maxlength="100" id="GridViewStudents_ctl08_txtEmailAddress" style="font-size:9pt;" />
                                    <span id="GridViewStudents_ctl08_RegularExpressionValidator1" style="color:Red;font-size:9pt;display:none;"><br />Invalid email address was entered.</span>
                                    
                                       <span id="GridViewStudents_ctl08_RequiredFieldValidatorEmail" style="color:Red;font-size:9pt;display:none;"><br />Email cannot be blank</span>
                                    
                                    
                                </td><td>
                                    <input name="GridViewStudents$ctl08$txtHoursInvolvement" type="text" maxlength="4" id="GridViewStudents_ctl08_txtHoursInvolvement" style="font-size:9pt;width:100px;" />
                                    
                                    
                                        
                                        <span id="GridViewStudents_ctl08_RequiredFieldValidatorHoursInvolvement" style="color:Red;font-size:9pt;display:none;"><br />Hours of Enactus Involvemen cannot be blank.</span>
                                        
                                        
                                        
                                </td>
			</tr><tr style="background-color:White;">
				<td align="center" style="width:30px;">
                                    <span style="font-size: 9pt;">
                                        8.</span>
                                    
                                    
                                </td><td>
                                    <input type="submit" name="GridViewStudents$ctl09$btnDeleteStudent" value="Delete" onclick="javascript:return confirm('Are you sure you want to delete this record?');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;GridViewStudents$ctl09$btnDeleteStudent&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="GridViewStudents_ctl09_btnDeleteStudent" class="button" />
                                </td><td>
                                    <input name="GridViewStudents$ctl09$txtStudentName" type="text" maxlength="100" id="GridViewStudents_ctl09_txtStudentName" style="font-size:9pt;" />
                                    <span id="GridViewStudents_ctl09_RequiredFieldValidatorStudentName" style="color:Red;font-size:9pt;display:none;"><br />Student Name cannot be blank.</span>
                                </td><td>
                                    <select name="GridViewStudents$ctl09$ddlAcademicYearID" id="GridViewStudents_ctl09_ddlAcademicYearID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">1st Year</option>
					<option value="2">2nd Year</option>
					<option value="3">3rd Year</option>
					<option value="4">4th Year</option>
					<option value="5">5th Year</option>
					<option value="6">6th Year</option>
					<option value="7">7th Year</option>
					<option value="8">8th Year</option>

				</select>
                                    
                                </td><td>
																																				<select name="GridViewStudents$ctl09$ddlbDegree" id="GridViewStudents_ctl09_ddlbDegree">
					<option selected="selected" value="0"> </option>
					<option value="1">Undergraduated</option>
					<option value="2">Master’s Degree </option>
					<option value="3">PHD/Doctorate</option>
					<option value="4">Other</option>

				</select>
																																				
																																				<span id="GridViewStudents_ctl09_RequiredFieldValidatorDegree" style="color:Red;font-size:9pt;display:none;"><br />Degree must be selected</span>
																																				
																																</td><td>
                                				<select name="GridViewStudents$ctl09$ddlbFieldofStudy" id="GridViewStudents_ctl09_ddlbFieldofStudy">
					<option selected="selected" value="0"> </option>
					<option value="1">Agriculture or Forestry</option>
					<option value="2">Architecture</option>
					<option value="9">Accounting</option>
					<option value="10">Business Administration</option>
					<option value="3">Commerce</option>
					<option value="4">Economics</option>
					<option value="5">Entrepreneurship</option>
					<option value="6">Finance</option>
					<option value="7">Hospitality</option>
					<option value="8">Management</option>
					<option value="11">Marketing/Advertising</option>
					<option value="12">Public Administration</option>
					<option value="13">Communication</option>
					<option value="14">Computer/Information Sciences</option>
					<option value="15">Education</option>
					<option value="16"> Aerospace Engineering</option>
					<option value="17"> Agricultural Engineering</option>
					<option value="18"> Bioengineering</option>
					<option value="20"> Chemical Engineering</option>
					<option value="19"> Civil Engineering</option>
					<option value="21"> Computer Engineering</option>
					<option value="22"> Electrical Engineering</option>
					<option value="23"> Environmental Engineering</option>
					<option value="24"> Industrial Engineering</option>
					<option value="25"> Mechanical Engineering</option>
					<option value="32">Law</option>
					<option value="26">Liberal Arts</option>
					<option value="27">Mathematics</option>
					<option value="28">Medical-Related or Health Sciences </option>
					<option value="30">Psychology</option>
					<option value="31">Social Sciences or Humanities</option>
					<option value="29">Other</option>

				</select>
                                				<span id="GridViewStudents_ctl09_RequiredFieldValidatorFieldofStudyID" style="color:Red;font-size:9pt;display:none;"><br />Field of Study must be selected</span>
                                				
                                				
                                </td><td>
                                    <select name="GridViewStudents$ctl09$ddlGenderID" id="GridViewStudents_ctl09_ddlGenderID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">Female</option>
					<option value="2">Male</option>

				</select>
                                    
                                    <span id="GridViewStudents_ctl09_RequiredFieldValidatorGenderID" style="color:Red;font-size:9pt;display:none;"><br />Gender must be selected</span>
                                </td><td>
                                    <input name="GridViewStudents$ctl09$txtGraduationYear" type="text" maxlength="4" id="GridViewStudents_ctl09_txtGraduationYear" style="font-size:9pt;width:50px;" />
                                    
                                    
                                </td><td>
                                    <input name="GridViewStudents$ctl09$txtEmailAddress" type="text" maxlength="100" id="GridViewStudents_ctl09_txtEmailAddress" style="font-size:9pt;" />
                                    <span id="GridViewStudents_ctl09_RegularExpressionValidator1" style="color:Red;font-size:9pt;display:none;"><br />Invalid email address was entered.</span>
                                    
                                       <span id="GridViewStudents_ctl09_RequiredFieldValidatorEmail" style="color:Red;font-size:9pt;display:none;"><br />Email cannot be blank</span>
                                    
                                    
                                </td><td>
                                    <input name="GridViewStudents$ctl09$txtHoursInvolvement" type="text" maxlength="4" id="GridViewStudents_ctl09_txtHoursInvolvement" style="font-size:9pt;width:100px;" />
                                    
                                    
                                        
                                        <span id="GridViewStudents_ctl09_RequiredFieldValidatorHoursInvolvement" style="color:Red;font-size:9pt;display:none;"><br />Hours of Enactus Involvemen cannot be blank.</span>
                                        
                                        
                                        
                                </td>
			</tr><tr style="background-color:#EEEEEE;">
				<td align="center" style="width:30px;">
                                    <span style="font-size: 9pt;">
                                        9.</span>
                                    
                                    
                                </td><td>
                                    <input type="submit" name="GridViewStudents$ctl10$btnDeleteStudent" value="Delete" onclick="javascript:return confirm('Are you sure you want to delete this record?');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;GridViewStudents$ctl10$btnDeleteStudent&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="GridViewStudents_ctl10_btnDeleteStudent" class="button" />
                                </td><td>
                                    <input name="GridViewStudents$ctl10$txtStudentName" type="text" maxlength="100" id="GridViewStudents_ctl10_txtStudentName" style="font-size:9pt;" />
                                    <span id="GridViewStudents_ctl10_RequiredFieldValidatorStudentName" style="color:Red;font-size:9pt;display:none;"><br />Student Name cannot be blank.</span>
                                </td><td>
                                    <select name="GridViewStudents$ctl10$ddlAcademicYearID" id="GridViewStudents_ctl10_ddlAcademicYearID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">1st Year</option>
					<option value="2">2nd Year</option>
					<option value="3">3rd Year</option>
					<option value="4">4th Year</option>
					<option value="5">5th Year</option>
					<option value="6">6th Year</option>
					<option value="7">7th Year</option>
					<option value="8">8th Year</option>

				</select>
                                    
                                </td><td>
																																				<select name="GridViewStudents$ctl10$ddlbDegree" id="GridViewStudents_ctl10_ddlbDegree">
					<option selected="selected" value="0"> </option>
					<option value="1">Undergraduated</option>
					<option value="2">Master’s Degree </option>
					<option value="3">PHD/Doctorate</option>
					<option value="4">Other</option>

				</select>
																																				
																																				<span id="GridViewStudents_ctl10_RequiredFieldValidatorDegree" style="color:Red;font-size:9pt;display:none;"><br />Degree must be selected</span>
																																				
																																</td><td>
                                				<select name="GridViewStudents$ctl10$ddlbFieldofStudy" id="GridViewStudents_ctl10_ddlbFieldofStudy">
					<option selected="selected" value="0"> </option>
					<option value="1">Agriculture or Forestry</option>
					<option value="2">Architecture</option>
					<option value="9">Accounting</option>
					<option value="10">Business Administration</option>
					<option value="3">Commerce</option>
					<option value="4">Economics</option>
					<option value="5">Entrepreneurship</option>
					<option value="6">Finance</option>
					<option value="7">Hospitality</option>
					<option value="8">Management</option>
					<option value="11">Marketing/Advertising</option>
					<option value="12">Public Administration</option>
					<option value="13">Communication</option>
					<option value="14">Computer/Information Sciences</option>
					<option value="15">Education</option>
					<option value="16"> Aerospace Engineering</option>
					<option value="17"> Agricultural Engineering</option>
					<option value="18"> Bioengineering</option>
					<option value="20"> Chemical Engineering</option>
					<option value="19"> Civil Engineering</option>
					<option value="21"> Computer Engineering</option>
					<option value="22"> Electrical Engineering</option>
					<option value="23"> Environmental Engineering</option>
					<option value="24"> Industrial Engineering</option>
					<option value="25"> Mechanical Engineering</option>
					<option value="32">Law</option>
					<option value="26">Liberal Arts</option>
					<option value="27">Mathematics</option>
					<option value="28">Medical-Related or Health Sciences </option>
					<option value="30">Psychology</option>
					<option value="31">Social Sciences or Humanities</option>
					<option value="29">Other</option>

				</select>
                                				<span id="GridViewStudents_ctl10_RequiredFieldValidatorFieldofStudyID" style="color:Red;font-size:9pt;display:none;"><br />Field of Study must be selected</span>
                                				
                                				
                                </td><td>
                                    <select name="GridViewStudents$ctl10$ddlGenderID" id="GridViewStudents_ctl10_ddlGenderID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">Female</option>
					<option value="2">Male</option>

				</select>
                                    
                                    <span id="GridViewStudents_ctl10_RequiredFieldValidatorGenderID" style="color:Red;font-size:9pt;display:none;"><br />Gender must be selected</span>
                                </td><td>
                                    <input name="GridViewStudents$ctl10$txtGraduationYear" type="text" maxlength="4" id="GridViewStudents_ctl10_txtGraduationYear" style="font-size:9pt;width:50px;" />
                                    
                                    
                                </td><td>
                                    <input name="GridViewStudents$ctl10$txtEmailAddress" type="text" maxlength="100" id="GridViewStudents_ctl10_txtEmailAddress" style="font-size:9pt;" />
                                    <span id="GridViewStudents_ctl10_RegularExpressionValidator1" style="color:Red;font-size:9pt;display:none;"><br />Invalid email address was entered.</span>
                                    
                                       <span id="GridViewStudents_ctl10_RequiredFieldValidatorEmail" style="color:Red;font-size:9pt;display:none;"><br />Email cannot be blank</span>
                                    
                                    
                                </td><td>
                                    <input name="GridViewStudents$ctl10$txtHoursInvolvement" type="text" maxlength="4" id="GridViewStudents_ctl10_txtHoursInvolvement" style="font-size:9pt;width:100px;" />
                                    
                                    
                                        
                                        <span id="GridViewStudents_ctl10_RequiredFieldValidatorHoursInvolvement" style="color:Red;font-size:9pt;display:none;"><br />Hours of Enactus Involvemen cannot be blank.</span>
                                        
                                        
                                        
                                </td>
			</tr><tr style="background-color:White;">
				<td align="center" style="width:30px;">
                                    <span style="font-size: 9pt;">
                                        10.</span>
                                    
                                    
                                </td><td>
                                    <input type="submit" name="GridViewStudents$ctl11$btnDeleteStudent" value="Delete" onclick="javascript:return confirm('Are you sure you want to delete this record?');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;GridViewStudents$ctl11$btnDeleteStudent&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="GridViewStudents_ctl11_btnDeleteStudent" class="button" />
                                </td><td>
                                    <input name="GridViewStudents$ctl11$txtStudentName" type="text" maxlength="100" id="GridViewStudents_ctl11_txtStudentName" style="font-size:9pt;" />
                                    <span id="GridViewStudents_ctl11_RequiredFieldValidatorStudentName" style="color:Red;font-size:9pt;display:none;"><br />Student Name cannot be blank.</span>
                                </td><td>
                                    <select name="GridViewStudents$ctl11$ddlAcademicYearID" id="GridViewStudents_ctl11_ddlAcademicYearID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">1st Year</option>
					<option value="2">2nd Year</option>
					<option value="3">3rd Year</option>
					<option value="4">4th Year</option>
					<option value="5">5th Year</option>
					<option value="6">6th Year</option>
					<option value="7">7th Year</option>
					<option value="8">8th Year</option>

				</select>
                                    
                                </td><td>
																																				<select name="GridViewStudents$ctl11$ddlbDegree" id="GridViewStudents_ctl11_ddlbDegree">
					<option selected="selected" value="0"> </option>
					<option value="1">Undergraduated</option>
					<option value="2">Master’s Degree </option>
					<option value="3">PHD/Doctorate</option>
					<option value="4">Other</option>

				</select>
																																				
																																				<span id="GridViewStudents_ctl11_RequiredFieldValidatorDegree" style="color:Red;font-size:9pt;display:none;"><br />Degree must be selected</span>
																																				
																																</td><td>
                                				<select name="GridViewStudents$ctl11$ddlbFieldofStudy" id="GridViewStudents_ctl11_ddlbFieldofStudy">
					<option selected="selected" value="0"> </option>
					<option value="1">Agriculture or Forestry</option>
					<option value="2">Architecture</option>
					<option value="9">Accounting</option>
					<option value="10">Business Administration</option>
					<option value="3">Commerce</option>
					<option value="4">Economics</option>
					<option value="5">Entrepreneurship</option>
					<option value="6">Finance</option>
					<option value="7">Hospitality</option>
					<option value="8">Management</option>
					<option value="11">Marketing/Advertising</option>
					<option value="12">Public Administration</option>
					<option value="13">Communication</option>
					<option value="14">Computer/Information Sciences</option>
					<option value="15">Education</option>
					<option value="16"> Aerospace Engineering</option>
					<option value="17"> Agricultural Engineering</option>
					<option value="18"> Bioengineering</option>
					<option value="20"> Chemical Engineering</option>
					<option value="19"> Civil Engineering</option>
					<option value="21"> Computer Engineering</option>
					<option value="22"> Electrical Engineering</option>
					<option value="23"> Environmental Engineering</option>
					<option value="24"> Industrial Engineering</option>
					<option value="25"> Mechanical Engineering</option>
					<option value="32">Law</option>
					<option value="26">Liberal Arts</option>
					<option value="27">Mathematics</option>
					<option value="28">Medical-Related or Health Sciences </option>
					<option value="30">Psychology</option>
					<option value="31">Social Sciences or Humanities</option>
					<option value="29">Other</option>

				</select>
                                				<span id="GridViewStudents_ctl11_RequiredFieldValidatorFieldofStudyID" style="color:Red;font-size:9pt;display:none;"><br />Field of Study must be selected</span>
                                				
                                				
                                </td><td>
                                    <select name="GridViewStudents$ctl11$ddlGenderID" id="GridViewStudents_ctl11_ddlGenderID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">Female</option>
					<option value="2">Male</option>

				</select>
                                    
                                    <span id="GridViewStudents_ctl11_RequiredFieldValidatorGenderID" style="color:Red;font-size:9pt;display:none;"><br />Gender must be selected</span>
                                </td><td>
                                    <input name="GridViewStudents$ctl11$txtGraduationYear" type="text" maxlength="4" id="GridViewStudents_ctl11_txtGraduationYear" style="font-size:9pt;width:50px;" />
                                    
                                    
                                </td><td>
                                    <input name="GridViewStudents$ctl11$txtEmailAddress" type="text" maxlength="100" id="GridViewStudents_ctl11_txtEmailAddress" style="font-size:9pt;" />
                                    <span id="GridViewStudents_ctl11_RegularExpressionValidator1" style="color:Red;font-size:9pt;display:none;"><br />Invalid email address was entered.</span>
                                    
                                       <span id="GridViewStudents_ctl11_RequiredFieldValidatorEmail" style="color:Red;font-size:9pt;display:none;"><br />Email cannot be blank</span>
                                    
                                    
                                </td><td>
                                    <input name="GridViewStudents$ctl11$txtHoursInvolvement" type="text" maxlength="4" id="GridViewStudents_ctl11_txtHoursInvolvement" style="font-size:9pt;width:100px;" />
                                    
                                    
                                        
                                        <span id="GridViewStudents_ctl11_RequiredFieldValidatorHoursInvolvement" style="color:Red;font-size:9pt;display:none;"><br />Hours of Enactus Involvemen cannot be blank.</span>
                                        
                                        
                                        
                                </td>
			</tr><tr style="background-color:#EEEEEE;">
				<td align="center" style="width:30px;">
                                    <span style="font-size: 9pt;">
                                        11.</span>
                                    
                                    
                                </td><td>
                                    <input type="submit" name="GridViewStudents$ctl12$btnDeleteStudent" value="Delete" onclick="javascript:return confirm('Are you sure you want to delete this record?');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;GridViewStudents$ctl12$btnDeleteStudent&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="GridViewStudents_ctl12_btnDeleteStudent" class="button" />
                                </td><td>
                                    <input name="GridViewStudents$ctl12$txtStudentName" type="text" maxlength="100" id="GridViewStudents_ctl12_txtStudentName" style="font-size:9pt;" />
                                    <span id="GridViewStudents_ctl12_RequiredFieldValidatorStudentName" style="color:Red;font-size:9pt;display:none;"><br />Student Name cannot be blank.</span>
                                </td><td>
                                    <select name="GridViewStudents$ctl12$ddlAcademicYearID" id="GridViewStudents_ctl12_ddlAcademicYearID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">1st Year</option>
					<option value="2">2nd Year</option>
					<option value="3">3rd Year</option>
					<option value="4">4th Year</option>
					<option value="5">5th Year</option>
					<option value="6">6th Year</option>
					<option value="7">7th Year</option>
					<option value="8">8th Year</option>

				</select>
                                    
                                </td><td>
																																				<select name="GridViewStudents$ctl12$ddlbDegree" id="GridViewStudents_ctl12_ddlbDegree">
					<option selected="selected" value="0"> </option>
					<option value="1">Undergraduated</option>
					<option value="2">Master’s Degree </option>
					<option value="3">PHD/Doctorate</option>
					<option value="4">Other</option>

				</select>
																																				
																																				<span id="GridViewStudents_ctl12_RequiredFieldValidatorDegree" style="color:Red;font-size:9pt;display:none;"><br />Degree must be selected</span>
																																				
																																</td><td>
                                				<select name="GridViewStudents$ctl12$ddlbFieldofStudy" id="GridViewStudents_ctl12_ddlbFieldofStudy">
					<option selected="selected" value="0"> </option>
					<option value="1">Agriculture or Forestry</option>
					<option value="2">Architecture</option>
					<option value="9">Accounting</option>
					<option value="10">Business Administration</option>
					<option value="3">Commerce</option>
					<option value="4">Economics</option>
					<option value="5">Entrepreneurship</option>
					<option value="6">Finance</option>
					<option value="7">Hospitality</option>
					<option value="8">Management</option>
					<option value="11">Marketing/Advertising</option>
					<option value="12">Public Administration</option>
					<option value="13">Communication</option>
					<option value="14">Computer/Information Sciences</option>
					<option value="15">Education</option>
					<option value="16"> Aerospace Engineering</option>
					<option value="17"> Agricultural Engineering</option>
					<option value="18"> Bioengineering</option>
					<option value="20"> Chemical Engineering</option>
					<option value="19"> Civil Engineering</option>
					<option value="21"> Computer Engineering</option>
					<option value="22"> Electrical Engineering</option>
					<option value="23"> Environmental Engineering</option>
					<option value="24"> Industrial Engineering</option>
					<option value="25"> Mechanical Engineering</option>
					<option value="32">Law</option>
					<option value="26">Liberal Arts</option>
					<option value="27">Mathematics</option>
					<option value="28">Medical-Related or Health Sciences </option>
					<option value="30">Psychology</option>
					<option value="31">Social Sciences or Humanities</option>
					<option value="29">Other</option>

				</select>
                                				<span id="GridViewStudents_ctl12_RequiredFieldValidatorFieldofStudyID" style="color:Red;font-size:9pt;display:none;"><br />Field of Study must be selected</span>
                                				
                                				
                                </td><td>
                                    <select name="GridViewStudents$ctl12$ddlGenderID" id="GridViewStudents_ctl12_ddlGenderID" style="font-size:9pt;">
					<option selected="selected" value="0"></option>
					<option value="1">Female</option>
					<option value="2">Male</option>

				</select>
                                    
                                    <span id="GridViewStudents_ctl12_RequiredFieldValidatorGenderID" style="color:Red;font-size:9pt;display:none;"><br />Gender must be selected</span>
                                </td><td>
                                    <input name="GridViewStudents$ctl12$txtGraduationYear" type="text" maxlength="4" id="GridViewStudents_ctl12_txtGraduationYear" style="font-size:9pt;width:50px;" />
                                    
                                    
                                </td><td>
                                    <input name="GridViewStudents$ctl12$txtEmailAddress" type="text" maxlength="100" id="GridViewStudents_ctl12_txtEmailAddress" style="font-size:9pt;" />
                                    <span id="GridViewStudents_ctl12_RegularExpressionValidator1" style="color:Red;font-size:9pt;display:none;"><br />Invalid email address was entered.</span>
                                    
                                       <span id="GridViewStudents_ctl12_RequiredFieldValidatorEmail" style="color:Red;font-size:9pt;display:none;"><br />Email cannot be blank</span>
                                    
                                    
                                </td><td>
                                    <input name="GridViewStudents$ctl12$txtHoursInvolvement" type="text" maxlength="4" id="GridViewStudents_ctl12_txtHoursInvolvement" style="font-size:9pt;width:100px;" />
                                    
                                    
                                        
                                        <span id="GridViewStudents_ctl12_RequiredFieldValidatorHoursInvolvement" style="color:Red;font-size:9pt;display:none;"><br />Hours of Enactus Involvemen cannot be blank.</span>
                                        
                                        
                                        
                                </td>
			</tr>
		</table>
	</div>
                    <table width="900px">
                        <tr>
                            <td>
                            </td>
                            <td align="left" width="300px">
                                
                                <input type="submit" name="btnContinue2" value="Save and Continue" id="btnContinue2" class="button" />
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td>
                                &nbsp;</td>
                            <td align="left" width="300px">
                                
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
