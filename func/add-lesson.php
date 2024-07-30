<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $topic = $_POST["topic"];
        $content = $_POST["content"];

        if ($_FILES['attachment']["name"] != "") {
            // A file was uploaded
            $file_name = $_FILES['attachment']['name'];
            $file_size = $_FILES['attachment']['size'];
            $file_tmp = $_FILES['attachment']['tmp_name'];
            $file_format = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
            if ($file_format != "zip") {
                $_SESSION["alert"] =  "Sorry, only zipped files (.zip) are allowed.";
                header("location: add-lesson");
                exit;
            }
            if (($file_size > (10 * 1024 * 1024 * 1024)) || ($file_size < 0)) {
                $_SESSION["alert"] = "Your file must be at most 100mb";
                header("location: add-lesson");
                exit;
            }

            $attachment_name = "attachments/RSU-E-LEARNING-" . date("Y-m-d-h:i:sa") . rand(0, 999999) . ".zip";
            move_uploaded_file($file_tmp, $attachment_name);
        } else {
            // No file was uploaded
            $attachment_name = null;
        }
        $update_lesson = "INSERT INTO lessons (lecturer_id, faculty_id, department_id, course_id, topic, content, attachment) VALUES ('$lecturer_id', '$faculty_id', '$department_id', '$course_id', '$topic', '$content', '$attachment_name')";
        if (mysqli_query($con, $update_lesson)) {
            $_SESSION["alert"] = "Lesson Added";
        } else {
            $_SESSION["alert"] = "An error occured, could not add new lesson";
        }
        header("location: lesson");
        exit;
    } catch (Exception $e) {
        $_SESSION["alert"] = "Cannot upload your attachment due to errors.";
        header("location: add-lesson");
        exit;
    }
}
