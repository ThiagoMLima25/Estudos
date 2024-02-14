<?php 
    /**
     * - Visa facilitar o entendimento quando se está lendo código de autores diferentes
     * - Apresenta uma série de regras sobre como formatar códigos PHP
     * 
     * Códigos em PHP devem seguir o padrão de codificação básico PSR-1
     * 
     * Última linha de todos os arquivos PHP devem terminar com uma única linha em branco.
     * 
     * Não se deve usar a tag de fechamento ?> em arquivos de PHP puro
     * limite de 120 caracteres por linha se houver mais use a quebra de linha
     * 
     * Linhas que não estão em branco, não devem ter espaço após o conteúdo da mesma
     * echo "Hello";   
     * Não deve haver mais que uma declaração por linha
     * 
     * Indentação - Códigos PHP devem ser indentados com 4 espaços ao invés de TAB
     * 
     * Palavras Chaves devem ser escritas com letras minúsculas (true, false, null)
     * 
     * Quando um namspace for definido, deve haver uma linha em branco após.
     * Declarações "use" devem estar após a declaração do namespace
     * 
     * As palavras chaves extends e implements devem ser declaradas sempre na mesma linha
     * do nome da classe
     * 
     * A visibilidade deve ser declarada em todos os métodos public, protected, private.
     * -> Métodos
     *     - Não deve existir um espaço em branco após o nome de um método;
     *     - Chave de abertura do método deve ficar na linha debaixo;
     *     - chave de fechamento deve ficar logo após o corpo do método;
     *     - Não deve haver um espaço em branco após o parênteses de abertura.
     * -> Argumentos
     *     - Espaço após cada argumento (Similar a escrita);
     *     - Pode-se usar múltiplas linhas.
     * 
     * Quando presentes, abstract e final devem preceder a declaração de visibilidade;
     * Static deve vir após.
     * 
     */
    namespace Vendor\Package;

    use FooInterface;
    use BarClass as Bar;
    use OtherVendor\OtherPackage\BazClass;

    class Foo extends Bar implements FooInterface
    {
        public function sampleMethod($a, $b = null)
        {
            if ($a === $b) {
                bar();
            } elseif ($a > $b) {
                $foo->bar($args1);
            } else {
                BazClass::bar($args2, $args3);
            }

            foreach ($variable as $key => $value) {
                # code...
            }
        }

        final public static function bar()
        {
            # Errado
            $x = 1; $y = 2;

            # Certo
            $x = 1;
            $y = 2;

            while ($x <= 10) {
                echo $x;
            }

            switch ($x) {
                case '0':
                    //no break
                case '1':
                    # code...
                    break;
                default:
                    # code...
                    break;
            }
        }

        public function veryLongMethodName(
            $args1,
            $arg2,
            array $args3 = []
        ) {
            for ($i=0; $i < 10; $i++) { 
                # code...
            }
        }

    }
