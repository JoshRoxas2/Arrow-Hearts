<?php

namespace arrow;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\event\entity\ProjectileHitEvent;
use pocketmine\Player;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageByChildEntityEvent;
use pocketmine\utils\TextFormat;


class Main extends PluginBase Implements Listener{
    
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
    }

public function onHit(EntityDamageEvent $event){
        if($event instanceof EntityDamageByChildEntityEvent){
            $victim = $event->getEntity();
            $shooter = $event->getDamager();
                $shooter->sendMessage("§l§cPlayer§9 ".$victim->getName()." §cHas§9 ".$victim->getHealth()."/".$victim->getMaxHealth()." §cHearts left");
           }
      }
 }