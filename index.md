## ClassPB by SkelletonX

Bom, Menininhos criei essa classe para obter dados do rank do [PBBR](https://pb.ongame.net/), atravez do [DOMDocument](http://php.net/manual/pt_BR/class.domdocument.php).

### Tutorial

Abaixo vou mostrar um exemplo de como usar a classe simples.
```markdown
Syntax highlighted code block

include("class/PB.class.php");
$pbclass = new PB();

$idclan = "678998";
$nomeclan = "GhostStars";

echo $pbclass->Clan_Info_Wrapper_EXP($idclan, $nomeclan);
```markdown

### Support or Contact

Para obter meu contato caso aja erro da classe, [RageZone](http://ragezone.com.br/index.php/user/121414-skelletonx/), ou use [Issues](https://github.com/SkelletonX/ClassPB/issues)
