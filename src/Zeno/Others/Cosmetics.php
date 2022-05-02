<?php

namespace Zeno\Others;

use pocketmine\player\Player;
use Zeno\Form\SimpleForm;
use pocketmine\command\CommandSender;
use pocketmine\Server;

class Cosmetics extends SimpleForm {

    public static function cosmetics(Player $player){{
            $form = new SimpleForm (
                function (Player $player , $data) {
                    if ($data == null) {
                        return true;
                    } else {
                        switch($data){
                case 0:
Server::getInstance()->dispatchCommand($player, "fly on");
                break;
                case 1:
Server::getInstance()->dispatchCommand($player, "px");
                        }
                    }
                });
            $form->setTitle("Cosmetics");
            $form->addButton("Fly\n§7Click to use",0,"textures/items/fireworks");
            $form->addButton("Particles\n§7Click to use",0,"textures/ui/icon_staffpicks");
            $form->addButton("Soon",0,"textures/ui/realms_red_x.png");
            $player->sendForm($form);
        }
    }

}