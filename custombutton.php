defined('_JEXEC') or die;

class plgEditorMathJaxCustomButton extends JPlugin
{
    public function onInit()
    {
        JFactory::getDocument()->addScriptDeclaration('
            Joomla.editors.instances["editor-id"].addButton({
                text: "Inserir Fórmula Matemática",
                title: "Inserir Fórmula Matemática",
                cmd: "inserir_formula_matematica",
                onClick: function() {
                    // Código para exibir a caixa de diálogo e inserir a fórmula matemática
                    var formula = prompt("Digite a fórmula matemática:");
                    Joomla.editors.instances["editor-id"].execCommand("mceInsertContent", false, formula);
                }
            });
        ');
    }
}
