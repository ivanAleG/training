<?php

$root = (php_sapi_name() === 'cli' ? getcwd() . '/examples' : $_SERVER['DOCUMENT_ROOT']);

include_once $root . '/tools.php';

spl_autoload_register(function ($class_name) {
  include $class_name . '.php';
});

/**
 * Entry point to execute the Factoy design pattern.
 */
class EntryPoint {

  /**
   * Group default validations to cards.
   */
  const CARDS = [
    'amex' => [
      'pattern' => '/^3[47]/',
      'length' => [15],
      'cvv_length' => [
        3,
        4,
      ],
    ],
    'visa' => [
      'pattern' => '/^4/',
      'length' => [13, 16],
      'cvv_length' => [3],
    ],
    'master' => [
      'pattern' => '/^(5[0-5]|2[2-7])/',
      'length' => [16],
      'cvv_length' => [3],
    ],
  ];

  /**
   * Return the type of card.
   *
   * Have in mind of conditions group for each credit card.
   *
   * @param array $current_card
   *   Data of the card.
   *
   * @return null|string
   *   Type of credit card.
   */
  private function checkType(array $current_card = []) {
    $type = NULL;

    foreach (self::CARDS as $key => $card) {
      if (preg_match($card['pattern'], $current_card['number']) &&
        in_array(strlen($current_card['number']), $card['length']) &&
        in_array(strlen($current_card['cvv']), $card['cvv_length'])) {
        $type = $key;
      }
    }

    return $type;
  }

  /**
   * Receives a set of cards.
   *
   * Eval if the credit card is valid and if the card is valid dynamically
   * instance object of the corresponding class.
   *
   * @param array $cards
   *   Set of cards to check.
   */
  public function start(array $cards = []) {
    foreach ($cards as $card) {
      if (!is_null($type = $this->checkType($card))) {

        $credit_card = CreditCardFactory::build($type);

        $credit_card->setNumber($card['number']);
        $credit_card->setCvv($card['cvv']);

        Printer::text("---------------------------------------------\n");

        $this->markupText('Type', $type);
        $this->markupText('Number', $credit_card->getNumber());
        $this->markupText('Cvv', $credit_card->getCvv());
        $this->markupText('Discount', $credit_card->getDiscount() . '%');

        Printer::text("---------------------------------------------\n\n");
      }
      else {
        Printer::text('Not is possible create the credit card With: Cvv = ' . $card['cvv'] . 'and Number = ' . $card['number']);
      }
    }
  }

  /**
   * Create a Markup for each credit card in the presentation.
   *
   * @param string $key
   *   Key that describe the value of the value.
   * @param string $value
   *   Value for each parameter to show in the presentation.
   */
  private function markupText($key, $value) {
    $text = $key . ": " . $value;

    Printer::text("| " . $text . str_repeat(" ", (45 - (strlen($text) + 4))) . " |\n");
  }

}

// Test of the design pattern.
$entry_point = new EntryPoint();

$cards = [
  // Amex.
  [
    'number' => '371449635398431',
    'cvv' => '3484',
  ],
  // Visa.
  [
    'number' => '4111111111111111',
    'cvv' => '123',
  ],
  // Master Card.
  [
    'number' => '5555555555554444',
    'cvv' => '234',
  ],
];

$entry_point->start($cards);
