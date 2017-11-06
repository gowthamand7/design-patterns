<?php
namespace DesignPatterns\Behavioral\Command;

class Client
{

    function run($cmd)
    {
        $avaliableCommands = $this->getAvaliableCommands();
        if (null == $cmd)
        {
            return $this->printUsage($avaliableCommands);
        }

        $parser = new CommandParser($avaliableCommands);
        $obj_cmd = $parser->parseCommand($cmd);
        if ($obj_cmd != null)
        {
            $obj_cmd->Execute($cmd);
        } else
        {
            $this->printUsage($avaliableCommands);
        }
    }

    function getAvaliableCommands()
    {
        return [new GetDate(), new GetMonth(), new Close(), new GetRand()];
    }

    function printUsage(array $avaliableCommands)
    {
        echo '~~~~~~~~~~Usage~~~~~~~~' . PHP_EOL;
        echo 'List of Commands : ' . PHP_EOL;
        foreach ($avaliableCommands as $commands)
        {
            echo "\t " . $commands->getCommandName() . ' :: ' . $commands->getDescription() . PHP_EOL;
        }
    }

}