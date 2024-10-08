<?php

namespace WpService\Contracts;

interface EscSql
{
    /**
 * Escapes data for use in a MySQL query.
 *
 * Usually you should prepare queries using wpdb::prepare().
 * Sometimes, spot-escaping is required or useful. One example
 * is preparing an array for use in an IN clause.
 *
 * NOTE: Since 4.8.3, '%' characters will be replaced with a placeholder string,
 * this prevents certain SQLi attacks from taking place. This change in behavior
 * may cause issues for code that expects the return value of esc_sql() to be usable
 * for other purposes.
 *
 * @since 2.8.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string|array $data Unescaped data.
 * @return string|array Escaped data, in the same type as supplied.
 */
    public function escSql(string|array $data): string|array;
}
