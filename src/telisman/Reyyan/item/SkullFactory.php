<?php

declare(strict_types=1);

namespace telisman\Reyyan\item;

use pocketmine\item\Skull;
use pocketmine\item\VanillaItems;

/**
 * Methods to create skulls from saved data
 * 
 * Shoutout to CSkull for great documentation!
 * @see https://github.com/ColinHDev/CSkull/blob/8c6ada7790eabe4335b84a8b7229d1450da1c45d/src/ColinHDev/CSkull/items/Skull.php
 */
final class SkullFactory
{
    /**
     * Creates a Skull item with the given data.
     */
    public static function create(string $playerUUID, string $playerName, string $skinData) : Skull {
        $item = VanillaItems::PLAYER_HEAD();
        $nbt = $item->getNamedTag();
        $nbt->setString("PlayerUUID", $playerUUID);
        $nbt->setString("PlayerName", $playerName);
        $nbt->setByteArray("SkinData", $skinData);
        $item->setNamedTag($nbt);
        return $item;
    }
}
