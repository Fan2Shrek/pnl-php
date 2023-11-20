<?php

namespace Pnl\PnlPhp;

use Pnl\Installer\COR\AbsractInstaller;
use Pnl\Installer\PnlConfig;

class PnlInstaller extends AbsractInstaller
{
    public function install(PnlConfig $pnlConfig): PnlConfig
    {
        $this->style->writeWithStyle("Thanks for installing ", 'green');
        $this->style->writeWithStyle("Pnl/PHP", 'basic');

        return $pnlConfig;
    }
}
