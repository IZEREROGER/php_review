<?php
function dijkstra($graph, $source, $destination) {
    $distances = array();
    $visited = array();
    $previous = array();
    $nodes = array();

    foreach ($graph as $node => $edges) {
        $distances[$node] = PHP_INT_MAX;
        $visited[$node] = false;
        $previous[$node] = null;
        $nodes[$node] = true;
    }

    $distances[$source] = 0;

    while (!empty($nodes)) {
        $minNode = null;
        foreach ($nodes as $node => $value) {
            if ($minNode === null || $distances[$node] < $distances[$minNode]) {
                $minNode = $node;
            }
        }

        if ($minNode === $destination) {
            break;
        }

        foreach ($graph[$minNode] as $neighbor => $weight) {
            $alt = $distances[$minNode] + $weight;
            if ($alt < $distances[$neighbor]) {
                $distances[$neighbor] = $alt;
                $previous[$neighbor] = $minNode;
            }
        }

        unset($nodes[$minNode]);
        $visited[$minNode] = true;
    }

    $path = array();
    $current = $destination;

    while ($current !== null) {
        array_unshift($path, $current);
        $current = $previous[$current];
    }

    return $path;
}

// Example graph representation (adjacency list)
$graph = array(
    'A' => array('B' => 4, 'C' => 2),
    'B' => array('A' => 4, 'C' => 1, 'D' => 5),
    'C' => array('A' => 2, 'B' => 1, 'D' => 8),
    'D' => array('B' => 5, 'C' => 8),
);

$source = 'A';
$destination = 'D';

$shortestPath = dijkstra($graph, $source, $destination);

echo "Shortest path from $source to $destination: " . implode(' -> ', $shortestPath);
?>
