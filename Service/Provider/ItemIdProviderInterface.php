<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendMetadataApi\Service\Provider;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Quote\Api\Data\CartItemInterface;

interface ItemIdProviderInterface
{
    /**
     * @return mixed[]
     */
    public function getItemIds(ProductInterface $product): array;

    /**
     * @return mixed[]
     */
    public function getItemIdsFromCart(CartItemInterface $cartItem): array;
}
