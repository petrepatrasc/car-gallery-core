<?php


namespace CarGallery\CoreBundle\Tests\Unit\Manager;


use CarGallery\CoreBundle\Entity\Driver;
use CarGallery\CoreBundle\Manager\DriverManager;
use CarGallery\CoreBundle\Tests\Unit\AbstractCoreUnitTest;

/**
 * Test the behaviour of the Driver manager in isolation.
 *
 * @package CarGallery\CoreBundle\Tests\Unit\Manager
 * @author  Petre Pătrașc <petre@dreamlabs.ro>
 */
class DriverManagerTest extends AbstractCoreUnitTest
{
    const VALID_ID = 123;
    /**
     * @var DriverManager
     */
    protected $manager;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $driverRepository;

    protected function setUp()
    {
        parent::setUp();

        $this->driverRepository = $this->getMockBuilder('CarGallery\CoreBundle\Repository\DriverRepository')
            ->disableOriginalConstructor()
            ->getMock();

        $this->manager = new DriverManager($this->driverRepository);
    }

    public function testGivenThatWeWantToSearchForAnEntryViaAnIdThenTheServiceWillCallTheDataStoreAndReturnItsResultUnaltered()
    {
        $driver = new Driver($this->getFaker()->firstName, $this->getFaker()->lastName);
        $this->driverRepository->expects($this->once())->method('find')->with(self::VALID_ID)->willReturn($driver);

        $actualDriver = $this->manager->findById(self::VALID_ID);

        $this->assertEquals($driver, $actualDriver, 'The service altered the response from the datastore, this was not expected.');
    }
}
