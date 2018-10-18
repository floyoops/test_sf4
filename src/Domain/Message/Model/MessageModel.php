<?php

namespace App\Domain\Message\Model;

/**
 * Class MessageModel
 */
class MessageModel implements MessageInterface
{
    /**
     * @var string|null
     */
    private $message;

    /**
     * @return null|string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param null|string $message
     * @return MessageModel
     */
    public function setMessage(?string $message): MessageModel
    {
        $this->message = $message;
        return $this;
    }
}
