<?php


namespace CarGallery\CoreBundle\Tests\Unit;


use Faker\Factory;
use Faker\Generator;

/**
 * Base class governing the unit tests of the core library.
 *
 * @package CarGallery\CoreBundle\Tests\Unit
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
abstract class AbstractCoreUnitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Generator
     */
    protected $faker;

    protected function setUp()
    {
        parent::setUp();

        $this->faker = Factory::create();
    }

    /**
     * @return Generator
     */
    protected function getFaker()
    {
        return $this->faker;
    }
}
