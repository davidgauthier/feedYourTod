<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class MailCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('send:mail')
            ->setDescription('Mail someone');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
            $message = \Swift_Message::newInstance()
                ->setSubject('Hello Email')
                ->setFrom('send@example.com')
                ->setTo('dtirnan@hotmail.com')
                ->setBody('Burn dem pussyroll');

            $this->getContainer()->get('mailer')->send($message);

            $text = 'Mail sent';

        $output->writeln($text);
    }

}
