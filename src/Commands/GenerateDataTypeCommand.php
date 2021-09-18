<?php

namespace Mdhesari\VoyagerDataTypes\Commands;

use Illuminate\Console\GeneratorCommand;

class GenerateDataTypeCommand extends GeneratorCommand
{
    public $signature = 'make:data-type {model}';

    public $description = 'Make a new data';

    protected $type = 'Foo';

    protected function getStub()
    {
        return __DIR__ . '/stubs/DataType.php.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Space\DataTypes';
    }

    public function handle()
    {
        parent::handle();

        $this->doOtherOperations();
    }

    protected function doOtherOperations()
    {
        // Get the fully qualified class name (FQN)
        $class = $this->qualifyClass($this->getNameInput());

        // get the destination path, based on the default namespace
        $path = $this->getPath($class);

        $content = file_get_contents($path);

        // Update the file content with additional data (regular expressions)

        file_put_contents($path, $content);
    }
}
