<?php


namespace CarGallery\CoreBundle\Manager;

use CarGallery\CoreBundle\Repository\DriverRepository;

/**
 * Defines interactions possible with the Driver manager.
 *
 * @package CarGallery\CoreBundle\Manager
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class DriverManager
{
    /**
     * @var DriverRepository
     */
    protected $driverRepository;

    /**
     * DriverManager constructor.
     *
     * @param DriverRepository $driverRepository
     */
    public function __construct(DriverRepository $driverRepository)
    {
        $this->driverRepository = $driverRepository;
    }

    public function findById(int $id, bool $deleted = false)
    {
        return $this->driverRepository->find($id);
    }
}
