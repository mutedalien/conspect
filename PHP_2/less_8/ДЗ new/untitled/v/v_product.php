<div class="modal_div">
	<span class="img_views">
    Количество просмотров: {{product.view_count + 1}}
  </span>
  <img class="modal_img" src={{product.full_path}} alt={{product.name}}>
  <form class="buy-btn-form" method="post">
    <button type="submit" name="buy" class="btn btn-success buy-btn" value="{{product.img_id}}">В коризну</button>
  </form>
  <a href="index.php">
    <button class="modal_exit">X</button>
  </a>
</div>