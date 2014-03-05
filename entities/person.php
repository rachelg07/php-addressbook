<?php
        /**
         * This a basic class for a Person object.
         * 
         * @author jim
         * @version 1.0
         * @package php_addressbook.entities
         *
         */
        class Person {
                /**
                 * First Name of Person
                 * 
                 * @var String
                 */
                private $firstName;
                /**
                * Last Name of Person
                *
                * @var String
                */
                private $lastName;
                /**
                * Address of Person
                *
                * @var String
                */
                private $address;
                /**
                * City of Person
                *
                * @var String
                */
                private $city;
                /**
                * state of Person
                *
                * @var String
                */
                private $state;
                /**
                * Zip Code of Person
                *
                * @var String
                */
                private $zip;
                /**
                * Phone Number of Person
                *
                * @var String
                */
                private $phone;
                
                /**
                 * Constructor
                 */
                public function __construct() {
                        
                }
                
                /**
                 * Constructor
                 * 
                 * @param string $_firstName
                 * @param string $_lastName
                 * @param string $_address
                 * @param string $_city
                 * @param string $_state
                 * @param string $_zip
                 * @param string $_phone
                 */
                public static function person(/*String*/ $_firstName, /*String*/$_lastName,
                										/*String*/$_address,/*String*/$_city,
                										 /*String*/$_state,/*String*/$_zip,
                										 /*String*/$_phone){
                		$obj = new Person();

                		$obj->firstName = $_firstName;
                		$obj->lastName = $_lastName;
                		$obj->address = $_address;
                		$obj->city = $_city;
                		$obj->state = $_state;
                		$obj->zip = $_zip;
                		$obj->phone = $_phone;
                		
                		return $obj;
                	
                }
                
                /**
                 * Gets Person's first name
                 *
                 * @return string
                 */
                public function getFirstName() {
                        return $this->firstName;
                }
                
                /**
                 * Sets Person's first name
                 * 
                 * @param String $_firstName
                 */
                public function setFirstName($_firstName) {
                        $this->firstName = $_firstName;
                }
                
                /**
                 * Gets Person's last name
                 *
                 * @return string
                 */
                public function getLastName() {
                	return $this->lastName;
                }
                
                /**
                 * Sets Person's last name
                 *
                 * @param String $_lastName
                 */
                public function setLastName($_lastName) {
                	$this->lastName = $_lastName;
                }
                
                /**
                * Gets Person's address
                *
                * @return string
                */
                public function getAddress() {
                return $this->address;
                }
                
                /**
                * Sets Person's address
                *
                * @param String $_address
                */
                public function setAddress($_address) {
                	$this->address = $_address;
                }
                
                /**
                * Gets Person's city
                *
                * @return string
                */
                public function getcity() {
                return $this->city;
                }
                
                /**
                * Sets Person's City
                *
                * @param String $_city
                */
                public function setCity($_city) {
                	$this->city = $_city;
                }
                
                /**
                * Gets Person's State
                *
                * @return string
                */
                public function getState() {
                return $this->state;
                }
                
                /**
                * Sets Person's State
                *
                * @param String $_state
                */
                public function setState($_state) {
                	$this->state = $_state;
                }

                /**
                * Gets Person's zip code
                *
                * @return string
                */
                public function getZip() {
                return $this->zip;
                }
                
                /**
                * Sets Person's Zip Code
                *
                * @param String $_zip
                */
                public function setZip($_zip) {
                	$this->zip = $_zip;
                }
                
                /**
                * Gets Person's Phone Number
                *
                * @return string
                */
                public function getPhone() {
                return $this->phone;
                }
                
                /**
                * Sets Person's phone
                *
                * @param String $_phone
                */
                public function setPhone($_phone) {
                	$this->phone = $_phone;
                }
        }
?>