const app = new Vue({

  el: '#app',

  data:{
   return:{
      apiUrl: 'https://flynn.boolean.careers/exercises/api/array/music',
      elencoDischi: [],
      cercaGenere: '',
      genereDaCercare: '',
   },

  mounted(){
    this.getApi();
  },

  methods:{
    getApi(){
      axios.get(this.apiUrl)
      .then(response =>{
        console.log(response.data)
        this.elencoDischi = response.data;
      })
    
      /*
    },
    cerca(genereDaCercare){
      this.genereDaCercare = genereDaCercare;
      console.log(genereDaCercare);
    },

  },


  
  computed:{
    dischiFiltrati(){
      if(this.genereDaCercare === ""){
        return this.elencoDischi
      } else{
        return this.elencoDischi.filter(CardSing => CardSing.genre === this.genereDaCercare)
      }
      */
    }
    
  }
  
 }
})