<?php

/** Copyright: RunSignUp, Inc. */

declare(strict_types=1);

namespace ActionsExampleTests;

use ActionsExample\HelloWorld;
use PHPUnit\Framework\TestCase;

/** HelloWorld test class */
class HelloWorldTest extends TestCase
{
	/**
	 * Test the getHelloWorld function
	 */
	public function testGetHelloWorld(): void
	{
		$obj = new HelloWorld();
		self::assertEquals('Hello, World!', $obj->getHelloWorld());
	}
}
