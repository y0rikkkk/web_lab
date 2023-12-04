const { parallel } = require('gulp')

function task1(cb) {
    console.log("Task1")
    cb();
  }
  

  function task2(cb) {
    console.log("Task2")
    cb();
  }

exports.default = parallel(task1, task2)
