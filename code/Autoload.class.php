<?php

/** Copyright: RunSignUp, Inc. */

namespace ActionsExample;

/** Autoload for ActionsExample namespace */
class Autoload
{
	/**
	 * Autoload initialization
	 */
	public static function init() : void
	{
		spl_autoload_register('ActionsExample\Autoload::autoLoadClass');
	}

	/**
	 * Handles autoloading for the ActionsExample namespace
	 *
	 * @param string $classname The name of the class to load
	 *
	 * @return bool Returns true if the class could be found, false otherwise
	 */
	public static function autoLoadClass(string $classname) : bool
	{
		// Check for ActionsExample namespace
		if (preg_match('/^ActionsExample\\\\/A', $classname))
		{
			// Map the ActionsExample namespace to the code folder
			$classname = str_replace('ActionsExample\\', '', $classname);
			$filename = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $classname) . '.class.php';
			var_dump($filename);

			if (file_exists($filename))
			{
				require_once($filename);
				return true;
			}
		}

		// Class not found, return false
		return false;
	}
}
