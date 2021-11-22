<?php

include './StudentData.php';

class Student {

    public function listStudents() {
        $student = new StudentData();
        return $student->getAllStudents();
    }

    /**
     * Busca o aluno pelo CPF
     *
     * @param $cpf
     * @return string
     */
    public function getStudent($cpf) {
        $student = new StudentData();
        return $student->filterStudentBy('cpf', $cpf);
    }

    public function createStudent($aluno) {
        $student = new StudentData();
        $student->setData($aluno);
        $student->saveNewData();
        return 'Aluno salvo com sucesso.';
    }

    public function updateStudent($aluno) {
        $student = new StudentData();
        $student->setData($aluno);
        $student->updateData();
        return 'Aluno atualizado com sucesso.';
    }

    public function deleteStudent($cpf) {
        $student = new StudentData();
        $student->deleteStudent('cpf', $cpf);
        return 'Aluno deletado com sucesso.';
    }
}