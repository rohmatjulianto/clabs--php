<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <!-- owl carousel -->
  <link rel="stylesheet" href="<?=base_url()?>assets/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/owlcarousel/assets/owl.theme.default.min.css">
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <title>Home</title>
</head>
<body>

<div id="app">
    <v-app>

    <nav  class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <v-container>
    <a class="navbar-brand" href="#">Creative Labs</a>
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link font-weight-bold" href="#home">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link font-weight-bold" href="#portfolio">Our Portfolio</a>
                <a class="nav-item nav-link font-weight-bold" href="#pricing">Our Pricing</a>
            </div>
        </div>
    </v-container>
    </nav>
   
      <v-content  >
        <v-carousel id="home" height="80vh"
        dark
        hide-delimiter-background
        show-arrows-on-hover cycle>
          <v-carousel-item
            v-for="(item,i) in items"
            :key="i"
            :src="item.src"
          ></v-carousel-item>
        </v-carousel>   

          <v-container pa-6 id="portfolio">
            <div class="section-story text-center">
                <h2 class="title-head">Our Portfolio</h2>
                <p class="subtitle-head">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor incidunt voluptatibus sequi inventore maiores sed rerum. Magnam, quod consectetur? Neque in praesentium, quasi id odit laudantium impedit eos perspiciatis? Laboriosam?</p>
            </div>
            
            <v-row>
              <v-col
                v-for="n in 6"
                :key="n"
                class="d-flex child-flex"
                cols="4"
              >
                <v-card flat tile class="d-flex">
                  <v-img
                    :src="`https://picsum.photos/500/300?image=${n * 5 + 10}`"
                    :lazy-src="`https://picsum.photos/10/6?image=${n * 5 + 10}`"
                    aspect-ratio="1"
                    class="grey lighten-2"
                  >
                    <template v-slot:placeholder>
                      <v-row
                        class="fill-height ma-0"
                        align="center"
                        justify="center"
                      >
                        <v-progress-circular indeterminate color="grey lighten-5"></v-progress-circular>
                      </v-row>
                    </template>
                  </v-img>
                </v-card>
              </v-col>
            </v-row>
        </v-container>

        <v-container pa-6 id="our-service">
          <div class="section-story text-center">
              <h2 class="title-head">Our Service</h2>
              <p class="subtitle-head">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor incidunt voluptatibus sequi inventore maiores sed rerum. Magnam, quod consectetur? Neque in praesentium, quasi id odit laudantium impedit eos perspiciatis? Laboriosam?</p>
          </div>
          <div id="owl-1" class="owl-carousel owl-theme">
            <div class="item" 
              v-for="n in 6"
              :key="n">
                <v-img
                  :src="`https://picsum.photos/500/300?image=${n * 5 + 10}`"
                  :lazy-src="`https://picsum.photos/10/6?image=${n * 5 + 10}`"
                  aspect-ratio="1"
                  height="400"
                  class="grey lighten-2"
                >
                <template v-slot:placeholder>
                  <v-row
                    class="fill-height ma-0"
                    align="center"
                    justify="center"
                  >
                    <v-progress-circular indeterminate color="grey lighten-5"></v-progress-circular>
                  </v-row>
                </template>
                </v-img>
            </div>
        </div>

  
      </v-container>
      

        <v-container pa-6 id="pricing">
          <div class="section-story text-center">
              <h2 class="title-head">Our Pricing</h2>
              <p class="subtitle-head">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor incidunt voluptatibus sequi inventore maiores sed rerum. Magnam, quod consectetur? Neque in praesentium, quasi id odit laudantium impedit eos perspiciatis? Laboriosam?</p>
          </div>
          <div id="owl-0" class="owl-carousel owl-theme">
            <div class="item" 
              v-for="n in 6"
              :key="n">
                <v-img
                  :src="`https://picsum.photos/500/300?image=${n * 5 + 10}`"
                  :lazy-src="`https://picsum.photos/10/6?image=${n * 5 + 10}`"
                  aspect-ratio="1"
                  height="400"
                  class="grey lighten-2"
                >
                <template v-slot:placeholder>
                  <v-row
                    class="fill-height ma-0"
                    align="center"
                    justify="center"
                  >
                    <v-progress-circular indeterminate color="grey lighten-5"></v-progress-circular>
                  </v-row>
                </template>
                </v-img>
            </div>
        </div>

  
      </v-container>

      <v-parallax
        dark
        height="auto"
        src="https://cdn.vuetifyjs.com/images/backgrounds/vbanner.jpg"
        >
        <v-container>
          <div class="text-center pa-6">
            <h1 class="display-1 mb-4">Colaborate with us</h1>
            <p class="body-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio excepturi laborum a officia corrupti quibusdam neque nulla veniam corporis esse, quaerat totam expedita rem fugit eius cupiditate, nam eligendi vitae.</p>
            <v-btn class="px-8" x-large>LET'S TALK</v-btn>
          </div> 
        </v-container>
      </v-parallax>
      <div class="brown lighten-5 py-6 text-center">
        <v-container>
          <div class="text-center">
            <h2 class="title-head">As Seen In</h2>
          </div>
          <v-row>
            <v-col cols="6" md="3" 
            v-for="n in 8"
            :key="n">
           
              <v-img
              :src="`https://upload.wikimedia.org/wikipedia/commons/a/a7/Tokopedia.svg`"
              contain
              max-height="40"
              class="ma-3"
            >
      
            <template v-slot:placeholder>
              <v-row
                class="fill-height ma-0"
                align="center"
                justify="center"
              >
                <v-progress-circular indeterminate color="grey lighten-5"></v-progress-circular>
              </v-row>
            </template>

            </v-card>
               
            </v-col>
          </v-row>
        </v-container>
      </div>
     
      </v-content>

    <v-footer padless>
        <v-content>

            <div class="blue-grey lighten-3 text-center pa-2">
                <v-btn
                    v-for="icon in icons"
                    :key="icon"
                    class="mx-3 white--text"
                    icon>
                    <v-icon size="24px">{{ icon }}</v-icon>
                </v-btn>
            </div>

            <v-container>
                <v-row align="center" justify="center">
              <v-col  cols="12" md="4"
               >
                <div class="text-center " >
                  <v-btn large outlined >LOGO Creative Labs</v-btn>
                </div>
              </v-col>

              <v-col  cols="12" md="5">
                  <div class="pa-6 text-left">
                      <div class="subheading font-weight-bold mb-3">Contact Us</div>
             
                        <a href="" class="nav-item nav-link no-padding my-2" text>
                          <v-icon left>fab fa-envelope</v-icon> eathercreatibelab@gmail.com
                        </a>
                        <a href="" class="nav-item nav-link no-padding my-2" text>
                          <v-icon left>fab fa-phone</v-icon> 0823 2823 2820 2803
                        </a>
                        <a href="" class="nav-item nav-link no-padding my-2" text>
                          <v-icon left>fab fa-instagram</v-icon> @athercreatibel
                        </a>
                     
                
                        <!-- <v-list>
                        
                            <v-list-item
                              v-for="(item, i) in items"
                              :key="i"
                            >
                              <v-list-item-icon>
                                <v-icon >fab fa-facebook"></v-icon>
                              </v-list-item-icon>
                              <v-list-item-content>
                                <v-list-item-title v-text="asdsa"></v-list-item-title>
                              </v-list-item-content>
                            </v-list-item>
                        
                        </v-list> -->
                        <!-- <a class="nav-link no-padding" href="#">Home</a>
                        <a class="nav-item nav-link no-padding"  href="#">Our Portfolio</a>
                        <a class="nav-item nav-link no-padding" href="#">Our Pricing</a> -->
                  
                  </div>
              </v-col>

              <v-col cols="12" md="3">
                    <div class="pa-6 text-center">
                        <div class="subheading font-weight-bold">Be The First To Know!</div>
                        <v-btn class="mt-3" block large outlined>SUBSCRIBE</v-btn>
                        <p class="mt-3">
                          <span >Working Hours</span>
                          Monday - Friday 09:00 - 17:00 (GMT+7)</p>
                    </div>
              </v-col>
                  
                </v-row>
              </v-container>

              <div class="indigo lighten-1 white--text text-center pa-4">
                {{ new Date().getFullYear() }} — <strong>Creative Labs</strong>
              </div>

              
        </v-content>
  
    </v-footer>
    </v-app>
  </div>



</body>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
    <!-- owlcarousel -->
    <script src="<?=base_url()?>assets/owlcarousel/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/owlcarousel/owl.carousel.min.js"></script>
    <!-- style -->
    <script src="<?=base_url()?>assets/js/style.js"></script>

    <script>
      $('#owl-0').owlCarousel({
        loop:true,
        margin:20,
        nav:false,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
      }),

      $('#owl-1').owlCarousel({
        loop:true,
        margin:20,
        nav:false,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
      })
    </script>
  
</html>