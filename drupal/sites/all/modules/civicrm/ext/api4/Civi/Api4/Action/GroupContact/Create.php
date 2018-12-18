<?php

namespace Civi\Api4\Action\GroupContact;

use Civi\Api4\Generic\Result;
use Civi\Api4\Action\Create as DefaultCreate;

/**
 * @inheritDoc
 *
 * @method $this setMethod(string $method) Indicate who added/removed the group.
 * @method $this setTracking(string $tracking) Specify ip address or other tracking info.
 */
class Create extends DefaultCreate {

  /**
   * String to indicate who added/removed the group.
   *
   * @var string
   */
  protected $method = 'API';

  /**
   * IP address or other tracking info about who performed this group subscription.
   *
   * @var string
   */
  protected $tracking = '';

  /**
   * @inheritDoc
   */
  public function _run(Result $result) {
    $this->values['method'] = $this->method;
    $this->values['tracking'] = $this->tracking;
    parent::_run($result);
  }

}
