<?php
/**
 * Disclosed Assets plugin for Craft CMS
 *
 * Allow your clients to find asset sub-folders by disclosing them by default
 *
 * @author    nystudio107
 * @copyright Copyright (c) 2017 nystudio107
 * @link      https://nystudio107.com
 * @package   DisclosedAssets
 * @since     1.0.0
 */

namespace Craft;

class DisclosedAssetsPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
        parent::init();

        if (!craft()->isConsole()) {
            if (craft()->request->isCpRequest() && craft()->userSession->isLoggedIn()) {
                craft()->templates->includeJsResource('disclosedassets/js/disclosedassets.js');
            }
        }
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Disclosed Assets');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Allow your clients to find asset sub-folders by disclosing them by default');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/nystudio107/disclosedassets/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/nystudio107/disclosedassets/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.1';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'nystudio107';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'https://nystudio107.com';
    }

    /**
     * @return bool
     */
    public function hasCpSection()
    {
        return false;
    }

    /**
     */
    public function onBeforeInstall()
    {
    }

    /**
     */
    public function onAfterInstall()
    {
    }

    /**
     */
    public function onBeforeUninstall()
    {
    }

    /**
     */
    public function onAfterUninstall()
    {
    }
}