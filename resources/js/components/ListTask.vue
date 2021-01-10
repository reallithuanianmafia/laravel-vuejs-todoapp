<template>
    <div class="mycontainer container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card text-center">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Key</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Task</th>
                                    <th scope="col">Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr v-for="(task, index) in tasks">
                                    <th>0</th>
                                    <th>{{task.id}}</th>
                                    <td>{{task.name}}</td>
                                    <td><span v-bind:class="task.completed ? 'badge badge-success' : 'badge badge-danger' ">{{task.completed ? 'Completed' : 'Not Completed'}}</span></td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                      </div>
                </div>
            </div>
        </div>
</template>

<script>
    export default {
        created() {
            this.getTasks();
        },
        data() { 
          return {
            name: 'a',
            tasks: [],
          }
        },
        methods: {
          getTasks() {
            const axios = require('axios');
            var self = this;
            axios.get('/api/tasks')
            .then(function (response) {
              self.tasks = response.data;
            })
            .catch(function (error) {
              // handle error
              console.log(error);
            })
            .then(function () {
              // always executed
            });
          }
        }
    }
</script>
