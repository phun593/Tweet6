<template>


    

         <a class="btn btn-link" href="" value="hellow" @click="dislikedTweet">
            Dislike <span  v-model="dislike" class="badge badge-light" style="margin-left: 10px;"> {{dislike}}</span>

        </a> 
      
           
    
</template>

<script>
    export default {

        data(){
            return {

                dislike:5,
                
                


                
            }
        },

        props:['tweetid'],



        mounted() {
            // console.log('Component mounted.')
            
        },

          methods:{

            dislikedTweet(e){

             e.preventDefault();
             


                // alert(this.tweetid);
            
            // alery(index)
             axios.get('/axiosdDislike'+ this.tweetid)
             .then(response => {

                this.dislike = this.dislike +1;

                // console.log(response);
                // this.like = response.data
            });
            

            }
        }
    };

  
</script>