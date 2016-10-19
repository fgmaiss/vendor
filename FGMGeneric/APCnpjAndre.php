<?php
namespace FGMGeneric;

/**
 * Class APCnpjAndre
 * @package FGMGeneric
 */
/**
 * Class APCnpjAndre
 * @package FGMGeneric
 */
class APCnpjAndre
{
    /**
     * @var
     */
    private $id;
    /**
     * @var
     */
    private $nome;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * Retorna Máscara do CNPJ
     * @param $var string
     * @return string
     */
    public static function Maskcnpj($var)
    {
        $var = \FGMGeneric\APFilter::Number($var);
        if (strlen(trim($var)) == 11) {
            $var = substr($var, 0, 3) . '.' . substr($var, 3, 3) . '.' . substr($var, 6, 3) . '-' . substr($var, 9, 2);
        } elseif (strlen(trim($var)) == 14) {
            $var = substr($var, 0, 2) . '.' . substr($var, 2, 3) . '.' . substr($var, 5, 3) . '/' . substr($var, 8, 4) . '-' . substr($var, 12, 2);
        }
        return ($var);
    }

    /**
     * mais um teste
     * @param $v
     * @return mixed
     */
    public static function TestaAndre($v)
    {
        return($v);
    }
}