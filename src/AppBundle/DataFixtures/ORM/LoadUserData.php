<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 12/04/2017
 * Time: 10:20.
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    use ContainerAwareTrait;

    //Load fixture data user
    public function load(ObjectManager $manager)
    {
        // Array of data for the fixture
        $usersData = [
            [
                'username' => 'superman',
                'email' => 'superman@user.sup',
                'password' => 'sup',
                'roles' => ['ROLE_ADMIN'],
            ],
            [
                'username' => 'batman',
                'email' => 'batman@user.bat',
                'password' => 'bat',
                'roles' => ['ROLE_ADMIN'],
            ],
            [
                'username' => 'spiderman',
                'email' => 'spiderman@user.spi',
                'password' => 'spi',
//                'roles'     => array(),
                'roles' => ['ROLE_USER'],
            ],
            [
                'username' => 'Martine',
                'email' => 'martine@user.fr',
                'password' => 'mar',
                'roles' => [],
            ],
            [
                'username' => 'Jean',
                'email' => 'jean@user.fr',
                'password' => 'jea',
                'roles' => [],
            ],
            [
                'username' => 'Marc',
                'email' => 'marc@user.fr',
                'password' => 'mar',
                'roles' => [],
            ],
            [
                'username' => 'David',
                'email' => 'david@user.fr',
                'password' => 'dav',
                'roles' => [],
            ],
        ];

        // Accessing the user manager service
        $userManager = $this->container->get('fos_user.user_manager');

        foreach ($usersData as $i => $userData) {
            $user = $userManager->createUser();
            $user->setUsername($userData['username']);
            $user->setEmail($userData['email']);
            $user->setPlainPassword($userData['password']);
            $user->setEnabled(true);
            $user->setRoles($userData['roles']);

            $manager->persist($user);
            $this->addReference(sprintf('user-%s', $i), $user);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 10;
    }
}
