class MenuItem {
  constructor(name) {
    this.color = 'green';
    this.name = name;
  }
  makeRed() {
    this.color = 'red';
  }
}

const item1 = new MenuItem('MenuItem');

class MainMenuItem extends MenuItem {

  constructor(name, href) {
    super(name);
    this.href = href;
  }

  makeBlue() {
    this.color = 'blue';
  }
  makeRed() {
    this.color = 'RED';
  }
}

const mainMenuItem = new MainMenuItem('MainMenuItem', 'https://www.google.com');

console.log(mainMenuItem);

