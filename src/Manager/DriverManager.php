<?php


namespace CarGallery\CoreBundle\Manager;

use CarGallery\CoreBundle\Repository\DriverRepository;

/**
 * Defines interactions possible with the driver manager.
 *
 * @package CarGallery\CoreBundle\Manager
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class DriverManager
{
    /**
     * @var DriverRepository
     */
    protected $driverRepo;

    /**
     * DriverManager constructor.
     *
     * @param DriverRepository $driverRepo
     */
    public function __construct(DriverRepository $driverRepo)
    {
        $this->driverRepo = $driverRepo;
    }

    public function findById(int $id, bool $deleted = false)
    {
        return $this->driverRepo->find($id);
    }
}
