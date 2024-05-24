<?php
$action = $_REQUEST["action"];

// create question class object
if (!empty($action)) {
    include '../includes/question_sql.php';
    $obj = new question();
}

// questions action
if ($action == "getQuestions") {
    $questions = $obj->getQuestions();
    echo json_encode($questions);
    exit();
}