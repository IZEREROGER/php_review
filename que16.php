<?php 
//a program that validates a Sudoku solution, checking whether it follows the rules of the game.
function isValidSudoku($board) {
    $rows = [];
    $cols = [];
    $boxes = [];
    for ($i = 0; $i < 9; $i++) {
        $rows[$i] = [];
        $cols[$i] = [];
        $boxes[$i] = [];
    }
    for ($row = 0; $row < 9; $row++) {
        for ($col = 0; $col < 9; $col++) {
            $cell = $board[$row][$col];
            if ($cell != '.') {
                if (isset($rows[$row][$cell])) {
                    return false;
                }
                $rows[$row][$cell] = true;
                if (isset($cols[$col][$cell])) {
                    return false;
                }
                $cols[$col][$cell] = true;
                $boxIndex = (int) ($row / 3) * 3 + (int) ($col / 3);
                if (isset($boxes[$boxIndex][$cell])) {
                    return false;
                }
                $boxes[$boxIndex][$cell] = true;
            }
        }
    }
    return true;
}
$board = [
    ['5', '3', '.', '.', '7', '.', '.', '.', '.'],
    ['6', '.', '.', '1', '9', '5', '.', '.', '.'],
    ['.', '9', '8', '.', '.', '.', '.', '6', '.'],
    ['8', '.', '.', '.', '6', '.', '.', '.', '3'],
    ['4', '.', '.', '8', '.', '3', '.', '.', '1'],
    ['7', '.', '.', '.', '2', '.', '.', '.', '6'],
    ['.', '6', '.', '.', '.', '.', '2', '8', '.'],
    ['.', '.', '.', '4', '1', '9', '.', '.', '5'],
    ['.', '.', '.', '.', '8', '.', '.', '7', '9'],
];
if (isValidSudoku($board)) {
    echo "Valid Sudoku";
} else {
    echo "Invalid Sudoku";
}

?>