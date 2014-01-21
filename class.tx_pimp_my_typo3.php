<?php
  class tx_pimp_my_typo3 {
    /**
     * Get current backend user.
     *
     * @param array $params Parameters
     * @param string $reference Reference
     * @return object Current backend user
     */
    function getCurrentBEUser($params = array(), $reference = '') {
      global $BE_USER;

      return $BE_USER->user[$params['functionArgument']];
    }
  }

  if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/pimp_my_typo3/class.tx_pimp_my_typo3.php']) {
    include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/pimp_my_typo3/class.tx_pimp_my_typo3.php']);
  }
?>