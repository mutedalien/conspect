
let moreBtn = document.querySelector(".more_btn");

if (moreBtn) {
  let picturesToRender = 4;
  let startValue = $('.content_list')[0].childElementCount;
  let endValue = startValue + picturesToRender-1;

  function getMorePic(){
    //асинхронный запрос на получение до товаров
    $.ajax({
      type: 'POST',
      url: 'm/img_ajax.php',
      data: {start: startValue, end: endValue},
      success: function(data){
        
        let result = JSON.parse(data);
        //если результат запроса не пустой, то парсим html
        if (result.html !== ""){
          $('.content_list').append(result.html);
        //иначе удаляем DOM объект кнопки "ЕЩЁ"
        } else {
          $('.more_btn').remove();
        }
      }
    });
    endValue += picturesToRender;
    startValue += picturesToRender;
  }


  /**
   * Устанавливаем обработчик событий на кнопку ЕЩЁ
   */  
  moreBtn.addEventListener('click', (event) => {
    event.preventDefault();
    getMorePic();
  })
}

