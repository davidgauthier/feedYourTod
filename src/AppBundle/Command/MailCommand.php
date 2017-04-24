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
        $recipeManager = $this->getContainer()->get("app.recipe_manager");
        $recipe = $recipeManager->getRandomRecipe();

        $message = \Swift_Message::newInstance()
            ->setSubject('Today\'s recipe')
            ->setFrom('feedYourTod@gmail.com')
            ->setTo('dtirnan@hotmail.com')
            ->setBody(
                $this->getContainer()->get('templating')->render(
                    ':mail:randomRecipe.html.twig',
                    ['recipe' => $recipe]
                ),
                'text/html'
            );

        $this->getContainer()->get('mailer')->send($message);

        $text = 'Mail sent';

        $output->writeln($text);

    }

}
