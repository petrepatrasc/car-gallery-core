<?php


namespace CarGallery\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Defines a person that is driving a Car.
 *
 * @package CarGallery\CoreBundle\Entity
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 *
 * @ORM\Entity()
 * @ORM\Table(name="driver")
 */
class Driver extends AbstractTemporalEntity
{
    protected $firstName;

    protected $lastName;
}
