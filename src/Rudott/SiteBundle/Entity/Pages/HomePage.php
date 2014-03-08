<?php

namespace Rudott\SiteBundle\Entity\Pages;

use Rudott\SiteBundle\Form\Pages\HomePageAdminType;

use Doctrine\ORM\Mapping as ORM;
use Kunstmaan\NodeBundle\Entity\AbstractPage;
use Kunstmaan\PagePartBundle\Helper\HasPageTemplateInterface;
use Symfony\Component\Form\AbstractType;

/**
 * HomePage
 *
 * @ORM\Entity()
 * @ORM\Table(name="rudott_home_pages")
 */
class HomePage extends AbstractPage  implements HasPageTemplateInterface
{

    /**
     * Returns the default backend form type for this page
     *
     * @return AbstractType
     */
    public function getDefaultAdminType()
    {
        return new HomePageAdminType();
    }

    /**
     * @return array
     */
    public function getPossibleChildTypes()
    {
        return array(
            array(
                'name'  => 'ContentPage',
                'class' => 'Rudott\SiteBundle\Entity\Pages\ContentPage'
            ),
            array(
                'name'  => 'BehatTestPage',
                'class' => 'Rudott\SiteBundle\Entity\Pages\BehatTestPage'
            )
        );
    }

    /**
     * @return string[]
     */
    public function getPagePartAdminConfigurations()
    {
        return array('RudottSiteBundle:middle-column', 'RudottSiteBundle:left-column', 'RudottSiteBundle:right-column');
    }

    /**
     * {@inheritdoc}
     */
    public function getPageTemplates()
    {
        return array('RudottSiteBundle:homepage');
    }

    /**
     * @return string
     */
    public function getDefaultView()
    {
        return 'RudottSiteBundle:Pages\HomePage:view.html.twig';
    }
}
