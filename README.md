# minerva-signatures

```php
/**
 * Class Car
 * @author  Lucas A. de Araújo <lucas@minervasistemas.com.br>
 * @configure {"brand":"Chevrolet"}
 */
class Car
{
    /**
     * @configure {"cc":"5.0"}
     */
    public $engine = 'v8';
}
```

```php
$configuration = SignatureParser::getDictionary($car, null, '@configure');
echo $configuration->get('brand')->getValue();
```
