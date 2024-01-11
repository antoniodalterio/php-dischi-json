const { createApp } = Vue;

createApp({
  data() {
    return {
      albums: [],
    };
  },
  methods: {
    getAlbum() {
      axios.get('server.php').then((response) => {
        this.albums = response.data;
        console.log(this.albums);
      });
    },
  },
  created() {
    this.getAlbum();
  },
}).mount('#app');
