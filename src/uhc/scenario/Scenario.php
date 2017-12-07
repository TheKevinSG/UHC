<?php
/**
 * Created by PhpStorm.
 * User: FRISCOWZ
 * Date: 12/5/2017
 * Time: 8:44 PM
 */

namespace uhc\scenario;


use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerMoveEvent;
use uhc\events\StartUHCEvent;
use uhc\events\StopUHCEvent;

abstract class Scenario
{
    private $enabled = false;
    /**
     * @param PlayerMoveEvent $event
     */
    public function onMove(PlayerMoveEvent $event)
    {
        //TODO: Implement it
    }

    /**
     * @param BlockBreakEvent $event
     */
    public function onBreak(BlockBreakEvent $event)
    {
        //TODO: Implement it
    }

    /**
     * @param BlockPlaceEvent $event
     */
    public function onPlace(BlockPlaceEvent $event)
    {
        //TODO: Implement it
    }

    /**
     * @param PlayerDeathEvent $event
     */
    public function onDeath(PlayerDeathEvent $event)
    {
        //TODO: Implement it
    }

    /**
     * @param StartUHCEvent $event
     */
    public function onStart(StartUHCEvent $event)
    {
        //TODO: Implement it
    }

    /**
     * @param StopUHCEvent $event
     */
    public function onStop(StopUHCEvent $event)
    {
        //TODO: Implement it
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return "default";
    }

    /**
     * @return bool
     */
    public function isEnabled() : bool
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled(bool $enabled = true)
    {
        $this->enabled = $enabled;
    }
}