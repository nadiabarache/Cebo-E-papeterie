<?php
namespace EP\EpapeterieBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EP\EpapeterieBundle\Entity\Media;

class MediaData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $media = new Media();
        $media->setPath('http://media.cultura.com/media/catalog/product/cache/1/image/500x500/0dc2d03fe217f8c83829496872af24a0/s/t/stylo-bil-bic-cristal-bleu-stylo-bille-bic-cristal-bleu-0070330129627_0.jpg?t=1427532530');
        $media->setAlt('stylo_bic');
        $manager->persist($media);


        $media2 = new Media();
        $media2->setPath('http://www.papeteriedudome.fr/local/uploaded/catalog/photo_m/stylo_personnalise_slim_noir_face.jpg');
        $media2->setAlt('stylo_plume_waterman ');
        $manager->persist($media2);


        $media3 = new Media();
        $media3->setPath('http://www.stylo-waterman.com/405-1259-home/stylo-roller-waterman-hemisphere-laque-noire-ct.jpg');
        $media3->setAlt(' waterman_hémisphère ');
        $manager->persist($media3);


        $media4 = new Media();
        $media4->setPath('http://stylosenligne.com/2030-7861-large/stylo-bille-waterman-exception-laque-noire-st.jpg');
        $media4->setAlt(' waterman_laque_noire ');
        $manager->persist($media4);

        $media5 = new Media();
        $media5->setPath('http://www.stylo-waterman.com/405-1259-home/stylo-roller-waterman-hemisphere-laque-noire-ct.jpg');
        $media5->setAlt(' waterman_bille_chrome');
        $manager->persist($media5);


        $media6 = new Media();
        $media6->setPath('http://www.webandluxe.com/wp-content/uploads/2011/12/Parker-Stylo-Noir.jpg');
        $media6->setAlt(' Parker_Stylo_Noir');
        $manager->persist($media6);

        $media7 = new Media();
        $media7->setPath('http://www.rentreediscount.com/publicmedia/original/640/13/fr/fourniture-scolaires-pas-cher-Cahier_piqure_165x210-72pages-marge_4e1b1cd97c908.gif');
        $media7->setAlt(' cahier oxford A4');
        $manager->persist($media7);

        $media8 = new Media();
        $media8->setPath('http://www.rentreediscount.com/publicmedia/original/640/13/fr/fourniture-scolaires-pas-cher-Cahier_piqure_165x210-72pages-marge_4e1b1cd97c908.gif');
        $media8->setAlt(' cahier claire A4');
        $manager->persist($media8);



        $manager->flush();


        $this->addReference('media', $media);
        $this->addReference('media2', $media2);
        $this->addReference('media3', $media3);
        $this->addReference('media4', $media4);
        $this->addReference('media5', $media5);
        $this->addReference('media6', $media6);
        $this->addReference('media7', $media7);
        $this->addReference('media8', $media8);
    }

    public function getOrder()
    {
        return 1;
    }
}