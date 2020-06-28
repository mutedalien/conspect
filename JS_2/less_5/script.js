const app = new Vue({
  el: '.app',
  data: {
    name: '',
    names: [
      { name: 'Frodo' }, 
      { name: 'Sam' }, 
      { name: 'Meriadoc' }, 
      { name: 'Peregrin' }
    ]
  },
  computed: {
    upperCaseName() {
      return this.name.toUpperCase();
    }
  },
  methods: {
    clickHandler(name) {
      console.log('clicked', name);
    },
  },
  mounted() {
    console.log('mounted');
  },
  created() {
    console.log('created');
  },
  beforeDestroy() {
    console.log('before destroy');
  }
});
