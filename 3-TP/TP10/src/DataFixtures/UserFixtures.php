<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Faker;

;

class UserFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $passwordHasher) {}
    public function load(ObjectManager $manager): void
    {
        $admin = new User();
        $admin->setEmail("admin@gmail.fr");
        $admin->setLastname("Coulombel");
        $admin->setFirstname("Selim");
        $admin->setAddress("20 rue du Luxembourg");
        $admin->setTel("0611223344");
        $admin->setZipcode("59100");
        $admin->setCity("Roubaix");
        $admin->setPassword(
            $this->passwordHasher->hashPassword($admin, 'Test01')
        );
        $admin->setRoles(['ROLE_ADMIN']);
        $manager->persist($admin);

        $faker = Faker\Factory::create('fr_FR');

        for ($usr =1; $usr <=5; $usr++) {
            $user = new User();
            $user->setEmail($faker->email);
            $user->setLastname($faker->lastName);
            $user->setFirstname($faker->firstName);
            $user->setAddress($faker->streetAddress);
            $user->setTel($faker->mobileNumber);
            $user->setZipcode(str_replace(' ', '', $faker->postcode));
            $user->setCity($faker->city);
            $user->setPassword(
                $this->passwordHasher->hashPassword($user, 'Test01')
            );

            $manager->persist($user);            
       
    } 
    
    $manager->flush();
}}
