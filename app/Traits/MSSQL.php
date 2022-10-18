<?php

namespace App\Traits;

trait MSSQL
{
    /**
     * Undocumented function
     *
     * @param string $message
     * @param mixed $code
     *
     * @return string
     */
    public function raiserror(string $message, mixed $code): string
    {
        $messages = [
            "SQLSTATE[$code]: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]",
            "SQLSTATE[$code]: [Microsoft][ODBC Driver 17 for SQL Server]TCP Provider:",
            "SQLSTATE[$code]: [Microsoft][Administrador de controladores ODBC] ",
            "SQLSTATE[$code]: "
        ];
        return str_replace($messages, "", $message);
    }
}
