<?php

namespace IsPHP;

class Good {
  /**
   * Is PHP good?
   *
   * @return bool If false, use a different language.
   */
  public static function check () {
    $str = 'is php good?';
    if ($str == TRUE) {
      // Any string is true
      return false;
    }
    if ('0' == FALSE && 0 == FALSE) {
      // Except for zero
      return false;
    }
    if (0 == $str) {
      // Oh, but strings can also be 0... obviously
      return false;
    }
    // Well in that case...
    if (0 == FALSE && 0 == $str) {
      // By the transitive property, strings are false!
      if ($str != FALSE) {
        // Nope! PHP doesn't care about the laws of man
        return false;
      }
    }
    // (This will never happen)
    return true;
  }
}