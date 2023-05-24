// Define o caminho absoluto para a pasta do plugin
defined('_JEXEC') or die;

// Registra o evento onGetContent
class plgEditorMathJax extends JPlugin
{
    public function onGetContent(&$editor, &$content, $params)
    {
        // Adiciona o código MathJax ao conteúdo
        $content .= '<script type="text/javascript" async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/3.2.0/es5/tex-mml-chtml.min.js"></script>';

        // Retorna o conteúdo com as fórmulas matemáticas
        return $content;
    }
}
