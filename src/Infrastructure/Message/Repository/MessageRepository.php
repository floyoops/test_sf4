<?php

namespace App\Infrastructure\Message\Repository;

use App\Domain\Message\Model\MessageInterface;
use App\Domain\Message\Repository\MessageRepositoryInterface;

/**
 * Class MessageRepository
 */
class MessageRepository implements MessageRepositoryInterface
{
    /**
     * @param MessageInterface $message
     */
    public function save(MessageInterface $message): void
    {
    }
}
