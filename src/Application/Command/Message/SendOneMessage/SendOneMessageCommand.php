<?php

namespace App\Application\Command\Message\SendOneMessage;

/**
 * Class SendOneMessageCommand
 */
class SendOneMessageCommand
{
    /**
     * @var string
     */
    private $text;

    /**
     * SendOneMessageCommand constructor.
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
}