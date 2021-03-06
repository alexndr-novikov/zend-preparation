<?php

namespace Doc;

use Doc\models\MenuRenderer;

class Response
{
    private $filePath;
    private $requestUri;
    private $response = '';

    /**
     * Response constructor.
     * @param $requestUri
     */
    public function __construct($requestUri)
    {
        $this->filePath  = dirname(__DIR__, 1) . $requestUri . '.php';
        $this->requestUri = $requestUri;
    }

    /**
     * @throws \Throwable
     */
    public function send()
    {
        if (file_exists($this->filePath)) {
            $this->response =  $this->renderPhpFile(dirname(__DIR__) . '/src/views/layout.php', [
                'content' => $this->renderPhpFile(dirname(__DIR__) . '/src/views/doc-page.php', [
                    'contentSource' => highlight_file($this->filePath, true),
                    'contentEval' => $this->renderPhpFile($this->filePath),
                ]),
            ]);
        } else {
            $this->response = $this->renderPhpFile(dirname(__DIR__) . '/src/views/layout.php', [
                'content' => (new MenuRenderer(include dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . 'map.php'))->render(),
            ]);
        }
        echo $this->response;
    }

    /**
     * @param $filePath
     * @param array $_params_
     * @return string
     * @throws \Throwable
     */
    private function renderPhpFile($filePath, $_params_ = [])
    {
        $_obInitialLevel_ = ob_get_level();
        ob_start();
        ob_implicit_flush(false);
        extract($_params_, EXTR_OVERWRITE);
        try {
            require $filePath;
            return ob_get_clean();
        } catch (\Exception $e) {
            while (ob_get_level() > $_obInitialLevel_) {
                if (!@ob_end_clean()) {
                    ob_clean();
                }
            }
            throw $e;
        } catch (\Throwable $e) {
            while (ob_get_level() > $_obInitialLevel_) {
                if (!@ob_end_clean()) {
                    ob_clean();
                }
            }
            throw $e;
        }
    }
}
