<?php

namespace App\Domain\Message\Model;

/**
 * Class MessageModel
 */
interface MessageInterface
{
    /**
     * @return null|string
     */
    public function getMessage(): ?string;

    /**
     * @param null|string $message
     * @return MessageModel
     */
    public function setMessage(?string $message): MessageModel;
}
