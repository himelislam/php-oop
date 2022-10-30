<?php

interface CanBeFiltered {
    public function filter();
}

class Favourite implements CanBeFiltered {
    public function filter()
    {
        
    }
}

class Unwatched implements CanBeFiltered {
    public function filter()
    {
        
    }
}

class Difficulty implements CanBeFiltered {
    public function filter()
    {
        
    }
}