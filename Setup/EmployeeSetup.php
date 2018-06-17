<?php
/**
 * Created by PhpStorm.
 * User: thanhkma
 * Date: 06/06/2018
 * Time: 11:35
 */

namespace Foggyline\Office\Setup;

use Magento\Eav\Setup\EavSetup;
    class EmployeeSetup extends EavSetup
    {
        public function getDefaultEntities()
        {
            $employeeEntity = \Foggyline\Office\Model\Employee::ENTITY;
            $entities = [
                $employeeEntity => [
                    'entity_model' => 'Foggyline\Office\Model\ResourceModel\Employee',
                    'table' => $employeeEntity . '_entity',
                    'attributes' => [
                        'department_id' => [
                            'type' => 'static',
                        ],
                        'email' => [
                            'type' => 'static',
                        ],
                        'first_name' => [
                            'type' => 'static',
                        ],
                        'last_name' => [
                            'type' => 'static',
                        ],
                    ],
                ],
            ];
            $employeeEntity = \Foggyline\Office\Model\Employee::ENTITY;
            $entities = [
                $employeeEntity => [
                    'entity_model' => 'Foggyline\Office\Model\ResourceModel\Employee',
                    'table' => $employeeEntity . '_entity',
                    'attributes' => [
                        'department_id' => [
                            'type' => 'static',
                        ],
                        'email' => [
                            'type' => 'static',
                        ],
                        'first_name' => [
                            'type' => 'static',
                        ],
                        'last_name' => [
                            'type' => 'static',
                        ],
                    ],
                ],
            ];
            $employeeEntity = \Foggyline\Office\Model\Employee::ENTITY;
            $entities = [
                $employeeEntity => [
                    'entity_model' => 'Foggyline\Office\Model\ResourceModel\Employee',
                    'table' => $employeeEntity . '_entity',
                    'attributes' => [
                        'department_id' => [
                            'type' => 'static',
                        ],
                        'email' => [
                            'type' => 'static',
                        ],
                        'first_name' => [
                            'type' => 'static',
                        ],
                        'last_name' => [
                            'type' => 'static',
                        ],
                    ],
                ],
            ];return $entities;
        }
    }