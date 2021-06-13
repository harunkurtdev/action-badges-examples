<?php

# logic to work out our values
$label = 'example';
$message = 'php';
$message_color = 'blue';

echo "echo \"LABEL=$label\" >> \$GITHUB_ENV\n";
echo "echo \"MESSAGE=$message\" >> \$GITHUB_ENV\n";
echo "echo \"MESSAGE-COLOR=$message_color\" >> \$GITHUB_ENV\n";
