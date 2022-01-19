<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        /**
     * 
     *      Definire classe Persona:
     *          - ATTRIBUTI (private):
     *              - nome
     *              - cognome
     *              - dataNascita (stringa)
     *          - METODI:
     *              - costruttore che accetta nome e cognome
     *              - setter/getter per ogni variabile
     *              - printFullPerson: che stampa "nome cognome: dataNascita"
     *              - toString: che ritorna "nome cognome: dataNascita"
     * 
     * 
     *      Definire classe Employee che eredita da Persona:
     *          - ATTRIBUTI (private):
     *              - stipendio
     *              - dataAssunzione
     *          - METODI:
     *              - costruttore che accetta nome, cognome e stipendio
     *              - setter/getter per variabili 
     *              - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
     *              - toString: che ritorna "nome cognome: stipendio (dataAssunzione)"
     * 
     */
    class Person {
        private $name;
        private $lastname;
        private $birthday;
    
        public function __construct($name, $lastname) {
            $this->name = $name;
            $this->lastname = $lastname;
        }
    
        // SETTER
        public function setName ($name) {
            $this->name = $name;
        }
        public function setLastname ($lastname) {
            $this->lastname = $lastname;
        }
        public function setBirthday ($birthday) {
            $this->birthday = $birthday;
        }

        // GETTER
        public function getName () {
            return $this->name;
        }

        public function getLastname () {
            return $this->lastname;
        }

        public function getBirthday () {
            return $this->birthday;
        }
    
        // STAMPA
        public function printFullPerson() {
            return $this->getName() . " " . $this->getLastname() . ": " . $this->getBirthday();
        }
        public function __toString() {
            return $this->printFullPerson();
        }
    }
    class Employee extends Person {

        // - stipendio
        // - dataAssunzione
        private $Hiringdate;
        private $salary;

        // CONSTRUCT

        public function __construct($name, $lastname, $salary){
            parent::__construct($name, $lastname);            
            $this->salary = $salary;
        }

        // SETTER
        public function setHiringdate($Hiringdate) {
            $this->Hiringdate = $Hiringdate;
        }

        public function setSalary($salary) {
            $this->salary = $salary;
        }

        // GETTER
        public function getHiringdate () {
            return $this-> Hiringdate;
        }

        public function getSalary () {
            return $this-> salary;
        }

        // STAMPA
        public function printEmployee() {
            return $this->getName() . " " . $this->getLastname() . ": " . $this->getSalary() . " (" . $this->getHiringdate() . ")";
        }
        public function __toString() {
            return $this->printEmployee();
        }

    }
    







    echo "<h1> ESERCIZIO BOOLEAN! </h1>";


    //     // PERSONA 1
    // $p1 = new Person("Giorgio", "Oggeri");
    // $p1 -> setBirthday ("24/12/2001");
    // echo $p1 . "<br>";
    
    //     // PERSONA 2
    // $p2 = new Person("Marco", "Raglieri");
    // $p2 -> setBirthday("03/10/1995");
    // echo $p2 . "<br>";

    //     // EMPLOYEE 1
    $e1 = new Employee ("Lorenzo", "Maruego");
    $e1 -> setHiringdate ("21/09/2020");
    $e1 -> setSalary ("75.000€");

        // EMPLOYEE 2
    $e2 = new Employee ("Tommaso", "Macchiatini");
    $e2 -> setHiringdate ("31/12/2021");
    $e2 -> setSalary ("100.000€");

        // EMPLOYEE 3
    $e3 = new Employee ("Joshua", "Chielli");
    $e3 -> setHiringdate ("07/03/1999");
    $e3 -> setSalary ("35.000€");

    echo $p1 . "<br>";
    // echo $p1 . "<br>";
    // echo $p1 . "<br>";
    // echo $p1 . "<br>";
    echo "HEllo World";
    ?>
</body>
</html>