<html>
    <header><title>Grading System</title></header>
    <body>
        <p>Check Student Grade</p>
        <form action="Grading_System.php" method="post">
            Grade : <input type="number" name="grade" placeholder="Input grade here." step="0.01">
            <input type="submit">
        </form>
    </body>
    <?php
            
            $grade = $_POST['grade'];

            echo "Grade Output";
            echo "<br>";

            if($grade <= 100 AND $grade >= 0){
                if($grade >= 70 ){
                    echo $grade."% The student PASSED";
                }elseif($grade >= 60){
                    echo $grade."% Student student will take REMEDIAL";
                }else{
                    echo $grade."% The student FAILED";
                }
            }else{
                echo $grade." The input grade is invalid please enter a valid input";
            }
    ?>
</html>