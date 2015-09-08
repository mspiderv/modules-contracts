<?php

namespace Vitlabs\ModulesContracts\Contracts;

interface ModulesRepositoryContract {

    // Module directories
    function addDirs($dirs = []);

    function addDir($dir);

    function hasDir($dir);

    function removeDir($dir);

    function getDirs();

    /**
     * Find all modules in set directories.
     * @return array of Vitlabs\ModulesContracts\Contracts\ModuleContract
     */
    function all();

    function get($moduleName);

    function installed();

    function uninstalled();

    function has($module);

    /**
     * Reload and recache modules.
     * @return $this
     */
    function reload();

}