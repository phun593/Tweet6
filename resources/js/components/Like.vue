<template>


  <a class="btn btn-link" href="" name="tweet"  @click="likedTweet" >
    Like <span v-model="like" class="badge badge-light" style="margin-left: 5px;">{{like}}</span>
  </a>
</template>
<script>
export default {
    data(){
        return {

              like:0


        }
    },
    props:['tweetid'],
    mounted() {


      
  // console.log(this.like);

  },
  methods:{
      likedTweet(e){
          e.preventDefault();

      // alert(this.tweetid);
          

      // alery(index)
    axios.get('/axioslike'+ this.tweetid,{})
            .then(response => {

              this.like = this.like + 1;

              // this.like = response.data;

              // this.like = response.data;








              


      // console.log(response);
      // this.like = response.data
      });

    }
  }
};

</script>