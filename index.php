<html>
  <head>
    <meta charset="utf-8">
    <title>Verkefni 1 - HTTP</title>
  </head>
  <body style="width: 50%; margin: auto; margin-top: 100px;">

    <style media="screen">
      h3{
        margin-top: 80px;
      }
    </style>

    <h3>1. Hvað er HTTP, hvað þýðir að HTTP sé stateless protocol, komdu með dæmi.</h3>
    <hr>
    <p>
      HTTP er sett af reglum fyrir vefinn, og aðgerðir tengdar því. Sem dæmi, þegar að maður slær inn url í vafrann þá ertu að senda fyrirspurn á HTTP til að birta vefsíðuna.
    </p>

    <p>
      Stateless prototool þýðir að hver og ein aðgerð er framkvæmd ein og sér. Án þess að gera grein fyrir fyrirspurnini á undan.
    </p>

    <h3>2. Hvað er status code og hvað þýða eftirfarandi status codes, komdu með dæmi fyrir hvern flokk?</h3>
    <hr>
    <p>
      Status code er leið fyrir serverinn til þess að tala við notandann, til dæmis að láta vita ef að villa kom upp við eftirfarandi skipun.
    </p>

    <p>
      <b>1xx:</b> 100 til 102. Aðgerðin var móttekin og skilin. Mun halda áfram. Sem dæmi: 101 -
      <hr>
      <b>2xx:</b> 200 - 226. Aðgerðin tókst. Dæmi: 201 - aðgerð tókst, sem skilaði nýjum gögnum.
      <hr>
      <b>3xx</b> 300 - 308. Þörf er á viðbótaraðgerð. Dæmi: 301 - Allar aðgerðir eiga að beinast að gefnu URI.
      <hr>
      <b>4xx</b> 400 - 451. Villuskilaboð í sambandi við client-inn. Skilaboð birtast með frekari upplýsingum. Dæmi: 404 - Viðkomandi gögn eru ekki aðgengileg, en geta verið aðgenileg í framtíðinni.
      <hr>
      <b>5xx</b> 500 - 511. Serverinn gat ekki unnið úr eftirfarandi aðgerð. Dæmi: 500 - Óvænt villa kom upp, ekki er vitað nákvæmlega hvað er að.


    </p>

    <h3>3. Hverjar eru helstu nýjungar og breytingar með HTTP 2.0?</h3>
    <hr>
    <p>
      Planið var að breyta ekki neinni núverandi virkni, en frekar að bæta við nýjum möguleikum. Sem dæmi breyttist methods, status codes, header fields, og URIs lítið sem ekkert.
      Markmiðið var að auka hraðann á vefsíðum.
    </p>

  <h3>4. XML & JSON </h3>
  <p>
    <b>a)</b>
    {
    "crust": "original",
    "toppings": ["cheese", "pepperoni", "garlic"],
    "status": "cooking"
    "customer": ["Jón", "854698"]
    }

    <hr>
    <b>b)</b>
      <order>
        <crust>original</crust>
          <toppings>
              <topping>cheese</topping>
              <topping>pepperoni</topping>
              <topping>garlic</topping>
          </toppings>
        <status>cooking</status>
        <customerinfo>
          <name>Jón</name>
          <phone>8969707</phone>
        </customerinfo>
      </order>
  </p>

  <h3>5. Parsing JSON, sjá eftirfarandi uppsetingar og format fyrir ákveðin gögn</h3>

  <?php

  $events = [
             "events" => [
             ['location' => 'San Francisco, CA', 'date' => 'May 1', 'map' => 'img/map-ca.png'],
             ['location' => 'Austin, TX', 'date' => 'May 15', 'map' => 'img/map-tx.png'],
             ['location' => 'New York, NY', 'date' => 'May 30', 'map'=> 'img/map-ny.png']
             ]
            ];

  $eventsEn = json_encode($events , JSON_FORCE_OBJECT);
  $eventsDe = json_decode($eventsEn);


  echo "Encode -----------------<br><br>";
  echo "<pre>";
  print_r($eventsEn);
  echo "</pre>";
  echo "<br><br>";
  echo "Decode -----------------<br><br>";
  echo "<pre>";
  print_r($eventsDe);
  echo "</pre>";




   ?>








  </body>
</html>
