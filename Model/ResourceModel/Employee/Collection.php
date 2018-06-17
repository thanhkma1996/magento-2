<?php
/**
 * Created by PhpStorm.
 * User: thanhkma
 * Date: 06/06/2018
 * Time: 10:41
 */

namespace Foggyline\Office\Model\ResourceModel\Employee;


class Collection extends \Magento\Eav\Model\Entity\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Foggyline\Office\Model\Employee',
            'Foggyline\Office\Model\ResourceModel\Employee');
    }
}