<?php

namespace Drupal\commerce_payment\Plugin\Commerce\PaymentGateway;

use Drupal\commerce_order\Entity\OrderInterface;

/**
 * Defines the interface for gateways which show payment instructions.
 *
 * Payment instructions are usually shown on checkout complete.
 */
interface HasPaymentInstructionsInterface {

  /**
   * Builds the payment instructions.
   *
   * @param \Drupal\commerce_order\Entity\OrderInterface $order
   *
   * @return array
   *   A render array containing the payment instructions.
   */
  public function buildPaymentInstructions(OrderInterface $order);

}
