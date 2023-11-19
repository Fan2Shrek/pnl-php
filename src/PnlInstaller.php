<?php

namespace Pnl\PnlPhp;

use Pnl\Installer\InstallerInterface;

class PnlInstaller implements InstallerInterface
{
    public function install(string $gitlink)
    {
        echo 'Installing Pnl...';
    }
}
