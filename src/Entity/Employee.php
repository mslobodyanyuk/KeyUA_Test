<?php

namespace App\Entity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EmployeeRepository")
 */
class Employee
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $specialty;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $write_code;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $test_code;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $communicate_with_manager;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $draw;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $set_tasks;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * @param mixed $specialty
     */
    public function setSpecialty($specialty): void
    {
        $this->specialty = $specialty;
    }

    /**
     * @return mixed
     */
    public function getWriteCode()
    {
        return $this->write_code;
    }

    /**
     * @param mixed $writeCode
     */
    public function setWriteCode($writeCode): void
    {
        $this->write_code = $writeCode;
    }

    /**
     * @return mixed
     */
    public function getTestCode()
    {
        return $this->test_code;
    }

    /**
     * @param mixed $testCode
     */
    public function setTestCode($testCode): void
    {
        $this->test_code = $testCode;
    }

    /**
     * @return mixed
     */
    public function getCommunicateWithManager()
    {
        return $this->communicate_with_manager;
    }

    /**
     * @param mixed $communicateWithManager
     */
    public function setCommunicateWithManager($communicateWithManager): void
    {
        $this->communicate_with_manager = $communicateWithManager;
    }

    /**
     * @return mixed
     */
    public function getDraw()
    {
        return $this->draw;
    }

    /**
     * @param mixed $draw
     */
    public function setDraw($draw): void
    {
        $this->draw = $draw;
    }

    /**
     * @return mixed
     */
    public function getSetTasks()
    {
        return $this->set_tasks;
    }

    /**
     * @param mixed $draw
     */
    public function setSetTasks($setTasks): void
    {
        $this->set_tasks = $setTasks;
    }

}
