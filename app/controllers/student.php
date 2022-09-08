<?php
// Project\Controllers is namespace here
namespace Project\controllers;

class student{
    public $id;
    public $name;
    public $department;
    public $semister;
    public $facalty;
    public $gpa;

    public function __construct()
    {
        session_start();
    }

    public function store($data)
    {
        //session_start();

        $_SESSION['students'][] = $data;
        $_SESSION['massage']= 'Successfully Created';
              
    }

    public function details($id)
    {
        // echo '<pre>';
        // print_r($_SESSION['students']);

        $students = $_SESSION['students'];
        $studentInfo = null;
           
            foreach ($students as $key => $student) {
                if ($student['id'] == $id) {
                    $studentInfo=$_SESSION['students'][$key];
                }
            }
            return $studentInfo;
            //print_r($studentInfo);
    }


    public function update($id)
    {

        $students = $_SESSION['students'];
        $updateStudentInfo = null;
           
            foreach ($students as $key => $student) {
                if ($student['id'] == $id) {
                    $updateStudentInfo=$_SESSION['students'][$key];
                }
            }
            return $updateStudentInfo;
            //print_r($studentInfo);
    }

        
        public function destroy($id)
        {
            //session_start();
            $students = $_SESSION['students'];

            // $id = $_GET['id'];
            foreach ($students as $key => $student) {
                if ($student['id'] == $id) {
                    unset($_SESSION['students'][$key]);
                }
            } 
            
            $_SESSION['massage']= 'Successfully Deleted';
        }
        
    
}