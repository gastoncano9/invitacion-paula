<?php
    // Initialize the necessary variables
    $serviceName = 'MyService';
    $displayName = 'My Service';
    $binaryPath = 'C:\path\to\service\executable.exe';

    // Create the service entry in SCM database
    if (win32_create_service([
        'service' => $serviceName,
        'display' => $displayName,
        'params' => $binaryPath,
    ])) {
        echo 'Service created successfully!';
    } else {
        echo 'Failed to create service.';
    }
?>