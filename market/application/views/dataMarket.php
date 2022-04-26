<style>
  body::-webkit-scrollbar {
  display: none;
}

</style>
<div class="container">   
  <tbody>
    <?php $i = 0 ;?> 
    <div class="card-deck">
      <?php foreach($weapon as $wpn):?> 
        <?php 
        $enter = 3;
        if($ulang = $i % $enter == 0){
          echo '</div>';
          echo '<br>';
          echo '<div class="card-deck">';
        }
        ?> 
        <div class="card">
          <center>
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($wpn['image']); ?>" class="card-img-top" style="width:200px;height:200px;">
          </center>
          <div class="card-body">
            <?php 
              $url = $wpn['link'];
              $url = prep_url($url);
            ?> 
            <h5 class="card-title" style="color:#FF6C00"><?=$wpn['name']?></h5>
            <p class="card-text">
              <details>
                <summary>Read Description</summary>
                <?=$wpn['deskripsi']?>
              </details>
            </p>
            <a href="<?=$url?>" class="btn btn-primary"  target="_blank">Start From Rp<?=$wpn['harga']?></a>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated <?=$wpn['uploaded']?></small>
          </div>
        </div>  
      <?php $i = $i + 1 ;?> 
      <?php endforeach?>
    </div>
  </tbody>
</div>