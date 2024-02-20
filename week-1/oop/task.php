<?php
// task management system

// create task
// no usages
class Task{
    public $name; //visible
    private $status; //
    protected static $members=[];
    public function setName($name){
        $this ->name = $name;

    }

    public function changeStatus($status){
        $this ->status = $status;
    }
    public function _destruct(){
        //toto: implement _destruct() method
    }
}
// no usages
class Member{

}

$task_one = new Task();
$task_one = new Task();