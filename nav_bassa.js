let nav_bassa = Vue.createApp({ });

nav_bassa.component("nav_bassa", {

    data(){
        return {
            image: "../Immagini logo/favicon.png"
        }
    },

    template:`
    <div class="footer">
        <img v-bind:src="image" alt="Tale of Tails" width="40" height="40"/>
        &nbsp;
        &copy; 2023 Tale of Tails
        &nbsp;
        <a href="https://protezionedatipersonali.it/informativa">Privacy</a>  &emsp;
        <a href="../AboutUs.html">Chi siamo</a>
        &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        Contatti: iannicelli.1957045@studenti.uniroma1.it / lavini.1941986@studenti.uniroma1.it
    </div>
    `
    
});
nav_bassa.mount("#nav_bassa");
