<?=$cabecera ?>

estado del tiempo en <?=$clima['name'] ?>


          <div class="col">
            <div class="card" style="width: 30vw">
              <h5 class="card-title p-2">estado del tiempo en <?=$clima['name'] ?>  <?php date_default_timezone_set('Europe/Andorra'); echo date("h:i:sa")?></h5>
              <img
                src="http://openweathermap.org/img/wn/<?=$clima['weather'][0]['icon'];?>@4x.png"
                class="card-img-top"
                alt="<?=$clima['weather'][0]['description'];?>"
              />
              <div class="card-body">
                <h3 class="card-title"><?=$clima['weather'][0]['main'];?></h3>
                <p class="card-text">Maxima <?=$clima['main']['temp_max'];?>&deg;C  Minima <?=$clima['main']['temp_min'];?>&deg;C</p>
                <p class="card-text">sensacion termica <?=$clima['main']['feels_like'];?>&deg;C </p> 
                <p class="card-text">presion <?=$clima['main']['feels_like'];?>mb</p>
                <p class="card-text">humedad <?=$clima['main']['humidity'];?>%</p>        
                <p class="card-text">Wind <?=$clima['wind']['speed'];?>m/s y <?=$clima['wind']['deg'];?>&deg;</p>
                
              </div>
            </div>
          </div>

       

<?=$piePagina?>