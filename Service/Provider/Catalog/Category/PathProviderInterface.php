<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendMetadataApi\Service\Provider\Catalog\Category;

use Magento\Catalog\Api\Data\CategoryInterface;

interface PathProviderInterface
{
    /**
     * @param CategoryInterface|null $category
     *
     * @return string
     */
    public function get(?CategoryInterface $category = null): string;
}
