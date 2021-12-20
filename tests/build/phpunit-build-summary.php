<?php

/** @var SimpleXMLElement */
$outputFile = __DIR__ . '/test-output.xml';
$xml = simplexml_load_file($outputFile);
$testsuite = $xml->xpath('/testsuites/testsuite')[0]->attributes();
$summary = [
	'tests' => (int)$testsuite['tests'],
	'errors' => (int)$testsuite['errors'],
	'warnings' => (int)$testsuite['warnings'],
	'failures' => (int)$testsuite['failures'],
	'skipped' => (int)$testsuite['skipped'],
	'assertions' => (int)$testsuite['assertions']
];
$summary['notPassed'] = $summary['errors'] + $summary['warnings'] + $summary['failures'] + $summary['skipped'];
$summary['passed'] = $summary['tests'] - $summary['notPassed'];
$summary['status'] = $summary['notPassed'] === 0 ? 'pass' : 'fail';
$summary['messageBackground'] = $summary['notPassed'] === 0 ? '32C854' : 'D53645';
print_r(json_encode($summary) . PHP_EOL);
