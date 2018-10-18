<?php

namespace App\Domain\Message\Repository;

use App\Domain\Message\Model\MessageInterface;

/**
 * Interface MessageRepositoryInterface
 */
interface MessageRepositoryInterface
{
    /**
     * @param MessageInterface $message
     */
    public function save(MessageInterface $message): void;
}
