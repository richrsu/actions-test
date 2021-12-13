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

	/**
	 * Test the getHelloWorld function again
	 */
	public function testGetHelloWorld2(): void
	{
		$obj = new HelloWorld();
		self::assertEquals('Hello, World!', $obj->getHelloWorld());
	}

	/**
	 * Test the getHelloWorld function again again
	 */
	public function testGetHelloWorld3(): void
	{
		$obj = new HelloWorld();
		self::assertEquals('Hello, World!', $obj->getHelloWorld());
		self::assertEquals('Hello, World!', $obj->getHelloWorld());
	}
}
