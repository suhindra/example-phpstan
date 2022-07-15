/**
 * @param $args array
 * @return int
 */
function testArray($args) {
    return $args[0];
}

$numbers = [1, "two", 3];
echo testArray($numbers);
