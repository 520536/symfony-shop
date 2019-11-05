<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Product;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach($this->productsData()['products'] as $_product)
        {
            $product = new Product();
            $product->setName($_product['name']);
            $product->setSubname($_product['subname']);
            $product->setDescription($_product['description']);
            $product->setPrice($_product['price']);
            $product->setUrl72($_product['url72']);
            $product->setUrl256($_product['url256']);
            $manager->persist($product);
        }

        $manager->flush();
    }

    private function productsData()
    {
        return [
            'products' => [
                1 => [
                    'id' => 1,
                    'name' => 'Watch',
                    'subname' => 'by Rolex',
                    'description' => 'Very good exclusive Rolex wrist watch.',
                    'price' => 1450.55,
                    'url72' => 'http://icons.iconarchive.com/icons/r34n1m4ted/chanel/72/WATCH-icon.png',
                    'url256' => 'http://icons.iconarchive.com/icons/r34n1m4ted/chanel/256/WATCH-icon.png'
                ],

                2 => [
                    'id' => 2,
                    'name' => 'Smartphone',
                    'subname' => 'by Apple',
                    'description' => 'Nice smartphone from Apple.',
                    'price' => 250.45,
                    'url72' => 'http://icons.iconarchive.com/icons/jonathan-rey/devices-pack-3/72/Smartphone-Android-Jelly-Bean-Samsung-Galaxy-S4-icon.png',
                    'url256' => 'http://icons.iconarchive.com/icons/jonathan-rey/devices-pack-3/256/Smartphone-Android-Jelly-Bean-Samsung-Galaxy-S4-icon.png'
                ],

                3 => [
                    'id' => 3,
                    'name' => 'TV',
                    'subname' => 'by Panasonic',
                    'description' => 'The best TV ever made by Panasonic.',
                    'price' => 600,
                    'url72' => 'http://icons.iconarchive.com/icons/oxygen-icons.org/oxygen/72/Devices-video-television-icon.png',
                    'url256' => 'http://icons.iconarchive.com/icons/oxygen-icons.org/oxygen/256/Devices-video-television-icon.png'
                ]
            ]
        ];
    }
}

