<?php
/**
 * Created by PhpStorm.
 * User: thanhkma
 * Date: 06/06/2018
 * Time: 10:29
 */

namespace Foggyline\Office\Model\ResourceModel;

class Department extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('foggyline_office_department', 'entity_id');
    }
}
