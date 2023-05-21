<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/src/Main.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to string\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/src/Main.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
