<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <?php
    $json_url = "http://apis.is/currency/m5";
    $json = file_get_contents($json_url);
    $json=str_replace('},

    ]',"}

    ]",$json);
    $data = json_decode(json_encode($json), True);
    ?>

  </head>
  <body>
    <?php
    var_dump($data);
     ?>
  </body>
</html>
