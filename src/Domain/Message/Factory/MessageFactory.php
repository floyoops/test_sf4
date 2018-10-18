<?php

namespace App\Domain\Message\Factory;

use App\Domain\Message\Model\MessageModel;

/**
 * Class MessageFactory
 */
class MessageFactory
{
    /**
     * @return MessageModel
     */
    public function register(): MessageModel
    {
        return new MessageModel();
    }
}
