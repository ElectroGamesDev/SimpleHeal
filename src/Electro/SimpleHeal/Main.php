<?php

declare(strict_types=1);

namespace Electro\SimpleHeal;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener{

	      public function onLoad(){
                    $this->getLogger()->info("Plugin Loading");
          }
          public function onEnable(){
     				$this->getServer()->getPluginManager()->registerEvents($this,$this);
     				$this->getLogger()->info("Plugin Enabled");
          }
          public function onDisable(){
                    $this->getLogger()->info("Plugin Disabled");
          }

          public function onCommand(CommandSender $sender,Command $cmd,string $label,array $args) : bool{
		  if($cmd->getName() == "heal"){
    		 $sender->setHealth(20);
    		 $sender->sendMessage(TextFormat::BOLD."You Have Been Healed!");
          }
          return true;

		}

}
