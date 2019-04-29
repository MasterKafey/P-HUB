<?php

namespace AppBundle\Command\User;


use AppBundle\Entity\User;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class GiveRoleToUserCommand extends Command
{

    /**
     * @var EntityManager
     */
    public $entityManager;

    /**
     * @var ParameterBagInterface
     */
    public $container;


    public function __construct(ManagerRegistry $registry, ContainerInterface $container)
    {
        parent::__construct(null);
        $this->entityManager = $registry->getManager();
        $this->container = $container;
    }


    public function configure()
    {
        $this
            ->setName('app:user:give-role')
            ->setDescription('Give a role to a user')
            ->addArgument('user-id', InputArgument::REQUIRED, 'The user\'s id')
            ->addArgument('role', InputArgument::REQUIRED, 'The role given to user');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $user = $this->entityManager
            ->getRepository(User::class)->find($input->getArgument('user-id'));

        if (null === $user) {
            $output->writeln("The given user does not exist");
            return;
        }

        $role = $input->getArgument('role');
        $rolesHierarchy = $this->container->getParameter('security.role_hierarchy.roles');
        $roles = [];
        foreach ($rolesHierarchy as $roleParent => $rolesChild) {
            $roles[] = $roleParent;
            $roles = array_merge($roles, $rolesChild);
        }

        if(!in_array($role, $roles))
        {
            $output->writeln("The role you give doesn't not exist");
            return;
        }

        $user->addRole($role);
        $this->entityManager->persist($user);
        $this->entityManager->flush();
        $output->writeln("User successfully updated !");
    }
}
