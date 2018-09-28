<?php

namespace Srtpl\Backendgrid\Model\ResourceModel\Backendgrid;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Srtpl\Backendgrid\Model\Backendgrid', 'Srtpl\Backendgrid\Model\ResourceModel\Backendgrid');
        $this->_map['fields']['page_id'] = 'main_table.page_id';
    }

}
?>