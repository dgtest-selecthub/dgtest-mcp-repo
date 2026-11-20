<?php
$repository = "language-test-repo";

function greetUser(string $name): string {
    return "Hello from PHP, " . $name . "!";
}

echo greetUser("GitHub") . PHP_EOL;
echo "Repository: " . $repository . PHP_EOL;
?>
