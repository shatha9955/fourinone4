<?php
// تضمين ملف اتصال قاعدة البيانات
include "connect.php";

//  URLتحقق اذا كان معرف المهمه موجود في عنوان 
if(isset($_GET['id'])) {
    // URLاحصل على معرف المهمه من عنوان 
    $assignmentId = $_GET['id'];

    // تحديث حالة المهمه في قاعدة البيانات
    $updateQuery = "UPDATE teacher_lesson_assignment SET lesson_status = 'لم يدفع' , Confirm ='قبول' WHERE assignment_id = '$assignmentId'";
    $result = mysqli_query($conn, $updateQuery);

    if($result) {
        // يعيد التوجيه الى الصفحه التي تم ادراج المهام فيها
        header("Location: dashboard.php");
        exit();
    } else {
        echo "حدث خطأ أثناء تحديث حالة الرياضة.";
    }
} else {
    echo "لا يوجد معرف رياضة محدد في عنوان URL.";
}

// اغلق اتصال قاعدة البيانات
mysqli_close($conn);
?>
