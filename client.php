<?php

class client {
    private $instance;

    public function __construct() {

        $params = array(
            'location' => 'http://localhost/webService.php',
            'uri'      => 'urn://localhost/webService.php',
            'trace'     => 1
        );

        $this->instance = new SoapClient(null, $params);
    }

    public function listStudents() {
        $null[] = '';
        return var_dump($this->instance->__soapCall('listStudents', $null));
    }

    public function getStudent($param) {
        $cpf = array('cpf' => $param['cpf']);
        return var_dump($this->instance->__soapCall('getStudent', $cpf));
    }

    public function createStudent($param) {
        $aluno[] = array (
            'nome' => (string)$param['nome'],
            'curso' => (string)$param['curso'],
            'semestre' => (int)$param['semestre'],
            'ra' => (int)$param['ra'],
            'cpf' => (string)$param['cpf'],
            'cidade' => (string)$param['cidade']
        );
        return $this->instance->__soapCall('createStudent', $aluno);
    }

    public function updateStudent($param) {
        $aluno[] = array (
            'curso' => (string)$param['curso'],
            'semestre' => (int)$param['semestre'],
            'ra' => (int)$param['ra'],
            'cpf' => (string)$param['cpf']
        );
        return $this->instance->__soapCall('updateStudent', $aluno);
    }

    public function deleteStudent($param) {
        $cpf = array('cpf' => $param['cpf']);
        return $this->instance->__soapCall('deleteStudent', $cpf);
    }
}
