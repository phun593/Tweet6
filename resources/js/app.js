/**
* First we will load all of this project's JavaScript dependencies which
* includes Vue and other libraries. It is a great starting point when
* building robust, powerful web applications using Vue and Laravel.
*/
require('./bootstrap');

window.Vue = require('vue');
/**
* The following block of code may be used to automatically register your
* Vue components. It will recursively scan this directory for the Vue
* components and automatically register them with their "basename".
*
* Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
*/
Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('like-button', require('./components/Like.vue'));
Vue.component('dislike-button', require('./components/disLike.vue'));
// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))
/**
* Next, we will create a fresh Vue application instance and attach it to
* the page. Then, you may begin adding components to this application
* or customize the JavaScript scaffolding to fit your unique needs.
*/
var gif = Vue.component('gif-search',{
    template:`
    <div>
    <input 
    @keyup.enter="getGifs" 
    type="text" 
    v-model="searchQuery"

    >
    <button type="submitt" class="btn btn-primary" @click="getGifs">SEARCH</button>
    <button type="submitt" class="btn btn-primary" @click="postGifs">Post</button>
    <i class="fas fa-thumbs-up"></i>


    <div class="preview-window"
    v-show="searchResults.length > 0" >
    <img class="gif-preview" 
    v-for="gif in searchResults" 
    :src="gif.images.downsized.url" 
    @click="saveGif(gif.images.downsized.url)" >

    </div>

            <div class="save-gif" V-for="gif in saveGifs" @click="postGifs">

                    <img v-for="gif in searchResults" :src="gif"   >


            </div>
    </div>
    `,
    data(){
        return {
            searchQuery:"" ,
            saveGif:'',
            searchResults:[],
            search:'',
            showsearch:false,
            caris:[]
        }
    },
    methods:{

        searchUser(){
            fetch('/api/product/search?='+ this.search)
            .then(res => res.json())
            .then(res => {
                this.caris =res;
                this.search = '';
                this.showsearch = true;
            } )
        },

        saveGif(gif){

            alert('hi');

            // this.searchResults.push(gif);
            // this.searchResults=[];s
            // this.searchQuery="";
        },

        postGifs(){

            alert('hi');
        },


        getGifs(){
            axios.get("http://api.giphy.com/v1/gifs/search?q="+ this.searchQuery + "&api_key=5A9hK07JmTgsFwmAzbayqWDkg6ZwcGID&limit=5")
                            .then((response) =>{
                // console.log(response.data);
                this.searchResults = response.data.data;
                });
        }
    }
});


const app = new Vue({
    el: '#app'



});