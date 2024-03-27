<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendMetadataApi\Service\Provider\Checkout\Cart;

use Magento\Quote\Api\Data\CartItemInterface;

interface ItemIdProviderInterface
{
    /**
     * @param CartItemInterface $item
     *
     * @return string
     */
    public function getItemId(CartItemInterface $item): string;

    /**
     * @param CartItemInterface $item
     *
     * @return string|null
     */
    public function getItemGroupId(CartItemInterface $item): ?string;
}
