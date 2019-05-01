define(function () {
  class Basic {
    constructor () {
      this.init();
    }
    init () {
      console.log("basic");
    }
  }
  return new Basic();
})