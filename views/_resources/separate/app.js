const App = new Vue({
    el: "#app",
    data: {
        step: 1,
        totalsteps: 5,
        errors: [],
        form: {
            pao: null,
            queijo: null,
            carne: null,
            salada: null,
            message: null
        }
    },
    methods: {
        prevStep: function(){
            this.step--
        },
        nextStep: function(){
            if(this.step == 1){
                if(!this.form.pao) {
                    this.errors = 'Selecione seu pão' 
                    return false
                }
            }
            
            if(this.step == 2){
                if(!this.form.queijo) {
                    this.errors = 'Selecione seu queijo' 
                    return false
                }
            }

            if(this.step == 3) {
                if(!this.form.carne) {
                    this.errors = 'Selecione sua carne' 
                    return false
                }
            }
            
            if(this.step == 4) {
                if(!this.form.salada) {
                    this.errors = 'Selecione sua salada' 
                    return false
                }
            }
            

            if(this.step == 5){
                if(!this.form.message) {
                    this.errors = 'Insira sua mensagem para prosseguir' 
                    return false
                }
            }
            this.errors = null

            this.step++
        },
        send: function(){
            alert("Por enquanto não é possível fazer seu pedido")
            this.errors = null
        }
    }
})