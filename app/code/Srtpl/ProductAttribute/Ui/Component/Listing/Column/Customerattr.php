<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Srtpl\ProductAttribute\Ui\Component\Listing\Column;

use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Ui\Component\Listing\Columns\Column;

/**
 * Class Productqty
 *
 * @api
 * @since 100.0.2
 */
class Customerattr extends Column
{

    /**
     * @var \Magento\Framework\Locale\CurrencyInterface
     */
    protected $localeCurrency;

    protected $_productloader;

    /**
     * @param ContextInterface $context
     * @param UiComponentFactory $uiComponentFactory
     * @param \Magento\Framework\Locale\CurrencyInterface $localeCurrency
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param array $components
     * @param array $data
     */
    public function __construct(
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        \Magento\Framework\Locale\CurrencyInterface $localeCurrency,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Catalog\Model\ProductFactory $_productloader,
        array $components = [],
        array $data = []
    ) {
        parent::__construct($context, $uiComponentFactory, $components, $data);
        $this->localeCurrency = $localeCurrency;
        $this->storeManager   = $storeManager;
        $this->_productloader = $_productloader;
    }

    /**
     * Prepare Data Source
     *
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            $store = $this->storeManager->getStore(
                $this->context->getFilterParam('store_id', \Magento\Store\Model\Store::DEFAULT_STORE_ID)
            );
            $currency = $this->localeCurrency->getCurrency($store->getBaseCurrencyCode());
            $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/templog1.log');
$logger = new \Zend\Log\Logger();
$logger->addWriter($writer);
$logger->info($currency);
            foreach ($dataSource['data']['items'] as &$item) {
                $item['free'] = 'free';
                /*$specialPrice = $this->_productloader->create()->load($item['entity_id']);
                $logger->info($currency->toCurrency(sprintf("%f", $specialPrice->getSpecialPrice())));
                if ($specialPrice && count($specialPrice->getData()) > 0) {
                    $item['special_price'] = $currency->toCurrency(sprintf("%f", $specialPrice->getSpecialPrice()));
                }*/
            }
        }

        return $dataSource;
    }
}
