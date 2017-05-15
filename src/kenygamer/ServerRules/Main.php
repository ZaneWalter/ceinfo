<?php
namespace kenygamer\ServerRules;

use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;

class Main extends PluginBase implements Listener{
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->saveDefaultConfig();
		$this->getLogger()->info(TEXTFORMAT::BLUE . "[CE INFO]" .TEXTFORMAT::RED. " >>" .TEXTFORMAT::AQUA.  "The plugin has been enabled.");
	}
	public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
        $cmd = strtolower($command->getName());
        switch ($cmd){
            case "ceinfo":
                if (!($sender instanceof Player)){
                    $sender->sendMessage("" . $this->getConfig()->get("rule-0"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-1"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-2"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-3"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-4"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-5"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-6"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-7"));
	 	    $sender->sendMessage("" . $this->getConfig()->get("rule-8"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-9"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-10"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-11"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-12"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-13"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-14"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-15"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-16"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-17"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-18"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-19"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-20"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-21"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-22"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-23"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-24"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-25"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-26"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-27"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-28"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-29"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-30"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-31"));
		    $sender->sendMessage("" . $this->getConfig()->get("rule-32"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-33"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-34"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-35"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-36"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-37"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-38"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-39"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-40"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-41"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-42"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-43"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-44"));
                    return true;
                }
                $player = $this->getServer()->getPlayer($sender->getName());
                if ($player->hasPermission("ceinfo.info")){
                    $sender->sendMessage("" . $this->getConfig()->get("rule-0"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-1"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-2"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-3"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-4"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-5"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-6"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-7"));
	 	    $sender->sendMessage("" . $this->getConfig()->get("rule-8"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-9"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-10"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-11"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-12"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-13"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-14"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-15"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-16"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-17"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-18"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-19"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-20"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-21"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-22"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-23"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-24"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-25"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-26"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-27"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-28"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-29"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-30"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-31"));
		    $sender->sendMessage("" . $this->getConfig()->get("rule-32"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-33"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-34"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-35"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-36"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-37"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-38"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-39"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-40"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-41"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-42"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-43"));
                    $sender->sendMessage("" . $this->getConfig()->get("rule-44"));
                    return true;
                }
                break;
            }
        }
    }
?>
