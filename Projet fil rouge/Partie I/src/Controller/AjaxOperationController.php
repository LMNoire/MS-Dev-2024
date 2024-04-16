<?php
// src/Controller/AjaxOperationController.php

namespace App\Controller;

use Exception;
use App\Entity\user;
use App\Entity\Operation;
use App\Service\SendMailService;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class AjaxOperationController extends AbstractController
{
    /**
     * @Route("/ajax/get-cleaning-options", name="ajax_get_cleaning_options")
     */
    public function getCleaningOptions(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $operationType = $data['type'] ?? '';

        // Ici, on détermine les options en fonction du type d'opération
        $options = $this->determineCleaningOptions($operationType);

        return $this->json(['options' => $options]);
    }

    private function determineCleaningOptions(string $operationType): array
    {
        // Ici, mettez votre logique pour déterminer les options de nettoyage
        // Par exemple :
        switch ($operationType) {
            case 'Little':
                return ['Nettoyage de bureau', 'Nettoyage de fenêtres','Nettoyage de sols','Nettoyage de sanitaires','Nettoyage de cuisines','Nettoyage de meubles','Nettoyage de tapis','Nettoyage de murs','Désinfection de surfaces','Nettoyage équipements électroniques','Nettoyage de portes et poignées','Nettoyage de claviers et téléphones','Nettoyage de rideaux','Nettoyage de luminaires','Nettoyage de petits espaces extérieurs','Nettoyage de vitrines','Nettoyage de volets','Nettoyage de petits entrepôts','Nettoyage après petit événement','Nettoyage de véhicules de société'];
            case 'Medium':
                return [
                    'Nettoyage commercial',
                    'Nettoyage de moquette',
                    'Nettoyage après travaux',
                    'Nettoyage de façades',
                    'Nettoyage de parkings',
                    'Nettoyage de terrasses',
                    'Nettoyage de jardins',
                    'Nettoyage de grandes surfaces vitrées',
                    'Nettoyage de halls d\'entrée',
                    'Nettoyage de restaurants',
                    'Nettoyage de magasins',
                    'Nettoyage de gymnases',
                    'Nettoyage de salles de conférence',
                    'Nettoyage de zones de réception',
                    'Nettoyage de piscines',
                    'Nettoyage de salles d\'exposition',
                    'Nettoyage de salles de sport',
                    'Nettoyage de grandes cuisines',
                    'Nettoyage de vestiaires',
                    'Nettoyage d\'aires de jeux'
                ];
            case 'Big':
                return  [
                    'Nettoyage industriel',
                    'Nettoyage de façade',
                    'Nettoyage de grandes structures',
                    'Nettoyage de chantiers',
                    'Nettoyage de grandes zones extérieures',
                    'Nettoyage après sinistre',
                    'Nettoyage de silos',
                    'Nettoyage de dépôts',
                    'Nettoyage de hangars',
                    'Nettoyage de quais',
                    'Nettoyage de grandes zones de stockage',
                    'Nettoyage de zones de production',
                    'Nettoyage de machinerie lourde',
                    'Nettoyage de grues',
                    'Nettoyage de flottes de véhicules',
                    'Nettoyage de pistes',
                    'Nettoyage de terminaux',
                    'Nettoyage de centres logistiques',
                    'Nettoyage de docks',
                    'Nettoyage de grandes aires de jeux'
                ]
                ; 
            default:
                return ['Custom'];
        }
    }

/**
 * @Route("/ajax/create-operation", name="ajax_create_operation")
 */
public function createOperation(Request $request, EntityManagerInterface $entityManager, Security $security, SendMailService $mail): JsonResponse
{
    $user = $security->getUser();

    if ($user !== null) {
        $operation = new Operation();
        $operation->setType($request->request->get('type')); // Utiliser request->get pour les champs de texte
        $operation->setAttachmentFile($request->files->get('attachmentFile')); // Utiliser request->files->get pour le fichier
        $operation->setName($request->request->get('name'));
        $operation->setDescription($request->request->get('description'));
        $operation->setZipcodeOpe($request->request->get('zipcode'));
        $operation->setStreetOpe($request->request->get('street'));
        $operation->setCityOpe($request->request->get('city'));
        $operation->setCustomer($user);
        $operation->setPrice($this->determinePriceBasedOnType($request->request->get('type')));


        $rdvDate = $request->request->get('rdvDate');
        if ($rdvDate) {
            $operation->setRdvAt(new \DateTimeImmutable($rdvDate));
        }

        $entityManager->persist($operation);
        $entityManager->flush();

        $customer = $operation->getCustomer();

        try {
            $mail->send(
                'no-reply@cleanthis.fr',
                $customer->getEmail(),
                'Création de votre opération',
                'opecreate',
                [
                    'user' => $customer
                ]
            );
        } catch (Exception $e) {
        } 

        return $this->json(['status' => 'success', 'message' => 'Opération créée avec succès']);
    } else {
        return $this->json(['status' => 'error', 'message' => 'Utilisateur non trouvé']);
    }
}

        private function determinePriceBasedOnType(string $type): int
        {
            // Déterminez le prix en fonction du type d'opération
            switch ($type) {
                case 'Little':
                    return 1000;
                case 'Medium':
                    return 2500;
                case 'Big':
                    return 5000;
                default:
                    return 0; // ou un autre prix par défaut pour des opérations personnalisées
            }
        }

        /**
 * @Route("/ajax/edit-operation/{id}", name="ajax_edit_operation")
 */
public function editOperation(int $id, EntityManagerInterface $entityManager): JsonResponse
{
    $operation = $entityManager->getRepository(Operation::class)->find($id);
    if (!$operation) {
        return $this->json(['status' => 'error', 'message' => 'Opération non trouvée'], 404);
    }

    // Convertir l'entité en tableau ou objet utilisable pour le JSON
    $operationData = [
        'id' => $operation->getId(),
        'type' => $operation->getType(),
        'name' => $operation->getName(),
        'description' => $operation->getDescription(),
        'street' => $operation->getStreetOpe(),
        'zipcode' => $operation->getZipcodeOpe(),
        'city' => $operation->getCityOpe(),
    ];

    return $this->json(['status' => 'success', 'operation' => $operationData]);
}
        /**
        * @Route("/ajax/update-operation/{id}", name="ajax_update_operation")
        */
        public function updateOperation(Request $request, Operation $operation, EntityManagerInterface $entityManager): JsonResponse
        {
           if (!$operation) {
               return $this->json(['status' => 'error', 'message' => 'Opération non trouvée']);
           }
       
           $data = json_decode($request->getContent(), true);
           
           $operation->setType($request->request->get('type')); // Utiliser request->get pour les champs de texte
           $operation->setAttachmentFile($request->files->get('attachmentFile')); // Utiliser request->files->get pour le fichier
           $operation->setName($request->request->get('name'));
           $operation->setDescription($request->request->get('description'));
           $operation->setZipcodeOpe($request->request->get('zipcode'));
           $operation->setStreetOpe($request->request->get('street'));
           $operation->setCityOpe($request->request->get('city'));
           $operation->setPrice($this->determinePriceBasedOnType($request->request->get('type')));
           $operation->setRdvAt(new \DateTimeImmutable());
       
           $entityManager->flush();
       
           return $this->json(['status' => 'success', 'message' => 'Opération mise à jour avec succès']);
        }
        /**
 * @Route("/ajax/update-operation-operator/{id}", name="ajax_update_operation_operator")
 */

 public function updateOperationOperator(int $id, Request $request, EntityManagerInterface $entityManager, Security $security, UrlGeneratorInterface $urlGenerator): RedirectResponse
 {
     // Vérification des autorisations
     if (!$security->isGranted('ROLE_ADMIN')) {
         // Redirection en cas d'accès non autorisé
         return new RedirectResponse($urlGenerator->generate('your_login_route_name'));
     }
 
     // Récupération de l'opération à mettre à jour
     $operation = $entityManager->getRepository(Operation::class)->find($id);
     if (!$operation) {
         // Gérer l'opération non trouvée
         // Redirection vers une page d'erreur par exemple
         return new RedirectResponse($urlGenerator->generate('your_error_route_name'));
     }
 
     // Récupération des données de la requête
     $data = $request->request->all();
     $newOperatorId = $data['newOperatorId'] ?? null;
 
     // Vérification si l'ID de l'opérateur est fourni
     if (null === $newOperatorId) {
         // Redirection en cas d'ID d'opérateur non fourni
         return new RedirectResponse($urlGenerator->generate('your_error_route_name'));
     }
 
     // Recherche du nouvel opérateur
     $newOperator = $entityManager->getRepository(User::class)->find($newOperatorId);
     if (!$newOperator) {
         // Gérer l'opérateur non trouvé
         // Redirection vers une page d'erreur par exemple
         return new RedirectResponse($urlGenerator->generate('your_error_route_name'));
     }
 
     // Mise à jour de l'opération avec le nouvel opérateur
     $operation->setSalarie($newOperator);
     $entityManager->flush();
 
     // Réaliser la redirection vers la page spécifiée
     return new RedirectResponse('/admin');
 }



        /**
         * @Route("/admin/change-operator/{id}", name="admin_change_operator")
         */
        public function changeOperator(int $id, EntityManagerInterface $entityManager, UserRepository $userRepository): Response {
            $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
            $operation = $entityManager->getRepository(Operation::class)->find($id);
            if (!$operation) {
                throw $this->createNotFoundException('Opération non trouvée');
            }
        
            $operators = $userRepository->findByRoles(['ROLE_SENIOR', 'ROLE_ADMIN', 'ROLE_APPRENTI']);
        
            return $this->render('admin/change.operator.twig', [
                'operation' => $operation,
                'operators' => $operators,
            ]);
        }
}