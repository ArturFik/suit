<?php
/**
 * Конфигурация для интеграции с Python API
 */

// URL Python API (можно настроить в админке)
define('PYTHON_API_URL', 'http://127.0.0.1:8000/invoice/create');

// Включить подробное логирование (contacts/response)
define('DEBUG_LOG', true);

// Таймауты для cURL запросов
define('PYTHON_API_TIMEOUT', 30); // секунды
define('PYTHON_API_CONNECT_TIMEOUT', 10); // секунды

// Максимальный размер файла (в байтах)
define('MAX_FILE_SIZE', 10 * 1024 * 1024); // 10MB

// Разрешенные типы файлов
define('ALLOWED_FILE_TYPES', array(
    'application/pdf',
    'application/vnd.openxmlformats-officedocument.wordprocessingml.document', // .docx
    'application/vnd.ms-excel', // .xls
    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', // .xlsx
    'text/csv',
    'text/plain'
));

// Разрешенные расширения файлов
define('ALLOWED_FILE_EXTENSIONS', array(
    'pdf', 'docx', 'xls', 'xlsx', 'csv', 'txt'
));
?>
