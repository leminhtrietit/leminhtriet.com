<?php

if (! function_exists('cleanIframeContent')) {
    /**
     * Làm sạch nội dung HTML nếu có chứa iframe:
     * - Loại bỏ thẻ <pre> và </pre>
     * - Loại bỏ dấu nháy bao quanh (nhất là khi nội dung được encode)
     * - Giải mã HTML entities để hiển thị đúng HTML
     *
     * @param string $content
     * @return string
     */
    function cleanIframeContent(string $content): string
    {
        // Giải mã HTML entities: chuyển "&lt;" về "<", "&gt;" về ">"...
        $content = html_entity_decode($content);

        // Nếu nội dung chứa từ "iframe", xử lý sạch các thẻ <pre> và các dấu nháy bao quanh
        if (stripos($content, 'iframe') !== false) {
            // Loại bỏ thẻ <pre> và </pre> (không phân biệt hoa thường)
            $content = preg_replace('#</?pre>#i', '', $content);

            // Trim khoảng trắng xung quanh
            $content = trim($content);

            // Loại bỏ dấu nháy đơn hoặc kép ở đầu và cuối (nếu chúng tồn tại)
            $content = preg_replace('/^["\']+|["\']+$/', '', $content);
        }
        return $content;
    }
}
