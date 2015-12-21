<?php


namespace CarGallery\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Defines a person that is driving a Car.
 *
 * @package CarGallery\CoreBundle\Entity
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 *
 * @ORM\Entity(repositoryClass="CarGallery\CoreBundle\Repository\DriverRepository")
 * @ORM\Table(name="driver")
 */
class Driver extends AbstractTemporalEntity
{
    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string")
     */
    protected $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string")
     */
    protected $lastName;

    /**
     * Driver constructor.
     *
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
}
