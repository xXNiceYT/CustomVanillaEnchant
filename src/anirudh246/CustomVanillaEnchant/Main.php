<?php
declare(strict_types=1);

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\enchantment\EnchantmentInstance;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandMap;
use pocketmine\command\SimpleCommandMap;

class Main extends PluginBase implements Listener{
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $commandMap->unregister($commandMap->getCommand("enchant"));
    }
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool{
        switch($command->getName()){
            case "enchant":
                if(isset($args[0])) {
                    if(isset($args[1])) {
                        $item->addEnchantment(new EnchantmentInstance(Enchantment::getEnchantment($args[0]), $args[1]));
                    }
                }
        }
    }
}
