<?php
class Task {
    public $title;
    public $description;
    public $isDone = false;

    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    public function task_done(){
        $this->isDone = true;
    }
}

$task1 = new Task('Learn OOP', 'Thats why I started watching laracasts video so that i Can Learn Php OOP basics');
// var_dump($task1);
// $task1->task_done();
var_dump($task1);
