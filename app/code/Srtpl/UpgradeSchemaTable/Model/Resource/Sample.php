<?php

namespace Srtpl\UpgradeSchemaTable\Model\Resource;

class Sample extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('srtpl_upgradeschematable', 'id');
    }
}
