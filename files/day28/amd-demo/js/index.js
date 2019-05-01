 // console.dir(require)
    // console.dir(define)

    // 数组里面放需要引入的所有模块， 不需要加.js后缀名
    // 先引入模块（模块的代码就会先执行），再执行回调的代码
    // 回调的形参按顺序接收模块的返回值
    // require(["js/a", "js/b"], function (a, Basic) {
    //   console.log("index");
    //   a.fn();
    //   var b = new Basic();
    //   b.init();
    // });

    // require(["js/a", "js/b"], function (a, b) {
    //   console.log("index");
    //   a.fn();
    //   // b.init();
    // });

    require(["config"], () => {
      // 已经加载了config
      require(["a", "b"], (a) => {
        a.fn();
      })
    })