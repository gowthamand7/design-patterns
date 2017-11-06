<?php

class U_Switch
{
    public $_history = null;

    function __construct()
    {
        $this->history();
    }

    function history()
    {
        return $this->_history;
    }

    function execute($cmd)
    {
        $this->_history .= $cmd . PHP_EOL;
        $cmd->execute();
    }

}
abstract class Command
{
    protected $_obj;

    function __construct($obj)
    {
        $this->_obj = $obj;
    }

}
class TurnOnCommand extends Command
{

    function execute()
    {
        $this->_obj->turn_on();
    }

    function __toString()
    {
        return 'TurnOnCommand';
    }

}
class TurnOffCommand extends Command
{

    function execute()
    {
        $this->_obj->turn_off();
    }
    
    function __toString()
    {
        return 'TurnOffCommand';
    }

}
class Light
{

    function turn_on()
    {
        echo "The light is on" . PHP_EOL;
    }

    function turn_off()
    {
        echo "The light is off" . PHP_EOL;
    }

}
class LightSwitchClient
{

    function __construct()
    {
        $this->_lamp = new Light();
        $this->_switch = new U_Switch();
    }

    function press($cmd)
    {
        $cmd = strtoupper($cmd);
        if ($cmd == 'ON')
        {
            $this->_switch->execute(new TurnOnCommand($this->_lamp));
        } elseif ($cmd == 'OFF')
        {
            $this->_switch->execute(new TurnOffCommand($this->_lamp));
        } else
        {
            echo "Argument 'ON' or 'OFF' is required." . PHP_EOL;
        }
    }

}
$light_switch = new LightSwitchClient();
echo("Switch ON test." . PHP_EOL);
$light_switch->press("ON");
echo("Switch OFF test." . PHP_EOL);
$light_switch->press("OFF");
echo("Invalid Command test." . PHP_EOL);
$light_switch->press("****");

echo("Command history:" . PHP_EOL);
echo($light_switch->_switch->_history);
