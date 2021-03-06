<?php

namespace Propel\Runtime\Exception;

/**
 * This is the default exception which gets thrown when using the `requireOne` method. It indicates
 * that a model which is required to processed in the application flow could not be found by the
 * ModelCriteria.
 *
 * You can catch this exception in your applications front-controller to display a generic not-found
 * error message.
 */
class EntityNotFoundException extends RuntimeException
{
}
