<?php
namespace FGMGeneric;

/**
 * Class APConvert
 */
class APConvert
{
    /**
     * @param $s
     * @return string
     */
    public static function Capital($s)
    {
        $var = explode(" ", $s);

        foreach ($var as $k => $v) {
            if (substr($v, 0, 1) != '[' && substr($v, 0, 1) != '(' && substr($v, 0, 1) != '{' && substr($v, 0, 1) != '"') {
                $v = self::Lower($v);
            }

            if ($v != 'dos' && $v != 'com' && $v != 'por' && $v != 'pelo' && $v != 'pelos' && $v != 'pela' && $v != 'pelas' && $v != 'para' && $v != 'de' && $v != 'do' && $v != 'da' && $v != 'dos' && $v != 'das' && $v != 'no' && $v != 'na' && $v != 'nos' && $v != 'nas' && $v != 'a' && $v != 'ao' && $v != 'ou' && $v != 'o' && $v != 'as' && $v != 'os' && $v != 'e') {
                $var[$k] = ucfirst($v);
                if (substr($var[$k], 0, 1) == '�')
                    $var[$k] = '�' . substr($var[$k], 1);
                if (substr($var[$k], 0, 1) == '�')
                    $var[$k] = '�' . substr($var[$k], 1);
                if (substr($var[$k], 0, 1) == '�')
                    $var[$k] = '�' . substr($var[$k], 1);
                if (substr($var[$k], 0, 1) == '�')
                    $var[$k] = '�' . substr($var[$k], 1);
                if (substr($var[$k], 0, 1) == '�')
                    $var[$k] = '�' . substr($var[$k], 1);
            } else {
                if ($v != 'vaf' && $v != 'icms' && $v != 'iptu' && $v != 'itbi' && $v != 'cfop' && $v != 'cep' && $v != 'cnae' && $v != 'gia' && $v != 'issqn') {
                    $var[$k] = $v;
                } else {
                    $var[$k] = self::Upper($v);
                }
            }
        }
        $s = '';
        foreach ($var as $k => $v) {
            $s .= $v . " ";
        }
        return (trim($s));
    }

    /**
     * @param $s
     * @return mixed
     */
    public static function Upper($s)
    {
        $s = strtoupper($s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', 'I', $s);
        $s = str_replace('"', '`', $s);
        return ($s);
    }

    /**
     * @param $s
     * @return mixed
     */
    public static function Lower($s)
    {
        $s = strtolower($s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('�', '�', $s);
        $s = str_replace('"', '`', $s);
        return ($s);
    }

    /**
     * @param $s
     * @return mixed
     */
    public static function NoQuotes($s)
    {
        $s = str_replace("\\", "", $s);
        $s = str_replace("\'", "`", $s);
        $s = str_replace('\"', "`", $s);
        $s = str_replace("'", "`", $s);
        $s = str_replace('"', "`", $s);

        return ($s);
    }

    /**
     * @param $valor
     * @return string
     */
    public static function Extense($valor)
    {
        if ($valor == 0) {
            return ("zero");
        } else {
            $singular = array("centavo","real","mil","milh�o","bilh�o","trilh�o","quatrilh�o");
            $plural = array("centavos","reais","mil","milh�es","bilh�es","trilh�es","quatrilh�es");

            $c = array("","cem","duzentos","trezentos","quatrocentos","quinhentos","seiscentos","setecentos","oitocentos","novecentos");
            $d = array("","dez","vinte","trinta","quarenta","cinquenta","sessenta","setenta","oitenta","noventa");
            $d10 = array("dez","onze","doze","treze","quatorze","quinze","dezesseis","dezessete","dezoito","dezenove");
            $u = array("","um","dois","tr�s","quatro","cinco","seis","sete","oito","nove");

            $z = 0;
            $rt = "";

            $valor = (double) $valor;

            $valor = number_format($valor, 2, ".", ".");
            $inteiro = explode(".", $valor);
            for ($i = 0; $i < count($inteiro); $i ++)
                for ($ii = strlen($inteiro[$i]); $ii < 3; $ii ++)
                    $inteiro[$i] = "0" . $inteiro[$i];

            // $fim identifica onde que deve se dar jun��o de centenas por "e" ou por "," ;)
            $fim = count($inteiro) - ($inteiro[count($inteiro) - 1] > 0 ? 1 : 2);
            for ($i = 0; $i < count($inteiro); $i ++) {
                $valor = $inteiro[$i];
                $rc = (($valor > 100) && ($valor < 200)) ? "cento" : $c[$valor[0]];
                $rd = ($valor[1] < 2) ? "" : $d[$valor[1]];
                $ru = ($valor > 0) ? (($valor[1] == 1) ? $d10[$valor[2]] : $u[$valor[2]]) : "";

                $r = $rc . (($rc && ($rd || $ru)) ? " e " : "") . $rd . (($rd && $ru) ? " e " : "") . $ru;
                $t = count($inteiro) - 1 - $i;
                $r .= $r ? " " . ($valor > 1 ? $plural[$t] : $singular[$t]) : "";
                if ($valor == "000")
                    $z ++;
                elseif ($z > 0)
                    $z --;
                if (($t == 1) && ($z > 0) && ($inteiro[0] > 0))
                    $r .= (($z > 1) ? " de " : "") . $plural[$t];
                if ($r)
                    $rt = $rt . ((($i > 0) && ($i <= $fim) && ($inteiro[0] > 0) && ($z < 1)) ? (($i < $fim) ? ", " : " e ") : " ") . $r;
            }
            return ($rt);
        }
    }

}