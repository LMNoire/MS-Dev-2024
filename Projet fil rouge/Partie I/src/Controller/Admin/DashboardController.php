<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Operation;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use Symfony\Component\Security\Core\User\UserInterface;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;


class DashboardController extends AbstractDashboardController
{
    private $authorizationChecker;
    private $adminUrlGenerator;

    public function __construct(
        AuthorizationCheckerInterface $authorizationChecker,
        AdminUrlGenerator $adminUrlGenerator
    ) {
        $this->authorizationChecker = $authorizationChecker;
        $this->adminUrlGenerator = $adminUrlGenerator;
    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response {
        if ($this->isGranted('ROLE_ADMIN') || $this->isGranted('ROLE_SENIOR') || $this->isGranted('ROLE_APPRENTI') || $this->isGranted('ROLE_CUSTOMER')) {
            $url = $this->adminUrlGenerator
                ->setController(OperationCrudController::class) 
                ->generateUrl();
            return $this->redirect($url);
        } else {
            throw new AccessDeniedException('Vous n\'avez pas accès à cette section.');
        }
    }


    public function configureAssets(): Assets {
        return parent::configureAssets()
            ->addCssFile('css/Sidebar.css');
    }
    
    
    public function configureMenuItems(): iterable {
        //Admin dashboard
        if ($this->isGranted('ROLE_ADMIN')) {
            yield MenuItem::section('Principal');
            yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
            yield MenuItem::subMenu('Opérations', 'fa fa-broom')
                ->setSubItems([
                    MenuItem::linkToCrud('Toutes les opérations', 'fa fa-tags', Operation::class),
                    MenuItem::linkToCrud('En attente de Validation', 'fa fa-clock-o', Operation::class)
                        ->setQueryParameter('status', 'En attente de Validation'),
                    MenuItem::linkToCrud('En cours', 'fa fa-arrow-right', Operation::class)
                        ->setQueryParameter('status', 'En cours'),
                    MenuItem::linkToCrud('Terminées', 'fa fa-check', Operation::class)
                        ->setQueryParameter('status', 'Terminée'),
                    MenuItem::linkToCrud('Archivées', 'fa fa-history', Operation::class)
                        ->setQueryParameter('status', 'Archivée'),
            ]);
            yield MenuItem::linkToRoute('Statistiques', 'fa fa-pie-chart', 'stats');   
            yield MenuItem::submenu('Profil', 'fa fa-user');
            yield MenuItem::subMenu('Membres', 'fa fa-users')
                ->setSubItems([
                    MenuItem::linkToCrud('Clients', 'fa fa-user', User::class)
                        ->setQueryParameter('userType', 'customer'),
                    MenuItem::linkToCrud('Employés', 'fa fa-briefcase', User::class)
                        ->setQueryParameter('userType', 'employee'),
            ]);        
            // yield MenuItem::linkToRoute('Statistiques', 'fa fa-chart-line', 'statistics_route');

            yield MenuItem::section('Support');
            // yield MenuItem::linkToCrud('Votre Profil', 'fa fa-user', User::class);
            yield MenuItem::linkToRoute(
                'English', 
                "fa-solid fa-globe", 
                'change_locale', 
                [
                    'locale' => 'en', 
                ]
            );
            yield MenuItem::linkToRoute(
                'Français', 
                "fa-solid fa-globe", 
                'change_locale', 
                [
                    'locale' => 'fr', 
                ]
            );
            yield MenuItem::linkToRoute('Votre Profil', 'fa fa-user', 'profile_edit');
            yield MenuItem::linkToLogout('Déconnexion', 'fa fa-sign-out');
        }
        //Senior dashboard-
        if ($this->isGranted('ROLE_SENIOR')) {
            yield MenuItem::section('Principal');
            yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
            yield MenuItem::subMenu('Opérations', 'fa fa-broom')
                ->setSubItems([
                    MenuItem::linkToCrud('Toutes les opérations', 'fa fa-tags', Operation::class),
                    MenuItem::linkToCrud('En attente de Validation', 'fa fa-clock-o', Operation::class)
                        ->setQueryParameter('status', 'En attente de Validation'),
                    MenuItem::linkToCrud('En cours', 'fa fa-arrow-right', Operation::class)
                        ->setQueryParameter('status', 'En cours'),
                    MenuItem::linkToCrud('Terminées', 'fa fa-check', Operation::class)
                        ->setQueryParameter('status', 'Terminée'),
                     MenuItem::linkToCrud('Archivées', 'fa fa-history', Operation::class)
                        ->setQueryParameter('status', 'Archivée'),
            ]);
            yield MenuItem::section('Support');
            yield MenuItem::linkToCrud('Votre Profil', 'fa fa-user', User::class);
            yield MenuItem::linkToRoute(
                'English', 
                "fa-solid fa-globe", 
                'change_locale', 
                [
                    'locale' => 'en', 
                ]
            );
            yield MenuItem::linkToRoute(
                'Français', 
                "fa-solid fa-globe", 
                'change_locale', 
                [
                    'locale' => 'fr', 
                ]
            );
            yield MenuItem::linkToLogout('Déconnexion', 'fa fa-sign-out');
        }
        if ($this->isGranted('ROLE_APPRENTI')) {
            
            yield MenuItem::section('Principal');
            yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
            yield MenuItem::subMenu('Opérations', 'fa fa-broom')->setSubItems([
                MenuItem::linkToCrud('Toutes les opérations', 'fa fa-tags', Operation::class),
                MenuItem::linkToCrud('En attente de Validation', 'fa fa-clock-o', Operation::class)
                ->setQueryParameter('status', 'En attente de Validation'),
                MenuItem::linkToCrud('En cours', 'fa fa-arrow-right', Operation::class)
                    ->setQueryParameter('status', 'En cours'),
                MenuItem::linkToCrud('Terminées', 'fa fa-check', Operation::class)
                    ->setQueryParameter('status', 'Terminée'),
                MenuItem::linkToCrud('Archivées', 'fa fa-history', Operation::class)
                    ->setQueryParameter('status', 'Archivée'),
            ]);
            yield MenuItem::section('Support');
            yield MenuItem::linkToRoute('Votre Profil', 'fa fa-user', 'profile_edit');
            yield MenuItem::linkToRoute(
                'English', 
                "fa-solid fa-globe", 
                'change_locale', 
                [
                    'locale' => 'en', 
                ]
            );
            yield MenuItem::linkToRoute(
                'Français', 
                "fa-solid fa-globe", 
                'change_locale', 
                [
                    'locale' => 'fr', 
                ]
            );

            yield MenuItem::linkToLogout('Déconnexion', 'fa fa-sign-out');
        }
        if ($this->isGranted('ROLE_CUSTOMER')) {
            yield MenuItem::section('Principal');
            yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
            yield MenuItem::subMenu('Opérations', 'fa fa-broom')
                ->setSubItems([
                    MenuItem::linkToCrud('Toutes les opérations', 'fa fa-tags', Operation::class),
                    MenuItem::linkToCrud('En attente de Validation', 'fa fa-clock-o', Operation::class)
                        ->setQueryParameter('status', 'En attente de Validation'),
                    MenuItem::linkToCrud('En cours', 'fa fa-arrow-right', Operation::class)
                        ->setQueryParameter('status', 'En cours'),
                    MenuItem::linkToCrud('Terminées', 'fa fa-check', Operation::class)
                        ->setQueryParameter('status', 'Terminée'),
                    MenuItem::linkToCrud('Archivées', 'fa fa-history', Operation::class)
                        ->setQueryParameter('status', 'Archivée'),
            ]);
            yield MenuItem::section('Support');
            yield MenuItem::linkToRoute('Votre Profil', 'fa fa-user', 'profile_edit');
            yield MenuItem::linkToRoute(
                'English', 
                "fa-solid fa-globe", 
                'change_locale', 
                [
                    'locale' => 'en', 
                ]
            );
            yield MenuItem::linkToRoute(
                'Français', 
                "fa-solid fa-globe", 
                'change_locale', 
                [
                    'locale' => 'fr', 
                ]
            );

            yield MenuItem::linkToLogout('Déconnexion', 'fa fa-sign-out');
        }
    }

    public function configureDashboard(): Dashboard {
            return Dashboard::new()
            ->setTitle('<img src="images/cleanThis.png" class="img-fluid d-flex" style="max-width:200px; width:200%; padding-right:40px">');
        }

    public function configureUserMenu(UserInterface $user): UserMenu {
            return parent::configureUserMenu($user)
                ->setName($user->getFirstname())
                ->displayUserName(true);
        }
}