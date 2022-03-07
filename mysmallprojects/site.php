

<html>
<head><title></title>
</head>
<body>
<?php
    $characterName = "John";
    $characterAge = 35;
    echo " There was a man named $characterName <br> ";
    echo "John was $characterAge years old<br>";
    echo("Hello world");
?>
<?php
    $phrase = "TO be or not to be";
    $age = 30;
    $gpa= 30.0;
    $isMale = false;
    echo $phrase;
?>
<?php
     $phrase = "Rabin's Academy";
     echo strtolower("$phrase");
     echo "<br>";
     echo strtoupper("$phrase"),"<br>";
     echo strlen("$phrase"),"<br>";
     echo "$phrase[0]","<br>";
     echo str_replace("Rabin's","Panda",$phrase),"<br>";
     echo substr($phrase,8,3),"<br>";   
?>
<?php
    echo 12+9,"<br>";
    echo 10%3,"<br>";
    ##$num = 10;
    #$num++;
    #$num--;
    #$num +=25
   # echo $num;
   echo abs(-100),"<br>";
   echo round(3.2),"<br>";

?>

   <form action ="site.php" method ="get">
    First Name: <input type="text" name="fname">
    <br>
    Last Name: <input type="text" name="lname">
    <input type = "submit">

   </form>
   <br>
   <?php if(isset($_GET['fname']) && isset($_GET["lname"])): ?>
    <br/>
  Your first name is <?php echo $_GET['fname']; ?><br>
  Your last name is <?php echo $_GET['lname']; ?>

  <?php endif ?>


  <form action ="site.php" method ="get">
    <input type="number" name="num1">
    <br>
    <input type="number" name="num2">
    

    <input type = "submit">
    </form>
    <br>
    <?php 
    if(isset($_GET["num1"]) && isset($_GET["num2"])): 
    ?><br>
    Answer: <?php 
        echo $_GET["num1"] +  $_GET["num2"]
         ?>
        <?php endif ?>

       <br> <form action ="site.php" method ="post">
    Password: <input type="password" name="password">
    <br>
    <input type = "submit">
    </form>
    <br>
    <?php if(isset($_POST["password"])): ?>
    <br>
    Your password: <?php echo $_POST["password"]; ?>
    <?php endif ?>
    <?php 
        $Vampires=array("Damon","Elena","Stefan");
        echo count($Vampires);
        ?>
        <form action ="site.php" method ="post">
    Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
    Apples: <input type="checkbox" name="fruits[]" value="Apples"><br>
   Banana: <input type="checkbox" name="fruits[]" value="banana"><br>
    <br>
    <input type = "submit">
    </form>
    <?php if(isset($_POST["fruits"])): ?>
    <br>
    <?php 
        $fruits=$_POST["fruits"];
        echo $fruits[0];
        ?>
        <?php endif?>
      
        <?php 
            function sayHi($name){
                echo "Hello $name";
            }
            sayHi("Rabin");
        ?>
        <?php function cube($num){
            echo "HEloo";
            return $num*$num*$num;
        }

        echo $cubeResult=cube(3);
        ?>
        <?php 
             $isMale=false;
             if ($isMale){
                echo "You are male";
             }
                else {
                    echo "You are female";
                }
                function getMax($num1,$num2){
                    if($num1>$num2){
                        return "greater number is $num1";
                    }
                    else {
                        return "greater number is $num2";
                    }
                }
                 echo getMax(5,100);
             
        ?>
        <form action="site.php" method="post">
       First number: <input type ="number" step ="0.1" name="num1"><br><br>
                 OP: <input type="text" step ="0.1" name="op"><br><br>
      Second number: <input type ="number" step ="0.1" name="num2"><br><br>
                     <input type ="submit" name="Submit">
        </form>
                <?php 
                if(isset($_POST["Submit"] )){
                   $num1=$_POST["num1"];
                    $op=$_POST["op"];
                    $num2=$_POST["num2"];
                    switch($num1){
                        case 2:
                        echo "You input 2";
                        break;
                        case 3:
                        echo "U input 3";
                        break;
                        
                    }
                   $num2=$_POST["num2"];
                   if ($op=="+"){
                       echo $num1+$num2;
                   }
                }
               /* $index=1;
                do {
                    echo "$index <br>";
                    $index++; 
                }
                    while ($index<=5);
                
                $luckyNum=array(21,14,22,4,5,99);
            }
                for ($i=0;$i<=count($luckyNum);$i++;){
                    echo "$luckynum[$i] <br>";
                }*/
                class Book {
                    var $title;
                    var $author;
                    var $pages;
                    var $gpa;

                    function __construct($atitle,$aauthor,$apages,$agpa){
                        $this->title=$atitle;
                        $this->author=$aauthor;
                        $this->pages=$apages;
                        $this->gpa=$agpa;
                       
                    }
                    function hasHonors(){
                        if($this->gpa>=3.5){
                            echo "true";
                        }
                        echo "false";
                    }
                }
                
                $book1=new Book("Rabin","JK Rowling",400,3.6);
                echo $book1->hasHonors();

              /*$book1=new Book();//objects
                  $book1->title="Harry Potter";
                  $book1->author="JK Rowling";
                  $book1->pages=400;
                
                  echo $book1->author;*/
            
                  
                
                ?>
               

   </body>
   </html>


