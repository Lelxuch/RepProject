<?php
require_once "../../../includes/config.php";

if (isset($_POST['teacher_submit'])) {
	/* personal data */
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$mname = $_POST['mname'];
	$dob_day = $_POST['dob_day'];
	$dob_month = $_POST['dob_month'];
	$dob_year = $_POST['dob_year'];
	$gender = $_POST['gender'];
	/* professional data */
	$career_start_month = $_POST['career_start_month'];
	$career_start_year = $_POST['career_start_year'];
	$karbil_start_month = $_POST['karbil_start_month'];
	$karbil_start_year = $_POST['karbil_start_year'];
	$category = $_POST['category'];
	$position = $_POST['position'];
	$class_teacher = $_POST['class_teacher'];
	/* security data */
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$login = $_POST['login'];
	$password = $_POST['pass'];
	/* check if user with these login and email exists */
	$sql = "SELECT COUNT(*) FROM `security` WHERE `login`=" . $login . " AND `email`=" . $email;
	$user_exists = mysqli_query($connection, $sql);
	if ($user_exists){
		echo "Пользователь с таким логином или почтой уже существует";
		GoToNow("teacher.php");
	}
	else {
		$sql = "INSERT INTO `security`(
				    `login`,
				    `password`,
				    `phone`,
				    `email`,
				    `type`
				)
				VALUES(
					'$login',
					'$password',
					'$phone',
					'$email',
					'teacher'
				)";
		if (mysqli_query($connection, $sql)) {
			$securityID = mysql_insert_id($connection);
			
		}
	}
}
if (isset($_POST['student_submit'])) {
	/* personal data */
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$mname = $_POST['mname'];
	$dob_day = $_POST['dob_day'];
	$dob_month = $_POST['dob_month'];
	$dob_year = $_POST['dob_year'];
	$gender = 1;
	/* study data */
	$student_graduation_year = $_POST['student_graduation_year'];
	$olympiad_subject = $_POST['olympiad_subject'];
	/* security data */
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$login = $_POST['login'];
	$password = $_POST['pass'];
}
?>