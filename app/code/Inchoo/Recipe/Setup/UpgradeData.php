<?php

namespace Inchoo\Recipe\Setup;

use \Magento\Framework\Setup\UpgradeDataInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\ModuleDataSetupInterface;


/**
 * Class InstallSchema
 *
 * @package Inchoo\Hello\Setup
 */
class UpgradeData  implements UpgradeDataInterface
{
    /**
     * Install Hello Posts table
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
         $setup->startSetup();

        if ($context->getVersion()
            && version_compare($context->getVersion(), '1.0.1') < 0
        ) {
            $tableName = $setup->getTable('sample');

            $data = [
                [
                    'title' => 'Post 1 Title',
                    'content' => 'Content of the first post.',
                ],
                [
                    'title' => 'Post 2 Title',
                    'content' => 'Content of the second post.',
                ],
            ];

            $setup
                ->getConnection()
                ->insertMultiple($tableName, $data);
        }

        $setup->endSetup();
    }
}