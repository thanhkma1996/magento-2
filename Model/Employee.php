<?php
/**
 * Created by PhpStorm.
 * User: thanhkma
 * Date: 06/06/2018
 * Time: 10:35
 */

namespace Foggyline\Office\Model;


class Employee extends \Magento\Framework\Model\AbstractModel
{
    const ENTITY = 'foggyline_office_employee';
    public function _construct()
    {
        $this-> _init('Foggyline\Office\Model\ResourceModel\Employee');
    }
}