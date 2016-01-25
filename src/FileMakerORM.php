<?php
class FileMakerORM extends FilemakerConnect
{
    public $lauyoutName = '';
    
    public $script = '';
    
    protected $create = '';
    
    protected $update = '';
    
    public function __construct($dbConfig = array())
    {
       parent::__construct($dbConfig);
    }
    
    public function setLayout($layout = '')
    {
        $this->lauyoutName = $layout;
    }
    
    public function setScript($script = '')
    {
        $this->script = $script;
    }
    
    public function save()
    {
        
    }
    
    public function where()
    {
        
    }
    
    
    
}