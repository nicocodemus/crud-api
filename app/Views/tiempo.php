<?=$cabecera ?>




          <div class="d-flex justify-content-center">
            
            <div class="card bg-light text-white bg-dark bd-white" style="width:400px;height:500px">
              <h5 class="card-title h4 p-2">estado del tiempo en <?=$clima['name'] ?> <span class="text-danger"><?php date_default_timezone_set('Europe/Andorra'); echo date("h:i:sa")?></span></h5>
              
                <img style="max-height:100px;width:100px" class="ml-5"
                    src="http://openweathermap.org/img/wn/<?=$clima['weather'][0]['icon'];?>@4x.png"
                    class="card-img-top"
                    alt="<?=$clima['weather'][0]['description'];?>" />
              
                
              <div class="card-body">
                <h3 class="card-title"><?=$clima['weather'][0]['main'];?></h3>
                <p class="card-text">Maxima <?=$clima['main']['temp_max'];?>&deg;C  Minima <?=$clima['main']['temp_min'];?>&deg;C</p>
                <p class="card-text">sensacion termica <?=$clima['main']['feels_like'];?>&deg;C </p> 
                <p class="card-text">presion <?=$clima['main']['feels_like'];?>mb</p>
                <p class="card-text">humedad <?=$clima['main']['humidity'];?>%</p>        
                <p class="card-text">viento <?=$clima['wind']['speed'];?> m/s direccion <?=$clima['wind']['deg'];?>&deg;</p>
                
              </div>
            </div>
          </div>

       

<?=$piePagina?>