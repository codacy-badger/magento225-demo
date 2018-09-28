<?php
namespace Srtpl\Backendgrid\Model;

class Backendgrid extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Srtpl\Backendgrid\Model\ResourceModel\Backendgrid');
    }
}
?>