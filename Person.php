  <?php

require 'vendor/autoload.php';

use Vundi\Potato\Model;

class Person extends Model
{
    protected static $entity_table = 'Person';
    protected static $entity_class = 'Person';

    public function info()
    {
        return '#'.self::$ID.':'.$this->FName.' '.$this->LName.' '.$this->Age.' '.$this->Gender;
    }
}

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();
echo __DIR__;
Person::remove(2344);

//echo 'Saved changes successfully';

