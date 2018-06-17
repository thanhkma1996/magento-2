<?php
/**
 * Created by PhpStorm.
 * User: thanhkma
 * Date: 06/06/2018
 * Time: 11:38
 */

namespace Foggyline\Office\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
class UpgradeData implements UpgradeDataInterface
{
    protected $departmentFactory;
    protected $employeeFactory;

    public function __construct(
        \Foggyline\Office\Model\DepartmentFactory $departmentFactory,
        \Foggyline\Office\Model\EmployeeFactory $employeeFactory
    ){
        $this->departmentFactory = $departmentFactory;
        $this->employeeFactory = $employeeFactory;
    }

    public function upgrade(ModuleDataSetupInterface $setup,
                       ModuleContextInterface $context)
    {
        $setup->startSetup();
        /* #snippet1 */
        $salesDepartment = $this->departmentFactory->create();
        $salesDepartment->setName('Salestest');
        $salesDepartment->save();
        $employee = $this->employeeFactory->create();
        $employee->setDepartmentId($salesDepartment->getId());
        $employee->setEmail('thanh@sales.loc');

        $employee->setFirstName('thanh');
        $employee->setLastName('Nguyen');
        $employee->setServiceYears(3);
        $employee->setDob('');
        $employee->setSalary(3800.00);
        $employee->setVatNumber('01689487864');
        $employee->setNote('Day la bai test');
        $employee->save();


    }
}