<?php

Trait A {
    public function dev() {
        return "I am from dev A";
    }
}

class B {
    public function food() {
        return "I am from B";
    }
}
class C extends B {
    use A;
}

$c = new C;

echo $c ->dev();
