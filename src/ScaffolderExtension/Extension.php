<?php

namespace ScaffolderExtension;

use Scaffolder\Support\Contracts\ScaffolderExtensionInterface;

class Extension implements ScaffolderExtensionInterface
{
    public function runAfterModelIsCompiled($compiledStub, $modelData, $scaffolderConfig)
    {
        return $compiledStub;
    }

    public function runAfterControllerIsCompiled($compiledStub, $modelData, $scaffolderConfig)
    {
        return $compiledStub;
    }

    public function runAfterMigrationIsCompiled($compiledStub, $modelData, $scaffolderConfig)
    {
        return $compiledStub;
    }

    public function runAfterIndexViewIsCompiled($compiledStub, $modelData, $scaffolderConfig)
    {
        return $compiledStub;
    }

    public function runAfterCreateViewIsCompiled($compiledStub, $modelData, $scaffolderConfig)
    {
        return $compiledStub;
    }

    public function runAfterEditViewIsCompiler($compiledStub, $modelData, $scaffolderConfig)
    {
        return $compiledStub;
    }

    public function runAfterPageLayoutIsCompiled($compiledStub, $scaffolderConfig)
    {
        return $compiledStub;
    }

    public function runAfterCreateLayoutIsCompiled($compiledStub, $scaffolderConfig)
    {
        return $compiledStub;
    }

    public function runAfterEditLayoutIsCompiled($compiledStub, $scaffolderConfig)
    {
        return $compiledStub;
    }

    public function runAfterDashboardViewIsCompiled($compiledStub, $scaffolderConfig)
    {
        return $compiledStub;
    }

    public function runAfterWelcomeViewIsCompiled($compiledStub, $scaffolderConfig)
    {
        return $compiledStub;
    }

    public function runAfterLoginViewIsCompiled($compiledStub, $scaffolderConfig)
    {
        return $compiledStub;
    }
}
