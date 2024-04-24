<?

class Company {
    public $name;
    public $location;
    public $tot_employees;
    public $avg_salary;
    public static $numCompanies = 0;
    
    public function __construct($_name, $_location, $_tot_employees, $_avg_salary)
    {
        $this->name = $_name;
        $this->location = $_location;
        $this->tot_employees = $_tot_employees;
        $this->avg_salary = $_avg_salary;
        self::$numCompanies++;
        $this->companyInfo();
        $this->printExpense(2); //~ INSERIRE QUI NUMERO DI MESI COME PARAMETRO
    }
    //~ METODO PER STAMPARE NOME AZIENDA, SEDE E NUMERO DI DIPENDENTI
    public function companyInfo(){
        echo "L'azienda $this->name con sede in $this->location ha ben $this->tot_employees dipendenti", "\n";
    }
    //~ METODO PER CALCOLARE LA SPESA DI OGNI AZIENDA PER I SUOI DIPENDENTI E IL NUMERO DI MESI
    public function expenseForEmployees($n){
        $totExpense = $this->avg_salary * $n * $this->tot_employees;
        return $totExpense;
    }
    //~ METODO PER STAMPARE LA SPESA DI OGNI AZIENDA
    public function printExpense($n){
        $totExpense = $this->expenseForEmployees($n);
        echo "in $n mesi spende per i propri dipendenti $totExpense dollari", "\n";
    }

    public static function stampNumCompanies(){
        echo " sono state create ", self::$numCompanies, " aziende";
    }
}
$company1 = new Company("Apple", "Cupertino, California, USA", 140000, 5500);
$company2 = new Company("Microsoft Corporation", "Redmond, Washington, USA", 160000, 6500);
$company3 = new Company("Amazon.com, Inc", "Seattle, Washington, USA", 100000, 4000);
$company4 = new Company("Alphabet (Google)", "Sede: Mountain View, California, USA", 180000, 7000);
$company5 = new Company("Walmart", "Bentonville, Arkansas, USA", 200000, 3000);
Company::stampNumCompanies();
// $company1->companyInfo();    
// $company2->companyInfo();
// $company3->companyInfo();
// $company4->companyInfo();
// $company5->companyInfo();
// $company1->printExpense();
// $company2->printExpense();
// $company3->printExpense();
// $company4->printExpense();
// $company5->printExpense();
 // public static function echoNumCompany(){
    //     return self::$numCompanies;
    //     echo "Sono state create self::$numCompanies aziende";
    // }


//~ Aggiungi un nuovo attributo chiamato $avg_salary nella Classe Company. Aggiorna poi le aziende che hai già creato nel punto 2.


//~ Implementa un metodo che calcoli la spesa per un numero variabile di mesi (praticamente il metodo deve accettare come parametro N mesi) e poi implementa un altro metodo che stampi a schermo l’informazione (sono due metodi diversi).


//~ Implementa un attributo statico che tenga traccia di quante aziende sono state create.


//~ Implementa un metodo statico che stampi a schermo con una frase quante aziende sono state create.






















?>