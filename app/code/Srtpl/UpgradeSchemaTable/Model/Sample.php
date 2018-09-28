<?php

namespace Srtpl\UpgradeSchemaTable\Model;

use Magento\Framework\Model\AbstractModel;

class Sample extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Srtpl\UpgradeSchemaTable\Model\Resource\Sample');
    }
}
