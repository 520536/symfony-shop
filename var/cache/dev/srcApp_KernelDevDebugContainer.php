<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6n9TCBw\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6n9TCBw/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container6n9TCBw.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container6n9TCBw\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container6n9TCBw\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '6n9TCBw',
    'container.build_id' => '3125794a',
    'container.build_time' => 1565708397,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6n9TCBw');
