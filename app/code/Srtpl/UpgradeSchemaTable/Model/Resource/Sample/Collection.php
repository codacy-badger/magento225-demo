<?php

namespace Srtpl\UpgradeSchemaTable\Model\Resource\Sample;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Srtpl\UpgradeSchemaTable\Model\Sample',
            'Srtpl\UpgradeSchemaTable\Model\Resource\Sample'
        );
    }
}
