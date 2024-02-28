<?php

namespace App\Controller;

use App\Entity\Employees;
use App\Repository\EmployeesRepository;
use DateTime;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployeesController extends AbstractController
{

    /*Mainpage for our project */
    #[Route("/", name: "homepage")]
    public function homepage(): Response
    {
        return $this->render(
            "./mainpage/mainpage.html.twig",
            ["title" => "Mainpage"]
        );
    }

    #[Route("/addDefaultData")]
    /*Method to upload default data to our database */
    public function addDefaultData(EmployeesRepository $employeeRep): Response
    {
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
        /* Counting the number of employees added to display in our template */
        $numberRows = count($employeesData);
        /* Getting the data for each employee and making them persistent */
        foreach ($employeesData as $employeeData) {
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
        /* Flushing to database all the employees */
        $employeeRep->flushToDatabase();
        return $this->render(
            "./add/addDefault.html.twig",
            ["title" => "Add default data", "data" => $numberRows]
        );
    }
    /* Showing all the employees from our database */
    #[Route("/employee/showall", name: "show_all_employees")]
    public function showAllEmployees(EmployeesRepository $employeeRep)
    {
        $allEmployees = $employeeRep->findAll();
        return $this->render("./show/showAll.html.twig", ["title" => "Show all employees", "employees" => $allEmployees, "hideElement" => false]);
    }
    #[Route("/employee/show/{id}", name: "show_one_employee")]
    public function showOneEmployee($id, EmployeesRepository $employeeRep)
    {
        $employee = $employeeRep->find($id);
        return $this->render("./show/showOne.html.twig", ["title" => "Show one employee", "employee" => $employee, "hideElement" => true]);
    }
    #[Route("/employee/add", name: "add_employee")]
    public function addEmployee(Request $request, EmployeesRepository $employeeRep)
    {
        $employee = new Employees();
        $form = $this->createFormBuilder($employee)->add("name")
            ->add("dni")->add("birthDate", DateType::class, ['widget' => 'single_text'])->add("dateStartCompany", DateType::class, ['widget' => 'single_text'])
            ->add("dateEndCompany")->add("position")->add("salary")
            ->add("working")->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $post = $form->getData();
            $dateEndCompany = $employee->getDateEndCompany();
            if ($dateEndCompany == null) {
                $employee->setDateEndCompany(null);
            }
            $employeeRep->add($post);
            $this->addFlash('success', 'Your employee has been addded.');
        }
        return $this->render("./add/addOne.html.twig", ["title" => "Add an employee", "form" => $form]);
    }
    #[Route("/employee/edit/{id}", name: "edit_employee")]
    public function editEmployee($id, Request $request, EmployeesRepository $employeeRep)
    {
        $employee = $employeeRep->find($id);
        $form = $this->createFormBuilder($employee)->add("name")
            ->add("dni")->add("birthDate", DateType::class, ['widget' => 'single_text'])->add("dateStartCompany", DateType::class, ['widget' => 'single_text'])
            ->add("dateEndCompany", DateType::class, [ "required" => false, 'widget' => 'single_text'])->add("position")->add("salary")
            ->add("working")->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $post = $form->getData();
            $dateEndCompany = $form->get('dateEndCompany')->getData();
            // dd($dateEndCompany);
           
            $employeeRep->add($post);
            $this->addFlash('success', 'Your employee has been edited.');
        }
        return $this->render("./add/addOne.html.twig", ["title" => "Add an employee", "form" => $form]);
    }
    #[Route("/employee/find", name: "find_one_employee")]
    public function findEmployee(Request $request, EmployeesRepository $employeeRep)
    {
        $dni = $request->query->get("dni");
        $employee = $employeeRep->findOneByDni($dni);
        return $this->render("./show/showOne.html.twig", ["title" => "Show one employee", "employee" => $employee, "hideElement" => true]);
    }
    #[Route("/employee/findEmployees", name: "find_employee")]
    public function formToFindEmployee(Request $request, EmployeesRepository $employeeRep)
    {
        $employee = new Employees();
        $form = $this->createFormBuilder($employee)->add("dni")->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $post = $form->getData();
            dd($post);
        }
        return $this->render("./show/findEmployee.html.twig", ["title" => "Find an employee", "form" => $form]);
    }
}
