<?php

namespace Stfalcon\Bundle\TinymceBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * StfalconTinymceBundle.
 */
class StfalconTinymceBundle extends Bundle
{
  public function getContainerExtension()
    {
        return new UnconventionalExtensionClass();
    }
}
