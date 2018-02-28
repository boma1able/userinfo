<!doctype html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>test work</title>
</head>
<body>

<?php
include_once('AboutGuest.php');
$AboutGuest = new AboutGuest;

//Исходные данные: $AboutGuest->agent
//IP: $AboutGuest->ip
//Браузер: $AboutGuest->browser
//ерсия: $AboutGuest->version
//Операционная система: $AboutGuest->operating_system
//версия: $AboutGuest->os_version
//Зашел с мобильного? ". $AboutGuest->is_mobile
//Телефон: $AboutGuest->mobile
//Дата: $date = date('Y-m-d H:i:s');
?>


<p>Lorem ipsum dolor sit amet, <strong><?php echo $AboutGuest->operating_system;?></strong> consectetur adipiscing elit. Ut elementum urna imperdiet libero malesuada,
        sed lobortis ipsum lobortis. Phasellus eget lectus mollis, viverra velit et, tincidunt sem. Phasellus imperdiet
        consectetur dui at auctor. Curabitur quis accumsan nisl. Cras maximus velit volutpat velit rutrum, at tincidunt
        lectus commodo. Ut congue quam finibus, <strong><?php echo $AboutGuest->operating_system;?> <?php echo $AboutGuest->os_version;?></strong> scelerisque justo nec, dictum ante. Fusce non efficitur odio.
        Phasellus posuere <strong>Mobile info:  <?php echo $AboutGuest->mobile;?></strong> tempus arcu, ac pharetra diam eleifend sit amet. Maecenas lacinia rhoncus nibh eget fermentum.
        Sed eu rhoncus sapien. Nulla sit amet metus id libero ultricies congue. Etiam tempor odio orci, ac commodo justo mattis et.
        Orci varius natoque. <strong><?php echo $date = date('Y-m-d H:i:s');?></strong></p>

</body>
</html>

