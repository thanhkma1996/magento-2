<?php
/**
 * Created by PhpStorm.
 * User: thanhkma
 * Date: 06/06/2018
 * Time: 10:59
 */

namespace Foggyline\Office\Setup;


use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        /* #snippet1 */
        $table = $setup->getConnection()->newTable($setup->getTable('foggyline_office_department'))->addColumn(
            'entity_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true], 'Entity ID')
            ->addColumn(
            'name', \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            64,
            [],
            'Name'
        )->setComment('Foggyline Office Department Table');
        $setup->getConnection()->createTable($table);


        // table bang 2 : Floggyline offic employeee entity
        $employeeEntity = \Foggyline\Office\Model\Employee::ENTITY;
        $table = $setup->getConnection()
            ->newTable($setup->getTable($employeeEntity . '_entity'))->addColumn(
                'entity_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false,
                    'primary' => true],
                'Entity ID'
            )->addColumn(
                'department_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['unsigned' => true, 'nullable' => false],
                'Department Id'
            )->addColumn(
                'email',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                64,
                [],
                'Email'
            )->addColumn(
                'first_name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                64,
                [],
                'First Name'
            )->addColumn(
                'last_name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                64,
                [],
                'Last Name'
            )->setComment('Foggyline Office Employee Table');

        $setup->getConnection()->createTable($table);
        /* #snippet3 */
        $table = $setup->getConnection()->newTable($setup->getTable($employeeEntity . '_entity_int'))->addColumn(
            'value_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'nullable' => false, 'primary' => true],
            'Value ID'

        )->addColumn(
            'attribute_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
            null,
            ['unsigned' => true, 'nullable' => false, 'default' => '0'],
            'Attribute ID'

        )->addColumn(
            'store_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
            null,
            ['unsigned' => true, 'nullable' => false, 'default' => '0'],
            'Store ID'

        )->addColumn(
            'entity_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['unsigned' => true, 'nullable' => false, 'default' => '0'],
            'Entity ID'
        )->addColumn(
            'value',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            '12,4',
            [],
            'Value'

        )->setComment('Foggyline Office Employee table int');

        $setup->getConnection()->createTable($table);

        // table datetime
        $table = $setup->getConnection()->newTable($setup->getTable($employeeEntity . '_entity_datetime'))->addColumn(
            'value_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'nullable' => false, 'primary' => true],
            'Value ID'

        )->addColumn(
            'attribute_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
            null,
            ['unsigned' => true, 'nullable' => false, 'default' => '0'],
            'Attribute ID'

        )->addColumn(
            'store_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
            null,
            ['unsigned' => true, 'nullable' => false, 'default' => '0'],
            'Store ID'

        )->addColumn(
            'entity_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['unsigned' => true, 'nullable' => false, 'default' => '0'],
            'Entity ID'
        )->addColumn(
            'value',
            \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
            '12,4',
            [],
            'Value'

        )->setComment('Foggyline Office Employee Table datetime');

        $setup->getConnection()->createTable($table);

        // table text

        $table = $setup->getConnection()->newTable($setup->getTable($employeeEntity . '_entity_text'))->addColumn(
            'value_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'nullable' => false, 'primary' => true],
            'Value ID'

        )->addColumn(
            'attribute_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
            null,
            ['unsigned' => true, 'nullable' => false, 'default' => '0'],
            'Attribute ID'

        )->addColumn(
            'store_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
            null,
            ['unsigned' => true, 'nullable' => false, 'default' => '0'],
            'Store ID'

        )->addColumn(
            'entity_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['unsigned' => true, 'nullable' => false, 'default' => '0'],
            'Entity ID'
        )->addColumn(
            'value',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            '12,4',
            [],
            'Value'

        )->setComment('Foggyline Office Employee Table text');

        $setup->getConnection()->createTable($table);

        // table varchar
        $table = $setup->getConnection()->newTable($setup->getTable($employeeEntity . '_entity_varchar'))->addColumn(
            'value_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'nullable' => false, 'primary' => true],
            'Value ID'

        )->addColumn(
            'attribute_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
            null,
            ['unsigned' => true, 'nullable' => false, 'default' => '0'],
            'Attribute ID'

        )->addColumn(
            'store_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
            null,
            ['unsigned' => true, 'nullable' => false, 'default' => '0'],
            'Store ID'

        )->addColumn(
            'entity_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['unsigned' => true, 'nullable' => false, 'default' => '0'],
            'Entity ID'
        )->addColumn(
            'value',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            '12,4',
            [],
            'Value'

        )->setComment('Foggyline Office Employee Table varchar');

        $setup->getConnection()->createTable($table);

        $table = $setup->getConnection()->newTable($setup->getTable($employeeEntity . '_entity_decimal'))->addColumn(
            'value_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'nullable' => false, 'primary' => true],
            'Value ID'

        )->addColumn(
            'attribute_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
            null,
            ['unsigned' => true, 'nullable' => false, 'default' => '0'],
            'Attribute ID'

        )->addColumn(
            'store_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
            null,
            ['unsigned' => true, 'nullable' => false, 'default' => '0'],
            'Store ID'

        )->addColumn(
            'entity_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['unsigned' => true, 'nullable' => false, 'default' => '0'],
            'Entity ID'
        )->addColumn(
            'value',
            \Magento\Framework\DB\Ddl\Table::TYPE_DECIMAL,
            '12,4',
            [],
            'Value'

        )->addIndex(
            $setup->getIdxName(

                $employeeEntity . '_entity_decimal',
                ['entity_id', 'attribute_id', 'store_id'],
                \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_UNIQUE),
            ['entity_id', 'attribute_id', 'store_id'],
            ['type' => \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_UNIQUE]
        )->addIndex(
            $setup->getIdxName($employeeEntity . '_entity_decimal', ['store_id']),
            ['store_id']
        )->addIndex(
            $setup->getIdxName($employeeEntity . '_entity_decimal',
                ['attribute_id']),
            ['attribute_id']
        )
            ->addForeignKey(
                $setup->getFkName(
                    $employeeEntity . '_entity_decimal',
                    'attribute_id',
                    'eav_attribute',
                    'attribute_id'
                ),
                'attribute_id',
                $setup->getTable('eav_attribute'),
                'attribute_id',
                \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE

            )->addForeignKey(
                $setup->getFkName(
                    $employeeEntity . '_entity_decimal',
                    'entity_id',
                    $employeeEntity . '_entity',
                    'entity_id'
                ),
                'entity_id',
                $setup->getTable($employeeEntity . '_entity'),
                'entity_id',
                \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE

            )->addForeignKey(
                $setup->getFkName($employeeEntity . '_entity_decimal', 'store_id',
                    'store', 'store_id'),
                'store_id',
                $setup->getTable('store'),
                'store_id',
                \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
            )->setComment('Employee Decimal Attribute Backend Table');
        $setup->getConnection()->createTable($table);

    }
}