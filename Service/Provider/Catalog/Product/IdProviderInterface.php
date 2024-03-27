<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendMetadataApi\Service\Provider\Catalog\Product;

use Magento\Catalog\Api\Data\ProductInterface;

interface IdProviderInterface
{
    /**
     * @param ProductInterface $product
     *
     * @return string
     */
    public function getItemId(ProductInterface $product): string;

    /**
     * @param ProductInterface $product
     *
     * @return string
     */
    public function getItemGroupId(ProductInterface $product): string;
}
