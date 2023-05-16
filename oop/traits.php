<?php

class notification {
    const OOP = "OOP is so funny";
}

trait learn
{
    public function learnOOP()
    {
        echo notification::OOP;
    }
}

class learntoday
{
    use learn;
}