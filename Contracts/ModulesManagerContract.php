<?php

namespace Vitlabs\ModulesContracts\Contracts;

use Vitlabs\ModulesContracts\Contracts\ModuleContract;

interface ModulesManagerContract extends ModulesRepositoryContract {

    // Get repository (ModulesRepositoryContract)
    function getRepository();

    // Install modules
    function installAll();
    function install($moduleName);
    function installByInstance(ModuleContract $module);

    // Uninstall modules
    function uninstallAll();
    function uninstall($moduleName);
    function uninstallByInstance(ModuleContract $module);

    // Remove modules
    function removeAll();
    function removeInstalled();
    function removeUninstalled();
    function remove($moduleName);
    function removeByInstance(ModuleContract $module);

}