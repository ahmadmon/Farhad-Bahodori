<?php

// class Animal
// {
//     public $name;
//     public $age;
//     public $sex;
//     public $color;


//     function setAtt($animal_color, $animal_name, $animal_age)
//     {
//         $this->color = $animal_color;
//         $this->age = $animal_age;
//         $this->name = $animal_name;
//     }

//     function getInfo()
//     {
//         echo $this->name . '-';
//         echo $this->color . '-';
//         echo $this->age;
//         return true;
//     }

//     function run()
//     {
//         echo 'run';
//     }

//     function eat()
//     {
//         echo 'eat';
//     }
// }

// $cat = new Animal();


class Animal
{
    public $name;
    public $age;
    public $sex;
    public $color;


    function setAtt($animal_color, $animal_name, $animal_age)
    {
        $this->color = $animal_color;
        $this->age = $animal_age;
        $this->name = $animal_name;
    }

    function getInfo()
    {
        echo $this->name . '-';
        echo $this->color . '-';
        echo $this->age;
        return true;
    }

    function run()
    {
        echo 'run';
    }

    function eat()
    {
        echo 'eat';
    }
}

$cat = new Animal();
