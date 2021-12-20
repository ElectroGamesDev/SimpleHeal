<?php

declare(strict_types=1);

namespace Electro\SimpleHeal;

use pocketmine\player\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{
	
          public function onCommand(CommandSender $sender,Command $cmd,string $label,array $args) : bool{
           if ($sender instanceof Player) {
               if ($cmd->getName() == "heal") {
                   if (isset($args[0])){
                       $player = $this->getServer()->getPlayerExact($args[0]);
                       if ($player){
                           $player->setHealth($player->getMaxHealth());
                           $player->sendMessage("§aYou Have Been Healed!");
                           $sender->sendMessage("§aYou Have Healed " . $args[0] . "!");
                       }
                       else{
                           $sender->sendMessage("§cThis player does not exist");
                       }
                   }
                   else {
                       $sender->setHealth($player->getMaxHealth());
                       $sender->sendMessage("§aYou Have Been Healed!");
                   }
               }
           }
           else{
               $sender->sendMessage("§cYou must be in-game to use this command!");
           }
          return true;

		}

}
