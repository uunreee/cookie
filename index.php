<?php

class Cookie
{
    private $type;

    public function setType($type)
    {
        $alternatives = array('chocolate', 'vanilla', 'strawberry');

        if (in_array($type, $alternatives)) {
            $this->type = $type;
        } else {
            $this->type = 'Таких печенек у нас нет';
        }
    }

    public function getType()
    {
        return "Вид печенек: " . $this->type;
    }
}

$chocolatecookie = new Cookie();
$ovsynie = new Cookie();

$chocolatecookie->setType('chocolate');
$ovsynie->setType('ovsynie');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        font-family: Arial, sans-serif;
    }

    .cookie {
        background-color: #f2f2f2;
        margin: 10px;
        padding: 10px;
        border-radius: 5px;
    }

    .cookie h2 {
        color: #333;
    }
</style>

<body>
    <div class="cookie">
        <h2>Chocolate Cookie</h2>
        <p><?php echo $chocolatecookie->getType(); ?></p>
    </div>
    <div class="cookie">
        <h2>Ovsynie Cookie</h2>
        <p><?php echo $ovsynie->getType(); ?></p>
    </div>
</body>

</html>