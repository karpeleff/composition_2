<template>
    <div class="container">
        <div class="row justify-content-center">
            <div>
                <label>Время пуска</label>
                <datetime type="datetime"  v-model="date_start" ></datetime>
                <label>Время останова</label>
                <datetime type="datetime"  v-model="date_stop" ></datetime>
                <br>

                <label>Выбрать ДГУ</label>
                <select class="browser-default custom-select" v-model="des_select" >
                    <option value="ADR16-5">ADR16-5</option>
                    <option value="SD6000E">SD6000E</option>
                    <br>
                    <br>
                </select>
                <br>
                <br>
                <label>Выбрать тип запуска</label>
                <select class="browser-default custom-select" v-model="type_select">
                    <option value="Контрольный пуск">Контрольный пуск</option>
                    <option value="Авария промсети">Авария промсети</option>
                    <option value="Плановое отключение промсети">Плановое отключение промсети</option>
                </select>
                <br>
                <br>
                {{date_start}}
                <br>
                {{date_stop}}
                <br>
                {{des_select}}
                <br>
                {{type_select}}

                <br>
                <br>
                <button v-on:click="send_data" class="btn btn-submit"  >Send</button>
                <button v-on:click="clear_data" class="btn btn-submit"  >Clear</button>
            </div>
        </div>
    </div>
</template>

<script>

    import { Datetime } from 'vue-datetime';
    // You need a specific loader for CSS files
    import 'vue-datetime/dist/vue-datetime.css';
    import { Settings } from 'luxon';

    Settings.defaultLocale = 'ru';





    //Vue.use(Datetime)
    Vue.component('datetime', Datetime);
    export default {
        data: function () {
            return {
                date_start: '',
                date_stop: '',
                des_select: '',
                type_select: ''

            }
        },
        methods:{
            send_data: function (){
                axios.post('des/add_work_time', {
                    date_start:  this.date_start ,
                    date_stop:   this.date_stop,
                    des_select:  this.des_select,
                    type_select: this.type_select

                })
                    .then(function (response) {
                        //console.log(response);
                        alert('data added');
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },

            clear_data: function () {
                     this.date_start  = '',
                     this.date_stop   = '',
                     this.des_select  = '',
                     this.type_select = ''
            }


        }
    }

</script>

<style scoped>

</style>