<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendMetadataApi\Service\Provider\Catalog\Product;

use Magento\Catalog\Api\Data\ProductInterface;

interface PriceProviderInterface
{
    /**
     * @param ProductInterface $product
     *
     * @return float
     */
    public function get(ProductInterface $product): float;
}
