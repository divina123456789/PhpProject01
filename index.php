<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
        use Classic\MyClass\Child as OtherThing;
        require_once 'Class.php';
       echo "Hello";
       $child=new OtherThing();
       $child->myEcho();
       $child->myFunction();
       echo '  <br>';
       $child->traitFunction();
       
       echo '<br>'.$child->parentString();
       echo 'something new';
       try{
       $myException=new Classic\MyClass\MyException();
       $myException->tryException();
       }
       catch(Exception $e){
           echo $e->getMessage();
       }
       ?>
    </body>
</html>
