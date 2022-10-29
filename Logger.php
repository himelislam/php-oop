<?php

interface Logger {
    public function execute($message);
}

class LogToFile implements Logger {
    public function execute($message){
        var_dump('Log the message to a file '. $message);
    }
}

class LogToDatabase implements Logger {
    public function execute($message){
        var_dump('Log the messege to a Database :' . $message);
    }
}


//>...

class UsersControler{
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger; 
    }

    public function show(){
        $user = 'Himel';

        $this->logger->execute($user);
    }
}

$controller = new UsersControler(new LogToDatabase);
$controller->show();