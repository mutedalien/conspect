
<div class="modal-content cart">
  <form method="post">
    <div class="modal-header">
    </div>
    <div class="modal-body cart-body">
      {% if cart|length == 0 %}
      <h2>Ваша корзина пока пуста</h2>
      {% endif %}
      {% for good in cart %}
        <div class="cart-item">
          <img
            class="cart_img"
            id={{good.img_id}}
            src={{good.compr_full_path}}
            width={{good.width}}
            height="100"
            alt={{good.name}}
          >
          <div class="cart-good_info">
            <span class="cart-good_name">
              {{good.good_name}}
            </span>
            <div class="cart-price-div">
              <span class="cart-good_qty">
                Кол-во: {{good.qty}} шт.
              </span>
              <span class="cart-good_price">
                Цена: {{good.price}} USD
              </span>
            </div>
          </div>
          <form method="post">
              <button type="submit" name="delete" class="btn btn-danger delete_btn" value={{good.img_id}}>удалить</button>
          </form>
        </div>
        <hr>
      {% endfor %}
      {% if cart|length > 0 %}
      <span class="cart-total">ИТОГО: {{total}} USD</span>
      {% endif %}
    </div>
    <div class="modal-footer">
      <a class="btn btn-info exitCart" href="index.php" role="button">Назад в галерею</a>
      {% if cart|length > 0 %}
      <form method="post">
        <button name="clear" type="submit" class="btn btn-secondary" value="true">Очистить</button>
      </form>
      <form method="post">
        <button name="order" type="submit" class="btn btn-primary" value="true">Оформить заказ</button>
      </form>
      {% endif %}
    </div>
  </form>
</div>
