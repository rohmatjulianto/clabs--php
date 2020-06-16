<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
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
    <v-app class="myFont">

    <nav  class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <v-container>
      <a class="navbar-brand" href="#">
        <!-- <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" alt=""> -->
        <img src="<?=base_url()?>assets/image/logo.png" height="30" alt=""> 
      </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link font-weight-bold" href="#home">HOME <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link font-weight-bold" href="#portfolio">OUR PORTFOLIO</a>
                <a class="nav-item nav-link font-weight-bold" href="#pricing">OUT PRICING</a>
            </div>
        </div>
    </v-container>
    </nav>
   
      <v-content  >
        <v-carousel id="home" height="80vh"
        dark
        hide-delimiter-background
        show-arrows-on-hover>
          <v-carousel-item
            v-for="(item,i) in items"
            :key="i"
            :src="item.src"
          ></v-carousel-item>
        </v-carousel>   

          <v-container pa-6 mt-10 id="portfolio">
            <div class="section-story text-center">
                <h2 class="title-head">Our Portfolio</h2>
                <p class="subtitle-head py-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor incidunt voluptatibus sequi inventore maiores sed rerum. Magnam, quod consectetur? Neque in praesentium, quasi id odit laudantium impedit eos perspiciatis? Laboriosam?</p>
            </div>
            
            <v-row>
              <v-col
                v-for="n in 6"
                :key="n"
                height="400"
                class="d-flex child-flex ma-0"
                cols="6" md="4"
              >
                <v-card flat tile class="d-flex">
                  <v-img
                    :src="`<?=base_url()?>assets/image/Porto/${n}.jpeg`"
                    :lazy-src="`<?=base_url()?>assets/image/Porto/${n}.jpeg`"
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
         
            <div class="text-right">
            <v-btn 
              text
              class="ma-2"
              href="<?=base_url()?>index.php/GetPortfolio"
              style="text-decoration: none">
              See More Portfolio
              <v-icon  right dark>mdi mdi-chevron-right</v-icon>
            </v-btn>
            </div>
           
            
        </v-container>

        <v-container pa-6 mt-10 id="our-service">
          <div class="section-story text-center">
              <h2 class="title-head ">Our Service</h2>
              <p class="subtitle-head py-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor incidunt voluptatibus sequi inventore maiores sed rerum. Magnam, quod consectetur? Neque in praesentium, quasi id odit laudantium impedit eos perspiciatis? Laboriosam?</p>
          </div>

          <div id="owl-1" class="owl-carousel owl-theme">
            <div class="item"  style="background-color: #F5F5F5;"
              v-for="n in 4"
              :key="n">
              
            <v-row  align="center" justify="center" >
              <v-col cols="12" md="6" class="no-padding">
                <v-img 
                src="https://cdn.vuetifyjs.com/images/cards/docks.jpg"
                lazy-src="https://cdn.vuetifyjs.com/images/cards/docks.jpg"
                aspect-ratio="1.4"
                class="grey lighten-2">
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
              </v-col>
              <v-col cols="12" md="6" >
  
                  <v-card-title class="headline">Visual Design</v-card-title>
                  <v-card-subtitle class="subtitle-1 pt-10" >
                    <ul>
                      <li v-for="n in 3" :key="n" class="body-1"> 
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus, tempora hic consequuntur 
                      </li>
                    </ul>
                  </v-card-subtitle>
                  
               
              <v-card-actions >
                <v-btn text tile>
                  <v-icon left>mdi mdi-arrow-right</v-icon>
                  Go to Our Service
                </v-btn>
              </v-card-actions>
                
                
              </v-col>
            </v-row>
              
            </div>
        </div>
      </v-container>
      

        <v-container pa-6 mt-10 id="pricing">
          <div class="section-story text-center">
              <h2 class="title-head">Our Pricing</h2>
              <p class="subtitle-head py-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor incidunt voluptatibus sequi inventore maiores sed rerum. Magnam, quod consectetur? Neque in praesentium, quasi id odit laudantium impedit eos perspiciatis? Laboriosam?</p>
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
        src="https://s3-ap-southeast-1.amazonaws.com/chicanddarling-web/setting/home_collab_img/Boenkus%20collab.jpg"
        >
        <v-container>
          <div class="text-center py-10">
            <h1 class="display-1 mb-4">Colaborate with us</h1>
            <p class="body-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio excepturi laborum a officia corrupti quibusdam neque nulla veniam corporis esse, quaerat totam expedita rem fugit eius cupiditate, nam eligendi vitae.</p>
            <v-btn href="<?=base_url();?>index.php/GetContact" class="px-8" x-large>LET'S TALK</v-btn>
          </div> 
        </v-container>
      </v-parallax>
      <div class="white py-6 text-center">
        <v-container>
          <div class="text-center">
            <h5 class="title-head pt-10">As Seen In</h5>
          </div>
          <v-row>
            <v-col cols="6" md="3" 
            v-for="n in 8"
            :key="n">
           
              <v-img
              :src="`https://s3-ap-southeast-1.amazonaws.com/chicanddarling-web/press_logo/md1uJ/logo_asseenin_8.png`"
              contain
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

            <div class="grey lighten-1 text-center pa-2">
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
                <div class="text-center pa-6">
                  <v-img src="<?=base_url()?>assets/image/navlogo.png">
                </div>
              </v-col>

              <v-col  cols="12" md="5">
                  <div class="pa-6 text-left">
                      <div class="subheading font-weight-bold mb-3">Contact Us</div>
             
                        <a href="mailto:eathercreatibelab@gmail.com" class="nav-item nav-link no-padding my-2" text>
                          <v-icon left>mdi mdi-email</v-icon> eathercreatibelab@gmail.com
                        </a>
                        <a href="" class="nav-item nav-link no-padding my-2" text>
                          <v-icon left>mdi mdi-phone-hangup</v-icon> 0823 2823 2820 2803
                        </a>
                        <a href="" class="nav-item nav-link no-padding my-2" text>
                          <v-icon left>mdi mdi-instagram</v-icon> @athercreatibel
                        </a>
                     
            
                  
                  </div>
              </v-col>

              <v-col cols="12" md="3">
                    <div class="pa-6 text-center">
                        <div class="subheading">Be The First To Know!</div>
                        <v-btn class="mt-3" block large outlined>SUBSCRIBE</v-btn>
                        <div class="subheading mt-3">
                          <span >Working Hours</span>
                          Monday - Friday 09:00 - 17:00 (GMT+7)</div>
                    </div>
              </v-col>
                  
                </v-row>
              </v-container>

              <div class="grey lighten-3 dark--text text-center pa-8 ">
               Ether Creative Lab ©{{ new Date().getFullYear() }} All Rights Reserved
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
        autoplayTimeout:3000,
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
        autoplayTimeout:3000,
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