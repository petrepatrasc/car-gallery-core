<?php


namespace CarGallery\CoreBundle\Manager;


use Doctrine\Common\Persistence\ObjectManager;

class BaseManager
{
    /**
     * @var ObjectManager
     */
    protected $manager;

    /**
     * BaseManager constructor.
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
