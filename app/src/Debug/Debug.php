<?php

class Debug {
    /**
     * Debug using krumo.
     *
     * @param mixed $variable
     *   Variable to debug.
     * @param bool $log_to_file
     *   Is it needed to keep log in the log file.
     */
    public static function dd($variable, $log_to_file = false) {
        krumo($variable);
        if ($log_to_file) {
            self::dl($variable);
        }
    }

    /**
     * Log variable to the log file.
     *
     * @param mixed $variable
     *   Variable to log.
     */
    public static function dl($variable) {
        // TODO: implement log.
    }
}
