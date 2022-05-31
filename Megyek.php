<?php
include_once('Application.php');

class Megyek extends Application
{
    private $sql = array(
        'allMegye' => 'select * from megye;'
    );

    public function __construct()
    {
        parent::__construct();
    }

    public function allMegye(): array
    {
        return $this->getResultList($this->sql['allMegye']);
    }
}