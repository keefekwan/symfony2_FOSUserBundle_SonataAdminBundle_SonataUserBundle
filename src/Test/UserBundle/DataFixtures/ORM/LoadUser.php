<?php
// src/Test/UserBundle/DataFixtures/ORM/LoadUsers.php

namespace Test\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Test\UserBundle\Entity\User;

class LoadEvents implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $user1 = new User();
        $user1->setUsername('');
        $user1->setEmail('');
        $user1->setPassword('');

    }
}