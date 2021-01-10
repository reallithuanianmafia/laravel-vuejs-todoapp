<template>
    <div class="mycontainer container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                          <h5 class="card-title text-center">ToDo App</h5>
                          <p class="card-text text-center">PHP and VUE.JS have been used.</p>
                          <form v-on:submit.prevent="addTask()">
                            <div class="form-group">
                              <label for="new-task">Task / {{task.name}}</label>
                              <input type="text" class="form-control" id="new-task" v-model="task.name">
                              <small class="form-text text-muted">Anything can be. What do you plan to do?</small>
                            </div>
                            <input type="submit" class="btn btn-primary btn-sm">
                          </form>
                        </div>
                      </div>
                </div>
            </div>
        </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data()
        {
            return {
                task: {
                    name: '',
                }
                
            }
        },
        methods: 
        {
            addTask()
            {
                if(this.task.name == '')
                {
                    return;
                }
                const axios = require('axios');
                axios.post('/api/task/store', {
                    task: this.task,
                })
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                });

            },
            doThis()
            {
                alert('hey yo');
            }
        }
    }
</script>
