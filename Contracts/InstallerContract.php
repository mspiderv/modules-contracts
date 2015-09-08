<?php

namespace Vitlabs\ModulesContracts\Contracts;

interface InstallerContract {

    static function install(ModuleContract $module, ModulesManagerContract $modules);

}