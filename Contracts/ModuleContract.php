<?php

namespace Vitlabs\ModulesContracts\Contracts;

interface ModuleContract {

    const METAFILE = 'module-info.json';

    // Main methods
    function __construct($path, $name, $installed = false, $protected = false, array $providers = [], array $files = [], $installer = null, $uninstaller = null);
    function getPath();

    // Name
    function getName();
    function setName($name);

    // Installed
    function isInstalled();
    function setInstalled($installed);

    // Protected
    function isProtected();
    function setProtected($protected);

    // Providers
    function getProviders();
    function setProviders(array $providers);

    // Files
    function getFiles();
    function setFiles(array $files);

    // Installer
    function getInstaller();
    function setInstaller( $installer);

    // Uninstaller
    function getUninstaller();
    function setUninstaller($uninstaller);

    // Other
    function save();

}