<?php

echo "submit=".$submit;

if($submit=="Submit")
include('act_save_answer.php');

elseif($submit=="Last")
include('act_last_question.php');

elseif($submit=="Grade")
include('act_grade_quiz.php');


?>