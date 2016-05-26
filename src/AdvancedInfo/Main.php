<?php

namespace AdvancedInfo;
use pocketmine\plugin\PluginBase; 
use AdvancedRules\Rules;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;

class Main extends PluginBase{

    public function onEnable(){
            $this->getServer()->getLogger()->info(TextFormat::BLUE . "AdvancedInfo v1.0.0b by CaptainDuck enabled.");
            $this->saveResource("info.yml");
            $config = new Config($this->getDataFolder() . "info.yml", Config::YAML);
            $config->save();
    }

    public function onDisable(){
	$this->getServer()->getLogger()->info(TextFormat::GRAY . ">" . TextFormat::RED . "RED" . "AdvancedInfo v1.0.0b disabled");
    }

}

?>

