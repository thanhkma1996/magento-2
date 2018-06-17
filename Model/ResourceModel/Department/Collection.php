<?php
/**
 * Created by PhpStorm.
 * User: thanhkma
 * Date: 06/06/2018
 * Time: 10:32
 */

namespace Foggyline\Office\Model\ResourceModel\Department;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Foggyline\Office\Model\Department',
            'Foggyline\Office\Model\ResourceModel\Department'
        );
    }
}