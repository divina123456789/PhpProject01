<?php
namespace Classic\MyClass;

trait MyTrai{
    public function traitFunction(){
        echo ' Trait Function';
    }
}

interface MyInsterface{
    public function myInterface();
}
class myParent{
    protected static $myProtectedStatic=11;


    private $myPrivate;
    protected $myProtected="Parent protected";
    
    public function myEcho(){
        echo 'Parent->MY Echo';
    }
    public function parentString(){
        return ' Parent String ';
    }
    public function traitFunction(){
        echo '<br>Not Trai Parent';
    }
}



class Child extends myParent implements MyInsterface{
    use MyTrai;
    
    public function myFunction(){
        echo $this->myProtected.': '.self::$myProtectedStatic;
}

public function parentString() {
    return ' Child String '.parent::parentString();
}
public function myInterface() {
    echo 'Interface is done';
}

public function traitFunction(){
        echo '<br>Not Trai not Parent Child';
    }

}
use Exception;
class MyException{
  public function tryException(){
     
     throw new Exception('Bad things are happening');
     //something
     
     
  }  
    
}