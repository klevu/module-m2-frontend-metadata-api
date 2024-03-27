<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\FrontendMetadataApi\Service\Provider;

interface PageMetaProviderInterface
{
    /**
     * @return mixed[]|string
     */
    public function get(): array|string;
}
