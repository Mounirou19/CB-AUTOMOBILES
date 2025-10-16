<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

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
}
