<?php

namespace Zeno\Events;

use Zeno\Core;
use Zeno\Tasks\KickTask;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\player\Player;

class PlayerJoin implements Listener {

    private $plugin;

    public function __construct(Core $plugin) {
        $this->plugin = $plugin;
    }

    public function PlayerJoin(PlayerJoinEvent $event) {
        if ($event->getPlayer() instanceof Player) {
            $player = $event->getPlayer();
            $name = $player->getName();
            $event->setJoinMessage("");
            $this->plugin->getServer()->broadcastPopup("§a+ {$name} +");
            }
        }
    }