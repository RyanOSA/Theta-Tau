<?php
/**
 * @license GPL-2.0-or-later
 *
 * Modified by impress-org on 07-January-2025 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

declare(strict_types=1);

namespace Give\Vendors\StellarWP\Validation\Exceptions;

use Exception;
use Give\Vendors\StellarWP\Validation\Exceptions\Contracts\ValidationExceptionInterface;

class ValidationException extends Exception implements ValidationExceptionInterface
{

}
