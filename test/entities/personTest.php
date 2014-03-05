<?php
include_once(getcwd().'/test/baseTestCase.php');
include_once(getcwd().'/entities/person.php');

/**
 * 
 * This is a unit test for the Person Class.
 * @author rachelg07
 * @version 1.0
 * @package php_addressbook.test.entities
 */


class personTest extends baseTestCase
{
	/**
	 * Person object
	 * @var Person
	 */
        private $person;
        
        /**
         * 
         * Constructor
         */
        public function __construct() {
                parent::__construct();        
                $this->person = new Person();
        }
        
        /**
         * 
         * Tests Person overloaded constructor
         */
        public function testPersonConstructor() {
        	$this->person = Person::person("rachel", "johnson", "456 Rockrimmon Blvd","Colorado Springs", "CO", "12345","444-587-9632");
        	
        	$this->assertEquals("rachel", $this->person->getFirstName());
        	$this->assertEquals("johnson", $this->person->getLastName());
        	$this->assertEquals("456 Rockrimmon Blvd", $this->person->getAddress());
        	$this->assertEquals("Colorado Springs", $this->person->getCity());
        	$this->assertEquals("CO", $this->person->getState());
        	$this->assertEquals("12345", $this->person->getZip());
        	$this->assertEquals("444-587-9632", $this->person->getPhone());
        	
        }
        
        /**
         * Tests Person setFirstName function
         */
        public function testSetFirstName() {
                $this->person->setFirstName("rachel");
                $this->assertEquals("rachel",$this->person->getFirstName());
                $this->person->setFirstName("bob");
                $this->assertNotEquals("rachel",$this->person->getFirstName());
        }
        
        public function testGetFirstName() {
                $this->person->setFirstName("rachel");
                $this->assertEquals("rachel",$this->person->getFirstName());
        }
        
        /**
         * 
         * Tests Person setLastName function
         */
        
        public function testSetLastName() {
        	$this->person->setLastName("Johnson");
        	$this->assertEquals("Johnson",$this->person->getLastName());
        	$this->person->setLastName("smith");
        	$this->assertNotEquals("Johnson",$this->person->getLastName());
        }
        
        public function testGetLastName() {
        	$this->person->setLastName("Johnson");
        	$this->assertEquals("Johnson",$this->person->getLastName());
        }
        
        /**
         * 
         * Tests Person setAddress function
         */
        public function testSetAddress() {
        	$this->person->setAddress("456 Rockrimmon Blvd");
        	$this->assertEquals("456 Rockrimmon Blvd",$this->person->getAddress());
        	$this->person->setAddress("123 Ave");
        	$this->assertNotEquals("456 Rockrimmon Blvd",$this->person->getAddress());
        }
        
        public function testGetAddress() {
        	$this->person->setAddress("456 Rockrimmon Blvd");
        	$this->assertEquals("456 Rockrimmon Blvd",$this->person->getAddress());
        }
        
        /**
         * 
         * Tests Person setCity function
         */
        
        public function testSetCity() {
        	$this->person->setCity("Colorado Springs");
        	$this->assertEquals("Colorado Springs",$this->person->getCity());
        	$this->person->setCity("Pittsburgh");
        	$this->assertNotEquals("Colorado Springs",$this->person->getCity());
        }
        
        public function testGetCity() {
        	$this->person->setCity("Colorado Springs");
        	$this->assertEquals("Colorado Springs",$this->person->getCity());
        }
        
        /**
         * 
         * Tests Person setState function
         */
        public function testSetState() {
        	$this->person->setState("CO");
        	$this->assertEquals("CO",$this->person->getState());
        	$this->person->setState("AZ");
        	$this->assertNotEquals("CO",$this->person->getState());
        }
        
        public function testGetState() {
        	$this->person->setState("CO");
        	$this->assertEquals("CO",$this->person->getState());
        }
        
        /**
         * 
         * Tests Person setZip function
         */
        public function testSetZip() {
        	$this->person->setZip("12345");
        	$this->assertEquals("12345",$this->person->getZip());
        	$this->person->setZip("56239");
        	$this->assertNotEquals("12345",$this->person->getZip());
        }
        
        public function testGetZip() {
        	$this->person->setZip("12345");
        	$this->assertEquals("12345",$this->person->getZip());
        }
        
        /**
         * 
         * Tests Person setPhone function
         */
        
        public function testSetPhone() {
        	$this->person->setPhone("444-587-9632");
        	$this->assertEquals("444-587-9632",$this->person->getPhone());
        	$this->person->setPhone("333-555-5689");
        	$this->assertNotEquals("444-587-9632",$this->person->getPhone());
        }
        
        public function testGetPhone() {
        	$this->person->setPhone("444-587-9632");
        	$this->assertEquals("444-587-9632",$this->person->getPhone());
        }
        
        
        
}
?>