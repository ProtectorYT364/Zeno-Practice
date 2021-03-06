<?php

namespace Zeno\Others;

use Zeno\Events\PlayerJoin;
use Zeno\Form\FormUI;
use Zeno\Form\SimpleForm;
use Zeno\Core;
use Zeno\Others\KitForms;
use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\enchantment\EnchantmentInstance;
use pocketmine\item\Item;
use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat as TE;

class Gadgets {

    use FormUI;
    private $plugin;

    public function __construct(Core $plugin) {
        $this->plugin = $plugin;
    }

    public function give($player) {
        $player->getInventory()->clearAll();
        $player->getArmorInventory()->clearAll();
        $player->getInventory()->setItem(4, Item::get(345, 0, 1)->setCustomName("§r§aFFA"));
        $player->getInventory()->setItem(1, Item::get(388, 0, 1)->setCustomName("§r§aEvent"));
        $player->getInventory()->setItem(7, Item::get(399, 0, 1)->setCustomName("§r§aSettings"));
    }

    public function MiniGM($player) : SimpleForm {
        $form = new SimpleForm(function (Player $player, $data = null) : void {
            $result = $data;
            if ($result === null) {
                return;
            }
            switch ($data) {
                case "gapple":
                    $player->sendMessage("§l§a» §r§fYou have been teleported to the §aGapple Arena §f!");
                    $player->teleport(Server ::getInstance()->getWorldByName('gapple')->getSafeSpawn());
                    $player->getArmorInventory()->clearAll();
                    $player->removeAllEffects();
                    $player->getInventory()->clearAll();
                    $player->setHealth(20);
                    $player->setFood(20);
                    $player->setSaturation(20);

                    $helmet = Item::get(Item::DIAMOND_HELMET, 0, 1);
                    $helmet->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::PROTECTION), 4));
                    $player->getArmorInventory()->setHelmet($helmet);

                    $chestplate = Item::get(Item::DIAMOND_CHESTPLATE, 0, 1);
                    $chestplate->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::PROTECTION), 4));
                    $player->getArmorInventory()->setChestplate($chestplate);

                    $leggings = Item::get(Item::DIAMOND_LEGGINGS, 0, 1);
                    $leggings->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::PROTECTION), 4));
                    $player->getArmorInventory()->setLeggings($leggings);

                    $boots = Item::get(Item::DIAMOND_BOOTS, 0, 1);
                    $boots->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::PROTECTION), 4));
                    $player->getArmorInventory()->setBoots($boots);

                    $sword = Item::get(Item::DIAMOND_SWORD, 0, 1);
                    $sword->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::SHARPNESS), 5));
                    $player->getInventory()->setItem(0, ($sword));

                    $apple = Item::get(Item::GOLDEN_APPLE, 0, 10);
                    $player->getInventory()->setItem(1, ($apple));
                    break;
                case "nodebuff":
                    $player->sendMessage("§l§a» §r§fYou have been teleported to the §aNodebuff Arena §f!");
                    $player->teleport(Server::getInstance()->getWorldByName('nodebuff')->getSafeSpawn());
                    $player->getArmorInventory()->clearAll();
                    $player->removeAllEffects();
                    $player->getInventory()->clearAll();
                    $player->setHealth(20);
                    $player->setFood(20);
                    $player->setSaturation(20);

                    $helmet1 = Item::get(Item::DIAMOND_HELMET, 0, 1);
                    $helmet1->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::UNBREAKING), 3));
                    $player->getArmorInventory()->setHelmet($helmet1);

                    $chestplate1 = Item::get(Item::DIAMOND_CHESTPLATE, 0, 1);
                    $chestplate1->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::UNBREAKING), 3));
                    $player->getArmorInventory()->setChestplate($chestplate1);

                    $leggings1 = Item::get(Item::DIAMOND_LEGGINGS, 0, 1);
                    $leggings1->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::UNBREAKING), 3));
                    $player->getArmorInventory()->setLeggings($leggings1);

                    $boots1 = Item::get(Item::DIAMOND_BOOTS, 0, 1);
                    $boots1->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::UNBREAKING), 3));
                    $player->getArmorInventory()->setBoots($boots1);

                    $sword1 = Item::get(Item::DIAMOND_SWORD, 0, 1);
                    $sword1->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::UNBREAKING), 3));
                    $player->getInventory()->setItem(0, ($sword1));

                    $pearl1 = Item::get(Item::ENDER_PEARL, 0, 16);
                    $player->getInventory()->setItem(1, ($pearl1));

                    $pot1 = Item::get(Item::SPLASH_POTION, 22, 64);
                    $player->getInventory()->addItem($pot1);

                    $effect1 = new EffectInstance(Effect::getEffect(Effect::SPEED));
                    $effect1->setVisible(false);
                    $effect1->setAmplifier(0);
                    $effect1->setDuration(100 * 100 * 100);
                    $player->addEffect($effect1);
                    break;
                case "hivesumo":
                    $player->sendMessage("§l§a» §r§fYou have been teleported to the §aHive Sumo Arena §f!");
                    $player->teleport(Server::getInstance()->getWorldByName('hivesumo')->getSafeSpawn());
                    $player->getArmorInventory()->clearAll();
                    $player->removeAllEffects();
                    $player->getInventory()->clearAll();
                    $player->setHealth(20);
                    $player->setFood(20);
                    $player->setSaturation(20);

                    $boots2 = Item::get(Item::CHAIN_BOOTS, 0, 1);
                    $player->getArmorInventory()->setBoots($boots2);

                    $effect2 = new EffectInstance(Effect::getEffect(Effect::RESISTANCE));
                    $effect2->setVisible(false);
                    $effect2->setAmplifier(1);
                    $effect2->setDuration(100 * 100 * 100);
                    $player->addEffect($effect2);
                    break;
                case "soupkit":
                    $player->sendMessage("§l§a» §r§fYou have been teleported to the §aSoup Arena §f!");
                    $player->teleport(Server::getInstance()->getWorldByName('soupkit')->getSafeSpawn());
                    $player->getArmorInventory()->clearAll();
                    $player->removeAllEffects();
                    $player->getInventory()->clearAll();
                    $player->setHealth(20);
                    $player->setFood(20);
                    $player->setSaturation(20);

                    $helmet3 = Item::get(Item::DIAMOND_HELMET, 0, 1);
                    $helmet3->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::UNBREAKING), 1));
                    $player->getArmorInventory()->setHelmet($helmet3);

                    $chestplate3 = Item::get(Item::DIAMOND_CHESTPLATE, 0, 1);
                    $player->getArmorInventory()->setChestplate($chestplate3);

                    $leggings3 = Item::get(Item::DIAMOND_LEGGINGS, 0, 1);
                    $player->getArmorInventory()->setLeggings($leggings3);

                    $boots3 = Item::get(Item::DIAMOND_BOOTS, 0, 1);
                    $boots3->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::UNBREAKING), 1));
                    $player->getArmorInventory()->setBoots($boots3);

                    $sword3 = Item::get(Item::DIAMOND_SWORD, 0, 1);
                    $sword3->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::SHARPNESS), 3));
                    $sword3->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment(Enchantment::UNBREAKING), 3));
                    $player->getInventory()->setItem(0, ($sword3));

                    $apple3 = Item::get(Item::ENCHANTED_GOLDEN_APPLE, 0, 4);
                    $player->getInventory()->setItem(8, ($apple3));

                    $pearl3 = Item::get(Item::ENDER_PEARL, 0, 6);
                    $player->getInventory()->setItem(1, ($pearl3));

                    $soup3 = Item::get(Item::SLIME_BALL, 0, 64);
                    $player->getInventory()->setItem(2, ($soup3));

                    KitForms::kit($player);
                    break;
            }
        });

        $nodebuff = $this->plugin->getServer()->getWorldByName("nodebuff");
        $gapple = $this->plugin->getServer()->getWorldByName("gapple");
        $hivesumo = $this->plugin->getServer()->getWorldByName("hivesumo");
        $soup = $this->plugin->getServer()->getWorldByName("soupkit");

        if (!$this->plugin->getServer()->isWorldLoaded("nodebuff")) {
            $count1 = "§cOffline";
            $c1 = "offline";
        } else {
            $totalnodebuff = count($nodebuff->getPlayers());
            $count1 = "§8Currently Playing: " . $totalnodebuff;
            $c1 = "nodebuff";
        }
        if (!$this->plugin->getServer()->isWorldLoaded("gapple")) {
            $count2 = "§cOffline";
            $c2 = "offline";
        } else {
            $totalgapple = count($gapple->getPlayers());
            $count2 = "§8Currently Playing: " . $totalgapple;
            $c2 = "gapple";
        }
        if (!$this->plugin->getServer()->isWorldLoaded("hivesumo")) {
            $count4 = "§cOffline";
            $c4 = "offline";
        } else {
            $count4 = "§8Currently Playing: " . count($hivesumo->getPlayers());
            $c4 = "hivesumo";
        }
        if (!$this->plugin->getServer()->isWorldLoaded("soupkit")) {
            $count5 = "§cOffline";
            $c5 = "offline";
        } else {
            $count5 = "§8Currently Playing: " . count($soup -> getPlayers());
            $c5 = "soupkit";
        }

        $form -> setTitle("FFA");
        $form -> addButton("Gapple\n" . $count2, 0, "textures/items/apple_golden.png", $c2);
        $form -> addButton("Nodebuff\n" . $count1, 0, "textures/items/potion_bottle_splash_saturation.png", $c1);
        $form -> addButton("Hive Sumo\n" . $count4, 0, "textures/items/feather.png", $c4);
        $form -> addButton("Soup Fly\n" . $count5, 0, "textures/items/mushroom_stew.png", $c5);
        $form -> sendToPlayer($player);
        return $form;
    }

    public function Cms($player) : SimpleForm {
        $form = $this->createSimpleForm(function (Player $player, int $data = null) {
            $result = $data;
            if ($result === null) {
                return true;
            }
            switch ($result) {
                case 0:
                    if ($player->hasPermission("nick.use")) {
                        $this->plugin->getServer()->dispatchCommand($player, $this->plugin->getConfig()->get("command8"));
                    } else {
                        $player->sendMessage("§l§a» §r§cYou do not have permission to use this command !");
                    }
                    break;
                case 1:
                    if ($player instanceof Player) {
                        $this->Particles($player);
                    } else {
                        $player->sendMessage("§l§a» §r§cYou do not have permission to use this particle !");
                    }
                    break;
                case 2:
                    if ($player->hasPermission("core.cape")) {
                        $this->plugin->getServer()->dispatchCommand($player, $this->plugin->getConfig()->get("command7"));
                    } else {
                        $player->sendMessage("§l§a» §r§cYou do not have permission to use this command !");
                    }
                    break;
                case 3:
                    break;
            }
        });
        $form -> setTitle("§0Comestiques");
        $form -> setContent("§7Seul les héro ou premium peuvent utilisé les comestiques.");
        $form -> addButton("§6Nick", 0, "textures/items/fireworks");
        $form -> addButton("§6Particules", 0, "textures/ui/icon_staffpicks");
        $form -> addButton("§6Capes", 0, "textures/items/banner_pattern");
        $form -> addButton("§0Sortir", 0, "textures/items/arrow");
        $form -> sendToPlayer($player);
        return $form;
    }

    public function Particles($player) : SimpleForm {
        $form = $this -> createSimpleForm(function (Player $player, int $data = null) {
            $result = $data;
            if ($result === null) {
                return true;
            }
            switch ($result) {
                case 0:
                    if ($player->hasPermission("core.blue")) {
                        if (!in_array($player->getName(), $this->plugin->blue)) {
                            $this->plugin->blue[] = $player->getName();
                            $player->sendMessage("§l§a» §r§fYou chose the §9blue particle §f!");
                            if (in_array($player->getName(), $this->plugin->red)) {
                                unset($this->plugin->red[array_search($player->getName(), $this->plugin->red)]);
                            } elseif (in_array($player->getName(), $this -> plugin->green)) {
                                unset($this->plugin->green[array_search($player->getName(), $this->plugin->green)]);
                            }
                        } else {
                            unset($this->plugin->blue[array_search($player->getName(), $this->plugin->blue)]);
                            $player->sendMessage("§l§a» §r§fYou chose the §9blue particle §f!");
                        }
                    } else {
                        $player->sendMessage("§l§a» §r§cYou do not have permission to use this particle !");
                    }
                    break;
                case 1:
                    if ($player->hasPermission("core.red")) {
                        if (!in_array($player->getName(), $this->plugin->red)) {
                            $this->plugin->red[] = $player->getName();
                            $player->sendMessage("§l§a» §r§fYou chose the §cred particle §f!");
                            if (in_array($player->getName(), $this->plugin->blue)) {
                                unset($this->plugin->blue[array_search($player->getName(), $this->plugin->blue)]);
                            } elseif (in_array($player->getName(), $this->plugin->green)) {
                                unset($this->plugin->green[array_search($player->getName(), $this->plugin->green)]);
                            }
                        } else {
                            unset($this->plugin->red[array_search($player->getName(), $this->plugin->red)]);
                            $player->sendMessage("§l§a» §r§fYou chose the §cred particle §f!");
                        }
                    } else {
                        $player->sendMessage("§l§a» §r§cYou do not have permission to use this particle !");
                    }
                    break;
                case 2:
                    if ($player->hasPermission("core.green")) {
                        if (!in_array($player->getName(), $this->plugin->green)) {
                            $this->plugin->green[] = $player->getName();
                            $player->sendMessage("§l§a» §r§fYou chose the §agreen particle §f!");
                            if (in_array($player->getName(), $this->plugin->blue)) {
                                unset($this->plugin->blue[array_search($player->getName(), $this->plugin->blue)]);
                            } elseif (in_array($player->getName(), $this->plugin->red)) {
                                unset($this->plugin->red[array_search($player->getName(), $this->plugin->red)]);
                            }
                        } else {
                            unset($this->plugin->green[array_search($player->getName(), $this->plugin->green)]);
                            $player->sendMessage("§l§a» §r§fYou chose the §agreen particle §f!");
                        }
                    } else {
                        $player->sendMessage("§l§a» §r§cYou do not have permission to use this particle !");
                    }
                    break;
                case 3:
                    break;
            }
        });
        $form->setTitle("§0-§6 Particules §0-");
        $form->addButton("§b Bleu");
        $form->addButton("§4Rouge");
        $form->addButton("§aVert");
        $form->addButton("§0Sortir");

        $form->sendToPlayer($player);
        return $form;
    }

    public function eventt($player) : SimpleForm {
        $form = $this->createSimpleForm(function (Player $player, int $data = null) {
            $result = $data;
            if ($result === null) {
                return true;
            }
            switch ($result) {
                case 0:
                    Gadgets::createevent($player);
                    break;
                case 1:
                    $this->plugin->getServer()->dispatchCommand($player, $this->plugin->getConfig()->get("command2"));
                    break;
                case 2:
                    return true;
            }
        });
        $form->setTitle("Event");
        $form->addButton("Create Event", 0, "textures/ui/village_hero_effect.png");
        $form->addButton("Join Event", 0, "textures/ui/FriendsDiversity.png");
        $form->addButton("Close", 0, "textures/ui/realms_red_x.png");
        $form->sendToPlayer($player);
        return $form;
    }

    public function createevent($player) : SimpleForm
    {
        $form = $this->createSimpleForm(function (Player $player, int $data = null) {
            $result = $data;
            if ($result === null) {
                return true;
            }
            switch ($result) {
                case 0:
                    if ($player->hasPermission("create.nodebuff")) {
                        $player->sendMessage("NTM");
                    } else {
                        $player->sendMessage("§l§a» §r§cYou do not have permission to create an event !");
                    }
                    break;
                case 1:
                    if ($player->hasPermission("create.sumo")) {
                        $player->sendMessage("NTM2");
                    } else {
                        $player->sendMessage("§l§a» §r§cYou do not have permission to create an event !");
                    }
                    break;
                case 2:
                    Gadgets::eventt($player);
                    break;
            }
        });
        $form->setTitle("Create event");
        $form->setContent("§7Please choose a type of event.");
        $form->addButton("Nodebuff", 0, "textures/items/potion_bottle_splash_saturation.png");
        $form->addButton("Sumo", 0, "textures/items/feather.png");
        $form->addButton("Return", 0, "textures/ui/realms_red_x.png");
        $form->sendToPlayer($player);
        return $form;
    }

    public function joinevent($player) : SimpleForm {
        $form = $this->createSimpleForm(function (Player $player, int $data = null) {
            $result = $data;
            if ($result === null) {
                return true;
            }
            switch ($result) {
                case 0:
                    $this->plugin->getServer()->dispatchCommand($player, $this->plugin->getConfig()->get("command2"));
                    break;
                case 1:
                    $this->plugin->getServer()->dispatchCommand($player, $this->plugin->getConfig()->get("command3"));
                    break;
                case 2:
                    Gadgets::eventt($player);
                    break;
            }
        });
        $form->setTitle("Join event");
        $form->setContent("§7Please choose a type of event.");
        $form->addButton("Nodebuff", 0, "textures/items/potion_bottle_splash_saturation.png");
        $form->addButton("Sumo", 0, "textures/items/feather.png");
        $form->addButton("Return", 0, "textures/ui/realms_red_x.png");
        $form->sendToPlayer($player);
        return $form;
    }

    public function mods($player) : SimpleForm {
        $form = $this->createSimpleForm(function (Player $player, int $data = null) {
            $result = $data;
            if ($result === null) {
                return true;
            }
            switch ($result) {
                case 0:
                    $this->plugin->getServer()->dispatchCommand($player, $this->plugin->getConfig()->get("command2"));
                    break;
                case 1:
                    $this->plugin->getServer()->dispatchCommand($player, $this->plugin->getConfig()->get("command3"));
                    break;
                case 2:
                    Gadgets::eventt($player);
                    break;
            }
        });
        $form->setTitle("Join event");
        $form->setContent("§7Please choose a type of event.");
        $form->addButton("Nodebuff", 0, "textures/items/potion_bottle_splash_saturation.png");
        $form->addButton("Sumo", 0, "textures/items/feather.png");
        $form->addButton("Return", 0, "textures/ui/realms_red_x.png");
        $form->sendToPlayer($player);
        return $form;
    }

}