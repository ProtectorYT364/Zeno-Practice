<?php

namespace Zeno\Entity;

use pocketmine\player\Player;
use pocketmine\entity\projectile\EnderPearl as CustomEnderPearl;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\ProjectileHitEvent;
use pocketmine\world\sound\EndermanTeleportSound;
use pocketmine\network\mcpe\protocol\WorldEventPacket;

class EnderPearl extends CustomEnderPearl {

    protected function onHit(ProjectileHitEvent $event) : void {
        $owner = $this->getOwningEntity();
        if ($owner !== null) {
            if ($owner instanceof Player) {
                $this->world->broadcastWorldEvent($owner, WorldEventPacket::EVENT_PARTICLE_ENDERMAN_TELEPORT);
                $this->world->addSound(new EndermanTeleportSound($owner));
                $owner->teleport($event->getRayTraceResult()->getHitVector());
                $this->world->addSound(new EndermanTeleportSound($owner));
                $owner->attack(new EntityDamageEvent($owner, EntityDamageEvent::CAUSE_FALL, 5));
            }
        }
    }

}