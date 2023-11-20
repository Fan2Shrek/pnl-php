<?php

namespace Pnl\PnlPhp;

use Pnl\Installer\COR\InstallerInterface;
use Pnl\Installer\PnlConfig;

class PnlInstaller implements InstallerInterface
{
    public function install(PnlConfig $pnlConfig): PnlConfig
    {
        echo 'Installing Pnl...';

        dd($pnlConfig);

        return $pnlConfig;
    }
}
