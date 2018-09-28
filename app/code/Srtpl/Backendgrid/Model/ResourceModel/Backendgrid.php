<?php
namespace Srtpl\Backendgrid\Model\ResourceModel;

class Backendgrid extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('installschema', 'id');
    }
}
?>