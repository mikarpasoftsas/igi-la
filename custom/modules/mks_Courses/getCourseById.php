<?php
$objCourses = BeanFactory::getBean('mks_Courses');
$objCourses->retrieve($_POST['mks_courses_id_c']); 

$arr = array(
				'theory'=>$objCourses->theory,
				'practice'=>$objCourses->practice
);

echo json_encode($arr);
exit;