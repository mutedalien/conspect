$(document).ready(() => {

  $("#get_gallery").on('click', (e) => {
    e.preventDefault();

    $.ajax({
      url: "../engine/get_gallery.php",
      type: "POST",
      data: {
        gallery: "update",
      },
      success: function(response) {


        response = JSON.parse(response);
        if (response["status"] === 1){
          return;
        }
        let images = response[0];
        let result="";
        for(let item of images) {
          result+=`<a class='gallery_item' href = "photo.php?id=${item.id}" target='_blank'>
          <img data-src = $src src = ${item.mini_dir}/${item.mini_name} alt = 'gallery_image'>
          <h3 class='product_name'>${item.product_name}</h3>
          <h3 class='product_price'>${item.price}</h3></a>`
        }
        $(".gallery").append(result);
        }
    })
  });
});