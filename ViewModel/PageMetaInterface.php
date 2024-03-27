<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendMetadataApi\ViewModel;

use Klevu\Frontend\Exception\InvalidIsEnabledDeterminerException;
use Magento\Framework\View\Element\Block\ArgumentInterface;

interface PageMetaInterface extends ArgumentInterface
{
    /**
     * @return bool
     * @throws InvalidIsEnabledDeterminerException
     */
    public function isEnabled(): bool;

    /**
     * @return string
     */
    public function getMeta(): string;
}
