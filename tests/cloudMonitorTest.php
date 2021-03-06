<?php
require_once dirname(dirname(__FILE__)).'/cloudMonitor.php';
require_once dirname(__FILE__).'/bootstrap.php';

/**
 * Test class for cloudMonitor.
 * Generated by PHPUnit on 2012-03-31 at 00:01:27.
 */
class cloudMonitorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var cloudMonitor
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new cloudMonitor(API_USER,API_PASS);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers cloudMonitor::get_limits
     */
    public function testGet_limits()
    {
        $this->assertTrue(is_array($this->object->get_limits()), 'test the limits call returns an array');
    }

    /**
     * @covers cloudMonitor::get_account
     * @todo Implement testGet_account().
     */
    public function testGet_account()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::get_entity
     * @todo Implement testGet_entity().
     */
    public function testGet_entity()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::get_check
     * @todo Implement testGet_check().
     */
    public function testGet_check()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::get_check_type
     * @todo Implement testGet_check_type().
     */
    public function testGet_check_type()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::get_zone
     * @todo Implement testGet_zone().
     */
    public function testGet_zone()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::get_alarm
     * @todo Implement testGet_alarm().
     */
    public function testGet_alarm()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::get_alarm_notification_history
     * @todo Implement testGet_alarm_notification_history().
     */
    public function testGet_alarm_notification_history()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::get_notification_plan
     * @todo Implement testGet_notification_plan().
     */
    public function testGet_notification_plan()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::get_notifications
     * @todo Implement testGet_notifications().
     */
    public function testGet_notifications()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::get_overview
     * @todo Implement testGet_overview().
     */
    public function testGet_overview()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::list_audits
     * @todo Implement testList_audits().
     */
    public function testList_audits()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::list_entities
     * @todo Implement testList_entities().
     */
    public function testList_entities()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::list_zones
     * @todo Implement testList_zones().
     */
    public function testList_zones()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::list_checks
     * @todo Implement testList_checks().
     */
    public function testList_checks()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::list_alarms
     * @todo Implement testList_alarms().
     */
    public function testList_alarms()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::list_alarm_changelogs
     * @todo Implement testList_alarm_changelogs().
     */
    public function testList_alarm_changelogs()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::list_check_types
     * @todo Implement testList_check_types().
     */
    public function testList_check_types()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::list_notification_plans
     * @todo Implement testList_notification_plans().
     */
    public function testList_notification_plans()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::list_notification_types
     * @todo Implement testList_notification_types().
     */
    public function testList_notification_types()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::list_notification_type
     * @todo Implement testList_notification_type().
     */
    public function testList_notification_type()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::list_notifications
     * @todo Implement testList_notifications().
     */
    public function testList_notifications()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::list_alarm_notification_history
     * @todo Implement testList_alarm_notification_history().
     */
    public function testList_alarm_notification_history()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::discover_alarm_notification_history
     * @todo Implement testDiscover_alarm_notification_history().
     */
    public function testDiscover_alarm_notification_history()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::update_entity
     * @todo Implement testUpdate_entity().
     */
    public function testUpdate_entity()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::update_check
     * @todo Implement testUpdate_check().
     */
    public function testUpdate_check()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::update_alarm
     * @todo Implement testUpdate_alarm().
     */
    public function testUpdate_alarm()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::update_account
     * @todo Implement testUpdate_account().
     */
    public function testUpdate_account()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::update_notification_plan
     * @todo Implement testUpdate_notification_plan().
     */
    public function testUpdate_notification_plan()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::update_notification
     * @todo Implement testUpdate_notification().
     */
    public function testUpdate_notification()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::create_entity
     * @todo Implement testCreate_entity().
     */
    public function testCreate_entity()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::create_check
     * @todo Implement testCreate_check().
     */
    public function testCreate_check()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::create_alarm
     * @todo Implement testCreate_alarm().
     */
    public function testCreate_alarm()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::create_notification_plan
     * @todo Implement testCreate_notification_plan().
     */
    public function testCreate_notification_plan()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::create_notification
     * @todo Implement testCreate_notification().
     */
    public function testCreate_notification()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::test_check
     * @todo Implement testTest_check().
     */
    public function testTest_check()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::test_alarm
     * @todo Implement testTest_alarm().
     */
    public function testTest_alarm()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::test_notification
     * @todo Implement testTest_notification().
     */
    public function testTest_notification()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::test_existing_notification
     * @todo Implement testTest_existing_notification().
     */
    public function testTest_existing_notification()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::delete_entity
     * @todo Implement testDelete_entity().
     */
    public function testDelete_entity()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::delete_notifications
     * @todo Implement testDelete_notifications().
     */
    public function testDelete_notifications()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::delete_check
     * @todo Implement testDelete_check().
     */
    public function testDelete_check()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::delete_alarm
     * @todo Implement testDelete_alarm().
     */
    public function testDelete_alarm()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::delete_plan
     * @todo Implement testDelete_plan().
     */
    public function testDelete_plan()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }


    /**
     * @covers cloudMonitor::set_cabundle
     * @todo Implement testSet_cabundle().
     */
    public function testSet_cabundle()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::isAuthenticated
     * @todo Implement testIsAuthenticated().
     */
    public function testIsAuthenticated()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers cloudMonitor::authenticate
     */
    public function testAuthenticate(){
            $this->assertTrue($this->object->authenticate(), 'test the auth function returns true');
            $this->assertTrue($this->object->isAuthenticated(), 'test the isAuth function returns true');


        }

    /**
      * @covers cloudMonitor::getLastResponseMessage
      */
     public function testGetLastResponseMessage()
     {
        $this->assertTrue(is_array($this->object->get_limits()), 'test the limits call returns an array');
        $this->assertTrue($this->object->getLastResponseMessage() == 'Successful informational response', 'test the limits call returns an array');


     }

    /**
      * @covers cloudMonitor::getLastResponseStatus
      */
     public function testGetLastResponseStatus()
     {
         $this->assertTrue(is_array($this->object->get_limits()), 'do a call to limits to as this is likly to return a 200');
         $this->assertTrue($this->object->getLastResponseStatus() == 200, 'test the limits call returns an array');

     }

    /**
     * @covers cloudMonitor::callFailed
     * @todo Implement testCallFailed().
     */
    public function testCallFailed()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }
}

