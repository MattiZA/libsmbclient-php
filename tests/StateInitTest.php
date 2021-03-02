<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class StateInitTest extends TestCase
{
	public function
	testStateInitValid ()
	{
		$state = smbclient_state_new();
		$this->assertTrue(smbclient_state_init($state, null, SMB_USER, SMB_PASS));
	}

	/**
	 * @expectedException PHPUnit_Framework_Error_Warning
	 */
	public function
	testStateInitInvalidState ()
	{
		error_reporting(0);
		$this->assertFalse(@smbclient_state_init(null));
	}
}
