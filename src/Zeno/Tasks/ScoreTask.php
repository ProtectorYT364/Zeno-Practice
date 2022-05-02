<?php

namespace Zeno\Task; 

use pocketmine\scheduler\Task;
use Zeno\API\API;
use Zeno\Core;
use pocketmine\Server;
class ScoreTask extends Task {
  
 public function onRun(int $currentTick): void {
   foreach (Server::getInstance()->getDefaultWorld()->getPlayers() as $pl){
     $config = Main::getConfiguration("config");
     
   /* $config = str_replace("{name}", $pl->getName(), $config);
    $config = str_replace("{ping}", $pl->getPing(), $config);
     $config = str_replace("{players}", count(Server::getInstance()->getOnlinePlayers()), $config);
    $config = str_replace("{totalplayer}", Server::getInstance()->getMaxPlayers(), $config);
     */
     API::new($pl, $pl->getName(), $config->get("prefixboard"));
     API::setLine($pl, 1, $config->get("name1"). $pl->getName());
   }
 }
}