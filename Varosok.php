<?php
include_once('Application.php');

class Varosok extends Application
{
    private $sql = array(
        'allMegye' => 'select * from varos where megyeid = {id};',
        'varos' => 'select varos.vnev, v.vtip, varos.jaras, varos.kisterseg, varos.nepesseg, varos.terulet, m.mnev from varos left join varostipus v on varos.vtipid = v.id left join megye m on varos.megyeid = m.id where varos.id = {id};'
    );

    public function __construct()
    {
        parent::__construct();
    }

    public function getVaros($id): array
    {
        if (!$this->isValidId($id))
        {
            return array();
        }
        $params = array(
            '{id}' => $id
        );
        return $this->getResultList(strtr($this->sql['allMegye'], $params));
    }

    public function getVarosInfo($id)
    {
        if (!$this->isValidId($id))
        {
            return array();
        }
        $params = array(
            '{id}' => $id
        );
        return $this->getResultList(strtr($this->sql['varos'], $params))[0];
    }
}