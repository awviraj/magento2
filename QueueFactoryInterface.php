<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\MessageQueue;

/**
 * Factory class for @see \Magento\Framework\MessageQueue\QueueInterface
 *
 * @api
 */
interface QueueFactoryInterface
{
    /**
     * Create queue instance.
     *
     * @param string $queueName
     * @param string $connectionName
     * @return QueueInterface
     */
    public function create($queueName, $connectionName);
}
