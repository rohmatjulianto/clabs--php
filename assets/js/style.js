var home = new Vue({
    el: '#app',
    vuetify : new Vuetify(),
    data : () => ({
    colors: [
      'indigo',
      'warning',
      'pink darken-2',
      'red lighten-1',
      'deep-purple accent-4',
    ],
    slides: [
        'First',
        'Second',
        'Third',
        'Fourth',
        'Fifth',
    ],
    icons: [
        'mdi mdi-facebook',
        'mdi mdi-twitter',
        'mdi mdi-google-plus',
        'mdi mdi-linkedin',
        'mdi mdi-instagram',
    ],
    items: [
        {
          src: 'https://cdn.vuetifyjs.com/images/carousel/squirrel.jpg',
        },
        {
          src: 'https://cdn.vuetifyjs.com/images/carousel/sky.jpg',
        },
        {
          src: 'https://cdn.vuetifyjs.com/images/carousel/bird.jpg',
        },
        {
          src: 'https://cdn.vuetifyjs.com/images/carousel/planet.jpg',
        },
      ],
      tags: [
        'Work',
        'Home Improvement',
        'Vacation',
        'Food',
        'Drawers',
        'Shopping',
        'Art',
        'Tech',
        'Creative Writing',
      ],
    }),
    computed: {
      target () {
        const value = "selector";
        if (!isNaN(value)) return Number(value)
        else return value
      },
      options () {
        return {
          duration: 300,
          offset: 20,
          easing: 'easeInOutCubic',
        }
      },
      element () {
        if (this.selected === 'Button') return this.$refs.button
        else if (this.selected === 'Radio group') return this.$refs.radio
      },
    },
})

