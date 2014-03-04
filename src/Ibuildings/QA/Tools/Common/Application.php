<?php

/**
 * This file is part of Ibuildings QA-Tools.
 *
 * (c) Ibuildings
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ibuildings\QA\Tools\Common;

use Symfony\Component\Console\Application as BaseApplication;

class Application extends BaseApplication
{
    /**
     * @var Settings
     */
    protected $settings;

    /**
     * @return \Ibuildings\QA\Tools\Common\Settings
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * @param $name
     * @param $version
     * @param Settings $settings
     */
    public function __construct($name, $version, Settings $settings)
    {
        $this->settings = $settings;
        parent::__construct($name, $version);
    }
}
