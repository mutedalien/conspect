// неудобный способ
// const menuItem = {
//   color: 'blue',
//   name: 'Shop',
//   makeRed() {
//     this.color = 'red';
//   }
// }

function MenuItem(color, name, width) {
  this.color = color;
  this.name = name;
  this.width = width;
}

MenuItem.prototype.changeColor = function(colorToChange = 'red') {
  this.color = colorToChange;
  console.log(`${this.name} change color to ${colorToChange}`);
}


function MainMenuItem(color, name, width) {
  // this === mainMenuItem
  MenuItem.call(this, color, name, width);
}

MainMenuItem.prototype = Object.create(MenuItem.prototype);
MainMenuItem.prototype.constructor = MainMenuItem;

const mainMenuItem = new MainMenuItem('black', 'MainMenuItem', 100);

console.log(mainMenuItem);
 


