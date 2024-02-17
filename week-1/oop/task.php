<?php
// task management system

// create task
// no usages
class Task{
    public $name; //visible
    private $status; //
    protected $members=[];
    public function setName($name){
        $this ->name = $name;

    }

    public function changeStatus($status){
        $this ->status = $status;
    }
}
// no usages
class Member{

}

$task_one = new Task();
$task_one = new Task();