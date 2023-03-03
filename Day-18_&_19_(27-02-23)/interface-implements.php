<?php

class Student {
    private  $name = 'Obaydul';
    private  $age = 30;
    private  $skill = "js Developer";

    /**
     * Set Student Name
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Set Age chain
     */

     public function setAge($age) {
        $this->age = $age;
        return $this;
     }

    /**
     * Set skill chain
     */
     public function setSkill($skill) {
        $this->skill = $skill;
        return $this;
     }

    /**
     * Info Methods
     * 
     */
    public function info() {
        return "My Name is {$this->name} & I am {$this->age} year old and I am {$this->skill}.";
    }
}

$stu = new Student;

echo $stu -> setSkill('PHP Developer') -> setAge(20)-> setName('Rifat')->info();