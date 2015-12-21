<?php


namespace CarGallery\CoreBundle\Repository;


use CarGallery\CoreBundle\Manager\string;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Defines a mechanism for fetching repositories from an object manager.
 *
 * @package CarGallery\CoreBundle\Manager
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class RepositoryProvider
{
    /**
     * @var ObjectManager
     */
    protected $manager;

    /**
     * RepositoryProvider constructor.
     *
     * @param ObjectManager $manager
     */
    public function __construct(ObjectManager $manager)
    {
        $this->manager = $manager;
    }

    public function getRepository(string $repositoryName)
    {
        return $this->manager->getRepository($repositoryName);
    }
}
