<?php
namespace Inchoo\Recipe\Model\ResourceModel\Post;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Inchoo\Recipe\Model\Post', 'Inchoo\Recipe\Model\ResourceModel\Post');
    }
}