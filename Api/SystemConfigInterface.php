<?php
/**
 *
 * @description System config interface
 *
 * @author Bina Commerce      <https://www.binacommerce.com>
 * @author C. M. de Picciotto <cmdepicciotto@binacommerce.com>
 *
 */
namespace Bina\Social\Api;

interface SystemConfigInterface
{
    /**
     *
     * @const FACEBOOK
     *
     */
    const FACEBOOK = 'general/store_information/facebook';

    /**
     *
     * @const INSTAGRAM
     *
     */
    const INSTAGRAM = 'general/store_information/instagram';

    /**
     *
     * @const TWITTER
     *
     */
    const TWITTER = 'general/store_information/twitter';

    /**
     *
     * @const DISCORD
     *
     */
    const DISCORD = 'general/store_information/discord';

    /**
     *
     * Get Facebook
     *
     * @param string|int $storeId
     *
     * @return string
     *
     */
    public function getFacebook($storeId);

    /**
     *
     * Get Instagram
     *
     * @param string|int $storeId
     *
     * @return string
     *
     */
    public function getInstagram($storeId);

    /**
     *
     * Get Twitter
     *
     * @param string|int $storeId
     *
     * @return string
     *
     */
    public function getTwitter($storeId);

    /**
     *
     * Get Discord
     *
     * @param string|int $storeId
     *
     * @return string
     *
     */
    public function getDiscord($storeId);
}