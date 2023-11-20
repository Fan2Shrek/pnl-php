<?php

namespace Pnl\PnlPhp;

use Pnl\Installer\COR\AbsractInstaller;
use Pnl\Installer\PnlConfig;

class PnlInstaller extends AbsractInstaller
{
    public function install(PnlConfig $pnlConfig): PnlConfig
    {
        echo 'Installing Pnl...';

        dd($pnlConfig);

        return $pnlConfig;
    }
}
