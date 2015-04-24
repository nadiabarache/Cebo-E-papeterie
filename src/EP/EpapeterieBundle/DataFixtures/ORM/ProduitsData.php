<?php
namespace EP\EpapeterieBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EP\EpapeterieBundle\Entity\Produits;

class ProduitsData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $produit1 = new Produits();
        $produit1->setImage($this->getReference('media'));
        $produit1->setCategorie($this->getReference('categorie1'));
        $produit1->setTva($this->getReference('tva1'));
        $produit1->setNom('stylo bic');
        $produit1->setDescription('Stylo Bic bleu pointe 0.7 ');
        $produit1->setPrix('0.35');
        $produit1->setDisponible('30');

        $manager->persist($produit1);

        $produit2 = new Produits();
        $produit2->setImage($this->getReference('media7'));
        $produit2->setCategorie($this->getReference('categorie2'));
        $produit2->setTva($this->getReference('tva2'));
        $produit2->setNom('cahier Oxford');
        $produit2->setDescription('Cahier oxford A4');
        $produit2->setPrix('3.45');
        $produit2->setDisponible('10');
        $manager->persist($produit2);

        $produit2 = new Produits();
        $produit2->setImage($this->getReference('media8'));
        $produit2->setCategorie($this->getReference('categorie2'));
        $produit2->setTva($this->getReference('tva2'));
        $produit2->setNom('cahier ClaireFontaine');
        $produit2->setDescription('Cahier claire fontaine A4 ');
        $produit2->setPrix('3.45');
        $produit2->setDisponible('10');
        $manager->persist($produit2);

        $manager->flush();


    }

    public function getOrder()
    {
        return 4;
    }
}