<?php
namespace EP\EpapeterieBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EP\EpapeterieBundle\Entity\Categories;

class CategoriesData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $categorie1 = new Categories();
        $categorie1->setNom('Stylos');
        $categorie1->setImage($this->getReference('media'));
        $manager->persist($categorie1);

        $categorie2 = new Categories();
        $categorie2->setNom('Cahiers');
        $categorie2->setImage($this->getReference('media7'));
        $manager->persist($categorie2);




        $manager->flush();


        $this->addReference('categorie1', $categorie1);
        $this->addReference('categorie2', $categorie2);

    }

    public function getOrder()
    {
        return 2;
    }
}