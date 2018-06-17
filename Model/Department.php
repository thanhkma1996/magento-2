<?php
/**
 * Created by PhpStorm.
 * User: thanhkma
 * Date: 06/06/2018
 * Time: 10:22
 */

namespace Foggyline\Office\Model;

class Department  extends \Magento\Framework\Model\AbstractModel
{

    protected function _construct()
    {
        $this-> _init('Foggyline\Office\Model\ResourceModel\Department');

    }
}