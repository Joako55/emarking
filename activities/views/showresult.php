<div class="container">
<a href="<?= $activityUrl?>">
<center>
<div style="text-align: left;">

<div class="row panel panel-default">

<div  class="col-xs-12 col-md-3 panel-body" style="text-align: left">
<br>
<h4><?=$coursesOA?></h4>
    <p>Propósito Comunicativo: <?=$data->comunicativepurpose?></p>
    <p>Género: <?=$data->genre?></p>
    <p>Audiencia: <?= $data->audience?></p>
    <p>Tiempo estimado: <?=$data->estimatedtime?></p>
    <p>Creado por: <?php echo $userobject->firstname.' '.$userobject->lastname ?>.</p>
</div>

<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" style="border-left: 1px solid #cccccc; "></div>


  <div class="col-xs-12 col-md-8 single-result-detail clearfix" style="text-align: left">
     <div id="descripcion" class="panel-body">
        
        <span style="font-size: 16px;">Género: <?=$data->genre?></span>
        <h3><b><?=$data->title?></b></h3>
        <br>
<p><?=$data->description?></p>
     </div>
     
    <div  class="row" style="text-align: left">
        
          <p><span class="glyphicon glyphicon-user">&ensp;55 Visitas</span>
             <span class="glyphicon glyphicon-comment" aria-hidden="true" style="margin-left: 10px;">&ensp;3 Comentarios</span>
             <span class="glyphicon glyphicon-ok" aria-hidden="true" style="margin-left: 10px;">&ensp;20 votos</span></p>
             
            <p> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
             <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
             <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
             <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
             <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span></p>

	</div>
  
  </div>
</div>
	
</div>
</center>
</a>
</div>