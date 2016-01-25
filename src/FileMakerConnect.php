<?php
/*
 +--------------------------------------------------------------------
 |
 | File    : FileMakerConnect.php
 | Path    : ./FileMakerConnect.php
 | Purpose : Contains all methods for connecting to filemaker
 | Created : 24-jan-2016
 | Author  : Lakin Mohapatra
 | Comments:
 | Last Modified By : Lakin Mohapatra
 | Last Modified Date : 24-jan-206
 |
 +--------------------------------------------------------------------
 */

/**
 * It contains methods used for connecting to FM central server.
 * @see FileMaker
 *
 */
class FileMakerConnect extends FileMaker
{
    /*
    * @var Object - Used to contain filemaker object.
    * 
    */
    protected $fmObj;
    
    /**
    * Used to connect filemaker
    *
    * @param void
    * @return void
    */
    public function __construct($dbConfig = array())
    {
        $this->fmObj = $this->connectFileMaker($dbConfig);
    }
    
    /**
    * Used to connect to filemaker server
    *
    * @param Array $dbConfig - Contains all configs related to filemaker db
    *     Required indexes :
    *     1. database
    *     2. hostname
    *     3.username
    *     4.password
    * @return Boolean  - FMObject if connection successful
    *                    false if filemaker error/connection error
    */
    protected function connectFileMaker($dbConfig = array())
    {
        if (empty($dbConfig)) {
            return false;
        }
        
        return new FileMaker(
            $dbConfig['database'],
            $dbConfig['hostname'],
            $dbConfig['username'],
            $dbConfig['password']
        );
    }
}