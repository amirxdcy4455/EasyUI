<?php

declare(strict_types=1);

namespace EasyUI\icon;

class Icons {
    
    public const TYPE_PATH = "path";
    public const TYPE_URL = "url";

    public static function PlayerIcon(): ButtonIcon {
        return new ButtonIcon("textures/ui/FriendsIcon.png", self::TYPE_PATH);
    }

    public static function SettingsIcon(): ButtonIcon {
        return new ButtonIcon("textures/ui/settings_glyph_color_2x.png", self::TYPE_PATH);
    }

    public static function CloseIcon(): ButtonIcon {
        return new ButtonIcon("textures/blocks/barrier.png", self::TYPE_PATH);
    }

    public static function BackIcon(): ButtonIcon {
        return new ButtonIcon("textures/gui/newgui/undo.png", self::TYPE_PATH);
    }


    public static function WarningIcon(): ButtonIcon {
        return new ButtonIcon("textures/ui/WarningGlyph.png", self::TYPE_PATH);
    }

    public static function ErrorIcon(): ButtonIcon {
        return new ButtonIcon("textures/ui/ErrorGlyph.png", self::TYPE_PATH);
    }

    public static function CheckmarkIcon(): ButtonIcon {
        return new ButtonIcon("textures/ui/confirm.png", self::TYPE_PATH);
    }
    
    public static function ShopIcon(): ButtonIcon {
        return new ButtonIcon("textures/ui/store_home_icon.png", self::TYPE_PATH);
    }

    public static function URLIcon(string $url): ButtonIcon {
        return new ButtonIcon($url, self::TYPE_URL);
    }

    public static function CustomIcon(string $path, string $type = self::TYPE_PATH): ButtonIcon {
        return new ButtonIcon($path, $type);
    }
}