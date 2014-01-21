<?php
  if (!defined ('TYPO3_MODE')) die ('Access denied.');

  // Register hooks in TCEmain
  $TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_tsparser.php']['preParseFunc']['author'] = 'EXT:pimp_my_typo3/class.tx_pimp_my_typo3.php:&tx_pimp_my_typo3->getCurrentBEUser';
?>