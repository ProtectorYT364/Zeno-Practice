<?php

declare(strict_types=1);

namespace Zeno\Selector;

use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\world\Position;

class SelectAllPlayers extends Select {

    public function __construct() {
        parent::__construct("All players", "a", true);
    }

    public function applySelector(CommandSender $sender, array $parameters = []) : array {
        $defaultParams = Select::DEFAULT_PARAMS;
        if($sender instanceof Position) {
            $defaultParams["x"] = $sender->x;
            $defaultParams["y"] = $sender->y;
            $defaultParams["z"] = $sender->z;
        }

        $params = $parameters + $defaultParams;
        $return = [];
        foreach(Server::getInstance()->getOnlinePlayers() as $p) {
            if(!$p instanceof Player)continue;
            $return[] = $p->getName();
        } return $return;
    }

}