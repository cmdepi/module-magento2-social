<?php
/**
 *
 * @description System config model
 *
 * @author Bina Commerce      <https://www.binacommerce.com>
 * @author C. M. de Picciotto <cmdepicciotto@binacommerce.com>
 *
 */
namespace Bina\Social\Model\System;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;
use Bina\Social\Api\SystemConfigInterface;

class Config implements SystemConfigInterface
{
    /**
     *
     * @var ScopeConfigInterface
     *
     */
    protected $_scopeConfig;

    /**
     *
     * Constructor
     *
     * @param ScopeConfigInterface $scopeConfig
     *
     */
    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        /**
         *
         * @note Init scope config model
         *
         */
        $this->_scopeConfig = $scopeConfig;
    }

    /**
     *
     * Get Facebook
     *
     * @param string|int $storeId
     *
     * @return string
     *
     */
    public function getFacebook($storeId)
    {
        return $this->_getConfigData(self::FACEBOOK, $storeId);
    }

    /**
     *
     * Get Instagram
     *
     * @param string|int $storeId
     *
     * @return string
     *
     */
    public function getInstagram($storeId)
    {
        return $this->_getConfigData(self::INSTAGRAM, $storeId);
    }

    /**
     *
     * Get Twitter
     *
     * @param string|int $storeId
     *
     * @return string
     *
     */
    public function getTwitter($storeId)
    {
        return $this->_getConfigData(self::TWITTER, $storeId);
    }

    /**
     *
     * Retrieve information from service configuration
     *
     * @param string     $field
     * @param string|int $storeId
     *
     * @return mixed
     *
     */
    protected function _getConfigData($field, $storeId)
    {
        return $this->_scopeConfig->getValue($field, ScopeInterface::SCOPE_STORE, $storeId);
    }
}