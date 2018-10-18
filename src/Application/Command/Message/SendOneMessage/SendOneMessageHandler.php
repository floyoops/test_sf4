<?php

namespace App\Application\Command\Message\SendOneMessage;

use App\Application\Command\CommandHandlerInterface;
use App\Domain\Message\Exception\SaveMessageException;
use App\Domain\Message\Factory\MessageFactory;
use App\Domain\Message\Repository\MessageRepositoryInterface;
use Psr\Log\LoggerInterface;

/**
 * Class SendOneMessageCommandHandler
 */
class SendOneMessageHandler implements CommandHandlerInterface
{
    /**
     * @var MessageFactory
     */
    private $messageFactory;

    /**
     * @var MessageRepositoryInterface
     */
    private $repository;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * SendOneMessageCommandHandler constructor.
     *
     * @param MessageFactory $messageFactory
     * @param MessageRepositoryInterface $repository
     * @param LoggerInterface $logger
     */
    public function __construct(MessageFactory $messageFactory, MessageRepositoryInterface $repository, LoggerInterface $logger)
    {
        $this->messageFactory = $messageFactory;
        $this->repository = $repository;
        $this->logger = $logger;
    }

    /**
     * @param SendOneMessageCommand $command
     */
    public function __invoke(SendOneMessageCommand $command): void
    {
        $message = $this->messageFactory->register();
        $message->setMessage($command->getText());
        try {
            $this->repository->save($message);
        } catch (\Exception $e) {
            $msg = 'Error as occurred on save message';
            $this->logger->error($msg);
            throw new SaveMessageException($msg);
        }
        $this->logger->info('Save message success');
    }
}
