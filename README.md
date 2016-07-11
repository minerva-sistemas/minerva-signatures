![](http://i.imgur.com/JTyviEc.png)

`composer require minerva-sistemas/minerva-signatures`

Crie assinaturas para seus objetos utilizando comentários. Para criar uma assinatura, basta fazer como no exemplo abaixo, onde criamos uma assinatura de configuração para o objeto. Você pode utilizar qualquer tag para criar sua assinatura, desde que seja no padrão JSON e tenha uma chave e um valor.

```php
/**
 * Class Car
 * @author  Lucas A. de Araújo <lucas@minervasistemas.com.br>
 * @configure {"adapter":"Connection1"}
 * @configure {"table":"loja_cliente"}
 */
class Cliente
{
}
```
Para acessar os valores definidos também é simples.

```php
$configuration = SignatureParser::getDictionary($car, null, '@configure');

echo $configuration->get('brand')->getValue(); // Chevrolet
echo $configuration->get('brand')->getName();  // Brand
```
