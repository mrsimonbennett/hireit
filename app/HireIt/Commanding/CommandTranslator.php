<?php


namespace HireIt\Commanding;
use Exception;

class CommandTranslator
{
    public function toCommandHandler($command)
    {
        $handler = $this->str_lreplace('Command', 'CommandHandler', get_class($command));

        if (!class_exists($handler)) {
            throw new Exception("Command Handler [$handler] does not exist");
        }

        return $handler;
    }
    function str_lreplace($search, $replace, $subject)
    {
        $pos = strrpos($subject, $search);

        if($pos !== false)
        {
            $subject = substr_replace($subject, $replace, $pos, strlen($search));
        }

        return $subject;
    }
} 