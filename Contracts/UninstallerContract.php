<?php

namespace Vitlabs\ModulesContracts\Contracts;

interface UninstallerContract {

    static function uninstall(ModuleContract $module, ModulesManagerContract $modules);

}