<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Rhyme Anytime</title>

    <link href="./style_unstable/lists.css" rel="stylesheet" type="text/css">
    <link href="./icons/styles/action_icons.css" rel="stylesheet" type="text/css">
    <link href="./style/buttons.css" rel="stylesheet" type="text/css">
    <link href="./style/headers.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="style.css">


  </head>

  <body >
        <section role="region">
      <header>
       <a role="button" href="index.html"><span class="icon icon-back">Back</span></a>
        <h1>Rhyming Words</h1>
      </header>
    </section>
    <section data-type="list">
      <header>Perfect Rhymes</header>
        <ul>
            <?php
              $keyword = $_POST['word'];
              $json = file_get_contents('http://rhymebrain.com/talk?function=getRhymes&word='.$keyword);
              $result =json_decode($json);
              $count = 1;
              foreach ($result as &$value) 
              {
                // echo '<li>';
                if(($count==1)&&($value->score != 300))
                {
                  echo '<header>Near Rhymes</header>';
                  $count +=1;
                }
                echo '<li><p style="padding: 20px;">'.$value->word.'</p></li>';
                // echo '</li>'
              }
            ?>
        </ul> 
    </section>
      

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->


  </body>
</html>
