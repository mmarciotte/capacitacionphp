<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <?php echo $sf_content ?>
    <!--
    Lo saco un segundo porque se me hace incomodisima la carga. Juan D
    <center>
    <h2 style="font-size: 30px">Graficos estadisticos faciles de modificar</h2>
    <?php stOfc::createChart( 500, 250, 'stOfcExample/pieChartData', false ); ?>
    <?php stOfc::createChart( 500, 250, 'stOfcExample/barChartData', false ); ?>
    <br /><br />
    <?php stOfc::createChart( 500, 250, 'stOfcExample/lineChartData', false ); ?>
    <?php stOfc::createChart( 500, 250, 'stOfcExample/3DBarChartData', false ); ?>
    </center> ->>
  </body>
</html>
