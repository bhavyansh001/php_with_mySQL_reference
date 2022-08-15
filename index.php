<?php

    $server = 'localhost';
    $username= 'root';
    $password = '';

    $con = mysqli_connect($server, $username, $password);

    // if(!$con){
    //     die('Connection to this database failed due to '. mysqli_connect_error());
    //     }
    //     // echo 'Page submission successful';

        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $other = $_POST['other'];

        $sql = "INSERT INTO `db_form` . `db_form_table` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
        // echo $sql;

        if($con->query($sql) == true){
            // echo 'Successfully inserted';
        }
        else{
            // echo "ERROR: $sql <br> $con->error";
        }

        $con->close();
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
    <style>
        * {
            margin-top: 0%;
        }
        .container{
            background-color: aquamarine;
            text-align: center;
            margin: 0%;
            padding: 2% 0% 4% 0%;
            box-sizing: border-box;
            font-size: 20px;
            
        }
        input, textarea{
            width: 80%;
            margin-top: 12px;
            padding: 8px;
            font-size: 18px;
            border: 2px solid grey;
        }
        .btn{
            margin: 0px 10%;
            background-color: #f1e6de;
            padding: 5px;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }
        .btn:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }
    </style>
</head>
<body>
    <!-- <div class="container">
        This is my first PHP website.
        <?php
        //     define('z', 99);

        // echo "Printed using php";

        // $variable1 = 23;
        // $variable2 = 32;
        // echo '<br>';
        // echo $variable1 + $variable2;

        // echo '<br>';

        // echo '<h3>Hello this is a heading</h3>';
        // echo '<br>';
        // $va = $variable2;
        // echo 'The value of new variable is ';
        // echo $va;
        // echo '<br>';

        // echo $variable2--;
        // echo '<br>';
        // echo --$variable2;
        // echo '<br>';
        
        // $a = (1<4 || 2>3); //or also could be used. more that can be used are- and, &&, xor, !.
        // echo var_dump($a);

        // //Data types
        // // 1. String
        // // 2. Integer
        // // 3. Float
        // // 4. Boolean
        // // 5. Array
        // // 6. Object

        // //Constants best defined at the top
        // echo '<br>';
        // echo z;
        // echo '<br>';

        // //Conditionals
        // $age = 199;
        // if ($age<18){
        //     echo 'You are ', $age;
        // }
        // else {
        //     echo 'You are not 18';
        // }
        // echo '<br>';

        // $languages = array('Ruby', 'Python', 'C++', 'NodeJs');
        // echo $languages[0];
        // echo '<br>';

        // echo count($languages);
        // echo '<br>';

        // //Loops also similar to other languages

        // $a = 0;
        // while ($a < count($languages)) {
        //     echo 'The value of language is: ';
        //     echo $languages[$a];
        //     echo '<br>';
        //     $a++;
        // }

        // for($a=0; $a<5; $a++){
        //     echo $a;
        // }
        // echo '<br>';
        // foreach($languages as $value){
        //     echo 'The value from foreach is: ';
        //     echo $value;
        //     lB();
        // }
        // echo '<br>';

        // function lB(){
        //     echo '<br>';
        // }
        // lB();

        // function printNumber($num){
        //     echo 'The number is:';
        //     echo $num;
        // }

        // printNumber(23);
        // lB();

        // $string = 'A string A';
        // echo $string;
        // lB();
        // $length = strlen($string);
        // echo 'The length of string is '.
        // $length , 
        // lB() , 
        // 'and the number of words in this string is: '.
        // str_word_count($string),lB().
        // 'and the reversed string is: '.'"'.
        // strrev($string).'"'.
        // 'The position of "r" in this string is: '. strpos($string, 'r<br>').
        // 'The replaced string is: '. str_replace('A', 'The', $string);
        ?>
    </div> -->
    <div class="container">
        <h3>Fill this form to confirm your participation.</h3>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">

            <input type="text" name="age" id="age" placeholder="Enter your age">

            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="text" name="email" id="email" placeholder="Enter your email">
            <input type="text" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter any additional information"></textarea><br>
            <button class="btn" style="float: left;">Submit</button>
        </form>
    </div>
    
</body>
</html>