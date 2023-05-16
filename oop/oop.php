<?php

class oop
{
    public function publicmethod(){
        echo "ini adalah OOP metode publik";
    }
    protected function protectedmethod(){
        echo "ini adalah OOP metode protected";
    } 

    private function privateMethod()
    {
echo "ini adalah oop metode privat";
    }
    public function accesmethodOOP()
    {
        $this->publicmethod();
        echo"<br>";
        $this->protectedmethod();
        echo"<br>";
        $this->privatemethod();
    }
}
 $oop = new OOP();
 $oop = publicmethod();
 echo "<br>";
 $oop->accessmethodOOP();