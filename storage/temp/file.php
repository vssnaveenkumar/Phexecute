<?php ////////////////////////////////////////////////////
// Benchmark Example
////////////////////////////////////////////////////
$bench = new Ubench;

$bench->start();

// Execute some code
for ($i=0; $i < 10000000; $i++) {
    $i++;
}

$bench->end();

// Get elapsed time and memory
$nl = "<br>";
echo $bench->getTime() . $nl; // 156ms or 1.123s
echo $bench->getTime(true) . $nl; // elapsed microtime in float
echo $bench->getTime(false, '%d%s') . $nl; // 156ms or 1s

echo $bench->getMemoryPeak() . $nl; // 152B or 90.00Kb or 15.23Mb
echo $bench->getMemoryPeak(true) . $nl; // memory peak in bytes
echo $bench->getMemoryPeak(false, '%.3f%s') . $nl; // 152B or 90.152Kb or 15.234Mb

// Returns the memory usage at the end mark
echo $bench->getMemoryUsage() . $nl; // 152B or 90.00Kb or 15.23Mb
