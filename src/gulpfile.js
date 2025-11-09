function defaultTask(cb) {
  console.log('defaultTask is running');
  // place code for your default task here
  cb();
}

function anotherTask(cb) {
  console.log('anotherTask is running');
  // place code for your default task here
  cb();

}

exports.default = defaultTask
exports.anotherTask = anotherTask