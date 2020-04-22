<!DOCTYPE html>
<html>
    <head>
        <title>quiz</title>
    </head>
    <body>
        
        <?php
    
        $answer1 = $_POST['question_1_answers'];
        $answer2 = $_POST['question_2_answers'];
        $answer3 = $_POST['question_3_answers'];
        $answer4 = $_POST['question_4_answers'];
        $answer5 = $_POST['question_5_answers'];
        $answer5 = $_POST['question_6_answers'];
        $answer5 = $_POST['question_7_answers'];
        $answer5 = $_POST['question_8_answers'];
        $answer5 = $_POST['question_9_answers'];
        $answer5 = $_POST['question_10_answers'];

        $totalCorrect = 0;

        if ($answer1 == "A") { $totalCorrect++; }
        if ($answer2 == "C") { $totalCorrect++; }
        if ($answer3 == "C") { $totalCorrect++; }
        if ($answer4 == "B") { $totalCorrect++; }
        if ($answer5 == "A") { $totalCorrect++; }
        if ($answer6 == "B") { $totalCorrect++; }
        if ($answer7 == "C") { $totalCorrect++; }
        if ($answer8 == "A") { $totalCorrect++; }
        if ($answer9 == "B") { $totalCorrect++; }
        if ($answer10 == "B") { $totalCorrect++; }

        <?php echo $totalCorrect / 10 correct</section>; ?>
    
        ?>
    </body>
</html>