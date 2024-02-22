<?php
namespace App\Controller;

use App\Entity\Employees;
use App\Repository\EmployeesRepository;
use DateTime;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class EmployeesController extends AbstractController{
   

    #[Route("/", name:"homepage")]
    public function homepage(): Response{
        return $this->render(
            "./mainpage/mainpage.html.twig", ["title"=>"Mainpage"]
        );
    }

    #[Route("/addDefaultData")]
    public function addDefaultData(EmployeesRepository $employeeRep): Response{
        $employeesData = [
            [
                'name' => 'Juan Pérez',
                'dni' => '12345678A',
                'birthDate' => new DateTime('1990-05-15'),
                'dateStartCompany' => new DateTime('2020-01-01'),
                'dateEndCompany' => null,
                'position' => 'Developer',
                'salary' => 30000,
                'working' => true,
            ],
            [
                'name' => 'María García',
                'dni' => '87654321B',
                'birthDate' => new DateTime('1985-08-20'),
                'dateStartCompany' => new DateTime('2018-03-10'),
                'dateEndCompany' => null,
                'position' => 'Designer',
                'salary' => 28000,
                'working' => true,
            ],
            [
                'name' => 'Pedro López',
                'dni' => '56781234C',
                'birthDate' => new DateTime('1987-11-30'),
                'dateStartCompany' => new DateTime('2019-06-05'),
                'dateEndCompany' => null,
                'position' => 'Project Manager',
                'salary' => 40000,
                'working' => true,
            ],
            [
                'name' => 'Ana Martínez',
                'dni' => '43218765D',
                'birthDate' => new DateTime('1992-04-25'),
                'dateStartCompany' => new DateTime('2021-02-15'),
                'dateEndCompany' => null,
                'position' => 'Data Analyst',
                'salary' => 35000,
                'working' => true,
            ],
            [
                'name' => 'Jorge Ruiz',
                'dni' => '98765432E',
                'birthDate' => new DateTime('1983-12-10'),
                'dateStartCompany' => new DateTime('2017-09-20'),
                'dateEndCompany' => null,
                'position' => 'Marketing Director',
                'salary' => 45000,
                'working' => true,
            ],
        ];
        $numberRows = count($employeesData);
        foreach ($employeesData as $employeeData){
            $employee = new Employees();
            $employee->setName($employeeData["name"]);
            $employee->setDni($employeeData["dni"]);
            $employee->setBirthDate($employeeData["birthDate"]);
            $employee->setDateStartCompany($employeeData["dateStartCompany"]);
            $employee->setDateEndCompany($employeeData["dateEndCompany"]);
            $employee->setPosition($employeeData["position"]);
            $employee->setSalary($employeeData["salary"]);
            $employee->setWorking($employeeData["working"]);
            $employeeRep->persistEmployee($employee);
        }
        $employeeRep->flushToDatabase();
        return $this->render(
            "./add/addDefault.html.twig", ["title"=>"Add default data", "data"=>$numberRows]
        );
    }
    #[Route("/showAll", name:"show_all_employees")]
    public function showAllEmployees(EmployeesRepository $employeeRep){
        $allEmployees = $employeeRep->findAll();
        return $this->render("./show/showAll.html.twig", ["employees" => $allEmployees]);
    }

}