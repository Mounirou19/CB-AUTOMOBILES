<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/article/{id}', name: 'app_article', defaults: ['id' => 1])]
    public function article(int $id): Response
    {
        // Simulate article data
        $articles = [
            1 => [
                'title' => 'Les dernières innovations Volkswagen',
                'content' => 'Découvrez les technologies de pointe qui équipent nos derniers véhicules',
                'image' => 'https://images.unsplash.com/photo-1544636331-e26879cd4d9b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
                'date' => '2024-10-15'
            ],
            2 => [
                'title' => 'Conduite électrique : l\'avenir commence maintenant',
                'content' => 'Explorez notre gamme ID. et découvrez les avantages de la mobilité électrique',
                'image' => 'https://images.unsplash.com/photo-1619976215249-95ad80e4154e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
                'date' => '2024-10-12'
            ]
        ];

        $article = $articles[$id] ?? $articles[1];

        return $this->render('pages/article.html.twig', [
            'article' => $article,
            'articles' => $articles
        ]);
    }

    #[Route('/occasion', name: 'app_occasion')]
    public function occasion(): Response
    {
        // Simulate vehicle data
        $vehicles = [
            [
                'id' => 1,
                'name' => 'Golf 8',
                'price' => 25900,
                'year' => 2022,
                'mileage' => 15000,
                'fuel' => 'Essence',
                'image' => 'https://images.unsplash.com/photo-1606664515524-ed2f786a0bd6?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80'
            ],
            [
                'id' => 2,
                'name' => 'Tiguan',
                'price' => 32900,
                'year' => 2021,
                'mileage' => 22000,
                'fuel' => 'Diesel',
                'image' => 'https://images.unsplash.com/photo-1606220588913-b3aacb4d2f46?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80'
            ],
            [
                'id' => 3,
                'name' => 'Passat',
                'price' => 28500,
                'year' => 2020,
                'mileage' => 35000,
                'fuel' => 'Diesel',
                'image' => 'https://images.unsplash.com/photo-1583121274602-3e2820c69888?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80'
            ]
        ];

        return $this->render('pages/occasion.html.twig', [
            'vehicles' => $vehicles
        ]);
    }

    #[Route('/produit/{id}', name: 'app_produit', defaults: ['id' => 1])]
    public function produit(int $id): Response
    {
        // Simulate detailed vehicle data
        $vehicles = [
            1 => [
                'name' => 'Volkswagen T-Roc',
                'price' => 28900,
                'year' => 2022,
                'mileage' => 12000,
                'fuel' => 'Essence',
                'transmission' => 'Automatique',
                'description' => 'SUV compact alliant style et performance. Parfait pour la ville et les escapades.',
                'images' => [
                    'https://images.unsplash.com/photo-1606220588913-b3aacb4d2f46?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1544636331-e26879cd4d9b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1583121274602-3e2820c69888?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
                ],
                'equipments' => [
                    'Climatisation automatique',
                    'Navigation GPS',
                    'Caméra de recul',
                    'Système audio premium',
                    'Sièges chauffants',
                    'Aide au stationnement'
                ],
                'options' => [
                    'Toit ouvrant panoramique',
                    'Pack LED',
                    'Jantes alliage 19"',
                    'Système keyless'
                ]
            ]
        ];

        $vehicle = $vehicles[$id] ?? $vehicles[1];

        return $this->render('pages/produit.html.twig', [
            'vehicle' => $vehicle
        ]);
    }

    #[Route('/qui-sommes-nous', name: 'app_qui_sommes_nous')]
    public function quiSommesNous(): Response
    {
        $team = [
            [
                'name' => 'Marie Dubois',
                'role' => 'Directrice générale',
                'image' => 'https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'
            ],
            [
                'name' => 'Pierre Martin',
                'role' => 'Responsable commercial',
                'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'
            ],
            [
                'name' => 'Sophie Laurent',
                'role' => 'Conseillère clientèle',
                'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'
            ]
        ];

        $brands = [
            ['name' => 'Volkswagen', 'logo' => 'https://logos-world.net/wp-content/uploads/2021/03/Volkswagen-Logo.png'],
            ['name' => 'Audi', 'logo' => 'https://logos-world.net/wp-content/uploads/2020/08/Audi-Logo.png'],
            ['name' => 'SEAT', 'logo' => 'https://logos-world.net/wp-content/uploads/2020/12/SEAT-Logo.png'],
            ['name' => 'Škoda', 'logo' => 'https://logos-world.net/wp-content/uploads/2020/12/Skoda-Logo.png']
        ];

        return $this->render('pages/qui-sommes-nous.html.twig', [
            'team' => $team,
            'brands' => $brands
        ]);
    }

    #[Route('/services', name: 'app_services')]
    public function services(): Response
    {
        $services = [
            [
                'title' => 'Entretien & Réparation',
                'icon' => 'fas fa-tools',
                'description' => 'Service après-vente complet avec techniciens certifiés Volkswagen',
                'features' => [
                    'Révisions périodiques',
                    'Diagnostic électronique',
                    'Réparations toutes marques',
                    'Pièces d\'origine Volkswagen',
                    'Garantie constructeur'
                ],
                'price_from' => '89€'
            ],
            [
                'title' => 'Financement',
                'icon' => 'fas fa-euro-sign',
                'description' => 'Solutions de financement adaptées à votre budget',
                'features' => [
                    'Crédit auto à taux préférentiel',
                    'Leasing (LOA/LLD)',
                    'Reprise de votre ancien véhicule',
                    'Simulation en ligne',
                    'Réponse immédiate'
                ],
                'price_from' => '1.9%'
            ],
            [
                'title' => 'Assurance',
                'icon' => 'fas fa-shield-alt',
                'description' => 'Protection complète pour votre véhicule',
                'features' => [
                    'Assurance tous risques',
                    'Garantie panne mécanique',
                    'Assistance 24h/24',
                    'Véhicule de remplacement',
                    'Protection juridique'
                ],
                'price_from' => '19€/mois'
            ],
            [
                'title' => 'Vente & Reprise',
                'icon' => 'fas fa-handshake',
                'description' => 'Estimation gratuite et reprise au meilleur prix',
                'features' => [
                    'Estimation en ligne gratuite',
                    'Expertise sur rendez-vous',
                    'Reprise immediate',
                    'Formalités simplifiées',
                    'Prix garanti 15 jours'
                ],
                'price_from' => 'Gratuit'
            ]
        ];

        return $this->render('pages/services.html.twig', [
            'services' => $services
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        $contactInfo = [
            'phone' => '01 23 45 67 89',
            'email' => 'contact@cb-automobiles.fr',
            'address' => '123 Avenue des Automobiles, 75001 Paris',
            'hours' => [
                'Lundi - Vendredi' => '8h30 - 19h00',
                'Samedi' => '9h00 - 18h00',
                'Dimanche' => 'Fermé'
            ]
        ];

        return $this->render('pages/contact.html.twig', [
            'contact_info' => $contactInfo,
        ]);
    }

    #[Route('/mentions-legales', name: 'app_mentions_legales')]
    public function mentionsLegales(): Response
    {
        return $this->render('pages/mentions-legales.html.twig');
    }

    #[Route('/politique-confidentialite', name: 'app_politique_confidentialite')]
    public function politiqueConfidentialite(): Response
    {
        return $this->render('pages/politique-confidentialite.html.twig');
    }

    #[Route('/sitemap.xml', name: 'app_sitemap')]
    public function sitemap(): Response
    {
        $urls = [
            ['loc' => $this->generateUrl('app_home', [], UrlGeneratorInterface::ABSOLUTE_URL), 'priority' => '1.0', 'changefreq' => 'weekly'],
            ['loc' => $this->generateUrl('app_occasion', [], UrlGeneratorInterface::ABSOLUTE_URL), 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['loc' => $this->generateUrl('app_services', [], UrlGeneratorInterface::ABSOLUTE_URL), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => $this->generateUrl('app_contact', [], UrlGeneratorInterface::ABSOLUTE_URL), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => $this->generateUrl('app_qui_sommes_nous', [], UrlGeneratorInterface::ABSOLUTE_URL), 'priority' => '0.7', 'changefreq' => 'monthly'],
            ['loc' => $this->generateUrl('app_mentions_legales', [], UrlGeneratorInterface::ABSOLUTE_URL), 'priority' => '0.3', 'changefreq' => 'yearly'],
            ['loc' => $this->generateUrl('app_politique_confidentialite', [], UrlGeneratorInterface::ABSOLUTE_URL), 'priority' => '0.3', 'changefreq' => 'yearly'],
        ];

        $response = new Response(
            $this->renderView('sitemap.xml.twig', ['urls' => $urls]),
            200
        );
        $response->headers->set('Content-Type', 'application/xml');
        
        return $response;
    }
}
